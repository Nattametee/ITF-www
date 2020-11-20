<html>

  <head>
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
  <style>
    body {
  background-color: lightblue;
  }
    table {
  background-color: white;
  }
    tr {
  background-color: #FFF8DC;
  }
    .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:Delete span {
  padding-right: 25px;
}

.button:Delete span:after {
  opacity: 1;
  right: 0;
}
</style>
    </style>
  </head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>     

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf63070223.mysql.database.azure.com', 'nattametee@labitf63070223', 'JKHoso84', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="nav-link" href="show_01.php">Lab Database</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="show_01.php">Show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index_01.php">Insert</a>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
<div class="container">
<h1 class="display-3">DATA BASE LAB13</h1>
</div>
  
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr class="alert alert-success">
      <th width="50"> <div align="center">Name</div></th>
      <th width="500"> <div align="center">Comment </div></th>
      <th width="100"> <div align="center">Link </div></th>
      <th width="200"> <div align="center">Change </div></th>
    </tr>
  </thead>
  
  <tbody>
<?php while($Result = mysqli_fetch_array($res))
{?>
    <tr>
      <td><?php echo $Result['Name'];?></td>
      <td><?php echo $Result['Comment'];?></td>
      <td><?php echo $Result['Link'];?></td>
      <td>
        <form method="POST" action="delete.php">
         <input type="hidden" name="id" value="<?php echo $Result['ID']; ?>" />
        <button class="button" style="vertical-align:middle"><span>Delete </span></button>
        </form>
        <form method="POST" action="edit.php">
         <input type="hidden" name="id" value="<?php echo $Result['ID']; ?>" />
          <input type="hidden" name="name" value="<?php echo $Result['Name']; ?>" />
          <input type="hidden" name="comment" value="<?php echo $Result['Comment']; ?>" />
          <input type="hidden" name="link" value="<?php echo $Result['Link']; ?>" />
        <button type="submit" class="btn btn-success" >Edit</button>
        </form>
      </td>
    </tr>
<?php
}
?>
  </tbody>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
