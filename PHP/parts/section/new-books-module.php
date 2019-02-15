<!-- ========================================= NEW BOOKS MODULE ========================================= -->
<div class="wow fadeInUp">
	<div class="module block-new-books module-block">
		<div class="module-heading">
			<h2 class="module-title">New Books</h2>
			<div class="customNavigation">
				<a href="#" data-target="#new-carousel" class="btn btn-navigation left-nav-arrow owl-prev"><i class='icon fa fa-caret-left'></i></a>
				<a href="#"  data-target="#new-carousel" class="btn btn-navigation right-nav-arrow owl-next"><i class='icon fa fa-caret-right'></i></a>	
			</div><!-- /.customNavigation -->
			<p class="module-subtitle">Do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
		</div><!-- /.module-heading -->

		<div class="module-body">
			<div class="books">

				<div id="new-carousel" class="owl-carousel home-owl-carousel">
					<?php 
						$books = array(
							array(
								'book_name' => 'Adipisicing',
								'book_author' => 'dolor sit',
								'is_new' => false,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/new-books/1.jpg'
							),
							array(
								'book_name' => 'Elit, Sed do',
								'book_author' => 'consectetur',
								'is_new' => true,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/new-books/2.jpg'

							),
							array(
								'book_name' => 'Tempor',
								'book_author' => 'Adipisicing Soibhan',
								'is_new' => false,
								'is_sale' =>true,
								'is_oldPrice' =>'$ 10.99',
								'bookCoverURL' => 'assets/images/new-books/4.jpg'
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => false,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/new-books/3.jpg'
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => false,
								'is_sale' =>true,
								'is_oldPrice' =>'$ 10.99',
								'bookCoverURL' => 'assets/images/new-books/5.jpg'
							),
							array(
								'book_name' => 'Labor',
								'book_author' => 'Sed Do',
								'is_new' => true,
								'is_sale' =>false,
								'is_oldPrice' =>false,
								'bookCoverURL' => 'assets/images/new-books/6.jpg'
							)
						);
						foreach($books as $book):
					?>
					<div class="item item-carousel">
						<div class="books">
							<?php displayProduct($book['book_name'], $book['book_author'],$book['is_new'],$book['is_sale'],$book['bookCoverURL'], $book['is_oldPrice']); ?>
						</div><!-- /.books -->
					</div><!-- /.item -->
					<?php endforeach;?>
			    </div><!-- /#new-carousel -->		    
			</div><!-- /.books -->
		</div><!-- /.module-body -->
	</div><!-- /.module -->
</div><!-- /.row -->
<!-- ========================================= NEW BOOKS MODULE : END ========================================= -->