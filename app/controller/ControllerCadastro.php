<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;

class ControllerCadastro extends ClassCadastro {

	protected $Nome;
	protected $Email;
	protected $Cidade;
	protected $Senha;
	protected $SenhaConf;


	public function __construct() {
		$Render = new ClassRender();
		$Render->setTitle("Kandú - Cadastro");
		$Render->setDescription("Faça seu cadastro");
		$Render->setKeywords("cadastro, eventos");
		$Render->setDir("cadastro");
		$Render->renderLayout();
	}

	public function recVariaveis() {
		if(isset($_POST['Nome'])) {
			$this->Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Email'])) {
			$this->Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Cidade'])) {
			$this->Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Senha'])) {
			$this->Senha = md5(filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_SPECIAL_CHARS));
		}
		if(isset($_POST['SenhaConf'])) {
			$this->SenhaConf = md5(filter_input(INPUT_POST, 'SenhaConf', FILTER_SANITIZE_SPECIAL_CHARS));
		}
	}

	#Chamar o método de cadastro da ClassCadastro
	public function cadastrar() {
		$this->recVariaveis();
		echo $this->SenhaConf;
		if($this->Senha == $this->SenhaConf) {
			$this->cadastroCidadao($this->Nome, $this->Email, $this->Cidade, $this->Senha);
			echo "Cadastro efetuado com secesso!";
			header("Location: ../feed");
		} else {
			echo "<script>alert('erroo')</script>";
			header("Location: ../cadastro");
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