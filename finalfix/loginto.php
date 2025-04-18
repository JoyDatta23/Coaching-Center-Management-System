


<?php
include('connect.php');
include('err.php');

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = $_POST['user'];

    // Initialize an array to store error messages
    $errors = array();

    // Check for empty username and password
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // If there are no validation errors, proceed with the login attempt
    if (count($errors) == 0) {
        $query = "SELECT * FROM $user WHERE (user_name='$username') AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
			if($user=='Teacher'){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
				header("location:teacherview.php");
			}
            elseif($user=='Admin'){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
				header("location:adminview.php");}
            elseif($user=='Student'){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header("location:studentview.php");}
        } else {
            header("Location: wrong_credentials.php");
        }
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