@extends('layouts.app')
@extends('layouts.task')

<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bg {
        /* The image used */
        background-image: url("{{asset('images/todo/board-3700116_1920.jpg')}}");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<div class="bg">
    @section('content')

        <div class="header">
            <h2>My To Do List</h2>
            <div class="container">
                <form>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="all">All
                    </label>
                    <?php
                    $categories = DB::table('tasks')->distinct()->orderBy('category')->get(['category']);

                    foreach($categories as $category)
                        echo "<label class=\"checkbox-inline\">
                        <input type=\"checkbox\" value=\"$category->category\">$category->category
                    </label>";
                    ?>
                </form>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-success " href="{{ route('tasks.create') }}"> Add new task</a>
            </div>
        </div>
        <ul id="myList">

            <li>
                <div class="row">
                    <div class="col-sm-2"><strong>Category</strong></div>
                    <div class="col-sm-2"><strong>Title</strong></div>
                    <div class="col-sm-7"><strong>Description</strong></div>
                    <div class="col-sm-1"><strong></strong></div>
                </div>
            </li>

            @foreach($tasks as $task)

            <li>
                <div class="row">
                    <div class="col-sm-2">{{ $task->category }}</></div>
                    <div class="col-sm-2">{{ $task->title }}</div>
                    <div class="col-sm-7">{{ $task->description }}</div>
                    <div class="col-sm-1">
                        @if($task->status == false)
                            <i class="icofont-flag" style="color: #ff0000;"></i>
                        @else
                            <i class="icofont-flag" style="color: #00c853;"></i>
                        @endif

                        <a href="{{ route('tasks.edit',$task->id) }}" style="text-decoration: none"><i class="icofont-ui-edit"></i></a>

                    </div>
                </div>
            </li>

            @endforeach
        </ul>
</div>
@endsection