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
