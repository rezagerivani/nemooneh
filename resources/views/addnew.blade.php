@extends('headerpage')

@section('container')
    <div class="container">        
        <div class="jumbotron">
            <h1>اداره کل آموزش و پرورش خراسان شمالی</h1>
            <p>فرم پیش ثبت نام دانش آموزان ورود به پایه هفتم مدارس نمونه دولتی دوره اول متوسطه</p>
            <p>سال تحصیلی 99-1398</p>
            <p><button class="btn" onclick="window.open('logoff','_self')">خروج</button></p>
        </div> 
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
            <div class="col">
                <form action="/post" method="post">@csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">نام خانوادگی </label>
                                <input type="text"  class="form-control" value="{{ $data['lastname'] }}" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">نام </label>
                                <input type="text" class="form-control"  value="{{ $data['name'] }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for=""> کد ملی  </label>
                                    <label for="" class="form-control">{{ $data['nationalcode'] }}</label>
                                    <input type="hidden" name="nationalcode" value="{{ $data['nationalcode'] }}">
                                </div>
                            </div>
                            <div class="col">                    
                                <div class="form-group">
                                    <label for="" > تاریخ تولد  </label><br>
                                        <label class="n"> سال </label>
                                        <select  id="" disabled>
                                                <option value="{{ $data['birth_year'] }}">{{ $data['birth_year'] }}</option>
                                        
                                        </select>
                                        <label class="n"> ماه </label>
                                        <select  id="" disabled>
                                                <option value="{{ $data['birth_month'] }}">{{ $data['birth_month'] }}</option>

                                        </select>
                                        <label class="n"> روز </label>
                                        <select  id="" disabled>
                                                <option value="{{ $data['birth_day'] }}">{{ $data['birth_day'] }}</option>

                                        </select>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col">        
                                <div>
                                    <label for="">نام پدر</label>
                                    <input type="text" class="form-control"  value="{{ $data['fathername'] }}" disabled>
                                </div>
                            </div>
                    <div class="col"> 
                            <div class="form-group">
                                <label for="">جنسیت آموزشگاه</label>
                                <select class="form-control"  disabled>
                                    <option value="{{ $data['school_sx']  }}"> {{ $data['school_sx']  }} </option>
                                </select>
                            </div>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col"> 
                                <div>
                                    <label for="">نام واحد آموزشی ابتدایی محل تحصیل</label>
                                    <input type="text"  class="form-control"  value="{{ $data['now_school'] }}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for=""> نام شهرستان محل تحصیل </label>
                                    <select class="form-control"  disabled>
                                            <option value="{{ $data['now_city'] }}"> {{ $data['now_city'] }} </option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="">نام مدرسه نمونه دولتی مورد تقاضا </label>
                        <select class="form-control" name="school_name">
                            @foreach( App\Students::getPossibleStatuses('students','school_name') as $key => $value)
                                <option value="{{ $value }}"> {{ $value }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                            <label for="">نشانی محل سکونت</label>
                            <textarea name="address" class="form-control"></textarea>
                        </div>
                    <div class="row">
                        <div class="col">     
                        <div class="form-group">
                            <label for="">شماره تلفن ثابت  </label>
                            <input type="text" name="phone" class="form-control" placeholder="شماره تلفن ثابت">
                        </div>
                        </div>
                        <div class="col"> 
                        <div class="form-group">
                            <label for="">شماره تلفن همراه   </label>
                            <input type="text" name="mobile" class="form-control" placeholder="شماره تلفن همراه">
                        </div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="">متقاضی استفاده از سهمیه شاهد  </label>
                        <ul>
                            <li> اولویت اول : فرزند شهید- فرزند مفقودالاثر - فرزند جانباز با درصد جانبازی بالای ۷۰ درصد</li>
                            <li> اولویت دوم : فرزند آزاده بابیش از سه سال سابقه اسارت - فرزند جانباز با درصد جانبازی ۵۰ تا ۶۹</li>
                            <li> اولویت سوم : فرزند جانباز با درصد جانبازی ۲۵ تا ۴۹ - فرزند آزاده کمتر از سه سال سابقه اسارت</li>
                            <li> اولویت چهارم : فرزند جانباز با درصد جانبازی زیر ۲۵ درصد - فرزند آزاده کمتر از شش  ماه سابقه اسارت</li>
                        </ul>
                        <select class="form-control" name="shahed">
                            @foreach( App\Students::getPossibleStatuses('students','shahed') as $key => $value)
                                <option value="{{ $value }}"> {{ $value }} </option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="">   عملکرد تحصیلی   </label>
                        <select class="form-control" name="academic_performance">
                            @foreach( App\Students::getPossibleStatuses('students','academic_performance') as $key => $value)
                                <option value="{{ $value }}"> {{ $value }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">حافظ قرآن کریم 
                            <input type="checkbox" name="quran_remember" onclick="javascript:toggleJoz()">
                        
                        <div id="joz">
                            تعداد جزء ها را انتخاب کنید
                                <select name="jozs" id="">
                                        @for ($i =0 ; $i <=30 ; $i++)
                                            <option value="{{{$i}}}">{{{$i}}}</option>
                                        @endfor
                                        </select>
                        </div> 
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#joz").hide();
                            });
                            function toggleJoz(){
                                $("#joz").toggle();
                            }
                        </script> 
                        </label>                      
                    </div>
                    <div class="form-group">
                        <label for="">کسب رتبه در مسابقات قرآن  ( قرائت حفظ و مفاهیم ) عترت ( نهج البلاغه صحیفه سجادیه مداحی ) نماز ( اذان احکام و انشای نماز )  </label>
                        <table class="table table-bordered">
                                <tr>
                                        <th>سطح</th>
                                        <th>تعداد مقام اول</th>
                                        <th>تعداد مقام دوم</th>
                                        <th>تعداد مقام سوم</th>
                                    </tr>
                            <tr>
                                <th>شهرستان</th>
                                <td>
                                    <select name="qen_1m" id="">
                                    @for ($i =0 ; $i <30 ; $i++)
                                        <option value="{{{$i}}}">{{{$i}}}</option>
                                    @endfor
                                    </select>
                                </td>
                                <td>
                                    <select name="qen_2m" id="">
                                        @for ($i =0 ;$i <=30 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>    
                                <td>
                                    <select name="qen_3m" id="">
                                        @for ($i =0 ;$i <=30 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>استان</th>
                                <td>
                                    <select name="qen_1o" id="">
                                        @for ($i =0 ;$i <=30 ; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select> 
                                </td>
                                <td>
                                        <select name="qen_2o" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="qen_3o" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                            </tr>
                            <tr>
                                <th>کشور</th>
                                <td>
                                        <select name="qen_1k" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="qen_2k" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                                        <td>
                                                <select name="qen_3k" id="">
                                                    @for ($i =0 ;$i <=30 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select> 
                                            </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <label>کسب رتبه در مسابقات فرهنگی و هنری صرفا در پایه پنجم و ششم و متولی آموزش و پرورش</label>
                        <table class="table table-bordered">
                            <tr>
                                <th>سطح</th>
                                <th>تعداد مقام اول</th>
                                <th>تعداد مقام دوم</th>
                                <th>تعداد مقام سوم</th>
                            </tr>
                            <tr>
                                <th>شهرستان</th>
                                <td>
                                        <select name="fh_1m" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="fh_2m" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                                        <td>
                                                <select name="fh_3m" id="">
                                                    @for ($i =0 ;$i <=30 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select> 
                                            </td>
                            </tr>
                            <tr>
                                <th>استان</th>
                                <td>
                                        <select name="fh_1o" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="fh_2o" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                                        <td>
                                                <select name="fh_3o" id="">
                                                    @for ($i =0 ;$i <=30 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select> 
                                            </td>
                            </tr>
                            
                        </table>
                    </div>
                    <div class="form-group">
                        <label > کسب رتبه منتخب منطقه ای استانی و کشوری در جشنواره جابربن حیان</label>
                        <table class="table table-bordered">
                            <tr>
                                <th>سطح</th>
                                <th>تعداد رتبه برتر</th>

                            </tr>
                            <tr>
                                <th>منطقه</th>
                                <td>
                                        <select name="jaber_1m" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>

                            </tr>
                            <tr>
                                <th>استان</th>
                                <td>
                                        <select name="jaber_1o" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>

                            </tr>
                            <tr>
                                <th>کشور</th>
                                <td>
                                        <select name="jaber_1k" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                            <label> کسب رتبه منطقه ای استانی و کشوری در مسابقات و المپیادهای ورزشی -- صرفا در پایه پنجم و ششم و متولی آموزش و پرورش</label>                        <table class="table table-bordered">
                            <tr>
                                <th>سطح</th>
                                <th>تعداد مقام اول</th>
                                <th>تعداد مقام دوم</th>
                                <th>تعداد مقام سوم</th>
                            </tr>
                            <tr>
                                <th>منطقه</th>
                                <td>
                                        <select name="sport_1m" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="sport_2m" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                                        <td>
                                                <select name="sport_3m" id="">
                                                    @for ($i =0 ;$i <=30 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select> 
                                            </td>
                            </tr>
                            <tr>
                                <th>استان</th>
                                <td>
                                        <select name="sport_1o" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="sport_2o" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                                        <td>
                                                <select name="sport_3o" id="">
                                                    @for ($i =0 ;$i <=30 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select> 
                                            </td>
                            </tr>
                            <tr>
                                <th>کشور</th>
                                <td>
                                        <select name="sport_1k" id="">
                                            @for ($i =0 ;$i <=30 ; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select> 
                                    </td>
                                    <td>
                                            <select name="sport_2k" id="">
                                                @for ($i =0 ;$i <=30 ; $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select> 
                                        </td>
                                        <td>
                                                <select name="sport_3k" id="">
                                                    @for ($i =0 ;$i <=30 ; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select> 
                                            </td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <label for="">تعداد تالیف </label>
                        
                        <select name="talif" id="">
                            @for ($i = 0; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }} </option>
                            @endfor
                        </select>
                    </div>
                    <div>
                            <label for="">تعداد ثبت اختراع </label>
                            
                            <select name="ekhtera" id="">
                                @for ($i = 0; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }} </option>
                                @endfor
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="">عضویت در شورای دانش آموزی  
                            <input type="checkbox" name="shora" id="">
                        </label>                        
                    </div>
                    <div class="form-group">
                        <label for=""> عضویت در تشکل های دانش آموزی ( پیشتازان )
                            <input type="checkbox" name="pishtazan" id="">
                        </label>                        
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ثبت" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
        <div class="alert alert-secondary footer">
                اداره فناوری اطلاعات و ارتباطات
        </div>
    </div>
@endsection