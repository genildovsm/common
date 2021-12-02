<?php

namespace GenildoMartins\Common;

class Environment 
{
	/**
	 * Métod responsável por carregar as variáveis de ambiente
	 *
	 * @param string $dir "Caminho absoluto da pasta onde encontra-se o arquivo .env"
	 */
	public static function load($dir)
	{
		// VERIFICA SE O ARQUIVO EXISTE
		if (!file_exists($dir.'/.env'))
		{
			return false;
		}

		// DEFINE AS VARIÁVEIS DE AMBIENTE
		$lines = file($dir.'/.env');
		foreach ($lines as $line){
			putenv(trim($line));
		}
	}

}
