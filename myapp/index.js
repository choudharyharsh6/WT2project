const express = require('express');
const app = express();

app.get('/api/x', (req, res) => {
    res.send('Hello World!')
  });
app.post('/', (req, res) => {
    res.send('Got a POST request')
  });


  app.listen(3000, () => console.log('Listening on port 3000....'));