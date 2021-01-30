<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('themes/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">لوحة التحكم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('themes/admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          <a href="{{ route('logout') }}" class="d-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">خروج</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </div>
      </div>

   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              المستخدمين
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @can('viewAny', App\User::class)
            <li class="nav-item">
                <a href="/admin/users" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض المستخدمين</p>
                </a>
              </li>
            @endcan 
            @can('viewAny', App\Models\Role::class) 
              <li class="nav-item">
                <a href="/admin/roles" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الآدوار</p>
                </a>
              </li>
            @endcan  
            @can('viewAny', App\Models\Permission::class)
              <li class="nav-item">
                <a href="/admin/permissions" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الصلاحيات</p>
                </a>
              </li>
            @endcan  
            </ul>
          </li>
        </ul>
          <ul class="nav nav-pills nav-sidebar flex-column">
        @can('viewAny', App\Models\Post::class)

              <li class="nav-item">
                <a href="/admin/news" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>ألاخبار</p>
                </a>
              </li>
        @endcan 
        @can('viewAny', App\Models\Photo::class)
              <li class="nav-item">
                <a href="/admin/photos" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>مكتبة الصور</p>
                </a>
              </li>  
        @endcan   
        @can('viewAny', App\Models\Video::class)
              <li class="nav-item">
                <a href="/admin/videos" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>مكتبة الفيديو</p>
                </a>
              </li>  
        @endcan  
        @can('viewAny', App\Models\Page::class)
              <li class="nav-item">
                <a href="/admin/pages" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>الصفحات</p>
                </a>
              </li>  
        @endcan  
        @can('viewAny', App\Models\Number::class)
              <li class="nav-item">
                <a href="/admin/numbers" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>الأرقام</p>
                </a>
              </li>  
        @endcan 
        @can('viewAny', App\Models\Slider::class)
              <li class="nav-item">
                <a href="/admin/slider" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>البانرات</p>
                </a>
              </li>  
          @endcan 

          <li class="nav-item">
                <a href="/admin/contacts" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>التواصل</p>
                </a>
              </li> 
       

          <li class="nav-item">
                <a href="/admin/sponsers" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>رعاة الجمعية</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="/admin/reviews" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>قالو عنا</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/greetings" class="nav-link active">
                  <i class="fas fa-globe nav-icon"></i>
                  <p>الأهدائات</p>
                </a>
              </li>
          </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>