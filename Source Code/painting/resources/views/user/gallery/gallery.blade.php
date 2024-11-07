@extends('layouts.user_layout')

@section('content')
<div class="portfolio-gallery">
    @foreach($galleryItems as $galleryItem)
    <div class="gallery-item d-flex justify-content-between">
        <img width="480px" src="{{asset('admin/images/galleryImages')}}/{{$galleryItem->name}}" alt="">
    </div>
    @endforeach
    <!-- <div class="gallery-item nature">
        <img src="{{asset('user/master_gallery')}}/img/gallery/2.jpg" alt="">
    </div>
    <div class="gallery-item love">
        <img src="{{asset('user/master_gallery')}}/img/gallery/3.jpg" alt="">
    </div>
    <div class="gallery-item photo">
        <img src="{{asset('user/master_gallery')}}/img/gallery/5.jpg" alt="">
    </div>
    <div class="gallery-item nature">
        <img src="{{asset('user/master_gallery')}}/img/gallery/6.jpg" alt="">
    </div>
    <div class="gallery-item photo">
        <img src="{{asset('user/master_gallery')}}/img/gallery/4.jpg" alt="">
    </div> -->
</div>
@endsection