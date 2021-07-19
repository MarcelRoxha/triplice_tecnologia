<?php
session_start();
/**

 * 
 *  */
if (!isset($_SESSION['username'])) {
    header("location: index.php");
} else {
    $usuario = $_SESSION['username'];
}
//unset($_SESSION['username']);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./stililo.css">
        <link rel="icon" href="./imagens/icon_logo_v1.png">
    </head>
    <body id="corpo-adminPage">        
    <center>
        <div id="imgmysql">
                    <img src="./imagens/logo_padrao_oficial.png" width="446">
                </div>
        
    </center>
                
        <nav class="logo">

            

                <ul>
                    <li>
                        <div id="imgboostrap">
                            <a href="https://getbootstrap.com/" target="_blank">
                                <img src="./imagens/icone_booststrap.png" width="100">
                            </a>
                            
                        </div>
                    </li>
                    <li>
                        <div id="imgfirebase">
                            <a href="https://firebase.google.com/"target="_blank">
                            <img src="./imagens/icone_firebase.png" width="250">
                            </a>
                        </div>

                    </li>

                    <li>
                        <div id="imgmysql">
                            
                            <a href="https://www.mysql.com/"target="_blank"> 
                            <img src="./imagens/icone_mysql.png" width="250">
                            </a>
                        </div>
                    </li>


                    <li>
                        <div id="imgmysql">
                            
                            <a href="https://github.com/"target="_blank">
                             <img src="./imagens/GitHub-Logo.png" width="250">
                            </a>
                           
                        </div>
                    </li>

                </ul>

        </nav>
        
    <center>
        <br><br>
        <div>Bem vindo <?php echo "$usuario" ?></div>
    </center>
        
         

</body>
</html>
