<?php 
include('connect.php');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username =  $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $Phone_no = $_POST['phone_no'];
  $Department = $_POST['Department_name'];
  $level = $_POST['level'];


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO student (user_name, name, email, password, phone, Dep_name, level) VALUES('S_$username', '$name', '$email', '$password_1', $Phone_no,'$Department','$level')";
  if ($db->query($query) == TRUE) {
  header("location:login.php");
} 
$db->close();

  }
}
?>

<!-- Display error messages in your HTML form -->
<?php if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>
