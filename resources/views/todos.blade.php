@extends('layout.app')

@section('title',' All Todos')


@section('body')


   <div class="container">
       <div class="row  pt-5 justify-content-center">
           <div class="col-md-6">
           <div class="card">
               <div class="card-header text-center">
                <h2>All Todos</h2>
               </div>
               <div class="card-body">
                   @if(session()->has('success'))

                       <div class="alert alert-success">{{session()->get('success')}}</div>

                       @endif
                    <ul class="list-group">
                        @forelse($todos as $todo)
                            <li class="list-group-item">{{$todo->title}}
                                <span class="float-right pl-2" >
                                <a href="todos/{{$todo->id}}/delete" style="color:red">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                    </span>
                                <span class="float-right" >
                                 <a href="todos/{{$todo->id}}">
                                      <i class="fas fa-eye pl-2"></i>
                                 </a>
                                </span>
                                <span class="float-right pl-2" >
                                 <a href="todos/{{$todo->id}}/edit" style="color:darkblue">
                                     <i class="fas fa-edit"></i>
                                 </a>
                                </span>
                                @if($todo->completed ==false)
                                <span class="float-right pl-2" >
                                 <a href="todos/{{$todo->id}}/completed" style="color:darkorange">
                                     <i class="fas fa-check-square"></i>
                                 </a>
                                </span>
                                @endif
                            </li>
                        @empty
                            <p class="text-center">No todo . </p>
                        @endforelse
                    </ul>
                   <a class="btn btn-info mt-4" href="/create">Add Todo</a>
               </div>
           </div>
       </div>
   </div>
   </div>

    @endsection
