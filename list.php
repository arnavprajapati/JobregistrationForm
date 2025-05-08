<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>List of Candidates - Web Developer</title>
  <link rel="stylesheet" href="list.css">
</head>

<body>
  <div class="container">
    <a href="index.php" class="back-btn">← Back to Form</a>
    <h1>List of candidates for web developer job</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>DEGREE</th>
          <th>MOBILE</th>
          <th>EMAIL</th>
          <th>REFER</th>
          <th>POST</th>
          <th>OPERATION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        
          include 'connection.php';
          
          $selectQuery = " select * from jobregistration ";

          $query = mysqli_query($conn,$selectQuery);

          $nums = mysqli_num_rows($query);

          while($res = mysqli_fetch_array($query)){

            ?>
              <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['name']; ?></</td>
                <td><?php echo $res['degree']; ?></</td>
                <td><?php echo $res['mobile']; ?></</td>
                <td><?php echo $res['email']; ?></</td>
                <td><?php echo $res['refer']; ?></</td>
                <td><?php echo $res['jobPost']; ?></</td>
                <td class="operation-icons">
                    <a href="./updates.php?id=<?php echo $res['id']; ?>" class="edit-icon"  title="update">✏️</a>
                    <a href="./delete.php?id=<?php echo $res['id']; ?>" class="delete-icon" title="delete" >🗑️</a>
                </td>
              </tr>

            <?php

          }

        ?>
      </tbody>
    </table>
  </div>
</body>

</html>