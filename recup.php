<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  $messages = file_get_contents("message.json");
  $messages = json_decode($messages, true);

  for ($i = 0; $i < count($messages); $i++) {
  ?> <p> <?= $messages[$i]["message"]; ?> </p>
  <?php
  }
  ?>

</body>

</html>