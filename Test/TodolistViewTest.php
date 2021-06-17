<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
	$todolistRepository = new TodolistRepositoryImpl();
	$todolistService = new TodolistServiceImpl($todolistRepository);
	$todolistView = new TodolistView($todolistService);

	$todolistService->addTodolist('Ikhsan');
	$todolistService->addTodolist('Heiryawan');
	$todolistService->addTodolist('Kuncoro');

	$todolistView->showTodolist();
}

function testViewAddTodolist(): void
{
	$todolistRepository = new TodolistRepositoryImpl();
	$todolistService = new TodolistServiceImpl($todolistRepository);
	$todolistView = new TodolistView($todolistService);

	$todolistService->addTodolist('Ikhsan');
	$todolistService->addTodolist('Heiryawan');
	$todolistService->addTodolist('Kuncoro');

	$todolistView->showTodolist();
	$todolistView->addTodolist();
	$todolistView->showTodolist();

}

function testViewRemoveTodolist(): void
{
	$todolistRepository = new TodolistRepositoryImpl();
	$todolistService = new TodolistServiceImpl($todolistRepository);
	$todolistView = new TodolistView($todolistService);

	$todolistService->addTodolist('Ikhsan');
	$todolistService->addTodolist('Heiryawan');
	$todolistService->addTodolist('Kuncoro');

	$todolistView->showTodolist();
	$todolistView->removeTodolist();
	$todolistView->showTodolist();
	$todolistView->removeTodolist();
	
}

testViewRemoveTodolist();
