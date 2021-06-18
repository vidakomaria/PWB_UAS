<div class="container">
	<div class="row">
		<div class="col">
      <div class="card-header text-md-center">
        <h1>Ikuti Perkembangan Donasi Anda</h1>
        <h5>Ketahui Bagaimana Donasi Anda Berdampak Pada Anak-Anak Indonesia</h5>
      </div>
     <img src="<?=BASEURL;?>/img/children.jpg" alt="Perkembangan Donasi" class="card-img-top mx-auto d-block rounded shadow m-3" style="width: 90%">
		</div>
	</div>
</div>
<div class="container">
  <div class="card-header text-md-center">
    <p>
        Daftarkan diri Anda untuk membantu mereka. <br>
      Bergabung bersama kami untuk terus mendapatkan cerita perubahan dari Anak-anak Indonesia dan kegiatan <span>WeCareIndo</span> lainnya.
      Ketahui bagaimana donasi anda membawa perubahan nyata bagi hidup mereka.
    </p>
  </div>

</div>
<section class="clearfix bg-white p-ver-40">
  <div class="container">
    <div class="row text-md-center m-3">
        <header>
          <h2 class="text-uppercase text-primary m-t-0 m-b-40">PRIVACY POLICY<br> </h2>
        </header>
        <article class="m-b-40">
         <p class="m-0">Kami berkomitmen melindungi privasi online Anda dengan tidak menyewakan, menjual atau <br>menukarkan alamat email dan nomor ponsel Anda.<br>
           Dengan bergabung, kami akan dapat mengirimkan pesan dan pemberitahuan kepada Anda dikemudian hari.
         </p>
    </article>
</div>
<br>
<section>
    <div class="container mt-3 " style="width: 430">
        <div class="card">
            <div class="card-header">
                <h3 class="text-md-center">CREATE AKUN</h3>
            </div>
            <div class="card-body ">
                <div>
                    <?php if(isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$_SESSION['error']?>
                        </div>
                    <?php endif;?>
                </div>
                <form action="<?=BASEURL;?>/createAkun/" method="POST" class="needs-validation" novalidate="">
                    <div class="mb-3 form-group">
                        <input type="text" placeholder="Nama Lengkap" name="name" id="name" class="form-control" autocomplete="off">
                        <div class="invalid-feedback">
                            Username Kosong!
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" placeholder="Email" name="email" id="email" class="form-control" autocomplete="off">
                        <div class="invalid-feedback">
                            Password Kosong!
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Nomor Handphone" name="author" id="author" class="form-control">
                        <div class="invalid-feedback">
                            Nomor Kosong!
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="password" placeholder="Password" name="password" id="password" class="form-control">
                        <div class="invalid-feedback">
                            Password Kosong!
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-10 mx-auto">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
