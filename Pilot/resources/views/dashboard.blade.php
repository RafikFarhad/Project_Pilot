@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <?php 
                    $all_article = DB::table('articles')->where('user', Auth::user()->id)->get();
                ?>
                @foreach($all_article as $art)
                    <a href="/article/{{$art->id}}">{{ $art->title }}</a>
                    <label> {{substr($art->para, 0, 300) }} </label> <br>
                    <?php
                        $user = DB::table('users')->where('id', $art->user)->first();
                    ?>
                    <label> USER:  {{Auth::user()->name}} </label>
                    <br>
                    <label> Published on: {{$art->published}}  </label>
                    <br>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
