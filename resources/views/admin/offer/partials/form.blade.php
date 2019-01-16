
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $offer->title ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Описание</label>
    <textarea name="text" class="form-control" rows="5" placeholder="Наименование"  required>{{ $offer->text ?? "" }}</textarea>
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
    <label for="">Картинка</label>
    <input class="form-control"  placeholder="Картинка" multiple  type="file" name="file[]" >
</div>
@if (isset($offer->files))
    <div class="form-group">
        @forelse($offer->files as $file)
            <img src="/storage/{{ $file->path }}" style="max-width: 100%;" alt="">
        @empty
            <p>Нет Картинки</p>
        @endforelse
    </div>
@endif
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>