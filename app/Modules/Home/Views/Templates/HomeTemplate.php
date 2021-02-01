<?= $this->include('header');?>


<?= $this->include('sidebar');?>
<div class="c-wrapper">
    <?= $this->include('navbar')?>

	<div class="c-main">
		<div class="container-fluid">
			
			
			<?= $this->renderSection('Content');?> 
			
        </div>
	</div>
	
	
</div>

<div class="c-footer">
	&copy  <b class="text-info ml-2">Fikri Husen Badjeber   XII RPL 2 2020</b>
</div>


<?= $this->include('footer');?>