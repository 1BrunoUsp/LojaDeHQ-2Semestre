<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<header class="p-3 text-bg-danger">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-around">
            <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="../Imagens/logo.png" style="max-width: 100px;">
            </a>
        </div>
    </div>
</header>
<div class="back">
    <div class="midle">
<?php
    include('../ConnectBD/Connect.php');
    $codigo = $_GET['codigo'];
    $busca = mysqli_query($con, "SELECT * FROM `tb_hq` WHERE `codigo` = '$codigo'");
    $cliente =  mysqli_fetch_array($busca);
?>

<main class="form-signin w-100 m-auto">
    <div class="container">
  <form action="../Editar.act.php" method="post" enctype="multipart/form-data">
    <h1 class="h1 mb-5 fw-normal">Alterar Info</h1>

    <input type="hidden" name="codigo" value="<?php echo $cliente['codigo']; ?>">

    <div class="form-floating">
      <input type="nome"  class="form-control" id="floatingPassword" placeholder="Password" name = "nome" value="<?php echo $cliente['nome']; ?>">
      <label for="floatingPassword">Editar HQ</label>
    </div>
    <div class="form-floating">
      <input type="preco" class="form-control" id="floatingPassword" placeholder="Password" name="preco" value="<?php echo $cliente['preco']; ?>">
      <label for="floatingPassword">Preço</label>
    </div>
    <div class="form-floating">
      <input type="file"  class="form-control" id="idFoto" placeholder="Password" name = "foto" value="<?php echo $cliente['foto']; ?>" >
      <label for="floatingPassword">Foto</label>
    </div>
    
    <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao1" value="1"<?php echo ($cliente['tema'] === '1') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="opcao1">
                Mais Vendidos
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao2" value="2" <?php echo ($cliente['tema'] === '2') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="opcao2">
                The Beggining Of The End
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao3" value="3" <?php echo ($cliente['tema'] === '3') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="opcao3">
                One Piece
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao4" value="4" <?php echo ($cliente['tema'] === '4') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="opcao4">
                Batman
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="opcao" id="opcao5" value="5" <?php echo ($cliente['tema'] === '5') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="opcao5">
                Turma Da Mônica
            </label>
        </div>

    <button class="btn btn-info w-100 py-2" type="submit" value="Gravar">Enviar</button>
  </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>