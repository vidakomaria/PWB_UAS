
<div class="container mt-3 mb-3 " style="height: 100%">
    <div class="card">
        <div class="card-header text-center"><h2>Riwayat Donasi</h2></div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr class="text-center table-success">
                    <th scope="col">Id Donasi</th>
                    <th scope="col">Id Akun</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['donasi'] as $item){?>
                    <tr>
                        <td><?=$item['idDonasi']?></td>
                        <td><?=$item['idAkun']?></td>
                        <td><?=$item['tanggal']?></td>
                        <td>Rp. <?=$item['jumlah']?></td>
                        <td><?=$item['keterangan']?></td>
                    </tr>
                    <?php
                }?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php
