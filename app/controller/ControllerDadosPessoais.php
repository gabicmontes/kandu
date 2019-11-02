<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerDadosPessoais extends ClassRender implements InterfaceView {

	public function __construct() {
		$this->setTitle("Kandu - Perfil");
		$this->setDescription("Sistema de listagem de eventos da região");
		$this->setKeywords("eventos, curso, palestra, kandu");
		$this->setDir("dados");
		$this->renderLayout();
	}
}

?>