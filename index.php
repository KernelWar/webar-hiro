<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="realidad-aumentada.png"/>
  <title>WebAR-Hiro</title>
  <script src="aframe/aframe.min.js"></script>
  <script src="aframe/aframe-layout-component.min.js"></script>
  <script src="aframe/aframe-ar.js"></script>
  <script src="aframe/aframe-spe-particles-component.js"></script>
  <script>
    // WebXR requires HTTPS, so the site doesn't work if someone manually enters
    // the URL and ends up using HTTP. To work around this, force redirect from
    // http to https for non-localhost addresses.
    console.log("protocolo: ");
    console.log(window.location.protocol);
    if (window.location.protocol == "http:") {
      window.location = window.location.href.replace('http:', 'https:');
    }
  </script>
</head>

<body>
  <a-scene embedded arjs="debugUIEnabled: false;" inspector="url: http://localhost:3333/dist/aframe-inspector.js">
    <a-assets>
      <a-asset-item id="obj-tipi" src="objetos/tipi.gltf"></a-asset-item>
      <a-asset-item id="obj-fogata" src="objetos/fogata.gltf"></a-asset-item>
    </a-assets>
    <a-marker preset="hiro" position="" rotation="" material="" arjs-hit-testing="" visible="false">
      
      <a-entity gltf-model="#obj-tipi" scale="0.229 0.229 0.229" position="-0.65 0.031 -0.508" rotation="0 -118.338 0"
        visible=""></a-entity>
      <a-entity gltf-model="#obj-tipi" scale="0.229 0.229 0.229" position="0.67 0.039 -0.518" rotation="0 175.809 0"
        visible=""></a-entity>
      <a-entity geometry="primitive: circle" rotation="-90 0 0" material="src: objetos/arena.jpg"
        position="0.034 0.026 -0.082" scale="1.292 1.286 1.994"></a-entity>
      <a-entity gltf-model="#obj-fogata" position="-0.088 0.046 0.033" scale="0.126 0.126 0.126"></a-entity>
      <a-entity layout="type: box; columns: 1; margin: 5" position="0 0.137 -0.151">
        <a-entity
          spe-particles="texture: objetos/fog.png; velocity: .2 1 0; velocity-spread: .2 0 .2; particle-count: 50; max-age: 4; size: 3,8; opacity: 0,1,0; color: #aaa,#222">
        </a-entity>
      </a-entity>

    </a-marker>

    <a-entity camera></a-entity>
  </a-scene>
</body>

</html>