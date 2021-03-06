@extends('layouts.myapp')

@section('content')
    <!-- Cab -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tags</li>
        </ol>
    </nav>
    <!-- Cab -->
    <div class="row">
        <div class="col-md-9">
            <h1>Tags</h1>
        </div>
        <div class="col-md-3">
            <a href="{{route('tags.create')}}" class="btn btn-block btn-primary">Criar Nova</a>
        </div>
    </div>
    <!-- Tabela com as Tags-->
    <table class="table table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tag</th>
                <th scope="col">Posts</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>    
                    <td>{{$tag->tag}}</td>
                    <td>{{count($tag->posts)}}</td>
                    <td class="text-right">
                        <a href="{{route('tags.show',$tag->id)}}" class="btn btn-sm btn-outline-secondary">+</a>
                    </td>
                </tr> 
            @empty
                <tr>
                    <td colspan="4">Ainda sem tags</td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
    

    {{$tags->links()}}
@endsection