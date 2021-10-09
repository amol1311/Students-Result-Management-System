<!DOCTYPE html>
<html>
<head>
	<title>Enter Marks</title>

<style>
table, th, td , input, select{
    border: 1px solid black;
    border-collapse: collapse;
   }
table.center {
  margin-left: auto;
  margin-right: auto;
}
h1 {color: black; text-align: center;}

</style>

</head>

<body>
	<h1>Enter Marks</h1>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$division=$_GET["division"];
$exam_type=$_GET["exam"];

	/*
	echo($division." ");
	echo($exam_type);
	*/

	$sem=$_GET["sem"];
	$subject=$_GET["subject"];
	$year=$_GET["year"];
	//echo($division);
	//echo($exam_type);
	//echo($subject);
	//echo($year);
	//echo($sem);
	/*
	echo($division." ");
	echo($exam_type);
	*/
	function sprintf_nbsp() {
  		 $args = func_get_args();
   		return str_replace(' ', '&nbsp', vsprintf(array_shift($args), array_values($args)));
	}

		function getMarks($division, $exam_type,$subject, $rollno, $name, $IA1, $remark1, $IA2, $remark2, $avg, $remark)
		{

		$format1 = '%-25s';
		$format2 = '%02s';	

		echo "<table>";
		echo "<br>";
			echo"<tr>";
			//<table border="1">
				echo"<td>";
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
					echo($str = sprintf_nbsp($format2, $rollno));
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp"; 
				echo"</td>";

				echo"<td>";
					echo($str = sprintf_nbsp($format1, $name));
				echo"</td>";
				echo"<td>";
					echo "&nbsp&nbsp&nbsp"; 
					echo("  ". $subject . "   ");
					echo "&nbsp&nbsp&nbsp"; 
				echo"</td>";
				echo"<td>";
				echo "&nbsp&nbsp&nbsp";
					if($exam_type=="IA1"){
						echo "<input type='number' min='0' max='20' name='IA1" . $rollno . "' value='" . $IA1 . "'>";
					}
					else{
						echo($IA1);
					}
				echo "&nbsp&nbsp&nbsp";	
				echo"</td>";



				echo"<td>";
				echo "&nbsp&nbsp&nbsp";	
					if($exam_type=="IA1"){
						echo"<select name='remark1" . $rollno . "' id='remark1'>";
						echo"<option value=''></option>";
					  	echo"<option value='present'>Present</option>";
					  	echo"<option value='absent'>Absent</option>";
					 	echo"</select>";
						//echo "<input type='text' name='remark2" . $rollno . "' value='" . $IA2 . "'>";
					}
					else{
						if(is_null($remark1)){
							echo"Null";
						}
						else{
							echo($remark1);
						}
					}
				echo "&nbsp&nbsp&nbsp";		
				echo"</td>";

				echo"<td>";
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					if($exam_type=="IA2"){
						echo "<input type='number' min='0' max='20' name='IA2" . $rollno . "' value='" . $IA2 . "'>";
					}
					else{
						echo($IA2);
					}
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
				echo"</td>";

				echo"<td>";
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp";	
					if($exam_type=="IA2"){
						echo"<select name='remark2" . $rollno . "' id='remark2'>";
						echo"<option value=''></option>";
					  	echo"<option value='present'>Present</option>";
					  	echo"<option value='absent'>Absent</option>";
					 	echo"</select>";
						//echo "<input type='text' name='remark2" . $rollno . "' value='" . $IA2 . "'>";
					}
					else{
						if(is_null($remark2)){
							echo"Null";
						}
						else{
							echo($remark2);
						}
					}
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp";		
				echo"</td>";
				//*****************************************************************
				
				/*
				echo"<td>";
					if($exam_type=="IA1"){
						echo "<input type='text' name='remark1" . $rollno . "' value='" . $IA1 . "'>";
					}
					else{
						echo($attendache_IA1);
					}
				echo"</td>";
				echo"<td>";
					if($exam_type=="IA2"){
						echo "<input type='text' name='remark2" . $rollno . "' value='" . $IA2 . "'>";
					}
					else{
						echo($remark2);
					}
				echo"</td>";
				*/


				

			echo"</tr>";
			echo "</table>";
			//echo "<br>";
			// echo "<hr>";
		}


			$fetch_student="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject'";
			$fetch_student_result=mysqli_query($conn, $fetch_student);
			//echo($fetch_student_result);
			echo "<form method='post' action='score3.php?division=$division&exam_type=$exam_type&sem=$sem&year=$year&subject=$subject'>";
			echo"<table>";
			echo"<tr>";
				echo"<td>";
					echo("<b>Roll No</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>Subject</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>IA1 Marks</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>Remark IA1</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>IA2 Marks</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>Remark IA2</b> ");
				echo"</td>";
				/*echo"<td>";
					echo("<b>Average</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>Remark</b> ");
				echo"</td>";*/



			echo"</table>";
			if ($fetch_student_result) {
				//echo"**************";
				//fetches each row from score table
				while ($row = mysqli_fetch_array($fetch_student_result)) {
					//turns the displayed marks into edit mode
					//$no_students++;
					//echo"$$$$$";
					//echo $row;
					getMarks($division, $exam_type, $row["subject"], $row["rollno"], $row["name"], $row["IA1"], $row["remark1"], $row["IA2"], $row["remark2"], $row["avg"], /* $row["absent/present"],*/ $row["remark"]);
				}
			}
			echo("<br>");			
			echo "<input type='submit' name='submit' value='submit'>";
			echo "</form>";
?>

</body>
</html>