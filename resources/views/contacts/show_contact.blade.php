@extends('layouts.app', ['activePage' => 'contacts', 'titlePage' => __('Show contact')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('updatecontact') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Show Contact') }}</h4>
                <p class="card-category">{{ __('Contact information') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('contacts') }}" class="btn btn-sm btn-primary">Back</a>
                </div>
              </div>
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                
	
				<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('First Name:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="first_name" type="text" placeholder="{{ __('first name') }}" disabled="disabled" value="{{$data['first_name']}}"  aria-required="true"/>
                      @if ($errors->has('first_name'))
                        <span id="first_name-error" class="error text-danger" for="first_name">{{ $errors->first('first_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
				
				<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Middle Name:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('middle_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" id="middle_name" type="text" placeholder="{{ __('middle name') }}" disabled="disabled" value="{{$data['middle_name']}}"   aria-required="true"/>
                      @if ($errors->has('middle_name'))
                        <span id="middle_name-error" class="error text-danger" for="middle_name">{{ $errors->first('middle_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Last Name:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="last_name" type="text" placeholder="{{ __('last name') }}" disabled="disabled" value="{{$data['last_name']}}"  aria-required="true"/>
                      @if ($errors->has('last_name'))
                        <span id="last_name-error" class="error text-danger" for="last_name">{{ $errors->first('last_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
				
				<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Primary Phone:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('primary_phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('primary_phone') ? ' is-invalid' : '' }}" name="primary_phone" id="primary_phone" type="number" placeholder="{{ __('primary phone') }}" disabled="disabled" value="{{$data['primary_phone']}}"  aria-required="true"/>
                      @if ($errors->has('primary_phone'))
                        <span id="primary_phone-error" class="error text-danger" for="primary_phone">{{ $errors->first('primary_phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
				
				<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Secondary Phone:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('secondary_phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('secondary_phone') ? ' is-invalid' : '' }}" name="secondary_phone" id="secondary_phone" type="number" placeholder="{{ __('secondary phone') }}" disabled="disabled" value="{{$data['secondary_phone']}}"  aria-required="true"/>
                      @if ($errors->has('secondary_phone'))
                        <span id="secondary_phone-error" class="error text-danger" for="secondary_phone">{{ $errors->first('secondary_phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
				
				<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('email:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" type="email" placeholder="{{ __('email') }}"  disabled="disabled" value="{{$data['email']}}"  aria-required="true"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
				<div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Photo:') }}</label>
                  <div class="col-sm-7">
                   <div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail img-raised">
        <img src="{{ asset('images/' . $data->image) }}" alt="...">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
   
</div>

                
                  
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary" disabled="disabled">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection