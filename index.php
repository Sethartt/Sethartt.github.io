<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Artur Tabor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4 rounded shadow p-3 mb-5 leftCol">
      <h2>About Me</h2>
       <img src="images/MyPhoto.png" class="rounded img-fluid" alt="MyPhoto"> 
<!--       <p>A passionate programmer, 3D graphic artist and climber. 
      In programming, I focused on "back-end" rather than "front-end" solutions. 
      In my free time I create 3D models in the "Blender" program, 
      I write scripts in "Unity Engine" and I go to the climbing wall.</p> -->
      
      <p> Programmer, 3D artist and climber</p>
      
      <h3>Contact:</h3>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <p>E-mail: artur_tabor@poczta.pl</p>
            </li>
          </ul>
      <h3>Links:</h3>
      <p>Where you can find me</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LinkedIn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Facebook</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8 tab-content">
    
		<nav class="navbar nav-tabs navbar-expand-xl shadow p-3 mb-5 navbarMain navbar-light rounded">
       		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
            	  <ul class="nav nav-tabs">
        
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#programming">Programming projects</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#models">3D Models</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#resume">Resume</a>
                    </li>
                  </ul>
         	</div>
         </nav>
         <!-- NavBar end -->
         
    	<div id="home" class="container tab-pane active">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            	
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="" alt="" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="" alt="" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="" alt="" width="1100" height="500">
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div><!-- Carousel end -->
            
            <br>
              <h2>TITLE HEADING</h2>
              <h5>Title description, Sep 2, 2017</h5>
              <div class="fakeimg">Fake Image</div>
              <p>Some text..</p>
              <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco.</p>
        </div><!-- Home end -->
        
        <div id="programming" class="container tab-pane fade">
       		 <br>
              <h2>TITLE HEADING</h2>
              <h5>Title description, Sep 2, 2017</h5>
              <div class="fakeimg">Fake Image</div>
              <p>Some text..</p>
              <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div><!-- Programing end -->
            
        <div id="models" class="container tab-pane fade">
        	<div class="embed-responsive embed-responsive-1by1 z-depth-3">
            <iframe src="three.php" width="700" height="700">
            	<p>Your browser does not support iframes.</p>
            </iframe>
            </div>
		</div> <!-- models end -->
            
         <div id="resume" class="container tab-pane fade">
       		 <br>
       		 <embed src="pdf/resume.pdf" type="application/pdf" width="100%" height="600px" />
		</div> <!-- resume end -->
    </div>
  </div>
</div>

<div class="jumbotron jumbotronFooter" >
    <p> &copy; 2019. Artur Tabor </p>
</div>
</body>
</html>