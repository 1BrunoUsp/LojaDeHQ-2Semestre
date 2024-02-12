<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
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
        <div class="d-flex flex-wrap align-items-center justify-content-center">
            <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2"><a href="TelaDeCadastro.php">Cadastre-se </a><i class="fa-solid fa-user-large"></i></button>
                    <button type="button" class="btn btn-warning"><a href="TelaDeLogin.php">Entrar </a><i class="fa-solid fa-user-plus"></i></button>
            </div>
        </div>
    </div>
</header>
<div class="categorias">
  <div class="provisorio">
    <div>
        <ul class="nav  mb-2 justify-content-center mb-md-0">
          <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="../ProdutosList/User-session/ProdutosSuperH.php" class="nav-link px-2 text-white">Super Heróis</a></li>
              <li><a href="../ProdutosList/User-session/ProdutosManga.php" class="nav-link px-2 text-white">Mangás</a></li>
            <li><a href="" class="nav-link px-2 text-white">Livraria</a></li>
        </ul>
      </div>
    </div>
</div>
<main class="form-signin w-100 m-auto">
    <section>
        <div class="volta">
            <a href="../index.php"><img src="../Imagens/logo.png"></a>
        </div>
        <div class="form-box">
            <div class="form-value">
                <form action="Tela.act/Login.act.php" method="post" enctype="multipart/form-data">
                    <h2>Entre</h2>
                    <div class="inputbox">
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="senha" name="senha" required>
                        <label for="password">Senha</label>
                    </div>
                    <input type="submit" name="entrar" class="button"></input>
                    <div class="register">
                        <p>Ainda Não Possui Uma Conta? <a href="TelaDeCadastro.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
</body>
</html>
