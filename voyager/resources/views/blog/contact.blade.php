@extends('master')

@section('content')

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @elseif(session()->has('error_message') && session()->get('error_message') != '')
        <div class="alert alert-danger">
            {{ session()->get('error_message') }}
        </div>
    @endif

    <form name="sentMessage" id="contactForm" method="get" action="{{ route('contact.store') }}" novalidate>
        {{ csrf_field() }}
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Nom</label>
                <input type="text" class="form-control" name="Nom" value="{{ old('Nom') }}" placeholder="Nom" id="Nom" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger">{{ $errors->first('Nom') }}</p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Prenom</label>
                <input type="text" class="form-control" name="Prenom" value="{{ old('Prenom') }}" placeholder="Prenom" id="Prenom" required data-validation-required-message="Please enter your Prenom.">
                <p class="help-block text-danger">{{ $errors->first('Prenom') }}</p>
                <label>Addresse</label>
                <input type="text" class="form-control" name="Addresse" value="{{ old('Addresse') }}" placeholder="Addresse" id="Addresse" required data-validation-required-message="Please enter your Addresse.">
                <p class="help-block text-danger">{{ $errors->first('Addresse') }}</p>

                <label>Email </label>
                <input type="email" class="form-control" name="Email" value="{{ old('Email') }}" placeholder="Email" id="Email" required data-validation-required-message="Please enter your email .">
                <p class="help-block text-danger">{{ $errors->first('Email') }}</p>
                <label>Region</label>
                <input type="text" class="form-control" name="Region" value="{{ old('Region') }}" placeholder="Region" id="Region" required data-validation-required-message="Please enter your Region.">
                <p class="help-block text-danger">{{ $errors->first('Region') }}</p>

            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message.">{{ old('message') }}</textarea>
                <p class="help-block text-danger">{{ $errors->first('message') }}</p>
            </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">envoyer</button>
        </div>
    </form>

@endsection
