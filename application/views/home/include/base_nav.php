<header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?php echo base_url() ?>"><h3><b>My Bus</b></h3></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu"><a href="<?php echo base_url() ?>">Home</a></li>
			          <li><a href="<?php echo base_url() ?>tiket_mybus">Cari & Pesan Tiket</a></li>
			          <li class="menu"><a href="<?php echo base_url() ?>tiket_mybus/cektiket">Cek Tiket</a></li>
			          <?php if ($this->session->userdata('username')) { ?>
				      	<li class="menu-has-children"><a href="">Hai, <?php echo $this->session->userdata('nama_lengkap'); ?></a>
						<ul>
							<li><a href="<?php echo base_url() ?>profile_mybus/profilesaya/<?php echo $this->session->userdata('kd_pelanggan') ?>"><i class="fa fa-id-card"></i> Profile Saya</a></li>
							<li><a href="<?php echo base_url() ?>profile_mybus/tiketsaya/<?php echo $this->session->userdata('kd_pelanggan') ?>"><i class="fa fa-ticket"></i> Tiket Saya</a></li>
							<li><a href="<?php echo base_url() ?>login_mybus/logout"><i class="fa fa-sign-out"></i> Keluar</a></li>
						</ul>
						</li>
				      <?php }else{ ?>  
 					  <li><a href="<?php echo base_url() ?>login">Login</a></li>
				  	  <?php } ?>
			        </ul>
			      </nav>
		    	</div>
		    </div>
		  </header>