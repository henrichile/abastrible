@extends('layouts.front')

@section('content')  
<section class="position-relative cover-background tz-builder-bg-image border-none hero-style9" style="padding-top: 0px; padding-bottom: 0px; background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1)), url(' {{ asset('images/uploads/fondoconecta3.jpg') }}');">
    <div class="container one-sixth-screen xs-one-third-screen position-relative">
        <div class="row">
            <div class="slider-typography text-center xs-position-absolute">
                <div class="slider-text-middle-main">
                    <div class="slider-text-middle">
                        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <img src="{{ asset('images/uploads/pizarrainicio_1.png') }}" alt="" style="border-radius: 0px; border-color: rgb(78, 78, 78); border-style: none; border-width: 1px !important;">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <a href="{{ route('trivia.front')}}" class="btn btn-extra-large propClone bg-light-green text-white btn-circle margin-five-top sm-margin-five-top xs-margin-ten-top tz-text">COMENZAR TRIVIA</a>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</section> 

    
    

    @endsection