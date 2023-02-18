const mongoose = require('mongoose');


const SeatSchema = new mongoose.Schema({
    id : {type:Number , required : true },
    ParticipantName : {type:String , required : true},
    EventName : {type:String , required : true},
    EventDate : {type:Date,required : true},
    PhoneNo: {type:String , required : true},
    Email : {type:Email , required : true},
    Quantity : {type:Number , required : true },

})



const BookingDetails = mongoose.model('BookingDetails' , SeatSchema);
module.exports = BookingDetails;