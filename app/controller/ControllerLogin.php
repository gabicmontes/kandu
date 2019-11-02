<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassLogin;

class ControllerLogin extends ClassLogin {

	protected $Nome;
	protected $Email;
	protected $Cidade;
	protected $Senha;
	protected $SenhaConf;
	protected $TipoUser;


	public function __construct() {
		$Render = new ClassRender();
		$Render->setTitle("Kandú - Login");
		$Render->setDescription("Faça seu login");
		$Render->setKeywords("login, eventos");
		$Render->setDir("login");
		$Render->renderLayout();
	}

	public function recVariaveis() {
		if(isset($_POST['Email'])) {
			$this->Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Senha'])) {
			$this->Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['TipoUser'])) {
			$this->TipoUser = filter_input(INPUT_POST, 'TipoUser', FILTER_SANITIZE_SPECIAL_CHARS);
		}
	}

	#Chamar o método de cadastro da ClassCadastro
	public function logar() {
		$this->recVariaveis();
		if($this->TipoUser == "cidadao") {
			$x = $this->loginCidadao($this->Senha, $this->Email);
			echo "Cadastro efetuado com secesso!";
			header("Location: ../feed");
		} else {			
			if($this->TipoUser == "promotor") {
			$x = $this->loginPromotor($this->Senha, $this->Email);
			echo "Cadastro efetuado com secesso!";
			header("Location: ../feed");
			}
			else {
			echo "<script>alert('erroo')</script>";
			header("Location: ../login");
		}
		}

		
	}

	#Selecionar e exibir os dados do banco de dados
	public function selecionar() {
		$this->recVariaveis();
		$B = $this->selecionaClientes($this->Nome, $this->Sexo, $this->Cidade);

		echo "
		<table border='1'>
			<tr>
				<td>Nome</td>
				<td>Sexo</td>
				<td>Cidade</td>
			</tr> ";
			foreach($B as $C) {
				echo "
				<tr>
					<td>$C[Nome]</td>
					<td>$C[Sexo]</td>
					<td>$C[Cidade]</td>
				</tr>";
			}
		echo "
		</table>
		";
	}
}

?>