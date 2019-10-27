<?php

namespace Src\Traits;

trait TraitUrlParser {

	#Divide a Url em um Array
	public function parseUrl() {
		return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
		/*EXPLODE: transforma em array delimitando por barra
		RTRIM: remove os espaços
		*/
	}
}


?>