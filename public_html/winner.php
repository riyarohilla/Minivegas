<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>winner</title>
  </head>
  <body style="background-image:   url('everyone.jpg');      background-repeat: no-repeat;   background-attachment: fixed;  background-size: cover;">
    <div class="card-body" style="margin-top:200px;">
            <h5 class="card-title text-center" style="color:white;">Enter the winner : </h5>
            <form class="form-signin" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="winname"class="form-control" autofocus>
                
              </div>

              
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="sbmt" style="margin-top:40px;">SUBMIT</button>
              <hr class="my-4">
        <div class="card-body" style="margin-top:200px;">
            <h5 class="card-title text-center" style="color:white;">Enter the looser : </h5>
            <form class="form-signin" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="loosename"class="form-control" autofocus>
                
              </div>

              

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="lsbmt" style="margin-top:40px;">SUBMIT</button>
              <hr class="my-4">
              </form>
          </div>
              

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['sbmt']))
{
	$name1=$_POST["winname"];  
    //$password1=$_POST["password"]; 
	$_SESSION["uid1"]="$name1";
    echo "<script>
	window.location.href='winnername.php';
	</script>";
	exit;
}
if(isset($_POST['lsbmt']))
{
	$name2=$_POST["loosename"];  
    //$password1=$_POST["password"]; 
	$_SESSION["uid2"]="$name2";
    echo "<script>
	window.location.href='loosername.php';
	</script>";
	exit;
}

	
?>