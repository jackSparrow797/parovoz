<div class="row payne_block">
    <div class="container py-5">
        <h2 class="font-walls text-center mb-4">Понравились работы?<br/>Оставь нам заявку</h2>
        <div class="row">
            <div class="col-md">
                <img src="{{ asset('design/images/mpayne.png') }}" alt="major Payne">
            </div>
            <div class="col-md mt-4 mt-md-0">
                <form action="{{ route('send.payne') }}" class="ajax form-green" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Как вас зовут*</label>
                        <input type="text" name="name" class="form-control radius-none" placeholder="Введите ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш E-mail</label>
                        <input type="email" name="email" class="form-control radius-none" placeholder="Введите ваше имя">
                        <input type="hidden" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">Ваш номер телефона*</label>
                        <input type="text" name="phone" class="form-control radius-none" placeholder="8 (000) 000-00-00">
                    </div>
                    <div class="form-group">
                        <label for="">Комментарий к заявке*</label>
                        <textarea name="text" class="form-control radius-none" rows="5" placeholder="Ваш комментарий"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-green r26" value="заказать">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>