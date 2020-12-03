<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard  Rayon | SIKURBAN</title>
    <?php
       $this->load->view('Rayon/header/link');
    ?>

</head>

<body class="body">

<div class="bg-blue" id="wrap">
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
                    <div class="col-sm-5 col-lg-6 skin_white">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
						     Dashboard
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
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
               <div class="inner bg-container">


                    <!--top section widgets-->
                    <div class="row widget_countup">
                        

                        <div class="col-12 col-sm-6 col-xl-3 media_max_573">
                            <div id="top_widget2" style="perspective: 490px; position: relative; transform-style: preserve-3d;">
                                <div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateX(0deg);">
                                    <div class="bg-success p-d-15 b_r_5" style="backface-visibility: hidden;">
                                        <div class="float-right m-t-5" style="backface-visibility: hidden;">
                                            
                                        </div>
                                        <div class="user_font" style="backface-visibility: hidden;">Gardu</div>
                                        <div id="widget_countup2" style="backface-visibility: hidden;">
                                             <?php
                                           echo count($gardu);
                                           ?>   
                                        </div>
                                        <div class="tag-white" style="backface-visibility: hidden;">
                                            
                                        </div>
                                        <div class="previous_font" style="backface-visibility: hidden;">Total Gardu</div>
                                    </div>
                                </div>

                                <div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateX(-180deg); transition: all 0.5s ease-out 0s;">
                                    <div class="bg-white b_r_5 section_border" style="backface-visibility: hidden;">
                                        <div class="p-t-l-r-15" style="backface-visibility: hidden;">
                                            <div class="float-right m-t-5 text-success" style="backface-visibility: hidden;">
                                                <i class="fa fa-shopping-cart" style="backface-visibility: hidden;"></i>
                                            </div>
                                            <div id="widget_countup22" style="backface-visibility: hidden;">1,140</div>
                                            <div style="backface-visibility: hidden;">Gardu</div>

                                        </div>

                                        <div class="row" style="backface-visibility: hidden;">
                                            <div class="col-lg-12" style="backface-visibility: hidden;">
                                                <span id="salesspark-chart" class="spark_line" style="backface-visibility: hidden;"><canvas width="232" height="48" style="display: inline-block; width: 232px; height: 48px; vertical-align: top;"></canvas></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget3" style="perspective: 490px; position: relative; transform-style: preserve-3d;">
                                <div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateX(0deg);">
                                    <div class="bg-warning p-d-15 b_r_5" style="backface-visibility: hidden;">
                                        <div class="float-right m-t-5" style="backface-visibility: hidden;">
                                            
                                        </div>
                                        <div class="user_font" style="backface-visibility: hidden;">Trafo</div>
                                        <div id="widget_countup3" style="backface-visibility: hidden;">
                                             <?php
                                           echo count($trafo);
                                           ?>   

                                        </div>
                                        <div class="tag-white " style="backface-visibility: hidden;">
                                        </div>
                                        <div class="previous_font" style="backface-visibility: hidden;">Total Trafo</div>
                                    </div>
                                </div>

                                <div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateX(-180deg); transition: all 0.5s ease-out 0s;">
                                    <div class="bg-white b_r_5 section_border" style="backface-visibility: hidden;">
                                        <div class="p-t-l-r-15" style="backface-visibility: hidden;">
                                            <div class="float-right m-t-5 text-warning" style="backface-visibility: hidden;">
                                                
                                            </div>
                                            <div id="widget_countup32" style="backface-visibility: hidden;">85</div>
                                            <div style="backface-visibility: hidden;">Trafo</div>
                                        </div>

                                        <div class="row" style="backface-visibility: hidden;">
                                            <div class="col-lg-12" style="backface-visibility: hidden;">
                                                <span id="mousespeed" class="spark_line" style="backface-visibility: hidden;"><canvas width="242" height="48" style="display: inline-block; width: 242.25px; height: 48px; vertical-align: top;"></canvas></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-xl-3 media_max_1199">
                            <div id="top_widget4" style="perspective: 494px; position: relative; transform-style: preserve-3d;">
                                <div class="front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out 0s;">
                                    <div class="bg-danger p-d-15 b_r_5" style="backface-visibility: hidden;">
                                        <div class="float-right m-t-5" style="backface-visibility: hidden;"> 
                                        </div>
                                        <div class="user_font" style="backface-visibility: hidden;">Pengukuran</div>
                                        <div id="widget_countup4" style="backface-visibility: hidden;">
                                            
                                             <?php
                                           echo count($pengukuran);
                                           ?>   
                                        </div>
                                        <div class="tag-white" style="backface-visibility: hidden;">
                                        </div>
                                        <div class="previous_font" style="backface-visibility: hidden;">Total Pengukuran </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- /#content -->
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


</body>
</html>
