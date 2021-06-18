<div class="container mt-3 mb-3 " style="width: 700: height: 700">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="text-md-center">SIGN UP</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="<?=BASEURL;?>/createakun/addAkun">
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="noHp" name="noHp" placeholder="Nomor Handphone" required>
                </div>
                <div class="form-group d-grid gap-2 col-10 mx-auto">
                    <button class="btn btn-warning btn-lg btn-block" type="submit"><a href=""></a>Sign Up</button>
                </div>
                <?php if (isset($data['error'])){?>
                    <div class="alert alert-danger" role="alert">
                        <h6>Username/Password salah</h6>
                    </div>
                <?php }?>
            </form>
        </div>
    </div>
</div>
