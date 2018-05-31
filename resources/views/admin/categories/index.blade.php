@extends('layouts.app')
@section('content')
    <div class="panel panel-danger">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Category Name</th>
                <th>Editing</th>
                <th>Deleting</th>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-xs btn-info">
                                <span>Edit</span>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection