@extends('layouts.master')
@section('title') Dashboard @endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Ecommerce @endslot
            @slot('li_3') List @endslot
            @slot('title') Product List @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Pics</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Avai.Color</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/img-1.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Bata Shoes</a>
                                    <br>
                                    <span class="text-muted font-13">size-08 (Model 2020)</span>
                                </p>
                            </td>
                            <td>Sports</td>
                            <td>32</td>
                            <td>$39</td>
                            <td><span class="badge badge-soft-warning">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/img-2.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Apple Watch</a>
                                    <br>
                                    <span class="text-muted font-13">40mm & 44mm case size</span>
                                </p>
                            </td>
                            <td>Interior</td>
                            <td>10</td>
                            <td>$99</td>
                            <td><span class="badge badge-soft-pink">Sold</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/03.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Dastone Gear SM-R322</a>
                                    <br>
                                    <span class="text-muted font-13">Super AMOLED display</span>
                                </p>
                            </td>
                            <td>Footwear</td>
                            <td>24</td>
                            <td>$49</td>
                            <td><span class="badge badge-soft-secondary">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/04.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Dastone Washable Face Masks</a>
                                    <br>
                                    <span class="text-muted font-13">Gives germs protection</span>
                                </p>
                            </td>
                            <td>Sports</td>
                            <td>8</td>
                            <td>$49</td>
                            <td><span class="badge badge-soft-secondary">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/01.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Dastone 360° 1080p Full HD</a>
                                    <br>
                                    <span class="text-muted font-13">Day-Night Vision</span>
                                </p>
                            </td>
                            <td>Life Style</td>
                            <td>52</td>
                            <td>$89</td>
                            <td><span class="badge badge-soft-purple">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/06.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">New Morden Chair</a>
                                    <br>
                                    <span class="text-muted font-13">size-05 (Model 2019)</span>
                                </p>
                            </td>
                            <td>Interior</td>
                            <td>6</td>
                            <td>$20</td>
                            <td><span class="badge badge-soft-warning">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/05.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Dastone Fever Gun</a>
                                    <br>
                                    <span class="text-muted font-13">Used for Baby and Adult</span>
                                </p>
                            </td>
                            <td>Interior</td>
                            <td>32</td>
                            <td>$39</td>
                            <td><span class="badge badge-soft-warning">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/02.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Nike Air Max 101</a>
                                    <br>
                                    <span class="text-muted font-13">Size-05 to 13 (Model 2020)</span>
                                </p>
                            </td>
                            <td>Sports</td>
                            <td>32</td>
                            <td>$39</td>
                            <td><span class="badge badge-soft-warning">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/img-5') }}.png" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">American Bag</a>
                                    <br>
                                    <span class="text-muted font-13">size-08 (Model 2020)</span>
                                </p>
                            </td>
                            <td>Sports</td>
                            <td>32</td>
                            <td>$39</td>
                            <td><span class="badge badge-soft-warning">Stock</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ URL::asset('assets/images/products/img-3.png') }}" alt="" height="40">
                                <p class="d-inline-block align-middle mb-0">
                                    <a href="" class="d-inline-block align-middle mb-0 product-name">Sneakers shoes</a>
                                    <br>
                                    <span class="text-muted font-13">Size-05 to 13 (Model 2020)</span>
                                </p>
                            </td>
                            <td>Interior</td>
                            <td>10</td>
                            <td>$99</td>
                            <td><span class="badge badge-soft-pink">Sold</span></td>
                            <td>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                                    <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                </ul>
                            </td>
                            <td>
                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div> <!-- end col -->
        </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <script>
        $('#datatable').DataTable();
    </script>
@endsection
