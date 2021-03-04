<!DOCTYPE html>
<html>

<head>
    <title>الاستعلام عن تصريح</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top our-navbar scrolled">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">غرفه طولكرم</a>
            </div>
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="" href="#" data-scroll="Home">Home</a></li>
                    <li><a href="#" data-scroll="About" class="">About</a></li>
                    <li><a href="#" data-scroll="Our-Work" class="">Our work</a></li>
                    <li><a href="#" data-scroll="Team" class="active">Team</a></li>
                    <li><a href="#" data-scroll="Pricing">Pricing</a></li>
                    <li><a href="#" data-scroll="Blog">Blog</a></li>
                    <li><a href="#" data-scroll="Contact-Us">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav> <br> <br><br><br>
    {{-- <br />
    <br /> --}}
    <div class="container box">
        <div class="panel panel-default">
            <div class="panel-heading">الاستعلام عن التصاريح</div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="ادخل رقم الهوية" />
                </div>
                <div class="table-responsive">
                    <h3 align="center">النتائج <span id="total_records"></span></h3>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>رقم الهوية</th>
                                <th>التليفون</th>
                                <th>الوظيفة</th>
                                <th>تاريخ النزول</th>
                                <th>الرد </th>
                                <th>بداية التصريح </th>
                                <th>نهاية التصريح </th>
                                <th>ملاحظات </th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="footor big-padding">

        <div class="container">
            <div class="row">

                <div class="col-md-3 col-md-6 col-xs-12 ">

                    <div class="footor-logo" style="margin: 0px 30px 17px 55px">
                        <img style="background-color: #fff" class="img-responsive"
                            src="{{URL::asset('Admin/img/brand/1.jpg')}}" alt="footor-logo">

                    </div>

                    <p class="small-p">تتمثل رؤية الغرفة التجارية في الريادة في بناء الاقتصاد المحلي وتقديم مجموعة من
                        الخدمات التي تهم مجتمع الأعمال والعمل على
                        خلق بيئة ملائمة للاقتصاد وتشجيع الاستثمار وتقوم رسالة الغرفة على تمثيل مصالح الأعضاء في المحافظة
                        وتقديم الخدمات والبرامج
                        النوعية والتنموية للدفاع عن مصالحهم وتطوير عمل القطاع الخاص بأعلى مستوى من الجودة بناء على
                        احتياجاتهم باستخدام أحدث
                        الوسائل التكنولوجية والأساليب الإدارية</p>







                </div>
                <div class="col-md-2 col-md-offset-2 col-sm-6 col-xs-6">


                    <div class="support-1">



                        <ul style="direction: rtl;">


                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> عن الغــــرفة</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>نشــأة الغرفة</a></li>


                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>إنجازات الغرفة</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> مجلس الإدارة</a></li>

                        </ul>
                    </div>



                </div>
                <div class="col-md-2 col-md-offset-2 col-sm-6 col-xs-6">


                    <div class="support-1">


                        <ul style="direction: rtl;">

                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> محافظة طولكرم </a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> وزارة الإقتصاد</a></li>


                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> وزارة المالية</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> إتحاد الغرف
                                    التجارية</a></li>

                        </ul>
                    </div>



                </div>



            </div>


        </div>
        <p style="color: #fff;
     text-align:center;background:#000000;position: fixed;
            bottom: 0;
            left: 0;
            right: 0;" class="footer_p">&amp; جميع الحقوق محفوظة لـ غرفة طولكرم ©
        </p>

    </div>
    <style>
        /*==========start section Header ==========*/
        .navbar-default {
            background-color: #a92f2f;
            border-color: #fff;
            direction: rtl;
        }



        /*==========ُُEnd section Header ==========*/


        /*==========start section footor ==========*/
        .footor {
            padding-bottom: 0;
            background: #151E2A;
            color: #fff;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 50px 0;
        }

        .footor .footor-logo {
            width: 122px;
            margin-bottom: 15px;
        }

        .footor .footor-logo img {

            width: 100%;

        }


        .footor p {
            margin-bottom: 15px;
        }


        .footor .social-icon ul li {
            border-radius: 50%;
            border: 1.44px solid #fff;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 25px;

            margin-bottom: 10px;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
            background-color: orangered;
            margin-bottom: 40px;
            cursor: pointer;
        }

        .footor .social-icon ul li a {
            color: #fff;

        }

        .footor .social-icon ul li:nth-child(1) {

            padding-left: 5px
        }

        .footor .social-icon ul li:nth-child(1):hover {
            background-color: #3B5A9A;
            border-color: #3B5A9A;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, .21);
            transform: translateY(-2px);


        }

        .footor .social-icon ul li:nth-child(2):hover {
            background-color: #0175B0;
            border-color: #0175B0;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, .21);
            transform: translateY(-2px);

        }

        .footor .social-icon ul li:nth-child(3):hover {
            background-color: #54ABF0;
            border-color: #54ABF0;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, .21);
            transform: translateY(-2px);

        }

        .footor .social-icon ul li:nth-child(4):hover {
            background-color: #DD4B3E;
            border-color: #DD4B3E;
            background: #d6249f;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            box-shadow: 0px 3px 10px rgba(0, 0, 0, .21);
            transform: translateY(-2px);
        }

        .footor .social-icon ul li:nth-child(5):hover {
            background-color: #BE0719;
            border-color: #BE0719;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, .21);
            transform: translateY(-2px);

        }

        .footor .support-1 {
            margin-bottom: 40px;
        }

        .footor .support-1 span {
            color: orangered;
            font-weight: bold;
            margin-bottom: 30px;
            display: block;

        }

        .footor .support-1 ul li {
            margin-bottom: 10px;
        }

        .footor .support-1 ul li a {
            color: #8a8a8a;
            margin-bottom: 5px;
            transition: all .2s ease-in-out;
            position: relative;
            font-size: 16px;


            letter-spacing: .32px;
            -webkit-transition: all 350ms linear 0s;
            -o-transition: all 350ms linear 0s;
            transition: all 350ms linear 0s;


        }

        .footor .support-1 ul li a i {
            position: absolute;
            left: -5px;
            top: 43%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            opacity: 0;
            font-size: 22px;





        }

        .footor .support-1 ul li:hover a {
            padding-left: 10px;
            color: #ff9600;
        }

        .footor .support-1 ul li:hover a i {
            opacity: 1;
        }

        .footor-imgs span {
            color: orangered;
            font-weight: bold;
            margin-bottom: 30px;
            display: block;



        }
        }

        .footor-imgs {
            overflow: hidden;
        }

        .footor-imgs .footor-img {
            margin-bottom: 8px;
            overflow: hidden;
            transition: all .3s ease-in-out
        }

        .footor-imgs .col-xs-6 {
            padding-right: 5px;
            padding-left: 0;

        }

        .footor-imgs .footor-img img {
            width: 100%;
            height: 66px;
            background-size: cover;

        }

        .footor-imgs .footor-img:hover {
            transform: scale(1.05);


        }

        /*================= start navbar =====================*/


        /* end when scroll */

        /*================= end navbar =====================*/

        /*================= start slider =============
        /*==========end section footor ==========*/
    </style>
</body>

</html>

<script>
    $(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
        $.ajax({
        url:"{{ route('live_search.action') }}",
        method:'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
            $('tbody').html(data.table_data);
            $('#total_records').text(data.total_data);
        },

        })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();

  fetch_customer_data(query);
 });
});



</script>
