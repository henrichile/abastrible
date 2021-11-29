@extends('layouts.front')

@section('content')  
<section class="padding-110px-tb xs-padding-60px-tb cover-background tz-builder-bg-image border-none" id="content-section15" data-img-size="(W)1920px X (H)900px" style="background:linear-gradient(rgba(0,0,0,0.01), rgba(0,0,0,0.01)), url('{{ asset('images/uploads/pre_background.jpg')}}')">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center">
                            <img src="{{ asset('images/uploads/logochico.png') }}" data-img-size="(W)803px X (H)245px" alt="">
        </div>
         <div class="col-md-10 col-sm-12 col-xs-12 center-col text-center">
                


</br>

                
<div class="datagrid"><table>
<thead><tr><th>Nº</th><th>AREA</th><th>70%</th><th>30%</th><th>PORCENTAJE</th></tr></thead>

<tbody>
    @php
        $i=1;
    @endphp
    @foreach ( $listadoAreas as $item)
    <tr><td>{{ $i }}</td><td>{{ $item['area'] }}</td><td>{{ number_format($item['70'],'2',',','.') }}</td><td>{{ number_format($item['30'],'2',',','.') }}</td><td>{{ number_format($item['puntos'],'2',',','.')." %" }}</td></tr>
    @php
        $i++;
    @endphp
    @endforeach
</tbody>
</table></div>
                
                
                
    </div>
</section>  

    
    

    @endsection