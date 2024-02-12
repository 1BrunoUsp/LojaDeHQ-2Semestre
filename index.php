<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GibisComic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="Script_JS/JQuery/code.jquery.com_jquery-3.7.0.min.js" defer></script>
  
</head>
<body>
<div class="topo">
    <div class="descritivo">
      <h6>Leia Seus Quadrinhos e Mangás Favoritos!</h6>
    </div>
    <div class="conteudo">
      <h6><a href="/">Meus Pedidos<i class="fa-solid fa-cart-shopping"></i></a></h6>
      <h6><a href="/">Central de Atendimento<i class="fa-solid fa-comment"></i></a><h6>
    </div>
</div>
<header class="p-3 text-bg-danger">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between" id="menu">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="Imagens/logo.png" style="max-width: 100px;">
            </a>

            <div class="search" id="barraPesquisar">
              <form id="formPesquisar">
                <input type="search" name="textConsulta" id="txtPesquisa" class="form-control form-control-danger text-bg-white" placeholder="Search..." aria-label="Search">
              </form>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            
            <?php
            include('ConnectBD/Connect.php');

            session_start();

            if (isset($_SESSION['nome'])) {
              $clientes = mysqli_query($con, "SELECT * FROM `tb_cliente` WHERE nome = '{$_SESSION['nome']}'");

                if ($clientes) {
                  $cliente = mysqli_fetch_assoc($clientes);

                    if ($cliente['adm'] == 1) {
                      echo "<div class='boasVindas'>";
                        echo "Olá " . $_SESSION['nome'] . ", Bem Vindo";
                          echo "<a href='logoff.php'> Sair </a>";
                            echo "</div>";
                          echo "<div class='text-end'>";
                        echo "<button type='button' class='btn btn-warning'><a href='AdicionarHQ/addHQ.php'>Adicionar Quadrinhos</a><i class='fa-solid fa-user-plus'></i></button>";
                      echo "</div>";
                    } else {
                        echo "<div class='boasVindas'>";
                          echo "Olá " . $_SESSION['nome'] . ", Bem Vindo";
                          echo "<a href='EncerrarSessao/sair.php'> Sair </a>";
                        echo "</div>";
                      }
              }
                } else {
                  echo "<div class='text-end'>";
                    echo "<button type='button' class='btn btn-outline-light me-2'><a href='TelaDeRegistro/TelaDeCadastro.php'>Cadastre-se </a><i class='fa-solid fa-user-large'></i></button>";
                    echo "<button type='button' class='btn btn-warning'><a href='TelaDeRegistro/TelaDeLogin.php'>Entrar </a><i class='fa-solid fa-user-plus'></i></button>";
                  echo "</div>";
                }
        ?>
        </div>
    </div>
</header>
<div class="categorias">
  <div class="btn-group">
  <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Categorias &#9776;
  </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item active" href="#tbate">The Beggining Of The End</a></li>
          <li><a class="dropdown-item active" href="#op">One Piece</a></li>
            <li><a class="dropdown-item active" href="#bat">Batman</a></li>
          <li><a class="dropdown-item active" href="#tdm">Turma Da Mônica</a></li>
    </ul>      
  </div>
  <div class="provisorio">
    <div>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php
        if (isset($_SESSION['nome'])){
          if ($cliente['adm'] == 1){
            echo "<li><a href='ProdutosList/Adm-session/ProduSuperHADM.php' class='nav-link px-2 text-white'>Super Heróis</a></li>";
              echo "<li><a href='ProdutosList/Adm-session/ProduMangaADM.php' class='nav-link px-2 text-white'>Mangás</a></li>";
            echo "<li><a href='' class='nav-link px-2 text-white'>Livraria</a></li>";
          }else{
            echo "<li><a href='ProdutosList/User-session/ProdutosSuperH.php' class='nav-link px-2 text-white'>Super Heróis</a></li>";
              echo "<li><a href='ProdutosList/User-session/ProdutosManga.php' class='nav-link px-2 text-white'>Mangás</a></li>";
            echo "<li><a href='' class='nav-link px-2 text-white'>Livraria</a></li>";
          }
        }else{
            echo "<li><a href='ProdutosList/User-session/ProdutosSuperH.php' class='nav-link px-2 text-white'>Super Heróis</a></li>";
              echo "<li><a href='ProdutosList/User-session/ProdutosManga.php' class='nav-link px-2 text-white'>Mangás</a></li>";
            echo "<li><a href='' class='nav-link px-2 text-white'>Livraria</a></li>";
        }
          
      ?>
        </ul>
      </div>
    </div>
  <div class="fav">
      <button type="button" class="btn btn-outline-warning">Favoritos <i class="fa-solid fa-heart"></i></button>
  </div>
</div>
<div id="resultadoPesquisa">

</div>
  <h2>Mais Vendidos</h2>
  <?php
    include('ConnectBD/Connect.php');

    
    $cadastros = mysqli_query($con, "SELECT * FROM `tb_hq`");
    echo"<div class=box-slider id=formList>";
    echo "<div class=slider>";
    while ($cadastro = mysqli_fetch_array($cadastros)) {
      if($cadastro['tema'] == '1' || $cadastro['tema'] == '0'){
            echo "<div class = card>";
            echo "<div class=like></div>";
            echo "<img class=product src={$cadastro['foto']}><h4 class=title>{$cadastro['nome']}</h3>";
            echo "<div class=price><h5>R$ {$cadastro['preco']}</h5></div>";
            echo "<a class=button>Adicionar ao Carrinho</a>";
            if (isset($_SESSION['nome'])) {
            if($cliente['adm'] == 1){
              echo "<div class = iconAdm>";
              echo "<a href=Editar/Editar.php?codigo=$cadastro[codigo]> <i class= 'fa-regular fa-pen-to-square'></i> </a>";
              echo "<a href=javascript:Excluir($cadastro[codigo])> <i class= 'fa-solid fa-trash-can' ></i></a>";
              echo "</div>";
              }
            }
              echo "</div>";

      }
    }
    echo "</div>";
    echo "</div>";
    ?>
<div class="direction">
      <button id="prev"><</button>
      <button id="next">></button>
</div>

<div class="descritivo1">
    <p>Os Livros Mais Vendidos São Selecionados Apartir Da Opnião Popular!</p>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="folders">

    <div class="anime1">
      <?php
      if (isset($_SESSION['nome'])) {
        if($cliente['adm'] == 1){
          echo "<a href=ProdutosList/Adm-session/ProduMangaADM.php>";
          }else{
            echo "<a href=ProdutosList/User-session/ProdutosManga.php>";
          }
        }else{
          echo "<a href=ProdutosList/User-session/ProdutosManga.php>";
        }
      ?>
          <img  src="Imagens/Banner-mangas" alt="">
        </a>
      </div>
      <div class="anime2">
      <?php
      if (isset($_SESSION['nome'])) {
        if($cliente['adm'] == 1){
          echo "<a href=ProdutosList/Adm-session/ProduSuperHADM.php>";
          }else{
            echo "<a href=ProdutosList/User-session/ProdutosSuperH.php>";
          }
        }else{
          echo "<a href=ProdutosList/User-session/ProdutosSuperH.php>";
        }
      ?>
          <img  src="Imagens/Banner-HQ" alt="">
        </a>
      </div>
      <div class="batman3">
      <?php
      if (isset($_SESSION['nome'])) {
        if($cliente['adm'] == 1){
          echo "<a href=>";
          }else{
            echo "<a href=>";
          }
        }else{
            echo "<a href=>";
        }
      ?>
          <img  src="Imagens/Banner-Figures" alt="">
        </a>
      </div>
    </div>
  </div>
</div>
<h2 id="tbate">The Beggining Of The End</h2>
  <?php
    include('ConnectBD/Connect.php');

    
    $cadastros = mysqli_query($con, "SELECT * FROM `tb_hq`");
    echo"<div class=box-slider id=formList2>";
    echo "<div class=slider2>";
    while ($cadastro = mysqli_fetch_array($cadastros)) {
      if($cadastro['tema'] == '2'){
            echo "<div class = card>";
            echo "<div class=like></div>";
            echo "<img class=product src={$cadastro['foto']}><h4 class=title>{$cadastro['nome']}</h3>";
            echo "<div class=price><h5>R$ {$cadastro['preco']}</h5></div>";
            echo "<a class=button>Adicionar ao Carrinho</a>";
            if (isset($_SESSION['nome'])) {
              if($cliente['adm'] == 1){
                echo "<div class = iconAdm>";
                echo "<a href=Editar/Editar.php?codigo=$cadastro[codigo]> <i class= 'fa-regular fa-pen-to-square'></i> </a>";
                echo "<a href=javascript:Excluir($cadastro[codigo])> <i class= 'fa-solid fa-trash-can' ></i></a>";
                echo "</div>";
                }
              }
                echo "</div>";
      }
    }
    echo "</div>";
    echo "</div>";
    ?>
<div class="direction">
      <button id="prev2"><</button>
      <button id="next2">></button>
</div>


<h2 id="op">One Piece</h2>
  <?php
    include('ConnectBD/Connect.php');

    
    $cadastros = mysqli_query($con, "SELECT * FROM `tb_hq`");
    echo"<div class=box-slider id=formList3>";
    echo "<div class=slider3>";
    while ($cadastro = mysqli_fetch_array($cadastros)) {
      if($cadastro['tema'] == '3'){
            echo "<div class = card>";
            echo "<div class=like></div>";
            echo "<img class=product src={$cadastro['foto']}><h4 class=title>{$cadastro['nome']}</h3>";
            echo "<div class=price><h5>R$ {$cadastro['preco']}</h5></div>";
            echo "<a class=button>Adicionar ao Carrinho</a>";
            if (isset($_SESSION['nome'])) {
              if($cliente['adm'] == 1){
                echo "<div class = iconAdm>";
                echo "<a href=Editar/Editar.php?codigo=$cadastro[codigo]> <i class= 'fa-regular fa-pen-to-square'></i> </a>";
                echo "<a href=javascript:Excluir($cadastro[codigo])> <i class= 'fa-solid fa-trash-can' ></i></a>";
                echo "</div>";
                }
              }
                echo "</div>";
      }
    }
    echo "</div>";
    echo "</div>";
    ?>
<div class="direction">
      <button id="prev3"><</button>
      <button id="next3">></button>
</div>



<h2 id="bat">Batman</h2>
  <?php
    include('ConnectBD/Connect.php');

    
    $cadastros = mysqli_query($con, "SELECT * FROM `tb_hq`");
    echo"<div class=box-slider id=formList4>";
    echo "<div class=slider4>";
    while ($cadastro = mysqli_fetch_array($cadastros)) {
      if($cadastro['tema'] == '4'){
            echo "<div class = card>";
            echo "<div class=like></div>";
            echo "<img class=product src={$cadastro['foto']}><h4 class=title>{$cadastro['nome']}</h3>";
            echo "<div class=price><h5>R$ {$cadastro['preco']}</h5></div>";
            echo "<a class=button>Adicionar ao Carrinho</a>";
            if (isset($_SESSION['nome'])) {
              if($cliente['adm'] == 1){
                echo "<div class = iconAdm>";
                echo "<a href=Editar/Editar.php?codigo=$cadastro[codigo]> <i class= 'fa-regular fa-pen-to-square'></i> </a>";
                echo "<a href=javascript:Excluir($cadastro[codigo])> <i class= 'fa-solid fa-trash-can' ></i></a>";
                echo "</div>";
                }
              }
                echo "</div>";
      }
    }
    echo "</div>";
    echo "</div>";
    ?>
<div class="direction">
      <button id="prev4"><</button>
      <button id="next4">></button>
</div>


<h2 id="tdm">Turma Da Mônica</h2>
  <?php
    include('ConnectBD/Connect.php');

    
    $cadastros = mysqli_query($con, "SELECT * FROM `tb_hq`");
    echo"<div class=box-slider id=formList5>";
    echo "<div class=slider5>";
    while ($cadastro = mysqli_fetch_array($cadastros)) {
      if($cadastro['tema'] == '5'){
            echo "<div class = card>";
            echo "<div class=like></div>";
            echo "<img class=product src={$cadastro['foto']}><h4 class=title>{$cadastro['nome']}</h3>";
            echo "<div class=price><h5>R$ {$cadastro['preco']}</h5></div>";
            echo "<a class=button>Adicionar ao Carrinho</a>";
            if (isset($_SESSION['nome'])) {
              if($cliente['adm'] == 1){
                echo "<div class = iconAdm>";
                echo "<a href=Editar/Editar.php?codigo=$cadastro[codigo]> <i class= 'fa-regular fa-pen-to-square'></i> </a>";
                echo "<a href=javascript:Excluir($cadastro[codigo])> <i class= 'fa-solid fa-trash-can' ></i></a>";
                echo "</div>";
                }
              }
                echo "</div>";
      }
    }
    echo "</div>";
    echo "</div>";
    ?>
<div class="direction">
      <button id="prev5"><</button>
      <button id="next5">></button>
</div>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <img class="footer-logo" src="Imagens/logo.png" alt="" srcset="">
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled">
      <div class="redes-sociais">
        <li class="ms-3"><i class="fa-brands fa-whatsapp" ></i></li>
          <li class="ms-3"><i class="fa-brands fa-facebook" ></i></li>
        <li class="ms-3"><i class="fa-brands fa-instagram" ></i></li>
      </div>
    </ul>
  </footer>
</div>
<script src="Script_JS/IndexJS/Carrossel-Index.js" defer></script>
<script src="Script_JS/IndexJS/Pesquisa-Index.js" defer></script>
<script src="Script_JS/IndexJS/Excluir-Index.js" defer></script>
</body>
</html>