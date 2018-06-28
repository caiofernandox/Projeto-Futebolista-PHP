// Inicializando a sessão
session_start();
 
if(isset($_SESSION['user']))
    {
        //Código para logar membros
 
        // Indentificação do usuário
        $user = $_SESSION['user'];
       
        // Informação para o usuário
    }
else
    {
        // Código para mostrar pessoas
   
    }
?>
 
Código para logar o usuário:
<?php
//User para logar
define("USER", "user");
 
// senha do usuário
define("PASS", "123456");
 
// sessão normal do user - Não está logado ------
        if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
            {
                // Processo de entrar na sessão -----------
                $user = trim($_REQUEST['username']);
                $pass = trim($_REQUEST['password']);
                if($user == USER && $pass == PASS)
                    {
             
                       
                        // inserindo a sessão
                        $_SESSION['user'] = USER;
                       
                        // Redirecionando para página inicial
                        header("Location: index.php");
                    }
                else
                    {
                        // user ou senhas erradas. Mostra erros aqui.
                       
                    }
               
            }
?>