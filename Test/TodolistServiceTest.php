<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodoList(): void
{
	$todolistRepository = new TodolistRepositoryImpl();
	$todolistRepository->addTodolist('Ikhsan');
	$todolistRepository->addTodolist('Heiryawan');
	$todolistRepository->addTodolist('Kuncoro');

	$todolistService =  new TodolistServiceImpl($todolistRepository);
	$todolistService->showTodoList();
}

function testAddTodolist(): void
{
	$todolistRepository = new TodolistRepositoryImpl();

	$todolistService =  new TodolistServiceImpl($todolistRepository);
	$todolistService->addTodolist('Ikhsan');
	$todolistService->addTodolist('Heiryawan');
	$todolistService->addTodolist('Kuncoro');

	$todolistService->showTodoList();
}

function testRemoveTodolist(): void
{
	$todolistRepository = new TodolistRepositoryImpl();
	
	$todolistService =  new TodolistServiceImpl($todolistRepository);
	$todolistService->addTodolist('Ikhsan');
	$todolistService->addTodolist('Heiryawan');
	$todolistService->addTodolist('Kuncoro');

	$todolistService->showTodoList();
	$todolistService->removeTodolist(1);
	$todolistService->showTodoList();

}
testRemoveTodolist();

