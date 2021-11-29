@extends('layouts.front')

@section('content')  
<section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('{{ asset('images/uploads/pre_background.jpg')}}')">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <img src="{{ asset('images/uploads/logochico.png') }}" data-img-size="(W)803px X (H)245px" alt="">
        </div>
         <div class="col-md-10 col-sm-12 col-xs-12 center-col text-center">
                
<div style="font-size: 20px; color: white;"> Mi ranking en la tabla acumulativa es <strong>{{ $lugar}}</strong> con {{ $puntaje }} Ptos</div>

</br>
<div class="row">
    <div  class="col-md-12"  style="margin-bottom: 20px;">
        <nav role="navigation" class="primary-navigation">
            <ul>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="{{ route('trivia.ranking1') }}"><i class="fa fa-chevron-right"></i> Ranking 1</a></li>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="{{ route('trivia.ranking2') }}"><i class="fa fa-chevron-right"></i> Ranking 2</a></li>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="{{ route('trivia.ranking3') }}"><i class="fa fa-chevron-right"></i> Ranking 3</a></li>
              <li style="float: left;
              color: white;
              font-size: 18px; padding:10px;list-style: none;"><a style="color: white;font-size: 18px;" href="{{ route('trivia.ranking.acumulativo') }}"><i class="fa fa-chevron-right"></i> Ranking Acumulativo</a></li>
            </ul>
          </nav>
    </div>
    </div>
                
<div class="datagrid"><table>
<thead><tr><th>Nº</th><th>NOMBRE</th><th>AREA</th><th>PUNTAJE</th></tr></thead>

<tbody>
    @php
        $i=1;
    @endphp
    @foreach ( $ranking as $item)
    <tr><td>{{ $i }}</td><td>{{ $item->nombre }}</td><td>{{ $item->nombrearea }}</td><td>{{ $item->total }}</td></tr>
    @php
        $i++;
    @endphp
    @endforeach
</tbody>
</table></div>
                
                
                
    </div>
</section>  

    
    

    @endsection