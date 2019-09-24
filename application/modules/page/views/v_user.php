
      <?php $this->load->view('template/header');?> 
      <div class="col-md-12">
        <div class="row">
          <h2>Data User</h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
    <?php 
		$no = 1;
		foreach($t_user as $u){ 
		?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $u->user_username ?></td>
                <td>
                              <?= anchor('page/hapus_user/'.$u->user_id,'Hapus'); ?></td> 
              </tr>
              
               
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
    </div> <!-- /container -->
 
    <?php $this->load->view('template/footer');?> 