<style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidebar.active {
        width: 127px;
    }

    #main.open {
        margin-left: 0;
    }

    .sidebar {
        height: 100%;
        width: 127px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #2F395C;
        overflow-x: hidden;
        transition: width .5s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .close-btn {
        color: #fff;
        border: none;
        background: none;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 15px;
        right: 10px;
        display: none;
        /* Sembunyikan secara default */
    }

    .sidebar a {
        font-weight: 400;
        padding-top: 45px;
        text-decoration: none;
        font-size: 14px;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }


    #main {
        transition: margin-left .5s;
        padding: 16px;
        margin-left: 127px;
        /* background-color:#FAFAFA ; */
    }

    /* Hide sidebar on smaller screens */
    @media (max-width: 768px) {
        .sidebar {
            width: 0;
        }

        #main {
            margin-left: 0;
        }

        .sidebar.active {
            width: 127px;
        }

        .close-btn {
            display: block;
            /* Tampilkan saat sidebar aktif */
        }

        .icon {
            display: none;
            position: absolute;
            top: 15px;
            left: 10px;
            z-index: 2;
        }
    }


    /* Tombol fa-bars */
    .icon {
        font-size: 24px;
        cursor: pointer;
        display: block;
    }

    /* CSS Anda lainnya */

    ul.list-unstyled.components li a span {
        font-size: 16px;
        /* Atur ukuran font sesuai kebutuhan Anda */
    }

    .top-menu,
    .bottom-menu {
        flex: 1;
        display: flex;
        flex-direction: column;   
        padding: 10px;
          
    }

</style>


<div id="mySidebar" class="sidebar">
    <button class="close-btn" onclick="closeSidebar()">&times;</button>
    <ul class="list-unstyled components">
        <div class="top-menu">
            <li>
                <a href="<?= base_url('index.php/Page/home') ?>">
                    <img src="<?= base_url('images/put_away.png') ?>" alt="Scan Ibound">
                    <span style="padding-top: 2px;">Fullfilment</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('index.php/Page/home') ?>">
                    <img src="<?= base_url('images/put_away.png') ?>" alt="Scan Ibound">
                    <span style="padding-top: 2px;">Home</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('index.php/Page/scan_inbound') ?>">
                    <img src="<?= base_url('images/scan_inbound.png') ?>" alt="Scan Ibound">
                    <span style="padding-top: 2px;">Scan Ibound</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('index.php/Page/put_away') ?>">
                    <img src="<?= base_url('images/put_away.png') ?>" alt="Put Away">
                    <span style="padding-top: 2px;">Put Away</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?= base_url('images/pick.png') ?>" alt="Pick and Pack">
                    <span style="padding-top: 2px;">Pick and Pack</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?= base_url('images/dispatcher.png') ?>" alt="Dispatcher">
                    <span style="padding-top: 2px;">Dispatcher</span>
                </a>
            </li>
        </div>

        <div class="bottom-menu">
            <li>
                <div class="garis" style="  margin-top:123px;  border: 1px white solid"></div>
            </li>
            <li>
                <a href="#">
                    <img src="<?= base_url('images/master_barang.png') ?>" alt="Dispatcher">
                    <span style="padding-top: 2px;">Master Barang</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?= base_url('images/setting.png') ?>" alt="Dispatcher">
                    <span style="padding-top: 2px;">Setting</span>
                </a>
            </li>
        </div>
    </ul>
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.querySelector(".sidebar");
        var mainContent = document.getElementById("main");

        // Toggle class 'active' pada sidebar dan 'open' pada main content
        sidebar.classList.toggle("active");
        mainContent.classList.toggle("open");
    }

    function closeSidebar() {
        var sidebar = document.querySelector(".sidebar");
        var mainContent = document.getElementById("main");

        // Hapus class 'active' pada sidebar dan 'open' pada main content
        sidebar.classList.remove("active");
        mainContent.classList.remove("open");
    }
</script>