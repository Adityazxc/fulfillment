<style>
    /* Tambahkan gaya CSS berikut untuk menambahkan padding pada nav-item */
    .nav-item {
        padding: 0 10px 0 53px;
        float: right;
        /* Sesuaikan nilai padding sesuai kebutuhan Anda */
    }

    .container-navbar {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;       
        display: flex;
        justify-content: flex-end;
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

    .name-user {
        color: #000;
        font-family: Noto Sans;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .name-role {
        color: #000;
        font-family: Noto Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
</style>


<!-- Brand -->
<?php if ($navbarConfig['show_back_link']): ?>
    <a class="navbar-brand" href="<?= base_url($navbarConfig['back_link']) ?>">Back</a>
<?php endif; ?>

<!-- Navbar links -->

<ul class="container-navbar">
    <li class="nav-item">
        <img src="<?= base_url('images/notification.png') ?>" alt="notification">
    </li>
    <li class="nav-item">
        <div class="row">
            <h3 class="name-user">Asep</h3>
        </div>

        <div class="row">
            <h3 class="name-role">Admin</h3>
        </div>
    </li>
    <li class="nav-item">
        <img src="<?= base_url('images/avatar.png') ?>" alt="notification" width="50px">
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