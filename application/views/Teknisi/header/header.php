<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-blue">
         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url()?>img/admin.jpg">
            <p class="text-white user-info">Selamat Datang Teknisi</p>
         </a>

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue blue">
      <li class="<?php if (uri_string() == 'Teknisi/dashboardTeknisi') echo "active";?>">
          <a href="<?=base_url('Teknisi/dashboardTeknisi')?>">
         <i class="fa fa-home"></i>
         <span class="link-title">&nbsp;Dashboard</span>
         </a>
      </li>
      
      <li class="<?php if (uri_string() == 'tampil-garduT' || uri_string() == 'tampil-trafoT' || uri_string() == 'tampil-penyulangT' || uri_string() == 'tampil-pengukuranT') echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp;Data Master</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'tampil-garduT') echo "active";?>">
                <a href="<?=base_url('tampil-garduT')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Gardu
               </a>
            </li>
			<li class="<?php if (uri_string() == 'tampil-trafoT') echo "active";?>">
               <a href="<?=base_url('tampil-trafoT')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Trafo
               </a>
            </li>
          <li class="<?php if (uri_string() == 'tampil-penyulangT') echo "active";?>">
               <a href="<?=base_url('tampil-penyulangT')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Penyulang
               </a>
            </li>
             
         </ul>
      </li>
  
  <li class="<?php if (uri_string() == 'tampil-ukurT' || uri_string() == 'cetak-pengukuranT' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp;Pengukuran</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'tampil-ukurT') echo "active";?>">
               <a href="<?=base_url('tampil-ukurT')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Pengukuran
               </a>
            </li>
         </ul>
      </li>
      
   </ul>
   <!-- /#menu -->
</div>

