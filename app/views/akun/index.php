<div class="container mt-3 " style="width: 430">
    <div class="card">
        <div class="card-header">
            <h3 class="text-md-center">LOGIN</h3>
        </div>
        <div class="card-body ">
            <form action="<?=BASEURL;?>/akun/login" method="POST">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                </div>
                <div class="form-check">
                    <input name="remember" class="form-check-input" type="checkbox" value="" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <div class="d-grid gap-2 col-10 mx-auto">
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
                </div>
                <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="#">Create One</a>
                </div>
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_SESSION['error']?>
                    </div>
                <?php endif;?>
                <div></div>
            </form>
        </div>
    </div>
</div>



