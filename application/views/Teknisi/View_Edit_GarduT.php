<!doctype html>
<html class="no-js" lang="en">
<script src="<?= $this->config->base_url(); ?>includes/js/jquery.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.min.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.js"></script>
<head>
    <meta charset="UTF-8">
    <title>SIKURBAN</title>
    <?php
       $this->load->view('Teknisi/header/link');
    ?>

</head>

<body class="body">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
    <?php
       $this->load->view('Teknisi/header/top_header');
    ?>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <?php
       $this->load->view('Teknisi/header/header');
       ?>
        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Edit Gardu
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>Teknisi/dashboardTeknisi">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Kelola gardu</a>
                            </li>
                            <li class="active breadcrumb-item">Edit gardu</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container forms">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                   Form Edit Gardu
                                </div>
                                <div class="card-block">
                    <?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
                    <div role="alert" class="alert alert-success">
                       <button data-dismiss="alert" class="close" type="button">
                           <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                       <strong>Well done!</strong>
                       <?= $this->session->flashdata('SUCCESSMSG') ?>
                    </div>
                    <?php } ?>
                          <?php foreach($data_gardu as $value){ ?>
                                    <form action="<?php echo base_url(). 'Teknisi/Teknisicont/update_gardu'; ?>" method="post">
                                  <div class="row">
                                         <div class="col-lg-4 input_field_sections">
                                            <h5>ID Gardu <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_gardu" value="<?php echo $value->id_gardu?>"/readonly>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Nama Gardu<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="nama_gardu" value="<?php echo $value->nama_gardu?>"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Uraian Nama<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="uraian_nama" value="<?php echo $value->uraian_nama?>"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>No Gardu <span style="color: #cc0000">*</span></h5>
                                            <input required  type="text" class="form-control" name="no_gardu" value="<?php echo $value->no_gardu?>"/>    
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Alamat<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="alamat" value="<?php echo $value->alamat?>"/>
                                        </div>
                                         <div class="col-lg-4 input_field_sections">
                                            <h5>Daya<span style="color: #cc0000">*</span></h5>
                                             <select required="" name="daya" class="form-control">
                                                         <option value="20">20</option>
                                                         <option value="50">50</option>
                                                         <option value="100">100</option>
                                                         <option value="160">160</option>
                                                         <option value="200">200</option>
                                                         <option value="250">250</option>
                                                         <option value="315">315</option>
                                                         <option value="400">400</option>
                                                         <option value="500">500</option>
                                                         <option value="630">630</option>
                                                        
                                            </select>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Penyulang <span style="color: #cc0000">*</span></h5>
                                            <select required="" name="id_penyulang" class="form-control">
                                                <option value=>"<?php echo $value->id_penyulang?>"</option>
                                                <?php
                                        
                                                    foreach ($getPenyulang as $value)
                                                    { ?>
                                                 <option value="<?=$value->id_penyulang?>"><?=$value->nama_penyulang?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        
                                     <div class="col-lg-4 input_field_sections">
                                            <h5>Jenis <span style="color: #cc0000">*</span></h5>
                                             <select required="" name="id_jenis" class="form-control">
                                                 <option value="">select jenis</option>
                                                <?php
                                        
                                                    foreach ($getjenis as $value)
                                                    { ?>
                                                 <option value="<?=$value->id_jenis?>"><?=$value->nama_jenis?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                         
                                         <div class="col-lg-4 input_field_sections">
                                            <h5>Rayon <span style="color: #cc0000">*</span></h5>
                                            <select required="" name="id_rayon" class="form-control">
                                                <option value="">select Rayon</option>
                                                <?php
                                        
                                                    foreach ($getwilayah as $value)
                                                    { ?>
                                                <option value="<?=$value->id_rayon?>"><?=$value->nama_wilayah?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>                                        
                                    

                                        <div class="col-lg-12 input_field_sections">
                                            <button type="submit" class="btn btn-primary konfirmasi">Save</button>
                                        </div>
                                    
                                    </form>
                                    <?php } ?>  
                                </div>
                            </div>
                        </div>
                    </div>

                 
                    

                </div>
                <!-- /.outer -->
            </div>
        </div>
    </div>
    
</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="<?=base_url();?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom.js"></script>
<!-- global scripts end-->

<script type="text/javascript" src="<?=base_url();?>vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.js" ></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/countUp.js/js/countUp.min.js"></script>

<!--end of plugin scripts-->

<script type="text/javascript" src="<?=base_url();?>js/jquery-ui.js"></script>
<!--end of plugin scripts-->
  <script>
  $( function() {
      $( ".datepicker" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
  });
  </script>
  <script>
    $(document).ready(function() {
    $('.konfirmasi').click(function() {
        return confirm("Apakah Data Benar?");
        });
     });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


</body>
</html>
