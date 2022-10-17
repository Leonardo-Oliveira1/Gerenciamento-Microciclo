<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/microciclo_logo.svg') }}" style="width: 40px;" alt="logo">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{ config('app.name') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>

    </div>


    <div class="menu-inner-shadow"></div>


    <ul class="menu-inner py-1">
        <li class="menu-item">
            <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown" style="margin-left: 10px; margin-top: 10px;">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    <span class="fw-semibold" style="margin-left: 6px;">Nome do usuário</span>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <div class="d-flex dropdown-item">
                        <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Nome do usuário</span>
                            <small class="text-muted">Colaborador(a)</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Encerrar sessão</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--/ User -->
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Estoque</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Itens</div>
            </a>
        </li>


        <li class="menu-item">
            <a href="categorias" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Basic">Categorias de itens</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="recipientes" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bong"></i>
                <div data-i18n="Basic">Tipos de recipientes</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="estimativas" class="menu-link">
                <i class="menu-icon tf-icons bx bx-data"></i>
                <div data-i18n="Basic">Dados para a previsão de uso de reagentes</div>
            </a>
        </li>


</aside>
