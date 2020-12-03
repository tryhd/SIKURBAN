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
	     <link type="text/css" rel="stylesheet" href="<?=base_url()?>vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/dataTables.bootstrap.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/tables.css" />
    
       

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
                        <div class="col-lg-6 col-sm-4">
                            <h4 class="nav_top_align">
                            <i class="fa fa-fw fa-folder-open"></i>
                            Tampil Pengukuran
                        </h4>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="<?=base_url('Teknisi/dashboardTeknisi')?>">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Kelola Pengukuran</a>
                                </li>
                                <li class="active breadcrumb-item">Tampil Pengukuran</li>
                            </ol>
                        </div>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-white">
                                Daftar Pengukuran
                            </div>
                            <div class="card-block m-t-35" id="user_body">
                                
                        <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                            <div role="alert" class="alert alert-success">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>
                                    <strong>Well done!!</strong> <?=$this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>
                                
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="<?=base_url('Teknisi/Teknisicont/export_excel')?>" id="editable_table_new" class=" btn btn-default">
                                        Export to Excel <i class="fa fa-plus"></i>
                                    </a>
                                    </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div>
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">No</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">ID Ukur</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">Gardu</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Tanggal</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">Beban Teukur</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Beban Trafo</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Petugas</th>
                            
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($getPengukuran))
                                                {
                                                    $i=1;

                                                    foreach ($getPengukuran as $value)
                                                    { ?>
                                                        <tr>
                                                            <td><?=$i++?></td>
                                                            <td><?=$value->id_pengukuran?></td>
                                                            <td><?=$value->nama_gardu?></td>
                                                            <td><?=$value->tgl_pengukuran?></td>
                                                            <td><?=$value->beban_terukur?></td>
                                                            <td><?=$value->beban_trafo?></td>
                                                            <td><?=$value->nama?></td>
                                                            <td>
                                                                
                                                                 <?php echo anchor('Teknisi/Teknisicont/DetailPengukuran/'.$value->id_pengukuran,'<i class="btn  btn-success">Detail</i>'); ?>

                                                            </td>
                                                        </tr>   
                                                <?php   }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
    </div>
    
</div>
<script type="text/javascript" src="<?=base_url()?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>vendors/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pages/users.js"></script>  
<script>
    $(document).ready(function() {
    $('.hapus').click(function() {
        return confirm("Apakah Yakin Data Akan Dihapus?");
        });
     });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</body>
</html>