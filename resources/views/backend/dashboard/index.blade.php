@extends('backend.layouts.index')
@section('content')
<!-- c starts -->
<div class="page-body">
    <div>
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <h5> Dashboard </h5>
                    </div>

                </div>
            </div>
        </div><!-- Container-fluid Ends -->
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="card border-widgets shadow mb-4">
                <div class="row m-0">
                    <div class="col-xl-3 col-6 xs-width-100">
                        <div class="crm-top-widget card-body">
                            <div class="d-flex"><i class="icon-user font-primary align-self-center me-3"></i>
                                <div><span class="mt-0">Teachers</span>
                                    <h4 class="counter">15</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 xs-width-100">
                        <div class="crm-top-widget card-body">
                            <div class="d-flex"><i class="icon-id-badge font-secondary align-self-center me-3"></i>
                                <div><span class="mt-0">Students</span>
                                    <h4 class="counter">457</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 xs-width-100">
                        <div class="crm-top-widget card-body">
                            <div class="d-flex"><i class="icon-camera font-success align-self-center me-3"></i>
                                <div><span class="mt-0">Photos</span>
                                    <h4 class="counter">37</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 xs-width-100">
                        <div class="crm-top-widget card-body">
                            <div class="d-flex"><i class="icon-video-camera font-info align-self-center me-3"></i>
                                <div><span class="mt-0">Videos</span>
                                    <h4 class="counter">16</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- content wrapper starts -->

@endsection
