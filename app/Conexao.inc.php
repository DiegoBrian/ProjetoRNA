<?php 
	
	class Conexao{
		
		private static $conexao;

		public static function abrir_conexao(){
			if (!isset(self::$conexao)) {
				try {
					include_once 'config.inc.php';
				} catch (Exception $e) {
					
				}
			}
		}
		
	}
 ?>