<!doctype html>
<html>
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
			  <div id="upbottondash" ><a href="message.php">View Message</a></div>
			  <div id="upbottondash" style="background-color:#04477e"><a href="createcomplaint.php">Create Message</a></div>
			  <div style="clear: both"></div>
			  <div id="complainbodymain">
			    <form id="form1" name="form1" method="post">
			      <label for="textfield2">Message ID:</label>
		          <br>
<input type="text" name="textfield2" id="textfield2xcv">
<br>
			    <label for="textfield">Subject:<br>
			      </label>
                <input type="text" name="textfield" id="textfield2xcv">
                <br>
                <label for="textarea">Details:</label>
                <br>
                <textarea name="textarea" id="textfield2xcvwe"></textarea>
                <br>
                Send complain to:
			    <br>
			    <select name="select" id="textfield2xcv">
			      <option value="Prof. Emmanuel">Prof. Emmanuel</option>
			      <option value="Drtunji">Dr. Tunji</option>
			      <option value="profngozi">Prof. Ngozi</option>
                </select>
			    <br>
			    <br>
			    <input type="submit" name="submit" id="submit1235" value="Submit Message">
			    </form>
			  </div>
	  </div>
  	</div>
  </div>
</div>
</body>
</html>