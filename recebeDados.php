<?php
			 $nome = $_POST["nome"];
			 $time = $_POST["time"];
			 $email = $_POST["email"];
			 $dataNascimento = $_POST["dataNascimento"];
			 $estado = $_POST["estado"];
			 $cidade = $_POST["cidade"];
			 $senha = $_POST["senha"];
			 $confirmarSenha = $_POST["confirmarSenha"];
			 $erro = FALSE;
			echo '$nome';
			if($nome == "" || strlen($nome)< 5){
					echo 'Nome invalido';
			};
			//validar time
				if($time == "" || strlen($time)< 5){
					echo 'time invalido';
				};
				//validar email
			if($email == "" || strlen($email)< 5){
					echo 'email invalido';
				}else{
						if(strstr($email)){
						echo 'email correto';
						}
					}
					//validar data de nascimento
				if(dataNascimento == "" || strlen(dataNascimento)< 5){
					echo 'data de nascimento invalido';
				};
				//validar cidade
				if(cidade == "" || strlen(cidade)< 5){
					echo 'cidade invalido';
				};
				//validar estado
				if(estado == "" || strlen(estado)< 5){
					echo 'estado invalido';
				};
				//validar senha
				if(senha == "" || strlen(senha)< 5 ){
					echo 'senha deve conter 5 caracteres';
				};
				//validar confirmar Senha
				if(senha === confirmarSenha ){
					echo 'As senhas devem ser iguais';
				};
			}
			 if(!$erro){
				 echo 'Todos os dados foram digitados corretamente! <br>';
				 }
			?>
