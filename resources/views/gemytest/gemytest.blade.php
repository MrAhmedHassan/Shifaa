
@extends('/layouts/app')
@section('content')



    <div class='container mt-5'>
        <form method='post' action='/reveals' enctype="multipart/form-data">
            @csrf
            <div class="form-group">

          
                <label for="exampleFormControlInput1" class='font-weight-bold'>day</label>

               <select name="day">
                   <option value="saturday">saturday</option>
                   <option value="sunday">sunday</option>
                   <option value="monday">monday</option>
                   <option value="tuesday">tuesday</option>
                   <option value="wednesday">wednesday</option>
                   <option value="thursday">thursday</option>
                   <option value="friday">friday</option>
               </select>
            </div>
{{$reveal}}
            <div class="form-group">
                <label for="exampleFormControlInput2" class='font-weight-bold'>from</label>
                <input type="time" name="from" class="form-control" id="exampleFormControlInput2" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2" class='font-weight-bold'>to</label>
                <input type="time" name="to" class="form-control" id="exampleFormControlInput2" >
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3" class='font-weight-bold'>limit</label>
                <input type="number" name="limit" class="form-control" id="exampleFormControlInput3" required>
            </div>


            <input type="submit" value="create" class="btn btn-success">Create</input>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>

    </div>

@endsection

