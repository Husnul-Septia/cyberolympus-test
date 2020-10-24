<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                  
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{  route('users.index')}}">
                                <i class="fa fa-th"></i> <span>User</span> 
                            </a>
                        </li>
                        <li>
                            <a href="{{  route('products.index')}}">
                                <i class="fa fa-th"></i> <span>Product</span> 
                            </a>
                        </li>
                        <li>
                            <a href="{{  route('orders.index')}}">
                                <i class="fa fa-th"></i> <span>Order</span> 
                            </a>
                        </li>
                    
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>  
                            <ul class="treeview-menu">
                                <li><a href="{{  route('laporan.laporder')}}"><i class="fa fa-angle-double-right"></i>A. Laporan Order</a></li>
                                <li><a href="{{  route('laporan.lapcustomer')}}"><i class="fa fa-angle-double-right"></i>B. Laporan Customer</a></li>
                                
                                <li><a href="{{  route('laporan.laporderkeagen')}}"><i class="fa fa-angle-double-right"></i>C. Laporan Order ke Agen</a></li>

                                <li><a href="{{  route('laporan.laporanlabaagent')}}"><i class="fa fa-angle-double-right"></i>D. Laporan Laba Agen</a></li>

                                <li><a href="{{  route('laporan.laporanitemproduk')}}"><i class="fa fa-angle-double-right"></i>E. Laporan Penjualan Item Produk</a></li>
                               
                                <li><a href="{{  route('laporan.laporancategoryproduk')}}"><i class="fa fa-angle-double-right"></i>F. Laporan Penjualan Category Produk</a></li>

                                <li><a href="{{  route('laporan.topproduk')}}"><i class="fa fa-angle-double-right"></i>G. TOP PRODUK TERLARIS</a></li>
                                <li><a href="{{  route('laporan.topcustomer')}}"><i class="fa fa-angle-double-right"></i> H. TOP CUSTOMER</a></li>
                                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>  n