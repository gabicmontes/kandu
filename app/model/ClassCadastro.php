<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao {

	private $Db;

	#Cadastrará os cidadaos no sistema
	protected function cadastroCidadao($Nome, $Email, $Cidade, $Senha) {
		$Id=0;
		$Cidade = 1;
		echo $Nome.$Email.$Cidade.$Senha;

		$this->Db = $this->conexaoDB()->prepare("insert into cidadao values(:id_cidadao, :nome_cidadao, :email_cidadao, :senha_cidadao, :id_cidade)");
		$this->Db->bindParam(":id_cidadao", $Id, \PDO::PARAM_INT);
		$this->Db->bindParam(":nome_cidadao", $Nome,\PDO::PARAM_STR);
		$this->Db->bindParam(":email_cidadao", $Email,\PDO::PARAM_STR);
		$this->Db->bindParam(":senha_cidadao", $Senha,\PDO::PARAM_STR);
		$this->Db->bindParam(":id_cidade", $Cidade,\PDO::PARAM_STR);
		$this->Db->execute();
	}


	}










































#Acesso ao banco de dados com seleção
	/*protected function selecionaClientes($Nome, $Sexo, $Cidade) {
		$Nome = '%'.$Nome.'%';
		$Sexo = '%'.$Sexo.'%';
		$Cidade = '%'.$Cidade.'%';
		$BFetch = $this->Db = $this->conexaoDB()->prepare("select * from teste where Nome like :nome and Sexo like :sexo and Cidade like :cidade ");
		$BFetch->bindParam(":nome", $Nome,\PDO::PARAM_STR);
		$BFetch->bindParam(":sexo", $Sexo,\PDO::PARAM_STR);
		$BFetch->bindParam(":cidade", $Cidade,\PDO::PARAM_STR);
		$BFetch->execute();

		$I = 0;
		while($Fecth = $BFetch->fetch(\PDO::FETCH_ASSOC)) {
			$Array[$I] = ['Nome'=>$Fecth['Nome'],'Sexo'=>$Fecth['Sexo'], 'Cidade'=>$Fecth['Cidade']];
			$I++;
		}
		return $Array;*/

?>









































