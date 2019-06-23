<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="http://nkhedu.ir/phone/js/jquery.min.js"></script>
        <!-- Fonts -->        
        {{-- <link type="text/css" rel="stylesheet" href="https://cdn.rawgit.com/rastikerdar/Shabnam-font/v3.1.0/dist/font-face.css">  --}}
        <link type="text/css" rel="stylesheet" href="{{ asset('fonts/font-face.css') }}"> 
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
        <style>
        @font-face {
            font-family: Shabnam;
            src: url('Shabnam.eot');
            src: url('Shabnam.eot?#iefix') format('embedded-opentype'),
                 url('Shabnam.woff') format('woff'),
                 url('Shabnam.ttf') format('truetype');
            font-weight: normal;
          }
          
          @font-face {
            font-family: Shabnam;
            src: url('Shabnam-Bold.eot');
            src: url('Shabnam-Bold.eot?#iefix') format('embedded-opentype'),
                 url('Shabnam-Bold.woff') format('woff'),
                 url('Shabnam-Bold.ttf') format('truetype');
            font-weight: bold;
          }
          body {
            font-family: 'Shabnam', sans-serif;
            text-align: right;
          }
          select option {
            font-family: 'Shabnam', sans-serif;
            text-align: right; 
          }
          li {
              list-style: none;
          }
          input,select,option,label,ul,li,textarea {
            direction: rtl;  
            font-family: 'Shabnam', sans-serif;
            text-align: right;
          }
          label {
              background-color:whitesmoke;
              width: 100%;
              padding: 5px;
              border-radius: 5px; 
          }
          .n {
              width: 5%;
          }
          table {
              direction: rtl;
          }
          .footer {
              font-size: 8px;
              text-align: center;
          }
          .navbar {
            direction: rtl;
          }
        </style> 
    <title>ثبت نام مدارس نمونه دولتی</title> 
</head>
<body>
      @yield('container')
      <div class="text-secondary text-center">
        <small>   اداره فناوری اطلاعات</small> 
      </div>
</body>
</html>     