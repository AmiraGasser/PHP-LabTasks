<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `book` WHERE book_id=$method[1] ";
$sql= $con->prepare($query_delete);
$res=$sql->execute();
}

?>



<?php
$query ="SELECT * from book";
$sql= $con->prepare($query);
$res=$sql->execute();
$books= $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Books</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Quantity</th>
        <th scope="col">ISBN</th>
        <th scope="col">Genre ID</th>
        <th scope="col">Publisher ID</th>
        <th scope="col">Author ID</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book) :      ?>
      <th scope="row"><?php echo $book['book_id']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$book['book_id']): ?>
            <form action="/PHP-LabTasks/SessionTasks/Task6/Controller/BookController/UpdateBook.php" method="post">
            <td><input type="text" name="title"  value="<?php echo $book['title']  ?>"></td>
            <input type="hidden" name="quantity" value="<?php echo $book['quantity'] ?>">
            <td><input type="text" name="ISBN" value="<?php echo $book['ISBN']  ?>"></td>
            <td><input type="text" name="genre_id" value="<?php echo $book['gener_id']  ?>"></td>
            <td><input type="text" name="publisher_id" value="<?php echo $book['publisher_id']  ?>"></td>
            <td><input type="text" name="author_id" value="<?php echo $book['autor_id']  ?>"></td>
                <td> <button>save</button></td>
            </form>
          
          <?php else:?>
          <td><?php echo $book['title']  ?></td>
          <td><?php echo $book['quantity']  ?></td>
          <td><?php echo $book['ISBN']  ?></td>
          <td><?php echo $book['gener_id']  ?></td>
          <td><?php echo $book['publisher_id']  ?></td>
          <td><?php echo $book['autor_id']  ?></td>
          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$book['book_id']?>">delete</a>
            <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$book['book_id']?>">update</a>
        </td>
          <?php endif?>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>