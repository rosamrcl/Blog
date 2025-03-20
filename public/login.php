<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costureza TI</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>Blog</h1>
        <img src="../../public/img/costureza.png" alt="">
        <nav>            
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Publicações</a></li>
            
        </nav>
    </header>
    <main>
        <section class="hero">
            

        </section>
        <section class="login"> 
            <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $login=$_POST['login'];
                $senha=$_POST['senha'];

                header ('Location: ../../ressources/views/home.html');

            }
            
            
            
            ?>
        
                

        </section>

    </main>
    <footer>
        <a href="https://github.com/RosaCL"><img src="../../public/img/costureza.png" alt=""></a>
    </footer>
    
</body>
</html>