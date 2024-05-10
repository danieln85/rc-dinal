@include('layouts._partials.header')

@include('layouts.includes.menu')



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- PRIMERA FILA -->
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                {{-- <h5 class="fs-20 text-truncate"></h5> --}}
                                                <p class="text-muted fs-15">Desde este botón puedes crear recibos de caja.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-primary">+ Crear Recibo</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes crear clientes.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-primary">+ Crear Clientes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes confirmar el dinero recibido.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-primary">Dinero Recibido</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes ingresar los almuerzos del día.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-primary">+ Almuerzos</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->



                    <!-- SEGUNDA FILA -->
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                {{-- <h5 class="fs-20 text-truncate"></h5> --}}
                                                <p class="text-muted fs-15">Desde este botón puedes crear recibos de caja.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-success">+ Crear Recibo</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes crear clientes.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-success">+ Crear Clientes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes confirmar el dinero recibido.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-success">Dinero Recibido</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes ingresar los almuerzos del día.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-success">+ Almuerzos</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <!-- TERCERA FILA -->
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                {{-- <h5 class="fs-20 text-truncate"></h5> --}}
                                                <p class="text-muted fs-15">Desde este botón puedes crear recibos de caja.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-dark ">+ Crear Recibo</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes crear clientes.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-dark ">+ Crear Clientes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes confirmar el dinero recibido.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-dark ">Dinero Recibido</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes ingresar los almuerzos del día.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-dark ">+ Almuerzos</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- CUARTA FILA -->
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                {{-- <h5 class="fs-20 text-truncate"></h5> --}}
                                                <p class="text-muted fs-15">Desde este botón puedes crear recibos de caja.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-info">+ Crear Recibo</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes crear clientes.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-info">+ Crear Clientes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gy-4">
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes confirmar el dinero recibido.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-info">Dinero Recibido</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="box">
                                                <p class="text-muted fs-15">Desde este botón puedes ingresar los almuerzos del día.</p>
                                                <a href="{{ route('select-client')}}" class="btn btn-info">+ Almuerzos</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->




                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

@include('layouts._partials.footer')

