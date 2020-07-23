<?php
require_once 'model.php';

$post = getPostById($_GET['id']);

require 'templates/show.php';
