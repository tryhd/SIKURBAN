<!DOCTYPE html>
<html>
<head>
    <title>SIKURBAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="<?=base_url()?>img/LOGO.png"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/components.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/custom.css"/>
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>css/pages/login.css"/>
</head>
<body>
    <h1 class="text-center">
    <span class="text-black"><br>Sistem Informasi Pengukuran Beban Gardu</span>
    </h1> 
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                                <center><img src="<?=base_url()?>img/LOGO.png" style="width: 200px;
  height: 200px; ">
                        </h3>
                    </div>
                    <br>
                    <center><h3>Login</h3></center>
                    <div class="bg-black login_content login_border_radius">
                        <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                            <div role="alert" class="alert alert-danger">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                    <?=$this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>
                        <form id="login_validator" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="name" class="col-form-label"> Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_name"><i class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" value="<?=!empty($username)?$username:''?>" class="form-control  form-control-md" id="username" name="username" placeholder="Username">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" value="<?=!empty($password)?$password:''?>" id="password"   name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="<?=base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/tether.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="<?=base_url();?>vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="<?=base_url();?>js/pages/login.js"></script>
</body>

</html>