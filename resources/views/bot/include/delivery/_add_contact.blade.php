<div id="add_contact_modal_wrap" class="default_modal_wrap ">{{--show--}}

    <div class="default_modal_body">
        <p class="h1 h1_back" onclick="support.addContact()">Добавить контакты</p>

        <div class="default_modal_content">

            <div class="form_group">
                <label for="" class="order_comment__label">Имя</label>
                <input type="text" class="form_control" placeholder="Имя и фамилия">
            </div>
            <div class="form_group">
                <label for="" class="order_comment__label">Телефон</label>
                <input type="text" class="form_control" placeholder="Введите телефон">
            </div>
            <div class="form_group">
                <label for="" class="order_comment__label">Email</label>
                <input type="text" class="form_control" placeholder="Введите телефон">
            </div>

            <label class="checkbox_data">
                <input name="" type="checkbox" value="" class="checkbox">
                <span class="check_checkbox"></span>
                <span class="checkbox_info p_relative">Согласен (на) <a href="">на обработку персональных данных</a></span>
            </label>

        </div>

        <div class="btn_default_wrap">
            <span class="btn_default ">{{--btn_default-disable--}}
                Сохранить
            </span>
        </div>
    </div>

</div>
