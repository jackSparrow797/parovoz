
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $slide->title ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Описание Категории</label>
    <textarea class="form-control" name="description" rows="5" placeholder="Описание Категории"  >{{ $slide->description ?? "" }}</textarea>
</div>
<div class="form-group">
    <label for="">Сортировка</label>
    <input class="form-control"  placeholder="Сортировка" type="text" name="sort" value="{{ $slide->sort ?? "" }}">
</div>
<div class="form-group">
    <label for="">Картинка</label>
    <input class="form-control"  placeholder="Картинка" type="file" name="file" >
</div>
@if (isset($slide->files))
    <div class="form-group">
        @forelse($slide->files as $file)
            <img src="/storage/{{ $file->path }}" style="max-width: 100%;" alt="">
        @empty
            <p>Нет Картинки</p>
        @endforelse
    </div>
@endif
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>