@extends('admin.admin_dashboard')
{{-- Start Section --}}
@section('admin')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">All Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Product
                    </li>
                   
                </ol>
            </nav>
        </div>  
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.product') }}" class="btn btn" style="background-color: rgb(202, 18, 177); color: white;">Add Product</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Discount</th>
                            <th>Product Price After Dicsount</th>
                            <th>Product Dicsount Amount</th>
                            <th>Product QTY</th>
                            <th>Product Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allProduct as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><img src="{{ asset($item->product_thambnail) }}" style="width: 60px; height: 50px;"></td>
                                <td>{{ $item->product_name }}</td>
                                {{-- Product Price --}}
                                <td>
                                    <div style="font-size: 14px; border-radius: 50px; color: whitesmoke; display: inline-block; padding: 3px 10px;
                                        background-color: {{ !empty($item->product_price) ? '#89c943' : 'No Product Price Available' }}">
                                        {{ $item->product_price . '£' }}
                                    </div>
                                </td>
                                {{-- Product Discount --}}
                                <td> 
                                    <div style="font-size: 14px; border-radius: 50px; color: whitesmoke; display: inline-block; padding: 3px 10px;
                                        background-color: {{ empty($item->product_discount) || ($item->product_discount === 0) ? '#43A6C6' : '#ea5252' }};">
                                        {{ empty($item->product_discount) || $item->product_discount === 0 ? 'No Discount' : round(($item->product_discount / $item->product_price) * 100) . '%' }}
                                    </div>
                                </td>
                                {{-- Product Price After Discount --}}
                                <td>
                                    <div style="font-size: 14px; border-radius: 50px; color: whitesmoke; display: inline-block; padding: 3px 10px;
                                    background-color: 
                                        {{ (!empty($item->product_price) && !empty($item->product_discount)) ? '#ff9248' : '#43A6C6' }}">
                                        {{ !empty($item->product_price) && !empty($item->product_discount) ? ($item->product_price - $item->product_discount) . '£' : $item->product_price . '£' }}
                                    </div>
                                </td>
                                {{-- Product Dicsount Amount --}}
                                <td>
                                    <div style="font-size: 14px; border-radius: 50px; color: whitesmoke; display: inline-block; padding: 3px 10px;
                                        background-color: {{ !empty($item->product_discount) ? '#ff9248' : '#43A6C6' }}">
                                        {{ !empty($item->product_discount) ? $item->product_discount . '£' : 'No Product Discount Available' }}
                                    </div>
                                </td>
                                <td>{{ $item->product_qty }}</td>
                                <td>
                                    <span style="font-size: 14px; border-radius: 50px; color: white; display: inline-block; padding: 5px 12px;
                                        background-color: {{ $item->product_status == 'active' ? '#7A9D54' : '#ea5252' }}">
                                        {{ $item->product_status }}
                                    </span>
                                </td>
                                {{-- Change Product Status --}}
                                <td>
                                    <a href="{{ route('change.product.status', $item->id) }}"  
                                        style="font-size: 30px; display: inline-flex; flex-direction: column; align-items: center; text-decoration: none; position: relative; margin-right: 5px;">
                                        @if ($item->product_status == 'active')
                                            <i class="fa-regular fa-thumbs-up" style="color: #7A9D54;" title="Inactive Product Status"></i>
                                        @else
                                            <i class="fa-regular fa-thumbs-down" style="color: #ea5252;" title="Active Product Status"></i>
                                        @endif
                                    </a>
                                    {{-- <a href="{{ route('edit.subcategory', $item->id) }}" 
                                        style="font-size: 30px; display: inline-flex; flex-direction: column; align-items: center; text-decoration: none; position: relative; margin-right: 5px;" title="Product Details">
                                        <i class="fa-solid fa-eye" style="color: #1267a4;"></i>
                                    </a> --}}
                                    <a href="{{ route('edit.product', $item->id) }}" 
                                        style="font-size: 30px; display: inline-flex; flex-direction: column; align-items: center; text-decoration: none; position: relative; margin-right: 5px;" title="Edit Product">
                                        <i class="fa-solid fa-pen-to-square" style="color: #4D4C7D"></i>
                                    </a>
                                    <a href="{{ route('delete.product', $item->id) }}" id="delete" 
                                        style="font-size: 30px; display: inline-flex; flex-direction: column; align-items: center; text-decoration: none; position: relative; margin-right: 5px;" title="Delete Product">
                                        <i class="fa-solid fa-trash" style="color: #db5a6b"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Discount</th>
                            <th>Product Price After Dicsount</th>
                            <th>Product Dicsount Amount</th>
                            <th>Product QTY</th>
                            <th>Product Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
{{-- End Section --}}

