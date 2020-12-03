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
      <img src="<?=base_url()?>img/loader.gif" style=" width: 40px;" alt="loading...">
   </div>
</div>
<div id="top">
   <!-- .navbar -->

   <nav class="navbar" style="navbar;
      background-color: bg-black;
         font-size: 18px;
         ">
     
      <div class="container-fluid m-0">
		  <a class="navbar-brand float-left text-center" href="<?=base_url()?>index.php/Rayon/dashboardRayon">
            <h4 class="text-white"><img src="<?=base_url()?>gbr/LOGO.png" class="admin_img" alt="logo">Sistem Informasi Pengukuran Beban Gardu</h4>
         </a>
         <div class="topnav dropdown-menu-right float-right">
            <div class="btn-group">
               <div class="user-settings no-bg">
                  <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                  <img src="<?=base_url()?>img/admin.jpg" class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong><?=$this->session->nama?></strong>
                  <span class="fa fa-sort-down white_bg"></span>
                  </button>
                  <div class="dropdown-menu admire_admin">
                     <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container-fluid --> 
   </nav>
   <!-- /.navbar -->
   <!-- /.head --> 
</div>

