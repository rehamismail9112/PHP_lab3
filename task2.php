<!DOCTYPE html>
<html>
<head>
<h1>Application name : AAST_BIS class registration</h1>
</head>
<body>
<?php

$name = $email = $gender = $agree = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
	<h3>* Some fileds are required</h3>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Name:</label>
		<input type="text" name="name" required><br><br>
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
        <label>Group:</label>
		<input type="text" name="group" ><br> <br>
        <label for="class_details">Class Details:</label>
        <textarea id="class_details" name="class_details"></textarea><br><br>
        <br>
        <br>

		<label>Gender:</label>
		<input type="radio" name="gender" value="male" required>Male
		<input type="radio" name="gender" value="female" required>Female<br><br>
		<label>Courses:</label>
		<select name=" select courses[]" multiple>
			<option value="php">PHP</option>
			<option value="javascript">JavaScript</option>
			<option value="mysql">MySQL</option>
			<option value="html">HTML</option>
		</select><br><br>
		<input type="checkbox" name="terms" value="agree" required>I agree to the terms and conditions<br><br>
		<input type="submit" name="submit" value="Submit">
	
	</form>

	<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];

		if(isset($_POST['group'])){
			$group = $_POST['group'];
		} else {
			$group = "N/A";
		}

		if(isset($_POST['class_details'])){
			$class_details = $_POST['class_details'];
		} else {
			$class_details = "N/A";
		}

		$gender = $_POST['gender'];
        if(isset($_POST['courses']) && is_array($_POST['courses'])){
            $courses = implode(", ", $_POST['courses']);
        } else {
            $courses = "N/A";
        }

		$agree = isset($_POST['agree']) ? "Yes" : "No";

		echo "<h3>Your Given values are as:</h3>";
		echo "Name: $name <br>";
		echo "Email: $email <br>";
		echo "Group: $group <br>";
		echo "Class Details: $class_details <br>";
		echo "Gender: $gender <br>";
		echo "your Courses are: $courses <br>";
		echo "Agreed to terms and conditions: $agree <br>";
	}
	?>
</body>
</html>