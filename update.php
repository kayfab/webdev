<?php
include('connection.php');


	$id=$_GET['id'];
	$query="SELECT*FROM video where id='$id'";
	$select_query=mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($select_query)){
		$id=$row['id'];		
		$des=$row['description'];
        $vid=$row['video'];
        
	}
	
?>

<html>
	<head>
		<title>DATA UPDATE</title>
	</head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
			body{
				margin: 0;
				background: url('images/');
				background-size:unset;
				color: white;
			}
			
	
			ul{
				list-style: none;
				padding: 0;
				margin: 0;
			   
	
			}
			ul li{
				float: left;
				width: 200px;
				height: 40px;
				background-color: black;
				line-height: 40px;
				text-align: center;
				font-size: 20px;
				opacity: .8;
				margin-right: 4px;
			}
			ul li a{
				text-decoration: none;
				color: white;
				display: block;
			}
			ul li a:hover{
				background-color: green;
			}
			ul li ul li{
				display: none; 
			}
			ul li:hover ul li{
				display: block;
			}
		   
			
			
		</style>
	<body> 
      
    <div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="nav" style="width: 100%;">
					
					
						<ul>
								<li><a href="index.html">Home <i class="fas fa-home"></i></a></li>
								<li><a href="#"></a>Videos <i class="fas fa-video"></i></a>
									<ul>
										<li><a href="learn.html">Learn Sign Language</a></li>
										<li><a href="music.html">Music</a></li>
										<li><a href="movie.html">Short Movies Clips</a></li>
										<li><a href="funny.html">Funny Clips</a>
										<li><a href="aware.html">Awareness</a></li>
									</ul>
								</li>
								
								<li><a href="contact.html">Contact  <i class="fas fa-phone-square"></i></a></li>
							</ul>
					</div>
				
					
					
				
				<!---End-top-menu-search---->
			</div>
			<!---End-header---->
        </div>
       
    <div class="container">
        
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-5">
            
                <div class="card card-body"   style="width:150%;">
                            <h4 class="text-info">Update Your Video<i class="fas fa-edit"></i></h4>
                            <form method="POST" action="process_login.php" name="form" style="width:100%;">
                             
                             
                            <div class="form-group">
                                Description:<input type="text" class="form-control" name="description" value="<?php echo $des;?>"placeholder="Description"><br>
                            </div> 
                            <div class="form-group">
                                Video:<input type="file" class="form-control" name="video" value="<?php echo $vid;?>"placeholder="Video"></br>            
                            </div> 
                        
                            <div class="form-group">
                                <button type="submit" name="update" value="update">Update</button>
                            </div>
                            </form>
                </div>
            </div> 
        </div>
       
            
    </div>       
	
		
	</body>
	
</html>
<?php
  include('connection.php');
  if(isset($_POST['update'])){    
     $des=$_POST['description'];
     $vid=$_FILES['video']['name'];
    
    
     $queryupdate=mysqli_query($conn,"update data set description='$des',video='$vid' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("Record updated successfully")</script>';
        header('refresh:0;url=album_info.php');
        } else{
        echo'<script>window.alert("Record not updated. Please try again.")</script>';
        header('refresh:0;url=update.php');			
        }
  }
?>
