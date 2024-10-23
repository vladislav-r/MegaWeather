<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <span class="brand-text font-weight-light">Атмосфера - админ панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{route('admin.users.index')}}" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Пользователи</p>
                    </a>
                </li>
                <li class="nav-header"></li>

                <li class="nav-item">
                    <a href="{{route('admin.schedule.index')}}" class="nav-link">
                        <i class="fas fa-calendar-alt nav-icon"></i>
                        <p>Расписание занятий</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.schedule.timeslots.index')}}" class="nav-link">
                        <i class="fas fa-clock nav-icon"></i>
                        <p>Слоты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.schedule.trainers.index')}}" class="nav-link">
                        <i class="fas fa-user-ninja nav-icon"></i>
                        <p>Тренеры</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.schedule.rooms.index')}}" class="nav-link">
                        <i class="fas fa-building nav-icon"></i>
                        <p>Залы</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.schedule.fitness-classes.index')}}" class="nav-link">
                        <i class="fas fa-skiing-nordic nav-icon"></i>
                        <p>Виды занятий</p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{route('admin.club_cards.index')}}" class="nav-link">
                        <i class="fas fa-address-card nav-icon"></i>
                        <p>Клубные карты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.faq.categories.index')}}" class="nav-link">
                        <i class="fas fa-address-card nav-icon"></i>
                        <p>Категории FAQ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.faq.items.index')}}" class="nav-link">
                        <i class="fas fa-address-card nav-icon"></i>
                        <p>Элементы FAQ</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
