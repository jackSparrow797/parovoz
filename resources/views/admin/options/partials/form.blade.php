
<div class="form-group">
    <label for="">Телефон</label>
    <input class="form-control" type="text" name="phone1" placeholder="Телефон" value="{{ $options->phone1 ?? "" }}">
</div>
<div class="form-group">
    <label for="">Дополнительный телефон</label>
    <input class="form-control" type="text" name="phone2" placeholder="Дополнительный телефон" value="{{ $options->phone2 ?? "" }}">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input class="form-control" type="text" name="email" placeholder="Email" value="{{ $options->email ?? "" }}">
</div>
<div class="form-group">
    <label for="">Email для форм</label>
    <input class="form-control" type="text" name="emailTo" placeholder="Email для форм" value="{{ $options->emailTo ?? "" }}">
</div>
<div class="form-group">
    <label for="">title</label>
    <input class="form-control" type="text" name="title" placeholder="title" value="{{ $options->title ?? "" }}">
</div>
<div class="form-group">
    <label for="">description</label>
    <textarea name="description" class="form-control" rows="3" placeholder="description"  >{{ $options->description ?? "" }}</textarea>
</div>
<div class="form-group">
    <label for="">keywords</label>
    <textarea name="keywords" class="form-control" rows="3" placeholder="keywords"  >{{ $options->keywords ?? "" }}</textarea>
</div>

<div class="form-group">
    <label for="">viber</label>
    <input class="form-control" type="text" name="viber" placeholder="viber" value="{{ $options->viber ?? "" }}">
</div>

<div class="form-group">
    <label for="">whatsapp</label>
    <input class="form-control" type="text" name="whatsapp" placeholder="whatsapp" value="{{ $options->whatsapp ?? "" }}">
</div>
<div class="form-group">
    <label for="">skype</label>
    <input class="form-control" type="text" name="skype" placeholder="skype" value="{{ $options->skype ?? "" }}">
</div>
<div class="form-group">
    <label for="">vk</label>
    <input class="form-control" type="text" name="vk" placeholder="vk" value="{{ $options->vk ?? "" }}">
</div>
<div class="form-group">
    <label for="">instagram</label>
    <input class="form-control" type="text" name="instagram" placeholder="instagram" value="{{ $options->instagram ?? "" }}">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-success" value="Сохранить">
</div>