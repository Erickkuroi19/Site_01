<?php include('config.php'); ?>
<!DOCTYPE html>
<html >
<head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/style.css"/>
    <link href="<?php echo INCLUDE_PATH;?>estilo/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="tags">
    <meta name="description" content="Descrição do meu website">
    <meta charset="utf-8"/>
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'Sobre':
                echo '<target target="Sobre"/>';
                break;
            
            case 'Servicos':
                echo '<target target="Servicos"/>';
                break;
           
        }
    
    ?>

<header>
    <div class="center">
        <div class="logo left w33img" >
            <a href=" https://br.leagueoflegends.com/pt-br/" target="_blank"  ><img src="imagens/logo.png" width=150  ></a>
        </div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>" >Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Servicos">Servicos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Servicos">Servicos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>Contato">Contato</a></li>
                </ul>
            </nav>
        <div class="clear"></div>
    </div>
</header>

<?php

    

    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        if($url != 'Sobre'&& $url !='Servicos'){
        $pagina404=true;
        include('pages/404.php');
        }else{
            include('pages/home.php');
        }
    }

?>    

<footer <?php if(isset($pagina404)&& $pagina404== true)echo 'class="fixed"'; ?>>
        <div class="center">
        <p>Rafael Santos - Todos os direitos reservados</ </p>
        <br>
        

        </div>
</footer>
    
    <script src="<?php echo INCLUDE_PATH;?>js/jquery-3.5.1.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
    <?php
        if($url=='Contato'){
    
    ?>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyChHylLpRanzyOewQl-FvItLtRZVoAoSu8'></script>
    <script src="<?php echo INCLUDE_PATH;?>js/map.js"></script>
    <?php  
        }
    ?>
</body>
</html>