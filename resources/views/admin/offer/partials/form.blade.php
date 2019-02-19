<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $offer->title ?? "" }}"
           required>
</div>
<div class="form-group">
    <label for="">Описание</label>
    <textarea name="text" class="form-control" rows="8" id="editor" placeholder="Наименование"
              required>{!! $offer->text ?? "" !!}</textarea>
</div>
<div class="form-group">
    <label for="">Раздел</label>
    <select class="form-control" name="section_id" id="">
        @forelse($sections as $section)
            <option value="{{ $section->id }}" @php echo (isset($offer) && $section->id == $offer->section_id) ? 'selected' : '' @endphp>{{ $section->title }}</option>
        @empty
        @endforelse
    </select>
</div>

<div class="form-group">
    <label for="">Картинки</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" placeholder="Добавить картинки" multiple  name="file[]" id="customFile">
        <label class="custom-file-label"   for="customFile">Добавить картинки</label>
    </div>
</div>
@if (isset($offer->files))
    <h4>Изображения</h4>
    <div class="row">
        <div class="col">Изображение</div>
        <div class="col">Сортировка</div>
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col-12">
            @forelse($offer->files->sortBy('sort') as $file)
                @include ('admin.files.files_edit')
            @empty
                <p>Нет Картинки</p>
            @endforelse
        </div>
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