<style>
     body {
            font-family: "Lato", sans-serif;
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
            padding-top: 60px;
        }

        .sidebar a {
            font-weight: 400;            
            padding-top: 53px;
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

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        .dataTables_wrapper {
            margin-top: 47px;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            /* Adjust the margin-top value as needed */
        }

        .card-deck {
            display: inline-flex;
            flex-wrap: nowrap;
            /* Agar card-deck tidak wrap ke baris baru */
            overflow-x: auto;

        }

        .card-body {
            width: 192px;
            height: 120px;
            border-radius: 8px;
            text-decoration: none;
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

<div id="mySidebar" class="sidebar">
        <ul class="list-unstyled components">
            <li>
                <a href="<?= base_url('index.php/Page/home') ?>">
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
    </div>