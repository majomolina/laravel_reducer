<!--create a form to upload an image and send it to the controller to change the size and after allow download the new file-->
@extends('layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Image</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('image.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">    

                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Create thumbnail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
```
