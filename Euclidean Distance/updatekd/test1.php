<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html" id="logo"><img src="images/logo1.jpg" alt="logo"></a>
			<ul>
				<li>
					<a href="home.html">Home</a>
				</li>
				<li>
					<a href="symptons.html">Symptoms</a>
				</li>
				<li class="selected">
					<a href="checkempty.php">Test</a>
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
	<div id="body" class="blog">
		<h1><font color="0eb92a">Please Fill the following to Test!</font></h1><br>
	<!-- <?php echo $count;	?> -->

 <!--  <?php switch($count){
	case ($count==0) : ?><form method="post" action="knn.php">
	<?php case ($count=="aa"): ?><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php case ($count!=0) : ?><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php } ?>-->
    <form method="post" <?php if($count==0){?> action="knn.php"
        <?php } elseif($count!=0){?> action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" <?php } else {?>
        action="knn.php"<?php } ?>> 
         
			
		<table style="width:100%"><tr><td width="50%">
	<table cellspacing="27px" border="0"  align="center" bgcolor="25c88f">
	<tr><td width="20%"><img src="images/age.jpg" alt=""></td>
				<td width="30%">Age(age in years)<br>(1~120)</td>
				<td width="30%">	
				<input type="text" placeholder="Enter your age:" name="x1" value="<?php echo $age;?>" maxlength="30" size="20">
				<span class="error">* <font color="red"><?php echo $ageErr;?></font></span></td>
			</tr>
			
			<tr><td width="30%"><img src="images/bgr.jpg" alt=""></td>
			<td width="30%">Blood Glucose(bgr in mgs/dl)<br>(40~400)</td>
				<td width="30%"><input type="text" placeholder="eg.140,110,etc..." name="x2" value="<?php echo $bgr;?>" maxlength="30" size="20">
				<span class=
				
				"error">** <font color="red"><?php echo $bgrErr;?></font></span></td>
			</tr>
			
			
			<tr><td width="30%"><img src="images/bu.png" alt=""></td>
			<td width="30%">Blood Urea(bu in mgs/dl)<br>(3~100)</td>
				<td width="30%"><input type="text" placeholder="eg.36,22,etc..." name="x3" value="<?php echo $bu;?>" maxlength="30" size="20">
				<span class="error">** <font color="red"><?php echo $buErr;?></font></span></td>
			</tr>
			<tr><td width="30%"><img src="images/serum.jpg" alt=""></td>
			<td width="30%">Serum Creatinine(sc in mgs/dl)<br>(0.2~7)</td>
				<td width="30%"><input type="text" placeholder="eg.2.2,1.1,etc..." name="x4" value="<?php echo $sc;?>" maxlength="30" size="20">
				<span class="error">** <font color="red"><?php echo $scErr;?></font></span></td>
			</tr>
			
			<tr><td width="30%"><img src="images/sodium.jpg" alt=""></td>
			<td width="30%">Sodium(sod in mEq/L)<br>(50~190)</td>
				<td width="30%"><input type="text" placeholder="eg,110,135,etc..." name="x5" value="<?php echo $sod;?>" maxlength="30" size="20">
				<span class="error">* <font color="red"><?php echo $sodErr;?></font></span></td>
			</tr>
			<tr><td width="30%"><img src="images/pot.jpg" alt=""></td>
			<td width="30%">Potassium(pot in mEq/L)<br>(2~10)</td>
				<td width="30%"><input type="text" placeholder="eg.6.5,4.2,etc..." name="x6" value="<?php echo $pot;?>" maxlength="30" size="20">
				<span class="error">* <font color="red"><?php echo $potErr;?></font></span></td>
			</tr>
			
			<tr><td width="30%"><img src="images/hemo.jpg" alt=""></td>
			<td width="30%">Hemoglobin(hemo in gms)<br>(3~20)</td>
				<td width="30%"><input type="text" placeholder="eg.12,14,,etc..." name="x7" value="<?php echo $hemo;?>" maxlength="30" size="20">
				<span class="error">* <font color="red"><?php echo $hemoErr;?></font></span></td>
			</tr>		
		
	</table></td>
	<td >
	<table cellspacing="29px" border="0"  align="center" bgcolor="25c88f">
			
			<tr><td width="30%"><img src="images/pcv.jpg" alt=""></td>
			<td width="30%">Packed Cell Volume<br>(9~70)</td>
				<td width="30%"><input type="text" placeholder="eg.26,40,etc..." name="x8" value="<?php echo $pcv;?>" maxlength="30" size="20">
				<span class="error">* <font color="red"><?php echo $pcvErr;?></font></span></td>
			</tr>
			
			<tr><td width="30%"><img src="images/sg.png" alt=""></td>
				<td width="30%">Specific Gravity</td>
				<td width="30%"><select name='x9' >
						<option <?php if (isset($sg) && $sg=="0.0") echo 'selected="selected"';?>value=''>Choose</option>
						<option <?php if (isset($sg) && $sg=="1.005") echo'selected="selected"';?>value='1.005'>1.005</option>
						<option <?php if (isset($sg) && $sg=="1.010") echo 'selected="selected"';?>value='1.010'>1.010</option>
						<option <?php if (isset($sg) && $sg=="1.015") echo 'selected="selected"';?>value='1.015'>1.015</option>
						<option <?php if (isset($sg) && $sg=="1.020") echo 'selected="selected"';?>value='1.020'>1.020</option>
						<option <?php if (isset($sg) && $sg=="1.025") echo 'selected="selected"';?>value='1.025'>1.025</option>
					</select><br><span class="error">* <font color="red"><?php echo $sgErr;?></font></span>
				 </td>
			</tr>
			
			<tr><td width="30%"><img src="images/albu.jpg" alt=""></td>
				<td width="30%">Albumin</td>
				<td width="30%"><select name='x10' >
				<option <?php if (isset($al) && $al=="0.0") echo 'selected="selected"';?>value=''>Choose</option>
				<option <?php if (isset($al) && $al=="0.0") echo 'selected="selected"';?>value='0.0'>0</option>
				<option <?php if (isset($al) && $al=="1") echo 'selected="selected"';?>value='1'>1</option>
				<option <?php if (isset($al) && $al=="2") echo 'selected="selected"';?>value='2'>2</option>
				<option <?php if (isset($al) && $al=="3") echo 'selected="selected"';?>value='3'>3</option>
				<option <?php if (isset($al) && $al=="4") echo 'selected="selected"';?>value='4'>4</option>
				<option <?php if (isset($al) && $al=="5") echo 'selected="selected"';?>value='5'>5</option>
					</select><br><span class="error">* <font color="red"><?php echo $alErr;?></font></span>
				 </td>
			</tr>

			
			<tr><td width="30%"><img src="images/bac.jpg" alt=""></td>
				<td width="30%">Bacteria</td>
				<td width="30%">
				<input type="radio" name="x11" <?php if (isset($ba) && $ba=="1") echo ' checked="checked"';?>value="1">Present
				<input type="radio" name="x11" <?php if (isset($ba) && $ba=="0.0") echo ' checked="checked"';?>value="0.0" checked>NotPre
				
				
				<br><span class="error">*<font color="red"> <?php echo $baErr;?></font></span></td>
			</tr>
			
			<tr><td width="30%"><img src="images/hyper.png" alt=""></td>
				<td width="30%">Hypertension</td>
				<td width="30%"><input type="radio" name="x12" <?php if (isset($htn) && $htn=="1") echo ' checked="checked"';?>
value="1">Yes
						<input type="radio" name="x12" <?php if (isset($htn) && $htn=="0.0") echo ' checked="checked"';?>
value="0.0" checked>No<br><span class="error">* <font color="red"><?php echo $htnErr;?></font></span></td>
			</tr>
			<tr><td width="30%"><img src="images/appet.jpg" alt=""></td>
				<td width="30%">Appetite</td>
				<td width="30%">
				<input type="radio" name="x13" <?php if (isset($appet) && $appet=="0.0") echo ' checked="checked"';?>
value="0.0">Good
				<input type="radio" name="x13" <?php if (isset($appet) && $appet=="1") echo ' checked="checked"';?>
value="1" checked>Poor<br><span class="error">* <font color="red"><?php echo $appetErr;?></font></span></td>
			</tr>
			<tr><td width="30%"><img src="images/pedal.png" alt=""></td>
				<td width="30%">Pedal Edema</td>
				<td width="30%"><input type="radio" name="x14" <?php if (isset($pe) && $pe=="1") echo ' checked="checked"';?>
value="1">Yes
						<input type="radio" name="x14" <?php if (isset($pe) && $pe=="0.0") echo ' checked="checked"';?>
value="0.0" checked>No<br><span class="error">* <font color="red"><?php echo $peErr;?></font></span></td>
			</tr>	
				
	</table></td>
</tr>
<tr>
<td width="50%"></td>
<td width="50%">	
				<input type="reset" value="Clear Value" size="10" align="middle"  color="teal" background-color="#FFFFC0"> &nbsp; &nbsp; &nbsp; &nbsp;
				 &nbsp; &nbsp; &nbsp;
				<input type="submit" value="Test" size="20">
			
</td>
</tr>
	</table>
</form>


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