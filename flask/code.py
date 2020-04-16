from flask_api import status
from datetime import datetime
from flask import Flask, render_template,jsonify,request,abort
#from flask_sqlalchemy import SQLAlchemy
#import requests
import pandas as pd
import numpy as np
from sklearn import model_selection
from sklearn.tree import DecisionTreeClassifier
from sklearn import svm
from sklearn.naive_bayes import GaussianNB
from sklearn.ensemble import RandomForestClassifier
from numpy.core.umath_tests import inner1d
from sklearn.externals import joblib

app = Flask(__name__)

def feature_fetch(season,team1, team2):
   # print(playerDF['is_bowler'])
    t1df=playerDF[ playerDF['Team_'+str(int(season))]==int(team1)]
    t2df=playerDF[ playerDF['Team_'+str(int(season))]==int(team2)]
    t1playersid=list(t1df.loc[:,'Player_Id'])
    t1playersm=list(t1df.loc[:,"MPlayed_"+str(int(season-1))])
    t2playersid=list(t2df.loc[:,'Player_Id'])
    t2playersm=list(t2df.loc[:,"MPlayed_"+str(int(season-1))])
    t1bowlerid=list(t1df[t1df['is_bowler']==1].loc[:,'Player_Id'])
    t1bowlerm=list(t1df[t1df['is_bowler']==1].loc[:,"MPlayed_"+str(int(season-1))])
    t2bowlerid=list(t2df[t2df['is_bowler']==1].loc[:,'Player_Id'])
    t2bowlerm=list(t2df[t2df['is_bowler']==1].loc[:,"MPlayed_"+str(int(season-1))])
    #print(t2playersid,t2playersm)
    t1 = list(zip(([int(x) for x in t1playersid]),([int(x) for x in t1playersm])))
    t2 = list(zip(([int(x) for x in t2playersid]),([int(x) for x in t2playersm])))
    t1b = list(zip(([int(x) for x in t1bowlerid]),([int(x) for x in t1bowlerm])))
    t2b = list(zip(([int(x) for x in t2bowlerid]),([int(x) for x in t2bowlerm])))
    t1=Sort_Tuple(t1)
    t2=Sort_Tuple(t2)
    t1b=Sort_Tuple(t1b)
    t2b=Sort_Tuple(t2b)
        
    t1pxi=t1b[0:5]
    [t1.remove(x) for x in t1pxi]
    t1pxi+=t1[0:6]
    t2pxi=t2b[0:5]
    [t2.remove(x) for x in t2pxi]
    t2pxi+=t2[0:6]
    t1pxi=[x[0] for x in t1pxi]
    t2pxi=[x[0] for x in t2pxi]
    #print(t1pxi,t2pxi)
    runst1=[]
    runst2=[]
    for i in range(11):
        pDF=bowlerwiseDF[bowlerwiseDF['Player_Id']==t1pxi[i]]
        runs1=[]
        for j in range(11):
            runs1+=list(zip(list(pDF.loc[:,"B"+str(t2pxi[j])+"runs"]),list(list(pDF.loc[:,"B"+str(t2pxi[j])+"balls"]))))
        runst1+=(runs1)
    for i in range(11):
        pDF=bowlerwiseDF[bowlerwiseDF['Player_Id']==t2pxi[i]]
        runs2=[]
        for j in range(11):
            runs2+=list(zip(list(pDF.loc[:,"B"+str(t1pxi[j])+"runs"]),list(list(pDF.loc[:,"B"+str(t1pxi[j])+"balls"]))))
        runst2+=(runs2)
    return [runst1,runst2]


def features():
    #print("Generating Features")
    data = pd.DataFrame()
    pos = 0
    totalSize=len(cleanedDF)
    for index,row in cleanedDF.iterrows():
        #print("Processing data...( %d %% done)" % int(pos*100/totalSize) )
        matchId =int( row['match_id'])
        data.loc[pos,"matchId"] = matchId
        Season = int(row['Season_Year'])
        data.loc[pos,"Season_Year"] = Season
        team1 = int(row['Team1'])
        data.loc[pos,"team1"] = team1
        team2 = int(row['Team2'])
        data.loc[pos,"team2"] = team2
        City_Name = int(row['City_Name'])
        data.loc[pos,"City_Name"] = City_Name
        Toss_Winner = int(row['Toss_Winner'])
        data.loc[pos,"Toss_Winner"] = 0 if Toss_Winner==team1 else 1
        Toss_Name = int(row['Toss_Name'])
        data.loc[pos,"Toss_Name"] = Toss_Name

        
        a=0
        for i in feature_fetch(Season,team1,team2):
            a+=1
            b=0
            c=[]
            for j in i:
                b+=1
                c.append(j[0]/j[1] if j[1] else 0)
            data.loc[pos,"feature"+str(b)+"runs"+str(a)] = sum(c)/len(c)
        match_winner = int(row['match_winner'])
        data.loc[pos,"match_winner"] = 0 if match_winner==team1 else 1
        pos=pos+1
    #data.to_csv("../data/matchbowlerwise.csv",sep=',')
    #print("Done")



def return_entry():
    try:
        season = E1.get()
        team1=getTeamId(E2.get())
        team2=getTeamId(E3.get())
        toss_winner=getTeamId(E4.get())
        toss_decision=getTossDecision(E5.get())
        city=getVenueId(E6.get())
        arr=[season,team1,team2,city,toss_winner,toss_decision]
        #print(arr)
        L0.configure(text = "Winner: " +str(getTeamName(predict(int(season),int(team1),int(team2),int(city),int(toss_winner),int(toss_decision),loaded_model))))
    except:
        L0.configure(text = "Wrong Details ")
    
def getTeamId(name):
    return (list((teamsDF[(teamsDF["Short_Form"] == name)]).loc[:,'Team_Id'])[0]) if len(list((teamsDF[(teamsDF["Short_Form"] == name)]).loc[:,'Team_Id'])) else 0


def getVenueId(name):
    return (list((venueDF[(venueDF["City_Name"] == name)]).loc[:,'vid'])[0]) if len(list((venueDF[(venueDF["City_Name"] == name)]).loc[:,'vid'])) else 0


def getTossDecision(name):
    if ( name=="BAT"):
        return 0
    else:
        return 1
    
    
def getTeamName(name):
    return (list((teamsDF[(teamsDF["Team_Id"] == name)]).loc[:,'Short_Form'])[0]) if len(list((teamsDF[(teamsDF["Team_Id"] == name)]).loc[:,'Short_Form'])) else 0


def Sort_Tuple(tup):

    # reverse = None (Sorts in Ascending order)  
    # key is set to sort using second element of  
    # sublist lambda has been used  
    return(sorted(tup, key = lambda x: x[1],reverse=1))




@app.route("/server/<x>",methods=["POST"])

def predict(x):

    x=x.split('-')
    season=int(x[0])
    #team1=x[1]
    #team2=x[2]
    #city=x[3]
    #tw=x[4]
    #tn=x[5]
    
    team1=getTeamId(x[1])
    team2=getTeamId(x[2])
    tw=getTeamId(x[3])
    tn=getTossDecision(x[4])
    city=getVenueId(x[5])

    data=[tw,tn,city]
    a=0
    for i in feature_fetch(season,team1,team2):
        a+=1
        b=0
        c=[]
        for j in i:
            b+=1
            c.append(j[0]/j[1] if j[1] else 0)
        #print(sum(c)/len(c))
        data.append(sum(c)/len(c))
    #print(data)
    predictions = loaded_model.predict([data])
    return str(x[1]) if predictions[0]==0 else str(x[2])








if __name__ == '__main__':

    cleanedDF = pd.read_csv('match_cleaned.csv')
    playerDF = pd.read_csv('player.csv')
    bowlerwiseDF = pd.read_csv('bowlerwise.csv')
    teamsDF = pd.read_csv('Team.csv')
    venueDF = pd.read_csv('venue.csv')
    matchbowlerwiseDF = pd.read_csv('matchbowlerwise.csv')
    loaded_model = joblib.load('finalized_model.sav')
    #ft_weights = pd.DataFrame(loaded_model2.feature_importances_)
    app.run()