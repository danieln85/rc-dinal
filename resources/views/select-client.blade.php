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
                                <h4 class="mb-sm-0">SELECCIONAR CLIENTE</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inicio</a></li>
                                        <li class="breadcrumb-item active">Seleccionar Cliente</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <form action="{{ route('create-cash-receipt') }}"     method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    {{-- <label for="cliente_id">Seleccione un Cliente:</label> --}}
                                                    <select id="cliente_id" name="cliente_id" class="form-control">
                                                        <option value="selecciona un cliente">Selecciona un cliente</option>
                                                        @foreach($clientes as $cliente)
                                                            <option value="{{ $cliente->id }}">{{ $cliente->nombre_cliente }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>                                            
                                                <button type="submit" class="btn btn-primary mt-2">Continuar</button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                    
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>


                    <div class="row pb-4 gy-3">

                        <div class="col-sm-auto ms-auto">
                           <div class="d-flex gap-3">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <i class="las la-search search-icon"></i>
                            </div>
                            {{-- <div class="">
                                <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info btn-icon fs-14"><i class="las la-ellipsis-v fs-18"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a class="dropdown-item" href="#">Print</a></li>
                                    <li><a class="dropdown-item" href="#">Export to Excel</a></li>
                                </ul>
                            </div> --}}
                           </div>
                        </div>

                        <div class="col-sm-4">
                            <a href="{{route('create-client')}}" class="btn btn-primary addMembers-modal"><i class="las la-plus me-1"></i> Crear Cliente</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                
                                
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                 @endif
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-hover table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr class="text-muted text-uppercase">
                                                    {{-- <th style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th> --}}
                                                                                                
                                                    <th scope="col" style="width: 20%;">CLIENTE</th>
                                                    <th scope="col" style="width: 20%;">CORREO</th>
                                                    <th scope="col">NIT</th>
                                                    <th scope="col">CREADO POR:</th>
                                                    <th scope="col" style="width: 12%;">Action</th>
                                                </tr>
                                            </thead>
        
                                            <tbody>

                                                @forelse ($clientes as $cliente)
                                                <tr>
                                                    {{-- <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check1" value="option">
                                                        </div>
                                                    </td> --}}
                                                    
                                                    <td>
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">{{ Illuminate\Support\Str::limit($cliente->nombre_cliente, 30) }}</a>
                                                    </td>
                                                    <td>{{ Illuminate\Support\Str::limit($cliente->email_cliente, 30) }}</td>

                                                    <td>{{ $cliente->nit }}</td>
                                                    <td>{{ $cliente->creado_por }}</td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li class="mb-2">
                                                                    <form method="GET" action="{{ route('client.show', $cliente->id) }}">
                                                                        @csrf
                                                                        @method('post')
                                                                        <button type="submit" class="btn btn-link p-0 m-0 text-decoration-none" style="cursor: pointer;">
                                                                            <i class="las la-eye fs-18 align-middle me-2 ms-3 text-muted"></i> Ver
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                
                                                                <li>
                                                                    <form method="GET" action="{{ route('client.edit', $cliente->id) }}">
                                                                        @csrf
                                                                        @method('post')
                                                                        <button type="submit" class="btn btn-link p-0 m-0 text-decoration-none" style="cursor: pointer;">
                                                                            <i class="las la-pen fs-18 align-middle me-2 ms-3 text-muted"></i> Editar
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                
                                                                {{-- <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li> --}}
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn" href="#">
                                                                        <i class="las la-trash-alt fs-18 align-middle me-2 text-muted"></i>
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <h3 class="mb-4 mt-2">Aún no hay clientes creados.</h3>
                                                @endforelse

                                                
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

@include('layouts._partials.footer')