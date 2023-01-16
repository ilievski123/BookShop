<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Нарачки </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID на корисник</th>
                        <th scope="col">Вкупно</th>
                        <th scope="col">Датум на нарачка</th>
                    </tr>
                </thead>
                <tbody id="tableProducts">
                    <?php
                    echo $commandsHTML;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    echo $noCom;
    ?>
</div>
<?php $this->view("inc/footer", $data); ?>