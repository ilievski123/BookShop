<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Корисници </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <button class="btn btn-primary"> <a href="<?= ROOT ?>admin/users/">Види корисници</a></button>
            <button class="btn btn-primary"> <a href="<?= ROOT ?>admin/users/viewCustomers">Види клиенти</a></button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Корисничко име</th>
                        <th scope="col">Име</th>
                        <th scope="col">Презиме</th>
                        <th scope="col">Емаил</th>
                        <th scope="col">Град</th>
                        <th scope="col">Поштенки код</th>
                        <th scope="col">Адреса</th>
                    </tr>
                </thead>
                <tbody id="tableProducts">
                    <?php
                    echo $users;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    echo $noCus;
    ?>
</div>
<?php $this->view("inc/footer", $data); ?>