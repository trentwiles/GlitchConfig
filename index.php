<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

$climate->error('Ruh roh.');
$climate->comment('Just so you know.');
$climate->whisper('Not so important, just a heads up.');
$climate->shout('This. This is important.');
$climate->info('Nothing fancy here. Just some info.');

$progress = $climate->progress()->total(100);

for ($i = 0; $i <= 100; $i++) {
  $progress->current($i);

  // Simulate something happening
  usleep(800000);
}