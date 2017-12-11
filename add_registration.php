
<?php
// Database connection
include('config.php');	
session_start();
$error_message="";
//valdating the input strings from the form
if($_POST['std_id'] =="" or $_POST['std_name']=="" or $_POST['h_degree']=="" or $_POST['std_grade']=="") 
{
  
    $error_message = "All Fields are required";
}
//Assigning the inputstrings to variables
$std_id=$_POST['std_id'];
$std_name=$_POST['std_name'];
$h_degree=$_POST['h_degree'];
$std_grade=$_POST['std_grade'];
 
 
//Execute the query
 
 
$sql="INSERT INTO student_info (std_id,std_name,h_degree,std_grade)
		        VALUES ('$std_id','$std_name','$h_degree','$std_grade')";
		//checking if the record is inserted or not		
	if ($db->multi_query($sql) === TRUE) {
    echo "New records created successfully";
// Link to view the results
	echo "<a href='view_results.php'>view results</a>";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
?>