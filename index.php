<?php
#!/usr/bin/php


require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

$ve = phpversion();

$v = substr($ve, 0, 3);

if($v < 7.4){
  $climate->comment('NOTICE: You are running PHP ' . $v . " We reccomend using PHP 7.3 or higher.");

}

$progress = $climate->progress()->total(100);

$climate->bold('Please wait...');

for ($i = 0; $i <= 100; $i++) {
  $progress->current($i);

  // Simulate something happening
  usleep(8000);
}

$type = $argv[1];

$types = array(
  "report" => "valid",
  "check" => "valid"
);

if($types[$type] !== "valid"){
  die()
}

$climate->red("ERROR: Invalid argument ");
