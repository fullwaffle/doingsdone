<?php
function count_projects($tasks, $project) {
    $count = 0;

    foreach ($tasks as $task) {
        if ($task['project'] === $project) {
            $count++;
        }
    }

    return $count;
}

function get_time_left($date) {
    date_default_timezone_set('Europe/Moscow');
    $finalDate = strtotime($date);
    $currentDate = strtotime("now");
    $diff = $finalDate - $currentDate;

    return floor($diff / 3600);
}
