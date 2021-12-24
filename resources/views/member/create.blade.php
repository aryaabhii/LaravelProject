@extends('layouts.admin')

@section('title')
{{ __('New Member') }}
@endsection

@section('content')
    <div class="row">
      <div class="col">
         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
      </div>
      
    </div>
    <div class="row justify-content-center">
                  

        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">{{ __('New Member') }}</h6>
                </div>
                <div class="card-body">
                 <form method="post" action="{{ route('members.create') }}">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Full Name') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder=" Enter Full Name" id="inputEmail3" name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Email Address') }}</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" placeholder=" Enter Email Id" id="inputPassword3" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder=" Enter Password" id="inputPassword3" name="password" value="{{old('password')}}">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Phone') }}</label>
                      <div class="col-sm-9">
                        <input type="tel" class="form-control" placeholder=" Enter Mobile Number" id="inputPassword3" name="phone" maxlength="10" value="{{old('phone')}}">
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Membership Type') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="membership_type">
                          <option value="3 Months">{{ __('3 Months') }}</option>
                          <option value="6 Months">{{ __('6 Months') }}</option>
                          <option value="9 Months">{{ __('9 Months') }}</option>
                          <option value="12 Months">{{ __('12 Months') }}</option>
                          <option value="18 Months">{{ __('18 Months') }}</option>
                          <option value="24 Months">{{ __('24 Months') }}</option>
                        </select>
                        <span class="text-danger">@error('membership_type') {{$message}} @enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Membership Validation') }}</label>
                      <div class="col-sm-9">
                      <input type="date" class="form-control" placeholder=" Enter Membership Validation" id="inputPassword3" name="membership_validation" value="{{old('membership_validation')}}">
                                        <span class="text-danger">@error('membership_validation') {{$message}} @enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Gym Name') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder=" Enter Gym Name" id="inputEmail3" name="gymname" value="{{old('gymname')}}">
                        <span class="text-danger">@error('gymname') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Gym Phone') }}</label>
                      <div class="col-sm-9">
                        <input type="tel" class="form-control" placeholder=" Enter Gym Mobile Number" id="inputPassword3" name="gymphone" maxlength="10" value="{{old('gymphone')}}">
                        <span class="text-danger">@error('gymphone') {{$message}} @enderror</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Gym Address') }}</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder=" Enter Gym Address" id="inputPassword3" name="gymaddress" value="{{old('gymaddress')}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Membership Status') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <select class="form-control" name="membership_status">
                          <option value="Paid">{{ __('Paid') }}</option>
                          <option value="Unpaid">{{ __('Unpaid') }}</option>
                        </select>
                        <span class="text-danger">@error('membership_status') {{$message}} @enderror</span>
                      </div>
                    </div>

                    <div class="form-group row"  style="text-align: center;">
                      <div class="col-sm-9" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            
        </div>

    </div>

@endsection

@section('header')

@endsection

@section('footer')

@endsection
