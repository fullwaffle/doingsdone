<?php

require_once 'functions.php';
require_once 'data.php';
require_once 'helpers.php';

$page_content = include_template('main.php', [
    'projects' => $projects,
    'tasks' => $tasks,
    'show_complete_tasks' => rand(0, 1)
]);

$result = include_template('layout.php', [
    'content' => $page_content,
    'title' => 'New title'
]);

print($result);
