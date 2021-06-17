<?php

namespace View {

	use Service\TodolistService;
	use Helper\InputHelper;

	class TodolistView {

		private TodolistService $todolistService;

		public function __construct(TodolistService $todolistService)
		{
			$this->todolistService = $todolistService;	
		}

		function showTodolist(): void
		{
			while (true) {
				$this->todolistService->showTodoList();

				echo "--------------------" . PHP_EOL;
				echo "MENU" . PHP_EOL;
				echo "--------------------" . PHP_EOL;
				echo "1. Tambah Todo" . PHP_EOL;
				echo "2. Hapus Todo" . PHP_EOL;
				echo "x. Keluar" . PHP_EOL;

				$pilihan = InputHelper::input('Pilih');
				if ($pilihan == '1') {
					$this->addTodolist();
				} elseif ($pilihan == '2') {
					$this->removeTodolist();
				} elseif ($pilihan == 'x') {
					break;
				} else {
					echo "Pilihan tidak dimengerti" . PHP_EOL;
				}
			}
			echo 'Sampai jumpa lagi ...' . PHP_EOL;
		}

		function addTodolist(): void
		{
			echo "-----------" . PHP_EOL;
			echo "MENAMBAH TODO LIST" . PHP_EOL;	
			echo "-----------" . PHP_EOL;

			$todo = InputHelper::input("Todo : (x untuk batal)");
			if ($todo == "x") {
				// batal
			} else {
				$this->todolistService->addTodolist($todo);
			}
		}

		function removeTodolist(): void
		{
			echo "-----------" . PHP_EOL;
			echo "MENGHAPUS TODO LIST" . PHP_EOL;	
			echo "-----------" . PHP_EOL;

			$pilihan = InputHelper::input("Nomor (x untuk batal)");
			if ($pilihan == 'x') {
				// batal
			} else {
				$this->todolistService->removeTodolist($pilihan);
			}
		}

	}

}