<x-layout>
    <style>
        .card{
            background-color: darkgreen;
        }
    </style>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white text-lg-right">
                        <h3> <a href="{{route('sumit.create')}}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Add Record</a></h3>
                    </div>
                    <div class="card-body">
                        @if (Session()->has('status'))
                            <div class="alert alert-danger" role="alert">{{Session('status')}}</div>
                        @endif
                       <table class="table table-striped text-white bg-secondary text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sumits as $sumit)
                            <tr>
                                <td>{{$sumit->id}}</td>
                                <td>{{$sumit->name}}</td>
                                <td>{{$sumit->email}}</td>
                                <td>{{$sumit->phone}}</td>
                                <td>
                                    <a href="{{url('/edit',$sumit->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('/destroy',$sumit->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       </table>
                       {{$sumits->links()}}
                    </div>
                    <div class="card-footer bg-danger text-white text-lg-center">
                        <h3>This Crud Aplication designed by Abhishek @2021</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>