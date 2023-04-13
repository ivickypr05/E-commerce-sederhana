@extends('layouts.dashboard')

@section('title', 'Dashboard | Page')
@section('content') 
<style>
    body {
        background-image: url("https://img.freepik.com/free-vector/white-abstract-background_23-2148810113.jpg");
    }
</style>
<section data-bs-version="5.1" class="header7 cid-sUp808fGej" id="aheader7-2 mt-3">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 mt-5">
                
                <h1 class="mbr-section-title mbr-fonts-style align-center display-1"><strong>Welcome To Web Store</strong><br><strong>ReStyle Fourteen</strong></h1>
                <p class="mbr-text mbr-fonts-style-4 align-center display-5">
                    <br>
                    An application website that provides a variety of women's and men's 
                    clothing with the latest styles
                </p>
                <div class="mbr-section-btn align-center"><a class="btn btn-danger display-5" href="/login">Shop Now<span class="mobi-mbri mobi-mbri-right mbr-iconfont mbr-iconfont-btn" style="font-size: 20px"></span></a></div>
            </div>
        </div>
    </div>
</section>
@endsection