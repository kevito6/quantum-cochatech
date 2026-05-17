<?php
namespace Quantum\Controller;

class DefaultController extends Controller{
	public function homePage(): void{
		$template = 'home.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}

	public function embudo(): void{
		$template = 'embudo.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}

	public function chat(): void{
		$template = 'chat.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}

	public function inventario(): void{
		$template = 'inventario.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}

	public function clientes(): void{
		$template = 'clientes.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}

	public function estadisticas(): void{
		$template = 'estadisticas.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}

	public function cotizaciones(): void{
		$template = 'cotizaciones.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}
	
	public function ventas(): void{
		$template = 'ventas.html.twig';
		$args = [];
		print $this->twig->render($template, $args);
	}
	
	public function error(string $message): void{
		$template = 'error.html.twig';
		$args = [
			'message' => $message
		];
		print $this->twig->render($template, $args);
		
	}
}

?>
