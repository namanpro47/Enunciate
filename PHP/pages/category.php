<div class="breadcrumb-container">
	<div class="container">
        <ul class="breadcrumb pull-left">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=category">Books</a></li>
            <li class="active">Teen Books</li>
        </ul><!-- /.breadcrumb -->

        <?php require KB_ROOT.'/parts/section/search-box.php';?>

    </div><!-- /.container -->
</div><!-- /.breadcrumb-container -->

<div class="category page">
	<div class="container">
		<div class="page-header category-page-header">
			<h2 class="page-title">New Books</h2>
			<p class="page-subtitle">Do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
		</div><!-- /.page-header -->

		<div class="page-body">
			<div class="row">
				<!-- ========================================= CONTENT ========================================= -->
				<div class="col-sm-8 col-sm-push-4">
					<div class="category-toolbar">
						<div class="row">
							<div class="col-md-3 col-sm-4">
								<ul id="myTab" class="nav nav-tabs grid-list-view-buttons" role="tablist">
								    <li role="presentation" class="active"><a href="#grid" class="btn navbar-btn" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th active"></span></a></li>
									<li role="presentation"><a href="#list" class="btn navbar-btn" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span></a></li>
								</ul><!-- /.nav -->
							</div><!-- /.col -->

							<div class="col-md-2 col-sm-4">
								<select class="selectpicker">
									<option selected="selected" value="15">9</option>
									<option value="10">10</option>
									<option value="20">11</option>
									<option value="30">12</option>
								</select>
							</div><!-- /.col -->

							<div class="col-md-2 col-sm-4">
								<select class="selectpicker">
									<option selected="selected" value="position:asc">Date</option>
									<option value="price:asc">Price: Lowest first</option>
									<option value="price:desc">Price: Highest first</option>
									<option value="name:asc">Product Name: A to Z</option>
									<option value="name:desc">Product Name: Z to A</option>
									<option value="quantity:desc">In stock</option>
									<option value="reference:asc">Reference: Lowest first</option>
									<option value="reference:desc">Reference: Highest first</option>
								</select>
							</div><!-- /.col -->

							
							<div class="col-sm-offset-4 col-md-offset-2 col-md-3 col-md-3 col-sm-6 clearfix">
								<div id="slider-range"></div>
								<p>
									<input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
								</p>								
							</div><!-- /.col -->

						</div><!-- /.row -->
					</div><!-- /.category-toolbar -->

					<div class="tab-content">
						<div class="tab-pane active  wow fadeInUp" id="grid" role="tabpanel">
							<div class="category-books books grid-view">
								<div class="row">
									<?php 
										$books = array(
											array(
												'book_name' => 'Adipisicing',
												'book_author' => 'dolor sit',
												'is_new' => false,
									            'is_sale' =>false,
									            'is_oldPrice' =>false,
									            'bookCoverURL' => 'assets/images/books/1.jpg',
											),
											array(
												'book_name' => 'Elit, Sed do',
												'book_author' => 'consectetur',
												'is_new' => true,
									            'is_sale' =>false,
									            'is_oldPrice' =>false,
									            'bookCoverURL' => 'assets/images/books/2.jpg',
											),
											array(
												'book_name' => 'Tempor',
												'book_author' => 'Adipisicing Soibhan',
												'is_new' => false,
									            'is_sale' =>true,
									            'is_oldPrice' =>'$ 9.99',
									            'bookCoverURL' => 'assets/images/books/3.jpg',
											),
											array(
												'book_name' => 'Labor',
												'book_author' => 'Sed Do',
												'is_new' => false,
									            'is_sale' =>false,
									            'is_oldPrice' =>false,
									            'bookCoverURL' => 'assets/images/books/4.jpg',
											),
											array(
												'book_name' => 'Adipisicing',
												'book_author' => 'dolor sit',
												'is_new' => false,
									            'is_sale' =>true,
									            'is_oldPrice' =>'$ 9.99',
									            'bookCoverURL' => 'assets/images/books/5.jpg',
											),
											array(
												'book_name' => 'Elit, Sed do',
												'book_author' => 'consectetur',
												'is_new' => true,
									            'is_sale' =>false,
									            'is_oldPrice' =>false,
									            'bookCoverURL' => 'assets/images/books/6.jpg',
											),
											array(
												'book_name' => 'Tempor',
												'book_author' => 'Adipisicing Soibhan',
												'is_new' => false,
									            'is_sale' =>false,
									            'is_oldPrice' =>false,
									            'bookCoverURL' => 'assets/images/books/7.jpg',
											),
											array(
												'book_name' => 'Labor',
												'book_author' => 'Sed Do',
												'is_new' => true,
									            'is_sale' =>false,
									            'is_oldPrice' =>false,
									            'bookCoverURL' => 'assets/images/books/8.jpg',
											),
											array(
												'book_name' => 'Labor',
												'book_author' => 'Sed Do',
												'is_new' => false,
									            'is_sale' =>true,
									            'is_oldPrice' =>'$ 9.99',
									            'bookCoverURL' => 'assets/images/books/9.jpg',
											)
										);
										foreach($books as $book):
									?>
									<div class="col-md-4 col-sm-6">
										<?php displayProduct($book['book_name'], $book['book_author'],$book['is_new'],$book['is_sale'],$book['bookCoverURL'],$book['is_oldPrice']); ?>
									</div>
									<?php endforeach;?>
								</div>
							</div><!-- /.category-books -->
						</div><!-- /.tab-pane -->

						<div class="tab-pane wow fadeInUp" id="list" role="tabpanel">
							<div class="featured-book">
								<div class="books clearfix">
									<div class="row">
										<div class="col-md-4 col-sm-5">
											<div class="book">
												<div class="hot-ribbon"><div class="hot-ribbon-content">hot</div></div>
												<div class="book-cover">
												    <img class="img-responsive" alt="" width="193" height="261" src="assets/images/books/4.jpg">
												    <div class="fade"></div>
												    <div class="book-price">
														<span class="price">$ 9.99</span>
													</div><!-- /.book-price -->
												</div><!-- /.book-cover -->
											</div><!-- /.book -->
										</div><!-- /.col -->

										<div class="col-md-8 col-sm-7">
											<div class="book-details book-details-list-view">
												<h3 class="book-title">
												<a href="index.php?page=detail">Adipisicing</a>
												</h3>
												<p class="book-author">dolor sit</p>
												<div class="star-rating">
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star"></i>
												</div><!-- /.star-rating -->								
											</div><!-- /.book-details -->

											<div class="featured-book-content">
												<p class="hidden-sm hidden-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. </p>
												
											</div><!-- /.featured-book-content -->
											<div class="actions">
												<a class="add-to-cart" title="Add to Cart" href="index.php?page=checkout"><i class="icon-plus fa fa-plus-circle"></i></a>
												<a class="add-to-cart" title="Favourite" href="#"><i class="icon-heart fa fa-heart"></i></a>
											</div><!-- /.actions -->
										</div><!-- /.col -->
									</div><!-- /.row -->
								</div><!-- /.books -->
							</div><!-- /.row -->

							<div class="featured-book">
								<div class="books clearfix">
									<div class="row">
										<div class="col-md-4 col-sm-5">
											<div class="book">
												<div class="book-cover">
												    <img class="img-responsive" alt="" width="193" height="261" src="assets/images/books/10.jpg">
												    <div class="fade"></div>
												    <div class="book-price">
												        <span class="price">$ 9.99</span>
													</div><!-- /.book-price -->
												</div><!-- /.book-cover -->
											</div><!-- /.book -->
										</div><!-- /.col -->

										<div class="col-md-8 col-sm-7">
											<div class="book-details book-details-list-view">
												<h3 class="book-title">
												<a href="index.php?page=detail">Elit sed do</a>
												</h3>
												<p class="book-author">consectetur</p>
												<div class="star-rating">
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star"></i>
												</div><!-- /.star-rating -->
											</div><!-- /.book-details -->
											<div class="featured-book-content">
												<p class="hidden-sm hidden-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. </p>
												
											</div><!-- /.featured-book-content -->
											<div class="actions">
												<a class="add-to-cart" title="Add to Cart" href="index.php?page=checkout"><i class="icon-plus fa fa-plus-circle"></i></a>
												<a class="add-to-cart" title="Favourite" href="#"><i class="icon-heart fa fa-heart"></i></a>
											</div><!-- /.actions -->
										</div><!-- /.col -->
									</div><!-- /.row -->
								</div><!-- /.books -->
							</div><!-- /.row -->

							<div class="featured-book">
								<div class="books clearfix">
									<div class="row">
										<div class="col-md-4 col-sm-5">
											<div class="book">
												<div class="book-cover">
												    <img class="img-responsive" width="193" height="261" alt="" src="assets/images/books/3.jpg">
												    <div class="fade"></div>
												    <div class="book-price">
														<span class="price">$ 9.99</span>
													</div><!-- /.book-price -->
												</div><!-- /.book-cover -->
											</div><!-- /.book -->
										</div><!-- /.col -->

										<div class="col-md-8 col-sm-7">
											<div class="book-details book-details-list-view">
												<h3 class="book-title">
												<a href="index.php?page=detail">Paradise Lost</a>
												</h3>
												<p class="book-author">adipisicing soibhan</p>
												<div class="star-rating">
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star"></i>
												</div><!-- /.star-rating -->
											</div><!-- /.book-details -->
											<div class="featured-book-content">
												<p class="hidden-sm hidden-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. </p>
												
											</div><!-- /.featured-book-content -->
											<div class="actions">
												<a class="add-to-cart" title="Add to Cart" href="index.php?page=checkout"><i class="icon-plus fa fa-plus-circle"></i></a>
												<a class="add-to-cart" title="Favourite" href="#"><i class="icon-heart fa fa-heart"></i></a>
											</div><!-- /.actions -->
										</div><!-- /.col -->
									</div><!-- /.row -->

								</div><!-- /.books -->
							</div><!-- /.row -->

							<div class="featured-book">
								<div class="books clearfix">
									<div class="row">
										<div class="col-md-4 col-sm-5">
											<div class="book">
												<div class="book-cover">
												    <img class="img-responsive" width="193" height="261" alt="" src="assets/images/books/12.jpg">
												    <div class="fade"></div>
												    <div class="book-price">
														<span class="price">$ 9.99</span>
													</div><!-- /.book-price -->
												</div><!-- /.book-cover -->
											</div><!-- /.book -->
										</div><!-- /.col -->

										<div class="col-md-8 col-sm-7">
											<div class="book-details book-details-list-view">
												<h3 class="book-title">
												<a href="index.php?page=detail">Guy Kawasaki</a>
												</h3>
												<p class="book-author">sed do</p>
												<div class="star-rating">
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star color"></i>
													<i class="fa fa-star"></i>
												</div><!-- /.star-rating -->
											</div><!-- /.book-details -->
											<div class="featured-book-content">
												<p class="hidden-sm hidden-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. </p>
												
											</div><!-- /.featured-book-content -->
											<div class="actions">
												<a class="add-to-cart" title="Add to Cart" href="index.php?page=checkout"><i class="icon-plus fa fa-plus-circle"></i></a>
												<a class="add-to-cart" title="Favourite" href="#"><i class="icon-heart fa fa-heart"></i></a>
											</div><!-- /.actions -->
										</div><!-- /.col -->
									</div><!-- /.row -->
								</div><!-- /.books -->
							</div><!-- /.row -->
						</div><!-- /.tab-pane -->

					</div><!-- /.tab-content -->

					<ul class="pagination book-pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul><!-- /.pagination -->
				</div><!-- /.col -->

				<!-- ========================================= CONTENT :END ========================================= -->
 
                <!-- ========================================= SIDEBAR ========================================= -->
				<div class="col-sm-4 col-sm-pull-8">
					<aside class="sidebar">
						<?php require KB_ROOT.'/parts/widgets/sidebar/book-category.php';?>
					</aside><!-- /.sidebar -->
				</div><!-- /.col -->
				<!-- ========================================= SIDEBAR :END ========================================= -->
			</div><!-- /.row -->
		</div><!-- /.page-body -->
	</div><!-- /.container -->
	
	<?php require KB_ROOT.'/parts/section/relate-books-module.php';?>
	
</div><!-- /.category page -->

