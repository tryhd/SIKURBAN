<!doctype html>
<html class="no-js" lang="en">
<script src="<?= $this->config->base_url(); ?>includes/js/jquery.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.min.js"></script>
<script src="<?= $this->config->base_url(); ?>includes/js/bootstrap.js"></script>
<head>
    <meta charset="UTF-8">
    <title>SIKURBAN</title>
    <?php
       $this->load->view('Petugas/header/link');
    ?>

</head>

<body class="body">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
    <?php
       $this->load->view('Petugas/header/top_header');
    ?>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <?php
       $this->load->view('Petugas/header/header');
       ?>
        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
                            Tambah Pengukuran
                        </h4>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="<?=base_url()?>Petugas/dashboardPetugas">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Kelola Pengukuran</a>
                            </li>
                            <li class="active breadcrumb-item">Tambah Pengukuran</li>
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
                                   Form Tambah Pengukuran
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
                    
                                    <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>ID Ukur <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_pengukuran" value="<?= $kodeunik;?>" readonly/>
                                        </div>
                                         <div class="col-lg-4 input_field_sections">
                                            <h5>ID gardu <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" name="id_gardu" 
                                            value=<?= $getGardu[0]->id_gardu; ?> readonly />
                                                
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Tanggl Ukur <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control datepicker" name="tgl_pengukuran" value=""/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 1<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control"  id="n1" name="n1" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r1" name="r1" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control"  id="s1" name="s1" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t1" name="t1" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 2<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n2" name="n2" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r2" name="r2" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s2" name="s2" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t2" name="t2" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 3<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n3" name="n3" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r3" name="r3" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s3" name="s3" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t3" name="t3" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 4<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n4" name="n4" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r4" name="r4" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s4" name="s4" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t4" name="t4" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 5<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n5" name="n5" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r5" name="r5" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s5" name="s5" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t5" name="t5" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 6<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n6" name="n6" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r6" name="r6" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s6" name="s6" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t6" name="t6" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 7<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n7" name="n7" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r7" name="r7" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s7" name="s7" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t7" name="t7" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 8<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n8" name="n8" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r8" name="r8" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s8" name="s8" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t8" name="t8" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 9<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n9" name="n9" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" id="r9" name="r9" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s9" name="s9" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t9" name="t9" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Jurusan 10<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>   
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="n10" name="n10" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="r10" name="r10" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="s10" name="s10" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Fasa T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="t10" name="t10" value="0"/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        <h4>Total Beban Fasa<span style="color: #cc0000"></span></h4>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                        </div>  
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Tegangan N<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="teganganN"  name="tegangan_n" value="0" />
                                            
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Tegangan R<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="teganganR" name="tegangan_r" value="0"/>
                                        </div>
                                        <div class="col-lg-3 input_field_sections">
                                            <h5>Tegangan S<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="teganganS" name="tegangan_s" value="0"/>
                                        </div>
                                         <div class="col-lg-3 input_field_sections">
                                            <h5>Tegangan T<span style="color: #cc0000">*</span></h5>
                                            <input required type="number" class="form-control" id="teganganT" name="tegangan_t" value="0"/>
                                        </div>
                                         <div class="col-lg-4 input_field_sections">
                                            <h5>Daya <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control" id="daya" name="daya" 
                                            value=<?= $getGardu[0]->daya; ?> readonly />
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5> Id Rayon <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control"  name="id_rayon" 
                                            value=<?= $getGardu[0]->id_rayon; ?> readonly />
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Petugas <span style="color: #cc0000">*</span></h5>
                                            <input required type="text" class="form-control"  name="nama" 
                                            value="<?=$this->session->nama?>" readonly/>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Hasil Ukur <span style="color: #cc0000">*</span></h5>
                                            <input  class="form-control" id="hasil" name="beban_terukur" value=""/>
                                            <button  id="bangsadini"  type="button">hasil 1</button>
                                        </div>
                                        <div class="col-lg-4 input_field_sections">
                                            <h5>Beban Trafo <span style="color: #cc0000">*</span></h5>
                                            <input  class="form-control" id="bebantrafo" name="beban_trafo" value=""/>
                                            <button  id="bangsadya"  type="button">hasil 2</button>
                                        </div>
                                        <div class="col-lg-8 input_field_sections">
                                            <button type="submit" class="btn btn-primary konfirmasi">Save</button>
                                        </div>
                                    </div>
                                    </form>
                                    
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

            // var input1 = Number();
            var input2 = Number($('#bangsad2').val());

            // var hasilakhir= input1 + input2;
            $( "#bangsadini" ).click(function(e) {
                // e.preventDefault();
                 // alert();
                 $('#hasil').val((((parseInt($('#r1').val())+parseInt($('#r2').val())+parseInt($('#r3').val())+parseInt($('#r4').val())+parseInt($('#r5').val())+parseInt($('#r6').val())+parseInt($('#r7').val())+parseInt($('#r8').val())+parseInt($('#r9').val())+ parseInt($('#r10').val()))*parseInt($('#teganganR').val())+(parseInt($('#s1').val())+parseInt($('#s2').val())+parseInt($('#s3').val())+parseInt($('#s4').val())+parseInt($('#s5').val())+parseInt($('#s6').val())+parseInt($('#s7').val())+parseInt($('#s8').val())+parseInt($('#s9').val())+ parseInt($('#s10').val()))*parseInt($('#teganganS').val())+(parseInt($('#t1').val())+parseInt($('#t2').val())+parseInt($('#t3').val())+parseInt($('#t4').val())+parseInt($('#t5').val())+parseInt($('#t6').val())+parseInt($('#t7').val())+parseInt($('#t8').val())+parseInt($('#t9').val())+ parseInt($('#t10').val()))*parseInt($('#teganganT').val()))/parseInt(1000)));
            });
            $( "#bangsadya" ).click(function(e) {
                // e.preventDefault();
                 // alert();
                 var x = Number ($('100').val());
                 $('#bebantrafo').val((parseFloat($('#hasil').val())/parseInt($ ('#daya').val()))*parseInt(100));
            });
            // console.log(input1+input2);
  });
  </script>

</body>
</html>
