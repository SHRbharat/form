<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" href="form.css">
</head>
 
<body>
<table align="center" cellpadding = "10">
<?php 

		if( isset($_GET["id"]) ){
		$conn = mysqli_connect("localhost","root","","form");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
			if( !$conn ){
				die("Error".mysqli_connect_error());
			}else{
				$id = $_GET["id"];
				$result = mysqli_query($conn,"SELECT * FROM students WHERE recipt = '$id' ;");
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){ //creating associative row
							$firstName = $row['FirstName'];
							$lastname = $row['LastName'];
							$dob = $row['dob'];
							$mail = $row['email'];
							$mob = $row['mobile'];
							$gender = $row['gender'];
							$add = $row['addr'];
							$city = $row['city'];
							$state = $row['state'];
							$pin = $row['pin'];
							$rec = $row['recipt'];
							//html code to display
							echo "<tr><td>first NAme </td><td>'$firstName'</td></tr>
								  <tr><td>last name </td><td>'$lastname'</td></tr>
								  <tr><td>dob </td><td>'$dob'</td></tr>
								  <tr><td>email </td><td>'$mail'</td></tr>
								  <tr><td>mobile</td><td>'$mob'</td></tr>
								  <tr><td>gender </td><td>'$gender'</td></tr>
								  <tr><td>address </td><td>'$add'</td></tr>
								  <tr><td>city </td><td>'$city'</td></tr>
								  <tr><td>state </td><td>'$state'</td></tr>
								  <tr><td>pin</td><td>'$pin'</td></tr>
								  <tr><td>recipt </td><td>'$rec'</td></tr>";
						}
					}
				}
		}
?>
</table>
</body>
</html>