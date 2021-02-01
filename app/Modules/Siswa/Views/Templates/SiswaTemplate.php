<?= $this->include('header');?>

<?= $this->include('sidebar');?>

<div class="c-wrapper">
	<?= $this->include('navbar')?>

	<div class="c-main mt-5 mb-5 d-flex justify-content-center align-items-center">
		<div class="container-fluid ">


			<?= $this->renderSection('Content');?>

		</div>
	</div>


	<div class="c-footer">
		&copy <b class="text-info ml-2">Fikri Husen Badjeber XII RPL 2 2020</b>
	</div>
</div>



<?= $this->include('footer');?>