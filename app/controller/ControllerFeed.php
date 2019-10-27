<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerFeed extends ClassRender implements InterfaceView {

	public function __construct() {
		$this->setTitle("Kandu - Página Inicial");
		$this->setDescription("Sistema de listagem de eventos da região");
		$this->setKeywords("eventos, curso, palestra, kandu");
		$this->setDir("feed");
		$this->renderLayout();
	}
}

?>