<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;

//class ControllerFeed extends ClassRender implements InterfaceView {

class ControllerFeed extends ClassCadastro {
	public function __construct() {

		$Render = new ClassRender();
		$Render->setTitle("Kandu - Página Inicial");
		$Render->setDescription("Sistema de listagem de eventos da região");
		$Render->setKeywords("eventos, curso, palestra, kandu");
		$Render->setDir("feed");
		$Render->renderLayout();
	}

	public function selecionarEvento() {

		$B = $this->selecionaEvento();

		foreach($B as $C) {
				echo "

		<div class='py-5 pl-5' style='background-color: #fff; margin: 20px 10px 0px 10px; border-radius: 40px; box-shadow: 10 10 10 10;'>
          <div class='container'>
            <div class='row'>
              <div class='d-flex flex-column justify-content-center p-2 col-lg-10 order-1 order-lg-1'>
                <h3> $C[Nome] </h3>
                <p class='mb-0'>$C[Categoria]</p>
                <p class='lead mb-0'><b>Descrição: </b> $C[Descricao] </p>
                <p class='lead mb-0'><b>Local: </b> $C[Endereco] </p>
                <p class='lead mb-0'><b>Data: </b> $C[Data] às $C[Hora] </p> 
                <p class='lead mb-0'><b>Preço de entrada: </b> $C[Preco] </p> 
                <p class='lead mb-0'><b>Realização: </b> $C[Promotor] </p>              
              </div>
            </div>
          </div>
        </div>
		";
	}
}
}


/*

		<table border='1'>
			<tr>
				<td>Nome</td>
				<td>Data</td>
				<td>Hora</td>
			</tr> ";
			foreach($B as $C) {
				echo "
				<tr>
					<td>$C[Nome]</td>
					<td>$C[Data]</td>
					<td>$C[Hora]</td>
				</tr>";
			}
		echo "
		</table>*/

?>