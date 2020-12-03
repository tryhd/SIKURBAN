<!doctype html>
<html class="no-js" lang="en">
<script src="<?= $this->config->base_url(); ?>includes/js/jquery.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.min.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.js"></script>
<head>
    <meta charset="UTF-8">
    <title>SIKURBAN</title>
    <?php
       $this->load->view('Rayon/header/link');
    ?>

</head>

<body class="body">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
    <?php
       $this->load->view('Rayon/header/top_header');
    ?>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <?php
       $this->load->view('Rayon/header/header');
       ?>
        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Edit Pengukuran
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>Rayon/dashboardRayon">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Kelola Pengukuran</a>
                            </li>
                            <li class="active breadcrumb-item">Edit Pengukuran</li>
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
                                   Form Edit Pengkuruan
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
                          <?php foreach($pengukuran as $value){ ?>
                                    <form action="<?php echo base_url(). 'Rayoncont/edit_Pengukuran'; ?>" method="post">
                                  <div class="row">
                                        
                                    <div class="col-lg-4 input_field_sections">
                                            <h5>ID Ukur <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_pengukuran" value="<?php echo $value->id_pengukuran?>"/readonly>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Gardu<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_gardu" value="<?php echo $value->id_gardu?>"/readonly>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Trafo<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_trafo" value="<?php echo $value->id_trafo ?>"/readonly>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 1</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n1" value="<?php echo $value->n1?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r1" value="<?php echo $value->r1 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s1" value="<?php echo $value->s1 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t1" value="<?php echo $value->t1 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 2</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n2" value="<?php echo $value->n2 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r2" value="<?php echo $value->r2 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s2" value="<?php echo $value->s2 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t2" value="<?php echo $value->t2 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 3</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n3" value="<?php echo $value->n3 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r3" value="<?php echo $value->r3 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s3" value="<?php echo $value->s3 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t3" value="<?php echo $value->t3 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 4</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n5" value="<?php echo $value->n4 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r5" value="<?php echo $value->r4 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s5" value="<?php echo $value->s4 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t5" value="<?php echo $value->t4 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 5</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n6" value="<?php echo $value->n5 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r6" value="<?php echo $value->r5 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s6" value="<?php echo $value->s5 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t6" value="<?php echo $value->t5 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 6</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n7" value="<?php echo $value->n6 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r7" value="<?php echo $value->r6 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s7" value="<?php echo $value->s6 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t7" value="<?php echo $value->t6 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 7</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n8" value="<?php echo $value->n7 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r8" value="<?php echo $value->r7 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s8" value="<?php echo $value->s7 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t8" value="<?php echo $value->t7 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 8</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n9" value="<?php echo $value->n8 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r9" value="<?php echo $value->r8 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s9" value="<?php echo $value->s8 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t9" value="<?php echo $value->t8 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 9</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n10" value="<?php echo $value->n9 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r10" value="<?php echo $value->r9 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s10" value="<?php echo $value->s9 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t10" value="<?php echo $value->t9 ?>"/>
                                        </div>
                                        <div class="col-lg-12 input_field_sections">                                       
                                        <h4>Jurusan 10</h4>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="n4" value="<?php echo $value->n10 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="r4" value="<?php echo $value->r10 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="s4" value="<?php echo $value->s10 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="t4" value="<?php echo $value->t10 ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Total N<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="total_n" value="<?php echo $value->total_n ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Total R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="total_r" value="<?php echo $value->total_r ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Total S<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="total_s" value="<?php echo $value->total_s ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Total T<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="total_t" value="<?php echo $value->total_t ?>"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Beban Terukur<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="beban_terukur" value="<?php echo $value->beban_terukur ?>"/>
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
