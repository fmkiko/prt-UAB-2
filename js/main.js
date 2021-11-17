'use-strict';// uso de js en modo stricto.



// petición de productos via AJAX
function getProductos(id, categoria){
    $('.show-productos').css('display', 'block')
    $('.section-center').css('height:', 'auto' );
    // limpiamos el DOM
    $('.div-categorias').css('display', 'none');
    // Ponemos el title 
   // $('#title-list').text('Productos');
   
    // Creamos los datos a enviar al server en POST
    const datos = new FormData();
    datos.append('id', id);
   
    // AJAX
    let xhr= new XMLHttpRequest;
    xhr.open('POST', 'controllers/listar-productos.php', true); 
    xhr.onload = function(){
        if(xhr.status === 200){
            if(xhr.responseText.length > 0 ){
                let respuesta = JSON.parse(xhr.responseText);// Obtenemos el response en JSON
                // llamamos a la function que crea la platilla para mostrar
                $('.show-productos').html(pltProductos( respuesta , categoria));
            }else{
                $('.show-productos').html('<h2>No hay productos que mostrar!!!</h2>');
            }
        }else{
            $('.show-productos').html('<h2>Error de comunicación con server!!!</h2>');
        }
    }
    // Enviar la penticion con los datos:
    xhr.send(datos);


};// end function getProductos()

// Detalles
function detailProducto(id){
    console.log("detalle de ",id);
    $('.show-productos').css('display', 'none');
    // Creamos los datos a enviar al server en POST
    const datos = new FormData();
    datos.append('id', id);
     // AJAX
     let xhr= new XMLHttpRequest;
     xhr.open('POST', 'controllers/listar-detail-producto.php', true); 
     xhr.onload = function(){
         if(xhr.status === 200){
             if(xhr.responseText.length > 0 ){
                 let respuesta = JSON.parse(xhr.responseText);// Obtenemos el response en JSON
                 // llamamos a la function que crea la platilla para mostrar los detalles del producto
                 $('.show-productos').html(pltDetailProductos( respuesta ));
                 $('.show-productos').css('display', 'block');
             }else{
                 $('.show-productos').html('<h2>No hay productos que mostrar!!!</h2>');
             }
         }else{
             $('.show-productos').html('<h2>Error de comunicación con server!!!</h2>');
         }
     }
     // Enviar la penticion con los datos:
     xhr.send(datos);

}

// Plantilla productos

function pltProductos( arrayProductos, categoria = "" ){
    let plantilla = `<h2 class="title-categoria">${categoria}</h2>`;
    // creamos un div con sus datos por cada producto del array
    arrayProductos.forEach(function(producto){
        plantilla += `
            <div class="col-x-3 col-l-4 col-s-5"> 
                <div class="item clproducto " onClick="detailProducto(${producto.id})" 
                style="cursor: pointer!important;" producto_id="${producto.id}" >
                    <div style="    height: 270px;
                                    overflow: hidden;">
                        <img src="${producto.img}" alt="img car">
                    </div>

                    <h3>${producto.nom}</h3>
                    <div style="    height: 72px;
                                    overflow: hidden;">
                        <p>${producto.description}</p>
                    </div>
                    <a style="font-size: 20px; color:red"> más info...</a>
                 
                        <hr>
                    
                        <div class="flex-container item-footer">
                            <p>Precio: ${producto.price}<span>€</span></p>
                            <button style=" border: 0px solid "><span class="material-icons md-36">
                            shopping_cart
                            </span></button>
                        </div>
            
                </div>
        
            </div> `;
    });
    return plantilla;
};// End pltProductos()

// detail producto
function pltDetailProductos( producto ){
    
    // creamos un div con sus datos por cada producto del array
  
     let   plantilla = `
             <h2 class="title-categoria">Detalles de ${producto.nom}</h2>
            <div class="detail-producto" style="margin: 0 auto"> 
                <div class="item clproducto " 
                style="cursor: pointer!important;" producto_id="${producto.id}" >
                    
                    <img src="${producto.img}" alt="img car">
                    <h3>${producto.nom}</h3>
                
                    <p>${producto.description}</p>
                        <hr>
                    
                        <div class="flex-container item-footer">
                            <p>Precio: ${producto.price}<span>€</span></p>
                            <button style=" border: 0px solid ">
                            <span class="material-icons md-36">shopping_cart
                            </span></button>
                        </div>
            
                </div>
        
            </div> `;
 
    return plantilla;
}