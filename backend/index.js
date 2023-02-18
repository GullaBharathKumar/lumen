<<<<<<< HEAD
const express = require('express');
const app = express();
const mongoose = require('mongoose');
const dotenv = require('dotenv');
const authRoute = require('./routesfloder/auth');

dotenv.config();
// app.use(express.json());

mongoose.connect(process.env.MONOGO_URL,{
    useNewUrlParser:true,
    useUnifiedTopology:true,
}).then(console.log("mongo connected")).catch((err)=>{console.log(err)});

app.use('/api/auth',authRoute);

app.listen(5000,()=>{
    console.log("successful server connection ")
})
=======
const express = require('express');
const app = express();
const mongoose = require('mongoose');
const dotenv = require('dotenv');
const authRoute = require('./routesfloder/auth');

dotenv.config();
// app.use(express.json());

mongoose.connect(process.env.MONOGO_URL,{
    useNewUrlParser:true,
    useUnifiedTopology:true,
}).then(console.log("mongo connected")).catch((err)=>{console.log(err)});

app.use('/api/auth',authRoute);

app.listen(5000,()=>{
    console.log("successful server connection ")
})
>>>>>>> 346a51f727db35d17386066044c03684478270d4
