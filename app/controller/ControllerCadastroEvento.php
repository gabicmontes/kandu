<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;

class ControllerCadastroEvento extends ClassCadastro {

	protected $Nome;
	protected $Endereco;
	protected $Cidade;
	protected $Descricao;
	protected $Hora;
	protected $Categoria;
	protected $Preco;
	protected $Data;


	public function __construct() {
		$Render = new ClassRender();
		$Render->setTitle("Kandú - Cadastro de Evento");
		$Render->setDescription("Faça seu cadastro");
		$Render->setKeywords("cadastro, eventos");
		$Render->setDir("cadastroevento");
		$Render->renderLayout();
	}

	public function recVariaveis() {
		if(isset($_POST['Nome'])) {
			$this->Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Endereco'])) {
			$this->Endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Cidade'])) {
			$this->Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Descricao'])) {
			$this->Descricao = filter_input(INPUT_POST, 'Descricao', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Categoria'])) {
			$this->Categoria = filter_input(INPUT_POST, 'Categoria', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Hora'])) {
			$this->Hora = filter_input(INPUT_POST, 'Hora', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Preco'])) {
			$this->Preco = filter_input(INPUT_POST, 'Preco', FILTER_SANITIZE_SPECIAL_CHARS);
		}
		if(isset($_POST['Data'])) {
			$this->Data = filter_input(INPUT_POST, 'Data', FILTER_SANITIZE_SPECIAL_CHARS);
		}
	}

	#Chamar o método de cadastro da ClassCadastro
	public function cadastrarEvento() {
		$this->recVariaveis();
		$this->cadastroEvento($this->Nome, $this->Endereco, $this->Descricao, $this->Hora, $this->Preco, $this->Data);
		echo "<script>
		window.alert('Cadastro realizãdo com sucesso');
		window.location.href = '../cadastroevento';</script>";
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