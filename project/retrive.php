<!doctype html>
<html>
<head>
<title>retrive data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<div class="w3-teal">
<center><header><h1><b>Sinhgad Student Council</b></header></center></h1>
</div>



<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

<?php
	
	$con=mysql_connect("localhost","root","");
	if (!$con){
		die("Can not connect: ".mysql_error());
		
	}
	
	mysql_select_db("sudarshan",$con);
	$sql="SELECT Event_n,Event_date,Event_venue,Event_a,event.Event_id,student.stud_id,student.stud_name,student.stud_city,student.stud_add from event inner join student on event.Event_id=student.Event_id";
	$myData=mysql_query($sql,$con);
	
	echo"<table border=1>
	<tr>
	<th>Event_n</th>
	<th>Event_date</th>
	<th>Event_venue</th>
	<th>Event_a</th>
	<th>Event_id</th>
	<th>stud_id</th>
	<th>stud_name</th>
	<th>stud_city</th>
	<th>stud_add</th>
	<th>Image</th>
	
	</tr>";
	echo"Records Retrive Successfully<br><br>";
	
	while($record= mysql_fetch_array($myData))
	{
		
		echo"<tr>";
		echo"<td>".$record['Event_n']."</td>";
		echo"<td>".$record['Event_date']."</td>";
		echo"<td>".$record['Event_venue']."</td>";
		echo"<td>".$record['Event_a']."</td>";
		echo"<td>".$record['Event_id']."</td>";
		echo"<td>".$record['stud_id']."</td>";
		echo"<td>".$record['stud_name']."</td>";
		echo"<td>".$record['stud_city']."</td>";
		echo"<td>".$record['stud_add']."</td>";
		 
		echo"<tr>";
		
	
	}
	echo"</table><br>";
	mysql_close($con);
	
	
?>
<form action="dashboard.html">
<input type="submit"  value="Click me to Return">
<!--<button type="submit">Click me</button>-->
</form>


<!--<a href="dashboard.html"><button>Click me to Retrun</button></a>-->
</body>
<div class="w3-teal w3-padding-16">
<center><footer><b>Copyright &copy; Sinhgad Student Council</b></footer></center>
</div>
</html>
