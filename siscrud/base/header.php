<style>

header{
    background-color: rgb(255, 255, 255);
    height: auto;
    padding-top: 30px;
    padding-bottom: 100px;
    padding-right: 30px;
    padding-left: 30px;
}

header nav{
    width: 100%;
    display: flex;
    justify-content: space-between; 
    align-items: center;
}

input{
    position: absolute;
    background: #ededed;
    border: none;
    outline: 0;
    padding: 10px;
    border-radius: 40px;
    left: 75%;
}
</style>

<header class="header-home row">

    <div class="row">
        <div class="col-md-8">
          <img src="../img/Keep It.png">
        </div>

        <nav class="nav-home col-md-4">
            <input type="search" class="search-text" placeholder="Pesquisar">
            <a class href="reserva-nao.php" style="position: absolute; left: 90%;"><img src="../img/reserva.png" id="header-img"></a>
            <a href="dados.php" style="position: absolute; left: 95%;"><img src="../img/perfil.png" id="header-img"></a>
        </nav>
    </div>
</header>