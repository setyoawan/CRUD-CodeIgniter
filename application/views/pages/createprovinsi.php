<div class="container">
<?= validation_errors() ?>
<form action="<?= base_url('provinsi/input'); ?>" method="post">
    <div class="form-group">
        <label>Nama Provinsi</label>
        <input type="text" name="name" class="form-control" placeholder="Nama Provinsi">
    </div>

    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>
</form>
</div>