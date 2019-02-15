<!-- ========================================= BILLING FORM ========================================= -->
<form class="form-horizontal">
	<div class="form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<h3 class="panel-title panel-subtitle">new customer</h3>
			<div class="form-group">
				<label class="control-label col-sm-4">Title</label>
				<div class="col-sm-8">
		            <label class="control-label radio-inline"><input type="radio" name="title" /> Mr.</label>
		            <label class="control-label radio-inline"><input type="radio" name="title" /> Mrs.</label>
		        </div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4" for="customer_firstname">
				First name
				    <sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="customer_firstname" class="form-control form-control-book" type="text" value="" name="customer_firstname" onkeyup="$('#firstname').val(this.value);">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4" for="customer_lastname">
				Last name
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="customer_lastname" class="form-control form-control-book" type="text" value="" name="customer_lastname" onkeyup="$('#lastname').val(this.value);">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="control-label col-sm-4" for="email">
				Email
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				   <input id="email" class="form-control form-control-book" type="text" value="akther@transvelo.com" name="email">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="control-label col-sm-4" for="passwd">
				Password
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				   <input id="passwd" class="form-control form-control-book" type="password" name="passwd">
				   <span class="help-block">(Five characters minimum)</span>
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group select">
				<label class="control-label col-sm-4">Date of Birth</label>
				<div class="col-sm-8">
					<div class="date-select-container">
		    			<select id="days" name="days" class="select-days col-sm-3 col-xs-12 selectpicker">
							<option value="1">1&nbsp;&nbsp;</option>
							<option value="2">2&nbsp;&nbsp;</option>
							<option value="3">3&nbsp;&nbsp;</option>
							<option value="4">4&nbsp;&nbsp;</option>
							<option value="5">5&nbsp;&nbsp;</option>
							<option value="6">6&nbsp;&nbsp;</option>
							<option value="7">7&nbsp;&nbsp;</option>
							<option value="8">8&nbsp;&nbsp;</option>
							<option value="9">9&nbsp;&nbsp;</option>
							<option value="10">10&nbsp;&nbsp;</option>
							<option value="11">11&nbsp;&nbsp;</option>
							<option value="12">12&nbsp;&nbsp;</option>
							<option value="13">13&nbsp;&nbsp;</option>
							<option value="14">14&nbsp;&nbsp;</option>
							<option value="15">15&nbsp;&nbsp;</option>
							<option value="16">16&nbsp;&nbsp;</option>
							<option value="17">17&nbsp;&nbsp;</option>
							<option value="18">18&nbsp;&nbsp;</option>
							<option value="19">19&nbsp;&nbsp;</option>
							<option value="20">20&nbsp;&nbsp;</option>
							<option value="21">21&nbsp;&nbsp;</option>
							<option value="22">22&nbsp;&nbsp;</option>
							<option value="23">23&nbsp;&nbsp;</option>
							<option value="24">24&nbsp;&nbsp;</option>
							<option value="25">25&nbsp;&nbsp;</option>
							<option value="26">26&nbsp;&nbsp;</option>
							<option value="27">27&nbsp;&nbsp;</option>
							<option value="28">28&nbsp;&nbsp;</option>
							<option value="29">29&nbsp;&nbsp;</option>
							<option value="30">30&nbsp;&nbsp;</option>
							<option value="31">31&nbsp;&nbsp;</option>
						</select>

						<select id="months" name="months" class="select-months col-sm-4 col-xs-12 selectpicker">
							<option value="1">January&nbsp;</option>
							<option value="2">February&nbsp;</option>
							<option value="3">March&nbsp;</option>
							<option value="4">April&nbsp;</option>
							<option value="5">May&nbsp;</option>
							<option value="6">June&nbsp;</option>
							<option value="7">July&nbsp;</option>
							<option value="8">August&nbsp;</option>
							<option value="9">September&nbsp;</option>
							<option value="10">October&nbsp;</option>
							<option value="11">November&nbsp;</option>
							<option value="12">December&nbsp;</option>
						</select>
						
						<select id="years" name="years" class="select-years col-sm-4 col-xs-12 selectpicker">
							<option value="2014">2014&nbsp;&nbsp;</option>
							<option value="2013">2013&nbsp;&nbsp;</option>
							<option value="2012">2012&nbsp;&nbsp;</option>
							<option value="2011">2011&nbsp;&nbsp;</option>
							<option value="2010">2010&nbsp;&nbsp;</option>
							<option value="2009">2009&nbsp;&nbsp;</option>
							<option value="2008">2008&nbsp;&nbsp;</option>
							<option value="2007">2007&nbsp;&nbsp;</option>
							<option value="2006">2006&nbsp;&nbsp;</option>
							<option value="2005">2005&nbsp;&nbsp;</option>
							<option value="2004">2004&nbsp;&nbsp;</option>
							<option value="2003">2003&nbsp;&nbsp;</option>
							<option value="2002">2002&nbsp;&nbsp;</option>
							<option value="2001">2001&nbsp;&nbsp;</option>
							<option value="2000">2000&nbsp;&nbsp;</option>
							<option value="1999">1999&nbsp;&nbsp;</option>
							<option value="1998">1998&nbsp;&nbsp;</option>
							<option value="1997">1997&nbsp;&nbsp;</option>
							<option value="1996">1996&nbsp;&nbsp;</option>
							<option value="1995">1995&nbsp;&nbsp;</option>
							<option value="1994">1994&nbsp;&nbsp;</option>
							<option value="1993">1993&nbsp;&nbsp;</option>
							<option value="1992">1992&nbsp;&nbsp;</option>
							<option value="1991">1991&nbsp;&nbsp;</option>
							<option value="1990">1990&nbsp;&nbsp;</option>
							<option value="1989">1989&nbsp;&nbsp;</option>
							<option value="1988">1988&nbsp;&nbsp;</option>
							<option value="1987">1987&nbsp;&nbsp;</option>
							<option value="1986">1986&nbsp;&nbsp;</option>
							<option value="1985">1985&nbsp;&nbsp;</option>
							<option value="1984">1984&nbsp;&nbsp;</option>
							<option value="1983">1983&nbsp;&nbsp;</option>
							<option value="1982">1982&nbsp;&nbsp;</option>
							<option value="1981">1981&nbsp;&nbsp;</option>
							<option value="1980">1980&nbsp;&nbsp;</option>
							<option value="1979">1979&nbsp;&nbsp;</option>
							<option value="1978">1978&nbsp;&nbsp;</option>
							<option value="1977">1977&nbsp;&nbsp;</option>
							<option value="1976">1976&nbsp;&nbsp;</option>
							<option value="1975">1975&nbsp;&nbsp;</option>
							<option value="1974">1974&nbsp;&nbsp;</option>
							<option value="1973">1973&nbsp;&nbsp;</option>
							<option value="1972">1972&nbsp;&nbsp;</option>
							<option value="1971">1971&nbsp;&nbsp;</option>
							<option value="1970">1970&nbsp;&nbsp;</option>
							<option value="1969">1969&nbsp;&nbsp;</option>
							<option value="1968">1968&nbsp;&nbsp;</option>
							<option value="1967">1967&nbsp;&nbsp;</option>
							<option value="1966">1966&nbsp;&nbsp;</option>
							<option value="1965">1965&nbsp;&nbsp;</option>
							<option value="1964">1964&nbsp;&nbsp;</option>
							<option value="1963">1963&nbsp;&nbsp;</option>
							<option value="1962">1962&nbsp;&nbsp;</option>
							<option value="1961">1961&nbsp;&nbsp;</option>
							<option value="1960">1960&nbsp;&nbsp;</option>
							<option value="1959">1959&nbsp;&nbsp;</option>
							<option value="1958">1958&nbsp;&nbsp;</option>
							<option value="1957">1957&nbsp;&nbsp;</option>
							<option value="1956">1956&nbsp;&nbsp;</option>
							<option value="1955">1955&nbsp;&nbsp;</option>
							<option value="1954">1954&nbsp;&nbsp;</option>
							<option value="1953">1953&nbsp;&nbsp;</option>
							<option value="1952">1952&nbsp;&nbsp;</option>
							<option value="1951">1951&nbsp;&nbsp;</option>
							<option value="1950">1950&nbsp;&nbsp;</option>
							<option value="1949">1949&nbsp;&nbsp;</option>
							<option value="1948">1948&nbsp;&nbsp;</option>
							<option value="1947">1947&nbsp;&nbsp;</option>
							<option value="1946">1946&nbsp;&nbsp;</option>
							<option value="1945">1945&nbsp;&nbsp;</option>
							<option value="1944">1944&nbsp;&nbsp;</option>
							<option value="1943">1943&nbsp;&nbsp;</option>
							<option value="1942">1942&nbsp;&nbsp;</option>
							<option value="1941">1941&nbsp;&nbsp;</option>
							<option value="1940">1940&nbsp;&nbsp;</option>
							<option value="1939">1939&nbsp;&nbsp;</option>
							<option value="1938">1938&nbsp;&nbsp;</option>
							<option value="1937">1937&nbsp;&nbsp;</option>
							<option value="1936">1936&nbsp;&nbsp;</option>
							<option value="1935">1935&nbsp;&nbsp;</option>
							<option value="1934">1934&nbsp;&nbsp;</option>
							<option value="1933">1933&nbsp;&nbsp;</option>
							<option value="1932">1932&nbsp;&nbsp;</option>
							<option value="1931">1931&nbsp;&nbsp;</option>
							<option value="1930">1930&nbsp;&nbsp;</option>
							<option value="1929">1929&nbsp;&nbsp;</option>
							<option value="1928">1928&nbsp;&nbsp;</option>
							<option value="1927">1927&nbsp;&nbsp;</option>
							<option value="1926">1926&nbsp;&nbsp;</option>
							<option value="1925">1925&nbsp;&nbsp;</option>
							<option value="1924">1924&nbsp;&nbsp;</option>
							<option value="1923">1923&nbsp;&nbsp;</option>
							<option value="1922">1922&nbsp;&nbsp;</option>
							<option value="1921">1921&nbsp;&nbsp;</option>
							<option value="1920">1920&nbsp;&nbsp;</option>
							<option value="1919">1919&nbsp;&nbsp;</option>
							<option value="1918">1918&nbsp;&nbsp;</option>
							<option value="1917">1917&nbsp;&nbsp;</option>
							<option value="1916">1916&nbsp;&nbsp;</option>
							<option value="1915">1915&nbsp;&nbsp;</option>
							<option value="1914">1914&nbsp;&nbsp;</option>
							<option value="1913">1913&nbsp;&nbsp;</option>
							<option value="1912">1912&nbsp;&nbsp;</option>
							<option value="1911">1911&nbsp;&nbsp;</option>
							<option value="1910">1910&nbsp;&nbsp;</option>
							<option value="1909">1909&nbsp;&nbsp;</option>
							<option value="1908">1908&nbsp;&nbsp;</option>
							<option value="1907">1907&nbsp;&nbsp;</option>
							<option value="1906">1906&nbsp;&nbsp;</option>
							<option value="1905">1905&nbsp;&nbsp;</option>
							<option value="1904">1904&nbsp;&nbsp;</option>
							<option value="1903">1903&nbsp;&nbsp;</option>
							<option value="1902">1902&nbsp;&nbsp;</option>
							<option value="1901">1901&nbsp;&nbsp;</option>
							<option value="1900">1900&nbsp;&nbsp;</option>
						</select>
					</div><!-- /.date-select-container -->
				</div><!-- /.col -->
			</div><!-- /.form-group -->
		</div><!-- /.col -->

		<div class="col-md-5">   
		   <h3 class="panel-title panel-subtitle">Delivery Address</h3>
		   <div class="form-group ">
				<label class="control-label col-sm-4" for="firstname">
					First name
					<sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="firstname" class="form-control form-control-book" type="text" value="" name="firstname">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group">
				<label class="control-label col-sm-4" for="lastname">
				Last name
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="lastname" class="form-control form-control-book" type="text" value="" name="lastname">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4" for="address1">
				Address
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="address1" class="form-control form-control-book" type="text" value="" name="address1">
				    <span class="help-block">Street address, P.O. Box, Company name, etc.</span>
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4" for="address2">Address (Line 2)</label>
				<div class="col-sm-8 ">
				    <input id="address2" class="form-control form-control-book" type="text" value="" name="address2">
				    <span class="help-block">Apartment, suite, unit, building, floor, etc...</span>
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4 " for="postcode">
				Zip / Postal Code
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="postcode" class="form-control form-control-book" type="text" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" value="" name="postcode">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4" for="city">
				City
				<sup>*</sup>
				</label>
				<div class="col-sm-8">
				    <input id="city" class="form-control form-control-book" type="text" value="" name="city">
				</div><!-- /.col -->
			</div><!-- /.form-group -->

			<div class="form-group ">
				<label class="control-label col-sm-4" for="id_country">
				Country
				<sup>*</sup>
				</label>
				<div class="col-sm-8 ">
					<input class="form-control form-control-book" placeholder="Country">
				</div><!-- /.col -->
			</div><!-- /.form-group -->
		                  
		    <div class="form-group">
		       	<label class="control-label col-sm-4 required">Email Address</label>
		        <div class="col-sm-8 ">
		            <input class="required form-control form-control-book" placeholder="Email Address">
		        </div><!-- /.col -->
		    </div><!-- /.form-group -->
		       
		    <div class="form-group">
		    	<label class="control-label col-sm-4 required">Phone Number</label>
		    	<div class="col-sm-8 ">
		            <input class="form-control form-control-book" placeholder="Phone Number">
		        </div><!-- /.col -->
		    </div><!-- /.form-group -->

		    <div class="form-group">
				<div class="col-sm-offset-4 col-sm-8 col-lg-8">
					<a href="index.php?page=cart" type="button" class="pull-right btn btn-primary btn-checkout"  type="submit">
						Continued Checkout  
						<i class="fa fa-chevron-right"></i>
					</a>
				</div><!-- /.col -->
			</div><!-- /.form-group -->
		</div><!-- /.col -->
		</div><!-- /form-group -->
</form><!-- /form -->
<!-- ========================================= BILLING FORM : END ========================================= -->