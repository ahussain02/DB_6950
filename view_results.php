<?php
//database connections
include('config.php');	
session_start();

//query to select all the records from the database
$sql = "SELECT std_id, std_name, h_degree, std_grade FROM student_info";
$result = $db->query($sql);
//displaying all the records from the database in a table form.
echo "<table style='width:100%;border: 1px solid black;'>";
echo "<tr>
    <th style='border: 1px solid black;'>Student ID</th>
    <th style='border: 1px solid black;'>Student Name</th> 
    <th style='border: 1px solid black;'>Highest Degree</th>
	<th style='border: 1px solid black;'>Student Grade</th>
  </tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td style='padding-left:120px;border: 1px solid black;' >"; echo $row["std_id"]; echo "</td>";
		echo"<td style='padding-left:120px;border: 1px solid black;'>"; echo $row["std_name"]; echo "</td>";
		echo"<td style='padding-left:150px;border: 1px solid black;'>"; echo $row["h_degree"]; echo "</td>";
		echo"<td style='padding-left:120px;border: 1px solid black;'>"; echo $row["std_grade"]; echo "</td>";
		echo "</tr>";
	}      
} else {
    echo "0 results";
}
$db->close();
?>