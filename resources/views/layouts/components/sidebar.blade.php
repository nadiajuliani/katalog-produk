 <div id="sidebar" class="active">
     <div class="sidebar-wrapper active">
         <div class="sidebar-header">
             <div class="d-flex justify-content-between">
                 <div class="logo">
                     <a href="">Glad2Glow</a>
                 </div>
                 <div class="toggler">
                     <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                 </div>
             </div>
         </div>
         <div class="sidebar-menu">
             <ul class="menu">
                 <li class="sidebar-title">Menu</li>
                 <hr>
                 <li class="sidebar-item active ">
                     <a href="{{ route('home') }}" class='sidebar-link'>
                         <i class="bi bi-grid-fill"></i>
                         <span>Dashboard</span>
                     </a>

                 </li>
                 <li class="sidebar-item active ">
                     <a href="{{ route('jenis.index') }}" class='sidebar-link'>
                         <i class="bi bi-grid-fill"></i>
                         <span>Jenis</span>
                     </a>
                 </li>
                 <li class="sidebar-item active ">
                     <a href="{{ route('produk.index') }}" class='sidebar-link'>
                         <i class="bi bi-grid-fill"></i>
                         <span>Produk</span>
                     </a>
                 </li>
                 <li class="sidebar-item  has-sub">
                     <a href="#" class='sidebar-link'>
                         <i class="bi bi-person-badge-fill"></i>
                         <span>Authentication</span>
                     </a>
                     <ul class="submenu ">
                         <li class="submenu-item ">
                             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-flex align-items-center gap-2 dropdown-item">
                             <p class="mb-0 fs-10">Keluar</p></a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                     @csrf
                                 </form>
                         </li>
                     </ul>
                 </li>
                 </li>
             </ul>
         </div>
         <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
     </div>
 </div>
