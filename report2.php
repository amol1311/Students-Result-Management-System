<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
table {
  width: 100%;
}
td {
  text-align: center;
}
th {
  background-color: #4CAF50;
  color: white;
}
h1 {color: black; text-align: center;}

</style>
<style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
}
</style>
</head>
<body>
	<h1>Vivekanand Education Society's Institute Of Technology</h1>
	<h1>Computer Department</h1>

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
			$exam_type=$_POST["exam"];
			$report_type=$_POST["report"];
			$sem=$_POST["sem"];
			$subject=$_POST["subject"];
			$year=$_POST["year"];
			/*
			echo($class);
			echo($exam_type);
			echo($report_type);
			*/

			$x = strtoupper($division);
			echo "<h2>Class : $x</h2>";
			if ($subject == "m4")
				{
					echo "<h2>Subject : Applied Mathematics-4</h2>";
				}
			


			$generate_report_query="";
			//check data type of remark column
			if($exam_type=="complete"){
				if($report_type=="absent"){
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject' AND `remark1`='absent' AND `remark2`='absent'";
				}
				else if($report_type=="fail"){
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject' AND `remark`='fail'";
				}
				else{
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject'";
				}

			}
			else if($exam_type=="IA1"){
				if($report_type=="absent"){
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject' AND `remark1`='absent'";
				}
				else if($report_type=="fail"){
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject' AND ( `IA1`<8 OR `remark1`='absent')";
				}
				else{
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject'";
				}
			}
			else if($exam_type=="IA2"){
				if($report_type=="absent"){
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject' AND `remark2`='absent'";
				}
				else if($report_type=="fail"){
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject' AND (`IA2`<8 OR `remark2`='absent')";
				}
				else{
					$generate_report_query="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject'";
				}
			}

			$generate_report_query_result=mysqli_query($conn, $generate_report_query);

			?>
			
			
			
			<?php
			echo"<table>";
			echo"<tr>";
				echo"<td>";
					echo("<b>Roll No</b> ");
				echo"</td>";
				/*echo"<td>";
					echo("<b>Subject</b> ");
				echo"</td>";*/
				echo"<td>";
					echo("<b>Name</b> ");
				echo"</td>";
				if($exam_type=="IA1" || ($exam_type=="complete")){
					echo"<td>";
					echo("<b>IA1 Marks</b> ");
					echo"</td>";
				}
				if(($exam_type=="complete" && $report_type!="fail") AND ($exam_type=="IA1" && $report_type=="all")){
					echo"<td>";
					echo("<b>Remark IA1</b> ");
					echo"</td>";
				}
				if($exam_type=="IA2" || ($exam_type=="complete")){
					echo"<td>";
						echo("<b>IA2 Marks</b> ");
					echo"</td>";
				}
				if(($exam_type=="complete" && $report_type!="fail") AND ($exam_type=="IA2" && $report_type=="all")){
					echo"<td>";
						echo("<b>Remark IA2</b> ");
					echo"</td>";
				}
				if(($exam_type=="complete" && $report_type!="fail")){
					echo"<td>";
					echo("<b>Average</b> ");
					echo"</td>";
				}
				if(($exam_type=="complete" && $report_type=="all")){
					echo"<td>";
					echo("<b>Remark</b> ");
					echo"</td>";
				}

			echo"</tr>";


			if ($generate_report_query_result) {
				while ($row = mysqli_fetch_array($generate_report_query_result)) {
					
					echo"<tr>";
					echo"<td>";
					echo($row["rollno"]);
					echo"</td>";
					/*echo"<td>";
					echo($row["subject"]);
					echo"</td>";*/
					echo"<td>";
					echo($row["name"]);
					echo"</td>";
					if($exam_type=="IA1" || ($exam_type=="complete")){
						echo"<td>";
						echo($row["IA1"]);
						echo"</td>";
					}
					if(($exam_type=="complete" && $report_type!="fail") AND ($exam_type=="IA1" && $report_type=="all")){
						echo"<td>";
						echo($row["remark1"]);
						echo"</td>";
					}	
					if($exam_type=="IA2" || ($exam_type=="complete")){
						echo"<td>";
						echo($row["IA2"]);
						echo"</td>";
					}
					if(($exam_type=="complete" && $report_type!="fail") AND ($exam_type=="IA2" && $report_type=="all")){
						echo"<td>";
						echo($row["remark2"]);
						echo"</td>";
					}	
					if(($exam_type=="complete" && $report_type!="fail")){
						echo"<td>";
						echo($row["avg"]);
						echo"</td>";
					}
					if(($exam_type=="complete" && $report_type=="all")){
						echo"<td>";
						if($row["remark"]){
							echo"Pass";
						}
						else
							echo "Fail";
						echo"</td>";
					}	
					echo"</tr>";

					
				}
			}
			echo"</table>";
		}
		
		
	?>
<br>
<button onclick="document.location='report1.php'">Home Page</button>
<input id ="printbtn" type="button" value="Print Report" onclick="window.print();" >



</body>
</html>