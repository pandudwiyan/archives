<div class="luc2 v4 breadcrumb-shoppage7">
	<h2>Checkout</h2>
	<ul class="breadcrumb">
		<li><a href="index">Home</a></li>
		<li style="color: white;">/</li>
		<li><a href="#">Checkout</a></li>
	</ul>
</div>
		<!-- Featured -->
			<div class="featured-homepage1">
				<div class="container">
					<div class="product-related hp1 featured-home1">
						<div class="title-pro-v1 hp1">
							<h3 class="related-title text-center hp1">Payment</h3>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 about-us">
                            <div class="mission">
                                <h4>Billing Details</h4>
                                <div class="form-customer">
                                <div class="form-group email">                                 
                                    <input type="text" class="form-control form-account" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group email">
                                    <input type="email" class="form-control form-account" placeholder="Alamat Email">
                                </div>
                                <div class="form-group email">                                  
                                    <input type="number" class="form-control form-account" placeholder="No telpon">
                                </div>
                                <div class="form-group review contact">                                  
                                    <input type="text" class="form-control form-account" placeholder="Alamat Pengirimann">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 about-us">
                            <div class="mission">
                                <h4>Payment Method</h4>
                                <div class="class="form-group email>
									<select name="cars" id="pm" class="form-control form-account" onchange="Payment()">
									  <option value="va">E-Wallet</option>
									  <option value="bt">Bank Transfer</option>
									  <option value="cod">COD</option>
									</select>
                                </div><br>
                                <div class="class="form-group email>
									<select name="cars" id="pmc" class="form-control form-account" onchange="showreq()">
									  <option value="Dana">Dana</option>
									  <option value="OVO">OVO</option>
									  <option value="Link Aja">Link Aja</option>
									  <option value="gopay">gopay</option>
									  <option value="Qris">Qris</option>
									  <option value="Shopeepay">Shopeepay</option>
									</select>
                                </div><br>
                                <div id="rekeningnya">
                                	<label style="padding: 20px; background-color: #f4f4f4; border-radius: 20px; width: 100%;">
                                		<h4 style="font-size: 20px;">Silahkan transfer ke rekening berikut:</h4>
                                		<table style="color: #505153;">
	                                		<tr>
	                                			<td style="width:50%;">Nama</td>
	                                			<td style="text-align: left; padding-left: 20px; width: 50%;">: Wulan Partini</td>
	                                		</tr>
	                                		<tr>
	                                			<td style="width:50%;">Method Pembayaran</td>
	                                			<td style="text-align: left; padding-left: 20px; width: 50%;"> : <span id="metod_bayar">Dana</span></td>
	                                		</tr>
	                                		<tr>
	                                			<td style="width:50%;">Rekening Tujuan</td>
	                                			<td style="text-align: left; padding-left: 20px; width: 50%;">: <span id="no_rekening">081910429293</span></td>
	                                		</tr>
	                                		<tr>
	                                			<td style="width:50%;">Jumlah Pembayaran</td>
	                                			<td style="text-align: left; padding-left: 20px; width: 50%;">: Rp. <?= number_format($total_jml_harga, 0, ",", "."); ?></td>
	                                		</tr>
                                		</table><br>
                                		<p style="text-align:justify; font-size:15px;">Note: <br>Silahkan screenshoot dan transfer ke rekening yang tertera terlebih dahulu. sebesar jumlah pembayaran, setelah itu anda bisa menekan order.</p>
                                	</label>
                                </div>

                                <h4>Opsi pengiriman</h4>
                                <div class="class="form-group email>
									<select name="cars" id="cars" class="form-control form-account">
									  <option value="volvo">Gosend</option>
									  <option value="saab">Grab</option>
									  <option value="saab">Paxel</option>
									  <option value="saab">Deleveree</option>
									</select>
                                </div><hr>
								<div class="class="form-group email>
									<input type="checkbox" placeholder="Nama Lengkap" style="cursor: pointer;"> Saya telah membaca dan menyetujui <a href="snk"> Syarat & Ketentuan</a> yang berlaku
                                </div>
                                <br>                                
                                <button type="submit" class="zoa-btn btn-login hover-white contact" style="width: 100%;" onclick="orderfix()">Order</button>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- Banner -->
			<div class="banner-homepage1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12 banner">
							<div class="banner-right">
								<img src="images/banner.png" alt="">
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 banner">
							<div class="banner-right">
								<img src="images/banner2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>