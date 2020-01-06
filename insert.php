<?php
include("conn.php");
$query="select Course_Name from course";
$data=mysqli_query($conn,$query);
$query1="select College_Name from college";
$data1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
	<div class="form-group">
      <label for="mob">Mobile:</label>
      <input type="text" class="form-control" id="mob" placeholder="Enter Mobile No" name="mob">
    </div>
    <div class="form-group">
      <label>Select Course</label>
		<select class="form-control" name="course" id="course">
		<?php while($row=mysqli_fetch_array($data)){?>
			<option value=<?php echo $row["Course_Name"]; ?>><?php echo $row["Course_Name"]; ?></option>
		<?php } ?>
		</select>
	  </label>
    </div>
	<div class="form-group">
      <label>Select College</label>
		<select class="form-control" name="college" id="college">
			<?php while($row=mysqli_fetch_array($data1)){?>
			<option value=<?php echo $row["College_Name"]; ?>><?php echo $row["College_Name"]; ?></option>
		<?php } ?>
		
		</select>
	  </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
