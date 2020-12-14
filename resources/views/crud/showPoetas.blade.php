@extends('layouts.master')
@section('title', 'Poetas')
@section('navbar')
@stop
@section('header')
@section('cont')

    <table class="table table-striped table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">APELLIDO(S)</th>
        <th scope="col">DIRECCIÓN</th>
        <th scope="col">C.P</th>
        <th scope="col">TELÉFONO</th>
        <th scope="col">ACTUALIZAR</th>
        <th scope="col">ELIMINAR</th>

        </tr>
    </thead>
    <tbody>
        @foreach($poetas as $poeta)
        <tr>
            <th scope="row">{{$poeta->poetCode}}</th>
            <td>{{$poeta->firstName}}</td>
            <td>{{$poeta->surName}}</td>
            <td>{{$poeta->address}}</td>
            <td>{{$poeta->postCode}}</td>
            <td>{{$poeta->telephoneNumber}}</td>

            <td><center><a href="{{action('crud@show',['id' =>$poeta->poetCode])}}"><img src="images/actualizar.png" alt="update" width="50px"></a></center></td>
            <td><center><a href="{{action('crud@destroy', ['id' =>$poeta->poetCode])}}"><img src="images/boton-x.png" alt="delete" width="50px"></a></center></td>

        </tr>
        @endforeach
    </tbody>
    </table>


@stop
