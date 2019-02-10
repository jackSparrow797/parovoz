<div class="card mb-3 file_block{{ $file->id }}">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <img src="/storage/{{ $file->path }}" style="max-width: 100%;" alt="">
            </div>
            <div class="col">
                <input type="number" min="0" name="files_sort[{{ $file->id }}]" data-id="{{ $file->id }}" class="form-control" placeholder="Сортировка" value="{{ $file->sort }}">
            </div>
            <div class="col text-right">
                <a href="#" data-id="{{ $file->id }}" class="btn btn-danger link-file-to-delete">
                    Удалить
                </a>
            </div>
        </div>
    </div>
</div>