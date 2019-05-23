<?php
include('connection.php');

if(isset($_GET['id'])){
	$id=($_GET['id']);
	$query="SELECT * FROM video WHERE id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$idv=$row['id'];
		$name=$row['name'];
		$des=$row['description'];
        $vid=$row['video'];
        
	}
}

?>
 
<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Upload Info</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <img class="image image-circle" src="<?php echo $image?>">
      <div class="list-group list-group-flush">
        <a href="portal1.php" class="list-group-item list-group-item-action bg-light">Upload</a>
        <a href="all_uploads.php" class="list-group-item list-group-item-action bg-light">View all Uploads</a>
        <a href="album_info.php" class="list-group-item list-group-item-action bg-light">My Uploads</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
        <button class="btn btn-success" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" style="color:white;" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  style="color:white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" style="color:white;" href="logout.php">Link</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card card-body"  style="width:150%;">
                            <h4 class="text-info"><i class="fas fa-edit"></i></h4>
                            <form method="POST" action="process_login.php" name="form" style="width:100%;">
                            <div class="form-group">  
                                Id:<input type="text" name="id" class="form-control" value="<?php echo $idv;?>"></br>
                            </div> 
                            <div class="form-group">  
                                Name:<input type="text" name="name" class="form-control" value="<?php echo $name;?>" ></br>
                            </div>  
                            <div class="form-group">
                                Description:<input type="text" class="form-control" name="description" value="<?php echo $des;?>"><br>
                            </div> 
                            <div class="form-group">
                                Video:<input type="text" class="form-control" name="video" value="<?php echo $vid;?>"></br>            
                            </div> 
                        <a href="album_info.php" class="btn btn-info">Back</a>
                           
                            </form>
                </div>
            </div> 
        </div>
       
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
