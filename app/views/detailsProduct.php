<?php $this->view("inc/header", $data); ?>
<div class="row justify-content-center">
    <div class="col-6 text-center">
        <h1>Опис за книга:</h1>
    </div>
</div>
<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-12 col-lg-4">
            <p><span class="bold">Име:</span> : <?= $product->nameProduct ?></p>
            <p><span class="bold">Категорија:</span> : <?= $product->nameCategory ?></p>
            <p><span class="bold">Цена: </span><?= $product->priceProduct ?> €</p>
            <p><span class="bold">Опис: </span><?= $product->descriptionProduct ?></p>
        </div>
        <div class="col-12 col-lg-4">
            <img style="height:130px" src="<?= ASSETS ?>img/products/<?= $product->imageProduct ?>">
        </div>
    </div>
    <div class="row my-5">
        <div class="offset-5">
            <button class="btn btn-primary"><a href="<?= ROOT ?>cart/addcart/<?= $product->idProduct ?>">Додај во кошница</a></button>
        </div>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>