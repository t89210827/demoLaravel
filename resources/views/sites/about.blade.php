<!DOCTYPE html>
@extends('app')
@section('content')
    <h3>foreach</h3>
    @if(count($people)>0)
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
    {{--<script>alert("你真棒");</script>--}}
    {{--<h1>About me {{$name}}  </h1>--}}
    {{--<div>你真棒</div>--}}
@stop