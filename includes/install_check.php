<?php
// Check for existence of the predefined constant, which is set to true in index.php

  if(!defined('CHECK_PHPCHESS')){
    die("Hacking attempt");
    exit;
  }

// Check if the file installed.txt exists
  $filename = './bin/installed.txt';

// if yes, set $isappinstalled to true
  if(file_exists($filename)){
    $isappinstalled = 1;
  }

?>
