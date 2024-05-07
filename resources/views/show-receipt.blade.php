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
                                <h4 class="mb-sm-0">VER RECIBO DE CAJA</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{route('cash-receipts')}}">Recibos de caja</a></li>
                                        <li class="breadcrumb-item active">Ver Recibo de Caja</li>
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

                                <form method="POST" action="" class="needs-validation" id="invoice_form">
                                    @csrf
                                    <div class="card-body border-bottom border-bottom-dashed p-4">
                                        <div class="row mb-3">
                                            <div class="col-md-2 mb-3">
                                                <div class="form-group">
                                                    <img src="{{ asset('images/logo/logo-dinalpartes.png') }}" alt="" width="150px">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    
                                                    <label for="date-field">Fecha:</label>
                                                    <input type="text" class="form-control bg-light border-0 flatpickr-input" id="date_cobro" name="date_cobro" data-provider="flatpickr" data-time="true" placeholder="Select Date-time" value="{{ $recibo->date_cobro }}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="invoicenoInput">RC No:</label>
                                                    <input type="text" class="form-control bg-light border-0" id="numero_rc" name="numero_rc" placeholder="Invoice No" value="{{ $recibo->numero_rc }}" readonly="readonly" disabled>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nombre_cliente">Nombre del Cliente</label>
                                                    <input class="form-control" id="nombre_cliente" name="nombre_cliente" value="{{ $recibo->nombre_cliente}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="email_cliente">Correo Electrónico</label>
                                                    <input type="email" class="form-control" id="email_cliente" name="email_cliente" value="{{ $recibo->email_cliente}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <label for="num_factura">Número de Factura</label>
                                                    <input type="text" class="form-control" id="num_factura" name="num_factura" value="{{ $recibo->num_factura}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <label for="cobro_abono">Valor del Pago</label>
                                                    <input type="text" class="form-control" id="cobro_abono" name="cobro_abono" value="{{ $recibo->cobro_abono}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-check mt-4">
                                                    <label>Abonó</label>
                                                    <input type="checkbox" class="form-check-input" id="abono" name="abono" {{ $recibo->abono == 'si' ? 'checked' : '' }} value="si" disabled>
                                                    
                                                    <!-- Campo oculto para asegurar que el valor del checkbox se envíe si está marcado -->
                                                    @if ($recibo->abono == 'si')
                                                    <label class="form-check-label" for="abono">Sí</label>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-3 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="descuento">Descuento</label>
                                                    <input type="text" class="form-control" id="descuento" name="descuento" value="{{ $recibo->descuento}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="devolucion">Devolución</label>
                                                    <input type="text" class="form-control" id="devolucion" name="devolucion" value="{{ $recibo->devolucion}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="retencion">Retención</label>
                                                    <input type="text" class="form-control" id="retencion" name="retencion" value="{{ $recibo->retencion}}" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="metodo_pago">Método de Pago</label>
                                                    <select class="form-control bg-light border-0" id="metodo_pago" name="metodo_pago" required="" disabled>
                                                        <option value="">Selecciona método de pago</option>
                                                        <option value=",efectivo," {{ $recibo->metodo_pago == ',efectivo,' ? 'selected' : '' }}>Efectivo</option>
                                                        <option value=",nequi," {{ $recibo->metodo_pago == ',nequi,' ? 'selected' : '' }}>Nequi</option>
                                                    </select>
                                                    <!-- Campo oculto para enviar el valor real del método de pago -->
                                                    <input type="hidden" name="metodo_pago" value="{{ $recibo->metodo_pago }}">
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="informacion">Observaciones</label>
                                                    <textarea class="form-control" id="informacion" name="informacion" disabled>{{ $recibo->informacion }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                            {{-- <button type="submit" class="btn btn-info"><i class="ri-printer-line align-bottom me-1"></i> Save</button>
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                                            <button type="submit" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Crear y enviar</button> --}}
                                            <div class="hstack gap-2 justify-content-end d-print-none mt-2">
                                                {{-- <button type="submit" class="btn btn-info"><i class="ri-printer-line align-bottom me-1"></i> Save</button> --}}
                                                <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Descargar Recibo</a>
                                                {{-- <button type="submit" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Crear y enviar</button> --}}
                                                <a href="javascript:history.back()" class="btn btn-warning"><i class="align-bottom me-1"></i> Regresar</a>
                                            </div>


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