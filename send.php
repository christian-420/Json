<?php

if (isset($_POST["message"]) && !empty($_POST["message"])) {
  $message["message"] = $_POST["message"];
  $js = file_get_contents("message.json");
  $js = json_decode($js, true);
  $js[] = $message;
  $js = json_encode($js);
  file_put_contents("message.json", $js);
  echo "Bien";
}
