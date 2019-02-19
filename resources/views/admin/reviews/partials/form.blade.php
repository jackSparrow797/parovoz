<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $review->title ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Сайт</label>
    <input class="form-control" type="text" name="site" placeholder="Сайт" value="{{ $review->site ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Автор</label>
    <input class="form-control" type="text" name="author" placeholder="Автор" value="{{ $review->author ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Должность</label>
    <input class="form-control" type="text" name="post" placeholder="Должность" value="{{ $review->post ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Сортировка</label>
    <input class="form-control" type="number" name="sort" placeholder="Сортировка" value="{{ $review->sort ?? 0 }}" required>
</div>
<div class="form-group">
    <label for="">Текст отзыва</label>
    <textarea name="text" id="editor" class="form-control" rows="8" placeholder="Наименование"  required>{!! $review->text ?? "" !!}</textarea>
</div>
<div class="form-group">
    <label for="">Логотип</label>
    <input class="form-control"  placeholder="Логотип"   type="file" name="logo" >
</div>
@if (isset($review->logo))
    <div class="form-group">
            <img src="/storage/{{ $review->logo }}" style="max-width: 100%;" alt="">
    </div>
@endif
<div class="form-group">
    <label for="">Картинка</label>
    <input class="form-control"  placeholder="Картинка" multiple  type="file" name="file[]" >
</div>
@if (isset($review->files))
    <div class="form-group">
        @forelse($review->files as $file)
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