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
            <img src="/img/img8.jpg" alt="">
        </div>
    </div>


    <div class="infori">
        <!-- <h4>Produk</h4>/<h4>home</h4> -->
        <p class="infori-awal">Ubah Produk</p>
        <!-- <h3>Produk</h3> -->
        <p class="infori-akhir"><a href="/produk">Produk</a> / Ubah Produk</p>
    </div>

    <a href="/produk/create" class="btn btnTambah">ubah Produk</a>

    <div style="padding: 20px;">
    <form action="/produk/update/<?= $produk['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <label for="nama_produk">nama produk:</label><br>
        <input type="text" id="fname" name="nama_produk" autofocus required value="<?=(old('nama_produk')) ? old('nama_produk') : $produk['nama_produk'];   ?>">
        <br>
        <?php if($validation->hasError('nama_produk')) :  ?>
            <div class="">
                <span style="color: rebeccapurple;"><?= $validation->getError('nama_produk'); ?></span>
            </div>
            <br>
        <?php endif?>

        
        

        <label for="harga">harga:</label><br>
        <input type="text" id="harga" name="harga"  required value="<?=(old('harga')) ? old('harga') : $produk['harga'];   ?>"><br>

        <label for="merek">merek:</label><br>
        <input type="text" id="merek" name="merek" required  value="<?=(old('merek')) ? old('merek') : $produk['merek'];   ?>"><br><br>

        <button type="submit">Tambah Produk</button>
    </form> 
    </div>





</div>





<?= $this->endsection(); ?>