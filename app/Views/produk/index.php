<?= $this->extend('layout/master'); ?>

<?= $this->section('content'); ?>
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <!-- search -->
        <div class="search">
            <form action="" method="get">
            <label>
                <input type="text" placeholder="Search" name="keyword" id="keyword">
                <ion-icon name="search-outline"></ion-icon>
            </label>
            <button type="submit" id="btnKeyword" style="display: none;"></button>
            </form>
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
                        <td width= 2%>No</td>
                        <td>nama produk</td>
                        <td>kategori</td>
                        <td>harga</td>
                        <td>merek</td>
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
                        <td width= 2%><?= $key+1+(5*($curentPage -1)) ?></td>
                        <td><?= $produk['nama_produk']; ?></td>
                        <td><?= $produk['id_kategori']; ?></td>
                        <td><?= $produk['harga']; ?></td>
                        <td><?= $produk['merek']; ?></td>
                        <td class="ff"><img src="/img/produk/<?= $produk['gambar1']; ?>" alt="" width="30px"></td>
                        <td><img src="/img/tes/moslemstyle.png" alt="" width="20px"></td>
                        <td><img src="/img/tes/moslemstyle.png" alt="" width="20px"></td>
                        <td><img src="/img/tes/cc.png" alt="" width="20px"></td>
                       
                        <td class="table-action">
                            <?= csrf_field(); ?>
                            <a href="/produk/edit/<?= $produk['id']; ?>" class="btn btn-edit">edit</a>
                            <form action="/produk/delete/<?= $produk['id']; ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            
                            <button style="width: 100%; border:none; cursor:pointer;" type="submit"  class="btn btn-hapus" onclick="return confirm('yakin mau di hapus sayang?')">hapus</button>
                            </form>
                            <!-- <a href="">hapus</a> -->
                        </td>
                    </tr>
                    <?php endforeach ?>
                   
                </tbody>
            </table>
        </div>

    </div>
    <div class="cv" style="display: inline;">
    <?= $pager->links('produk','produk_pagination') ?>
    </div>



</div>





<?= $this->endsection(); ?>