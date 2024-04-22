<div class="form-group">
    <label for="<?=$x->field?>"><?=$x->title?>:</label>
    <select class="form-control <?=$x->class?>" id="<?=$x->field?>" name="<?=$x->field?>">
        <?php foreach ($x->values as $value) : ?>
            <option><?=$value?></option>
        <?php endforeach; ?>
    </select>
</div>
