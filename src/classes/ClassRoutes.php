<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes {

	use TraitUrlParser;

	private $Rota;

	#Método de retorno da rota;
 	/* O usuário só acessa as rotas que foram definidas aqui
 	Se ele tenta acessar qualquer outra coisa retorna ControllerHome
 	Segurança do site */
 	public function getRota() {

 		$Url = $this->parseUrl();
 		$I = $Url[0];

 		$this->Rota=array (
 			""=>"ControllerHome",
 			"home"=>"ControllerHome",
 			"feed"=>"ControllerFeed",
 			"login"=>"ControllerLogin",
 			"perfil"=>"ControllerPerfil",
 			"promotor"=>"ControllerPromotor",
 			"cadastro"=>"ControllerCadastro",
 			"dados"=>"ControllerDadosPessoais",
 			"cadastropromotor"=>"ControllerCadastroPromotor",
 			"cadastroevento"=>"ControllerCadastroEvento"
 		);

 		if(array_key_exists($I, $this->Rota)) {
 			if(file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")){
 				//var_dump(DIRREQ."app/controller/{$this->Rota[$I]}.php");
 				return $this->Rota[$I];
 			} else {
 				return "ControllerHome";
 			}
 		} else {
 			return "Controller404";
 		}
 	}

}

?>