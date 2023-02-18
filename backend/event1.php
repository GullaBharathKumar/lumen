<!DOCTYPE html>
<html>
    <head>
        <title>Event Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Event Management System</h1>
        </div>
        <div class="main">
            <form action="newinsert1.php" method="post">
                <h2 style="color:yellowgreen">Create an Event</h2>
                <label for="event_name">Event Name:</label>
                <input type="text" name="event_name">
                <label for="event_date">Event Date:</label>
                <input type="date" name="event_date">
                <label for="event_time">Event Time:</label>
                <input type="time" name="event_time">
                <label for="event_location">Event Location:</label>
                <input type="text" name="event_location">
                <input type="submit" value="Create Events">
            </form>
        </div>
    </body>
</html>