<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Логирај се</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Емаил : </label>
                        <input type="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ""; ?>" name='email' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Лозинка : </label>
                        <input type="password" name='password' class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" name="login" value="Потврди">
                </form>
                <?= checkError() ?>
                <p>Немаш профил? <a href="signUp"> Регистрирај се!</a></p>
            </div>
        </div>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>