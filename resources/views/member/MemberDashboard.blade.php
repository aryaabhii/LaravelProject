@extends('layouts.member')

@section('title','Fitness-GYM | Dashboard')

@section('content')

        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Member Dashboard</h1>
          <div class="row">
            <div class="col-md-3">
              <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                  <h3 class="fs-2">110</h3>
                  <p class="fs-5">Members</p>
                </div>
                  <i class="fa fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
              </div>
            </div>        
            <div class="col-md-3">
              <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                  <h3 class="fs-2">75</h3>
                  <p class="fs-5">Staffs</p>
                </div>
                <i class="fa fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
              </div>
            </div>
            <div class="col-md-3">
              <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                  <h3 class="fs-2">45</h3>
                  <p class="fs-5">Users</p>
                </div>
                <i class="fa fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
              </div>
            </div>
            <div class="col-md-3">
              <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                  <h3 class="fs-2">15</h3>
                  <p class="fs-5">Categories</p>
                </div>
                <i class="fa fa-list-alt fs-1 primary-text border rounded-full secondary-bg p-3"></i>
              </div>
            </div>
          </div>
        </div>  

        
@endsection
