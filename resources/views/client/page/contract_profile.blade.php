@extends('client.app')
@section('title','User Profile')
@push('css')
<link rel="stylesheet" href="{{asset('client/css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('client/www.cssscript.com/demo/sticky.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('client/css/home-page.css')}}">
@endpush

@push('js')
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
@endpush

@section('content')

@if($errors->any())
    <div class="box1" style="background-color: #E3242B;">
        <h5><i></i> Alert!</h5>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form method="post" action="{{ route('profile.contract',[ 'id' =>$customers->id ]) }}">
    @csrf
    <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                User Profile
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active"
                                href="{{ route('profile.show') }}">General</a>
                            <a class="list-group-item list-group-item-action" 
                                href="{{ route('profile.edit',['id'=> Auth::user()->id]) }}">Change password</a>
                            <a class="list-group-item list-group-item-action" 
                                href="{{ route('profile.contract',['id'=>Auth::user()->id]) }}">Contract</a>
                        </div>   
                    </div>
@if (empty($contract))
    <p>You don't have any contracts.</p>
@else
    <div class="card-body">
                    <div class="card-tools">
                    <input type="text" name="customer_id" value="{{$customers->id}}" hidden>
                    <input type="text" name="insurance_id" value="{{$insurances->id}}" hidden>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="{{ $customers->firstname.' '.$customers->lastname }}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="{{$customers->email }}">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="{{$customers->phone }}">
                    </div>
                    <div class="form-group">
                        <label>Isnurance Name</label>
                        <input type="text" class="form-control" placeholder="{{ $insurances->policy->name }}">
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" placeholder="{{ $insurances->brand }}">
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" class="form-control" placeholder="{{ $insurances->model }}">
                    </div>
                    <div class="form-group">
                        <label>Value</label>
                        <input type="text" class="form-control" placeholder="{{ $insurances->model }}">
                    </div>
                    <div class="form-group">
                        <label>Price</label><br>
                        <a><input type="text" id="price" name="price" placeholder="{{ $insurances->price}}" for="productPrice" style="width: 1020px; height: 40px;">USD</a>
                    </div>
                    <div class="form-group">
                        <label for="start-date">StartDate</label>
                        <input type="text" name="startdate" id="startDate" class="form-control"  value="{{ $contract->startdate }}" readonly>
                    </div>
                    <div>
                    </div>
                    <div class="form-group">
                        <label for="end-date">EndDate</label>
                        <a> <input type="text" id="endDate" class="form-control" name="enddate" readonly value="{{ $contract->enddate }}"></a>
                    </div>
                    <div class="form-group">
                        <label for="totalPrice">Total Price</label>
                        <a><input type="text" id="totalPrice" readonly style="width: 1020px; height: 40px;"> USD</a>
                    </div>
                </div>
            </div>
@endif
        </div>
        </div>
    </form>
</div>
</form>
<script>
    function calculateEndDate() {
        // Lấy giá trị ngày bắt đầu từ input
        const startDateInput = document.getElementById("startDate");
        const startDate = new Date(startDateInput.value);

        // Lấy số tháng được chọn
        const months = parseInt(document.getElementById("months").value);

        // Kiểm tra xem ngày bắt đầu có hợp lệ hay không
        if (isNaN(startDate.getTime())) {
            alert("Ngày bắt đầu không hợp lệ. Vui lòng chọn ngày khác.");
            return;
        }

        // Tính ngày kết thúc bằng cách cộng thêm số tháng
        const endDate = new Date(startDate);
        endDate.setMonth(endDate.getMonth() + months);

        // Đặt giá trị ngày kết thúc vào input
        const endDateInput = document.getElementById("endDate");
        endDateInput.value = endDate.toISOString().slice(0, 10);
    }
</script>
<script>
    function calculateTotalPrice() {
        // Lấy giá tiền cơ bản từ thẻ span
        const price = parseFloat(document.getElementById("price").placeholder);

        // Lấy số tháng được chọn
        const months = parseInt(document.getElementById("months").value);

        // Tính giá tiền dựa trên số tháng
        const totalPrice = price * months;
        // Thêm đơn vị tiền tệ VND sau giá trị
        const formattedPrice = totalPrice.toLocaleString("vi-VN", {
            style: "currency",
            currency: "VND"
        });

        // Đặt giá trị tổng giá tiền vào input
        const totalPriceInput = document.getElementById("totalPrice");
        totalPriceInput.value = totalPrice.toFixed(2); // Làm tròn đến 2 chữ số thập phân
    }
</script>
@endsection
