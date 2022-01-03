<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('DashBoard') }}"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Barang</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('Products.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('Products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Foto Barang</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('Product-Galleries.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Foto Barang</a>
                </li>
                <li class="">
                    <a href="{{ route('Product-Galleries.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Barang</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="">
                    <a href="{{ route('transaction.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                </li>
                <li class="">
                    <a href="{{ route('transaction.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
