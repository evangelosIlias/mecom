@extends('admin.admin_dashboard')
{{-- Start Section --}}
@section('admin')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">User Status</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User Status Details</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
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
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- All Vendor Users --}}
                        @foreach ($allUserStatus as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->firstname }}</td>
                            <td>{{ $item->lastname }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                @if($item->status == 'inactive')
                                <span style="font-size: 12px; background-color: #ea5252; border-radius: 50px; color: white; display: inline-block; padding: 5px 10px;">
                                    {{ $item->status }}
                                </span>
                                @else
                                    <span style="font-size: 12px; background-color: #7A9D54; border-radius: 50px; color: white; display: inline-block; padding: 5px 10px;">
                                        {{ $item->status }}
                                    </span>
                                @endif
                            </td>
                            <td>
                                {{-- <a href="{{ route('check.vendor.details', $item->id) }}"
                                    style="font-size: 30px; display: inline-flex; flex-direction: column; align-items: center; text-decoration: none; position: relative; margin-right: 5px;">
                                    <i class="fa-solid fa-pen-to-square" style="color: #6235b6;"></i>
                                </a>
                                <a href="{{ route('delete.vendor.details', $item->id) }}" id="delete" 
                                    style="font-size: 30px; display: inline-flex; flex-direction: column; align-items: center; text-decoration: none; position: relative;">
                                    <i class="fa-solid fa-trash"  style="color: #ac2051;" ></i>
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                        {{-- End ForEach Loop --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
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
