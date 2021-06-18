<div class="container mt-3 mb-3 " style="width: 600">
    <div class="card">
        <div class="card-header text-center"><h1>My Account</h1></div>
        <div class="card-body">
            <table class="table">
                <tbody>
                <?php foreach ($data['akun'] as $item ){?>
                    <tr>
                        <th scope="row">Id Akun</th>
                        <td>
                            <?php $idAkun=$item['idAkun'];
                            echo $idAkun; ?>
                        </td>
                        <td>
                            <div class="col"><a href="<?=BASEURL;?>/donasi/riwayatDonasi/<?=$idAkun;?>">
                                    <button class="btn btn-warning " type="submit">Riwayat Donasi</button></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Lengkap</th>
                        <td><?=$item['nama lengkap']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Username</th>
                        <td><?=$item['username']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Password</th>
                        <td><?=$item['password']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><?=$item['email']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Nomor Hp</th>
                        <td><?=$item['noHp']?></td>
                    </tr>

                    <?php
                }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
