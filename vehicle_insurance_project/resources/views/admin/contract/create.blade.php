<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Contrac Information</h2>
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

    
    <form action="{{ route('admin.contract.store') }}" method="POST" >
        @csrf
        <div class="row">
            <div class="control-group col-sm-12">
                <div class="form-group">
                    <label for="account_id">AccountID:</label>
                    <input type="text" id="title" class="form-control" name="LastName"
                        placeholder="Account ID" >
                </div>
            </div>
            
            <div class="control-group col-sm-12">
                <div class="form-group">
                    <label for="policy_id">PolicyID :</label>
                    <input type="text" id="title" class="form-control" name="Email"
                        placeholder="Policy ID" >
                </div>
            </div>

            <div class="control-group col-sm-12">
                <div class="form-group">
                    <label for="Phone">EndDate:</label>
                    <input type="text" id="title" class="form-control" name="Phone"
                        placeholder="End Date" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <br>
                <button type="submit" class="btn btn-primary" action="{{route('admin.contract.index')}}">Add Information</button>
            </div>
        </div>
    </form>
