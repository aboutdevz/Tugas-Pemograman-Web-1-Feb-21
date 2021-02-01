<nav class="c-sidebar bg-gradient-success c-sidebar-lg-show sidebar-toggler" id="sidebar">
	<div class="c-sidebar-header">
		
		<h3>Penilaian web</h3>
	</div>
	<ul class="c-sidebar-nav">
		<li class="c-sidebar-nav-title">Dashboard</li>
		<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link <?=$Hsidebar?>" href="<?=base_url('Home')?>">
				<i class="c-sidebar-nav-icon cil-speedometer"></i>Home
			</a>
		</li>
		<li class="c-sidebar-nav-title">Input</li>
		<li class="c-sidebar-nav-item">
      		<a class="c-sidebar-nav-link <?=$Gsidebar?>" href="<?=base_url('Guru')?>">
      		  <i class="c-sidebar-nav-icon cil-user"></i> Input Guru
      		</a>
    	</li>
		<li class="c-sidebar-nav-item">
      		<a class="c-sidebar-nav-link <?=$Psidebar?>" href="<?=base_url('Pelajaran')?>">
      		  <i class="c-sidebar-nav-icon cil-school"></i> Input Pelajaran
      		</a>
		</li>
		
		<li class="c-sidebar-nav-item">
      		<a class="c-sidebar-nav-link <?=$Ssidebar?>" href="<?=base_url('Siswa')?>">
      		  <i class="c-sidebar-nav-icon cil-people"></i> Input Siswa
      		</a>
		</li>
		

		<li class="c-sidebar-nav-item">
      		<a class="c-sidebar-nav-link <?=$SNsidebar?>" href="<?=base_url('Siswa/NilaiSiswa')?>">
      		  <i class="c-sidebar-nav-icon cil-graph"></i> Input Nilai Siswa
      		</a>
    	</li>
	</ul>
</nav>