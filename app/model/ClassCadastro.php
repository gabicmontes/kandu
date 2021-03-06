<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao {

	private $Db;

	#Cadastrará os cidadaos no sistema
	protected function cadastroCidadao($Nome, $Email, $Cidade, $Senha) {
		$Id=0;
		$Cidade = 1;

		$this->Db = $this->conexaoDB()->prepare("insert into cidadao values(:id_cidadao, :nome_cidadao, :email_cidadao, :senha_cidadao, :id_cidade)");
		$this->Db->bindParam(":id_cidadao", $Id, \PDO::PARAM_INT);
		$this->Db->bindParam(":nome_cidadao", $Nome,\PDO::PARAM_STR);
		$this->Db->bindParam(":email_cidadao", $Email,\PDO::PARAM_STR);
		$this->Db->bindParam(":senha_cidadao", $Senha,\PDO::PARAM_STR);
		$this->Db->bindParam(":id_cidade", $Cidade,\PDO::PARAM_STR);
		$this->Db->execute();
	}

	protected function cadastroPromotor($Nome, $Email, $Cidade, $Senha, $Endereco, $Descricao) {
		$Id=0;
		$Cidade = 1;

		$this->Db = $this->conexaoDB()->prepare("insert into promotor values(:id_promotor, :nome_promotor, :email_promotor, :senha_promotor, :endereco_promotor, :descricao_promotor, :id_cidade)");
		$this->Db->bindParam(":id_promotor", $Id, \PDO::PARAM_INT);
		$this->Db->bindParam(":nome_promotor", $Nome,\PDO::PARAM_STR);
		$this->Db->bindParam(":email_promotor", $Email,\PDO::PARAM_STR);
		$this->Db->bindParam(":senha_promotor", $Senha,\PDO::PARAM_STR);
		$this->Db->bindParam(":endereco_promotor", $Endereco,\PDO::PARAM_STR);
		$this->Db->bindParam(":descricao_promotor", $Descricao,\PDO::PARAM_STR);
		$this->Db->bindParam(":id_cidade", $Cidade,\PDO::PARAM_STR);
		$this->Db->execute();
	}

	protected function cadastroEvento($Nome, $Endereco, $Descricao, $Hora, $Preco, $Data) {
		$Id=0;
		$Cidade = 1;
		$Categoria = 1;
		$Promotor = 1;

		$this->Db = $this->conexaoDB()->prepare("insert into evento values(:id_evento, :nome_evento, :data_evento, :local_evento, :hora_evento, :descricao_evento, :preco_evento, :id_categoria, :id_promotor, :id_cidade)");
		$this->Db->bindParam(":id_evento", $Id, \PDO::PARAM_INT);
		$this->Db->bindParam(":nome_evento", $Nome,\PDO::PARAM_STR);
		$this->Db->bindParam(":data_evento", $Data,\PDO::PARAM_STR);
		$this->Db->bindParam(":local_evento", $Endereco,\PDO::PARAM_STR);
		$this->Db->bindParam(":hora_evento", $Hora,\PDO::PARAM_STR);
		$this->Db->bindParam(":descricao_evento", $Descricao,\PDO::PARAM_STR);
		$this->Db->bindParam(":preco_evento", $Preco,\PDO::PARAM_STR);
		$this->Db->bindParam(":id_categoria", $Categoria,\PDO::PARAM_STR);
		$this->Db->bindParam(":id_promotor", $Promotor,\PDO::PARAM_STR);
		$this->Db->bindParam(":id_cidade", $Cidade,\PDO::PARAM_STR);
		$this->Db->execute();
	}

	#Acesso ao banco de dados com seleção
	protected function selecionaEvento() {
		$Id;
		$Nome;
		$Endereco;
		$Cidade;
		$Descricao;
		$Hora;
		$Preco;
		$Data;
		$BFetch = $this->Db = $this->conexaoDB()->prepare("select * from evento");
		$BFetch->bindParam(":id_evento", $Id, \PDO::PARAM_INT);
		$BFetch->bindParam(":nome_evento", $Nome,\PDO::PARAM_STR);
		$BFetch->bindParam(":data_evento", $Data,\PDO::PARAM_STR);
		$BFetch->bindParam(":local_evento", $Endereco,\PDO::PARAM_STR);
		$BFetch->bindParam(":hora_evento", $Hora,\PDO::PARAM_STR);
		$BFetch->bindParam(":descricao_evento", $Descricao,\PDO::PARAM_STR);
		$BFetch->bindParam(":preco_evento", $Preco,\PDO::PARAM_STR);
		$BFetch->bindParam(":id_categoria", $Categoria,\PDO::PARAM_STR);
		$BFetch->bindParam(":id_promotor", $Promotor,\PDO::PARAM_STR);
		$BFetch->bindParam(":id_cidade", $Cidade,\PDO::PARAM_STR);
		$BFetch->execute();

		$I = 0;
		while($Fecth = $BFetch->fetch(\PDO::FETCH_ASSOC)) {
			$Array[$I] = ['Id'=>$Fecth['id_evento'],'Nome'=>$Fecth['nome_evento'],'Data'=>$Fecth['data_evento'],'Endereco'=>$Fecth['local_evento'],'Hora'=>$Fecth['hora_evento'],'Descricao'=>$Fecth['descricao_evento'],'Preco'=>$Fecth['preco_evento'],'Categoria'=>$Fecth['id_categoria'],'Promotor'=>$Fecth['id_promotor'], 'Cidade'=>$Fecth['id_cidade']];
			$I++;
		}
		return $Array;
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









































