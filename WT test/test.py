# Import the necessary modules for development
import time
import unittest
import selenium
from selenium import webdriver

# Invoke a new Chrome Instance
ff_driver = webdriver.Chrome('chromedriver.exe')

# Blocking wait of 30 seconds in order to locate the element
ff_driver.implicitly_wait(30)
ff_driver.maximize_window()

# Open the required page
ff_driver.get("http://localhost")

# Sleep for 10 seconds in order to see the results

time.sleep(10)

login = ff_driver.find_element_by_link_text('LOGIN')

login.click()

time.sleep(2)

user = ff_driver.find_element_by_xpath("//input[@type='email']")
password = ff_driver.find_element_by_xpath("//input[@type='password']")


user.send_keys('aniket@anikett.com')
password.send_keys('12345678901')

time.sleep(2)

submit = ff_driver.find_element_by_xpath("//button[@type='submit']")

submit.click()

time.sleep(2)

season = ff_driver.find_element_by_xpath("//select[@name='season']")

time.sleep(1)

option = season.find_element_by_name("2018")

time.sleep(1)

option.click()

submit = ff_driver.find_element_by_name("submit")

submit.click()

time.sleep(5)

logout = ff_driver.find_element_by_link_text('Logout')

logout.click()


time.sleep(10)

# Close the Browser instance
ff_driver.close()