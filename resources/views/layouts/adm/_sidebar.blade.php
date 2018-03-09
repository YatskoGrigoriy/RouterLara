<section class="sidebar">



    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Роли</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Админ</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Меню Сайта</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                {{--<li><a href="{{route('posts.create')}}">Посты</a></li>--}}
                {{--<li><a href="{{route('category.create')}}">Категории</a></li>--}}
                <li><a href="{{route('my.create')}}">Меню</a></li>
                <li><a href="{{route('sli.create')}}">ТопСлайдер</a></li>
                <li><a href="#">Домофоны</a></li>
                <li><a href="/">Роутеры</a></li>
                <li><a href="{{route('iptv.create')}}">IPTV</a></li>
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>