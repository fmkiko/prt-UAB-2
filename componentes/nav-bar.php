
<?php 
if(isset($_GET["page"])){
    $pagina = $_GET["page"];
 }else{
    $pagina="home";
 }

?>


<nav class="container-nav">
    <div>
        <a href="?page=home" class="<?php echo ($pagina == "home") ? 'menu-selecionado':''; ?>" >Home</a>
        <a href="?page=categorias" class="<?php echo ($pagina == "categorias") ? 'menu-selecionado':''; ?>">Lista Categorias</a>
        <a href="?page=login" class="<?php echo ($pagina == "login") ? 'menu-selecionado':''; ?>">Login</a>
        <a href="?page=registro" class="<?php echo ($pagina == "registro") ? 'menu-selecionado':''; ?>">Registro</a>
    </div>
</nav>