<div id="product_snacks-bg" class="product-body">
    <div class="mw-gen-product product-grid">
        <div class="product-view">
            <h1><?php echo $snack['nombre'] ?></h1>
            <span id="desc_pr"><?php echo $snack['cantidad']; ?></span>
            <img src="https://hulawings.com/bajones/<?php echo $snack['img']; ?>" alt="<?php echo $snack['nombre'] ?>" title="<?php echo $snack['nombre'] ?>">
        </div>
        <div class="product-desc">
            <h2>Descripción</h2>
            <p><?php echo $snack['descripcion'] ?></p>
            <a href="https://hulawings.com/snacks/"><button class="drinks-btn">Volver a Snacks</button></a>
        </div>
    </div>
</div>