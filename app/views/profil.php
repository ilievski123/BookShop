<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-8 text-center">
            <h1 class="">Информации за корисникот <?= $data['userData']->firstnameMember ?> <?= $data['userData']->nameMember ?> </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="offset-2 col-4 infos">
            <h3>Општи информации</h3>
            <p>Име : <span class="bold"> <?= $data['userData']->nameMember ?></span></p>
            <p>Презиме : <span class="bold"> <?= $data['userData']->firstnameMember ?></span></p>
            <p>Корисничко име : <span class="bold"><?= $data['userData']->pseudoMember ?> </span></p>
            <p>Емаил :<span class="bold"> <?= $data['userData']->emailMember ?></span></p>
        </div>
        <div class="offset-2 col-4 infos">
            <h3>Други информации</h3>
            <p>Град :<span class="bold"> <?= $data['userData']->cityMember ?></span></p>
            <p>Поштенски код : <span class="bold"> <?= $data['userData']->postalCodeMember ?></span></p>
            <p>Адреса :<span class="bold"> <?= $data['userData']->adressMember ?> </span></p>
        </div>
    </div>
    <div class="row my-5 justify-content-center">
        <div class="col-lg-5 col-9">
            <button class="btn btn-primary"><a href="<?= ROOT ?>profil/update">Измени</a></button>
            <button class="btn btn-primary"><a href="<?= ROOT ?>profil/commands">Види нарачки</a></button>
            <button class="btn btn-danger"><a href="<?= ROOT ?>profil/delete">Избриши</a></button>
        </div>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>