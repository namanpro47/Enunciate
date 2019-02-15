<div class="breadcrumb-container">
	<div class="container">
		<ul class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?page=category">Books</a></li>
			<li class="active">Shopping cart</li>
		</ul><!-- /.breadcrumb -->

		<?php require KB_ROOT.'/parts/section/search-box.php';?>

	</div><!-- /.container -->
</div><!-- /.breadcrumb-container -->

<div class="checkout page">
	<div class="container">
		<div class="page-header">
			<h2 class="page-title">Checkout Information</h2>
			<p class="page-subtitle">DO eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
		</div><!-- /.page-header -->

		<div class="page-body">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<span class="step">1</span>checkout informations
							</a>
						</h4>
					</div><!-- /.panel-heading -->

					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="row">
								
								<div class="col-sm-offset-1 col-sm-5">
									<h3 class="panel-subtitle">new customer</h3>
									<div class=" checkout-radio-option"> 				
										<input type="radio" class="book-radio" name="optionsRadios"  id="optionsRadios1" value="option1" checked>                                         
										<label class="book-radio-label" for="optionsRadios1" >
										     <span class="radio-background"><i class="icon fa fa-circle"></i></span>Register
										</label>											
									</div><!-- /.checkout-radio-option -->

									<div class="checkout-radio-option">										
										<input type="radio" class="book-radio" name="optionsRadios"  id="optionsRadios2" value="option2">                                        
										<label class="book-radio-label" for="optionsRadios2">
										     <span class="radio-background"><i class="icon fa fa-circle"></i></span>Guest
										 </label>
									</div><!-- /.checkout-radio-option -->

									<p>Consectetur adipisicing elit,sed do eiusmod</p>
								</div><!-- /.col -->
							
								<div class="col-sm-4">
									<h3 class="panel-subtitle">return customer</h3>
									<div class="input-group margin-bottom-sm">
										<span class="input-group-addon input-group-addon-book">
										     <i class="fa fa-user fa-fw"></i>
										</span>
										<input class="form-control form-control-book" type="text" placeholder="Youremail@email.com">
									</div><!-- /.input-group -->

									<div class="row">
										<div class="col-md-6 col-sm-12 no-padding-right">
											<div class="input-group input-group-book">
												<span class="input-group-addon input-group-addon-book">
												     <i class="fa fa-key fa-fw"></i>
												</span>
											    <input class="form-control form-control-book" type="password" placeholder="*******" />
										    </div><!-- /.input-group -->
										</div><!-- /.col -->

										<div class="col-sm-6 hidden-sm forgot-password-field">
											<div class="forgot-password"><a href="#">Forgot Password</a></div>
										</div><!-- /.col -->											
								    </div><!-- /.row -->

					               
									<div class="checkout-checkbox-option">										
										<input type="checkbox" class="book-radio" name="optionsRadios"  id="optionsRadios" value="option2" checked>                                        
										<label class="book-radio-label" for="optionsRadios">
										     <span class="radio-background"><i class="icon fa fa-circle"></i></span>Remember me
										</label>
									</div><!-- /.checkout-checkbox-option -->
										
							    </div><!-- /.col -->
							    <div class="col-md-12">
									<a href="index.php?page=cart" class="pull-right btn btn-primary btn-checkout">
										Continued Checkout  
										<i class="fa fa-chevron-right"></i>
									</a>
								</div>
							</div><!-- /.row -->
						</div><!-- /.panel-body -->
					</div><!-- /.panel-collapse -->
				</div><!-- /.panel -->
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						    <a  data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">					
							    <span class="step">2</span>Billing Information	
							</a>						
						</h4>
					</div><!-- /.panel-heading -->

					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="form-container">
								<form class="cnt-form" role="form">
									<div class="row field-row form-group">
										<div class="col-xs-12 col-sm-6">
											<label>
											Full Name
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-6">
											<label>
											Full Name
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div class="col-xs-12">
											<label>Company Name</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div class="col-xs-12 col-sm-6">
											<label>
											Address
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" data-placeholder="street address" type="text">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-6">
											<label> </label>
											<input class="form-control form-control-book" data-placeholder="town" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div class="col-xs-12 col-sm-4">
											<label>
											Postcode / Zip
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-4">
											<label>
											Email Address
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="email">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-4">
											<label>
											Phone Number
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div id="create-account" class="col-xs-12">
											<label>
												<input type="checkbox">
												Create Account?
											</label>
												- you will receive email with temporary generated password after login you need to change it. 

										</div><!-- /.col -->
									</div><!-- /.row -->
								</form><!-- /.cnt-form -->
							</div><!-- /.form-container -->
						</div><!-- /.panel-body -->
					</div><!-- /.panel-collapse -->
				</div><!-- /.panel -->

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
								<span class="step">3</span>Shipping Information
							</a>
						</h4>
					</div><!-- /.panel-heading -->
					<div id="collapseThree" class="panel-collapse collapse">
				  		<div class="panel-body">
				    		<div class="form-container">
								<form class="cnt-form" role="form">
									<div class="row field-row form-group">
										<div class="col-xs-12 col-sm-6">
											<label>
											Full Name
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-6">
											<label>
											Full Name
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div class="col-xs-12">
											<label>Company Name</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div class="col-xs-12 col-sm-6">
											<label>
											Address
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" data-placeholder="street address" type="text">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-6">
											<label> </label>
											<input class="form-control form-control-book" data-placeholder="town" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div class="col-xs-12 col-sm-4">
											<label>
											Postcode / Zip
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-4">
											<label>
											Email Address
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="email">
										</div><!-- /.col -->
										<div class="col-xs-12 col-sm-4">
											<label>
											Phone Number
											<span class="astk">*</span>
											</label>
											<input class="form-control form-control-book" type="text">
										</div><!-- /.col -->
									</div><!-- /.row -->

									<div class="row field-row form-group">
										<div id="shipping-account" class="col-xs-12">
											<label>
										        <input type="checkbox"> Create Account?
										    </label>
											- you will receive email with temporary generated password after login you need to change it. 
										</div><!-- /.col -->
									</div><!-- /.row -->
								</form><!-- /.cnt-form -->
							</div><!-- /.form-container -->
				  		</div><!-- /.panel-body -->
					</div><!-- /.panel-collapse -->
				</div><!-- /.panel -->

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a  data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseShippingDetails">
							    <span class="step">4</span>Shipping Method
							</a>
						</h4>
					</div><!-- /.panel-heading -->

					<div id="collapseShippingDetails" class="panel-collapse collapse">
				  		<div class="panel-body">
				    		<div class="form-container">
								<form class="form cnt-form">
									<div class="radio">
										<label>
											<input type="radio" checked="" name="shipping-method">
											Normal Delivery
											<br>
											<small>2-5 Days.</small>
										</label>
									</div><!-- /.radio -->
									<div class="radio">
										<label>
											<input type="radio" name="shipping-method">
											Express Delivery
											<br>
											<small>2-5 Days.</small>
										</label>
									</div><!-- /.radio -->
								</form><!-- /.cnt-form -->
							</div><!-- /.form-container-->
						</div><!-- /.panel-body -->
					</div><!-- /.panel-collapse -->
				</div><!-- /.panel -->
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a  data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapsePaymentInformation">
								<span class="step">5</span>Payment Information
							</a>
						</h4>
					</div><!-- /.panel-heading -->
					<div id="collapsePaymentInformation" class="panel-collapse collapse">
				  		<div class="panel-body">
				    		<div class="form-container">
								<form class="cnt-form" role="form">
									<div class="radio">
										<label>
										<input type="radio" checked="" name="payment">
										Direct Bank Transfer
										<br>
										<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempus elit, vestibulum vestibulum erat ornare id.</small>
										</label>
									</div><!-- /.radio -->
									<div class="radio">
										<label>
										<input type="radio" name="payment">
										Cheque Payment
										</label>
									</div><!-- /.radio -->
									<div class="radio">
										<label>
										<input type="radio" name="payment">
										Cash on Delivery
										</label>
									</div><!-- /.radio -->
									<div class="radio">
										<label>
										<input type="radio" name="payment">
										Pay via Paypal
										</label>
									</div><!-- /.radio -->
									<div class="place-order-button">
										<button class="btn btn-primary btn-checkout" type="submit">place order</button>
									</div>
								</form><!-- /.cnt-form -->
							</div><!-- /.form-container -->
				  		</div><!-- /.panel-body -->
					</div><!-- /.panel-collapse -->
				</div><!-- /.panel -->
			</div><!-- /.panel-group -->
		</div><!-- /.page-body -->
	</div><!-- /.container -->
</div><!-- /.checkout page -->














