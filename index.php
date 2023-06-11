<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="camera/asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="camera/asset/css/style.css">
      <link rel="stylesheet" type="text/css" href="camera/asset/css/style1.css">
      <style>
         .box {
         background: transparent;
         position: relative;
         width:auto;
         }
         .frame {
         position: absolute;
         top: 55%;
         left: 50%;
         transform: translate(-50%, -50%);
         border: 3px solid #e9e9e9;
         z-index: 3;
         }
         .camera{
         width:500px;
         border-radius:10px;
         border:10px solid;
         border-style: outset;
         box-shadow: 0px 1px 2px #eee, 0px 2px 2px #e9e9e9, 0px 3px 2px #ccc, 0px 4px 2px #c9c9c9, 0px 5px 2px #bbb, 0px 6px 2px #b9b9b9, 0px 7px 2px #999, 0px 7px 2px rgba(0, 0, 0, 0.5), 0px 7px 2px rgba(0, 0, 0, 0.1), 0px 7px 2px rgba(0, 0, 0, 0.73), 0px 3px 5px rgba(0, 0, 0, 0.3), 0px 5px 10px rgba(0, 0, 0, 0.37), 0px 10px 10px rgba(0, 0, 0, 0.1), 0px 20px 20px rgba(0, 0, 0, 0.1);
         }
      </style>
      
      <script src="camera/asset/qrcode/vue/vue.min.js"></script>
      
   </head>
   <body oncontextmenu = "return false;">
      <img class="wave" src="camera/asset/img/wave.png">
      <div class="time-container">
         <div class="display-time">
            <h2>QRCode Fare Payment System</h2>
            <h6 style="color:#000">
               <?php
                  $Today=date('y:m:d');
                  $new=date('l, F d, Y',strtotime($Today));
                  echo $new; ?>
            </h6>
         </div>
      </div>
      <div class="container">
         <div class="img">
         </div>
         <div class="login-content">
            <!-- scan -->
            <div id="app" class="row box">
               <div class="col-md-4 col-md-offset-4">
                  <ul style="list-style:none;display:none">
                     <li v-if="cameras.length === 0" class="empty">No cameras found</li>
                     <li v-for="camera in cameras">
                        <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)"
                           class="active"><input type="radio" class="align-middle mr-1" checked> {{
                        formatName(camera.name) }}</span>
                        <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                        <a @click.stop="selectCamera(camera)"> <input type="radio" class="align-middle mr-1">@{{
                        formatName(camera.name) }}</a>
                        </span>
                     </li>
                  </ul>
                  <div class="clearfix"></div>
                  <!-- form scan -->
                  <form action="" method="POST" id="myForm">
                     <input style="display:none" type="text" name="qrcode" id="code" autofocus>
                  </form>
               </div>
               <div class="col-xs-12 preview-container">
                  <figure class="box frame" style="width:200px;height:200px"> </figure>
                  <video id="preview" class="camera" autofocus></video>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </script>
      
      <script src="camera/asset/qrcode/instascan/instascan.min.js"></script>
      <script src="camera/asset/qrcode/scanner/scanner.js"></script>
   </body>
</html>