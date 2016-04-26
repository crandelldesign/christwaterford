<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="{{(isset($active_page)) && ($active_page == 'add-event')?'active':''}}"><a href="{{url('/admin/events/add')}}"><span>Add an Event</span></a></li>
            <li class="{{(isset($active_page)) && ($active_page == 'edit-event')?'active':''}}"><a href="{{url('/admin/events')}}"><span>Edit Events</span></a></li>
            <!--<li class="treeview {{(isset($active_page)) && ($active_page == 'products')?'active':''}}">
                <a href="#"><span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/')}}/admin/products">Edit Product Categories</a></li>
                </ul>
            </li>-->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>