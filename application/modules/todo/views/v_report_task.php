
      <?php $this->load->view('template/header.php');?> 


</div> <!-- /container -->

<div class="col-md-12">
  <div class="row">
    <h2>Todo List All</h2>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Start Date</th>
          <th>Due Date</th>
          <th>Decription</th>
          <th>Status</th>
          
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
          <td><?= $u->todo_status ?></td>
          
        </tr>
        
         
      </tbody>
      <?php } ?>
    </table>
  </div>
</div>
</div> <!-- /container -->

<?php $this->load->view('template/footer.php');?> 

