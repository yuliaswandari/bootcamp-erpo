
      <?php $this->load->view('template/header');?> 
      <?php foreach($t_todo as $u){ ?>
		<div class="col-md-12">
        <div class="row">
        <div class="container">
        <div class="col-md-4 col-md-offset-4">
        <form action="<?php echo base_url().'todo/update'?>" method="post">
  <div class="form-group">
    <label >Task Title</label>
	<input type="hidden" name="todo_id" value="<?= $u->todo_id ?>">
    <input type="text" class="form-control" id="todo_judul" placeholder="judul" value="<?= $u->todo_judul ?>" name="todo_judul">
  </div>
  <div class="form-group">
    <label >Start Date</label>
    <input type='date' class="form-control" name="todo_startdate" value="<?= $u->todo_startdate ?>" id="todo_startdate"/>
  </div>
  <div class="form-group">
    <label >Due Date</label>
    <input type='date' class="form-control" name="todo_duedate" value="<?= $u->todo_duedate ?>" id="todo_duedate"/>
  </div>
  
  <div class="form-group">
    <label >Task Description</label>
    <textarea class="form-control" id="todo_deskripsi"  name="todo_deskripsi" rows="5"><?= $u->todo_deskripsi ?></textarea>
  </div>
  <div class="form-group">
    <label >Status</label>
    <select class="browser-default custom-select" id="todo_status" name="todo_status">
  <option value="<?= $u->todo_status ?>" selected><?= $u->todo_status ?></option>
  <option value="Progress">Progress</option>
  <option value="Done">Done</option>
</select>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Save Task</button>
</form>
          </div>
        </div> <!-- /container -->
        </div>
      </div>
    </div> <!-- /container -->
	
	<?php } ?>
 
    <?php $this->load->view('template/footer');?> 