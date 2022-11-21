<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="/dashboard"><img src="/templates/dist/assets/images/logo/logo.png" alt="Logo"
                        srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            {{-- Dashboard --}}
            <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="bi
                        bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- End Dashboard --}}


            {{-- Kategori --}}
            <li class="sidebar-title ">Kategori</li>

            <li class="sidebar-item has-sub  {{ request()->is('kategori') ? 'active' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Kategori</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item  {{ request()->is('kategori') ? 'active' : '' }} ">
                        <a href="/kategori">
                            List Kategori
                        </a>
                    </li>
                    <li class="submenu-item ">
                        <a href="/kategori/tambah">Tambah Kategori</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Table</span>
                </a>
            </li> --}}

            {{-- End Kategori --}}

            <li class="sidebar-title">Dokumen</li>


            <li class="sidebar-item  ">
                <a href="table-datatable.html" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Dokumen</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="table-datatable.html" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Dokumen Pending</span>
                </a>
            </li>


            <li class="sidebar-item  ">
                <a href="ui-file-uploader.html" class='sidebar-link'>
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                    <span>Upload Dokumen</span>
                </a>
            </li>

            <li class="sidebar-title">Authentication</li>


            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Authentication</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="auth-login.html">User</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-register.html">Role</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item  ">
                <a href="application-chat.html" class='sidebar-link'>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Chat Application</span>
                </a>
            </li>


            <li class="sidebar-title">Account</li>

            <li class="sidebar-item">
                <a class='sidebar-link' href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-lock"></i>
                    <span>{{ __('Logout') }}</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
{{-- <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">{% for sidebarItem in sidebarItems %}{% if sidebarItem.isTitle %}
            <li class="sidebar-title">{{sidebarItem.name}}</li>
            {% else %}
            <li class="sidebar-item {{ 'active' if (sidebarItem.url == filename or filename|startsWith(sidebarItem.key)) }} {{'has-sub' if sidebarItem.submenu.length > 0 }}">
                <a href="{{sidebarItem.url if sidebarItem.url!==undefined else '#'}}" class='sidebar-link'>
                    <i class="bi bi-{{ sidebarItem.icon }}"></i>
                    <span>{{sidebarItem.name}}</span>
                </a>{% if sidebarItem.submenu.length > 0 %}
                <ul class="submenu {{ 'active' if (sub.url == filename or filename|startsWith(sidebarItem.key)) }}">{% for sub in sidebarItem.submenu %}
                    <li class="submenu-item {{ 'active' if sub.url == filename }}">
                        <a href="{{ sub.url }}">{{ sub.name }}</a>
                    </li>{% endfor %}
                </ul>{% endif %}
            </li>
            {% endif %}{% endfor %}
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div> --}}
