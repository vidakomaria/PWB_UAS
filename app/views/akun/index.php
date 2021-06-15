<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h1>LOGIN</h1>
            <h3>Selamat Datang <?=$data['nama'];?></h3>
        </div>
        <div class="card-body ">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <a href="register.php" class="btn btn-outline-info">Register</a>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>