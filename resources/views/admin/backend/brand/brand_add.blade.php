@extends('admin.admin_dashboard')
{{-- Start Section --}}
@section('admin')

<!-- Image Reload JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <a href="{{ route('all.brand') }}" class="breadcrumb-title pe-3">All Product</a>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Form starts here --}}
                            <form id="myForm" method="post" action="{{ route('store.brand') }}" enctype="multipart/form-data">
                                @csrf
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ url('upload/no_image.jpg') }}" 
                                    alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div><br>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Brand name</h6>
                                </div>
                                <div class="form-group col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="brand_name" />
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Brand image</h6>
                                </div>
                                <div class="form-group col-sm-9 text-secondary">
                                    <input type="file" class="form-control" name="brand_image" id="image" />
                                    <small class="text-muted">Note: The image will be automatically resized with a total size of less than 2MB</small>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn px-4" style="background-color: rgb(202, 18, 177); color: white;" value="Add Brand"/>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- Form ends here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Validation min.JS --}}
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                brand_name: {
                    required : true,
                },
                brand_image: {
                    required : true,
                },   
            },
            messages :{
                brand_name: {
                    required : 'Please Enter Brand Name',
                },
                brand_image: {
                    required : 'Please Add Brand Image',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

{{-- JS  Toaster --}}
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