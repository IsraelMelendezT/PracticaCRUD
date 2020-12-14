
@extends('layouts.master')

@section('header') 
@section('navbar')
@stop
@section('cont')
<center>
@if(isset($poeta) && is_object($poeta))    
    <?php
        $title='Modificacion de un Usuario';
        $id=$poeta->poetCode;
        $firstName= $poeta->firstName;
        $surName= $poeta->surName;
        $address= $poeta->address;
        $postCode= $poeta->postCode;
        $telephoneNumber= $poeta->telephoneNumber;
        $boton='Actualizar';
    ?>
@else
     <?php
        $title='Alta de Usuario';
        $id='';
        $firstName= '';
        $surName='';
        $address= '';
        $postCode= '';
        $telephoneNumber= '';
        $boton='Dar de Alta';
    ?>
@endif
@section('title',' ')

<h1>  {{$title}}</h1>

<form action="{{isset($poeta) ? action('crud@update') :action ('crud@store')}}" method="POST">
        {{csrf_field()}}
        @if(isset($poeta) && is_object($poeta))    
            <input type="hidden", name="id", value="{{$id}}"/>
        @endif

        <label for="firstName" style="font-size: 150%;">Nombre</label><br>
        <input type="text"  name = "firstName" value="{{$firstName}}"/>
        <br>
        <label for="surName" style="font-size: 150%;">Apellido</label><br>
        <input type="text"  name = "surName" value="{{$surName}}"/>
        <br>
        <label for="address" style="font-size: 150%;">Dirección</label><br>
        <input type="text"  name = "address" value="{{$address}}"/>
        <br>
        <label for="postCode" style="font-size: 150%;">Código Postal</label><br>
        <input type="number"  name = "postCode" value="{{$postCode}}"/>
        <br>
        <label for="telephoneNumber" style="font-size: 150%;">Teléfono</label><br>
        <input type="number"  name = "telephoneNumber" value="{{$telephoneNumber}}"/>
        <br> 
        <br><button type="submit" class="btn btn-primary " value="{{$boton}}">{{$boton}}</button>
        

        <br> <br></center>
    </form> 

    
</div>

@stop
@section('footer')