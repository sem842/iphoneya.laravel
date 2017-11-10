<?php
//var_dump($services[0]->name); var_dump($services[0]->devices[0]->name); die;
/*foreach ($services as $key => $service)
    {
        var_dump($service->devices);
    }
die;*/
/*foreach ($devices as $key => $device)
{
    var_dump($device->service);
}
die;*/
//var_dump($countOfDevices); die;
//var_dump($devices); die;
?>

@extends('layouts.app')

@section('content')

    <div class="container">

        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('prices') }}">@lang('t.prices')</a></li>
            </ul>
        </nav>

        <h1>@lang('t.prices')</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        @if (Session::has('error-message'))
            <div class="alert alert-danger">{{ Session::get('error-message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>@lang('t.service')</td>
                <td>@lang('t.device')</td>
                <td>@lang('t.price')</td>
                {{--<td>@lang('t.group')</td>--}}
                {{--<td colspan="3">@lang('t.control')</td>--}}
            </tr>
            </thead>
            <tbody>
            {{--@foreach($devices as $device)
                <tr>
                    <td>{{ $device->services }}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach--}}
            {{--@foreach($services as $service)
                <tr>
                    <td rowspan="{{ $countOfBrands }}">{{ $service->name }}</td>
                    <td rowspan="{{ $countOfDevices }}">{{ $service->devices }}</td>
                    <td rowspan="{{ $countOfPrices }}">{{ $service->price }}</td>
                </tr>
            @endforeach--}}
            @foreach($services as $service)
                <tr rowspan="{{ $countOfDevices }}">
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->devices[0]->name }}</td>
                    <td>{{ $service->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
