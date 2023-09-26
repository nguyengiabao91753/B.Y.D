<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<style>
    h1{
        font-size: 70px;
    }
    .bd{
        margin-left: 200px;
    }
    table {
        width: 100%;
        font-size: 18px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
    th,tr{
        text-align: center;
    }
</style>
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
    <form action="{{route('admin.payment.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div><h1>Add a Payment</h1></div><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>Payment Name :</strong><br>
                    <input type="text" name="customer_id" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary" action="{{route('admin.payment.index')}}">Add Payment</button>
            </div>
        </div>
    </form>