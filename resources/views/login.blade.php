@extends('headerpage')

@section('container')
    <div class="container">  
            <div class="alert alert-info" style="text-align:center"> 
                    <h1>فرم پیش ثبت نام مدارس نمونه دولتی</h1>
                    <p>دانش آموزان ورودی پایه هفتم سال تحصیلی 99-1398</p>
                    <small> اداره کل آموزش و پرورش خراسان شمالی</small>
            </div> 
            
                        @if (isset($message))
                            @if($message == "1")
                                <div class="alert alert-danger">
                                    <p>
                                        <b>خطا </b>
                                        کد ملی دانش آموز پیدا نشد
                                    </p>                                                       
                                </div>
                                <div class="alert alert-warning">
                                    <p>
                                        چنانچه در حال حاضر دانش آموز استان خراسان شمالی نیستید با بخش پشتیبانی تماس بگیرید
                                    </p>
                                </div>
                            @endif  
                            @if($message == "2")
                            <div class="alert alert-danger">
                                <p>
                                        <b>خطا </b>
                                        کد ثبت نام و یا رمز عبور غلط است
                                </p>                           
                            </div>
                            @endif
                        @endif   
            <div class="row">
                
                <div class="col-sm-12">
                    <div>    
                        <form action="/checklogin" method="POST">@csrf
                            <div class="form-group">
                                <label for="">کد ملی دانش آموز <small>(بدون صفر ابتدای کد ملی و بدون خط تیره )</small></label>
                                <input type="text" name="nationalcode" id="" class="form-control">
                            </div>
                            
                            <input type="submit" value="ورود" class="btn btn-primary btn-block">
                        </form>
                    </div>
                        
                </div>
            </div>
                
        <div class="alert alert-info">
            <h1 class="text-center">
                اطلاعیه
            </h1>     
            <p>
                مهلت ثبت نام از تاریخ دهم تیرماه لغایت ۲۵ تیرماه می باشد.
            </p>
            <p>
                زمان ویرایش اطلاعات پس از پایان مهلت ثبت نام به مدت ۵ روز می باشد
            </p>
            <p>
                زمان اعلام نتیجه: پس از پایان مهلت ویرایش دو برابر ظرفیت پذیرش مدرسه جهت ارایه اصل مدارک و مستندات به مدرسه معرفی می شوند
            </p>
        </div>               
                
    </div>
@endsection
