<!doctype html>
<html>
<head>
	
<?php

    
if(isset($_POST['s']))
{
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","","studentdb");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn, "studentdb");
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $staffid=$_POST['staffid'];
        $pass=$_POST['password'];
		$u_id=$_POST['staffid'];
        $_SESSION['u_id']=$u_id;
        $result=mysqli_query($conn,"SELECT u_id,u_pass FROM lectureruser where u_id='$staffid' and u_pass='$pass' ");
       
          
   
        
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          
             
        }
        else 
        {
          header("location:lecturerdashboard.php");
          
        }
    }                
}
?> 
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/layout.css">
<link rel="icon" href="jpg/lag.png" type="image/icon type">
<script>
     function f1()
        {
            var sta2=document.getElementById("staffid").value;
            var sta3=document.getElementById("exampleInputPasswordxc").value;
          var x2=sta2.indexOf(' ');
var x3=sta3.indexOf(' ');
    if(sta2!="" && x2>=0){
    document.getElementById("staffid").value="";
    document.getElementById("staffid").focus();
      alert("Space Not Allowed");
        }
        else if(sta3!="" && x3>=0){
    document.getElementById("exampleInputPasswordxc").value="";
    document.getElementById("exampleInputPasswordxc").focus();
      alert("Space Not Allowed");
        }

}
    </script>
    <style type="text/css">
#staffid{width:300px; height: 30px; border:none; background-color: #0059a5; color: #fff;  text-indent: 10px; margin-left: 40px}
}
</style>
<title>Welcome To University Of Lagos</title>
</head>

<body>

<div id="parent"><br><div id="schoollogo"><img src="jpg/UNILAG LOGO.png" width="" height="" alt=""/></div>
	<center>
	  <strong><font color="#fff">Student Complain Portal <br> (Lecturer Portal)</font></strong>
	</center>
  <div id="formdvi">
		<form id="form1" name="form1" method="post">
		  <p>
		    <input type="text" name="staffid" id="staffid"   placeholder="Staff ID">
		    
	      </p>
		  <p>
		    <input type="password" name="password" id="passwordxc"   placeholder="Password">
		  </p>
		  <p>
		    <input type="submit" id="logindiv"  name="s" onclick="f1()" value="Submit">
		  </p>
		</form>
	</div>
	
</div>
</body>
</html>