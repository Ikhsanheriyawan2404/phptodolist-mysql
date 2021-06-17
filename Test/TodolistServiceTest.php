<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Config\Database;

function testShowTodoList(): void
{
	$connection = Database::getConnection();
	$todolistRepository = new TodolistRepositoryImpl($connection);

	$todolistService =  new TodolistServiceImpl($todolistRepository);
	$todolistService->showTodoList();
}

function testAddTodolist(): void
{
	$connection = Database::getConnection();
	$todolistRepository = new TodolistRepositoryImpl($connection);

	$todolistService =  new TodolistServiceImpl($todolistRepository);
	$todolistService->addTodolist('Ikhsan');
	$todolistService->addTodolist('Heiryawan');
	$todolistService->addTodolist('Kuncoro');
}

function testRemoveTodolist(): void
{
	$connection = Database::getConnection();
	$todolistRepository = new TodolistRepositoryImpl($connection);
	
	$todolistService =  new TodolistServiceImpl($todolistRepository);
	echo $todolistService->removeTodolist(5) . PHP_EOL;
	echo $todolistService->removeTodolist(4) . PHP_EOL;
	echo $todolistService->removeTodolist(3) . PHP_EOL;
}

testShowTodoList();