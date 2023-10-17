@extends('client.app')
@section('title','User Contract')
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
<link rel="stylesheet" href="{{asset('client/css/contact-us.css')}}">
@endpush

@section('content')

<div class="container light-style flex-grow-1 container-p-y">
    <form method="post" action="{{route('contract_user.store',['id'=>$customer->id])}}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 style="text-align: center;">Contract insurances</h3>
                <div>
                    @if($errors->any())
                    <div class="session">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5> -->
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <div class="session">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     <h5><i class="icon fas fa-check"></i> Alert!</h5> -->
                        {{Session::get('success')}}
                    </div>
                    @endif
                </div>
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
                        <input type="text" class="form-control" placeholder="{{ $insurance->model }}">
                    </div>
                    <div class="form-group">
                        <label>Price</label><br>
                        <a><input type="text" id="price" name="price" placeholder="{{ $insurances->price}}" for="productPrice" style="width: 1020px; height: 40px;">USD</a>
                    </div>
                    <div class="form-group">
                        <label for="start-date">StratDate</label>
                        <input type="date" id="startDate" class="form-control" min="2018-09-24" max="2025-10-20" onchange="calculateEndDate()">
                    </div>
                    <div>
                        <label for="months">Select Month:</label>
                        <select id="months" onchange="(calculateEndDate(),calculateTotalPrice())">
                            <option value="1">1 tháng</option>
                            <option value="3">3 tháng</option>
                            <option value="6">6 tháng</option>
                            <!-- Thêm các tùy chọn khác nếu cần -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="end-date">EndDate</label>
                        <a> <input type="date" id="endDate" class="form-control" name="enddate" readonly></a>
                    </div>
                    <div class="form-group">
                        <label for="totalPrice">Total Price</label>
                        <a><input type="text" id="totalPrice" readonly style="width: 1020px; height: 40px;"> USD</a>
                    </div>
                    <div class="form-group">
                    </div>
                </div>
            </div>
            <div class="btn">
                <button href="{{route('',['id'=>$item->id])}}" type="submit">Send</button>
            </div>
        </div>
    </form>
</div>
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
            currency: "USD"
        });

        // Đặt giá trị tổng giá tiền vào input
        const totalPriceInput = document.getElementById("totalPrice");
        totalPriceInput.value = totalPrice.toFixed(2); // Làm tròn đến 2 chữ số thập phân
    }
</script>
@endsection