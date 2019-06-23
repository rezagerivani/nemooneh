@extends('headerpage')

@section('container')
    <div class="container">  
            <div class="alert alert-info" style="text-align:center"> 
                    <h1>فرم پیش ثبت نام مدارس نمونه دولتی</h1>
                    <p>دانش آموزان ورودی پایه هفتم سال تحصیلی 99-1398</p>
                    <small> اداره کل آموزش و پرورش خراسان شمالی</small>
            </div> 
            {{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal" data-id="1">اطلاعیه ها </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal" data-id="2">پشتیبانی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal" data-id="3">اطلاعات تماس</a>
                        </li>                    
                    </ul>
                </nav> 
                
                <!-- Button to Open the Modal -->
    <script type="text/javascript">
        function notifs() {
            console.log('اطلاعیه ها');
            $('.modal-title').html("<div class='text-center'>اطلاعیه ها </div>");
            $('.modal-body').html("test");
        }
        function suppo() {
            console.log(' پشتیبانی');
            $('.modal-title').html("<div class='text-center'>پشتیبانی</div>");
            $('.modal-body').html("سعحح");
            }
        function contac() {
            $('.modal-title').html("<div class='text-center'>اطلاعات تماس</div>");
            $('.modal-body').html("<div class='bg-secondary'><h5 class='bg-success text-center'>ارتباط با بخش پشتیبانی</h5><p class='text-center text-light'>058-32243301</p></div>");
        }            
        $('.nav-link').click(function(){
            var id = $(this).data("id");
            switch (id) {
                case 1:
                    notifs();
                    break;
                case 2:
                    suppo();
                    break;
                case 3:
                    contac();
                    break;    
                default:
                    break;
            }
        });
    </script> 
      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              Modal body..
            </div>
      
      
          </div>
        </div>
      </div> --}}
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
                {{-- <div class="col-sm-8">
                    <h3 class="text-center">اطلاعیه ها</h3>
                </div> --}}
                <div class="col-sm-12">
                    <div>    
                        <form action="/checklogin" method="POST">@csrf
                            <div class="form-group">
                                <label for="">کد ملی دانش آموز <small>(بدون صفر ابتدای کد ملی و بدون خط تیره )</small></label>
                                <input type="text" name="nationalcode" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">   
                                    <span>کد ثبت نام</span>
                                    
                                </label>
                                <input 
                                    type="text" 
                                    name="registration_code" 
                                    id="" 
                                    class="form-control" 
                                    value="{{ $data['registration_code'] }}"
                                    placeholder="{{ $data['registration_code'] }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="">رمز عبور</label>
                                <input 
                                    type="password" 
                                    name="registration_password" 
                                    id="" 
                                    class="form-control"
                                    value="{{ $data['registration_password'] }}"
                                    placeholder="{{ $data['registration_password'] }}"
                                >
                            </div>    
                            <input type="submit" value="ورود" class="btn btn-primary btn-block">
                            <a class="btn btn-danger btn-block" href="/payir/form">خرید کد ثبت نام </a>
                        </form>
                    </div>
                        
                </div>
            </div>
                
                        
                
    </div>
@endsection
