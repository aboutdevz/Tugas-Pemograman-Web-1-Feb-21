<?= $this->extend('App\Modules\Login\Views\Templates\LoginTemplate');?>		
<?= $this->section('Content');?>


<div class="card col-12 col-md-6 col-lg-4">
    <div class="card-body text-center">
        <br><br><i class="cil-user login-icon"></i>
        <h2 class="card-title display-4">Login</h2>
        <form action="<?=base_url('Login/Login')?>" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <i class="far fa-user"></i>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
                <small id="emailHelp" class="form-text text-muted">Enter Your Username</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <small id="emailHelp" class="form-text text-muted">Enter Your Password</small>
            </div>
            <button type="submit" class="btn btn-primary" name="submit_lgn">Login</button>
        </form>
    </div>
</div>


<?= $this->endSection();?>
	


