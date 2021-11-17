<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Mi web</title>
</head>
<body>
 

    <header>
        <?php 
            include_once 'componentes/nav-bar.php';
        ?>
    </header>
  

    <section class="section-center ">
       
    <?php 
        if(isset($_GET['page']) ){
            $accion = $_GET['page'];
            // Router
            switch($accion){
    
                case 'categorias': 
                    include __DIR__.'/controllers/listar-categorias.php';
                break;

                case 'login': 
                    include __DIR__.'/controllers/login.php';
                break;

                case 'registro': 
                    include __DIR__.'/controllers/registro.php';
                break;
    
                default: 
               // include __DIR__.'/controllers/listar-categorias.php';
            }
        }else{
            include __DIR__.'/controllers/listar-categorias.php';
        }
      
    
    ?>
      
    </section>

    <?php 
        include 'componentes/footer.php';
    
    ?>
    
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- my code javascript -->
    <script src="js/main.js"></script>

</body>
</html>