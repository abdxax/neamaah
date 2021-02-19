<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link  rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://use.fontawesome.com/d11ec116c1.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>


</head>
<body dir="rtl" >
<header>
    <div class="header-admin">

           <div class="imag-left">
               <img src="{{asset('image/webImage/logo2.png')}}" width="100px" height="35px">
           </div>

        <div class="dat-right">
            {{date('d-m-Y')}}
        </div>

    </div>
</header>

<section class="section2">
    <div class="row nov">
        <div class="col-3 ">
            <button class="nav-button" id="buts">
                <i class="fa fa-arrow-left " ></i>
            </button>


            <div class="nav-adm " id="mun">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('admin.index')}}"><span>الصفحة الرئيسية </span><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('admin.chr')}}"><span>الجمعيات </span><i class="fa fa-building" aria-hidden="true"></i></a></li>

                    <li><a href="{{route('admin.city')}}"><span>المدن </span><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('admin.orders')}}"><span>الطلبات </span><i class="fa fa-sort" aria-hidden="true"></i></a></li>
                    <li><a href="{{route('logout')}}"><span>تسجيل خروج </span><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>

                </ul>
            </div>

        </div>

        <div class="col-9">
            @yield('contac')
        </div>

    </div>
</section>

<section class="section1 ">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>



<!-- js files-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('button').click(function(){
            $('#mun').toggleClass('nav-adm2');
            $('#buts').toggleClass('nav-button2');
        })
    })
</script>
</body>
</html>
