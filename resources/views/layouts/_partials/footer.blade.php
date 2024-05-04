<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Pixel Code Labs.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Desarrollado por Pixel Code Labs
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
<i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
<div id="status">
<div class="spinner-border text-primary avatar-sm" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
</div>
</div>

<div class="customizer-setting d-none d-md-block">
<div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
<i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
</div>
</div>

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
<div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
<h5 class="m-0 me-2 text-white">Personalizador de temas</h5>

<button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body p-0">
<div data-simplebar="" class="h-100">
    <div class="p-4">
        <h6 class="mb-0 fw-semibold text-uppercase">DISPOSICIÓN</h6>
        <p class="text-muted">Elige tu diseño</p>

        <div class="row">
            <div class="col-4">
                <div class="form-check card-radio">
                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                        <span class="d-flex gap-1 h-100">
                            <span class="flex-shrink-0">
                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                    <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                </span>
                            </span>
                            <span class="flex-grow-1">
                                <span class="d-flex h-100 flex-column">
                                    <span class="bg-light d-block p-1"></span>
                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                </span>
                            </span>
                        </span>
                    </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Vertical</h5>
            </div>
            <div class="col-4">
                <div class="form-check card-radio">
                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                        <span class="d-flex h-100 flex-column gap-1">
                            <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                <span class="d-block p-1 bg-primary-subtle text-primary  rounded me-1"></span>
                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle text-primary  ms-auto"></span>
                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle text-primary "></span>
                            </span>
                            <span class="bg-light d-block p-1"></span>
                            <span class="bg-light d-block p-1 mt-auto"></span>
                        </span>
                    </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Horizontal</h5>
            </div>
            <!-- end col -->
        </div>

        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Esquema de colores</h6>
        <p class="text-muted">Elija esquema claro u oscuro.</p>

        <div class="colorscheme-cardradio">
            <div class="row">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                        <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Claro</h5>
                </div>

                <div class="col-4">
                    <div class="form-check card-radio dark">
                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                        <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light-subtle text-light  d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-light-subtle text-light  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle text-light "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle text-light "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle text-light "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light-subtle text-light  d-block p-1"></span>
                                        <span class="bg-light-subtle text-light  d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Oscuro</h5>
                </div>
            </div>
        </div>

        <div id="layout-width">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Ancho de diseño</h6>
            <p class="text-muted">Elija diseño fluido o en caja.</p>

            <div class="row">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                        <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Fluido</h5>
                </div>
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                            <span class="d-flex gap-1 h-100 border-start border-end">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">En caja</h5>
                </div>
            </div>
        </div>

        <div id="layout-position">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Posición de diseño</h6>
            <p class="text-muted">Elija Posición de diseño fija o desplazable.</p>

            <div class="btn-group radio" role="group">
                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                <label class="btn btn-light w-sm" for="layout-position-fixed">Fija</label>

                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Desplazable</label>
            </div>
        </div>
        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color de la barra superior</h6>
        <p class="text-muted">Elija el color de la barra superior claro u oscuro.</p>

        <div class="row">
            <div class="col-4">
                <div class="form-check card-radio">
                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                        <span class="d-flex gap-1 h-100">
                            <span class="flex-shrink-0">
                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                    <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                </span>
                            </span>
                            <span class="flex-grow-1">
                                <span class="d-flex h-100 flex-column">
                                    <span class="bg-light d-block p-1"></span>
                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                </span>
                            </span>
                        </span>
                    </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Claro</h5>
            </div>
            <div class="col-4">
                <div class="form-check card-radio">
                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                        <span class="d-flex gap-1 h-100">
                            <span class="flex-shrink-0">
                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                    <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                </span>
                            </span>
                            <span class="flex-grow-1">
                                <span class="d-flex h-100 flex-column">
                                    <span class="bg-primary d-block p-1"></span>
                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                </span>
                            </span>
                        </span>
                    </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Oscuro</h5>
            </div>
        </div>

        <div id="sidebar-size">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Tamaño de la barra lateral</h6>
            <p class="text-muted">Elige un tamaño de barra lateral.</p>

            <div class="row">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Por defecto</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Compacto</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                        <span class="d-block p-1 bg-primary-subtle text-primary  mb-2"></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Pequeño (Vista de icono)</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                        <span class="d-block p-1 bg-primary-subtle text-primary  mb-2"></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Vista flotante pequeña</h5>
                </div>
            </div>
        </div>

        <div id="sidebar-view">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Vista de la barra lateral</h6>
            <p class="text-muted">Elige la vista de barra lateral por defecto o separada.</p>

            <div class="row">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Por defecto</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                            <span class="d-flex h-100 flex-column">
                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                    <span class="d-block p-1 bg-primary-subtle text-primary  rounded me-1"></span>
                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle text-primary  ms-auto"></span>
                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle text-primary "></span>
                                </span>
                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        </span>
                                    </span>
                                </span>
                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Separada</h5>
                </div>
            </div>
        </div>
        <div id="sidebar-color">
            <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color de barra lateral</h6>
            <p class="text-muted">Elige un color de barra lateral.</p>

            <div class="row">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-primary-subtle text-primary  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle text-primary "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Claro</h5>
                </div>
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                            <span class="d-flex gap-1 h-100">
                                <span class="flex-shrink-0">
                                    <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                        <span class="d-block p-1 px-2 bg-light-subtle text-light  rounded mb-2"></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle text-light "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle text-light "></span>
                                        <span class="d-block p-1 px-2 pb-0 bg-light-subtle text-light "></span>
                                    </span>
                                </span>
                                <span class="flex-grow-1">
                                    <span class="d-flex h-100 flex-column">
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </span>
                            </span>
                        </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">Oscuro</h5>
                </div>

            </div>
            <!-- end row -->
        </div>

    </div>
</div>

</div>
<div class="offcanvas-footer border-top p-3 text-center">
<div class="row">
    <div class="col-6">
        <button type="button" class="btn btn-light w-100" id="reset-layout">Resetear</button>
    </div>
</div>
</div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('libs/jsvectormap/maps/world-merc.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
