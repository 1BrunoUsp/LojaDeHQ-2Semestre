<?php
    extract($_POST);
    require('../../ConnectBD/Connect.php');
    
    if (empty($texto)) {
        echo "<p>Nada Pesquisado</p>";
    }else {
        $hqs = mysqli_query($con, "SELECT * FROM `tb_hq` WHERE `nome` LIKE '%$texto%'");
        $found = false;
        if($hq = mysqli_fetch_array($hqs) && !empty($texto)){
            $found = true;
        } if (!$found) {
            echo "<p>Nenhum resultado encontrado para '$texto'</p>";
        }else{
            echo "<div class='txtResult'>";
            echo "<p>Resultado da pesquisa:</p>";
            echo "<hr>";
            echo "</div>";
echo"<div class=box-slider id=formListPesquisa>";
    echo "<div class=sliderPesquisa>";
    while ($hq = mysqli_fetch_array($hqs)) {

            echo "<div class = card>";
            echo "<div class=like></div>";
            echo "<img class=product src=../../{$hq['foto']}><h4 class=title>{$hq['nome']}</h3>";
            echo "<div class=price><h5>R$ {$hq['preco']}</h5></div>";
            echo "<a class=button>Adicionar ao Carrinho</a>";
            echo "</div>";
            
        
    }
    echo "</div>";
echo "</div>";

?>
<div class="direction">
      <button id="prevPesquisa"><</button>
      <button id="nextPesquisa">></button>
</div>
<?php
        }
    }
?>
<script src="../../Script_JS/ProdutosJS/Carrossel-Produtos.js" defer></script>
            