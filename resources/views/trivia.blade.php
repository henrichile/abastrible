@extends('layouts.front_trivia')

@section('content')  
    <section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('images/uploads/pre_background.jpg')">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                                <img src="images/uploads/logochico.png" data-img-size="(W)803px X (H)245px" alt="">
            </div>
             <div class="col-md-10 col-sm-12 col-xs-12 center-col text-center">
                @foreach ( $preguntas as $item)
                    <div class="text-medium sm-title-medium text-white sm-margin-five-bottom xs-title-small width-85 sm-width-100 center-col tz-text">PREGUNTA N° {{ ($respondidas+1) }} DE {{ $totalPreguntas }}</div>
                  
                    @php
                       // var_dump($item);
                        $sql2 = "select * from preguntas where id=?";
                        $pregunta= DB::select($sql2,array($item->idPregunta));
                        $sql22 = "select * from respuestas where idPregunta=? order by rand()";
                        $respuestas= DB::select($sql22,array($item->idPregunta));

                    @endphp
                        
                    
                    <h2 class="alt-font text-white title-large-2 line-height-50 sm-section-title-medium xs-section-title-medium margin-one-bottom sm-no-margin-top sm-margin-five-bottom xs-margin-five-bottom tz-text">{{ $pregunta[0]->pregunta }}</h2>
                    <div class="time text-white no-letter-spacing margin-ten-bottom" style="background-color: rgb(146, 29, 113)"> <span id="countdown"></span> SEGUNDOS</span></div>
                    
                     <div class="col-md-8 col-sm-10 col-xs-12 center-col">
                         @foreach ($respuestas as $itemr)
                         <div class="form-group radio_input title-small text-white width-100 sm-width-100 tz-text">
                            <label><input type="radio" name="pregunta{{ $itemr->id }}" value="{{ $itemr->id }}" class="icheck" style="cursor:pointer" onclick="validarPregunta({{ $itemr->id }}, {{ $itemr->idPregunta }}, {{ $item->id }} )">{{ $itemr->respuesta}}</label>
                        </div>
                         @endforeach          
                            </div>
                </div>       
                                <input type="hidden" id="pregunta" value="{{ $item->idPregunta }}">
                                <input type="hidden" id="preguntaCliente" value="{{ $item->id }}">    
                                <input type="hidden" id="segundos" value="">    

                @endforeach
                </div>
        </div>
    </section>  

    <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideo" aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
               
    
                <div class="form-group  mb-3 col-lg-12">
                    <video width="320" height="240" autoplay>
                        <source id="videos" src="" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                    </div>
                    <div class="form-group mb-3 col-lg-4">
                    </div>
                </form>
            </div>
        </div>
    </div><!-- End Register modal -->
    
    

    @endsection