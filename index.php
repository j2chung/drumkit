<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="button" value="drum01" onclick="drum01play()">
    <input type="button" value="clap" onclick="clap2play()">
    <input type="checkbox" id="clapCheck" onclick="clapRepeat()">
    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">

  </body>
  <audio id="drum01" src="drumtest.mp3" type="audio/mpeg"> </audio>
  <audio id="clap2" src="clap2.wav" type="audio/mpeg"> </audio>
  <script src="jquery-3.4.1.min.js" charset="utf-8"></script>
  <script src="drum_sounds.js" charset="utf-8"></script>
</html>
