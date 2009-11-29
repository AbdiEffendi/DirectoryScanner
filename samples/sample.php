<?php

  require 'src/directoryscanner.php';
  require 'src/filesonlyfilter.php';
  require 'src/includeexcludefilter.php';

  $scanner = new \TheSeer\Tools\DirectoryScanner;
  $scanner->addInclude('*.php');
  $scanner->addExclude('*filter*');
  $scanner->addExclude('./src/*');

  foreach($scanner('.') as $i) {
     var_dump($i);
  }