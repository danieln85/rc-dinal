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
                                <h4 class="mb-sm-0">CREAR NUEVO CLIENTE</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{route('clients')}}">Clientes</a></li>
                                        <li class="breadcrumb-item active">Crear Cliente</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card">
                                @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Por favor diligencia correctamente los campos.</strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li></br>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                                <form method="POST" action="{{ route('client.store')}}" class="needs-validation" id="invoice_form">
                                    @csrf
                                    <div class="card-body border-bottom border-bottom-dashed p-4">
                                        <div class="row mb-3">
                                            <div class="col-md-2 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    @php
                                                        use Carbon\Carbon;
                                                    @endphp
                                                    <label for="date-field">Fecha:</label>
                                                    <input type="text" class="form-control bg-light border-0 flatpickr-input" id="date_cobro" name="date_cobro" data-provider="flatpickr" data-time="true" placeholder="Select Date-time" value="{{ Carbon::now()->toDateString() }}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="invoicenoInput">Id Cliente No:</label>
                                                    <input type="text" class="form-control bg-light border-0" id="id" name="id" placeholder="Invoice No" value="{{ $ultimoId + 1 }}" readonly="readonly">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="nombre_cliente">Nombre del Cliente</label>
                                                    <input class="form-control" id="nombre_cliente" name="nombre_cliente">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="email_cliente">Correo Electrónico</label>
                                                    <input type="email" class="form-control" id="email_cliente" name="email_cliente">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                                <div class="form-group">
                                                    <label for="nit">Nit</label>
                                                    <input type="text" class="form-control" id="ni" name="nit">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="creado_por">Creado por:</label>
                                                    <input type="text" class="form-control" id="creado_por" name="creado_por" value="{{ Auth::user()->name }}" readonly="readonly">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                            {{-- <button type="submit" class="btn btn-info"><i class="ri-printer-line align-bottom me-1"></i> Save</button> --}}
                                            {{-- <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a> --}}
                                            <button type="submit" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Crear</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

@include('layouts._partials.footer')