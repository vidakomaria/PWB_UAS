<div class="container">
	<div class="row">
		<div class="col">
      <div class="card-header">
        <h1><center>Ikuti Perkembangan Donasi Anda</center></h1>
        <h5><center>Ketahui Bagaimana Donasi Anda Berdampak Pada Anak-Anak Indonesia</center></h5>
      </div>
     <img src="img/children.jpg" alt="Perkembangan Donasi"  img-responsive style="max-width:100%;height:auto;justify-center-content">
		</div>
	</div>
</div>
<div class="container">
  <div class="card-header">
    <h1><center>Daftar Sekarang!!!</center></h1>
    <p><center>
      Bergabung bersama kami untuk terus mendapatkan cerita perubahan dari Anak-anak Indonesia dan kegiatan <span>WeCareIndo</span> lainnya.
      Ketahui bagaimana donasi anda membawa perubahan nyata bagi hidup mereka.
    </center>
    </p>
  </div>

</div>
<section class="clearfix bg-white p-ver-40">
  <div class="container"><center>
    <div class="row">
        <header>
          <h2 class="text-uppercase text-primary m-t-0 m-b-40">PRIVACY POLICY</h2>
        </header><br>
        <article class="m-b-40">
         <p class="m-0">Kami berkomitmen melindungi privasi online Anda dengan tidak menyewakan, menjual atau <br>menukarkan alamat email dan nomor ponsel Anda.<br>
           Dengan bergabung, kami akan dapat mengirimkan pesan dan pemberitahuan kepada Anda dikemudian hari.
         </p>
    </article>
</div>
<br>
<?php
$message = "";

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"])){
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$data = "INSERT INTO user(name, email, phone, password) VALUE (:name, :email, :phone, :password)";
$statement = $connection ->prepare($data);
if ($statement ->execute([":name" => $name, ":email"=>$email, ":phone-number"=>$phone-number, ":password"=>$password])){
    $message = "Pendaftaran Berhasil";
}
}
?>

<div class="container">
<div class="card">
    <div class="card-body">
      <div class="col-md-5 col-md-push-2">
        <?php if (!empty($message)): ?>
        <div class="alert alert-success">
            <?= $message ?>
        </div>
        <?php endif; ?>
        <form action="" method="post" sty>
            <div class="form-group">
              <br>
                <input type="text" placeholder="Nama Lengkap" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <br>
                <input type="email" placeholder="Email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <br>
                <input type="text" placeholder="Nomor Handphone" name="author" id="author" class="form-control">
            </div>
            <div class="form-group">
              <br>
              <input type="password" placeholder="Password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info mt-3 text-uppercase w-100 text-white" style="background-color:#000080;">Daftar</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>

    </div>
  </div>
</section>
