<div class="breadcrumb-container">
	<div class="container">
        <ul class="breadcrumb pull-left">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=category">Books</a></li>
            <li class="active">not found</li>
        </ul><!-- /.breadcrumb -->

        <?php require KB_ROOT.'/parts/section/search-box.php';?>

    </div><!-- /.container -->
</div><!-- /.breadcrumb-container -->

<div class="not-found page">
	<div class="container">
		<div class="center-block  not-found-page-content">
			<div class="page-header">
				<h2 class="page-title">Oops! Not Found</h2>
				<p class="page-subtitle">Do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
			</div><!-- /.page-header -->

			<div class="page-body">
				<div class="row notfound-action sub-header" id="notFound-search">
					<div class="col-sm-8 no-padding-right">
						<div class="input-group">
							<span class="input-group-btn"><button class="btn btn-search btn-search-notfound" type="button"><i class="fa fa-search icon"></i></button></span>
							<input type="text" class="form-control search-book" placeholder="Search books...">
						</div><!-- /.input-group -->
					</div><!-- /.col -->

					<div class="select-wrapper col-sm-4 no-padding-left" >
						<select id="id_select_category" class="selectpicker">
					        <option selected>All Category</option>
					        <option>Books</option>
				            <option>Textbooks</option>
							<option>Audiobooks</option>
							<option>Magazines</option>
							<option>Kids</option>
					    </select>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-body -->
		</div><!-- /.col -->            
    </div><!-- /.container -->
</div><!-- /.not-found page -->