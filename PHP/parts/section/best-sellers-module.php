<!-- ========================================= BEST SELLER MODULE ========================================= -->
<div class="wow fadeInUp">
	<div class="module block-best-sellers module-block">
		<div class="module-heading">
			<h2 class="module-title">Best Sellers</h2>
			<div class="customNavigation">
				<a href="#" data-target="#seller-carousel" class="btn btn-navigation left-nav-arrow-seller owl-prev"><i class='icon fa fa-caret-left'></i></a>
				<a href="#" data-target="#seller-carousel" class="btn btn-navigation right-nav-arrow-seller owl-next"><i class='icon fa fa-caret-right'></i></a>	
			</div><!-- /.customNavigation -->
			<p class="module-subtitle">Do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
		</div><!-- /.module-heading -->

		<div class="module-body">
			<div class="books">

				<div id="seller-carousel" class="owl-carousel home-owl-carousel">
					<?php 
						$books = array(
							array(
								'book_name' => 'Adipisicing',
								'book_author' => 'dolor sit',
								'is_new' => false,
								'is_sale' =>true,
								'is_oldPrice' =>'$ 10.99',
								'bookCoverURL' => 'assets/images/best-sellers/1.jpg',
							),
							array(
								'book_name' => 'Elit, Sed do',
								'book_author' => 'consectetur',
								'is_new' => false,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/best-sellers/2.jpg',
							),
							array(
								'book_name' => 'Tempor',
								'book_author' => 'Adipisicing Soibhan',
								'is_new' => false,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/best-sellers/3.jpg',
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => true,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/best-sellers/4.jpg',
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => false,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/best-sellers/5.jpg',
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => true,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/best-sellers/6.jpg',
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => false,
								'is_sale' =>true,
								'is_oldPrice' =>'$ 10.99',
								'bookCoverURL' => 'assets/images/best-sellers/7.jpg',
							)
						);
						foreach($books as $book):
					?>
						<div class="item item-carousel">
							<?php displayProduct($book['book_name'], $book['book_author'],$book['is_new'],$book['is_sale'],$book['bookCoverURL'],$book['is_oldPrice']); ?>
						</div><!-- /.item -->
					<?php endforeach;?>
			    </div><!-- /#seller-carousel -->		
		     </div><!-- /.books -->	
	    </div><!-- /.module-body -->	
	</div><!-- /.module -->	
</div><!-- /.row -->	
<!-- ========================================= BEST SELLER MODULE : END ========================================= -->