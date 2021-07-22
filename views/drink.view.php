<?php
$V = new Votacion();
?>
<div class="product-body">
    <div class="mw-gen-product product-grid">
        <div class="product-view">
            <h1><?php echo $drink['nombre'] ?></h1>
            <span id="desc_pr"><?php echo $drink['desc_corta']; ?></span>
            <img src="https://hulawings.com/bebidas/<?php echo $drink['img']; ?>" alt="<?php echo $drink['nombre'] ?>" title="<?php echo $drink['nombre'] ?>">
        </div>
        <div class="product-desc">
            <h2>¿Qué es?</h2>
            <p><?php echo $drink['descripcion'] ?></p>
            <a href="https://hulawings.com/drinks"><button class="drinks-btn">Volver a Drinks</button></a>
        </div>
    </div>
</div>