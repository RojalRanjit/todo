<?php
include('./dbconfig.php');
$sql="SELECT * from todo_list";
$result=$con->query($sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO LISTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
<?php


?>
  <div class="container">
  <h1 class="text-center">TODO LISTS</h1>
    <form action="todo.php" method="post">
        <input type="text" class="input"  name="todo" palceholder="Enter todo item" id="" required>
        <button type="submit" class="btn btn-primary add" >ADD TASK</button>
    </form>
    </div>
    <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TASKS</th>
      <th scope="col">DELETE</th>
      <th scope="col">UPDATE</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row=$result->fetch_assoc())
    {?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['title']?></td>
      <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <td><button class="btn btn-danger" name="del">DELETE</button></td>
      </form>
      <form action="update.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      <input type="hidden" name="todo" value="<?php echo $row['title']?>">
        <td><button class="btn btn-primary">UPDATE</button></td>
      </form>
    </tr>
    <?php
    }
    ?>
   
   
  </tbody>
</table> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>