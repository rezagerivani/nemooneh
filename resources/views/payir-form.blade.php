@extends('headerpage')

@section('container')
  <div class="container">
    <form method="post">
      @csrf
      @if(session('alert'))
      <p class="alert alert-{{ session('alert') }}">
        {{ session('message') }}
      </p>
      @endif
          <div class="jumbotron">
                <h1>سیستم پرداخت اینترنتی </h1>
                <p>                  
                  تکمیل فرم ثبت نام به منزله ثبت نام قطعی شما در دبیرستان نمونه دولتی نمی باشد بلکه صرفا جنبه خود اظهاری داشته و پس از بررسی اصل  مدارک برابر ظرفیت به ترتیب از بالاترین امتیاز پذیرش انجام می گیرد.
                </p>
          </div>
          <br>
          <div class="form-group">
            <label for="txt-amount">
                اداره کل آموزش و پرورش خراسان شمالی 
            </label>
            {{-- <input type="text" id="txt-amount" class="form-control" name="amount" value="50000" disabled> --}}
            <input type="hidden" name="amount" value="50000">
          </div>
          <button class="btn btn-primary">اتصال به درگاه و پرداخت مبلغ 50,000 ریال </button>
    </form>
  </div>
@endsection