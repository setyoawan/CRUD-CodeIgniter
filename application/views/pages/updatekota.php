
<div class="container">
    <?php foreach ($kota as $p) : ?>
    <form action="<?= base_url('kota/hasil_update'); ?>" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $p->id ?>">

            <label>Nama kota</label>
            <input type="text" name="name" class="form-control" placeholder="Nama kota" value="<?php echo $p->name ?>">
        </div>
        <div class="form-group">
            <label>Id Provinsi</label>
            <input type="text" name="idprovinsi" class="form-control" placeholder="id Provinsi" value="<?php echo $p->province_id ?>">
        </div>
        
        <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>
    </form>
    <?php endforeach; ?>
</div>

