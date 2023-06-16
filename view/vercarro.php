<?php
    require "../controller/controlador.php";
?>

<section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Carro</h1>
            <?php
                $carroo = new Controlador();
                echo $carroo->visualiazarCarro();
            ?>
        </section>
    </section>


