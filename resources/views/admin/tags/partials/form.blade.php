
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $tag->title ?? "" }}" required>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>