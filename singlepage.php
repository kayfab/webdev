<?php
include('connection.php');
include('process_login.php');

?>
<!DOCTYPE HTML>
	<head>
		<title>Video</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	</head>
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
				font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"></a>
				</div>   
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
								<li><a href="signup.html">Upload <i class="fas fa-upload"></i></a></li>
								<li><a href="contact.html">Contact  <i class="fas fa-phone-square"></i></a></li>
							</ul>
							
				</div>
					
				
				<!---End-top-menu-search---->
		
			<!---End-header---->
			</div>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			
			<div class="container-fluid">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Categories of videos</h3>
					</div>
					<div class="right-content-heading-right">
						
					</div>
					<div class="clear"> </div>
				</div>
				<div class="inner-page">
				<div class="title">
					<h3> <?php echo $row['description']?></h3>
					<ul>
						<li><h4>By:<?php echo $row['name']?></h4></li>
						 
					</ul>
				</div>
				<div class="video-inner">
				<div class="card ">
				
				<tbody>
				<?php
					
	
				$select="SELECT*FROM video WHERE id='$id'";
				$select_query=mysqli_query($conn,$select);
				while($row=mysqli_fetch_array($select_query)){
				?>
				<tr>
				<td>
				<video  width="320" height="240" controls>
					<source src="<?php echo $row['video'] ?>">
				</video>
				<?php
						}
				?>
						

					
			</video>
			</div                                                                                                                                                                                                                                                              >
					<!---<iframe src="//player.vimeo.com/video/24681824" width="100%" height="500px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>---->
				</div>
				<div class="clear"> </div>
				<div class="video-details">
					
				</div>
				<div class="clear"> </div>
				
				<div class="clear"> </div>
				<div class="share-artical">
		  				<h3> Also share on</h3>
		  					<ul>
		  						<li><a href="#"><img src="images/facebook.png" title="facebook">Facebook</a></li>		  						
		  						<li><a href="#"><img src="images/in.png" title="linked-in">Linked-in</a></li> 						
		  						
		  					</ul>
		  		</div>
		  		<div class="artical-commentbox">					
					<div class="table-form">
							<h4 class="text-info">Leave a comment<i class="form-group"></i></h4>		
						<form method="POST" action="comment.php" name="comment" class="form-group" >

						<input type="text" class="form-control" name="cname" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						<input type="text" class="form-control" name="cemail" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<textarea value="Message:"  name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Comment:</textarea>	
						
						<div class="form-group">
                                <button type="submit"  name="submit" class="btn btn-info" style="width:10%;" value="Login">Submit Comment</button>
						</div>  
					</form>					
				</div>
		  		</div>
			</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---start-copy-right---->
		<div class="copy-right">
			<p> &copy;Let's Talk Kenya Sign Language | Design by .... <a href="">..</a></p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>

