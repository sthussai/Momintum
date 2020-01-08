@extends('layouts.momintum')


@section('title','Payments')

@section('content')

    <div class="w3-center    w3-panel w3-card">

<!-- START Payment Nav Bar -->
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/payment">Home</a>           
                    <a class="w3-btn " href="/addpayer">Add Payment Information</a>
                    <a class="w3-btn " href="/updatepayer">Update Payment Information</a>


                </div>
<!-- END Payment Nav Bar -->

@yield('content1')


    </div>            



 @endsection



