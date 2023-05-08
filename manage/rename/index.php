<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>ClosetsToGo</title>
	<meta name="description" content="home description">
	<link href="./app.css" rel="stylesheet"></head>

<body>
<a href="modals">modals</a>
<br/>
<table cellspacing="10"  style="margin-left:80px;">
<?php
$dir    = './';
$files = scandir($dir);
$i = 1;
foreach($files as $key => $val){
	if($val != "index.php"){
		echo "<tr>";
		//echo "<td>".$i."</td>";
		echo "<td><a target='_blank' href=".$val.">".$val."</a></td>";
		
		$tmp = explode('.', $val);
		//echo "<td>".$tmp[0]."</td>";
		//echo "<td>".$tmp[1]."</td>";
		$new_name =  $i.".".$tmp[1];
		echo "<td>".$new_name."</td>";
		
		echo "</tr>";
		
		//rename($val,$new_name);


		$i++;
		
		
	}
}

?>
</table>
<br /><br />

</body>
</html>
