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

	<script src="build/three.js"></script>
	<script src="js/libs/inflate.min.js"></script>
	<script src="js/loaders/FBXLoader.js"></script>
	<script src="js/controls/OrbitControls.js"></script>
	<script src="js/WebGL.js"></script>
	<script src="js/libs/stats.min.js"></script>
	<script src="js/loaders/GLTFLoader.js"></script>
	<script src="js/pmrem/PMREMGenerator.js"></script>
	<script src="js/pmrem/PMREMCubeUVPacker.js"></script>

</head>
<body>

<div class="container-fluid no-gutters " >
  <div class="row">
  	<div class="col-sm-12">
            <?php    
                $files = glob('models/gltf/**/*.gltf' );
                
                foreach($files as $key => $value){
                   $files[$key] = basename($value, ".gltf");
                }
            ?>
		<nav class="navbar navbar-expand-sm shadow p-3 mb-5 navbarMain navbar-light rounded">
       		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
				<div class=" btn-group-toggle" data-toggle="buttons" role="group" aria-label="First group">
  					<?php foreach ($files as $model): ?>
						<input id="clickMe" class="btn btn-info " type="button" value="<?= $model ?>" onclick="doFunction(this.value);" />
						
					<?php endforeach ?>
				</div>	           
			</div>
                  
         	</div>
         </nav>

			  <div class="row">
  	<div class="col-sm-12">
          	<div id="canvas" class="z-depth-3">
<!--            		<div id="info">
                	<a href="http://threejs.org" target="_blank" rel="noopener">three.js</a> - FBXLoader<br />
                </div> -->
            </div> 
   	
            <script src="js/render.js"></script>
    	</div>
    	</div>
    	    	</div>
    	</div>
	</div> <!-- models end -->
</body>
</html>