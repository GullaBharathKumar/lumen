
const router = require('express').Router();
const User = require('../models/Users');

router.post('/register', async (req,res)=>{

    try{
        const newUser = new User({
            email:req.body.email,
            phone:req.body.phone,
            password:req.body.password
        })
        const user  = await newUser.save();
        res.status(200).json(user);
    }catch(err){
     res.status(500).json(err)
    }
})
module.exports = router;