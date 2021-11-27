<html>
<head>
<title>Student Registration Form</title>

</head>
 
<body>
<table>
<?php 

		if( isset($_GET["id"]) ){
		$conn = mysqli_connect("localhost","root","","form");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
			if( !$conn ){
				die("Error".mysqli_connect_error());
			}else{
				$result = mysqli_query($conn,"SELECT * FROM students WHERE recipt = $_GET['id'] ;");
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){ //creating associative row
							//html code to display
							echo "<tr><td>fullname </td><td>$row['fullname']</td></tr>";
									
															
?>
</table>