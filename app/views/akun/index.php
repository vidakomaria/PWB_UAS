<div class="container mt-3 mb-3 " style="width: 450">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="text-md-center">LOGIN</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="<?=BASEURL;?>/akun/login">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="" type="checkbox" value="" id="remember" required>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="form-group d-grid gap-2 col-10 mx-auto">
                    <button class="btn btn-primary btn-lg btn-block" type="submit"><a href=""></a>Login</button>
                </div>
                <?php if (isset($_SESSION['error'])){
                    if ($_SESSION['error']===true){ ?>
                        <div class="alert alert-danger" role="alert">
                            <h6>Maaf Username dan Password Salah</h6>
                        </div>
                    <?php }}?>
            </form>
        </div>
        <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="<?=BASEURL;?>/createakun">Create One</a>
        </div>
    </div>
</div>