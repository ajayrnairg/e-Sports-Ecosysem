<!DOCTYPE html>
<html>
  
<head>
    <title>Verification Page</title>
</head>
  
<body>
        <?php
  	$servername="localhost";
	$username="root";
	$password="";
	$db="fitness";
    $conn = mysqli_connect($servername,$username,$password,$db);
          
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
          
        $username = $_POST['email'];
	    $Pw = $_POST['password'];
        $username=stripcslashes($username);
        $Pw=stripcslashes($Pw);	
        $username=mysqli_real_escape_string($conn,$username);
        $Pw=mysqli_real_escape_string($conn,$Pw);  

        $sql="SELECT COUNT(Email) FROM signup WHERE Email='$username' AND ConfirmPassword='$Pw'";
        // $result=mysqli_query($conn,$sql);
        // $count=mysqli_num_rows($result);
        // print $count;
        
        if($sql==1)
        {
            header('location: mode.php'); 
        }
        else{
            header('location: mode.php');
        }
        mysqli_close($conn);
        ?>
</body>
  
</html>