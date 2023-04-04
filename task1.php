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
        $agree = test_input($_POST["agree"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<h3>* Some fileds are required</h3>
	<form method="post" action="">
		<label>Name:</label>
		<input type="text" name="name" required>
        
        <br>
        <br>

		<label>Email:</label>
		<input type="email" name="email" required><br>
        <br>
        <br>
		<label>Group:</label>
		<input type="text" name="group" ><br>
        <br>
        <br>
        <label for="class_details">Class Details:</label>
        <textarea id="class_details" name="class_details"></textarea><br><br>
        <br>
        <br>
		<label>Gender:</label>
		<input type="radio" name="gender" value="male" required>Male
		<input type="radio" name="gender" value="female" required>Female<br>
        <br>
        <br>
		<label>Courses:</label><br>
		<input type="checkbox" name="courses[]" value="PHP">PHP<br>
		<input type="checkbox" name="courses[]" value="MySQL">MySQL<br>
		<input type="checkbox" name="courses[]" value="HTML">HTML<br>
		<input type="checkbox" name="courses[]" value="JavaScript">JavaScript<br>
        <br>
        <br>
		<label>Agree to terms and conditions:</label>
		<input type="checkbox" name="agree" required><br>

		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>