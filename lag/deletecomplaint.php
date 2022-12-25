<!doctype html>
<html>
<?php
    session_start();
    
    $conn=mysqli_connect("localhost","root","","studentdb");
	if(!isset($_GET['id'])){
		$id=$_GET['id'];
		$delete=mysqli_query($conn,"DELETE FROM complaint WHERE id='$id'");
	}

    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"studentdb");
    
    
    if(!isset($_SESSION['x']))
        header("location:index.php");
    
    
    $u_id=$_SESSION['u_id'];
    
        
    $query="select c_id,description,com_status from complaint natural join studentuser where  u_id='$u_id'";
    $result=mysqli_query($conn,$query);

	

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
.button{
	background: red;
	color: red;
	font-size:1.2em;
	padding: 2px 25px;
	text-decoration: none;
}
.button:hover{
	background: red;
	color: #fff;
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
			  <div id="upbottondash" ><a href="#.php">View Complaint</a></div>
			  <div id="upbottondash"><a href="createcomplaint.php">Create Complaint</a></div>
			  <div id="upbottondash" style="background-color:#04477e"><a href="deletecomplaint.php">Delete Complaint</a></div>
			  <div style="clear: both"></div>
			  <div id="complainbodymain">
			    <table width="100%" border="1">
			      <tbody>
			        <tr>
			         
					  <th  width="10%" scope="col">Complain Id</th>
                    <th width="45%" scope="col">Description</th>
                    <th width="10%" scope="col">Complain Status</th>
					<th width="10%" scope="col">Delete</th>
		            </tr>
			        <tr>
					<?php
              while($rows=mysqli_fetch_assoc($result)){
            ?> 
             <tbody style="background-color: white; color: black;">
              <tr>
                <td><?php echo $rows['c_id']; ?></td>
                <td><?php echo $rows['description']; ?></td>         
                <td><?php echo $rows['com_status']; ?></td>
				<td><a href= 'deletecomplaint.php?id=".$rows['c_id']." ' class='button'>Delete<//a></td>

              </tr>
             </tbody>
            <?php
              } 
            ?>
		            </tr>
			        
		          </tbody>
		        </table>
			  </div>
	  </div>
  	</div>
  </div>
</div>
</body>
</html>