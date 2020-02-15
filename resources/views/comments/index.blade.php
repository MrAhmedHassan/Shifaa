@extends('layouts.app')
@section('content')


<div class='d-flex justify-content-center align-items-center m-5'>
  <a href="{{route('comments.create')}}"><button type="button" class="btn btn-success py-2">Create Default Comment</button></a>
</div>

<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User_id</th>
        <th scope="col">Comment</th>
        <th scope="col">Created_at</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comments as $comment => $value)
      <tr>
        <th scope="row">{{$value['id']}}</th>
        <td>{{$value['user_id']}}</td>
        <td>{{$value['comment']}}</td>
        <td>{{$value['created_at']}}</td>

        <td class="d-flex ">
          <a href="comments/approve/{{$value['id']}}" class="mx-2"><button type="button" class="btn btn-info">Approve</button></a>

          <form method="post" action="/comments/{{$value['id']}}">
            {{method_field('DELETE')}}
            @csrf
            <button type="submit" class="btn btn-danger" onclick='return confirm("Do you Really Want to Delete ?!!")'>Delete</button>
          </form>

        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>

@endsection