<?php 

$con = mysqli_connect('localhost', 'root', '', 'college');
$teachers = $con->query('select * from teachers');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All teachers</title>
  <style>
  table, tr, td, th {
    border: 1px solid #333;
    border-collapse: collapse;
  }
  th, td {
    padding: 10px;
  }
  tr:nth-child(odd) {
    background: #333;
    color: #fff;
  }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php while($teacher =$teachers->fetch_object()) : ?>
      <tr>
        <td><?php echo $teacher->id; ?></td>
        <td><?php echo $teacher->name; ?></td>
        <td><?php echo $teacher->email; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
  
</body>
</html>