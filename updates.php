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
                
            <?php
                include 'connection.php';

                $ids = $_GET['id'];
                $showquery = "select * from jobregistration where id={$ids}";
                $showdata = mysqli_query($conn,$showquery);
                $arrayData = mysqli_fetch_array($showdata);

                if (isset($_POST['submit'])) {

                    $idUpdate = $_GET['id'];

                    $name = $_POST['user'];
                    $degree = $_POST['degree'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $refer = $_POST['refer'];
                    $jobProfile = $_POST['jobProfile'];

                    // $insertquery = " insert into jobregistration(name,degree,mobile,email,refer,jobPost) values ('$name', '$degree','$mobile', '$email','$refer','$jobProfile') ";

                    $updatequery = " update jobregistration set name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobPost='$jobProfile' where id=$idUpdate  ";

                    $res = mysqli_query($conn, $updatequery);

                    header('location:index.php');

                    if ($res) {
                ?>
                        <script>
                            alert('data update succesfully');
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert('data not update successfully');
                        </script>
                <?php
                    }
                }
                ?>

                <div class="form-row">
                    <input type="text" name="user" placeholder="enter your name *" value="<?php echo $arrayData['name']; ?>" required />
                    <input type="text" name="degree" placeholder="enter your qualification *" value="<?php echo $arrayData['degree']; ?>" required />
                </div>
                <div class="form-row">
                    <input type="tel" name="mobile" placeholder="mobile number *" value="<?php echo $arrayData['mobile']; ?>" required />
                    <input type="email" name="email" placeholder="email id *" value="<?php echo $arrayData['email']; ?>" required />
                </div>
                <div class="form-row">
                    <input type="text" name="refer" placeholder="Any references *" value="<?php echo $arrayData['refer']; ?>" required />
                    <input type="text" name="jobProfile" value="Web Developer" value="><?php echo $arrayData['jobPost']; ?>"  />
                </div>
                <div class="form-row">
                    <button type="submit" class="register-btn" name="submit">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>