<?php $this->view("inc/header", $data); ?>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Измени</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Име : </label>
                        <input type="text" value="<?= $userData->nameMember ?>" name='name' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Презиме : </label>
                        <input type="text" value="<?= $userData->firstnameMember ?>" name='firstname' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="pseudo" class="form-label">Корисничко име : </label>
                        <input type="text" value="<?= $userData->pseudoMember ?>" name='pseudo' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Емаил : </label>
                        <input type="email" value="<?= $userData->emailMember ?>" name='email' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Град : </label>
                        <input type="text" value="<?= $userData->cityMember ?>" name='city' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="postalCode" class="form-label">Поштенски код : </label>
                        <input type="text" value="<?= $userData->postalCodeMember ?>" name='postalCode' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">Адреса : </label>
                        <input type="text" value="<?= $userData->adressMember ?>" name='adress' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Нова лозинка: </label>
                        <input type="password" name='password' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Потврди лозинка : </label>
                        <input type="password" name='password2' class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" name="signUp" value="Потврди">
                </form>
                <?= checkError() ?>
            </div>
        </div>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>