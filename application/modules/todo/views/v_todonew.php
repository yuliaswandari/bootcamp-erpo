
      <?php $this->load->view('template/header.php');?> 
     
</div> <!-- /container -->

<div class="col-md-12">
  <div class="row">
    <h2>Todo List New</h2>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Start Date</th>
          <th>Due Date</th>
          <th>Description</th>
          
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
<?php 
  $no = 1;
  foreach($t_todo as $u){ 
  ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $u->todo_judul ?></td>
          <td><?= $u->todo_startdate ?></td>
          <td><?= $u->todo_duedate ?></td>
          <td><?= $u->todo_deskripsi ?></td>
          
          <td><a href="<?= base_url().'todo/todo/edit/'.$u->todo_id;?>" class="btn btn-primary">Edit</a>
          
          <a href="<?= base_url().'todo/todo/hapus/'.$u->todo_id;?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus ini?')">Hapus</a></td> 
        </tr>
        
         
      </tbody>
      <?php } ?>
    </table>
  </div>
</div>
</div> <!-- /container -->

<?php $this->load->view('template/footer.php');?> 

