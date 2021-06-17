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
        </header>
        <article class="m-b-40">
         <p class="m-0">Kami berkomitmen melindungi privasi online Anda dengan tidak menyewakan, menjual atau menukarkan alamat email dan nomor ponsel Anda.</p>
    </article>
</div>

<?php
$message = "";

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"])){
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$data = "INSERT INTO user(name, email, phone) VALUE (:name, :email, :phone)";
$statement = $connection ->prepare($data);
if ($statement ->execute([":name" => $name, ":email"=>$email, ":phone-number"=>$phone-number])){
    $message = "Pendaftaran Berhasil";
}
}
?>

<div class="container">
<div class="card">
    <div class="card-body">
        <?php if (!empty($message)): ?>
        <div class="alert alert-success">
            <?= $message ?>
        </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Nomor Handphone</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info mt-3">Daftar</button>
            </div>
        </form>
    </div>
</div>
</div>

    </div>
  </div>
</section>
