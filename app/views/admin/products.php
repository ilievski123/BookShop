<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Книги </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <button class="btn btn-primary"><a href="<?= ROOT ?>admin/products/add">Додај книга</a> </button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Име</th>
                        <th scope="col">Опис</th>
                        <th scope="col">Цена(€)</th>
                        <th scope="col">Количина</th>
                        <th scope="col">Категорија</th>
                        <th scope="col">Промени</th>
                        <th scope="col">Избриши</th>
                    </tr>
                </thead>
                <tbody id="tableProducts">
                    <?php
                    echo $tableHTML;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    echo $noProd;
    ?>
</div>
<?php $this->view("inc/footer", $data); ?>