@extends('layouts.app')
@extends('layouts.task')


@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Add task</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        <label for="category"><strong>New category:</strong></label>
                        <input type="text" name="category" class="form-control" placeholder="New category">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="category"><strong>Select an existing category:</strong></label>
                        <select class="form-control" id="category" name="category">
                            <option hidden disabled selected value> -- select an category -- </option>

                            <?php
                            $categories = DB::table('tasks')->distinct()->orderBy('category')->get(['category']);

                            foreach($categories as $category)
                                echo "<option value=\"$category->category\">$category->category</option>";
                            ?>

                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="title"><strong>Title:</strong></label>
                        <input type="text" name="title" class="form-control" placeholder="Task Title">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="description"><strong>Description:</strong></label>
                        <textarea class="form-control rounded-0" name="description" placeholder="Describe your task"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        <label for="status"><strong>Status:</strong></label>
                        <select class="form-control" name="status">
                            <option value="0">in progress</option>
                            <option value="1">ready</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">Add task</button>
                </div>
                <div class="col-lg-6 text-center" style="margin-top:10px;margin-bottom: 10px;">
                    <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
                </div>
            </div>
        </div>

    </form>
@endsection
