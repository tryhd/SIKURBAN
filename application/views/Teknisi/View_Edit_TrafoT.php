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
                            Edit Trafo
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
                                <a href="#">Kelola Trafo</a>
                            </li>
                            <li class="active breadcrumb-item">Edit Trafo</li>
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
                                   Form Edit Trafo
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
                          <?php foreach($data_trafo as $value){ ?>
                                    <form action="<?php echo base_url(). 'Teknisi/Teknisicont/update_trafo'; ?>" method="post">
                                  <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>ID Trafo <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_trafo" value="<?php echo $value->id_trafo?>"/readonly>
                                        </div>
                                        
                                         <div class="col-lg-4 input_field_sections">
                                            <h5>No seri<span style="color: #cc0000">*</span></h5>
                                            <input required  type="text" class="form-control" name="no_seri" value="<?php echo $value->no_seri?>">
                                        </div>
                                      <div class="col-lg-4 input_field_sections">
                                            <h5>Tahun <span style="color: #cc0000">*</span></h5>
                                            <input required  type="text" class="form-control" name="tahun" value="<?php echo $value->tahun?>">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>ID Merek<span style="color: #cc0000">*</span></h5>
                                            <select required="" name="id_merek" class="form-control">
                                                <option value="">Select Merek</option>
                                                <?php
                                        
                                                    foreach ($getMerek as $value)
                                                    { ?>
                                                <option value="<?=$value->id_merek?>"><?=$value->nama_merek?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                    <div class="col-lg-4 input_field_sections">
                                            <h5>ID Gardu<span style="color: #cc0000">*</span></h5>
                                                                   <select required="" name="id_gardu" class="form-control">
                                                <option value="">Select Gardu</option>
                                                <?php
                                        
                                                    foreach ($getGardu as $value)
                                                    { ?>
                                                <option value="<?=$value->id_gardu?>"><?=$value->nama_gardu?></option>
                                                <?php }
                                                ?>
                                            </select>
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
