<!-- Sidebar -->
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img src="{{ asset('assets/static/logo.svg') }}" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <div class="dropdown-menu dropdown-menu-demo" data-bs-theme="dark">
                    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="nav-link-title">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    @if (auth()->user()->id == 1)
                        <li
                            class="nav-item dropdown {{ request()->routeIs('user.admin.*', 'user.member.*', 'signup') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button"
                                aria-expanded="{{ request()->routeIs('user.admin.*') ? 'true' : '' }}">
                                <span class="nav-link-title">
                                    User
                                </span>
                            </a>
                            <div
                                class="dropdown-menu {{ request()->routeIs('user.admin.*', 'user.member.*', 'signup') ? 'show' : '' }}">
                                <a class="dropdown-item" href="{{ route('user.admin.index') }}">
                                    Admin
                                </a>
                                <a class="dropdown-item" href="{{ route('user.member.index') }}">
                                    Member
                                </a>
                            </div>
                        </li>
                    @endif
                    <li class="nav-item {{ request()->routeIs('submission') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="nav-link-title">
                                Submission
                            </span>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item dropdown {{ request()->routeIs('MenejemenToko.*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="false" role="button"
                            aria-expanded="{{ request()->routeIs('MenejemenToko.*') ? 'true' : '' }}">
                            <span class="nav-link-title">
                                MenejemenToko
                            </span>
                        </a>
                        <div class="dropdown-menu {{ request()->routeIs('MenejemenToko.*') ? 'show' : '' }}">
                            <a class="dropdown-item" href="{{ route('MenejemenToko.controlpanel.index') }}">
                                Jumlah Keuntungan
                            </a>
                            <a class="dropdown-item" href="{{ route('MenejemenToko.PemesananBarang.index') }}">
                                PemesananBarang (saldo)
                            </a>
                            <a class="dropdown-item" href="{{ route('MenejemenToko.expendition.index') }}">
                                Expendition
                            </a>
                            <a class="dropdown-item" href="#">
                                Source code
                            </a>
                        </div>
                    </li>
                </div>




            </ul>
        </div>
    </div>
</aside>
