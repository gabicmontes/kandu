<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassLogin extends ClassConexao {

	private $Db;

	#Cadastrará os cidadaos no sistema
	protected function loginCidadao($Senha, $Email) {


		$this->Db = $this->conexaoDB()->prepare("select * from cidadao where email_cidadao = '$Email' and senha_cidadao = '$Senha'");
		$this->Db->bindparam(":email_cidadao", $Email, \PDO::PARAM_STR);
        $this->Db->bindparam(":senha_cidadao", $Senha, \PDO::PARAM_STR);
        $this->Db->execute();

        $userRow = $this->Db->fetch(\PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["email"] = $userRow["email_cidadao"];
        $_SESSION["nome"] = $userRow["nome_cidadao"];
        $_SESSION["cidade"] = "Rio Pomba";
        $_SESSION["senha"] = $userRow["senha_cidadao"];
        $_SESSION["tipo"] = "cidadao";
        
	}

	protected function loginPromotor($Senha, $Email) {


		$this->Db = $this->conexaoDB()->prepare("select * from promotor where email_promotor = '$Email' and senha_promotor = '$Senha'");
		$this->Db->bindparam(":email_promotor", $Email, \PDO::PARAM_STR);
        $this->Db->bindparam(":senha_promotor", $Senha, \PDO::PARAM_STR);
        $this->Db->execute();

        $userRow = $this->Db->fetch(\PDO::FETCH_ASSOC);

        session_start();
        $_SESSION["email"] = $userRow["email_promotor"];
        $_SESSION["nome"] = $userRow["nome_promotor"];
        $_SESSION["cidade"] = "Rio Pomba";
        $_SESSION["senha"] = $userRow["senha_promotor"];
        $_SESSION["descricao"] = $userRow["senha_descricao"];
        $_SESSION["endereco"] = $userRow["endereco_promotor"];
        $_SESSION["tipo"] = "promotor";
        
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









































