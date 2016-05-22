<!-- Sekali Transaksi -->
<h2 class="page-header" align="center">Sekali Transaksi</h2>
<form action="" role="form">
	<div class="checkbox"><label for=""><input type="checkbox">Gunakan Alamat saya</label></div>
	<h4 class="page-header">Service</h4>
	
	<div class="form-inline">
		<div class="form-group">
		<label for="inputs" class="sr-only"></label><input type="text" id="inputs" class="form-control" placeholder="Kota Asal" title="Kota Asal" data-toggle="tooltip"></div>
		<div class="form-group">
		<label for="inputs" class="sr-only"></label><input type="text" id="inputs" class="form-control" placeholder="Kota Tujuan" title="Kota Tujuan" data-toggle="tooltip"></div>
		<div class="form-group">
		<label for="inputs" class="sr-only"></label> 
		<select name="tipebarang" id="inputs" class="form-control" title="Tipe Barang" placeholder="Tipe Barang">
			<option value="1">Tipe 1</option>
			<option value="2">Tipe 2</option>
			<option value="3">Tipe 3</option>
		</select>
		</div>
	</div> <!-- Form Inline -->
	<br>

	<div class="form-inline">
		<div class="form-group">
		<label for="inputs" class="sr-only"></label> 
		<select name="tipeservice" id="inputs" class="form-control" title="Tipe Service" placeholder="Tipe Barang">
			<option value="1">Service 1</option>
			<option value="2">Service 2</option>
			<option value="3">Service 3</option>
		</select>
		</div>	
		<div class="form-group">
		<label for="inputs" class="sr-only"></label><input type="text" id="inputs" class="form-control" placeholder="Berat (Kg)" title="Berat (Kg)" data-toggle="tooltip"></div>
		<div class="form-group">
		<label for="inputs" class="sr-only"></label><input type="text" id="inputs" class="form-control" placeholder="Quantity" title="Quantity" data-toggle="tooltip"></div>
	</div> <!-- Form Inline -->
	<br>

	<div class="row">
		<div class="col-md-6">
			<h4 class="page-header">Form Pengirim</h4>
			<div class="form-group">
				<label for="inputs">Nama</label>
				<input type="text" id="inputs" class="form-control" placeholder="Nama Lengkap" title="Nama Lengkap" data-toggle="tooltip">
			</div>			
			<div class="form-group">
				<label for="inputs">Alamat</label>
				<input type="text" id="inputs" class="form-control" placeholder="Alamat 1" title="Alamat 1" data-toggle="tooltip"><br>
				<input type="text" id="inputs" class="form-control" placeholder="Alamat 2" title="Alamat 2" data-toggle="tooltip"><br>
				<input type="text" id="inputs" class="form-control" placeholder="Alamat 2" title="Alamat 2" data-toggle="tooltip">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputs">Kota</label>
						<input type="text" id="inputs" class="form-control" placeholder="Kota">
					</div>
					<div class="form-group">
						<label for="inputs">Propinsi</label>
						<input type="text" id="inputs" class="form-control" placeholder="Propinsi">
					</div>
					<div class="form-group">
						<label for="inputs">Kontak</label>
						<input type="text" id="inputs" class="form-control" placeholder="Kontak">
					</div>
				</div> <!-- col-md-6 2nd -->

				<div class="col-md-6">
					<div class="form-group">
						<label for="inputs">Kode Pos</label>
						<input type="text" id="inputs" class="form-control" placeholder="Kode Pos">
					</div>
					<div class="form-group">
						<label for="inputs">Negara</label>
						<input type="text" id="inputs" class="form-control" value="Indonesia" placeholder="Negara" disabled>
					</div>
					<div class="form-group">
						<label for="inputs">Telepon</label>
						<input type="text" id="inputs" class="form-control" placeholder="Telepon">
					</div>
				</div>				
			</div>	<!-- col-md-6 2nd -->
				<div class="form-group">
					<label for="inputs">Total Harga</label>
					<textarea name="total" id="inputs" class="form-control" rows="4" disabled>Total Harga</textarea>
				</div>								
		</div> <!-- col-md-6 First -->

		<div class="col-md-6">
			<h4 class="page-header">Form Penerima</h4>
			<div class="form-group">
				<label for="inputs">Nama</label>
				<input type="text" id="inputs" class="form-control" placeholder="Nama Lengkap" title="Nama Lengkap" data-toggle="tooltip">
			</div>			
			<div class="form-group">
				<label for="inputs">Alamat</label>
				<input type="text" id="inputs" class="form-control" placeholder="Alamat 1" title="Alamat 1" data-toggle="tooltip"><br>
				<input type="text" id="inputs" class="form-control" placeholder="Alamat 2" title="Alamat 2" data-toggle="tooltip"><br>
				<input type="text" id="inputs" class="form-control" placeholder="Alamat 2" title="Alamat 2" data-toggle="tooltip">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="inputs">Kota</label>
						<input type="text" id="inputs" class="form-control" placeholder="Kota">
					</div>
					<div class="form-group">
						<label for="inputs">Propinsi</label>
						<input type="text" id="inputs" class="form-control" placeholder="Propinsi">
					</div>
					<div class="form-group">
						<label for="inputs">Kontak</label>
						<input type="text" id="inputs" class="form-control" placeholder="Kontak">
					</div>
				</div> <!-- col-md-6 2nd -->

				<div class="col-md-6">
					<div class="form-group">
						<label for="inputs">Kode Pos</label>
						<input type="text" id="inputs" class="form-control" placeholder="Kode Pos">
					</div>
					<div class="form-group">
						<label for="inputs">Negara</label>
						<input type="text" id="inputs" class="form-control" value="Indonesia" placeholder="Negara" disabled>
					</div>
					<div class="form-group">
						<label for="inputs">Telepon</label>
						<input type="text" id="inputs" class="form-control" placeholder="Telepon">
					</div>
				</div>				
			</div>	<!-- col-md-6 2nd -->
				<div class="form-group">
					<label for="inputs">Deskripsi Barang</label>
					<textarea name="total" id="inputs" class="form-control" rows="4" placeholder="Deskripsi"></textarea>
				</div>
				<div class="checkbox"><label for=""><input type="checkbox">Diasuransikan</label></div>
				<div class="form-group">
					<label for="inputs">Harga Barang</label>
					<input type="text" id="inputs" class="form-control" placeholder="Harga Barang" disabled>
				</div>
				<button type="submit" class="btn btn-primary pull-right">Kalkulasikan</button>
				<div class="clearfix"></div>
				<br>
		</div>
			<p align="center"><button type="submit" class="btn btn-lg btn-danger">Generate Ticket</button></p>
		</div>
	</div>
</form>