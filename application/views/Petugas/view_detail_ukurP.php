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
                        <div class="col-lg-6 col-sm-4">
                            <h4 class="nav_top_align">
                            <i class="fa fa-fw fa-folder-open"></i>
                            Tampil Pengukuran
                        </h4>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="<?=base_url('Petugas/dashboardPetugas')?>">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Kelola Pengukuran</a>
                                </li>
                                <li class="active breadcrumb-item">Tampil Detail Pengukuran</li>
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
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 1</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 1</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 1</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 1</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 2</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 2</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 2</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 2</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 3</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 3</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 3</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 3</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 4</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 4</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 4</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 4</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 5</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 5</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 5</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 5</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 6</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 6</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 6</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 6</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 7</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 7</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 7</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 7</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 8</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 8</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 8</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 8</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 9</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 9</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 9</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 9</th>
                                                    <th class="sorting_asc wid-1" tabindex="0" rowspan="1" colspan="1">N 10</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">R 10</th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">S 10</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">T 10</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Tegangan N</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Tegangan R</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Tegangan s</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Tegangan T</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Beban Terukur</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Beban Trafo</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Petugas</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Tanggal</th>
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
                                                            <td><?=$value->n1?></td>
                                                            <td><?=$value->r2?></td>
                                                            <td><?=$value->s1?></td>
                                                            <td><?=$value->t1?></td>
                                                            <td><?=$value->n2?></td>
                                                            <td><?=$value->r2?></td>
                                                            <td><?=$value->s2?></td>
                                                            <td><?=$value->t2?></td>
                                                            <td><?=$value->n3?></td>
                                                            <td><?=$value->r3?></td>
                                                            <td><?=$value->s3?></td>
                                                            <td><?=$value->t3?></td>
                                                            <td><?=$value->n4?></td>
                                                            <td><?=$value->r4?></td>
                                                            <td><?=$value->s4?></td>
                                                            <td><?=$value->t4?></td>
                                                            <td><?=$value->n5?></td>
                                                            <td><?=$value->r5?></td>
                                                            <td><?=$value->s5?></td>
                                                            <td><?=$value->t5?></td>
                                                            <td><?=$value->n6?></td>
                                                            <td><?=$value->r6?></td>
                                                            <td><?=$value->s6?></td>
                                                            <td><?=$value->t6?></td>
                                                            <td><?=$value->n7?></td>
                                                            <td><?=$value->r7?></td>
                                                            <td><?=$value->s7?></td>
                                                            <td><?=$value->t7?></td>
                                                            <td><?=$value->n8?></td>
                                                            <td><?=$value->r8?></td>
                                                            <td><?=$value->s8?></td>
                                                            <td><?=$value->t8?></td>
                                                            <td><?=$value->n9?></td>
                                                            <td><?=$value->r9?></td>
                                                            <td><?=$value->s9?></td>
                                                            <td><?=$value->t9?></td>
                                                            <td><?=$value->n10?></td>
                                                            <td><?=$value->r10?></td>
                                                            <td><?=$value->s10?></td>
                                                            <td><?=$value->t10?></td>
                                                            <td><?=$value->tegangan_n?></td>
                                                            <td><?=$value->tegangan_r?></td>
                                                            <td><?=$value->tegangan_s?></td>
                                                            <td><?=$value->tegangan_t?></td>
                                                            <td><?=$value->beban_terukur?></td>
                                                            <td><?=$value->beban_trafo?></td>
                                                            <td><?=$value->nama?></td>
                                                            <td><?=$value->tgl_pengukuran?></td>
                                                            
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