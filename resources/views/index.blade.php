@extends('layouts.app')

@section('content')
<head>

    <style>
        .container-item {
            width: 100%;
            position: relative;
            overflow:hidden; 
        }

        .container-item img {
            width: 100%;
            aspect-ratio:1/1;
            transition: all 0.4s linear;
        }

        .container-item:hover img{
            transform: scale(120%);
        }



        .name-product {
            color: white;
            border-radius: 10px;
            transition: all 0.2s linear;
        }

        .container-item:hover .name-product {
            padding: 5px;
            color: black;
            background-color: #e5e5e5
        }

        .container-item .content {
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /*NEW-COLECTION*/
        .container-second img{
            width:100%;
            aspect-ratio: 1/1;
        }
       
        .card-body{
            border-left: 0.5px solid rgb(33,37,41);
            border-right: 0.5px solid rgb(33,37,41);
            border-bottom: 0.5px solid rgb(33,37,41);
        }
        .price{
            font-size: 15px;
            color: blue;
        }
        .old_price{
        font-size: 12px;
        color: red;
        text-decoration: line-through; /* Gạch ngang dòng chữ */
        }


        footer {
           background:rgb(34,34,34);
           color: rgb(255,255,255);
           display:block;
           font-weight: 400;
           font-size:14.4px;
           padding-top: 50px;
           padding-bottom: 50px;
         }
        
        .col-md-3 li{
            list-style-type: none;
        }
        .col-md-3 a{
            text-decoration: none;
            color: rgb(255,255,255);
        }
       

    </style>
</head>
<body>
    <!--COLLECTION-->
    <div class="container" style="width: 100%">
        <h1 style="display: flex; justify-content:center; color:BLACK">BỘ SƯU TẬP HOA</h1>
        <div class="row d-flex align-items-center">
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                        <img src="{{ asset('images/hoasn01.png') }}" alt="Your Image">
                        <div class="content position-absolute">
                            <h4 class="name-product">Hoa sinh nhat</h4>
                            <button btn = "btn btn-default">Mua ngay</button>
                        </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn02.jpg') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn03.jpg') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn04.png') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn05.png') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn06.jpg') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn07.jpg') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn08.jpg') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3" style="position: relative">
                <div class="container-item">
                    <img src="{{ asset('images/hoasn09.jpg') }}" alt="Your Image">
                    <div class="content position-absolute">
                        <h4 class="name-product">Hoa sinh nhat</h4>
                        <button>Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--NEW-COLLECTION-->
    <div class="container" style="width:100%">
        <h1 style="display:flex; justify-content:center">SẢN PHẨM MỚI</h1>
        <h1 style="display:flex; justify-content:center">
        <img src="{{asset('images/flower_string.png')}}" alt="">
        </h1>
        <div class="row d-flex align-items-center">
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn10.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn11.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>    
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn12.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>    
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn13.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>    
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn14.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>    
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn15.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn16.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>        
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn17.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>        
            <div class="col-sm-4 mb-3">
                <div class="container-second">
                    <div class="img-container">
                        <img src="{{ asset('images/hoasn18.jpg')}}" alt ="">
                </div>
                <div class="card-body text-center">
                    <div class="card-title">HOA SINH NHẬT</div>
                    <p>
                        <span class="price">200.000đ</span>
                        <span class="old_price">250.000đ</span>
                    </p>
                </div>
                </div>  
            </div>                
        </div>
    </div>
    <!--Footer-->
    <footer>
		<div class="container">
			<div class="container row">
				<div class="col-md-3">
					<h3>
						MỞ RỘNG
					</h3>
					<ul>
						<li>
							<a href="#">
								Nhãn Hiệu
							</a>
						</li>
						<li>
							<a href="#">
								Phiếu Quà Tặng
							</a>
						</li>
						<li>
							<a href="#">
								CHi Nhánh
							</a>
						</li>
						<li>
							<a href="#">
								Đặc Biệt
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>
						THÔNG TIN
					</h3>
					<ul>
						<li>
							<a href="#">
								Về Chúng Tôi
							</a>
						</li>
						<li>
							<a href="#">
								Chính Sách Bảo Mật
							</a>
						</li>
						<li>
							<a href="#">
								Điều Khoản và Điều Kiện
							</a>
						</li>
						<li>
							<a href="#">
								Liên Hệ
							</a>
						</li>
						<li>
							<a href="#">
								Tìm Chúng Tôi
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>
						TÀI KHOẢN
					</h3>
					<ul>
						<li>
							<a href="#">
								Tài Khoản Của Tôi
							</a>
						</li>
						<li>
							<a href="#">
								Lịch Sử Mua Hàng
							</a>
						</li>
						<li>
							<a href="#">
								Danh Sách Muốn Mua
							</a>
						</li>
						<li>
							<a href="#">
								Bản Tin
							</a>
						</li>
						<li>
							<a href="#">
								Lợi Nhuận
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>
						CONTACT US
					</h3>
					<div style="margin-left: 20px;">
                        Hà Nội
					</div>
					<div style="margin-left: 20px;">
						<a href="mailto:turtle201.qn@gmail.com">quang21.qn@gmail.com</a>
					</div>
					<div style="margin-left: 20px;">
						<a href="tel:0984170521">0984170521</a>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
</body>
	
	
@endsection