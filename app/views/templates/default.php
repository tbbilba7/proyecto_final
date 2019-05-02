<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>UniversUmArtScience</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="UniversUm Art Ciencia"/>
        <meta name="keywords" content="Nikolai Roerich, Elena Roerich, Yuri Roerich, Svetoslav Roerich, 
        Conocimientos, Ciencia, Arte y Cultura, Religiones, Personalidades, Academia">
        <base href="<?php echo BASE_DOMAIN_DIR_URL?>">
        <link rel="stylesheet" type="text/css" href="webroot/css/home.css">
        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>
    </head>
    <body>
        <header> 
            <nav> 
                <ul>
                    <li><a href="<?php echo BASE_DIR_URL?>home/index">Inicio</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>cultura/index">Arte y Cultura</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>ciencia/index">Ciencia</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>cosmovision/index">Cosmovisión</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>personalidades/index">Personalidades</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>academia/index">Academia</a></li>
                    <li><a href="<?php echo BASE_DIR_URL?>contacto/index">Contacto</a></li>                                       
                </ul>
            </nav>
        </header>
        <main> 

            <?php echo $content_for_layout;?> 

        </main>
        <footer>

            <p><?php echo date("Y");?> © MVC</p>
            
        </footer>
    </body>
</html>