<!-- Modal -->
<div class="modal fade" id="call_back" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Перезвоните мне</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('send.callback') }}" class="ajax form-green modal-form" data-close="call_back"
                  method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Как вас зовут*</label>
                        <input type="text" name="name" class="form-control radius-none" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш номер телефона*</label>
                        <input type="text" name="phone" class="form-control radius-none"
                               placeholder="8 (000) 000-00-00">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-block btn-green r26" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="feed_back" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Написать нам</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('send.feedback') }}" class="ajax form-green modal-form" data-close="feed_back"
                  method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Как вас зовут*</label>
                        <input type="text" name="name" class="form-control radius-none" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш E-mail</label>
                        <input type="email" name="email" class="form-control radius-none" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш номер телефона*</label>
                        <input type="text" name="phone" class="form-control radius-none" placeholder="8 (000) 000-00-00">
                    </div>
                    <div class="form-group">
                        <label for="">Текст сообщения*</label>
                        <textarea name="text" class="form-control radius-none" rows="5" placeholder="Текст сообщения"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-block btn-green r26" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Сообщение отправлено</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-green r26" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>