            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $login=$_POST['login'];
                $senha=$_POST['senha'];

                header ('Location:../public/comentario.php');

            }
            
            
            
            ?>
            
        

