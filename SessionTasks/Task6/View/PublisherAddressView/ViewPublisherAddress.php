<?php
$db="mysql:host=localhost;dbname=backendcourse";
$con= new PDO($db,"root","");
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `bublisher_address` WHERE address_name=$method[1] ";
$sql= $con->prepare($query_delete);
$res=$sql->execute();
}

?>



<?php
$query ="SELECT * from bublisher_address";
$sql= $con->prepare($query);
$res=$sql->execute();
$addresses= $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Publisher Address</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr>
        <th scope="col">Address</th>
        <th scope="col">Publisher</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($addresses as $address) :      ?>
      <th scope="row"><?php echo $address['address_name']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$address['address_name']): ?>
            <form action="/PHP-LabTasks/SessionTasks/Task6/Controller/PublisherAddressController/UpdatePublisherAddress.php" method="post">
            <td><input type="text" name="publisher_id"  value="<?php echo $address['publisher_id']  ?>"></td>
                <td> <button>save</button></td>
            </form>
          
          <?php else:?>
          <td><?php echo $address['publisher_id']  ?></td>
          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$address['address_name']?>">delete</a>
            <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$address['address_name']?>">update</a>
        </td>
          <?php endif?>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>