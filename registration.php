
<html>
<head>
  <title>Registration</title>
  
</head>
<body>
  <form action="add_registration.php" method="post">
    student ID:<input type="text" name="std_id" required="" /></br>
	Student Name<input type="text" name="std_name" required="" /></br>
	Highest degree :<input type="text" name="h_degree" required="" /></br>
	Student Grade<input type="text" name="std_grade" required="" /></br>
	<button class="submit">submit</button>
	<!-- session start -->
	<?php session_start(); if(isset($_SESSION['err'])){ ?>
    <h2>error.....<?php echo $_SESSION['err']; ?></h2>
    <?php session_unset(); } ?>
  </form>
</body>
</html>