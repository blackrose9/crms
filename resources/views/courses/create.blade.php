@extends('layouts.app')

@section('content')
<div class="container ">
    <form action="/course" enctype="multipart/form-data" method="post" class="pb-4">
        @csrf
        <div class="row">
            <div class="col-8 offset-2 border pl-5 pr-5 pt-3 pb-3">
                <div class="row">
                    <h1>Register Course</h1>
                </div>
                <div class="form-group row">
                    <label for="coursename" class="col-md-4 col-form-label">{{ __('Course Name') }}</label>

                    <input
                        id="coursename"
                        type="text"
                        class="form-control @error('coursename') is-invalid @enderror"
                        name="coursename"
                        value="{{ old('coursename') }}"
                        required autocomplete="coursename" autofocus>

                    @error('coursename')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="teachername" class="col-md-4 col-form-label">{{ __('Teacher Name') }}</label>

                    <input
                        id="teachername"
                        type="text"
                        class="form-control @error('teachername') is-invalid @enderror"
                        name="teachername"
                        value="{{ old('teachername') }}"
                        required autocomplete="teachername" autofocus>

                    @error('teachername')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="hours" class="col-md-4 col-form-label">{{ __('Total Number of Hours') }}</label>

                    <input
                        id="hours"
                        type="text"
                        class="form-control @error('hours') is-invalid @enderror"
                        name="hours"
                        value="{{ old('hours') }}"
                        required autocomplete="hours" autofocus>

                    @error('hours')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Unique Code</th>
            <th scope="col">Course Name</th>
            <th scope="col">Teacher Name</th>
            <th scope="col">Hours</th>
            <th scope="col">Select</th>
        </tr>
        </thead>
        <tbody>
{{--        @foreach($user->courses as $course)--}}
{{--        <tr>--}}
{{--            <th scope="row">{{$user->course->id}}</th>--}}
{{--            <td>{{$user->course->coursename}}</td>--}}
{{--            <td>{{$user->course->teachername}}</td>--}}
{{--            <td>{{$user->course->hours}}</td>--}}
{{--            <td><button class="btn btn-primary">Select</button> </td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
        </tbody>
    </table>
</div>
@endsection
