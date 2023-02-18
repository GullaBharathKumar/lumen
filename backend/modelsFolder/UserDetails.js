const mongoose = require('mongoose');


const UserSchema = new mongoose.Schema({
    id : {type: Number , required : true },
    Name : {type: String , required : true},
    Email : {type:String , required : true},
    PhoneNo : {type:String ,required : true},
    password : {type:String , required : true}
});



const UserDetails = mongoose.model('UserDetails' , UserSchema);
module.exports = UserDetails;