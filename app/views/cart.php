<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8 text-center">
            <h1 class="">Книги во кошница:</h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Име</th>
                <th scope="col">Количина</th>
                <th scope="col">Цена(€)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo $cart;
            ?>
        </tbody>
    </table>

    <?php
    if (isset($buttonValidate)) {
        echo $buttonValidate;
    }
    if (isset($button)) {
        echo $button;
    }
    ?>
</div>
<?php $this->view("inc/footer", $data); ?>