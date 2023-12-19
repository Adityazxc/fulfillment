<style>
    /* Tambahkan gaya CSS berikut untuk menambahkan padding pada nav-item */
    .nav-item {
        padding: 0 10px 0 53px;
        /* Sesuaikan nilai padding sesuai kebutuhan Anda */
    }

    .dropbtn {                 
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;        
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>

<nav class="navbar navbar-expand-md bg-white">
    <!-- Brand -->
    <?php if ($navbarConfig['show_back_link']): ?>
        <a class="navbar-brand" href="<?= base_url($navbarConfig['back_link']) ?>">Back</a>
    <?php endif; ?>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <h3>
            <?= $navbarConfig['page_title'] ?>
        </h3>


        <!-- Links on the right side -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <img src="<?= base_url('images/notification.png') ?>" alt="notification">
            </li>
            <li class="nav-item">
                <h3>Asep</h3>
            </li>
            <li>
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn">></button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>