<?php 
	
	class Usuario{
		
		private $id;
		private $nome;
		private $email;
		private $senha;
		private $data_registro;
		private $ativo;


		public function __construct($id, $nome, $email, $senha, $data_registro, $ativo){
			$this->id = $id;
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->data_registro = $data_registro; 
			$this->ativo = $ativo;
		}
		

		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->Senha;
		}
		public function getDataRegistro(){
			return $this->data_registro;
		}
		public function isAtivo(){
			return $this->ativo;
		}

		public function setId($id){
			$this->id = $id;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
		public function setDataRegistro($data_registro){
			$this->data_registro = $data_registro;
		}
		public function setAtivo($ativo){
			$this->ativo = $ativo;
		}

	}



 ?>