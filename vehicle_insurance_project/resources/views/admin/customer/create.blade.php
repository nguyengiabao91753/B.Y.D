<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Customer Information</h2>
            </div>

        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>These were some problems with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    
    <form action="{{ route('admin.customer.store') }}" method="POST" >
        @csrf
        <div class="row">
            <div class="control-group col-sm-6" >
                <div class="form-group">
                    <label for="FirstName">First Name:</label>
                    <input type="text" id="title" class="form-control" name="FirstName"
                        placeholder="Enter First Name" >
                </div>
            </div>
            
            <div class="control-group col-sm-6">
                <div class="form-group">
                    <label for="LastName">Last Name:</label>
                    <input type="text" id="title" class="form-control" name="LastName"
                        placeholder="Enter Last Name" >
                </div>
            </div>
            
            <div class="control-group col-sm-6">
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="text" id="title" class="form-control" name="Email"
                        placeholder="Enter Email" >
                </div>
            </div>

            <div class="control-group col-sm-6">
                <div class="form-group">
                    <label for="Phone">Phone:</label>
                    <input type="text" id="title" class="form-control" name="Phone"
                        placeholder="Enter Phone" >
                </div>
            </div>

            <div class="control-group col-sm-6">
                <div class="form-group">
                    <label for="Address">Address:</label>
                    <input type="text" id="title" class="form-control" name="Address"
                        placeholder="Enter Address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <br>
                <button type="submit" class="btn btn-primary">Add Information</button>
            </div>
        </div>
    </form>
