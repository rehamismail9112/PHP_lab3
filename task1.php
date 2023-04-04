<!DOCTYPE html>
<html>
<head>
<h1>Application name : AAST_BIS class registration</h1>
</head>
<body>
	<h2>*Some fileds are required</h2>
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
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$courses = $_POST["courses"];
	$terms = $_POST["terms"];

}
?>