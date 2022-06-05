<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    <center>
        <?php
  	$servername="localhost";
	$username="root";
	$password="";
	$db="fitness";
    $conn = mysqli_connect($servername,$username,$password,$db);
          
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $DOB = $_REQUEST['birthday'];
	    $Disease_Type = $_POST['diseasetype'];
        $Medication= $_POST['medlist'];
	    $Password = $_REQUEST['password'];
        $Confirm_Password = $_REQUEST['psw-repeat'];	
          
        if(!preg_match ("/^[a-zA-z]*$/", $fname)){  
           echo "Only alphabets are allowed."; }
        if(!preg_match ("/^[a-zA-z]*$/", $lname)){  
           echo "Only alphabets are allowed."; }

        if(!($Password==$Confirm_Password))
        {
            echo "Password Do not Match";
        }


        $sql =("INSERT INTO signup VALUES ('$fname', 
            '$lname','$email','$DOB','$Disease_Type','$Medication','$Password','$Confirm_Password')");
        $conn->commit();
        error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
        if(mysqli_query($conn, $sql)){
            header('Location:login page.php');            
        } else{
            echo "Email Id Exists!";
        }
          
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>