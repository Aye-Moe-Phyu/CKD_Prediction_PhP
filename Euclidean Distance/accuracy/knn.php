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
<body>
<?php
$sql = "SELECT age, bgr, bu, sc, sod, pot, hemo, pcv, sg, al, ba, htn, appet, pe, class  FROM training";
$sql1 = "SELECT age, bgr, bu, sc, sod, pot, hemo, pcv, sg, al, ba, htn, appet, pe, class  FROM testing";
$res = mysqli_query($con, $sql);
$res1 = mysqli_query($con, $sql1);

for ($set = array (); $row = $res->fetch_assoc(); $set[] = $row);
for ($set1 = array (); $row1 = $res1->fetch_assoc(); $set1[] = $row1);
//print_r($set);


mysqli_close($con);



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
	$class[]=$item['class'];
}
//print_r($aa);
//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
foreach ($set1 as $item){
	$bb[]= $item['age'];
	$bb[]= $item['bgr'];
	$bb[]= $item['bu'];
	$bb[]= $item['sc'];
	$bb[]= $item['sod'];
	$bb[]= $item['pot'];
	$bb[]= $item['hemo'];
	$bb[]= $item['pcv'];
	$bb[]= $item['sg'];
	$bb[]= $item['al'];
	$bb[]= $item['ba'];
	$bb[]= $item['htn'];
	$bb[]= $item['appet'];
	$bb[]= $item['pe'];
	$class1[]=$item['class'];
}
//print_r($class1);
//print_r($bb);
$t=0;
$f=0;
for($k=0;$k<100;$k++){
for($j=0;$j<300;$j++){
		for($i=0;$i<14;$i++){
	
			$result[$i]=($bb[$i+(14*$k)]-$aa[$i+(14*$j)])*($bb[$i+(14*$k)]-$aa[$i+(14*$j)]);
			$a=array_sum($result);
		}
		$c0=number_format((float)sqrt($a),2,'.','');
		
		//echo "Result". $b++."=".$c0. "\n";
		$total[$j]=$c0;
		echo "<pre>";
}



asort($total);
//print_r($total);
//print the first 5 values
//echo "List of 20 lowest : ";
$l=0;
foreach ($total as $key => $val) {
	if($l < 19) {
		$lowest[$l]=$key+1;
		$l=$l+1;
	}

}


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

if($ck>$nck){ 
	if("ckd"==$class1[$k]){
			$t=$t+1;
			}else{
				$f=$f+1;
			}
}
else {
	if("notckd"==$class1[$k]){
		$t=$t+1;
		}
		else{
		$f=$f+1;
}
}

}
echo "Correct!".$t."\n";
echo "Incorrect!".$f;
?>

</body>
</html>

