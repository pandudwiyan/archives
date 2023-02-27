<div class="topbar hidden-xs hidden-sm" style="background-color:#bce1f1">
			<div class="container">
				<div class="row flex">
					<div class="col-md-12 col-sm-12 col-xs-12 justify-content-end">
						<div class="topbar-right homepage-v1">
							<div style="margin-top: -10px; margin-bottom: 15px;">
								<div class="date3 dropdown">
									<div class="relative">
										<a href="keranjang">
										<i class="fa fa-shopping-cart" type="button" style="font-size: 30px; cursor: pointer;"></i>
										<?php
											$query_notifikasi = "SELECT * FROM keranjang where id_keranjang = '$ip'";
											$cek_keranjang = mysqli_query($conn, $query_notifikasi);
											$hasil_= mysqli_num_rows($cek_keranjang);

											if ($hasil_ != 0 ) 
											{
												while ($row = mysqli_fetch_assoc($cek_keranjang)) 
												{
											    	$total_keranjang = explode(",", $row['id_produk']);										    	
											    	{ ?>
											    		<label style="background-color: red;  padding: 3px; width: 16px; height: 16px; border-radius: 100%; text-align: center; position: absolute; z-index: 50; float: right; margin-left: -10px; margin-top: -4px;"><b id="total_keranjang" style="color: white; font-size:10px; margin-left: -3px; margin-top: -2px; float: right; position: absolute;"><?= count($total_keranjang)-1?></b></label>
													<?php 
													} 
												}
											} ?>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>