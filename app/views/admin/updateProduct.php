<?php $this->view("inc/header", $data); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Промени книга</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Име : </label>
                    <input type="text" value="<?= isset($product) ? $product->nameProduct : " "; ?>" name='name' class="form-control">
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
                    <input type="number" value="<?= isset($product) ? $product->priceProduct : " "; ?>" name='price' class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Количина : </label>
                    <input type="number" value="<?= isset($product) ? $product->stockProduct : " "; ?>" name='stock' class="form-control">
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