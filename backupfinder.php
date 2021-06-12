<?php
 error_reporting(0);
$OS = PHP_OS;
$vermelho="\033[0;31m";
$verde="\033[0;32m";
$amarelo="\033[1;33m";
	
	
	echo $verde."\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n
	[+]=============================================================================[+]
	[+]             [B]ackup[F]inder - https://github.com/woliveira1993             [+]
	[+]=============================================================================[+]
	                            
                            _ood>H&H&Z?#M#b-\.
                        .\HMMMMMR?`\M6b.'`' ''``v.
                     .. .MMMMMMMMMMHMMM#&.      ``~o.
                   .   ,HMMMMMMMMMM`' '           ?MP?.
                  . |MMMMMMMMMMM'                 `'$b&\
                 -  |MMMMHH##M'                     HMMH?
                -   TTM|     >..                   \HMMMMH
               :     |MM\,#-''$~b\.                `MMMMMM+
              .       ``'H&#        -               &MMMMMM|
              :            *\v,#MHddc.              `9MMMMMb
              .               MMMMMMMM##\             `'':HM
              -          .  .HMMMMMMMMMMRo_.              |M
              :             |MMMMMMMMMMMMMMMM#\           :M
              -              `HMMMMMMMMMMMMMM'            |T
              :               `*HMMMMMMMMMMM'             H'
               :                MMMMMMMMMMM|             |T
                ;               MMMMMMMM?'              ./
                 `              MMMMMMH'               ./'
                  -            |MMMH#'                 .
                   `           `MM*                . `
                     _          #M: .    .       .-'
                        .          .,         .-'
                           '-.-~ooHH__,,v~--`'

    __  __           __      __  __            ____  __                 __
   / / / /___ ______/ /__   / /_/ /_  ___     / __ \/ /___ _____  ___  / /_
  / /_/ / __ `/ ___/ //_/  / __/ __ \/ _ \   / /_/ / / __ `/ __ \/ _ \/ __/
 / __  / /_/ / /__/ ,<    / /_/ / / /  __/  / ____/ / /_/ / / / /  __/ /_
/_/ /_/\__,_/\___/_/|_|   \__/_/ /_/\___/  /_/   /_/\__,_/_/ /_/\___/\__/
	\n\n
	[+]=============================================================================[+]
	[+]             Modo de uso: php exploit.php list.txt wordlist.txt              [+]
	[+]=============================================================================[+]
	\n\n
	";
	
	$lista = file($argv[1]);
	$wordlist = file($argv[2]);
	
	$lista = array_map("trim",$lista);
	$wordlist = array_map("trim", $wordlist);

			foreach($lista as $site) {
				$http = substr($site, 0,4);
				$barra = substr($site, -1);
				if($http == "http"){
					foreach($wordlist as $conf) {
							if($barra == "/"){
								echo "$vermelho $site$conf\n";
								$conecta =@file_get_contents("$site $conf");
							}else{
								echo "$vermelho $site/$conf\n";
								$conecta =@file_get_contents("$site/$conf");
							}
							
							if($conecta) {
							fwrite(fopen("vuln.txt","a+"),$site."/". $conf."\n");
							echo "$verde FUCKED => ".$site."/". $conf."\n";
							}							
						}
				} else {	
						echo "Insira um site valido: $site/\n";
				}}
				

					echo "\n\n\n$amarelo Arquivo Salvo => vuln.txt\n\n\n\n\n";
				
