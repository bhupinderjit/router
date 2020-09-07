<?php

$app['database']->insert('users', [
    'name' => $_POST['name']
  ]);
  
  // Redirect back to homepage:
  header('Location: /');