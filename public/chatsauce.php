<?php
require_once "php/validate.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="scripts/semantic-ui-css/semantic.min.css">
  <title>SimpleWebRTC Demo</title>
  <style>
    html { margin-top: 20px; }
    #chat-content { height: 180px;  overflow-y: scroll; }
  </style>
</head>
<body>
  <!-- Main Content -->
  <div class="ui container">
    <h1 class="ui header">Simple Chat Sauce</h1>
    <hr>
    <div class="ui two column stackable grid">

  <!-- Chat Section -->
  <div class="ui ten wide column">
    <div class="ui segment">
      <!-- Chat Room Form -->
      <form class="" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="ui form">
          <div class="fields">
            <div class="field">
              <label>Enter nickname</label>
              <input type="text" placeholder="Enter user name" id="username" name="nickname">
            </div>
            <div class="field">
              <label>Room</label>
              <input type="text" placeholder="Enter room name" id="roomName" name="roomName">
            </div>
          </div>
          <br>
          <div class="ui buttons">
            <div id="create-btn" class="ui submit orange button">Create Room</div>
            <div class="or"></div>
            <div id="join-btn" class="ui submit green button">Join Room</div>
          </div>
        </div>
      </form>
      <!-- Chat Room Messages -->
      <div id="chat"></div>
    </div>
  </div>
  <!-- End of Chat Section -->

  <!-- Local Camera -->
  <div class="ui six wide column">
    <h4 class="ui center aligned header" style="margin:0;">
      Local Camera
    </h4>
    <img id="local-image" class="ui large image" src="">
    <video id="local-video" class="ui large image hidden" autoplay></video>
  </div>
  <div class="" style="padding:20px;">
    <?php    echo  $sign_user;?>
    </h2>
  </div>
</div>

<!-- Remote Cameras -->
<h3 class="ui center aligned header">Remote Cameras</h3>
<div id="remote-videos" class="ui stackable grid">
  <div class="four wide column">
    <img class="ui centered medium image" src="images/image.png">
  </div>
  <div class="four wide column">
    <img class="ui centered medium image" src="images/image.png">
  </div>
  <div class="four wide column">
    <img class="ui centered medium image" src="images/image.png">
  </div>
  <div class="four wide column">
    <img class="ui centered medium image" src="images/image.png">
  </div>
</div>
  </div>

  <!-- Chat Template -->
  <script id="chat-template" type="text/x-handlebars-template">
    <h3 class="ui orange header">Room ID -> <strong>{{ room }}</strong></h3>
    <hr>
    <div id="chat-content" class="ui feed"> </div>
    <hr>
    <div class="ui form">
      <div class="ui field">
        <label>Post Message</label>
        <textarea id="post-message" name="post-message" rows="1"></textarea>
      </div>
      <div id="post-btn" class="ui primary submit button">Send</div>
    </div>
  </script>

  <!-- Chat Content Template -->
<script id="chat-content-template" type="text/x-handlebars-template">
  {{#each messages}}
    <div class="event">
      <div class="label">
        <i class="icon blue user"></i>
      </div>
      <div class="content">
        <div class="summary">
          <a href="#"> {{ username }}</a> posted on
          <div class="date">
            {{ postedOn }}
          </div>
        </div>
        <div class="extra text">
          {{ message }}
        </div>
      </div>
    </div>
  {{/each}}
</script>
<!-- Remote Video Template -->
<script id="remote-video-template" type="text/x-handlebars-template">
  <div id="{{ id }}" class="four wide column"></div>
</script>

  <!-- Scripts -->
  <script src="scripts/jquery/dist/jquery.min.js"></script>
  <script src="scripts/semantic-ui-css/semantic.min.js"></script>
  <script src="scripts/handlebars/dist/handlebars.min.js "></script>
  <script src="scripts/simplewebrtc/out/simplewebrtc-with-adapter.bundle.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
