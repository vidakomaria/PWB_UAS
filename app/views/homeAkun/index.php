<div class="container mt-3 mb-3 " style="width: 600">
    <div class="card">
        <div class="card-header text-center"><h1>My Account</h1></div>
        <div class="card-body">
            <form method="POST" action="<?=BASEURL;?>/akun/edit">
                <table class="table">
                    <tbody>
                    <?php foreach ($data['akun'] as $item ){?>
                        <tr>
                            <th scope="row">Id Akun</th>
                            <td>
                                <?php $idAkun=$item['idAkun'];?>
                                <input class="form-control" type="text" name="idAkun" value='<?=$idAkun?>' required>
                            </td>
                            <td>
                                <div class="col"><a href="<?=BASEURL;?>/donasi/riwayatDonasi/<?=$idAkun;?>">
                                        <button class="btn btn-warning " type="submit">Riwayat Donasi</button></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Lengkap</th>
                            <td><input type="text" class="form-control" id="nama" name="nama" value="<?=$item['nama_lengkap']?>" required></td>
                        </tr>
                        <tr>
                            <th scope="row">Username</th>
                            <td><input type="text" class="form-control" id="username" name="username" value="<?=$item['username']?>" required></td>
                        </tr>
                        <tr>
                            <th scope="row">Password</th>
                            <td><input type="text" class="form-control" id="password" name="password" value="<?=$item['password']?>" required></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><input type="text" class="form-control" id="email" name="email" value="<?=$item['email']?>" required></td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Hp</th>
                            <td><input type="text" class="form-control" id="noHp" name="noHp" value="<?=$item['noHp']?>" required></td>
                            <td>
                                <div class="form-group d-grid gap-2 mx-auto"><a href="<?=BASEURL;?>/akun/edit">
                                        <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Edit</button></a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
