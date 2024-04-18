<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `Author` WHERE author_id=$method[1] ";
$sql= $con->prepare($query_delete);
$res=$sql->execute();
}

?>



<?php
$query ="SELECT * from Author";
$sql= $con->prepare($query);
$res=$sql->execute();
$authors= $sql->fetchAll(PDO::FETCH_ASSOC);
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
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Biography</th>
        <th scope="col">Nationality</th>
        <th scope="col">ac</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($authors as $author) :      ?>
      <th scope="row"><?php echo $author['author_id']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$author['author_id']): ?>
            <form action="/PHP-LabTasks/SessionTasks/Task6/Controller/AuthorController/UpdateAuthor.php" method="post">
            <td><input type="text" name="name"  value="<?php echo $author['name']  ?>"></td>
            <input type="hidden" name="author_id" value="<?php echo $author['author_id'] ?>">
            <td><input type="text" name="biography" value="<?php echo $author['biography']  ?>"></td>
            <td><input type="text" name="nationality" value="<?php echo $author['nationality']  ?>"></td>
                <td> <button>save</button></td>
            </form>
          
          <?php else:?>
          <td><?php echo $author['name']  ?></td>
          <td><?php echo $author['biography']  ?></td>
          <td><?php echo $author['nationality']  ?></td>
          
          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$author['author_id']?>">delete</a>
            <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$author['author_id']?>">update</a>
        </td>
          <?php endif?>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>