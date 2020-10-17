@extends('layout.app')

@section('title','Edit Todo')

@section('body')


    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-center text-success">Edit todo</h1>
                    </div>
                    <div class="card-body">
                        @if($errors->any())

                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif
                        <form action="/todos/{{$todo->id}}" method="POST">
                            @csrf
                            <dvi class="form-group">
                                <input
                                    type="text"
                                    class="form-control  mt-3"
                                    name="title"
                                    id="title"
                                    placeholder="Enter todo title"
                                    value="{{$todo->title}}"
                                    >
                            </dvi>
                            <dvi class="form-group">
                                <textarea  class="form-control mt-3"
                                           name="description"
                                           id="description"
                                           placeholder="Enter todo description"
                                           rows="4"
                                >{{$todo->description}}
                                </textarea>
                            </dvi>
                            <dvi class="form-group">
                                <input type="submit" value="Edit" class="btn btn-success mt-3" style="width:30%" >
                            </dvi>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
