<?php
error_reporting(E_ALL);
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>School Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST"> 
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="input_field">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label for="password">Password</label>
                <input type="password" id="password" class="input" name="passwd" required>
            </div>
            <div class="input_field">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" class="input" name="connpasswd" required>
            </div>
            <div class="input_field">
                <label for="gender">Gender</label>
                <div class="custom_select" id="gender" required>
                <select name="gender" required>

                    <option>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="email_address">Email Address</label>
                <input type="text" id="email" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" class="input" name="phone" required>
            </div>
            <div class="input_field">
                <label for="address">Address</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="input_field_terms">
                <label class="check">
                    <input type="checkbox" id="terms" required> 
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
</form>
          </div>
</body>
</html>

<?php
 if($_POST['register'])
 {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['passwd'];
    $cpwd = $_POST['connpasswd'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

   // if($fname !="" && $lname !="" && $pwd !="" && $cpwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    //{
   $query = "INSERT INTO form ('id','fname','lname','passwd','connpasswd','gender','email','phone','address') values('$id','$fname','$lname','$pwd','$cpwd','$gender', '$email','$phone','$address')";
   $data = mysqli_query($conn,$query);
   if($data)
   {
      echo "Data Inserted into Database";
   }
else{
    echo "failed";
}   
 }
// else
 //{
   // echo "<script>alert('Please fill the form')</script>";
 //}
 //}

?>
