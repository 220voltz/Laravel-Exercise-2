@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div> 
                        <div class="panel-body">
                            <form method="POST" action="{{ route('updateProfile') }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <!-- <div class="form-group">
                                    <label for="image" class="col-md-4 control-label">Image</label> 
                                    <div class="col-md-6">
                                        <input id="firstname" type="file" name="firstname" value="{{ Auth::user()->name }}" required="" autofocus="" class="form-control">
                                    </div>
                                </div>  -->
                                <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">Firstname</label> 
                                    <div class="col-md-6">
                                        <input id="firstname" type="text" name="firstname" value="{{ Auth::user()->name }}" required="required" autofocus="" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="lastname" class="col-md-4 control-label">Lastname</label> 
                                    <div class="col-md-6">
                                        <input id="lastname" type="text" name="lastname" value="" required="required" autofocus="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">Email</label> 
                                    <div class="col-md-6">
                                        <input id="email" type="email" name="email" value="{{ Auth::user()->email }}" required="required"  autofocus="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-4 control-label">Gender</label> 
                                    <div class="col-md-6">
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="radio" aria-label="Radio button for following text input" value=1 name=gender>
                                                Male
                                                
                                                <input type="radio" aria-label="Radio button for following text input" value=2 name=gender>
                                                Female
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="birthdate" class="col-md-4 control-label">Birthdate</label> 
                                    <div class="col-md-6">
                                        <input id="birthdate" type="date" name="birthdate" value="" required="required" autofocus="autofocus" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-md-4 control-label">Country</label> 
                                    <div class="col-md-6">
                                        <select class="form-control" name="country">
                                          <option selected disabled readonly>Select Country</option>
                                            @foreach ($countries as $country)
                                              <option value="{{ $country->name }}"> {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection