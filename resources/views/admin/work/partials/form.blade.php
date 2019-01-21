
<div class="form-group">
    <label for="">Раздел</label>
    <select class="form-control" name="section_id" id="">
        @forelse($sections as $section_item)
            <option value="{{ $section_item->id }}" @php echo (isset($work) && $section_item->id == $work->section_id) ? 'selected' : '' @endphp>{{ $section_item->title }}</option>
        @empty
        @endforelse
    </select>
</div>

<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $work->title ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Задача</label>
    <textarea name="task" class="form-control" rows="4" placeholder="Задача" >{{ $work->task ?? "" }}</textarea>
</div>
<div class="form-group">
    <label for="">Решение</label>
    <textarea name="answer" class="form-control" rows="4" placeholder="Решение"  >{{ $work->answer ?? "" }}</textarea>
</div>
<div class="form-group">
    <label for="">Сайт</label>
    <input class="form-control" type="text" name="site" placeholder="Сайт" value="{{ $work->site ?? "" }}" >
</div>
<div class="form-group">
    <label for="">Сортировка</label>
    <input class="form-control" type="text" name="sort" placeholder="Сортировка" value="{{ $work->sort ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Тэги</label>
    <select class="form-control" name="tags[]" multiple>
        @forelse($tags as $tagItem)
            <option
             @if (isset($tags_active) && in_array($tagItem->id, $tags_active))
                selected
             @endif
                    value="{{ $tagItem->id }}">{{ $tagItem->title }}</option>
        @empty
        @endforelse
    </select>
</div>
<div class="form-group">
    <label for="">Картинка</label>
    <input class="form-control"  placeholder="Картинка" multiple  type="file" name="file[]" >
</div>
@if (isset($work->files))
    <div class="form-group">
        @forelse($work->files as $file)
            <img src="/storage/{{ $file->path }}" style="max-width: 100%;" alt="">
        @empty
            <p>Нет Картинки</p>
        @endforelse
    </div>
@endif
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>