<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf63070223.mysql.database.azure.com', 'nattametee@labitf63070223', 'JKHoso84', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$comment=$_REQUEST['comment'];
$link=$_REQUEST['link'];



$conn->close();

?>

<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="show.php">Start Bootstrap</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="show.php">Show</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Insert</a>
                </ul>
              </div>
            </div>
          </nav>
          <br>
          <br>
          <br>
          <br>
        <div class="container">
            <h1 class="display-3">Update Information</h1>
        </div>

        <div class="container">
            <form action = "update.php" method = "post" id="CommentForm" >
                <input type="hidden" name = "id" id="idName" value=<?php echo $id;?>>
                <div class="form-group">
                  <label for="your name">Name</label>
                  <input type="text" class="form-control" name = "name" id="idName" placeholder="Enter name" value=<?php echo $name;?>>
                </div>
                <div class="form-group">
                  <label for="commmant">Comment</label>
                  <textarea class="form-control" name = "comment" id="idComment" placeholder="Enter Comment" rows="3"><?php echo $comment;?></textarea>
                </div>
                <div class="form-group">
                    <label for="Link">Link</label>
                    <input type="text" class="form-control" name = "link" id="idLink" placeholder="Enter Link" value=<?php echo $link;?>>
                  </div>
                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
              </form>
        </div>
        
    
    </body>
</html>
