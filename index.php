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
      <a href="list.html" class="check-form">Check Form</a>
    </div>
    <div class="right-panel">
      <h2>Apply for Web Developer Post</h2>
      <form action="#" method="POST">
        <div class="form-row">
          <input type="text" name="name" placeholder="enter your name *" required />
          <input type="text" name="qualification" placeholder="enter your qualification *" required />
        </div>
        <div class="form-row">
          <input type="tel" name="mobile" placeholder="mobile number *" required />
          <input type="email" name="email" placeholder="email id *" required />
        </div>
        <div class="form-row">
          <input type="text" name="references" placeholder="Any references *" required />
          <input type="text" name="position" value="Web Developer" readonly />
        </div>
        <div class="form-row">
          <button type="submit" class="register-btn">Register</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>



<?php
  include 'connection.php' ;
  
?>