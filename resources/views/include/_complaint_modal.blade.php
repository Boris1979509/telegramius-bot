@php
  $complainData = [__('common.complain.label.one'), __('common.complain.label.two'), __('common.complain.label.three'), __('common.complain.label.four'), __('common.complain.label.five')];
@endphp
<div id="complaint_modal_wrap" class="default_modal_wrap">

  <div class="default_modal_body">
    <p class="h1 h1_back" onclick="toggleShow('complaint_modal_wrap')">
      @lang('common.complain.modalTitle')
    </p>

    <div class="default_modal_content">
      @foreach ($complainData as $complain)
        <label class="radio_label">
          <input name="complaint" type="radio" value="{{ $complain }}" class="radio_box">
          <span class="check_radio_box"></span>
          <span class="radio_box_info">{{ $complain }}</span>
        </label>
      @endforeach
    </div>

    <div class="btn_default_wrap">
      <span class="btn_default btn_default-disable">
        Отправить
      </span>
    </div>
  </div>

</div>
@push('scripts')
  <script>
    const radioButtons = document.querySelectorAll('input[name="complaint"]')
    const submitButton = document.querySelector('.btn_default')
    let checkedValue = null
    const reset = () => {
      radioButtons.forEach(button => {
        button.checked = false;
      });
    }
    radioButtons.forEach(button => {
      button.addEventListener('click', () => {
        checkedValue = button.value
        if (button.checked) {
          submitButton.classList.remove('btn_default-disable')
        } else {
          submitButton.classList.add('btn_default-disable')
        }
      })
    })

    submitButton.addEventListener('click', (event) => {
      if (submitButton.classList.contains('btn_default-disable')) {
        return
      }
      const params = {
        topic: checkedValue,
        product_id: '@json($product->id)'
      }
      api.createBuyerComplaint(params)
        .then(resp => {
          toggleShow('complaint_modal_wrap') // Close
          toggleShow('final_modal_wrap') // Open
          reset() // reset all buttons
          submitButton.classList.add('btn_default-disable') // disabled
        }).catch(error => {
          console.log(error)
        })
    })
  </script>
@endpush
