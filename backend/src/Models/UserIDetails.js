const mongoose = require('mongoose');


const UserSchema = new mongoose.Schema({
    id : {Number , required : true },
    Name : {string , required : true},
    Email : {Email , required : true},
    PhoneNo : string , 
    password : {string , required : true}
})

const UserDetails = mongoose.model('UserDetails' , UserSchema);
module.exports = UserDetails;