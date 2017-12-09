<div class="sidebar" data-background-color="white" data-active-color="info">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard" class="simple-text">
                    Koordinator Panel
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                    <br>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>koordinator/Pengajuan">
                        <i class="ti-view-list-alt"></i>
                        <p>Pengajuan Judul TA</p>
                    </a>
                    <br>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>koordinator/Pendaftar_senpro">
                        <i class="ti-view-list-alt"></i>
                        <p>Pendaftar Sempro</p>
                    </a>
                    <br>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>koordinator/Jadwal_sidang">
                        <i class="ti-pencil-alt2"></i>
                        <p>Jadwal Sidang</p>
                    </a>
                    <br>
                </li>
                <li>
                    <br>
                </li>
                <li>
                <p>
                    <br><br><br>
                </p>
                </li>

                <li class="active-pro">
                    <a href="<?php echo base_url(); ?>karyawan_login/logout">
                        <i class="ti-export"></i>
                        <p>LogOut</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>