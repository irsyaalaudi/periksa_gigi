<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'user_dashboard') ? "" : "collapsed" ?>" href="user_dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard User</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'riwayat_user') ? "" : "collapsed" ?>" href="riwayat_user">
            <i class="bi bi-clock-history"></i>
                <span>Riwayat Pemeriksaan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'admin_dashboard') ? "" : "collapsed" ?>" href="admin_dashboard">
                <i class="bi bi-grid"></i>
                <span>Dasboard Admin</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'data_drg') ? "" : "collapsed" ?>" href="data_drg">
            <i class="bi bi-calendar2-event-fill"></i>
                <span>Data Dokter</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'data_pasien') ? "" : "collapsed" ?>" href="data_pasien">
            <i class="bi bi-card-list"></i>
                <span>Data Pasien</span>
            </a>
        </li>

        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'profil') ? "" : "collapsed" ?>" href="profil">
            <i class="bi bi-person-circle"></i>
                <span>Profil</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
            <i class="bi bi-question-diamond"></i>
                <span>F.A.Q</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'contact') ? "" : "collapsed" ?>" href="contact">
            <i class="bi bi-person-rolodex"></i>
                <span>Contact</span>
            </a>
        </li>


        <!-- End Produk Nav --> 
    </ul>

</aside><!-- End Sidebar-->