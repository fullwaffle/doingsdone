<?php
$projects = [
    'incoming' => 'Входящие',
    'study' => 'Учеба',
    'work' => 'Работа',
    'homework' => 'Домашние дела',
    'car' => 'Авто'
];

$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'project' => $projects['work'],
        'success' => false
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'project' => $projects['work'],
        'success' => false
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'project' => $projects['study'],
        'success' => true
    ],
    [
        'name' => 'Встреча с другом',
        'date' => '22.12.2023',
        'project' => $projects['incoming'],
        'success' => false
    ],
    [
        'name' => 'Купить корм для кота',
        'date' => null,
        'project' => $projects['homework'],
        'success' => false
    ],
    [
        'name' => 'Заказать пиццу',
        'date' => null,
        'project' => $projects['homework'],
        'success' => false
    ],
];
