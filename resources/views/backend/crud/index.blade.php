@extends('backend.layouts.index')
@section('content')
<div class="page-body">
    <div>
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>CRUD Management </h5>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
        <div class="conatiner">
            <div class="card list_card">
                <div class="card-header">
                    <h4>
                        All Datas
                        <!---->
                    </h4>
                    <div class="search">
                        <form action="#"><input placeholder="search..." type="search"
                                class="form-control border border-info"></form>
                    </div>
                    <div class="btns d-flex gap-2 align-items-center"><span><a href="{{route('create')}}"
                                class="btn rounded-pill btn-outline-info"><i class="fa fa-pencil me-5px"></i>
                                Create
                            </a>
                            <!---->
                        </span>
                        <div class="table_actions"><a href="#" class="btn px-1 btn-outline-secondary"><i
                                    class="fa fa-list"></i></a>
                            <ul>
                                <li><a href=""><i class="fa-regular fa-hand-point-right"></i>
                                        Export All
                                    </a></li>
                                <!---->
                                <li><a href="#/user/import" class=""><i class="fa-regular fa-hand-point-right"></i>
                                        Import
                                    </a></li>
                                <li><a href="#" title="display data that has been deactivated" class="d-flex"><i
                                            class="fa-regular fa-hand-point-right"></i>
                                        Deactivated data
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="table-responsive card-body text-nowrap">
                    <table class="table table-hover table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th><input type="checkbox" class="form-check-input"></th>
                                <th aria-label="id" class="cursor_n_resize">
                                    ID
                                    <!---->
                                </th>
                                <th class="cursor_n_resize">
                                    Photo
                                    <!---->
                                </th>
                                <th class="cursor_n_resize">
                                    Name
                                    <!---->
                                </th>
                                <th class="cursor_n_resize">
                                    Email
                                    <!---->
                                </th>
                                <th class="cursor_n_resize">
                                    Mobile NO
                                    <span><i class="fa-solid fa-arrow-up-z-a text-warning"></i></span>
                                </th>
                                <th class="cursor_n_resize">
                                    Status
                                    <!---->
                                </th>
                                <th aria-label="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>43</td>
                                <td><img src="http://127.0.0.1:9000/avatar.png" alt="Avatar" class="rounded-circle"
                                        style="height: 30px;"></td>
                                <td><span class="text-warning cursor_pointer">
                                        Daryl Beier
                                    </span></td>
                                <td>zack.sauer@example.org</td>
                                <td>
                                    (345) 290-6222
                                </td>
                                <td><span class="badge bg-label-success me-1">active</span>
                                    <!---->
                                </td>
                                <td>
                                    <div class="table_actions"><a href="#" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa fa-gears"></i></a>
                                        <ul>
                                            <li><a href=""><i class="fa text-info fa-eye"></i>
                                                    Quick View
                                                </a></li>
                                            <li><span><a href="#/user/details/43" class=""><i
                                                            class="fa text-secondary fa-eye"></i>
                                                        Details
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span><a href="#/user/edit/43" class=""><i
                                                            class="fa text-warning fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span>
                                                    <!---->
                                                    <!---->
                                                </span></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>87</td>
                                <td><img src="http://127.0.0.1:9000/avatar.png" alt="Avatar" class="rounded-circle"
                                        style="height: 30px;"></td>
                                <td><span class="text-warning cursor_pointer">
                                        Stephen Rau
                                    </span></td>
                                <td>marisol49@example.net</td>
                                <td>
                                    (313) 932-3991
                                </td>
                                <td><span class="badge bg-label-success me-1">active</span>
                                    <!---->
                                </td>
                                <td>
                                    <div class="table_actions"><a href="#" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa fa-gears"></i></a>
                                        <ul>
                                            <li><a href=""><i class="fa text-info fa-eye"></i>
                                                    Quick View
                                                </a></li>
                                            <li><span><a href="#/user/details/87" class=""><i
                                                            class="fa text-secondary fa-eye"></i>
                                                        Details
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span><a href="#/user/edit/87" class=""><i
                                                            class="fa text-warning fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span>
                                                    <!---->
                                                    <!---->
                                                </span></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>46</td>
                                <td><img src="http://127.0.0.1:9000/avatar.png" alt="Avatar" class="rounded-circle"
                                        style="height: 30px;"></td>
                                <td><span class="text-warning cursor_pointer">
                                        Matteo Gutmann
                                    </span></td>
                                <td>delfina.kuhic@example.com</td>
                                <td>
                                    (279) 947-4956 x9505
                                </td>
                                <td><span class="badge bg-label-success me-1">active</span>
                                    <!---->
                                </td>
                                <td>
                                    <div class="table_actions"><a href="#" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa fa-gears"></i></a>
                                        <ul>
                                            <li><a href=""><i class="fa text-info fa-eye"></i>
                                                    Quick View
                                                </a></li>
                                            <li><span><a href="#/user/details/46" class=""><i
                                                            class="fa text-secondary fa-eye"></i>
                                                        Details
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span><a href="#/user/edit/46" class=""><i
                                                            class="fa text-warning fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span>
                                                    <!---->
                                                    <!---->
                                                </span></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="form-check-input"></td>
                                <td>34</td>
                                <td><img src="http://127.0.0.1:9000/avatar.png" alt="Avatar" class="rounded-circle"
                                        style="height: 30px;"></td>
                                <td><span class="text-warning cursor_pointer">
                                        Elna Kassulke
                                    </span></td>
                                <td>hilpert.zachary@example.com</td>
                                <td>
                                    (252) 410-1972 x05888
                                </td>
                                <td><span class="badge bg-label-success me-1">active</span>
                                    <!---->
                                </td>
                                <td>
                                    <div class="table_actions"><a href="#" class="btn btn-sm btn-outline-secondary"><i
                                                class="fa fa-gears"></i></a>
                                        <ul>
                                            <li><a href=""><i class="fa text-info fa-eye"></i>
                                                    Quick View
                                                </a></li>
                                            <li><span><a href="#/user/details/34" class=""><i
                                                            class="fa text-secondary fa-eye"></i>
                                                        Details
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span><a href="#/user/edit/34" class=""><i
                                                            class="fa text-warning fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    <!---->
                                                </span></li>
                                            <li><span>
                                                    <!---->
                                                    <!---->
                                                </span></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-1 border-top-0">
                    <div class="d-inline-block">
                        <ul class="pagination pagination-sm">
                            <li class="page-item pagination-prev-nav"><a href="#" aria-label="Previous"
                                    class="page-link"><span><i class="fa fa-angle-left"></i> Previous</span></a></li>
                            <li class="page-item pagination-page-nav"><a href="#" class="page-link">
                                    1

                                </a></li>

                            <li class="page-item pagination-next-nav disabled"><a href="#" aria-label="Next"
                                    class="page-link" tabindex="-1"><span>Next <i
                                            class="fa fa-angle-right"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="show-limit d-inline-block"><span>Limit:</span> <select>
                            <option value="10">
                                10
                            </option>
                            <option value="5">
                                5
                            </option>
                            <option value="25">
                                25
                            </option>
                            <option value="50">
                                50
                            </option>
                            <option value="100">
                                100
                            </option>
                        </select></div>
                    <div class="show-limit d-inline-block"><span>Total:</span> <span>104</span></div>
                </div>
            </div>
            <div class="canvas_backdrop">
                <!---->
            </div>
            <div class="canvas_backdrop">
                <div class="content right">
                    <div class="content_header">
                        <h3 class="offcanvas-title">Selected Users</h3> <i class="fa fa-times"></i>
                    </div>
                    <div class="cotent_body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>id</th>
                                    <th>name</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
