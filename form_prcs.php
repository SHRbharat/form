
<?php
$error = "";//variable to store error msgs
$studentName = $dob = $email = $mobile = $gender = $add = $pin = $recipt = ""; //variables to store user inputs
//variables for sign_up status
$status_success = false;
$status_failed = false;

if( ($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["submit"]) ){
	if( (empty($_POST["First_Name"])) || (empty($_POST["Last_Name"])) || (empty($_POST["dob"])) || (empty($_POST["Email_Id"])) ){
		$error = "one or more fields are empty";	  
	}else{  
			save_details();
			generate_recipt();
			$conn = mysqli_connect("localhost","root","","form");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
			if( !$conn ){
				die("Error".mysqli_connect_error());
			}else{
				//store in database (user registered)
					if(mysqli_query($conn,"INSERT INTO students VALUES('$studentName','$dob','$email','$mobile','$gender','$add','$pin','$recipt')"){
						$status_success = true;
						header("location: display.php?id=$recipt"); //send  using GET method
					}else{
						$status_failed = true;
					}
				
			}
		}
	}

function generate_recipt(){
	global $recipt(),$studentName;
	$receipt = $studentName + rand(100,1000);
}

function save_details(){
	global $studentName,$dob,$email,$mobile,$gender,$add,$pin;
	
	$studentName = htmlspecialchars($_POST["First_Name"])." ".htmlspecialchars($_POST["Last_Name"]);
	$dob = htmlspecialchars($_POST["dob"]);
	$email = htmlspecialchars($_POST["Email_Id"]);
	$mobile = htmlspecialchars($_POST["Mobile"]);
	$gender = htmlspecialchars($_POST["Gender"]);
	$add = htmlspecialchars($_POST["Address"]).",".htmlspecialchars($_POST["City"]).",".htmlspecialchars($_POST["State"]);
	$pin = htmlspecialchars($_POST["Pin"]);
}
?>