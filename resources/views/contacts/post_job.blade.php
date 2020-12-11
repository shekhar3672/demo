@extends('layouts.app', ['activePage' => 'jobs', 'titlePage' => __('Post Job')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('savejob') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Contact') }}</h4>
                <p class="card-category">{{ __('Contact information') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ route('jobs') }}" class="btn btn-sm btn-primary">Back</a>
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
                      <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="first_name" type="text" placeholder="{{ __('first name') }}" value=""  aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" id="middle_name" type="text" placeholder="{{ __('middle name') }}" value=""  aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="last_name" type="text" placeholder="{{ __('last name') }}" value=""  aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('primary_phone') ? ' is-invalid' : '' }}" name="primary_phone" id="primary_phone" type="text" placeholder="{{ __('primary phone') }}" value=""  aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('secondary_phone') ? ' is-invalid' : '' }}" name="secondary_phone" id="secondary_phone" type="text" placeholder="{{ __('secondary phone') }}" value=""  aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" type="email" placeholder="{{ __('email') }}" value=""  aria-required="true"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>




              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Create Contact') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection