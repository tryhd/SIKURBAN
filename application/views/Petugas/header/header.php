<div id="left">
   <div class="media user-media bg-dark dker">
      <div class="user-media-toggleHover">
         <span class="fa fa-user"></span>
      </div>
      <div class="user-wrapper bg-blue">
         <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
               src="<?=base_url()?>img/admin.jpg">
            <p class="text-white user-info">Selamat Datang Petugas </p>
         </a>

      </div>
   </div>
   <!-- #menu -->
   <ul id="menu" class="bg-blue blue">
      <li class="<?php if (uri_string() == 'Petugas/dashboardPetugas') echo "active";?>">
          <a href="<?=base_url('Petugas/dashboardPetugas')?>">
         <i class="fa fa-home"></i>
         <span class="link-title">&nbsp;Dashboard</span>
         </a>
      </li>
   <li class="<?php if (uri_string() == 'tambah-ukurp' || uri_string() == 'tampil-ukurp' ) echo "active";?>">
         <a href="#">
         <i class="fa fa-user"></i>
         <span class="link-title">&nbsp;Pengukuran</span>
         <span class="fa arrow"></span>
         </a>
         <ul>
         <li class="<?php if (uri_string() == 'tambah-ukurp') echo "active";?>">
                <a href="<?=base_url('tambah-ukurp')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Tambah Pengukuran
               </a>
            </li>
            <li class="<?php if (uri_string() == 'tampil-ukurp') echo "active";?>">
               <a href="<?=base_url('tampil-ukurp')?>">
               <i class="fa fa-angle-right"></i> &nbsp;Tampil Pengukuran
               </a>
            </li>
         </ul>
      </li>
   </ul>
   <!-- /#menu -->
</div>

