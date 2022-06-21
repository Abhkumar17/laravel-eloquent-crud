<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>
                            <a class="btn btn-success" href="{{route('index')}}">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id"  value="{{$sumit->id}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$sumit->name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$sumit->email}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{$sumit->phone}}">
                            </div>
                            <button type="submit" class="form-control bg-success text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-layout>