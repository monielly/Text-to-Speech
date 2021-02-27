<?php
if(isset($_POST['txt'])){
  $txt=$_POST['txt'];
  $txt=htmlspecialchars($txt);
  $txt=rawurlencode($txt);
  $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-TL');
  $player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
  echo $player;
}
?>
<form method="post">
  <input id="txt" name="txt" type="textbox" />
  <input name="submit" type="submit" value="Convert to speech" />
</form>   