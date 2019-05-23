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
              <a class="nav-link" style="color:white;" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  style="color:white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>              
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" style="color:white;" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <form method="post" action="upload3.php"  name="form" enctype="multipart/form-data" onsubmit="return validateForm()"class="form-horizontal">
                                 
                                 <div class="form-group">
                                    Name: <input type="text" class="form-control" name="name" placeholder="Name">
                                  </div>
                                 <div class="form-group">
                                     Discription: <input type="text" class="form-control" name="description" placeholder="Discribe your Video">
                                 </div>
                                
                                   <div class="form-group">
                                       Video: <input type="file" class="form-control" name="video" placeholder="Your Video">
                                   </div>
                                   
                                 <div class="form-group">
                                     <input type="submit" class="btn btn-info" style="width:100%;" name="upload" value="submit">
                                 </div>
                             </form>
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
