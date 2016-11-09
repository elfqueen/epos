<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!-- admin profile -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Tetapan</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="process.php?action=logOut"><i class="fa fa-fw fa-power-off"></i> Log Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><i class="fa fa-fw fa-home"></i> Paparan</a>
                    </li>
                    <li>
                        <a href="add-courier.php"><i class="fa fa-fw fa-plus-circle"></i> Tambah Bungkusan</a>
                    </li>
                    <li>
                        <a href="courier-list.php"><i class="fa fa-fw fa-pencil-square-o"></i> Kemaskini Bungkusan</a>
                    </li>
                    <li>
                        <a href="scan.php"><i class="fa fa-fw fa-barcode"></i> Scan Barcode</a>
                    </li>
                    <li>
                        <a href="search-edit.php"><i class="fa fa-fw fa-search"></i>   Carian</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i>Pengurus <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Informasi Pengurus</a>
                            </li>
                            <li>
                                <a href="#">Tambah Pengurus</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>