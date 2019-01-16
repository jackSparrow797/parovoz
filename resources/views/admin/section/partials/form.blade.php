
<div class="form-group">
    <label for="">Наименование</label>
    <input class="form-control" type="text" name="title" placeholder="Наименование" value="{{ $section->title ?? "" }}" required>
</div>
<div class="form-group">
    <label for="">Тип  раздела</label>
    <select class="form-control" name="page_id" id="">
        @forelse($pages as $page)
            <option value="{{ $page->id }}">{{ $page->title }}</option>
        @empty
        @endforelse
    </select>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>