<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "Madhu@1044";
            $dbname = "registers";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
                $username = $_POST['username'];
                $pwd = $_POST['pwd'];

                $sql = "SELECT username, pwd FROM register where username='$username' and pwd = '$pwd' ";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<h1> You successfully loged in
                    .Hello Welcome";
                  }
                } else {
                  echo "Incorrect Username or password";
                }
                $conn->close();
                ?>
        </body>
        </html>