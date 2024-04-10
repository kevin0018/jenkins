@extends('layouts.cine')
@section('title', 'Privacy Policy')
@section('content')
<a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
<h1 class="text-warning">Compatible Devices with Jenkins</h1>
<p>Welcome to Jenkins! While our platform is innovative and exciting, it is currently only available for use on specific devices. Here's a list of compatible devices:</p>
<ul>
    <li>Laptops and Desktop Computers: Enjoy Jenkins on any modern web browser on your computer!</li>
    <li>Smartphones and Tablets: Access Jenkins through mobile browsers on iOS and Android devices.</li>
    <li>Streaming Devices: We will soon launch a Jenkins app for devices such as Roku, Apple TV, Amazon Fire TV, and Google Chromecast.</li>
</ul>
<p>We are working hard to expand our compatibility with other devices, so be sure to keep an eye on our updates!</p>
@endsection