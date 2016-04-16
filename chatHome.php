
<!DOCTYPE html>
<html>
  <head>
      <title>Rardard Chat Log</title>
      <meta charset='UTF-8'>
    <link rel='icon' href='favicon.ico'>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id="navBarSurround">
      <h1>Radard Chat Log</h1>
    </div>
    <div>
<img id='circle' src = "images/MainRadar2.jpg"/>
</div>
    <div id='grabphpdiv'>

    </div>
    <div id='msgSndRfs'>
      <input id='chatMessage' type="text" name="randomText" value=""> <!-- Input instead of form -->
      <button type="button" id='snd_btn'>Send</button> <!-- Possible event button -->
      <button type="button" id =button>Display</button>
    </div>

    <!-- Script at the bottom make sure DOM is ready -->
    <script src='lib/ajaxget.js'> </script>
    <script src='lib/ajaxput.js'> </script>
    <script src='chatLogRequest.js'> </script>
  </body>
</html>
