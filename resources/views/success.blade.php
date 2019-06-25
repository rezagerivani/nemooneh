@extends('headerpage')

@section('container')
    <div class="container">
        <div class="jumbotron">
               
            @foreach ($students as $student)
            <div>
                <h3 class="alert alert-info">
                    {{ $student->lastname }} {{ $student->name }}
                    پیش ثبت نام ورود به پایه هفتم انجام شد 
                </h3>
            </div>
            <div> 
            <small>کد رهگیری</small>
            <h3 class="alert alert-success" class="text-center">
                <iframe  class="text-center" src="{{ URL::to('barcode')}}/{{ $student->tracking_code }}" frameborder="0" height="200px" scrolling="no"></iframe>
            </h3>  
                    
            <small>ذخیره شده در {{ Verta::instance($student->created_at) }}</small>
        </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">جنسیت </label>
                    <span class="form-control">
                        {{ $student->school_sx }}
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">نام مدرسه نمونه دولتی مورد تقاضا  </label>
                    <span class="form-control">
                        {{ $student->school_name }}
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col">    
                    <div class="form-group">
                        <label for="">نام خانوادگی </label>
                        <span class="form-control">
                            {{ $student->lastname }}
                        </span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">نام </label>
                        <span class="form-control">
                            {{ $student->name }}
                        </span>
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col"> 
                    <div class="form-group">
                        <label for=""> کد ملی  </label>
                        <span class="form-control">
                            {{ $student->nationalcode }}
                        </span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" > تاریخ تولد  </label><br>
                        <span class="form-control">
                            {{ $student->birthday }}
                        </span>
                    </div>
                </div>
            </div>
        
        <div class="row">
            <div class="col"> 
                <div>
                    <label for="">نام پدر</label>
                    <span class="form-control">
                        {{ $student->fathername }}
                    </span>            
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">متقاضی استفاده از سهمیه شاهد  </label>
                        <span class="form-control">
                            {{ $student->shahed }}
                        </span>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <label for="">نام واحد آموزشی ابتدایی محل تحصیل</label>
                        <span class="form-control">
                            {{ $student->now_school }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col">    
                        <div class="form-group">
                            <label for=""> نام شهرستان  محل تحصیل </label>
                            <span class="form-control">
                                {{ $student->now_city }}
                            </span>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="">نشانی محل سکونت</label>
                            <span class="form-control">
                                {{ $student->address }}
                            </span>
                        </div>
                    </div>
                </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">شماره تلفن ثابت  </label>
                <span class="form-control">
                    {{ $student->phone }}
                </span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">شماره تلفن همراه   </label>
                <span class="form-control">
                    {{ $student->mobile }}
                </span>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">   عملکرد تحصیلی   </label>
                    <span class="form-control">
                        {{ $student->academic_performance }}
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">حافظ قرآن کریم 
                        <input type="checkbox" name="quran_remember" 
                        @if ($student->quran_remember == "on")
                            checked 
                        @endif
                        disabled
                        >
                        @if ($student->quran_remember == "on")
                            {{ $student->jozs }} 
                            جزء 
                        @endif
                    </label>                        
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col">
        <div class="form-group">
            <label for="">کسب رتبه در مسابقات قرآن  ( قرائت حفظ و مفاهیم ) عترت ( نهج البلاغه صحیفه سجادیه مداحی ) نماز ( اذان احکام و انشای نماز ) </label>
            <table class="table table-bordered">
                <tr>
                    <th>سطح</th>
                    <th>تعداد مقام اول</th>
                    <th>تعداد مقام دوم</th>
                    <th>تعداد مقام سوم</th>
                </tr>
                <tr>
                    <th>شهرستان</th>
                    <td>{{ $student->qen_1m }}</td>
                    <td>{{ $student->qen_2m }}</td>
                    <td>{{ $student->qen_3m }}</td>
                </tr>
                <tr>
                    <th>استان</th>
                    <td>{{ $student->qen_1o }}</td>
                    <td>{{ $student->qen_2o }}</td>
                    <td>{{ $student->qen_3o }}</td>
                </tr>
                <tr>
                    <th>کشور</th>
                    <td>{{ $student->qen_1k }}</td>
                    <td>{{ $student->qen_2k }}</td>
                    <td>{{ $student->qen_3k }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>کسب رتبه در مسابقات فرهنگی و هنری - صرفا آموزش و پرورش</label>
            <table class="table table-bordered">
                <tr>
                    <th>سطح</th>
                    <th>تعداد مقام اول</th>
                    <th>تعداد مقام دوم</th>
                    <th>تعداد مقام سوم</th>
                </tr>
                <tr>
                    <th>شهرستان</th>
                    <td>{{ $student->fh_1m }}</td>
                    <td>{{ $student->fh_2m }}</td>
                    <td>{{ $student->fh_3m }}</td>
                </tr>
                <tr>
                    <th>استان</th>
                    <td>{{ $student->fh_1o }}</td>
                    <td>{{ $student->fh_2o }}</td>
                    <td>{{ $student->fh_3o }}</td>
                </tr>

            </table>
        </div>
    </div>
</div>
<div class="row">
        <div class="col">
        <div class="form-group">
            <label > کسب رتبه منتخب  در جشنواره جابربن حیان </label>
            <table class="table table-bordered">
                <tr>
                    <th>سطح</th>
                    <th>تعداد رتبه برتر</th>

                </tr>
                <tr>
                    <th>شهرستان</th>
                    <td>{{ $student->jaber_1m }}
                </tr>
                <tr>
                    <th>استان</th>
                    <td>{{ $student->jaber_1o }}
                </tr>
                <tr>
                    <th>کشور</th>
                    <td>{{ $student->jaber_1k }}
                </tr>
            </table>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label> کسب رتبه  در مسابقات و المپیادهای ورزشی -- صرفا آموزش  و پرورش</label>
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
                        {{ $student->sport_1m }}
                    </td>
                    <td>{{ $student->sport_2m }}</td>
                    <td>{{ $student->sport_3m }}</td>
                </tr>
                <tr>
                    <th>استان</th>
                    <td>{{ $student->sport_1o }}</td>
                    <td>{{ $student->sport_2o }}</td>
                    <td>{{ $student->sport_3o }}</td>
                </tr>
                <tr>
                    <th>کشور</th>
                    <td>{{ $student->sport_1k }}</td>
                    <td>{{ $student->sport_2k }}</td>
                    <td>{{ $student->sport_3k }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
        <div>
            <label for="">تعداد تالیف  </label>
            <span>
                {{ $student->talif }}    
            </span>            
        </div>
        <div>
                <label for="">تعداد اختراع   </label>
                <span>
                    {{ $student->ekhtera }}    
                </span>            
            </div>
        <div class="form-group">
            <label for="">عضویت در شورای دانش آموزی  
                <input type="checkbox" name="shora" 
                @if ($student->shora == "on")
                        checked 
                    @endif
                    disabled
                >
            </label>                        
        </div>
        <div class="form-group">
            <label for=""> عضویت در تشکل های دانش آموزی ( پیشتازان )
                <input type="checkbox" name="pishtazan" 
                @if ($student->pishtazan == "on")
                        checked 
                    @endif
                    disabled
                >
            </label>                        
        </div>
        @endforeach
    </div>
@endsection