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

<div class="cart page">
	<div class="container">
		<div class="page-header">
			<h2 class="page-title">Shopping Cart</h2>
			<p class="page-subtitle">DO eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
		</div><!-- /.page-header -->

		<div class="page-body">
            <div class="order-detail table-responsive">
			    <table class="table table-cart cart-detail ">
                    <thead>
                        <tr>
                            <th class="dark">Book Name</th>
                            <th>Unit Price</th>
                            <th class="dark text-center">Qty</th>
                            <th>Subtotal</th>
                            <th class="dark"></th>
                        </tr>
                    </thead><!-- /thead -->                
                    <tbody class="cart-body-content">
                        <tr class="cart-book">
                            <td>
                                <div class="media">
                                        <a href="index.php?page=detail" class="cart-thumbnail-image media-left">
                                        <div class="book-cover small-book-cover">
                                            <img src="assets/images/books/small-image1.jpg" alt="" class="media-object">
                                            <div class="fade"></div>
                                        </div>
                                    </a>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="index.php?page=detail">Adipisicing</a></h3>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <span class="price">$9.99</span>
                            </td>
                            <td class="quantity text-center">            
                                <div class="quant-input ">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"><span class="ir"></span></div>
                                      <div class="arrow minus gradient"><span class="ir"></span></div>
                                    </div>
                                    <input class="txt-quantity" type="text" value="2"/>
                                </div>                              
                            </td>   
                            <td>
                                <span class="price subtotal">$9.99</span>
                            </td>
                            <td>
                                <button class="btn btn-primary-light btn-flat" type="button">X</button>
                            </td>
                        </tr>
                        <tr class="cart-book">
                            <td>
                                <div class="media">
                                        <a href="index.php?page=detail" class="cart-thumbnail-image media-left">
                                        <div class="book-cover small-book-cover">
                                            <img src="assets/images/books/small-image2.jpg" alt="" class="media-object">
                                            <div class="fade"></div>
                                        </div>
                                    </a>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="index.php?page=detail">Adipisicing</a></h3>
                                        </div>
                                    </div>
                            </td>
                            <td>
                                <span class="price">$9.99</span>
                            </td>
                            <td class="quantity text-center">            
                              <div class="quant-input ">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"><span class="ir"></span></div>
                                      <div class="arrow minus gradient"><span class="ir"></span></div>
                                    </div>
                                    <input class="txt-quantity" type="text" value="2"/>
                              </div>              
                            </td>
                            <td>
                                <span class="price subtotal">$9.99</span>
                            </td>
                            <td>
                                <button class="btn btn-primary-light btn-flat" type="button">X</button>
                            </td>
                        </tr>
                    </tbody><!-- /.cart-body-content -->
                </table><!-- /.table -->
            </div><!-- /.order-detail -->
            <div class="row">
            
                <div class="col-xs-12 col-sm-4 center-sm">
                    <input type="text" class="form-control discount-name" placeholder="Enter your coupon..">
                </div><!-- /.col -->
                
                <div class="col-xs-12 col-sm-8 center-sm">
                    <div class="table-responsive">
                        <table class="table table-cart">
                            <tfoot>
                                <tr>
                                    <td ><i class="icon-chevron fa fa-chevron-right"></i>&nbsp;Subtotal:</td>
                                    <td >$ 20.00</td>
                                </tr>
                                <tr>
                                     <td ><i class="icon-chevron fa fa-chevron-right"></i>&nbsp;Grandtotal:</td>
                                     <td >$ 20.00</td>
                                </tr>
                            </tfoot><!-- /tfoot -->
                        </table><!-- /table -->
                    </div><!-- /table-responsive -->
                 </div><!-- /.col -->
                 <div class="col-md-12">
                    <a href="index.php?page=checkout" class="pull-right btn btn-primary btn-checkout">Continued Checkout &nbsp;<i class="fa fa-chevron-right"></i></a>
                </div>
                                
		   </div><!-- /.row -->
	   </div><!-- /.page-body -->
    </div><!-- /.container -->
</div><!-- /.cart page -->