@extends('layouts.app')
@section('content')


<div class='d-flex justify-content-center align-items-center m-5'>
<a href="{{route('comments.create')}}"><button type="button" class="btn btn-success py-2">Create Default Comment</button></a>
</div>

<div class="container-fluid">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User_id</th>
      <th scope="col">Title</th>
      <th scope="col">Article</th>
      <th scope="col">User_id</th>
      <th scope="col">Comment</th>

      <!-- <th scope="col"><span style="margin-left: 100px">CRUD</span></th> -->
    </tr>
  </thead>
  <tbody>
    
  @foreach($articles as $article => $value)  
  <tr>
      <td>{{$value['user_id']}}</td>
      <td>{{$value['title']}}</td>
      <td>{{$value['description']}}</td>
  @endforeach
  @foreach($comments as $comment => $value)  
      <td>{{$value['user_id']}}</td>
      <td>{{$value['comment']}}</td>
     



      <td class="d-flex ">
      <a href="comments/approve/{{$value['id']}}" class="mx-2"><button type="button" class="btn btn-info">Approve C</button></a>
    
      <form method="post" action="/comments/{{$value['id']}}">
      {{method_field('DELETE')}}
      @csrf
      <button type="submit" class="btn btn-danger" onclick='return confirm("Do you Really Want to Delete ?!!")'>Delete c</button>
      </form>

      </td>
    </tr>
    @endforeach

    
  </tbody>
</table>
</div>

@endsection

