
if ( WEBGL.isWebGLAvailable() === false ) {
				document.body.appendChild( WEBGL.getWebGLErrorMessage() );
			}
			var container, viewer, stats, controls;
			var camera, scene, renderer;
			init();
			animate();
			function init() {
				container = document.createElement( 'div' );
				container.id = "display";
				//container = document.getElementById( 'display' );
				document.body.appendChild( container );
				camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.25, 20 );
				camera.position.set( - 1.8, 0.9, 2.7 );
				controls = new THREE.OrbitControls( camera );
				controls.target.set( 0, - 0.2, - 0.2 );
				controls.update();
				loadMesh('PigShip');
				renderer = new THREE.WebGLRenderer( { antialias: true } );
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( container.offsetWidth, window.innerHeight*3/4  );
				renderer.gammaOutput = true;
				container.appendChild( renderer.domElement );
				window.addEventListener( 'resize', onWindowResize, false );
				//stats
				//stats = new Stats();
				//container.appendChild( stats.dom );
			}
			function onWindowResize() {
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
				renderer.setSize( container.offsetWidth, window.innerHeight*3/4  );
			}
			//
			function animate() {
				requestAnimationFrame( animate );
				renderer.render( scene, camera );
				//stats.update();
			}
			
			function doFunction(value, envMap) {
			//var path = 'models/gltf/'+ value +'/' + value + '.gltf';
			delete3DOBJ('currentMesh');
			loadMesh(value, envMap);
			}
			
		    function delete3DOBJ(objName){
		        var selectedObject = scene.getObjectByName(objName);
		        scene.remove( selectedObject );
		        
		        animate();
		    }
			
		    function loadMesh(meshName){
				scene = new THREE.Scene();
				var urls = [ 'posx.jpg', 'negx.jpg', 'posy.jpg', 'negy.jpg', 'posz.jpg', 'negz.jpg' ];
				var loader = new THREE.CubeTextureLoader().setPath( 'bridge2/' );
		    	loader.load( urls, function ( texture ) {
		    	var pmremGenerator = new THREE.PMREMGenerator( texture );
				pmremGenerator.update( renderer );
				var pmremCubeUVPacker = new THREE.PMREMCubeUVPacker( pmremGenerator.cubeLods );
				pmremCubeUVPacker.update( renderer );
				var envMap = pmremCubeUVPacker.CubeUVRenderTarget.texture;
				var loader = new THREE.GLTFLoader().setPath( 'models/gltf/'+ meshName + '/' );
				meshName = meshName + ".gltf";
				loader.load( meshName, function ( gltf ) {
					gltf.scene.name = 'currentMesh';
					gltf.scene.traverse( function ( child ) {
						if ( child.isMesh ) {
							child.material.envMap = envMap;
						}
					} );
					
					scene.add( gltf.scene );
				} );
				pmremGenerator.dispose();
				pmremCubeUVPacker.dispose();
				scene.background = texture;
		    });}

	    