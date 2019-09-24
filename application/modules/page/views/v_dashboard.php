
      <?php $this->load->view('template/header.php');?> 

      <div class="container">
        <div class="row">
          <h2>Welcome <?php echo $this->session->userdata('ses_nama');?></h2>
          <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <b>To-do List START TODAY : </b><br>
     <ul><?php 
      foreach($t_todo as $u){ 
      ?>
      <li> Task:<?= $u->todo_judul ?> | Status: <?= $u->todo_status ?> | Start Date: <?= $u->todo_startdate ?> | Due Date: <?= $u->todo_duedate ?> </li>
      <?php } ?>
      </ul>
		</div>
    
        </div>
      </div>

    </div> <!-- /container -->

     <?php $this->load->view('template/footer.php');?> 

  