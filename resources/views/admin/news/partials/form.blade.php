<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $news->title ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Сортировка</label>
    <input class="form-control" type="number" name="sort" placeholder="Сортировка" value="{{ $news->sort ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Описание</label>
    <textarea name="text" id="editor" class="form-control" rows="5" placeholder="Наименование"  required>{!! $news->text ?? "" !!}</textarea>
</div>
<div class="form-group">
    <label for="">Картинка</label>
    <input class="form-control"  placeholder="Картинка" multiple  type="file" name="file[]" >
</div>
@if (isset($news->files))
    <div class="form-group">
        @forelse($news->files as $file)
            <img src="/storage/{{ $file->path }}" style="max-width: 100%;" alt="">
        @empty
            <p>Нет Картинки</p>
        @endforelse
    </div>
@endif
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>