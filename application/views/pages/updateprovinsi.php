
<div class="container">
    <?php foreach ($provinsi as $p) : ?>
    <form action="<?= base_url('provinsi/hasil_update'); ?>" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $p->id ?>">

            <label>Nama provinsi</label>
            <input type="text" name="name" class="form-control" placeholder="Nama provinsi" value="<?php echo $p->name ?>">
        </div>
        
        <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>
    </form>
    <?php endforeach; ?>
</div>

