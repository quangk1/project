@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <body>
	<!---COLLECTION----->
	<div class="container">
		<div class="row collection">
			<div class="container-fluid text-center">
				<h2 class="section-title">
					Bộ Sưu Món Ăn
				</h2>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="imges/h1.jpg" alt="Món ăn">
					<div class="card-body container text-center">
						<h5 class="card-title">
							Bún Gà
						</h5>
						<a href="#" class="btn btn-primary">
							Mua ngay
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="imges/h2.jpg" alt="Món ăn">
					<div class="card-body container text-center">
						<h5 class="card-title">
							BÚN BÒ
						</h5>
						<a href="#" class="btn btn-primary">
							Mua ngay
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="imges/h3.jpg" alt="Món ăn">
					<div class="card-body container text-center">
						<h5 class="card-title">
							BÁNH TRƯNG
						</h5>
						<a href="#" class="btn btn-primary">
							Mua ngay
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="imges/h1.jpg" alt="Món ăn">
					<div class="card-body container text-center">
						<h5 class="card-title">
							BÚN GÀ
						</h5>
						<a href="#" class="btn btn-primary">
							Mua ngay
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="imges/h5.jpg" alt="Món ăn">
					<div class="card-body container text-center">
						<h5 class="card-title">
							BÁNH KÉP
						</h5>
						<a href="#" class="btn btn-primary">
							Mua ngay
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="imges/h2.jpg" alt="Món ăn">
					<div class="card-body container text-center">
						<h5 class="card-title">
							BÚN BÒ
						</h5>
						<a href="#" class="btn btn-primary">
							Mua ngay
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!---NEW PRODUCT
	<div class="container">
		<div class="row product">
			<div class="container-fluid text-center">
				<h2 class="section-title">
					Sản phẩm mới
				</h2>
			</div>
			<div class="container-fluid text-center">
				<img src="imges/flower_string.jpg" width="30%">
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_01.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_02.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_03.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_04.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_05.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_06.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_07.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_08.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_09.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_10.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_11.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="card">
					<div class="img-container">
						<img class="card-img-top" src="imges/new_products/product_12.jpg" alt="Món ăn">
						<div class="addCart">
							<i class="fa fa-shopping-cart">
							</i>
						</div>
						<ul class="side-icons">
							<span>
								<i class="fa fa-search">
								</i>
							</span>
							<span>
								<i class="fa fa-heart">
								</i>
							</span>
							<span>
								<i class="fa fa-sliders">
								</i>
							</span>
						</ul>
					</div>
					<div class="card-body container text-center">
						<h5 class="card-title">
							HOA SINH NHẬT
						</h5>
						<p>
							<span class="price">
								200.000đ
							</span>
							<span class="old_price">
								250.000đ
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	

</body>
       
        
    </div>
</div>
----->
@endsection