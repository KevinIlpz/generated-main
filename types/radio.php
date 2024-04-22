<div class="form-group">
    <label><?=$x->title?>:</label>
    <div class="form-check">
        <?php foreach ($x->values as $value): ?>
            <input class="form-check-input" type="radio" id="<?=$x->field?>" name="<?=$x->field?>" value="<?=$value?>">
            <label class="form-check-label" for="<?=$x->field?>"><?=$value?></label>
            <br>
        <?php endforeach; ?>
    </div>
</div>
