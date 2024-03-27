<?php
$host="localhost";
$username="root";
$password="";
$dbname="backendcourse";
$con= mysqli_connect($host, $username, $password,  $dbname);
$query_select = "SELECT * FROM `author`";
$select = mysqli_query($con, $query_select);

$authors = $select->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Authors</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Biography</th>
        <th scope="col">Nationality</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($authors as $author) :      ?>
        <tr>
          <th scope="row"><?php echo $author['author_id']  ?></th>
          <td><?php echo $author['name']  ?></td>
          <td><?php echo $author['biography']  ?></td>
          <td><?php echo $author['nationality']  ?></td>
        </tr>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>