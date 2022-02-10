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

</div>





<?= $this->endsection(); ?>