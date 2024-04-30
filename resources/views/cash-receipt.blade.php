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
                                <h4 class="mb-sm-0">Invoice</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Invoice</a></li>
                                        <li class="breadcrumb-item active">Invoice</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row pb-4 gy-3">
                        <div class="col-sm-4">
                            <a href="invoice-add.html" class="btn btn-primary addMembers-modal"><i class="las la-plus me-1"></i> Add Invoices</a>
                        </div>

                        <div class="col-sm-auto ms-auto">
                           <div class="d-flex gap-3">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search for name or designation...">
                                <i class="las la-search search-icon"></i>
                            </div>
                            <div class="">
                                <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info btn-icon fs-14"><i class="las la-ellipsis-v fs-18"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a class="dropdown-item" href="#">Print</a></li>
                                    <li><a class="dropdown-item" href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                           </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-2">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                                            <p class="text-uppercase fw-medium fs-14 text-muted mb-0">Invoices Sent 
                                                <span class="text-success fs-14 mb-0 ms-1">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                                                </span>
                                            </p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded-circle fs-3">
                                                <i class="las la-file-alt fs-24 text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <span class="badge bg-primary me-1">2,258</span> <span class="text-muted">Invoices sent</span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-2">$<span class="counter-value" data-target="409.66">0</span>k</h4>
                                            <p class="text-uppercase fw-medium fs-14 text-muted mb-0">Paid Invoices
                                                <span class="text-danger fs-14 mb-0 ms-1">
                                                    <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                                                </span>
                                            </p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded-circle fs-3">
                                                <i class="las la-check-square fs-24 text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <span class="badge bg-danger me-1">1,958</span> <span class="text-muted">Paid by clients</span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-2 text-white">$<span class="counter-value" data-target="136.98">0</span>k</h4>
                                            <p class="text-uppercase fw-medium fs-14 text-white-50 mb-0"> Unpaid Invoices
                                                <span class="text-danger fs-14 mb-0 ms-1">
                                                    <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                                                </span>
                                            </p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light-subtle text-light  rounded-circle fs-3">
                                                <i class="las la-clock fs-24 text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <span class="badge bg-danger me-1">338</span> <span class="text-white">Unpaid by clients</span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-2">$<span class="counter-value" data-target="84.20">0</span>k</h4>
                                            <p class="text-uppercase fw-medium fs-14 text-muted mb-0"> Cancelled Invoices
                                                <span class="text-success fs-14 mb-0 ms-1">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                                                </span>
                                            </p>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light rounded-circle fs-3">
                                                <i class="las la-times-circle fs-24 text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <span class="badge bg-primary me-1">502</span> <span class="text-muted">Cancelled by clients</span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-hover table-nowrap align-middle mb-0">
                                            <thead>
                                                <tr class="text-muted text-uppercase">
                                                    <th style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th scope="col">Invoice ID</th>
                                                    <th scope="col">Client</th>
                                                    <th scope="col" style="width: 20%;">Email</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Billed</th>
                                                    <th scope="col" style="width: 16%;">Status</th>
                                                    <th scope="col" style="width: 12%;">Action</th>
                                                </tr>
                                            </thead>
        
                                            <tbody>

                                                @foreach ($ultimosCobros as $ultimoCobro)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check1" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">{{ $ultimoCobro->numero_rc }}</p></td>
                                                    <td><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Donald Risher</a>
                                                    </td>
                                                    <td>morbi.quis@protonmail.org</td>
                                                    <td>20 Sep, 2022</td>
                                                    <td>$240.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
                                                @endforeach



                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check1" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2152</p></td>
                                                    <td><img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Donald Risher</a>
                                                    </td>
                                                    <td>morbi.quis@protonmail.org</td>
                                                    <td>20 Sep, 2022</td>
                                                    <td>$240.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check2" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2153</p></td>
                                                    <td><img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Brody Holman</a>
                                                    </td>
                                                    <td>metus@protonmail.org</td>
                                                    <td>12 Arl, 2022</td>
                                                    <td>$390.00</td>
                                                    <td><span class="badge bg-warning-subtle text-warning p-2">Unpaid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check3" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2154</p></td>
                                                    <td><img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Jolie Hood</a>
                                                    </td>
                                                    <td>morbi.quis@protonmail.org</td>
                                                    <td>28 Mar, 2022</td>
                                                    <td>$440.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check4" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2155</p></td>
                                                    <td><img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Buckminster Wong</a>
                                                    </td>
                                                    <td>morbi.quis@protonmail.org</td>
                                                    <td>23 Aug, 2022</td>
                                                    <td>$520.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check5" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2156</p></td>
                                                    <td><img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Howard Lyons</a>
                                                    </td>
                                                    <td>neque.sed.dictum@icloud.org</td>
                                                    <td>18 Sep, 2022</td>
                                                    <td>$480.00</td>
                                                    <td><span class="badge bg-info-subtle text-info  p-2">Refund</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check6" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2157</p></td>
                                                    <td><img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Howard Oneal</a>
                                                    </td>
                                                    <td>metus@protonmail.org</td>
                                                    <td>12 Feb, 2022</td>
                                                    <td>$550.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check7" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2158</p></td>
                                                    <td><img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Jena Hall</a>
                                                    </td>
                                                    <td>morbi.quis@protonmail.org</td>
                                                    <td>30 Nov, 2022</td>
                                                    <td>$170.00</td>
                                                    <td><span class="badge bg-danger-subtle text-danger p-2">Cancel</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
        
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check8" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2159</p></td>
                                                    <td><img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">Paki Edwards</a>
                                                    </td>
                                                    <td>dictum.phasellus.in@hotmail.org</td>
                                                    <td>23 Sep, 2022</td>
                                                    <td>$720.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="check9" value="option">
                                                        </div>
                                                    </td>
                                                    <td><p class="fw-medium mb-0">Lec-2160</p></td>
                                                    <td><img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                                        <a href="#javascript: void(0);" class="text-body align-middle fw-medium">James Diaz</a>
                                                    </td>
                                                    <td>nascetur@yahoo.com</td>
                                                    <td>16 Aug, 2022</td>
                                                    <td>$820.00</td>
                                                    <td><span class="badge bg-success-subtle text-success p-2">Paid</span></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="las la-ellipsis-h align-middle fs-18"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-eye fs-18 align-middle me-2 text-muted"></i>
                                                                        View</button>
                                                                </li>
                                                                <li>
                                                                    <button class="dropdown-item" href="javascript:void(0);"><i class="las la-pen fs-18 align-middle me-2 text-muted"></i>
                                                                        Edit</button>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-file-download fs-18 align-middle me-2 text-muted"></i>
                                                                        Download</a>
                                                                </li>
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

                                                
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mb-4 gy-3">
                        <div class="col-md-5">
                            <p class="mb-0 text-muted">Showing <b>1</b> to <b>5</b> of <b>10</b> results</p>
                        </div>
                        <div class="col-sm-auto ms-auto">
                            <nav aria-label="...">
                                <ul class="pagination mb-0">
                                  <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item" aria-current="page">
                                    <span class="page-link">2</span>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

@include('layouts._partials.footer')