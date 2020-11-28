@extends('../layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h2>{{$title}}</h2>
            <form method="post" action="{{ route('update', $notesList->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title"
                           value={{ $notesList->title }} class="form-control @error('title') is-invalid @enderror" name="title"/>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="md-form">
                        <label for="form7">Description:</label>
                        <textarea id="form7" name="description"
                                  class="md-textarea form-control @error('description') is-invalid @enderror"
                                  rows="3">{{ $notesList->description }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>
                <button type="submit" class="btn bgcolor text-white">Update</button>
            </form>
        </div>
    </div>
@endsection
