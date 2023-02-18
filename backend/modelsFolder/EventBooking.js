const mongoose = require('mongoose');


const EventSchema = new mongoose.Schema({
    id : {type:Number , required : true },
    EventName : {type:String , required : true},
    EventDate : {type:Date,required : true},
    EventDescription : {type:String , required : true},
    OrganiserEmail : {type:Email , required : true},
    OrganiserPhoneNo : {type: String} , 
    SeatingCapacity : {type:Number , required : true },
    Location : {type:String , required : true},
    EventType : [{type:String, required : true },{type:String, required : true }]
})



const EventDetails = mongoose.model('EventDetails' , EventSchema);
module.exports = EventDetails;