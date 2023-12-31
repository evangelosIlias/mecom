@extends('vendor.vendor_dashboard')
{{-- Start Section --}}
@section('vendor')

<!-- Image Reload JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

{{-- <div class="page-wrapper"> --}}
    <div class="page-content"> 
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vendor User Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Vendor Profile</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded-circle avatar-lg" src="{{ (!empty($vendorProfile->photo)) ?
                                        url('upload/vendor_profile_image/'. $vendorProfile->photo) : url('upload/no_image.jpg') }}" 
                                        alt="Card image cap" style="width: 100px; height: 100px; border: 5px solid rgba(138, 60, 221, 0.729);">
                                    </div>
                                    <div class="mt-3">
                                        <h4>{{ $vendorProfile->vendor_shop_name }}</h4>
                                        <p class="text-secondary mb-1">{{ $vendorProfile->email }}</p>
                                        <p class="text-muted font-size-sm">{{ $vendorProfile->address }}</p>
                                        {{-- <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button> --}}
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <ul class="list-group list-group-flush">
                                    {{-- Website --}}
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="{{ $vendorProfile->website }}" class="text-decoration-none" target="_blank">
                                        <h6 class="mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                            class="feather feather-globe me-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12">
                                                </line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                                <span class="text-secondary"></span>
                                            </h6>
                                        </a>    
                                    </li>
                                    {{-- Facebook --}}
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="{{ $vendorProfile->facebook }}" class="text-decoration-none" target="_blank">
                                            <h6 class="mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 64 64" aria-labelledby="title"
                                                    aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>Facebook</title>
                                                    <path data-name="layer1"
                                                        d="M39.8 12.2H48V0h-9.7C26.6.5 24.2 7.1 24 14v6.1h-8V32h8v32h12V32h9.9l1.9-11.9H36v-3.7a3.962 3.962 0 0 1 3.8-4.2z"
                                                        fill="#1877f2"></path>
                                                </svg> Facebook
                                            </h6>
                                        </a>
                                    </li>
                                    {{-- Instagram --}}
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="{{ $vendorProfile->instagram }}" class="text-decoration-none" target="_blank">
                                            <h6 class="mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>Instagram
                                            </h6>
                                        </a>
                                    </li>
                                    {{-- Linkedin --}}
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <a href="{{ $vendorProfile->linkedin }}" class="text-decoration-none" target="_blank">
                                            <div class="d-flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgba(53, 136, 223, 1);">
                                                    <path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"></path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>
                                                <h6 class="mb-0 ms-1">Linkedin</h6>
                                            </div>
                                        </a>
                                    </li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                {{-- Form starts here --}}
                                <form method="post" action="{{ route('vendor.profile.store') }}" enctype="multipart/form-data">
                                    @csrf

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Vendor Shop Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="vendor_shop_name" value="{{ $vendorProfile->vendor_shop_name }}" />
                                    </div>
                                </div>
                                <!-- end row --> 

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">FirstName</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="firstname" value="{{ $vendorProfile->firstname }}" />
                                    </div>
                                </div>
                                <!-- end row --> 

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Lastname</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="lastname" value="{{ $vendorProfile->lastname }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="username" value="{{ $vendorProfile->username }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="email" value="{{ $vendorProfile->email }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Instagram</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="instagram" value="{{ $vendorProfile->instagram }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Facebook</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="facebook" value="{{ $vendorProfile->facebook }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Website</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="website" value="{{ $vendorProfile->website }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Linkedin</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="linkedin" value="{{ $vendorProfile->linkedin }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="phone" value="{{ $vendorProfile->phone }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="address" value="{{ $vendorProfile->address }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Postcode</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="postcode" value="{{ $vendorProfile->postcode }}" />
                                    </div>
                                </div> 
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Role</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="role" value="{{ $vendorProfile->role }}" disabled/>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Job Title</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="job_title" value="{{ $vendorProfile->job_title }}" />
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Vendor Join Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="vendor_join" class="form-control" value="{{ $vendorProfile->vendor_join }}" disabled>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Vendor Short Info</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <textarea name="vendor_short_info" class="form-control" id="vendor_short_info" rows="3" style="height: 142px;">{{ $vendorProfile->vendor_short_info }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Profile image</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" class="form-control" name="photo" id="image">
                                    </div>
                                </div>
                                <!-- end row -->
                                     
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Update Profile"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    {{-- Form ends here --}}
                    </div>
                    
                        {{-- <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                        <p>Web Design</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Website Markup</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>One Page</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Mobile Template</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Backend API</p>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}

{{-- JS --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection
{{-- End Section --}}

