 
 <?php
 session_start();
// define variables and set to empty values
$ageErr = $sgErr = $alErr = $baErr = $bgrErr = $buErr = $scErr = $sodErr = $potErr = $hemoErr = $pcvErr  = $htnErr = $appetErr = $peErr ="";
$age = $sg = $al = $ba = $bgr = $bu = $sc = $sod = $pot = $hemo = $pcv = $htn = $appet = $pe ="";
$count=100;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$count=0;
  if (empty($_POST["x1"])) {
    $ageErr = "Age is required";
   $count=$count+1;
  } else {
    $age = test_input($_POST["x1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$age)) {
      $ageErr = "Only digits allowed";
      $count=$count+1;
    }
    else{
    	if($age <1 || $age>120){
    		$ageErr="Invalid input";
    		$count=$count+1;
    	}
    }
  }
  if (empty($_POST["x2"])) {
  	$bgrErr = "bgr is required";
  	$count=$count+1;
  } else {
  	$bgr = test_input($_POST["x2"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9]*$/",$bgr)) {
  		$bgrErr = "Only digits allowed";
  		$count=$count+1;
  	}
  	else{
  		if($bgr <40 || $bgr>400){
  			$bgrErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  if (empty($_POST["x3"])) {
  	$buErr = "bu is required";
  	$count=$count+1;
  } else {
  	$bu = test_input($_POST["x3"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9]*$/",$bu)) {
  		$buErr = "Only digits allowed";
  		$count=$count+1;
  	}
  	else{
  		if($bu <3 || $bu>100){
  			$buErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  
  if (empty($_POST["x4"])) {
  	$scErr = "sc is required";
  	$count=$count+1;
  } else {
  	$sc = test_input($_POST["x4"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9 .]*$/",$sc)) {
  		$scErr = "Only decimal values allowed";
  		$count=$count+1;
  	}
  	else{
  		if($sc <0.2 || $sc>7){
  			$scErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  if (empty($_POST["x5"])) {
  	$sodErr = "sodium is required";
  	$count=$count+1;
  } else {
  	$sod = test_input($_POST["x5"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9]*$/",$sod)) {
  		$sodErr = "Only digits allowed";
  		$count=$count+1;
  	}
  	else{
  		if($sod <50 || $sod>190){
  			$sodErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  if (empty($_POST["x6"])) {
  	$potErr = "potassium is required";
  	$count=$count+1;
  } else {
  	$pot = test_input($_POST["x6"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9 .]*$/",$pot)) {
  		$potErr = "Only decimal values allowed";
  		$count=$count+1;
  	}
  	else{
  		if($pot <2 || $pot>10){
  			$potErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  if (empty($_POST["x7"])) {
  	$hemoErr = "hemoglobin is required";
  	$count=$count+1;
  } else {
  	$hemo = test_input($_POST["x7"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9 .]*$/",$hemo)) {
  		$hemoErr = "Only decimal values allowed";
  		$count=$count+1;
  	}
  	else{
  		if($hemo <3 || $hemo>20){
  			$hemoErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  if (empty($_POST["x8"])) {
  	$pcvErr = "pcv is required";
  	$count=$count+1;
  } else {
  	$pcv = test_input($_POST["x8"]);
  	// check if name only contains letters and whitespace
  	if (!preg_match("/^[0-9 .]*$/",$pcv)) {
  		$pcvErr = "Only decimal values allowed";
  		$count=$count+1;
  	}
  	else{
  		if($pcv <9 || $pcv>70){
  			$pcvErr="Invalid input";
  			$count=$count+1;
  		}
  	}
  }
  if (empty($_POST["x9"])) {
  	$sgErr = "sg is required";
  $count=$count+1;
  } else {
  	$sg = test_input($_POST["x9"]);
  }
  if (empty($_POST["x10"])) {
  	$alErr = "albumin is required";
  $count=$count+1;
  } else {
  	$al = test_input($_POST["x10"]);
  } 
  if (empty($_POST["x11"])) {
    $baErr = "bacteria is required";
   $count=$count+1;
  } else {
    $ba = test_input($_POST["x11"]);
  }

if (empty($_POST["x12"])) {
	$htnErr = "htn is required";
	$count=$count+1;
} else {
	$htn = test_input($_POST["x12"]);
}
if (empty($_POST["x13"])) {
	$appetErr = "appet is required";
	$count=$count+1;
} else {
	$appet = test_input($_POST["x13"]);
}

if (empty($_POST["x14"])) {
	$peErr = "pe is required";
	$count=$count+1;
} else {
	$pe = test_input($_POST["x14"]);
}

}

if($count==0){
	$_SESSION['age']=$age;
	$_SESSION['bgr']=$bgr;
	$_SESSION['bu']=$bu;
	$_SESSION['sc']=$sc;
	$_SESSION['sod']=$sod;
	$_SESSION['pot']=$pot;
	$_SESSION['hemo']=$hemo;
	$_SESSION['pcv']=$pcv;
	$_SESSION['sg']=$sg;
	$_SESSION['al']=$al;
	$_SESSION['ba']=$ba;
	$_SESSION['htn']=$htn;
	$_SESSION['appet']=$appet;
	$_SESSION['pe']=$pe;
	header("Location: knn.php");
}
include 'test1.php';
//print_r($error_array);
function test_input($data) {
  $data = trim($data);
  return $data;
}
?>

