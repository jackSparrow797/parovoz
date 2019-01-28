<div class="row block_trust white" id="questions">
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="font-walls text-center">Остались вопросы?<br/>мы ответим на них</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <img src="{{ asset('design/images/man.png') }}" alt="man">
            </div>
            <div class="col-md mt-4 mt-md-0">
                <form action="{{ route('send.question') }}" class="ajax form-white-round" method="post">
                    @csrf
                    <div class="response green"></div>
                    <div class="form-group">
                        <label for="">Как вас зовут*</label>
                        <input type="text" name="name" class="form-control " placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="Введите ваше имя">
                        <input type="hidden" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш номер телефона*</label>
                        <input type="text" name="phone" class="form-control" placeholder="8 (000) 000-00-00">
                    </div>
                    <div class="form-group">
                        <label for="">Комментарий к заявке*</label>
                        <textarea name="text" class="form-control" rows="5" placeholder="Ваш комментарий"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-white r26" value="заказать">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>