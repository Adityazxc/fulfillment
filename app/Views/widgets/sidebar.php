<style>
     html, body {
        height: 100%;
        margin: 0;
    }
    #sideBar {
        flex:1;
        height: 100vh;
        background-color: #2F395C;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: #fff;
        
        
    }

    #sideBar a {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-top: 58px;
        padding: 8px;
        color: #fff;
        /* Teks warna putih */
        text-decoration: none;
        /* Menghapus garis bawah default pada tautan */
    }

    #sideBar img {
        max-width: 100%;
        /* Make sure the image doesn't exceed the container width */
        height: auto;
        margin: 0 auto;
        /* Center the image horizontally */
        display: block;
    }

    #content {    
        height: 100%;
        flex:1; 
        flex-direction: column;
        align-items: center;        
        

    }

    .image_home {
        position: relative;
        width: 100px;
        height: 100px;
    }

    .image_one,
    .image_two {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    #imageOne {
        z-index: 1;
    }

    #imageTwo {
        z-index: 0;
        
    }
</style>

<nav id="sideBar" class="col-sm-1">
    <div class="sidebar-header">
        <div class="image_home">
            <div class="image_one">
                <img src="<?= base_url('images/bg_home.png') ?>" alt="Scan Ibound">
            </div>
            <div class="image_two">
                <img src="<?= base_url('images/home.png') ?>" alt="Scan Ibound">
            </div>
        </div>
        <span>Fulfillment</span>
    </div>
    <ul class="list-unstyled components">
        <li>
            <a href="<?= base_url('index.php/Page/home')?>">
                <img src="<?= base_url('images/put_away.png') ?>" alt="Scan Ibound">
                <span style="padding-top: 8px;">Home</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('index.php/Page/scan_inbound') ?>">
                <img src="<?= base_url('images/scan_inbound.png') ?>" alt="Scan Ibound">
                <span style="padding-top: 8px;">Scan Ibound</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('index.php/Page/put_away') ?>">
                <img src="<?= base_url('images/put_away.png') ?>" alt="Put Away">
                <span style="padding-top: 8px;">Put Away</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?= base_url('images/pick.png') ?>" alt="Pick and Pack">
                <span style="padding-top: 8px;">Pick and Pack</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?= base_url('images/dispatcher.png') ?>" alt="Dispatcher">
                <span style="padding-top: 8px;">Dispatcher</span>
            </a>
        </li>

    </ul>
</nav>