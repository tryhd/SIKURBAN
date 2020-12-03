<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-blue">
         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url()?>img/admin.jpg">
            <p class="text-white user-info">Selamat Datang Rayon</p>
         </a>

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue blue">
      <li class="<?php if (uri_string() == 'Rayon/dashboardRayon') echo "active";?>">
          <a href="<?=base_url('Rayon/dashboardRayon')?>">
         <i class="fa fa-home"></i>
         <span class="link-title">&nbsp;Dashboard</span>
         </a>
      </li>
      
      <li class="<?php if (uri_string() == 'tampil-garduR' || uri_string() == 'tampil-trafoR' || uri_string() == 'tampil-penyulangR') echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp;Data Master</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'tampil-garduR') echo "active";?>">
                <a href="<?=base_url('tampil-garduR')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Gardu
               </a>
            </li>
            <li class="<?php if (uri_string() == 'tampil-trafoR') echo "active";?>">
               <a href="<?=base_url('tampil-trafoR')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Trafo
               </a>
            </li>
            
         </ul>
      </li>
  
   <li class="<?php if (uri_string() == 'tampil-ukurR' || uri_string() == 'cetak-pengukuranR' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp;Pengukuran</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
            <li class="<?php if (uri_string() == 'tampil-ukurR') echo "active";?>">
               <a href="<?=base_url('tampil-ukurR')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Data Pengukuran
               </a>
            </li>
         </ul>
      </li>
   </ul>
   <!-- /#menu -->
</div>

