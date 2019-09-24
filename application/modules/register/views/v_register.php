<!DOCTYPE html>  
  <html lang="en">  
  <head>  
   <title>Registration</title>  
  <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
   <!-- Latest compiled and minified CSS -->  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
   <style type="text/css">  
    .form-box{  
     max-width: 500px;  
     position: relative;  
     margin: 5% auto;  
    }  
   </style>  
  </head>  
  <body>  
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Register</h3>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo base_url(); ?>register/validation" method="post">  
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fullname">Fullname</label>  
                      <div >  
                        <input type="text" class="form-control" id="user_fullname" name="user_fullname" placeholder="Full Name" required="">  
                        <span class="text-danger"><?php echo form_error('user_fullname'); ?></span>  
                      </div>  
                  </div>  
           </div>  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="username">User Name</label>  
                      <div >  
                        <input type="text" class="form-control" id="user_username" name="user_username" placeholder="User Name" required="">  
                        <span class="text-danger"><?php echo form_error('user_username'); ?></span>  
                      </div>  
                  </div>  
           </div>  
          </div>  
          <div class="form-group">  
                  <label class="control-label" for="email">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('user_email'); ?></span>  
                    </div>  
                </div>  
          <div class="form-group">  
                  <label class="control-label" for="nohp">Phone Number</label>  
                    <div>  
                      <input type="text" class="form-control" id="user_nohp" name="user_nohp" placeholder="Phone Number" required="">  
                      <span class="text-danger"><?php echo form_error('user_nohp'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="password">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('user_password'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required="">  
                      <span class="text-danger"><?php echo form_error('confirmpassword'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
        </div>  
        <div class="panel-footer text-center">  
         <h5><a href="<?= base_url() ?>">Back to Login</a></h5>  
        </div>  
      </div>  
      </div>  
     </div>  
    </div>  
   </div>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
  </body>  
  </html>  