<?= $this->extend('layout/master'); ?>

<?= $this->section('content'); ?>
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <!-- search -->
        <div class="search">
            <label>
                <input type="text" placeholder="Search">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
        <!-- user img -->
        <div class="user">
            <img src="img/img8.jpg" alt="">
        </div>
    </div>


    <div class="infori">
        <!-- <h4>Produk</h4>/<h4>home</h4> -->
        <p class="infori-awal">Produk</p>
        <!-- <h3>Produk</h3> -->
        <p class="infori-akhir"><a href="/produk">Produk</a> / Produk</p>
    </div>

    <a href="/produk/create" class="btn btnTambah">Tambah Produk</a>

    <div class="details produk">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>
                    Recent Orders
                </h2>
                <a href="" class="btn">View All</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>nama produk</td>
                        <td>kategori</td>
                        <td>harga</td>
                        <td>gambar 1</td>
                        <td>gambar 2</td>
                        <td>gambar 3</td>
                        <td>gambar 4</td>
                        <td class="table-action">action</td>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produk as $key => $produk) : ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td><?= $produk['nama_produk']; ?></td>
                        <td><?= $produk['id_kategori']; ?></td>
                        <td><?= $produk['harga']; ?></td>
                        <td><img src="/img/tes/moslemstyle.png" alt="" width="100px"><?= $produk['gambar1']; ?></td>
                        <td><img src="/img/tes/moslemstyle.png" alt="" width="100px"><?= $produk['gambar1']; ?></td>
                        <td><img src="/img/tes/moslemstyle.png" alt="" width="100px"><?= $produk['gambar1']; ?></td>
                        <td><img src="/img/tes/cc.png" alt="" width="100px"><?= $produk['gambar1']; ?></td>
                       
                        <td class="table-action">
                            <a href="" class="btn btn-edit">edit</a>
                            <a href="" class="btn btn-hapus">hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                   
                </tbody>
            </table>
        </div>

    </div>



</div>





<?= $this->endsection(); ?>