<div class="button_add">
    <div class="add-content" title="<?=$title;?>">
        <i class="fa-solid fa-square-plus"></i>
    </div>
</div>

<div class="modal-form">
    <?php foreach ($input as $key => $value) :?>
        <label for="<?=$value;?>"><?=$value;?></label><br>
        <input type="text" name="<?=$value;?>" id="<?=$value;?>"> <br>
    <?php endforeach ?>
</div>