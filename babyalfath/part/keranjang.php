<!-- Featured -->
			<div class="featured-homepage1">
				<div class="container">
					<div class="product-related hp1 featured-home1">
						<div class="title-pro-v1 hp1">
							<h3 class="related-title text-center hp1">Keranjang</h3>
						</div>
						<div>
							<table width="100%" style="border: 1px solid #ddd;">
								<thead style="border: 1px solid #ddd;">
									<th style="border: 1px solid #ddd; padding: 10px; text-align: center;">Produk</th>
									<th style="border: 1px solid #ddd; padding: 10px; text-align: center; width: 300px;">Nama</th>
									<th style="border: 1px solid #ddd; padding: 10px; text-align: center; width: 50px;">Qty</th>
									<th style="border: 1px solid #ddd; padding: 10px; text-align: center;">Jumlah Hari</th>
									<th style="border: 1px solid #ddd; padding: 10px; text-align: center;">Total</th>									
									<th style="border: 1px solid #ddd; padding: 10px; text-align: center;">Edit</th>									
								</thead>
								<tbody>
									<?php
										$total_jml_harga = 0;

										while ($row = mysqli_fetch_assoc($cek_ip)) 
										{ $bank_produk = $row['id_produk']; }

										$jml_produk = explode(",", $bank_produk);

										for ($x=1; $x < count($jml_produk); $x++) 
										{ 
											$produk = $jml_produk[$x];
											$query_product = "SELECT * FROM `produk` WHERE `id_produk`='$produk'";
											$ex = mysqli_query($conn, $query_product);
											$data = mysqli_fetch_assoc($ex);
										?>
										<tr style="border: 1px solid #ddd; padding: 10px; text-align: center;">
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center;"><img src="<?= $data['Note']?>.jpg" width="100 px" height="100 px"></td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center;"><?= $data['nama'] ?></td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center; padding-top: 18px;">
												<div class="zoa-qtt pro-v1" style="transform: scale(0.6); margin-left: 10px;">
												<button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
												</button>
												<input type="text" name="number" value="1" class="product_quantity_number js-number">
												<button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
												</button>
												</div>
											</td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center; padding-top: 20px;">
												<div class="class="form-group email>
													<select name="hari" class="form-control form-account">
													  <?php 
													  	for ($i=1; $i < 7; $i++) 
													  	{ ?> 
													  		<option value="<?= $i ?>"><?= $i ?> Bulan</option>
													  	<?php }
													  ?>
													</select>
				                                </div>
											</td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center;">Rp. <?= number_format($data['Harga'], 0, ",", "."); ?></td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center;"><i class="fa fa-trash" aria-hidden="true" style="cursor: pointer;"></i></td>
										</tr>
									<?php
										$total_jml_harga = $total_jml_harga +  $data['Harga'];
									} ?>

									<!-- total -->
									<?php if ($total_jml_harga == 0) { ?>
										<tr style="padding: 10px; text-align: center;">
											<td colspan="6" style="border: 1px solid #ddd; padding: 10px; text-align: center; column-span: 3;"><span>Belum ada produk apapun dalam keranjang</span></td>
										</tr>
									<?php } else { ?>
										<tr style="padding: 10px; text-align: center;">
											<td colspan="4" style="border: 1px solid #ddd; padding: 10px; text-align: center; column-span: 3;"><b>TOTAL</b></td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center;"><b>Rp. <?= number_format($total_jml_harga, 0, ",", "."); ?></b></td>
											<td style="border: 1px solid #ddd; padding: 10px; text-align: center;"><a href="order"><button type="submit" class="zoa-btn btn-login hover-white contact" style="width: 100%;">Check Out >></button></a></td>
										</tr>
									<?php } ?>
								</tbody>
							</table><br>

						</div>
					</div>
				</div>
			</div>