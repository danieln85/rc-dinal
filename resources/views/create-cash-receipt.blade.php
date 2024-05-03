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
                                <h4 class="mb-sm-0">NUEVO RECIBO DE CAJA</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{route('cash-receipts')}}">Recibos de caja</a></li>
                                        <li class="breadcrumb-item active">Nuevo Recibo de Caja</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card">
                                <form method="POST" action="{{ route('cash-receipts.store')}}" class="needs-validation" id="invoice_form">
                                    @csrf
                                    <div class="card-body border-bottom border-bottom-dashed p-4">
                                        <div class="row mb-3">
                                            <div class="col-md-2 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    @php
                                                        use Carbon\Carbon;
                                                    @endphp
                                                    <label for="date-field">Fecha:</label>
                                                    <input type="text" class="form-control bg-light border-0 flatpickr-input" id="date_cobro" name="date_cobro" data-provider="flatpickr" data-time="true" placeholder="Select Date-time" value="{{ Carbon::now()->toDateString() }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="invoicenoInput">RC No:</label>
                                                    <input type="text" class="form-control bg-light border-0" id="numero_rc" name="numero_rc" placeholder="Invoice No" value="{{ $ultimoRc + 1 }}">
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
                                            <div class="col-md-2 col-sm-4">
                                                <div class="form-group">
                                                    <label for="num_factura">Número de Factura</label>
                                                    <input type="text" class="form-control" id="num_factura" name="num_factura">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <label for="cobro_abono">Valor del Pago</label>
                                                    <input type="text" class="form-control" id="cobro_abono" name="cobro_abono">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-check mt-4">
                                                    <label>Abonó</label>
                                                    <input type="checkbox" class="form-check-input" id="abono" name="abono">
                                                    <label class="form-check-label" for="abono">Sí</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="descuento">Descuento</label>
                                                    <input type="text" class="form-control" id="descuento" name="descuento">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="devolucion">Devolución</label>
                                                    <input type="text" class="form-control" id="devolucion" name="devolucion">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="retencion">Retención</label>
                                                    <input type="text" class="form-control" id="retencion" name="retencion">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="metodo_pago">Método de Pago</label>
                                                    <select class="form-control bg-light border-0" data-choices="" data-choices-search-false="" class="form-control" id="metodo_pago" name="metodo_pago" required="">
                                                        <option value="">Selecciona método de pago</option>
                                                        <option value=",efectivo,">Efectivo</option>
                                                        <option value=",nequi,">Nequi</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="informacion">Observaciones</label>
                                                    <textarea class="form-control" id="informacion" name="informacion"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                            <button type="submit" class="btn btn-info"><i class="ri-printer-line align-bottom me-1"></i> Save</button>
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                                            <button type="submit" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Crear y enviar</button>
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