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
        <p class="infori-awal">Tambah Produk</p>
        <!-- <h3>Produk</h3> -->
        <p class="infori-akhir"><a href="/produk">Produk</a> / Tambah Produk</p>
    </div>

    <a href="/produk/create" class="btn btnTambah">Tambah Produk</a>


    <div style="padding: 20px;">
        <form action="/produk/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <label for="nama_produk">nama produk:</label><br>
            <input class="form-produk <?= ($validation->hasError('nama_produk'))? 'invalid' : '' ?>" type="text"
                id="fname" name="nama_produk" autofocus required value="<?= old('nama_produk'); ?>" autocomplete="off">
            <br>
            <?php if($validation->hasError('nama_produk')) :  ?>
            <div class="">
                <span style="color: red;"><?= $validation->getError('nama_produk'); ?></span>
            </div>
            <br>
            <?php endif?>




            <label for="harga">harga:</label><br>
            <input class="form-produk" type="text" id="harga" name="harga" required value="<?= old('harga'); ?>"
                autocomplete="off"><br>

            <label for="merek">merek:</label><br>
            <input class="form-produk" type="text" id="merek" name="merek" required value="<?= old('merek'); ?>"
                autocomplete="off"><br>


            <!-- <div class="laber-gambar">
                <div class="laber-gmbr">
                      <label for="merek">gambar 1 :</label>
                </div>
                <div class="laber-gmbr">
                      <label for="merek">gambar 1 :</label>
                </div>
            </div> -->
            <br>
            <div class="form-input-gambar">
                <div class="block-input-gambar">
                    <div class="laber-gmbr">
                        <label for="gambar1" class="vbn">gambar 1 :</label>
                    </div>

                    <div class="input-gambar">
                        <input class="form-produk <?= ($validation->hasError('gambar1'))? 'invalid' : '' ?>" type="file" name="gambar1" id="gambar1" onchange="priviewimg1()">
                    </div>

                    <div class="priview-gambar">
                        <img src="" alt="" class="img-priview">
                    </div>
                    <div class="" width=100%>
                        <span style="color: red;"><?= $validation->getError('gambar1'); ?></span>
                    </div>
                </div>
                <div class="block-input-gambar">
                    <div class="laber-gmbr">
                        <label for="gambar2">gambar 2 :</label>
                    </div>

                    <div class="input-gambar">
                        <input class="form-produk" type="file" name="gambar2" id="gambar2">
                    </div>

                    <div class="priview-gambar">
                        <!-- <img src="/img/ss.png" alt=""> -->
                    </div>
                </div>
            </div>
            <br>

            <div class="form-input-gambar">
                <div class="block-input-gambar">
                    <div class="laber-gmbr">
                        <label for="gambar3">gambar 3 :</label>
                    </div>

                    <div class="input-gambar">
                        <input class="form-produk" type="file" name="gambar3" id="gambar3">
                    </div>

                    <div class="priview-gambar">
                        <!-- <img src="/img/aa.png" alt=""> -->
                    </div>
                </div>
                <div class="block-input-gambar">
                    <div class="laber-gmbr">
                        <label for="gambar4">gambar 4 :</label>
                    </div>

                    <div class="input-gambar">
                        <input class="form-produk" type="file" name="gambar4" id="gambar4">
                    </div>

                    <div class="priview-gambar">
                        <!-- <img src="/img/moslemstyle.png" alt=""> -->
                    </div>
                </div>
            </div>
            <br>


            <button type="submit">Tambah Produk</button>
        </form>
    </div>





</div>





<?= $this->endsection(); ?>