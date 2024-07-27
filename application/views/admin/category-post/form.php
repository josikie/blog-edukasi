<?php
if($crudmode == 'create') {
    $id = '';
    $name = '';
} else {
    $id = $category->id;
    $name = $category->name;
}
?>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="hidden" name="id" value="<?=$id;?>">
            <input type="text" name="name" class="form-control" value="<?= $name;?>" id="name" placeholder="input name of category here">
        </div>
    </div>
