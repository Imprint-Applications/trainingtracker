@extends('layouts.master')

@section('content')

<div class="container">
    <form method="POST" action="/profile">
        @csrf

        <div class="form-group">
            <label>Employer Name</label>
            <input type="text" class="form-control {{ $errors->has('employer_name') ? 'error' : '' }}" name="employer_name" id="employer_name">

            <!-- Error -->
            @if ($errors->has('employer_name'))
            <div class="error">
                {{ $errors->first('employer_name') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label>Employer Address</label>
            <input type="email" class="form-control {{ $errors->has('employer_address') ? 'error' : '' }}" name="employer_address" id="employer_address">

            @if ($errors->has('employer_address'))
            <div class="error">
                {{ $errors->first('employer_address') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label>Employer Post Code</label>
            <input type="text" class="form-control {{ $errors->has('employer_postcode') ? 'error' : '' }}" name="employer_postcode" id="employer_postcode">

            @if ($errors->has('employer_postcode'))
            <div class="error">
                {{ $errors->first('employer_postcode') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label>Employer Description</label>
            <input type="text" class="form-control {{ $errors->has('employer_description') ? 'error' : '' }}" name="employer_description" id="employer_description">

            @if ($errors->has('employer_description'))
            <div class="error">
                {{ $errors->first('employer_description') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label>Primary Color</label>
            <input type="text" class="form-control {{ $errors->has('employer_primary_color') ? 'error' : '' }}" name="employer_primary_color" id="employer_primary_color">

            @if ($errors->has('employer_primary_color'))
            <div class="error">
                {{ $errors->first('employer_primary_color') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label>Secondary Color</label>
            <input type="text" class="form-control {{ $errors->has('employer_secondary_color') ? 'error' : '' }}" name="employer_secondary_color" id="employer_secondary_color">

            @if ($errors->has('employer_secondary_color'))
            <div class="error">
                {{ $errors->first('employer_secondary_color') }}
            </div>
            @endif
        </div>

        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>

</div>
@endsection
