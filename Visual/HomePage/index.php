<?php 
session_start();


if(isset($_SESSION['usuario']))
{
    session_unset(); 
    session_destroy();
}

if(isset($_SESSION['resultado']))
{
    echo '<script type="text/javascript"> alert("';
    if($_SESSION['resultado'] == 1)
    {
        echo 'Usuario cadastrado com sucesso. Um email sera enviado após a verificação dos dados.';
    }
    else
        echo 'Falha ao cadastrar. Por favor tente novamente.';
    echo '"); </script>';
    session_unset(); 
}

?>

<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.8, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/whatsapp-image-2021-05-06-at-10.20.05-96x96.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>

<!-- Analytics -->
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  chat-title="fubinhoExterno"
  agent-id="b3a9d341-3093-4060-bd78-5f3ff93c9ded"
  language-code="pt-br"
></df-messenger>

<script>f=window.addEventListener; window.addEventListener=(event, handler, options)=>{if (event==="keydown") return; window.f(event, handler, options);}; </script>
<!-- /Analytics -->


  
  <section data-bs-version="5.1" class="menu menu2 cid-t8H2c7RQGI" once="menu" id="menu2-k">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                        <img src="assets/images/whatsapp-image-2021-05-06-at-10.20.05-96x96.jpg" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href=""></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="index.html#features13-n">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link link text-info text-primary display-4" href="index.html#features1-m">Prêmios&nbsp;</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-info display-4" href="" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Login&nbsp;</a><div class="dropdown-menu" aria-labelledby="dropdown-404"><a class="dropdown-item text-info display-4" href=<?php echo "..\TelaDeLoginAluno\login"?>>Aluno</a><a class="show dropdown-item text-info display-4" href=<?php echo "..\TelaDeLoginGestor\login"?>>Gestor</a></div></li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href=<?php echo "..\TelaDeCadastro\cadastro"?>>Cadastre-se</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header5 cid-t8H5fuaZBI mbr-fullscreen" id="header5-l">

    

    
    

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2"><strong>Feito por nós para nós.</strong></h1>
                
                <p class="mbr-text mbr-fonts-style mbr-white display-7">Com a sua doação esse e muitos outros jovens podem ter, através da educação um futuro melhor. O FUBU tem o objetivo de garantir conectividade aos jovens estudantes , provendo ensino de qualidade</p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-info display-7" href="index.html#features13-n">Como funciona?</a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features12 cid-t8H8a8Wcj3" id="features13-n">

    

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mb-4 display-2"><strong>Como surgiu o FUBU?</strong></h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">
                            O Fubu surgiu diante de uma necessidade na pandemia, em que foi visto que vários alunos não tinham acesso a internet em casa,  e estavam excluídos do ambiente escolar remoto. Em uma sala de aula com 45 alunos apenas uma média de 15 a 18 alunos tinham acesso a internet, pois, não tinham infraestrutura para acessar as aulas, então o Fubu surgiu para resolver o problema da primeira sala de aula para que os 45 alunos pudessem ter acesso, a partir disso os mesmo alunos explanaram os mesmos problemas em outras salas. Então foi visto que não adiantava solucionar o problema de apenas uma sala de aula enquanto outras salas e escolas passavam pela mesma situação. Mesmo com o fim do lockdown os alunos permaneciam com problemas para continuar comparecendo à escola, devido às questões econômicas que foram advindas da pandemia, sendo eles: falta de dinheiro para a passagem, falta de material escolar,  além da falta de alimento, com isso o Fubu continuou ajudando esses alunos com a renda necessária para que eles permanecerem estudando.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mbrib-home"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>QUAL FOI A PRIMEIRA ESCOLA IMPACTADA?</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">A  primeira escola que foi impactada foi a ETE-DOM BOSCO, foram atendidos 25 alunos.</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>QUANTOS ALUNOS CONTEMPLADOS O FUBU TEM HOJE?</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Hoje nós temos 1011 alunos contemplados pelo Fubu, e mais uma lista de espera que ultrapassa os 400 alunos.</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>QUANTAS ESCOLAS E ONG 'S JÁ FORAM IMPACTADAS PELO FUBU?</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Temos 3 ONG ‘S, que são: Fruto de favela, Palavra na Rua, (A COMPLETAR). Já escolas temos entre 8 a 10, entre a região metropolitana do Recife (Paulista, Recife, Camaragibe e Jaboatão),  e interior de Pernambuco (São José do Belmonte, Garanhuns e Trindade).</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features1 cid-t8H87ZQ6S2" id="features1-m">
    

    
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Prêmios</strong></h3>
                
            </div>
        </div>
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont mbrib-globe-2"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7"><strong>Samsung</strong></h5>
                        <p class="card-text mbr-fonts-style display-7">Finalista do evento: Save tomorrow</p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont mbri-code"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7"><strong>Endeavor</strong></h5>
                        <p class="card-text mbr-fonts-style display-7">Finalista do evento: Empreendedorismo Social.</p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont socicon-microsoft socicon"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7"><strong>Imagine CUP</strong></h5>
                        <p class="card-text mbr-fonts-style display-7">Participou do evento: Imagine Cup; Prêmio Professores inovadores.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts4 cid-t8H9UaNdHS" id="contacts4-o">

    

    
    

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="text-content col-12 col-md-6">
                <h2 class="mbr-section-title mbr-fonts-style display-2"><strong>Sabia Mais</strong></h2>
                <p class="mbr-text mbr-fonts-style display-7">Acompanhe o FUBU nas suas redes sociais !!.</p>
            </div>
            <div class="icons d-flex align-items-center col-12 col-md-6 justify-content-end mt-md-0 mt-2 flex-wrap">
                <a href="" target="_blank">
                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="" target="_blank">
                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="" target="_blank">
                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="" target="_blank">
                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                
                
                
                
                
                
            </div>
        </div>
    </div>
    
</section>

<section data-bs-version="5.1" class="footer7 cid-t8H9VybJ4g" once="footers" id="footer7-p">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2022 FUBU Life UP - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a hidden href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p hidden style="margin: 0;text-align: center;" class="display-7">Feito com biblioteca Mobirise &#8204;</p><a hidden style="z-index:1" href="https://mobirise.com/website-design-software.html">Free Web Site Designer Software</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/sociallikes/social-likes.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
</body>
</html>