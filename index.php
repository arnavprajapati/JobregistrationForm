<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Developer Application Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="left-panel">
      <h1>Welcome</h1>
      <p>
        Please fill all the details carefully. This form can change your life.
      </p>
      <a href="list.php" class="check-form">Check Form</a>
    </div>
    <div class="right-panel">
      <h2>Apply for Web Developer Post</h2>
      <form action="" method="POST">
        <div class="form-row">
          <input type="text" name="user" placeholder="enter your name *" required />
          <input type="text" name="degree" placeholder="enter your qualification *" required />
        </div>
        <div class="form-row">
          <input type="tel" name="mobile" placeholder="mobile number *" required />
          <input type="email" name="email" placeholder="email id *" required />
        </div>
        <div class="form-row">
          <input type="text" name="refer" placeholder="Any references *" required />
          <input type="text" name="jobProfile" value="Web Developer" readonly />
        </div>
        <div class="form-row">
          <button type="submit" class="register-btn" name="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>



<?php
  include 'connection.php' ;
  
  if(isset($_POST['submit'])){

    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobProfile = $_POST['jobProfile'];

    $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobPost) values ('$name', '$degree','$mobile', '$email','$refer','$jobProfile') ";

    $res = mysqli_query($conn,$insertquery);

    if($res){
      ?>
        <script>
          alert('data inserted succesfully');
        </script>
      <?php
    }else{
      ?>
        <script>
          alert('data not inserted successfully');
        </script>
      <?php
    }
  }
?>