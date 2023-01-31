@extends('layouts.app')


@section("content")
<div class="container">
<h1>{{__('advertisment.index.title')}}</h1>
<a href="{{route('advertisment.create')}}">
    <div id="wrapper">
        <div id="header">
            <div id="logo">
                <img id="logo_img" src="http://www.nhquang.com.vn/Restaurant/images/logo.jpg">
            </div>
            <div id="banner">
                <img id="banner_img" src="http://www.nhquang.com.vn/Restaurant/images/banner.jpg">
            </div>      
        </div>

        

    </div>
    <div id="main_content">
            <div id="content">
                <div class="courses">
                    <div class="course_img_frame">
                        <img class="course_img" src="http://www.nhquang.com.vn/Restaurant/images/mon_01.jpg">
                    </div>
                    <p class="course_title">Bò hầm rượu vang</p>
                    <p class="course_description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor possimus inventore perferendis quod
                    </p>
                    <p>
                        <span class="new_price">800.000 VND</span>
                        <span class="old_price">950.000 VND</span>
                    </p>
                    <button class="course_order">ĐẶT MÓN</button>
                </div>
            <!-- End of course-->

            <div class="courses">
                <div class="course_img_frame">
                    <img class="course_img" src="http://www.nhquang.com.vn/Restaurant/images/mon_02.jpg">
                </div>
                <p class="course_title">Bò hầm rượu vang</p>
                <p class="course_description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor possimus inventore perferendis quod
                </p>
                <p>
                    <span class="new_price">800.000 VND</span>
                    <span class="old_price">950.000 VND</span>
                </p>
                <button class="course_order">ĐẶT MÓN</button>
            </div>
       
        <!-- End of course-->

        <div class="courses">
            <div class="course_img_frame">
                <img class="course_img" src="http://www.nhquang.com.vn/Restaurant/images/mon_03.jpg">
            </div>
            <p class="course_title">Bò hầm rượu vang</p>
            <p class="course_description">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor possimus inventore perferendis quod
            </p>
            <p>
                <span class="new_price">800.000 VND</span>
                <span class="old_price">950.000 VND</span>
            </p>
            <button class="course_order">ĐẶT MÓN</button>
        </div>
    <!-- End of course-->

    <div class="courses">
        <div class="course_img_frame">
            <img class="course_img" src="http://www.nhquang.com.vn/Restaurant/images/mon_04.jpg">
        </div>
        <p class="course_title">Bò hầm rượu vang</p>
        <p class="course_description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor possimus inventore perferendis quod
        </p>
        <p>
            <span class="new_price">800.000 VND</span>
            <span class="old_price">950.000 VND</span>
        </p>
        <button class="course_order">ĐẶT MÓN</button>
    </div>
<!-- End of course-->

<div class="courses">
    <div class="course_img_frame">
        <img class="course_img" src="http://www.nhquang.com.vn/Restaurant/images/mon_05.jpg">
    </div>
    <p class="course_title">Bò hầm rượu vang</p>
    <p class="course_description">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor possimus inventore perferendis quod
    </p>
    <p>
        <span class="new_price">800.000 VND</span>
        <span class="old_price">950.000 VND</span>
    </p>
    <button class="course_order">ĐẶT MÓN</button>
</div>
<!-- End of course-->

<div class="courses">
    <div class="course_img_frame">
        <img class="course_img" src="http://www.nhquang.com.vn/Restaurant/images/mon_06.jpg">
    </div>
    <p class="course_title">Bò hầm rượu vang</p>
    <p class="course_description">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor possimus inventore perferendis quod
    </p>
    <p>
        <span class="new_price">800.000 VND</span>
        <span class="old_price">950.000 VND</span>
    </p>
    <button class="course_order">ĐẶT MÓN</button>
</div>
<!-- End of course-->


        </div>
        
@foreach($advertisments as $advertisment)

@endforeach
        




<style>

    

#wrapper{
    width: 1200px; /* Thiết lập độ rộng*/
}

#header{
    width: 100%;
}

#main_content{
    width: 100%;
   
}
#footer{
    width: 100%;
}

#logo{
    width: 25%;
    float: left;
}

#banner{
    width: 75%;
    float:left; /* Dàn ngang */
}

#left_menu{
    width: 25%;
    float: left;
}

#content{
    width: 100%;
    float:left; /* Dàn ngang */
}

#logo_img{
    width: 100%;
    aspect-ratio: 1/1; /* Đặt tỷ lệ giữa chiều rộng và chiều cao*/
}
#banner_img{
    width: 100%;
    aspect-ratio: 3/1;
}

#menu_bar{
    background-color: #DDD; /* Đặt màu nền*/

}

h1{
    text-align:center;
}
.menu_item{
    display: inline-block; /* Hiện danh sách theo chiều ngang */
    width: 16%;
    font-size: 16px; /* Đặt cỡ chữ */
    font-weight: bold; /* Đặt chữ đậm*/
    line-height: 40px; /* Đặt chiều cao của dòng chữ*/
    text-align: center; /* Canh chữ vào giữa */
}
.menu_item:hover{
    background-color: #BBB;
    color: red;
}


.courses {
    width: 31%;
    float: left;
    padding: 10px;/* đặt khoảng cách đến các cạnh*/
}
.course_img{
    width: 100%;
    aspect-ratio: 4/3;
}
.course_img:hover{
    transform: scale(1.2);/* Phóng to/nhỏ ảnh*/
    transition: 500ms ease-in-out; /* Biến đổi dần*/
}


.course_title{
    font-size: 14px;
    font-weight: bold;
}

.course_description{
    font-size: 12px;
    text-align: justify;
    color:black;
}

.new_price{
    font-size: 13px;
    color: blue;
}

.old_price{
    font-size: 12px;
    color: red;
    text-decoration: line-through; /* Gạch ngang dòng chữ */
}

.course_order{
    width: 100%;
    height: 40px;
    text-align: center;
    font-size: 13px;
    font-weight: bold;
    border-radius: 10px;/* Bo tròn góc */
}
.course_order:hover{
    background-color: red;
    color: white;
}
.course_img_frame{
    overflow: hidden; /* Ẩn nội dung vượt khỏi phạm vi*/
}


</style>



</a>
@endsection