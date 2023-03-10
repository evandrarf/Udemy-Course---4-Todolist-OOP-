<?php

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

require_once './entity/Todolist.php';
require_once './repository/TodolistRepository.php';
require_once './service/TodolistService.php';
require_once './view/TodolistView.php';
require_once './helper/InputHelper.php';

echo "Aplikasi Todolist" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
