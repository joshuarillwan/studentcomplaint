<!doctype html>
<html>
<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:index.php");
    
    
    $conn=mysqli_connect("localhost","root","","studentdb");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn, "studentdb");
    
    $u_id=$_SESSION['u_id'];
        
        $result=mysqli_query($conn,"SELECT u_id FROM studentuser where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $a_no=$q2['a_no'];
    
        $result1=mysqli_query($conn,"SELECT u_name FROM studentuser where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result1);
        $u_name=$q2['u_name'];
    
    
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        
        $Faculty=$_POST['Faculty'];
        $Department=$_POST['Department'];
        $lecturer=$_POST['lecturer'];
        $description=$_POST['description'];
        
        
    if($var>=0)
    {
          
      $comp="INSERT into complaint (Faculty,Department,lecturer,description) values('$Faculty','$Department','$lecturer','$description')";
      mysqli_select_db($conn,"studentdb"); 
      $res=mysqli_query($conn,$comp);
      
      if(!$res)
      {
        $message1 = "Complaint already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          $message = "Complaint Registered Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
    else
    {
     $message = "Enter Valid Date";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}
?>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/layout.css">
<link rel="icon" href="jpg/lag.png" type="image/icon type">
<style type="text/css">
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #0426AB;
}
</style>
<title>Welcome To University Of Lagos</title>
</head>

<body>

<div id="parentdashboard"><br>
  <div id="dashname">
  	<div id="dashlogo"><img src="jpg/UNILAG LOGO.png" width="" height="" alt=""/></div>
  	<div id="dashmainname"> Welcome<br>
    Student X</div>
  	<div style="clear: both"></div>
  	<div id="dashcontent">
  	  
  	  <?php
		require_once"divbutton.php";
		?>
  	  <div style="clear: both"></div>
  			<div id="comtitle"> <strong>&nbsp; &nbsp;Complaint Page</strong></div>
  			<div id="complainbody">
			  <div id="upbottondash" ><a href="complain.php">View Complaint</a></div>
			  <div id="upbottondash" style="background-color:#04477e"><a href="createcomplaint.php">Create Complaint</a></div>
			  <div style="clear: both"></div>
			  <div id="complainbodymain">
			    <form id="form1" name="form1" method="post">
               
				Faculty
                    <select  id="textfield2xcv" name="Faculty">
						<?php
                        $loc=mysqli_query($conn,"select location from schoolfaculties");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					
				    </select>
			    <br>
				Department
                    <select  id="textfield2xcv" name="Department">
						<?php
                        $loc=mysqli_query($conn,"select location from schoolfaculties");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					
				    </select>
					<br>
					Lecturer
                    <select  id="textfield2xcv" name="lecturer">
						<?php
                        $loc=mysqli_query($conn,"select location from schoolfaculties");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					
				    </select>
					<br>
					<label for="textarea">What is your complain:</label>
                <br>
                <textarea  name="description"  onfocusout="f1()"  name="textarea"  id="textfield2xcvwe"></textarea>
                <br>
			    <input type="submit" name="s" id="submit1235" value="Submit Complaint">
				
			    </form>
			  </div>
	  </div>
  	</div>
  </div>
</div>
</body>
</html>