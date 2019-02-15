<?php
function displayProduct($bookName, $bookAuthor,$is_new,$is_sale,$bookCoverURL, $oldPrice = false,$price = 9.99, $score = 4){
?>

	<div class="book">		
            <?php if($is_new):?><div class="hot-ribbon"><div class="hot-ribbon-content">hot</div></div><?php endif;?>
            <?php if($is_sale):?><div class="sale-ribbon"><div class="sale-ribbon-content">sale off</div></div><?php endif;?>
			<div class="book-cover">
				<div class="book-inner">
					<img src="assets/images/blank.gif" data-echo="<?php echo $bookCoverURL;?>" width="193" height="261" alt="">
					<div class="fade"></div>
					<div class="book-price">
						
						<span class="price">
							<?php if($oldPrice):?>
						<span class="price-before-discount"><?php echo $oldPrice;?></span>
						<?php endif;?>
						$ <?php echo $price;?>
						</span>
					</div><!-- /.book-price -->

					<div class="cart animate-effect">
						<div class="action">
							<a class="add-to-cart" href="index.php?page=detail" title="Add to Cart">
								<i class="icon icon-plus fa fa-plus-circle"></i>
							</a>
							<a class="add-to-cart" href="#" title="Favourite">
							    <i class="icon icon-heart fa fa-heart"></i>
							</a>
						</div><!-- /.action -->
					</div><!-- /.cart -->
			    </div><!-- /.book-inner -->
			</div><!-- /.book-cover -->
			
		
		<div class="book-details">
			<h3 class="book-title"><a href="index.php?page=detail"><?php echo $bookName;?></a></h3>
			<p class="book-author"><?php echo $bookAuthor;?></p>
			<div class="star-rating">
				<?php for ($i=1; $i <=5 ; $i++): ?>
					<i class="fa fa-star <?php if($i <= $score) echo 'color'; ?>"></i>
				<?php endfor;?>
			</div><!-- /.star-rating -->
			
		</div><!-- /.book-details -->
	</div><!-- /.book -->
      
<?php	
}

?>