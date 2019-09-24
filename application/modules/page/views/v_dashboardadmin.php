
      <?php $this->load->view('template/header.php');?> 

      <div class="container">
        <div class="row">
          <h2>Welcome <?php echo $this->session->userdata('ses_nama');?></h2>
          
        </div>
      </div>

    </div> <!-- /container -->

     <?php $this->load->view('template/footer.php');?> 

  