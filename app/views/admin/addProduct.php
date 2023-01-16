<?php $this->view("inc/header", $data); ?>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Додај книга </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Име : </label>
                    <input type="text" value="<?= isset($_POST['name']) ? $_POST['name'] : " "; ?>" name='name' class="form-control">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Категорија : </label>
                    <select name="category" class="form-select">
                        <option selected>Избери категорија</option>
                        <?php if (isset($selectHTML)) {
                            echo $selectHTML;
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Цена : </label>
                    <input type="number" value="<?= isset($_POST['price']) ? $_POST['price'] : " "; ?>" name='price' class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Достапна количина : </label>
                    <input type="number" value="<?= isset($_POST['stock']) ? $_POST['stock'] : " "; ?>" name='stock' class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Опис : </label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Избери слика : </label>
                    <input name="image" class="form-control" type="file" accept="image/png, image/jpeg">
                </div>
                <input type="submit" class="btn btn-primary" name="signUp" value="Потврди">
            </form>
            <?= checkError() ?>
        </div>
    </div>
</div>
<?php $this->view("inc/footer", $data); ?>