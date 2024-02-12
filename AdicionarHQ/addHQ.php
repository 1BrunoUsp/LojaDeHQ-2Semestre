<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar HQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<header class="p-3 text-bg-danger">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-around">
            <a href="../Index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="../Imagens/logo.png" style="max-width: 100px;">
            </a>
        </div>
    </div>
</header>

 <div class="back">
    <div class="midle">
<main class="form-signin w-100 m-auto">
    <div class="container">
  <form action="../addHQ.act.php" method="post" enctype="multipart/form-data">
    <h1 class="h1 mb-5 fw-normal">Registrar HQ</h1>

    <div class="form-floating">
      <input type="nome"  class="form-control" id="floatingPassword" placeholder="Password" name = "nome" >
      <label for="floatingPassword">Nome da HQ</label>
    </div>
    <div class="form-floating">
      <input type="preco" class="form-control" id="floatingPassword" placeholder="Password" name="preco" >
      <label for="floatingPassword">Preço</label>
    </div>
    <div class="form-floating">
      <input type="file"  class="form-control" id="idFoto" placeholder="Password" name = "foto" value="Inserir Arquivo" >
      <label for="floatingPassword">Foto</label>
    </div>
    
    <div class="form-check">
            <input class="form-check-input" type="radio" name="tema" id="opcao1" value="1">
            <label class="form-check-label" for="opcao1">
                Mais Vendidos
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao2" value="2">
            <label class="form-check-label" for="opcao2">
                The Beginning Of The End
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao3" value="3">
            <label class="form-check-label" for="opcao3">
                One Piece
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao4" value="4">
            <label class="form-check-label" for="opcao4">
                Batman
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao5" value="5">
            <label class="form-check-label" for="opcao5">
                Turma Da Mônica
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao6" value="6">
            <label class="form-check-label" for="opcao6">
                Mangá
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao7" value="7">
            <label class="form-check-label" for="opcao7">
                Super-Heroi
            </label>
        </div>
   
    <button class="btn btn-info w-100 py-2" type="submit">Enviar</button>
  </form>
        </div>
    </div>
</div>
</main>
</body>
</html>