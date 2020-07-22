<?php
require_once 'model.php';

$posts = getAllPosts();

require 'templates/list.php';
