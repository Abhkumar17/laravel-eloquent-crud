<x-layout>
    <style>
        .card{
            background-color: darkgreen;
        }
    </style>
<div class="container m-5 ">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h1>Create Record</h1>
                    <h3>
                        <a class="btn btn-success" href="{{route('index')}}">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    @if (Session()->has('status'))
                        <div class="alert alert-danger" role="alert">{{Session('status')}}</div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>
                        <button type="submit" class="form-control bg-success text-white">Submit</button>
                    </form>
                </div>
                <div class="card-footer bg-danger text-white text-lg-center">
                    <h3>This Crud Aplication designed by Abhishek @2021</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>