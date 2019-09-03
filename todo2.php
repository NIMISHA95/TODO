<!DOCTYPE html>
<html lang="en">
<head>
  <title>TO DO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>



<body background="/Sticky.jpg" width="33%">
  <?php
  $server="localhost";
  $username="dayscholars";
  $password="password";
  $database = "mydb";

  /* Create database  connection with correct username and password*/
  $connect=new mysqli($servername,$username,$password,$database);

  /* Check the connection is created properly or not */
  if($connect->connect_error)
      echo "Connection error:" .$connect->connect_error;
  else
  {
      echo "";
}
   if(isset($_POST['add']))
   {

     $textarea=$_POST['text'];

/*
   echo $textarea;*/

$sql = "INSERT INTO mytbl (todo,date,tik) VALUES ('$textarea',CURRENT_TIME(),0)";
$query = mysqli_query($connect,$sql);
}



   ?>

<pre>

</pre>
  <div class="container">
    <h1 class="text-center font-weight-bold text-danger">TO-DO <i class='far fa-clipboard' style='font-size:60px;color:black'></i></h1><pre>
    </pre>


    <form method="post" action="todo2.php">
<div class="form-group" >
     <div class="input-group mb-3">
   <textarea class="form-control" rows="2" id="todo" name="text" placeholder="Text here..."></textarea>
   <div class="input-group-append">
    <pre>  </pre> <button class="btn btn-info btn-lg" type="submit" name="add">ADD TASK</button>
  </div>
</div></div>
<pre>

</pre>

<div class="container">
  <div class="row">
    <div class="col">
      <h3>TO DO <i class='fas fa-calendar-check' style='font-size:48px;color:black'></i></h3>
      <ol class="list-group">
        <?php
          $qry2 = mysqli_query($connect,"SELECT id,todo,date,tik FROM mytbl WHERE tik=0");
          if(mysqli_num_rows($qry2)>0)
          {
              while($row=mysqli_fetch_array($qry2))
              {

        ?>

    <li class="list-group-item d-flex justify-content-between align-items-center text-dark ">
<p style=color:blue>  <small><?php echo $row['date']; ?></small></p>
      <?php echo $row['todo']; ?>
<input type="hidden" name="idd"  value="<?php $row['id']?>">
  <div class="text-right">
      <button type="submit" class="btn btn-outline-info  float-right" name="done"><a href="bt.php?id=<?php echo $row['id'];?>">DONE</a></button>

    </div>
  </li>
  <?php }} ?>
  </ol>
    </div>
    <div class="col">
      <h3> DONE <i class='fas fa-check' style='font-size:48px;color:black'></i></h3>
      <ol class="list-group">

        <?php
          $qry2 = mysqli_query($connect,"SELECT id,todo,date,tik FROM mytbl WHERE tik=1");
          if(mysqli_num_rows($qry2)>0)
          {
              while($row=mysqli_fetch_array($qry2))
              {

        ?>
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <p style=color:blue>  <small><?php echo $row['date']; ?></small></p>
      <?php echo $row['todo']; ?>
      <input type="hidden" name="idd2"  value="<?php $row['id']?>" >
      <div class="text-right">
           <button type="submit" class="btn btn-outline-info float-right" name="undo"><a href="bk.php?id=<?php echo $row['id'];?> ">UNDO</a></button>
         </div></li>
<?php }} ?>
  </ol>
    </div>
  </div>
  </div>

</body>
</html>
