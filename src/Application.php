<?php
namespace Quantum;

use Quantum\Controller\DefaultController;

class Application{
	private DefaultController $defaultController;

	public function __construct(){
		$this->defaultController = new DefaultController();
	}

	public function run(): void{
		$action = filter_input(INPUT_GET, 'action');	
		$isPostSubmission = ($_SERVER['REQUEST_METHOD'] === 'POST');

		switch ($action){
			case 'embudo':
				$this->defaultController->embudo();
				break;

			case 'chat':
				$this->defaultController->chat();
				break;

			case 'inventario':
				$this->defaultController->inventario();
				break;

			case 'clientes':
				$this->defaultController->clientes();
				break;

			case 'estadisticas':
				$this->defaultController->estadisticas();
				break;
				
			case 'cotizaciones':
				$this->defaultController->cotizaciones();
				break;

			case 'ventas':
				$this->defaultController->ventas();
				break;

			default:
				$this->defaultController->homePage();
				break;
		}
	}
}

?>
