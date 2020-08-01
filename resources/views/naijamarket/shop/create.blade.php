@extends('layouts.front.master')
@push('css')

@endpush



@section('content')
<div class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('naijamarket.home')}}">Home</a></li>
                <li>Create Shop</li>
            </ul>
        </div>
    </div>
    <div class="ps-my-account">
        <div class="container">
            <form class="ps-form--account ps-tab-root" method="POST" action="{{route('shops.store')}}">
                @csrf
                <ul style="margin-top: -150px;" class="ps-tab-list">
                    <li class="active"><a href="#">Submit your shop</a></li>
                </ul>
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                            <h5>Create your shop on naiijamarket now <br />
                            <small>Fields Marked <font color="red">*</font> are Required</small>
                            </h5>
                            <div class="form-group">
                                <label for="name">Shop Name <font color="red">*</font></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="location">Location <font color="red">*</font></label>
                                <select class="form-control" name="location_id" id="location_id">
                                    @php
                                        $locations = \App\States::all();
                                    @endphp
                                    @foreach ($locations as $location)
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group submtit">
                                <button type="submit" class="ps-btn ps-btn--fullwidth">Submit</button>
                            </div>
                        </div>
                        <div class="ps-form__footer">
                            <p style="color: red">Your Account would require activation from the admin. and an email will be sent to the admin</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')

@endpush
