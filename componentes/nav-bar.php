
<?php 
// Si exite parametro get ---> page 
if(isset($_GET["page"])){
    $pagina = $_GET["page"];
 }else{
    $pagina="home";
 }

?>


<nav class="container-nav" >
    <div class="wrap-nav">
        <div class="clas-menu">
            <a href="?page=home" class="<?php echo ($pagina == "home") ? 'menu-selecionado':''; ?>" >Home</a>
            <a href="?page=categorias" class="<?php echo ($pagina == "categorias") ? 'menu-selecionado':''; ?>">Lista Categorias</a>
            <a href="?page=login" class="<?php echo ($pagina == "login") ? 'menu-selecionado':''; ?>">Login</a>
            <a href="?page=registro" class="<?php echo ($pagina == "registro") ? 'menu-selecionado':''; ?>">Registro</a>
        </div>
        <div >
            <a id="menu-user" class="coursor-pointer" ><span class="material-icons md-36 icon-hover ">account_box</span>
                <ul class="dropdown-menu">
                    <li>Mi cuenta</li>
                    <li>Mis pedidos</li>
                    <li>Cerrar sesión</li>
                </ul>
            </a>
            <a id="carrito" class="coursor-pointer"><span class="material-icons md-36 icon-hover">shopping_cart</span></a>
        </div>
    </div>
</nav>