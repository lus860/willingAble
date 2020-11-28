@extends('../layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h2>{{$title}}</h2>
            <div>

                <form method="post" action="{{ route('store') }}" id="form1">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <div>
                            <input type="text" id="title" class="form-control @error('title') is-invalid
                                   @enderror" name="title" value="{{ old('title') }}"/>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="md-form">
                            <label for="form7">Description:</label>
                            <textarea id="form7" name="description"
                                      class="md-textarea form-control @error('description') is-invalid @enderror"
                                      rows="3">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn bgcolor text-white">Add Notes List</button>
                </form>
            </div>
        </div>
    </div>
@endsection
