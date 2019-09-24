<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yulia Swandari">
    <meta name="author" content="Yulia Swandari">
    <!-- Bootstrap -->
    <link href="<?= base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
   <!--  <link href="<?= base_url().'assets/css/switch.css'?>" rel="stylesheet"> -->
 
 
  </head>
  <body>
 
    <div class="container">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'page'?>">Dashboard User</a></li>
      <li><a href="<?php echo base_url().'input'?>">Input Task</a></li>
      <li><a href="<?php echo base_url().'todo'?>">Todo List New</a></li>
      <li><a href="<?php echo base_url().'todo/progres'?>">Todo List Progres</a></li>
      <li><a href="<?php echo base_url().'todo/done'?>">Todo List Done</a></li>   
   
     
  <!--Akses Menu Untuk Employer-->
  <?php elseif($this->session->userdata('akses')=='1'):?>
      <li class="active"><a href="<?php echo base_url().'page'?>">Dashboard Admin</a></li>
      <li><a href="<?php echo base_url().'page/data_user'?>">Data All User</a></li>
      <li><a href="<?php echo base_url().'page/report'?>">Report Todo List</a></li>

  <!--Akses Menu Untuk Employee-->
  <?php else:?>
      <li class="active"><a href="<?php echo base_url().'page'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'page/update'?>">Update Task</a></li>
     
  <?php endif;?>
  </ul>
 
  <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'index.php/login/logout'?>" onclick="return confirm('Apakah Anda yakin akan keluar?')">Sign Out</a></li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 