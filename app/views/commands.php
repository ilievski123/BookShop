<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8 text-center">
            <h1 class="">Нарачки </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Датум</th>
                        <th scope="col">Цена(€)</th>
                        <th scope="col">Статус на нарачката</th>
                    </tr>
                </thead>
                <tbody id="tableCategories">
                    <?php
                    echo $commands;
                    ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php
    echo $noCommand;
    ?>
</div>
<?php $this->view("inc/footer", $data); ?>