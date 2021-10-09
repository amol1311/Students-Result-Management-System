<!DOCTYPE html>
<html>
<head>

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
</head>
<body>



<?php
$cuttoff=8;
$maximum_mark=20;

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="test";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	$division=$_GET["division"];
	$exam_type=$_GET["exam_type"];
	$sem=$_GET["sem"];
	$subject=$_GET["subject"];
	$year=$_GET["year"];
	
	/*
	echo($division);
	echo($exam_type);
	*/
	if(isset($_POST["submit"])){

	$fetch_student="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject'";
			$fetch_student_result=mysqli_query($conn, $fetch_student);
			//echo($exam_type);
			if ($fetch_student_result) {
				//fetches each row from score table
				while ($row = mysqli_fetch_array($fetch_student_result)) {
					$rollno=$row['rollno'];
					if($exam_type=="IA1"){

						$IA1 = $_POST["IA1" . $row["rollno"]];
						$IA2 = $row["IA2"];
					}
					else{
						$IA1 = $row["IA1"];
						$IA2 = $_POST["IA2" . $row["rollno"]];
					}

					if($exam_type=="IA1"){
						if($_POST["remark1".$row["rollno"]]==""){
							$remark1=$row["remark1"];
						}
						else{
							$remark1=$_POST["remark1".$row["rollno"]];
						}
						$remark2=$row["remark2"];

					}
					else{
						if($_POST["remark2".$row["rollno"]]==""){
							$remark2=$row["remark2"];
						}
						else{
							$remark2=$_POST["remark2".$row["rollno"]];
						}
						
						$remark1=$row["remark1"];
					}
					$avg=ceil(($IA1 + $IA2)/2);
					//echo("$avg");
					//echo("$remark");
					//echo("$remark1");
					//echo("$remark2");
					if($avg>=$cuttoff){
						$remark=1;
						//echo"Pass";
					}
					else{
						$remark=0;
						//echo"Fail";
					}
					
					/*
					echo("div" . $division);
					echo("rollno" .$rollno);
					echo("IA1 ".$IA1);
					echo("IA2 ".$IA2);
					echo($avg);
					echo($remark);
					*/
						if($IA1 <=$maximum_mark && $IA2<=$maximum_mark){

						/*echo($division);
						echo("\n");
						echo($exam_type);
						echo("\n");
						echo($sem);
						echo("\n");
						echo($subject);
						echo("\n");
						echo($year);
						echo("\n");
						echo($rollno);
						echo("\n");
						echo($IA1);
						echo("\n");
						echo($IA2);
						echo("\n");
						echo($remark);
						echo("\n");
						echo($avg);
						echo("\n");
						echo($remark1);
						echo("\n");
						echo($remark2);*/


	
						$set_response_cnt = "UPDATE marks SET IA1=$IA1 , IA2=$IA2 , avg=$avg , remark=$remark , remark1='$remark1', remark2='$remark2' WHERE division='$division' AND rollno='$rollno'  AND subject='$subject' ";

						if (!mysqli_query($conn, $set_response_cnt)) {
							echo "$$$$$$" . mysqli_error($conn);
						}
					}
					else{
						echo"Marks should be less than 20 for roll no - ".$rollno ;
						echo"Update Again!!";
					}
				}
				}
}
				?>

				<button onclick="document.location='score1.php'">Home Page</button>
				<?php
				$fetch_student="SELECT * FROM marks WHERE division='$division'AND sem=$sem AND year=$year AND subject='$subject'";
				$fetch_student_result=mysqli_query($conn, $fetch_student);
				echo"<table>";
				
				echo"<tr>";
				echo"<td>";
					echo("<b>Roll No</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>Name</b> ");
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
				echo"<td>";
					echo("<b>Average</b> ");
				echo"</td>";
				echo"<td>";
					echo("<b>Remark</b> ");
				echo"</td>";
				echo"</tr>";


				if ($fetch_student_result) {
				//fetches each row from score table
					while ($row = mysqli_fetch_array($fetch_student_result)) {
						
						echo"<tr>";
						echo"<td>";
						echo($row["rollno"]);
						echo"</td>";
						echo"<td>";
						echo($row["name"]);
						echo"</td>";
						echo"<td>";
						echo($row["subject"]);
						echo"</td>";
						echo"<td>";
						echo($row["IA1"]);
						echo"</td>";
						echo"<td>";
						if(is_null($row["remark1"])){
							echo"Null";
						}
						else{
							echo($row["remark1"]);
						}
						echo"</td>";					
						echo"<td>";
						echo($row["IA2"]);
						echo"</td>";
						echo"<td>";
						if(is_null($row["remark2"])){
							echo"Null";
						}
						else{
							echo($row["remark2"]);
						}
						echo"</td>";
						echo"<td>";
						echo($row["avg"]);
						echo"</td>";
						echo"<td>";
						if($row["remark"]){
							echo"Pass";
						}
						else
							echo "Fail";
						//echo($row["remark"]);
						echo"</td>";
						echo"</tr>";
						echo"<tr>";
						//echo"<hr>";
						echo"</tr>";
					}

				}
				echo"</table>";

?>

</body>
</html>