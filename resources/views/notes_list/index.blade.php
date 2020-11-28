@extends('../layouts.app')

@section('content')

    <div>
        <h2>{{$title}}</h2>
        <h4><a href="{{ route('create')}}" class="btn text-white bgcolor">Add new Notes</a></h4>
        <table class="table table-striped notelists">
            <thead class="text-white bgcolor">
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Created At</td>
                <td colspan="2">Action</td>

            </tr>
            </thead>
            <tbody>
            @foreach($notesLists as $notesList)
                <tr>
                    <td>{{$notesList->id}}</td>
                    <td>{{$notesList->title}}</td>
                    <td>{{$notesList->description}}</td>
                    <td>{{$notesList->created_at}}</td>
                    <td class="px-0 mx-0" style="width: 50px">
                        <a href="{{ route('edit',$notesList->id)}}" class="btn btn-primary"><i
                                class="fa fa-edit"></i></a>
                    </td>
                    <td class="px-0 mx-0">
                        <form action="{{ route('destroy', $notesList->id)}}" method="post" class="px-0 mx-0">
                            @csrf
                            @method('DELETE')
                            {{--                                    <a href="{{url("/backend/subcategory/$item->id")}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>--}}

                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


