@extends('/layouts/app')

@section('content')


    <div class='container mt-5'>

        <form method='post' action='/reveals' enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1" class='font-weight-bold'>Name</label>
                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput2" class='font-weight-bold'>Password</label>
                <input type="time" name="from" class="form-control" id="exampleFormControlInput2" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput2" class='font-weight-bold'>Password</label>
                <input type="time" name="to" class="form-control" id="exampleFormControlInput2" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput3" class='font-weight-bold'>Email</label>
                <input type="number" name="limit" class="form-control" id="exampleFormControlInput3" required>
            </div>

            <button type="submit" class="btn btn-success">Create</button>

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