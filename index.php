<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IBR 360 Image Rotation Plugin </title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
</head>

<body>
<div class="options">
	<div class="court_type op1">
		<span>Court Type</span>
		<input type="radio" name="court" dataValue="blue" dataClass="court" class="court_checkbox" checked>Blue
		<input type="radio" name="court" dataValue="green" dataClass="court" class="court_checkbox">Green
	</div>

	<div class="light_type op1" >
		<span>Light Type</span>
		<input type="radio" name="light" dataValue="light_AC" dataClass="light" class="court_checkbox" checked>Light AC
		<input type="radio" name="light" dataValue="light_areodome" dataClass="light" class="court_checkbox">Areodome
	</div>

	<div class="fance_type op1">
		<span>Fance Type</span>
		<input type="radio" name="fance" dataValue="rakedfance" dataClass="fance" class="court_checkbox" checked>Raked fance
		<input type="radio" name="fance" dataValue="SFacncegate_single" dataClass="fance" class="court_checkbox">SFacncegate_single
	</div>


</div>

<div class="main-court-div ">
<div class="mainCourtDiv"></div>
	<ul class="list">
		<?php
		for($i = 1; $i<38; $i++){
			$display ="none";
			if($i==1){
				$display = "list-item";
			}
			echo'<li style="display:'.$display.'">
					<img class="court" dataValue="blue" src="images/blue/a'.$i.'.png" />
					<img class="fance" dataValue="rakedfance" src="images/rakedfance/a'.$i.'.png" />
					<img class="light" dataValue="light_AC" src="images/light_AC/a'.$i.'.png" />
				</li>';

		}
	?>
	</ul>
	<img src="img/loading.gif" class="lodder">
</div>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>


</body>
</html>








