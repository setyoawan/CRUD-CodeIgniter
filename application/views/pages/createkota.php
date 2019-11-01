<div class="container">
<?= validation_errors() ?>
<form action="<?= base_url('kota/input'); ?>" method="post">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" name="name" class="form-control" placeholder="Nama Kota">
    </div>
    <div class="form-group">
        <label>Id Provinsi</label>
        <div class="form-group">
	            <select name="idprovinsi" class="form-control" id="form-field-select-1">
	              <option value = '1' >Jawa Timur</option>
	              <option value = '2' >Jawa Tengah</option>
	              <option value = '3' >Jawa Barat</option>
	              <option value = '4' >Aceh</option>
	              <option value = '5' >Sumatera utara</option>
	              <option value = '6' >Sumatera barat</option>
	              <option value = '7' >Riau</option>
	              <option value = '8' >Kepulauan riau</option>
	              <option value = '9' >jambi</option>
	              <option value = '10' >Bengkulu</option>
	              <option value = '11' >Lampung</option>
	              <option value = '12' >Banten</option>
	            </select>
	        </div>
    </div>

    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>
</form>
</div>