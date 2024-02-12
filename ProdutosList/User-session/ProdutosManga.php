<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangás</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo.css">
    <script src="../../Script_JS/JQuery/code.jquery.com_jquery-3.7.0.min.js" defer></script>
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
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="../../index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="../../Imagens/logo.png" style="max-width: 100px;">
            </a>

            <div class="search" id="barraPesquisar">
              <form id="formPesquisar">
                <input type="search" name="textConsulta" id="txtPesquisa" class="form-control form-control-danger text-bg-white" placeholder="Search..." aria-label="Search">
              </form>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
</header>
<div id="resultadoPesquisa">

</div>

<div class="local">
    <div class="voltar">
        <a href="../../index.php"><p>Home</p></a>
    </div>
        <p> > </p>
        <p><b>Mangás</b></p>
</div>
    <div class="left-container">
        <div class="containerMangas">
            <h1>Mangás</h1>


        <?php
    include('../../ConnectBD/Connect.php');
    
    $cadastros = mysqli_query($con, "SELECT * FROM `tb_hq`");
    echo "<div class=slider1>";
    while ($cadastro = mysqli_fetch_array($cadastros)) {
      if($cadastro['tema'] == '2' || $cadastro['tema'] == '3' || $cadastro['tema'] == '6'){
            echo "<div class = card1>";
            echo "<div class=like1></div>";
            echo "<img class=product1 src=../../{$cadastro['foto']}><h4 class=title1>{$cadastro['nome']}</h3>";
            echo "<div class=price1><h5>{$cadastro['preco']}R$</h5></div>";
            echo "<a class=button1>Adicionar ao Carrinho</a>";
            echo "</div>";
      }
    }
    echo "</div>";
    echo "</div>";
    ?>
    </div>
</div>
<script src="../../Script_JS/ProdutosJS/Carrossel-Produtos.js" defer></script>
<script src="../../Script_JS/ProdutosJS/Pesquisa-Produtos.js" defer></script>
</body>
</html>