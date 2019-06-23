<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('school_name',[
                'اسفراین - پسرانه شهید شجیعی ',
                'اسفراین - دخترانه اندیشه ',
                'بجنورد - پسرانه سعدی ',
                'بجنورد - دخترانه حافظیه',
                'جاجرم - پسرانه آیت ا... طالقانی ',
                'جاجرم - دخترانه عالمه ',
                'راز و جرگلان - پسرانه حضرت مهدی ',
                'راز و جرگلان - دخترانه نرجس ',
                'شیروان - پسرانه فزانگان ',
                'شیروان - دخترانه ایمان',
                'فاروج - پسرانه الغدیر ',
                'فاروج - دخترانه فدک ',
                'مانه و سملقان - پسرانه پژوهش ',
                'مانه و سملقان - دخترانه نجابت ',
                'گرمه - پسرانه موعود '            
                ]);
            $table->string('nationalcode', 20);
            $table->enum('shahed',[
                '............. ',
                'اولویت اول',
                'اولویت دوم',
                'اولویت سوم',
                'اولویت چهارم'
                ]);
            $table->text('address');
            $table->string('phone', 11);
            $table->string('mobile', 11);
            $table->enum('academic_performance',[
                'کسب مقیاس خیلی خوب در تمامی دروس در نوبت پایه های پنجم و ششم',
                'کسب مقیاس خوب در یک درس در یک نوبت یکی از پایه های پنجم یا ششم و مقیاس خیلی خوب در سایر دروس هر دو نوبت پایه های پنجم و ششم'
                ]);
            $table->string('quran_remember',3)->default('off')->nullable();
            $table->mediumInteger('jozs')->default('0')->nullable();

            $table->mediumInteger('qen_2m')->default('0')->nullable();
            $table->mediumInteger('qen_1m')->default('0')->nullable();
            $table->mediumInteger('qen_3m')->default('0')->nullable();
            $table->mediumInteger('qen_1o')->default('0')->nullable();
            $table->mediumInteger('qen_2o')->default('0')->nullable();
            $table->mediumInteger('qen_3o')->default('0')->nullable();
            $table->mediumInteger('qen_1k')->default('0')->nullable();
            $table->mediumInteger('qen_2k')->default('0')->nullable();
            $table->mediumInteger('qen_3k')->default('0')->nullable();
            $table->mediumInteger('fh_1m')->default('0')->nullable();
            $table->mediumInteger('fh_2m')->default('0')->nullable();
            $table->mediumInteger('fh_3m')->default('0')->nullable();
            $table->mediumInteger('fh_1o')->default('0')->nullable();
            $table->mediumInteger('fh_2o')->default('0')->nullable();
            $table->mediumInteger('fh_3o')->default('0')->nullable();                       
            $table->mediumInteger('jaber_1m')->default('0')->nullable();
            $table->mediumInteger('jaber_1o')->default('0')->nullable();
            $table->mediumInteger('jaber_1k')->default('0')->nullable();
            $table->mediumInteger('sport_1m')->default('0')->nullable();
            $table->mediumInteger('sport_2m')->default('0')->nullable();
            $table->mediumInteger('sport_3m')->default('0')->nullable();
            $table->mediumInteger('sport_1o')->default('0')->nullable();
            $table->mediumInteger('sport_2o')->default('0')->nullable();
            $table->mediumInteger('sport_3o')->default('0')->nullable();
            $table->mediumInteger('sport_1k')->default('0')->nullable();
            $table->mediumInteger('sport_2k')->default('0')->nullable();
            $table->mediumInteger('sport_3k')->default('0')->nullable();

            $table->mediumInteger('talif')->default('0')->nullable();
            $table->mediumInteger('ekhtera')->default('0')->nullable();
            $table->string('shora',3)->default('off')->nullable();
            $table->string('pishtazan',3)->default('off')->nullable();
            $table->string('tracking_code',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}