<html>
<head>

<link rel="stylesheet" type="text/css" href="mystyle.css"   >
	<style type="text/css" >
		body{
		    background:#33CCFF;	
			background-image:url(airplane.jpg);
		    background-repeat:repeat-x;
		}
	    .styles{

	    	color: red;
	    	text-align: center;
	    }

	</style>
</head>
<body>
</br></br></br></br></br>
</br></br></br></br></br></br></br></br>

<h1 class="styles" >Welcome to Belview flight portals school</h1>
<input type="submit"value="Click to book for flight..." onclick="window.location='DbAirTicketPage.php?show=include' ">
<div id ="adiv"></div>
</body>
</html>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AirplaneTicketReservationDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


echo "welcome to indexpage";
echo $_POST['parameters'];
$dataRequest = $_POST['parameters'];
$userDetails = explode("%", $dataRequest);
$firstname = $userDetails[0];
$lastname = $userDetails[1];
$homeaddress = $userDetails[2].$userDetails[3];


$sql= "INSERT INTO frontenddb VALUES ('$firstname', '$lastname', '$nationality' ,'$homeaddress', 'sfsnj', '$destination', '$timeforflight', 'sfsdf', default)";

            //      if(mysqli_query($query)){

            //          echo "Data Submitted";
            //      }else{
            //      echo '...Data not submitted...';
            // }
                   

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// $destination=$userDetails[4];
// $timeforflight=$userDetails[5].$userDetails[6].$userDetails[7];







// include 'connection.php';

            
            



?>



