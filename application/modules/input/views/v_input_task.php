
      <?php $this->load->view('template/header');?> 
      <div class="col-md-12">
        <div class="row">
        <div class="container">
        <div class="col-md-4 col-md-offset-4">
        <form action="<?php echo base_url().'input/validasi'?>" method="post">
  <div class="form-group">
    <label >Task Title</label>
    <input type="text" class="form-control" id="todo_judul" placeholder="judul" required="" name="todo_judul">
  </div>
  <div class="form-group">
    <label >Start Date</label>
    <input type='date' class="form-control" name="todo_startdate" required="" id="todo_startdate"/>
  </div>
  <div class="form-group">
    <label >Due Date</label>
    <input type='date' class="form-control" name="todo_duedate" required="" id="todo_duedate"/>
  </div>
  
  <div class="form-group">
    <label >Task Description</label>
    <textarea class="form-control" id="todo_deskripsi" required="" name="todo_deskripsi" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label >Status</label>
    <select class="browser-default custom-select" required="" id="todo_status" name="todo_status">
  <option value="New" selected>New</option>
  <option value="Progress">Progress</option>
  <option value="Done">Done</option>
</select>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Input Task</button>
</form>
          </div>
        </div> <!-- /container -->
        </div>
      </div>
    </div> <!-- /container -->
 
    <?php $this->load->view('template/footer');?> 