<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-black">
         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url()?>gbr/LOGO.png">
            <p class="text-white user-info">Selamat Datang Admin </p>
         </a>

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue blue">
      <li class="<?php if (uri_string() == 'dashboard') echo "active";?>">
          <a href="<?=base_url('index.php/dashboard')?>">
         <i class="fa fa-home"></i>
         <span class="link-title">&nbsp;Dashboard</span>
         </a>
      </li>
      
      <li class="<?php if (uri_string() == 'tampil-gardu' || uri_string() == 'tambah-gardu' || uri_string() == 'tampil-trafo' ||  uri_string() == 'tampil-penyulang' ||  uri_string() == 'tampil-user' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp; Data Master</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'tampil-gardu') echo "active";?>">
                <a href="<?=base_url('tampil-gardu')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Gardu
               </a>
            </li>
			 <li class="<?php if (uri_string() == 'tampil-trafo') echo "active";?>">
               <a href="<?=base_url('tampil-trafo')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Trafo
               </a>
            </li>
          <li class="<?php if (uri_string() == 'tampil-penyulang') echo "active";?>">
               <a href="<?=base_url('tampil-penyulang')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Penyulang
               </a>
            </li>
          <li class="<?php if (uri_string() == 'tampil-user') echo "active";?>">
               <a href="<?=base_url('tampil-user')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data User
               </a>
            </li>    
         </ul>
      </li>
	  
   <li class="<?php if (uri_string() == 'tambah-pengukuran' || uri_string() == 'tampil-pengukuran' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp;Pengukuran</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
         <li class="<?php if (uri_string() == 'tambah-pengukuran') echo "active";?>">
                <a href="<?=base_url('tambah-pengukuran     ')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Tambah Pengukuran
               </a>
            </li>
            <li class="<?php if (uri_string() == 'tampil-pengukuran') echo "active";?>">
               <a href="<?=base_url('tampil-pengukuran')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Tampil Pengukuran
               </a>
            </li>
         </ul>
      </li>
      
   </ul>
   <!-- /#menu -->
</div>

