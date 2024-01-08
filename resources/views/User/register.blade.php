@extends('layouts.app')
@section('content')

@if(Session::has('success'))
        {{Session::get('success')}}
    @endif
    <div class="container">
        <div class="row">
            <div class="col-6">
                <br>
                <form action="{{url('/home/saveregisterr')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-4 offset-2 col-form-label">Name</label>
                        <div class="col-sm-6 ">
                            <input type="text" readonly class="form-control" name="name" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-2 col-form-label">Father Name </label>
                        <div class="col-sm-6 ">
                            <input type="text"  class="form-control" placeholder="Enter your father name" name="father">
                        </div>
                        @error('father')
                         {{$message}} <br/>
                         @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-2 col-form-label">Email</label>
                        <div class="col-sm-6 ">
                            <input type="text" readonly class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-2 col-form-label">Date Of Birth </label>
                        <div class="col-sm-6 ">
                            <input type="date"  class="form-control" placeholder="Enter your Date of Birth" name="dob">
                        </div>
                        @error('dob')
                        {{$message}} <br/>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-2 col-form-label">Gender </label>
                        <div class="col-sm-6 ">
                            <input type="text"  class="form-control" placeholder="Enter your Gender" name="gender">
                        </div>
                        @error('gender')
                        {{$message}} <br/>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 offset-2 col-form-label">photo </label>
                        <div class="col-sm-6 ">
                            <input type="file" accept="image/*"  class="form-control" placeholder="Enter your Gender" name="photo">
                        </div>
                        @error('photo')
                        {{$message}} <br/>
                        @enderror
                    </div>
                    <div class="offset-6">
                        <input class="btn btn-success" type="submit" name="sumbit" value="submit">

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
