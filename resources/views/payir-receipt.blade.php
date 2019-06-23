@extends('headerpage')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="alert">{{ $message }}</h1>
        <br>
        @if(isset($transaction) && $transaction->status)
        <div class="alert alert-success">
        <p>
            <b>شناسه پراخت: </b> {{ $transaction->transaction_id }}
          </p>
          <p>
            <b>مبلغ کسر شده : </b> {{ $transaction->amount }} ریال
          </p>
          <p>
            <b>شماره کارت بانکی : </b> {{ $transaction->card_number }}
          </p>
          <p>
             <b> کد ثبت نام : </b> {{ $data['registration_code'] }}
          </p>
          <p>
              <b>    رمز عبور : </b> {{ $data['registration_password'] }}
            </p>
        </div>      
        @endif
        <button class="btn btn-primary" onclick="window.open('/login/{{ $data['registration_code'] }}/{{ $data['registration_password'] }}','_self')">بازگشت به صفحه ثبت نام </button>
      </div>
    </div>
  </div>
@endsection