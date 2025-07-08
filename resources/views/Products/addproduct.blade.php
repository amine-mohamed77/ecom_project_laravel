@extends("layouts.master")

@section('content')



<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
</div>


<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Have you any question?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" action="/storeproduct" id="fruitkha-contact" onsubmit="return valid_datas( this );">
                             @csrf
							<p>
								<input type="text" style="width: 100%" placeholder="Name" name="name" id="name">

							</p>
							<p style="display:flex">
                              <input type="number"  style="width: 50%; margin-right:20px;"placeholder="price" name="price" id="price">
								<input type="number" style="width: 50%"placeholder="quantity" name="quantity" id="quantity">

							</p>
							<p><textarea name="descraption" id="descraption" cols="30" rows="10" placeholder="descraption"></textarea></p>
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
