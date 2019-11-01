
<div class="container-fluid">

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="<?= base_url('kota/input');?>" class="btn btn-lg btn-primary">Add City</a>
      </div>
    </div>
    
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kota</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>id provinsi</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
          
              
              <?php
              $no = 1;

              foreach ($kota as $u) :
              ?>
              <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->name ?></td>
                  <td><?php echo $u->province_id ?></td>
                  
                  <td>
                      <?php echo anchor('kota/update/' . $u->id, 'Edit'); ?> |
                      <?php echo anchor('kota/hapus/' . $u->id, 'Hapus'); ?>
                  </td>
              </tr>
  
              <?php endforeach; ?>
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

