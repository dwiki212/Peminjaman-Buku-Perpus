<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav flex-row align-items-center ms-auto">
            <h5 class="mb-0 me-2 d-none d-lg-block">{{ auth()->user()->name }}</h5>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online ">
                        {{-- @if (auth()->user()->image)
                            <img src="{{ asset('storage/' . auth()->user()->image) }}" alt
                                class="w-px-40 h-auto rounded-circle img-fluid img-fit" />
                        @else --}}
                        <img src="/img/temp/user-temp.png" alt class="w-px-40 h-auto rounded-circle img-fit" />
                        {{-- @endif --}}
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        {{-- @if (auth()->user()->image)
                                            <img src="{{ asset('storage/' . auth()->user()->image) }}" alt
                                                class="w-px-40 h-auto rounded-circle img-fit" />
                                        @else --}}
                                        <img src="/img/temp/user-temp.png" alt
                                            class="w-px-40 h-auto rounded-circle img-fit" />
                                        {{-- @endif --}}
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="../">
                            <i class="bx bx-globe me-2"></i>
                            <span class="align-middle">Website</span>
                            <i class='bx bxs-arrow-from-left ms-3'></i>

                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
  </nav>