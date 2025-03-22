<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costureza TI</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/header.css">
    <link rel="stylesheet" href="../ressources/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>Blog</h1>               
        <nav>            
                <li><a href="../public/comentario.php">Home</a></li>
                <li><a href="../ressources/views/index.html">Login</a></li>
                <li><a href="../ressources/views/sobre.html">Sobre</a></li>            
        </nav>
    </header>
    <?php       
        $user=$_POST['user'];
        $titulo=$_POST['titulo'];
        $msg=$_POST['msg'];                            
    ?>
    <main>
        <section class="publi">
            <aside>
                <img src="../public/img/perfil.png" alt="">
                <h2><span>Rosa Chagas</span></h2>
                <p>Com 38 anos e formada em Direito, sempre teve interesse pela área de tecnologia desde a adolescência. Após anos dedicados aos estudos para concursos públicos, decidiu retomar sua paixão por esse universo. Atualmente, vem adquirindo novos conhecimentos no curso de Técnico em Informática do SENAI, onde também teve a oportunidade de fazer novas amizades e expandir sua rede de contatos.</p>
                <h2><span>Redes Sociais</span></h2>
                <a target="_blank" href="https://www.instagram.com/rosachagasmrcl/"><i class="fa-brands fa-instagram" style="color: #e2e6ee;"></i></a>
                <a target="_blank" href="https://bsky.app/profile/rosamrcl.bsky.social"><i class="fa-brands fa-bluesky" style="color: #e2e6ee;"></i></a>
                <a target="_blank" href="https://github.com/RosaCL"><i class="fa-brands fa-github"style="color: #e2e6ee;"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/maria-rosa-chagas-lima-16730a293/"><i class="fa-brands fa-linkedin" style="color: #e2e6ee;"></i></a>
                <a href="https://open.spotify.com/user/mariarosacl2008"><i class="fa-brands fa-spotify" style="color: #e2e6ee;"></i></a>

                                
            
            </aside>   

        </section> 
        <section class="publia">
            <div class="conta">                
                <h1>Arte e Tecnologia: A Fusão que Redefine a Criatividade</h1>
                    <hr>
                    <p>A arte sempre foi um reflexo da sociedade, e hoje, mais do que nunca, ela se entrelaça com a tecnologia para criar novas formas de expressão. Desde pinturas digitais até instalações interativas, a tecnologia está revolucionando o modo como criamos, consumimos e interagimos com a arte.</p>
                    <h2>Arte Digital:</h2>
                    <p>Ferramentas como tablets, softwares de design e inteligência artificial estão democratizando a criação artística. Artistas podem experimentar texturas, cores e formas de maneiras que antes eram impossíveis.</p>
                    <h2>IA na Arte</h2>
                    <p>A inteligência artificial não é apenas uma ferramenta, mas também uma colaboradora. Algoritmos podem gerar obras únicas, inspirar novos estilos e até mesmo imitar técnicas de grandes mestres. Mas a pergunta persiste: até onde vai a autoria humana?</p>
                    <h2>Realidade Virtual e Aumentada</h2>
                    <p>Imagine caminhar por uma galeria de arte sem sair de casa, ou interagir com esculturas que ganham vida através do seu smartphone. A RV e a RA estão transformando a experiência artística em algo imersivo e pessoal.</p>
                    <h2>Arte Generativa</h2>
                    <p>Códigos e algoritmos estão sendo usados para criar obras que evoluem com o tempo, respondendo a dados em tempo real ou à interação do público. A arte se torna viva, mutável e infinita.</p>

                    <p>A fusão entre arte e tecnologia não é apenas uma tendência, mas uma evolução natural da criatividade humana. Ela nos desafia a repensar os limites da expressão e a explorar novas fronteiras do imaginário.</p>
                        
                    <p>E você, como acredita que a tecnologia vai continuar a transformar a arte no futuro? Compartilhe suas ideias! 🚀✨</p>
                        
                    <p>#Arte #Tecnologia #Inovação #Criatividade #ArteDigital #IA #RealidadeVirtual #FuturoDaArte</p>                         
            </div>
        </section> 
        <section class="publi-coment">
            <aside>
                <h2><span>Deixe seu comentário</span></h2>
                <h2>sobre o que você quer ver aqui</h2>                
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

                    <input type="text" placeholder="User" name="user" id="user"><br>
                    <input type="text" placeholder="Titulo" name="titulo" id="titulo"><br>
                    <input class="msg" type="txt" name="msg" id="msg" placeholder="Escreva aqui sua mensagem" max="2000"><br>
                    <input class="enviar" type="submit" value="Enviar">
                </form>

                <section class="comentarios">
                    <h6 class="comentario-header">
                        <span class="opiniao">Opiniões</span>
                        <h2 class="opiniao-title"> Confira os últimos comentários         
                        </h2>
                        <p class="comentario-subtitle">Dê uma olhada...</p>
                    </h6>
                    <div class="comentario-card">
                        <div class="comentario-minicard">
                            
                            <div class="card-detalhe">
                                <span>em alta <i class="fa-solid fa-fire fa-sm" style="color: #e9591c;"></i></span>
                                <h3 class="card-titulo">Muito legal</h3>
                            </div>
                            
                            
                            <p class="comentario-descricao">
                                Mó daHora!!!
                            </p>
                            <div class="comentario-autor">                              
                                <span class="nome-autor">Luan</span>
                            </div>                            
                        </div>                     
                    
                    </div>   
                    <div class="comentario-card">
                        <div class="comentario-minicard">

                            <div class="card-detalhe">
                                <h3 class="card-titulo"><?=$titulo?></h3> </div>
                                        <p class="comentario-descricao">
                                        <?=$msg?>
                                        </p><br>
                                        <div class="comentario-autor">                         
                                        <span class="nome-autor"><?=$user?></span>
                                </div>
                        </div>
                    </div>             
                    
                </section>
            </aside>
        </section>
            


    </main>
    <footer>
        <a target="_blank" href="https://github.com/RosaCL"><img src="../../public/img/costureza.png" alt=""></a>
    </footer>
    
</body>
</html>