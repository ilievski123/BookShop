<?php $this->view("inc/header", $data); ?>
<div class="row justify-content-center">
    <div class="col-6 text-center">
        <h1>Онлајн продавница за книги "BookShop"</h1>
    </div>
</div>
<div class="container">
    <div class="row my-5 justify-content-center">
        <h3 class="text-center">Книги:</h3>
        <?php
        echo $htmlProducts;
        ?>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>