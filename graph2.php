

<!DOCTYPE html>
<html>
<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVivekanand Education Society's Institute Of Technology</h1>
	<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspComputer Department</h1>



<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="test";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

		if(isset($_POST["submit"])){
			//echo("*****");
			$division=$_POST["division"];
			$sem=$_POST["sem"];
			//$subject=$_POST["subject"];
			$year=$_POST["year"];
		}

		//echo $sem;
		//echo $division;
		$x = strtoupper($division);
			echo "<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$x</h1>";

?>


<?php
 
 if ($year == 2){
	if ($sem == 0){

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='m4' GROUP BY remark");
			    $nump = mysqli_fetch_assoc($query); 
			    $m4p =  (int)$nump['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='m4' GROUP BY remark");
			    $numf = mysqli_fetch_assoc($query); 
			    $m4f =  (int)$numf['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='aoa' GROUP BY remark");
			    $numa = mysqli_fetch_assoc($query); 
			    $aoap =  (int)$numa['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='aoa' GROUP BY remark");
			    $numb = mysqli_fetch_assoc($query); 
			    $aoaf =  (int)$numb['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='dbms' GROUP BY remark");
			    $numc = mysqli_fetch_assoc($query); 
			    $dbmsp =  (int)$numc['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='dbms' GROUP BY remark");
			    $numd = mysqli_fetch_assoc($query); 
			    $dbmsf =  (int)$numd['remark'];

			    $query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='os' GROUP BY remark");
			    $nume = mysqli_fetch_assoc($query); 
			    $osp =  (int)$nume['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='os' GROUP BY remark");
			    $numg = mysqli_fetch_assoc($query); 
			    $osf =  (int)$numg['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='mp' GROUP BY remark");
			    $numh = mysqli_fetch_assoc($query); 
			    $mpp =  (int)$numh['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='mp' GROUP BY remark");
			    $numi = mysqli_fetch_assoc($query); 
			    $mpf =  (int)$numi['remark'];

			$dataPoints1 = array(
				array("label"=> "Maths", "y"=> $m4f),
				array("label"=> "Analysis of algorithm", "y"=> $aoaf),
				array("label"=> "Database", "y"=> $dbmsf),
				array("label"=> "Operating system", "y"=> $osf),
				array("label"=> "Microprocesssor", "y"=> $mpf)
				);
			$dataPoints2 = array(
				array("label"=> "Maths", "y"=> $m4p),
				array("label"=> "Analysis of algorithm", "y"=> $aoap),
				array("label"=> "Database", "y"=> $dbmsp),
				array("label"=> "Operating system", "y"=> $osp),
				array("label"=> "Microprocessor", "y"=> $mpp)
				
			);
	}
	if ($sem == 1){

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='m3' GROUP BY remark");
			    $nump = mysqli_fetch_assoc($query); 
			    $m3p =  (int)$nump['remark'];
			    //echo $m3p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='m3' GROUP BY remark");
			    $numf = mysqli_fetch_assoc($query); 
			    $m3f =  (int)$numf['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='ds' GROUP BY remark");
			    $numa = mysqli_fetch_assoc($query); 
			    $DSp =  (int)$numa['remark'];
			    echo $DSp;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='ds' GROUP BY remark");
			    $numb = mysqli_fetch_assoc($query); 
			    $DSf =  (int)$numb['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='dlcoa' GROUP BY remark");
			    $numc = mysqli_fetch_assoc($query); 
			    $DLCOAp =  (int)$numc['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='dlcoa' GROUP BY remark");
			    $numd = mysqli_fetch_assoc($query); 
			    $DLCOAf =  (int)$numd['remark'];

			     $query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='cg' GROUP BY remark");
			    $nume = mysqli_fetch_assoc($query); 
			    $cgp =  (int)$nume['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='cg' GROUP BY remark");
			    $numg = mysqli_fetch_assoc($query); 
			    $cgf =  (int)$numg['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='dsgt' GROUP BY remark");
			    $numh = mysqli_fetch_assoc($query); 
			    $dsgtp =  (int)$numh['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='dsgt' GROUP BY remark");
			    $numi = mysqli_fetch_assoc($query); 
			    $dsgtf =  (int)$numi['remark'];

			$dataPoints1 = array(
				array("label"=> "Maths", "y"=> $m3f),
				array("label"=> "Data Structures", "y"=> $DSf),
				array("label"=> "Digital logic And Computer Architecture", "y"=> $DLCOAf),
				array("label"=> "Computer Graphics", "y"=> $cgf),
				array("label"=> "Discrete Structures And Graph Theory", "y"=> $dsgtf)
				);
			$dataPoints2 = array(
				array("label"=> "Maths", "y"=> $m3p),
				array("label"=> "Data Structures", "y"=> $DSp),
				array("label"=> "Digital Logic And Computer Architecture", "y"=> $DLCOAp),
				array("label"=> "Computer Graphics", "y"=> $cgp),
				array("label"=> "Discrete Structures And Graph Theory", "y"=> $dsgtp)
				
			);
	}
	
}

if ($year == 3){
	if ($sem == 0){

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='spcc' GROUP BY remark");
			    $nump = mysqli_fetch_assoc($query); 
			    $spccp =  (int)$nump['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='spcc' GROUP BY remark");
			    $numf = mysqli_fetch_assoc($query); 
			    $spccf =  (int)$numf['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='se' GROUP BY remark");
			    $numa = mysqli_fetch_assoc($query); 
			    $sep =  (int)$numa['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='se' GROUP BY remark");
			    $numb = mysqli_fetch_assoc($query); 
			    $sef =  (int)$numb['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='dd' GROUP BY remark");
			    $numc = mysqli_fetch_assoc($query); 
			    $ddp =  (int)$numc['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='dd' GROUP BY remark");
			    $numd = mysqli_fetch_assoc($query); 
			    $ddf =  (int)$numd['remark'];

			    $query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='mcc' GROUP BY remark");
			    $nume = mysqli_fetch_assoc($query); 
			    $mccp =  (int)$nume['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='mcc' GROUP BY remark");
			    $numg = mysqli_fetch_assoc($query); 
			    $mccf =  (int)$numg['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='E1' GROUP BY remark");
			    $numh = mysqli_fetch_assoc($query); 
			    $E1p =  (int)$numh['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='E1' GROUP BY remark");
			    $numi = mysqli_fetch_assoc($query); 
			    $E1f =  (int)$numi['remark'];

			$dataPoints1 = array(
				array("label"=> "System Programming And Compiler Construction", "y"=> $spccf),
				array("label"=> "Software Engineering", "y"=> $sef),
				array("label"=> "Distributed databases", "y"=> $ddf),
				array("label"=> "Mobile Communication And Computing", "y"=> $mccf),
				array("label"=> "Elective 1", "y"=> $E1f)
				);
			$dataPoints2 = array(
				array("label"=> "System Programming And Compiler Construction", "y"=> $spccp),
				array("label"=> "Software Engineering", "y"=> $sep),
				array("label"=> "Distributed databases", "y"=> $ddp),
				array("label"=> "Mobile Communication And Computing", "y"=> $mccp),
				array("label"=> "Elective 1", "y"=> $E1p)
				
			);
	}
	if ($sem == 1){

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='mp' GROUP BY remark");
			    $nump = mysqli_fetch_assoc($query); 
			    $mpp =  (int)$nump['remark'];
			    //echo $m3p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='mp' GROUP BY remark");
			    $numf = mysqli_fetch_assoc($query); 
			    $mpf =  (int)$numf['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='os' GROUP BY remark");
			    $numa = mysqli_fetch_assoc($query); 
			    $osp =  (int)$numa['remark'];
			   // echo $DSp;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='os' GROUP BY remark");
			    $numb = mysqli_fetch_assoc($query); 
			    $osf =  (int)$numb['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='sooad' GROUP BY remark");
			    $numc = mysqli_fetch_assoc($query); 
			    $sooadp =  (int)$numc['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='sooad' GROUP BY remark");
			    $numd = mysqli_fetch_assoc($query); 
			    $sooadf =  (int)$numd['remark'];

			     $query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='cn' GROUP BY remark");
			    $nume = mysqli_fetch_assoc($query); 
			    $cnp =  (int)$nume['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='cn' GROUP BY remark");
			    $numg = mysqli_fetch_assoc($query); 
			    $cnf =  (int)$numg['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='wtl' GROUP BY remark");
			    $numh = mysqli_fetch_assoc($query); 
			    $wtlp =  (int)$numh['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='wtl' GROUP BY remark");
			    $numi = mysqli_fetch_assoc($query); 
			    $wtlf =  (int)$numi['remark'];

			$dataPoints1 = array(
				array("label"=> "Microprocesssor", "y"=> $mpf),
				array("label"=> "Operating Systems", "y"=> $osf),
				array("label"=> "Sgtructured And Object Oriented Analysis And Design", "y"=> $sooadf),
				array("label"=> "Computer Networks", "y"=> $cnf),
				array("label"=> "Web Technologies Laboratory", "y"=> $wtlf)
				);
			$dataPoints2 = array(
				array("label"=> "Microprocesssor", "y"=> $mpp),
				array("label"=> "Operating Systems", "y"=> $osp),
				array("label"=> "Sgtructured And Object Oriented Analysis And Design", "y"=> $sooadp),
				array("label"=> "Computer Networks", "y"=> $cnp),
				array("label"=> "Web Technologies Laboratory", "y"=> $wtlp)
			);
	}
	
}

if ($year == 4){
	if ($sem == 0){

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='dwm' GROUP BY remark");
			    $nump = mysqli_fetch_assoc($query); 
			    $dwmp =  (int)$nump['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='dwm' GROUP BY remark");
			    $numf = mysqli_fetch_assoc($query); 
			    $dwmf =  (int)$numf['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='hmi' GROUP BY remark");
			    $numa = mysqli_fetch_assoc($query); 
			    $hmip =  (int)$numa['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='hmi' GROUP BY remark");
			    $numb = mysqli_fetch_assoc($query); 
			    $hmif =  (int)$numb['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='pds' GROUP BY remark");
			    $numc = mysqli_fetch_assoc($query); 
			    $pdsp =  (int)$numc['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='pds' GROUP BY remark");
			    $numd = mysqli_fetch_assoc($query); 
			    $pdsf =  (int)$numd['remark'];

			    $query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='p2' GROUP BY remark");
			    $nume = mysqli_fetch_assoc($query); 
			    $p2p =  (int)$nume['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='p2' GROUP BY remark");
			    $numg = mysqli_fetch_assoc($query); 
			    $p2f =  (int)$numg['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='cc' GROUP BY remark");
			    $numh = mysqli_fetch_assoc($query); 
			    $ccp =  (int)$numh['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='cc' GROUP BY remark");
			    $numi = mysqli_fetch_assoc($query); 
			    $ccf =  (int)$numi['remark'];

			$dataPoints1 = array(
				array("label"=> "Data warehouse And mining", "y"=> $dwmf),
				array("label"=> "Human Machine Interaction", "y"=> $hmif),
				array("label"=> "Parallel And Distributed Systems", "y"=> $pdsf),
				array("label"=> "Project 2", "y"=> $p2f),
				array("label"=> "Cloud Computing", "y"=> $ccf)
				);
			$dataPoints2 = array(
				array("label"=> "Data warehouse And mining", "y"=> $dwmp),
				array("label"=> "Human Machine Interaction", "y"=> $hmip),
				array("label"=> "Parallel And Distributed Systems", "y"=> $pdsp),
				array("label"=> "Project 2", "y"=> $p2p),
				array("label"=> "Cloud Computing", "y"=> $ccp)
			);
	}
	if ($sem == 1){

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='dsp' GROUP BY remark");
			    $nump = mysqli_fetch_assoc($query); 
			    $dspp =  (int)$nump['remark'];
			    //echo $m3p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='dsp' GROUP BY remark");
			    $numf = mysqli_fetch_assoc($query); 
			    $dspf =  (int)$numf['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='css' GROUP BY remark");
			    $numa = mysqli_fetch_assoc($query); 
			    $cssp =  (int)$numa['remark'];
			   // echo $DSp;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='css' GROUP BY remark");
			    $numb = mysqli_fetch_assoc($query); 
			    $csf =  (int)$numb['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='ai' GROUP BY remark");
			    $numc = mysqli_fetch_assoc($query); 
			    $aip =  (int)$numc['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='ai' GROUP BY remark");
			    $numd = mysqli_fetch_assoc($query); 
			    $aif =  (int)$numd['remark'];

			     $query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='p1' GROUP BY remark");
			    $nume = mysqli_fetch_assoc($query); 
			    $p1p =  (int)$nume['remark'];
			    //echo $m4p;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='p1' GROUP BY remark");
			    $numg = mysqli_fetch_assoc($query); 
			    $p1f =  (int)$numg['remark'];

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=1 AND division='$division' AND subject='ntal' GROUP BY remark");
			    $numh = mysqli_fetch_assoc($query); 
			    $ntalp =  (int)$numh['remark'];
			    //echo $aoap;

				$query = mysqli_query($conn, "SELECT COUNT( * ) as remark FROM marks WHERE remark=0 AND division='$division' AND subject='ntal' GROUP BY remark");
			    $numi = mysqli_fetch_assoc($query); 
			    $ntalf =  (int)$numi['remark'];

			$dataPoints1 = array(
				array("label"=> "Digital Signal Processing", "y"=> $dspf),
				array("label"=> "Crypyography And System Security", "y"=> $cssf),
				array("label"=> "Artifical Intelligence", "y"=> $aif),
				array("label"=> "Project 1", "y"=> $p1f),
				array("label"=> "Network Threats And Attacks Laboratory", "y"=> $ntalf)
				);
			$dataPoints2 = array(
				array("label"=> "Digital Signal Processing", "y"=> $dspf),
				array("label"=> "Crypyography And System Security", "y"=> $cssf),
				array("label"=> "Artifical Intelligence", "y"=> $aif),
				array("label"=> "Project 1", "y"=> $p1f),
				array("label"=> "Network Threats And Attacks Laboratory", "y"=> $ntalf)
				
			);
	}
	
}
	
	
?>
<!DOCTYPE HTML>
<html>
<head> 
    <title>Graph</title>
<script>
 window.onload = function () {
        CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#E6B0AA",
                "#C36E5C",
                "#2E8B57",
                "#3CB371",
                "#90EE90"                
                ]); 
var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
            colorSet: "greenShades",
	title:{
		text: "Number Of Students Passed And Failed"
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Failed",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Passed",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 450px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script
  src="https://code.jquery.com/jquery-migrate-3.3.2.js"
  integrity="sha256-BDmtN+79VRrkfamzD16UnAoJP8zMitAz093tvZATdiE="
  crossorigin="anonymous"></script>


</body>
</html>