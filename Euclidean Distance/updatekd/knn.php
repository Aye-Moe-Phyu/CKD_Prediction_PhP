<?php

$host="localhost";
$user="root";
$password="";
$db_name="kidney_disease";
$con=mysqli_connect($host,$user,$password,$db_name) or die("can't select db");

// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body bgcolor="#E6E6FA">
<div id="header">
<div>
<a href="index.html" id="logo"><img src="images/logo1.jpg" alt="logo"></a>
<ul>
<li>
<a href="home.html">Home</a>
</li>
<li>
<a href="symptons.html">Symptons</a>
</li>
<li class="selected">
<a href="test1.html">Test</a>
</li>
<li>
<a href="treat.html">Treatment</a>
</li>
<li>
<a href="prev.html">Prevention</a>
</li>
</ul>
</div>
</div>
<div id="body" class="contact">
<h1>
<?php
$sql = "SELECT age, bgr, bu, sc, sod, pot, hemo, pcv, sg, al, ba, htn, appet, pe, class  FROM updatesymp";
$res = mysqli_query($con, $sql);

for ($set = array (); $row = $res->fetch_assoc(); $set[] = $row);
//print_r($set);


mysqli_close($con);

session_start();
$num1[0]=$_SESSION['age'];
$num1[1]=$_SESSION['bgr'];
$num1[2]=$_SESSION['bu'];
$num1[3]=$_SESSION['sc'];
$num1[4]=$_SESSION['sod'];
$num1[5]=$_SESSION['pot'];
$num1[6]=$_SESSION['hemo'];
$num1[7]=$_SESSION['pcv'];
$num1[8]=$_SESSION['sg'];
$num1[9]=$_SESSION['al'];
$num1[10]=$_SESSION['ba'];
$num1[11]=$_SESSION['htn'];
$num1[12]=$_SESSION['appet'];
$num1[13]=$_SESSION['pe'];


//print_r($num1[13]);

foreach ($set as $item){
	$aa[]= $item['age'];
	$aa[]= $item['bgr'];
	$aa[]= $item['bu'];
	$aa[]= $item['sc'];
	$aa[]= $item['sod'];
	$aa[]= $item['pot'];
	$aa[]= $item['hemo'];
	$aa[]= $item['pcv'];
	$aa[]= $item['sg'];
	$aa[]= $item['al'];
	$aa[]= $item['ba'];
	$aa[]= $item['htn'];
	$aa[]= $item['appet'];
	$aa[]= $item['pe'];
}
//print_r($aa);
$b=1;
for($j=0;$j<count($set);$j++){
		for($i=0;$i<count($num1);$i++){
	
			$result[$i]=($num1[$i]-$aa[$i+(14*$j)])*($num1[$i]-$aa[$i+(14*$j)]);
			$a=array_sum($result);
		}
		$c0=number_format((float)sqrt($a),2,'.','');
		
		//echo "Result". $b++."=".$c0. "\n";
		$total[]=$c0;
		echo "<pre>";
}



asort($total);
//print_r($total);
//print the first 5 values
//echo "List of 20 lowest : ";
$l=1;
foreach ($total as $key => $val) {
	if($l<21){
		$lowest[]=$key+1;
		$l++;
	}

}
//print_r($lowest);
//print_r(array_slice($total, 0, 20));
//echo count($rr);
//$c=1;
//for($k=0;$k<20;$k++){
//echo "Lowest". $c++."=".array_slice($total, 0, 20)."\n";
//}
//echo "<br>";

//$index = array_search(min($total), $total);
//$in=$index+1;
//echo "Index of Min Value=".$index."\n";
foreach($set as $item){
	$class[]=$item['class'];
}
//print_r($class);
$ck=0;
$nck=0;
foreach($lowest as $key => $val){
	//echo "Class=".$class[$val-1]."\n";
	if($class[$val-1]=="ckd"){
		$ck++;
	}else {
		$nck++;
	}
}
//echo $ck."\n";
//echo $nck;
if($ck>$nck){
	?>
	 <font color="red" size="6">  <?php 
	echo "The patient has kidney disease!";?>
	</font> <br><br>
	<?php
}
else {?>
 <font color="red" size="6"> <?php 
	echo "The patient does not have kidney disease!";?>
	</font><?php 
}
?>
</h1><br><br>
<a href="checkempty.php"><input type="submit" value="Back" size="20"></a>
<?php 
if($ck>$nck){

?>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="images/sad.png" alt=""> 
<?php 
}
else {?>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="images/happy.gif" alt=""> 
<?php 
}?>


</div>
<div id="footer">
<div>
<div class="connect">
<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a> <a href="http://www.freewebsitetemplates.com/misc/contact" id="contact">contact</a> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
</div>
</div>
</div>
</body>
</html>


