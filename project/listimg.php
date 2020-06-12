<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("admin");
$sql = "SELECT imageId FROM image ORDER BY imageId DESC"; 
$result = mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php
while($row = mysql_fetch_array($result)) {
?>
<img src="viewimg.php?image_id=<?php echo $row["imageId"]; ?>" /><br/>
<?php		
}
mysql_close($conn);
?>
</BODY>
</HTML>