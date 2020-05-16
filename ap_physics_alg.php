<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);
	error_reporting( E_ALL | E_STRICT );

	$blues = array("#6cbfee", "#add8e6", "#a1caf1", "#bcd4e6", "#1f75fe", "#b0e0e6", "#008080", "#6ca0dc", "#1f305e", "", );
	$warmth = array("#f1ebbb", "#ffe277", "#fee2b3", "#fc8210");
	$greens = array("#49E20E", "#00b300 ");

	$hist = [];
	$units = array(
			1 => "Kinematics",
			2 => "Dynamics",
			3 => "Circular Motion and Gravitation",
			4 => "Energy",
			5 => "Momentum",
			6 => "Simple Harmonic Motion",
			7 => "Torque and Rotational Motion",
		);
	//array $ch1;
	//$ch1 = [ 10 => "apply kinematic equations to solve scenarios involving linear motion", 20 => "interpret and translate between position-time, velocity-time, and acceleration-time graphs",];
	//Unit 2: Dynamics
	
	$u1 = array( 
			10 => "apply kinematic equations to solve scenarios involving linear motion",
			20 => "interpret and translate between position-time, velocity-time, and acceleration-time graphs",
			30 => "apply kinematic equations to solve scenarios involving projectile motion",
			40 => "interpret or design an experiment to study the behavior of motion",
		);
	$u2 = array (
			10 => "represent forces as vectors with magnitude and direction",
			20 => "use Newton’s first law to predict behavior in situations involving inertia",
			30 => "apply Newton’s second law to situations involving force, mass, and/or acceleration (very important through the rest of the course)",
			40 => "use Newton’s third law to identify force pairs",
			50 => "create and interpret free-body diagrams including common forces such as: gravity, normal, applied, tension, and friction",
			60 => "solve problems involving inclined planes",
			70 => "define open and closed systems and distinguish between internal and external forces",
			80 => "distinguish between static and kinetic friction and solve problems involving both",
			90 => "apply the concept of center of mass to analyze motion of a system",
		);
	
	$u3 = array( 
			10 => "explain the behavior of gravity as one of the fundamental forces and compare it to the electric force",
			20 => "use Newton’s law of gravitation to calculate the gravitational force that two objects exert on each other",
			30 => "apply <span class=\"wp-katex-eq\" data-display=\"false\">F = mg</span> to calculate the gravitational force on an object with mass m</span> in a gravitational field of strength ",
			40 => "apply g = (G * m) / r^2 to calculate the gravitational field due to an object with mass <span class=\"wp-katex-eq\" data-display=\"false\">m",
			50 => "approximate the gravitational field (<span class=\"wp-katex-eq\" data-display=\"false\">g</span>) near the surface of an object from its radius and mass relative to those of Earth or other reference objects",
			60 => "distinguish between gravitational and inertia mass",
			70 => "create and interpret a free-body diagram for situations involving circular motion",
			80 => "apply <span class=\"wp-katex-eq\" data-display=\"false\">a_c = \frac{v^2}{r}</span> in situations involving circular motion",
		);
	
	$u4 = array (
			10 => "define open and closed systems as it pertains to conservation of energy",
			20 => "make predictions about changes in kinetic energy based on forces applied to an object",
			30 => "calculate work using force and displacement and use it to determine changes to kinetic energy",
			40 => "calculate potential energy of an object or system and use it to determine the total energy",
			50 => "predict changes in the total energy of a system due to changes in position and speed of objects or frictional interactions",
			60 => "apply conservation of energy and the Work-Energy Theorem to determine changes in kinetic, potential, or internal energy of a system",
		);
	$u5 = array (
			10 => "predict or calculate a change in momentum of an object based on an applied force",
			20 => "explain the relationships between changes in momentum of an object, average force, impulse, and time of interaction",
			30 => "analyze data to characterize the change in momentum of an object",
			40 => "design a plan for collecting data to investigate the relationship between changes in momentum and the average force exerted on an object over time",
			50 => "calculate change in momentum using a force-time graph",
			60 => "define open and closed systems as it pertains to conversation of momentum",
			70 => "predict behaviors of systems of objects during collisions using conversation of momentum (quantitatively for 1D, qualitatively for 2D)",
			80 => "distinguish between elastic and inelastic collisions and what quantities are conserved during each",
			90 => "predict the velocity of the center of mass of a system when there is no external interaction but there is internal interaction",
		);

	$u6 = array (
			10 => "predict which properties determine the motion of a simple harmonic oscillator and what the dependence of the motion is on those properties",
			20 => "calculate quantities associated with pendulum and spring simple harmonic motion (i.e., force, displacement, acceleration, velocity, period of motion, frequency, spring constant, string length, mass)",
			30 => "analyze data to identify relationships between given values and variables associated with objects in oscillatory motion",
			40 => "predict changes in energy of an object or system due to simple harmonic motion (usually springs)",
		);
	$u7 = array (
			10 => "apply the rotational kinematic equations to solve scenarios involving rotational motion",
			20 => "distinguish and translate between rotational and circular motion",
			30 => "apply the rotational equivalent of Newton’s second law using torque to describe rotational force ",
			40 => "understand a qualitative sense of how mass distribution affects rotational inertia (memorizing formulas is not required)",
			50 => "calculate torques on a two-dimensional system in static equilibrium by examining a representation or model",
			60 => "predict the behavior of rotational collision situations by the same processes that are used to analyze linear collision situations",
			70 => "apply the relationship between torque and angular momentum to predict changes in angular velocity or momentum",
			80 => "apply conservation of momentum to predict changes in a system for a situation in which there is no net external torque",
		);
		
	if (isset($_POST["action"]) && (strcmp($_POST["action"], 'update') == 0)) {
		foreach ($units as $unum => $title) {
			$varname = "u" . $unum;
			foreach ($$varname as $tnum => $topic) {
				$key = $unum . "-" . $tnum;
				//echo $key;
				$value = 0;
				$hist[$key] = $_POST[$key];
				//$hist[""] = 
			}
		}
		//echo json_encode($hist);
		//exit;
		$myfile = fopen("ap_physics_alg.txt", "w") or die("Unable to open file!");
		fwrite($myfile, json_encode($hist));
		//echo json_encode($hist);
		//fwrite($myfile, json_encode($hist));
	} else {
		$myfile = fopen("ap_physics_alg.txt", "r") or die("Unable to open file!");
		$hist = json_decode(fread($myfile, filesize("ap_physics_alg.txt")), TRUE);
	}
/*
	foreach ($units as $unum => $title) {
		$varname = "u" . $unum;
		
		foreach ($$varname as $tnum => $topic) {
			$key = $unum . "-" . $tnum;
			//echo $key;
			$value = 0;
			$hist[$key] = $value;
			//$hist[""] = 
		}
	}
	$myfile = fopen("ap_physics_alg.txt", "w") or die("Unable to open file!");
	fwrite($myfile, json_encode($hist));
	//echo json_encode($hist);
	//fwrite($myfile, json_encode($hist));
	exit;
	*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="refresh" content="7200" />
    <title>Academic Progress System </title>
    <link href="./cssa/style.css" type="text/css" rel="stylesheet">
    <link href="./cssa/form-basic.css" type="text/css" rel="stylesheet">
    <link href="./cssa/menu.css" type="text/css" rel="stylesheet">
    <meta name="robots" content="noindex" />
	<script type="text/javascript"
  async
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

<style>
input[type=range] {
  height: 50px;
  -webkit-appearance: none;
  margin: 10px 0;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 13px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000;
  background: #3071A9;
  border-radius: 7px;
  border: 1px solid #000000;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 42px;
  width: 24px;
  border-radius: 5px;
  background: #FFFFFF;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -15.5px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #3071A9;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 13px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000;
  background: #3071A9;
  border-radius: 7px;
  border: 1px solid #000000;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 42px;
  width: 24px;
  border-radius: 5px;
  background: #FFFFFF;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 13px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #3071A9;
  border: 1px solid #000000;
  border-radius: 14px;
  box-shadow: 1px 1px 1px #000000;
}
input[type=range]::-ms-fill-upper {
  background: #3071A9;
  border: 1px solid #000000;
  border-radius: 14px;
  box-shadow: 1px 1px 1px #000000;
}
input[type=range]::-ms-thumb {
  margin-top: 1px;
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 42px;
  width: 24px;
  border-radius: 5px;
  background: #FFFFFF;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
  background: #3071A9;
}
input[type=range]:focus::-ms-fill-upper {
  background: #3071A9;
}
</style>
</head>
<body style='font-size:1.5em;'>

<?php 
	echo "<div class='siteTitle'>AP Physics I - Algebra Progress</div>";
	echo "<div class='mainContent'>";
	echo "<br>\n";
	//echo "<div class='form-title-row' style='width:80%'><h1 class='pageTitle'>AP Physics I - Algebra </h1></div>\n";
	echo '<form class="form-basic" style="background:none;" action="ap_physics_alg.php" method="post" name="ap_physics_alg">';

	//echo json_encode($hist); exit;
	//var_dump($hist);
	$num = 0;
	foreach ($units as $num => $title) {

		echo "<table class='blueTable'>\n";
		echo '<thead><tr><th style="font-size:1.3em; padding:0 30px 0 30px;">' . "Unit $num: $title"; 
		echo '<div class="form-row" style="font-size:0.7em; float:right; margin:0px; padding:0px;"><button type="submit">Submit</button></div>';
		echo "</th>		</tr>		</thead>";
		$varname= "u" . (string) $num;
		foreach ($$varname as $key => $topic) {
			$bkcolor = '';
			$progress = (int) $hist[$num . "-" . $key];
			
			if (($progress >= 20) && ($progress <= 80)) {
				$index = $progress/20-1;
				$bkcolor = $warmth[$index];
			} elseif ($progress > 80) {
				$index = $progress/10-9;
				$bkcolor = $greens[$index];
			} else {
				$index = $num-1;
				$bkcolor = $blues[$index];
			}
			
			echo "<tbody><tr>";
			echo '<td style="background:' . $bkcolor . ' ; padding: 2px 30px">&bull;&nbsp;' . $topic;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			$field_id = $num . "-" . $key;
			echo '<label id="' . $field_id . '">' . $progress . '%</label><br>';
			echo "<span style='display:inline-block; float:left'>Know nothing</span>
			<span style='display:inline-block; margin-left: 25%;'>Mediocre</span>
			<span style='display:inline-block; float:right'>Master</span>";
			echo "<div><input  oninput=\"document.getElementById('";
			echo $field_id . "'";
			echo ').innerHTML = this.value +\'%\' "';
			echo 'value=' . $progress . ' name="' . $field_id . '" type="range" min="0" max="100" step="10">' . "</div>" . '</td>';
			echo "</tr></tbody>\n";
		}
		echo "</table>\n";
		echo "<br>";
	}
	echo "<input type='hidden' value='update'name='action'>";
	echo "</form>";
	include_once("./include/footer.inc.php");
	echo '<div class="links"><a href="">ACT Math</a></div>';
	echo "<br>";
	
?>