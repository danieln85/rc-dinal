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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
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







                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Payment Activity</h4>
                                    <div>
                                        <button type="button" class="btn btn-soft-info btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-soft-info btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-soft-info btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body py-1">
                                    <div class="row gy-2">
                                        <div class="col-md-4">
                                            <h4 class="fs-22 mb-0">$23,590.00</h4>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex main-chart justify-content-end">
                                                <div class="px-4 border-end">
                                                    <h4 class="text-primary fs-22 mb-0">$584k <span class="text-muted d-inline-block fs-17 align-middle ms-0 ms-sm-2">Incomes</span></h4>
                                                </div>
                                                <div class="ps-4">
                                                    <h4 class="text-primary fs-22 mb-0">$324k <span class="text-muted d-inline-block fs-17 align-middle ms-0 ms-sm-2">Expenses</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="stacked-column-chart" class="apex-charts" data-colors='["--in-primary", "--in-light"]' dir="ltr"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="card-title mb-2 text-truncate">Structure</h5>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <div class="dropdown">
                                                <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-14">Sort By:</span> <span class="text-muted">Weekly<i class="las la-angle-down fs-12 ms-2"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="structure-widget" data-colors='["--in-primary", "--in-primary-rgb, 0.7", "--in-light"]' class="apex-charts" dir="ltr"></div> 


                                    <div class="px-2">
                                        <div class="structure-list d-flex justify-content-between border-bottom">
                                            <p class="mb-0"><i class="las la-dot-circle fs-18 text-primary me-2"></i>Invoiced</p>
                                            <div>
                                                <span class="pe-2 pe-sm-5">$56,236</span>
                                                <span class="badge bg-primary"> + 0.2% </span>
                                            </div>
                                        </div>
                                        <div class="structure-list d-flex justify-content-between border-bottom">
                                            <p class="mb-0"><i class="las la-dot-circle fs-18 text-primary me-2"></i>Collected</p>
                                            <div>
                                                <span class="pe-2 pe-sm-5">$12,596</span>
                                                <span class="badge bg-primary"> - 0.7% </span>
                                            </div>
                                        </div>
                                        <div class="structure-list d-flex justify-content-between pb-0">
                                            <p class="mb-0"><i class="las la-dot-circle fs-18 text-primary me-2"></i>Outstanding</p>
                                            <div>
                                                <span class="pe-2 pe-sm-5">$1,568</span>
                                                <span class="badge bg-primary"> + 0.4% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Quick Invoice</h4>
                                    <div>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                        <i class="las la-plus fs-18 align-middle"></i>
                                        </button>
                                     
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <form>
                                       <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label>Customer Name</label>
                                                    <input type="text" placeholder="Enter name" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label>Customer Email</label>
                                                    <input type="text" placeholder="Enter email" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="mb-3">
                                                    <label for="companyAddress">Customer Address</label>
                                                    <textarea class="form-control" id="companyAddress" rows="2" placeholder="Company Address" required=""></textarea>
                                                </div>
                                            </div>
                                       </div>

                                        <table class="table table-sm table-borderless table-nowrap align-middle mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total</td>
                                                    <td class="text-end">$699.96</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax (12.5%)</td>
                                                    <td class="text-end">$44.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount <small class="text-muted">(Invoika15)</small></td>
                                                    <td class="text-end">- $53.99</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge</td>
                                                    <td class="text-end">$65.00</td>
                                                </tr>
                                                <tr class="border-top border-top-dashed fs-15">
                                                    <th scope="row">Total Amount</th>
                                                    <th class="text-end">$755.96</th>
                                                </tr>
                                            </tbody>
                                        </table>

                                       <div class="row mt-2">
                                            <div class="col-6">
                                                <a href="" class="btn btn-light w-100">Add More Details</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="" class="btn btn-primary w-100">Send Money</a>
                                            </div>
                                       </div>

                                      
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex pb-2">
                                    <h4 class="card-title mb-0 flex-grow-1">Payment Overview</h4>
                                    <div>
                                        <div class="dropdown">
                                            <a class="text-reset" href="#" id="dropdownMenuYear" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase fs-14">Sort By: </span> <span class="text-muted">Monthly<i class="las la-angle-down fs-12 ms-2"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuYear">
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Yearly</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="payment-overview" data-colors='["--in-primary", "--in-light"]' class="apex-charts" dir="ltr"></div>  
                                    <div class="row mt-3 text-center">
                                        <div class="col-6 border-end">
                                            <div class="my-1">
                                               <p class="text-muted text-truncate mb-2">Received Amount</p>
                                                <h4 class="mt-2 mb-0 fs-20">$45,070.00</h4>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="my-1">
                                               <p class="text-muted text-truncate mb-2">Due Amount</p>
                                                <h4 class="mt-2 mb-0 fs-20">$32,400.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title">Recent Transaction</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="las la-ellipsis-h fs-20"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mx-n3 px-3" data-simplebar="" style="max-height: 418px;">
                                            <p class="text-muted mb-0">Recent</p>
                                            <div class="border-bottom sales-history">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                                            <i class="lab la-paypal fs-22"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="fs-15 mb-1 text-truncate">Salary Payment</h5>
                                                        <p class="fs-14 text-muted text-truncate mb-0">20 Sep, 2022</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge fs-12 bg-danger-subtle text-danger">- $62.45</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-bottom sales-history">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                                            <i class="lab la-buffer fs-22"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="fs-15 mb-1 text-truncate">Online Product</h5>
                                                        <p class="fs-14 text-muted text-truncate mb-0">28 Mar, 2022</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge fs-12 bg-success-subtle text-success">+ $45.84</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="text-muted mt-3 mb-0">Yesterday</p>

                                            <div class="border-bottom sales-history">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                                            <i class="las la-file-image fs-22"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="fs-15 mb-1 text-truncate">Maintenance</h5>
                                                        <p class="fs-14 text-muted text-truncate mb-0">18 Sep, 2022</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge fs-12 bg-success-subtle text-success">+ $25.52</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-bottom sales-history">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                                            <i class="las la-bus fs-22"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="fs-15 mb-1 text-truncate">Bus Booking</h5>
                                                        <p class="fs-14 text-muted text-truncate mb-0">30 Nov, 2022</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge fs-12 bg-danger-subtle text-danger">- $84.45</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-bottom sales-history">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                                            <i class="lab la-telegram-plane fs-22"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="fs-15 mb-1 text-truncate">Flight Booking</h5>
                                                        <p class="fs-14 text-muted text-truncate mb-0">12 Feb, 2022</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge fs-12 bg-success-subtle text-success">+ $53.23</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pb-0 sales-history">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                                            <i class="las la-store-alt fs-22"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="fs-15 mb-1 text-truncate">Office Rent</h5>
                                                        <p class="fs-14 text-muted text-truncate mb-0">12 Arl, 2022</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <span class="badge fs-12 bg-success-subtle text-success">+ $42.63</span>
                                                    </div>
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

