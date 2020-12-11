@extends('layouts.app', ['activePage' => 'jobs', 'titlePage' => __('Show Job')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('updatejob') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            <input type="hidden" name="id" value="{{$data['id']}}">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Show Job') }}</h4>
                <p class="card-category">{{ __('Job information') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Job title:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="title" type="text" placeholder="{{ __('title') }}" value="{{$data['title']}}" required="true" aria-required="true" disabled="disabled" />
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="title">{{ $errors->first('title') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Company:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('company') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" id="company" type="text" placeholder="{{ __('company') }}" value="{{$data['company_name']}}" required="true" aria-required="true" disabled="disabled" />
                      @if ($errors->has('company'))
                        <span id="company-error" class="error text-danger" for="company">{{ $errors->first('company') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
                 <div class="row">
                   <label class="col-sm-2 col-form-label">{{ __('Job Location:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('jobLocation') ? ' has-danger' : '' }}">
                       <select type="text" class="form-control{{ $errors->has('jobLocation') ? ' is-invalid' : '' }} sel-status" id="jobLocation" name="jobLocation" required="true" aria-required="true" disabled="disabled">
                       <option value="">Please Select Job Location</option>
                              <option value="Bangalore" @if($data['job_location'] == "Bangalore") selected @endif>Bangalore</option>
                              <option value="Mumbai" @if($data['job_location'] == "Mumbai") selected @endif>Mumbai</option>
                              <option value="Pune" @if($data['job_location'] == "Pune") selected @endif>Pune</option>
                              <option value="Hyderabad" @if($data['job_location'] == "Hyderabad") selected @endif>Hyderabad</option>
                              <option value="Chennai" @if($data['job_location'] == "Chennai") selected @endif>Chennai</option>
                              <option value="Delhi-Noida" @if($data['job_location'] == "Delhi-Noida") selected @endif>Delhi-Noida</option>
                              <option value="Ahmedabad-Surat" @if($data['job_location'] == "Ahmedabad-Surat") selected @endif>Ahmedabad-Surat</option>
                              <option value="Bhopal-Indore" @if($data['job_location'] == "Bhopal-Indore") selected @endif>Bhopal-Indore</option>
                              <option value="Bhubaneswar" @if($data['job_location'] == "Bhubaneswar") selected @endif>Bhubaneswar</option>
                              <option value="Chandigarh" @if($data['job_location'] == "Chandigarh") selected @endif>Chandigarh</option>
                              <option value="Gao" @if($data['job_location'] == "Gao") selected @endif>Gao</option>
                              <option value="Jaipur" @if($data['job_location'] == "Jaipur") selected @endif>Jaipur</option>
                              <option value="Kerala" @if($data['job_location'] == "Kerala") selected @endif>Kerala</option>
                              <option value="Kolkata" @if($data['job_location'] == "Kolkata") selected @endif>Kolkata</option>
                              <option value="Lucknow" @if($data['job_location'] == "Lucknow") selected @endif>Lucknow</option>
                              <option value="Mysore" @if($data['job_location'] == "Mysore") selected @endif>Mysore</option>
                              <option value="Nagpur" @if($data['job_location'] == "Nagpur") selected @endif>Nagpur</option>
                              <option value="Mysore" @if($data['job_location'] == "Mysore") selected @endif>Mysore</option>
                              <option value="Patna" @if($data['job_location'] == "Patna") selected @endif>Patna</option>
                              <option value="Ranchi-Jamshedpur" @if($data['job_location'] == "Ranchi-Jamshedpur") selected @endif>Ranchi-Jamshedpur</option>
                              <option value="vijayawada" @if($data['job_location'] == "vijayawada") selected @endif>vijayawada</option>
                      </select>
                      @if ($errors->has('jobLocation'))
                        <span id="jobLocation-error" class="error text-danger" for="jobLocation">{{ $errors->first('jobLocation') }}</span>
                      @endif
                    </div>
                </div>
                </div>
                
                                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Skills Required:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('skills') ? ' has-danger' : '' }}">
                    <select type="text" class="form-control{{ $errors->has('skills') ? ' is-invalid' : '' }} sel-status" id="skills" name="skills" required="true" aria-required="true" disabled="disabled">
                          <option value="">Please Select Skills</option>
                          <option value="Accountant-Finance" @if($data['skills'] == "Accountant-Finance") selected @endif>Accountant-Finance</option>

                          <option value="Back Office-Data Entry-BPO" @if($data['skills'] == "Back Office-Data Entry-BPO") selected @endif>Back Office-Data Entry-BPO</option>
                          <option value="HR Executive" @if($data['skills'] == "HR Executive") selected @endif>HR Executive</option>
                          <option value="Networking" @if($data['skills'] == "Networking") selected @endif>Networking</option>
                          <option value="Software Developer" @if($data['skills'] == "Software Developer") selected @endif>Software Developer</option>
                          <option value="Software Testing" @if($data['skills'] == "Software Testing") selected @endif>Software Testing</option>
                          <option value="Mechanical"  @if($data['skills'] == "Mechanical") selected @endif>Mechanical</option>
                          <option value="Electrical" @if($data['skills'] == "Electrical") selected @endif>Electrical</option>
                          <option value="Electronics" @if($data['skills'] == "Electronics") selected @endif>Electronics</option>
                          <option value="Automobile" @if($data['skills'] == "Automobile") selected @endif>Automobile</option>
                          <option value="Instrumentation" @if($data['skills'] == "Instrumentation") selected @endif>Instrumentation</option>
                          <option value="Civil" @if($data['skills'] == "Civil") selected @endif>Civil</option>
                          <option value="Civil Design" @if($data['skills'] == "Civil Design") selected @endif>Civil Design</option>
                          <option value="Food Process" @if($data['skills'] == "Food Process") selected @endif>Food Process</option>
                          <option value="Pharma" @if($data['skills'] == "Pharma") selected @endif>Pharma</option>
                          <option value="Chemical" @if($data['skills'] == "Chemical") selected @endif>Chemical</option>
                          <option value="Store-Logistic" @if($data['skills'] == "Store-Logistic") selected @endif>Store-Logistic</option>
                          <option value="Fashion Design" @if($data['skills'] == "Fashion Design") selected @endif>Fashion Design</option>
                          <option value="PLC Automation" @if($data['skills'] == "PLC Automation") selected @endif>PLC Automation</option>
                          <option value="PCB-Embedded" @if($data['skills'] == "PCB-Embedded") selected @endif>PCB-Embedded</option>
                          <option value="Digital Marketing"  @if($data['skills'] == "Digital Marketing") selected @endif>Digital Marketing</option>
                          <option value="Marketing-Sale"  @if($data['skills'] == "Marketing-Sale") selected @endif>Marketing-Sale</option>
                </select>
                      @if ($errors->has('skills'))
                        <span id="skill-error" class="error text-danger" for="skill">{{ $errors->first('skills') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                   <label class="col-sm-2 col-form-label">{{ __('Description:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <textarea class="ckeditor form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="6" id="description" name="description" placeholder="{{ __('description') }}" required="true" aria-required="true" disabled="disabled">{{$data['description']}}</textarea>
                      @if ($errors->has('description'))
                        <span id="description-error" class="error text-danger" for="description">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                </div>
                </div>
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Mobile:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('mobile') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" id="mobile" type="number" placeholder="{{ __('mobile') }}" value="{{$data['mobile']}}" value="" required="true" aria-required="true" disabled="disabled"/>
                      @if ($errors->has('mobile'))
                        <span id="mobile-error" class="error text-danger" for="mobile">{{ $errors->first('mobile') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('email:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" type="email" placeholder="{{ __('email') }}" value="{{$data['email']}}" required="true" aria-required="true" disabled="disabled"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>



                     <div class="row">
                   <label class="col-sm-2 col-form-label">{{ __('Status:') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                       <select type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" id="status" name="status" required="true" aria-required="true" disabled="disabled">
                            <option value="0" @if($data['status'] == 0) selected @endif>Active</option>
                <option value="1" @if($data['status'] == 1) selected @endif>Expired</option>
                </select>
                      @if ($errors->has('status'))
                        <span id="status-error" class="error text-danger" for="status">{{ $errors->first('status') }}</span>
                      @endif
                    </div>
                </div>
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