<div id="remove_modal_wrap" class="modal remove_modal_wrap _modal ">{{--show--}}
    <div class="modal_overlay" onclick="support.deleteAddress()"></div>

    <div class="remove_modal_content">
        <div class="remove_modal_body p_relative">
            <p class="remove_modal__title">Вы точно уверены, <br/>что хотите удалить адрес?</p>

            <div class="remove_modal_buttons row">
                <span class="btn_default btn_default-go" onclick="support.deleteAddress()">Нет</span>
                <span class="btn_default" onclick="support.deleteAddress()">Да</span>
            </div>
        </div>
    </div>
</div>
