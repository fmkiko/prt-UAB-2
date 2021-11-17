
<div class="title-page">
            <h2 id="title-list">Categorías</h2>
</div>

<div class="row container-main">
    <!--listar categorías -->
    <div class="row div-categorias container-main">

        <?php 
            foreach( $categorias as $categoria ){
                //include 'componentes/categorias.php'
        ?>
                <div class=" col-l-6 col-s-6 content-card-categoria">
                    <div class="item ">       
                        <div style="cursor: pointer!important;" 
                            onClick="getProductos(<?=$categoria['id'];?>,'<?php echo $categoria['name'];?>' )">
                            <div class="card-img">
                                <img src="<?php echo $categoria['img']; ?>" alt="img car">
                            </div>
                            <h3><?php echo $categoria['name'];?></h3>
                        </div>  
                    </div>
                </div>
            
        <?php } ?>

    </div><!-- End categorías -->



    <!--Lista de productos en AJAX + detalles -->
    <div class="show-productos " >

    </div>

 
        
</div>