<?php
//connecting to database values and variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dashboard";

//connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
     die('conection failed:'. mysqli_connect_error($conn));
}
// else{
//     die('conection failed:'. mysqli_connect_error($conn));
// }
?>
<?php


//Declaring variables for register

$error_message = array();
$success_message = array();

if (isset($_POST['register'])) {
    $firstname = trim(htmlentities($_POST['firstname']));
    $lastname = trim(htmlentities($_POST['lastname']));
    $username = trim(htmlentities($_POST['username']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $confirm_password = trim(htmlentities($_POST['confirm_password']));
    $image = $_FILES['image'];

    //Checking of input
    if (empty($firstname)) {
        array_push($error_message, "first name is required");
    }
    if (empty($lastname)) {
        array_push($error_message, "last name is required");
    }
    if (empty($username)) {
        array_push($error_message, "username is required");
    }
    if (empty($email)) {
        array_push($error_message, "email is required");
    }
    if (empty($password)) {
        array_push($error_message, "password is required");
    }
    if (empty($confirm_password)) {
        array_push($error_message, "Confirm your Password");
    }

    if ($password != $confirm_password) {
        array_push($error_message, "password not match");
    }

    //No repetition of email while signing up
    if (strlen($email) > 0) {
        $query = "SELECT * FROM adminlogin WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            array_push($error_message, " $email  already exist");
        }
    }
    if (strlen($username) > 0) {
        $query = "SELECT * FROM adminlogin WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            array_push($error_message, "$username already exist");
        }
    }
    //When there is no error, you can register using the following input
    if (count($error_message) === 0) {
        $password = md5($password);

        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];

        $file_sep = explode('.', $image_name);
        $file_extension = strtolower(end($file_sep));
        $extension = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($file_extension, $extension)) {
            $upload_image = './assets/img/' . $image_name;
            move_uploaded_file($image_tmp, $upload_image);

            // include "database.php";
            $sql = mysqli_query($conn, "INSERT INTO adminlogin (firstname, lastname, username, email, image, password) 
            VALUES ('$firstname', '$lastname', '$username','$email', '$upload_image', '$password')");
            header("location:index.php");
            if ($sql) {
                array_push($success_message, "Registration Successful");
            }
        }
    }
}
//Login Section
    if(isset($_POST['login'])){
        $username = trim(htmlentities($_POST['username']));
        $password = trim(htmlentities($_POST['password']));
        
        if(empty($username)){
            array_push($error_message, "username required");
        }
        if(empty($password)){
            array_push($error_message, "Password required");
        }

        if(count($error_message) == 0){
            $password = md5($password);

            $query = "SELECT * FROM adminlogin WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $query);

            if($row = mysqli_fetch_array($result) ){
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['image'] = $row['image'];

                header("location:index.php");
            }
            else{
                array_push($error_message, "Invalid Credential");
            }

        }
       

    }

?>