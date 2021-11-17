
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
                <div class=" col-l-4 col-s-5">
                    <div class="item ">       
                        <div style="cursor: pointer!important;" 
                        onClick="getProductos(<?=$categoria['id'];?>,'<?php echo $categoria['name'];?>' )">
                            <img src="<?php echo $categoria['img']; ?>" alt="img car">
                            <h3><?php echo $categoria['name'];?></h3>
                        </div>  
                    </div>
                </div>
            
        <?php } ?>

    </div>

    <!--Lista de productos en AJAX -->
    <div class="show-productos " style="">

    </div>
        
</div>