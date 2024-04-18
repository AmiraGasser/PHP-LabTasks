<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `borrower` WHERE boeeower_id=$method[1] ";
$sql= $con->prepare($query_delete);
$res=$sql->execute();
}

?>



<?php
$query ="SELECT * from borrower";
$sql= $con->prepare($query);
$res=$sql->execute();
$borrowers= $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Borrowers</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($borrowers as $borrower) :      ?>
      <th scope="row"><?php echo $borrower['boeeower_id']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$borrower['boeeower_id']): ?>
            <form action="/PHP-LabTasks/SessionTasks/Task6/Controller/BorrowerController/UpdateBorrower.php" method="post">
            <td><input type="text" name="name"  value="<?php echo $borrower['name']  ?>"></td>
            <input type="hidden" name="phone" value="<?php echo $borrower['phone'] ?>">
            <td><input type="text" name="email" value="<?php echo $borrower['email']  ?>"></td>
                <td> <button>save</button></td>
            </form>
          
          <?php else:?>
          <td><?php echo $borrower['name']  ?></td>
          <td><?php echo $borrower['phone']  ?></td>
          <td><?php echo $borrower['email']  ?></td>
          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$borrower['boeeower_id']?>">delete</a>
            <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$borrower['boeeower_id']?>">update</a>
        </td>
          <?php endif?>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>