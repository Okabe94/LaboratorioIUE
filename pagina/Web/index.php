<?php
$query = require 'bootstrap.php';
$task = $query-> selectAll('estudiante');
require 'index.view.php';
