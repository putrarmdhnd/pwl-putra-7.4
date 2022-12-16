<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
    @include('adminlte::partials.common.brand-logo-xl')
    @else
    @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}">
            @if($user->roles_id==1)
                <li class="nav-item mt-3" style="background-color: #484848;">
                    <a href="{{ route('admin.books') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Input Buku
                        </p>
                    </a>
                </li>
            @endif
            </ul>
        </nav>
    </div>

</aside>