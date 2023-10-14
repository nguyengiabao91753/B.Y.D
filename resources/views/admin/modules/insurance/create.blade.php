@extends('admin.master')

@section('module', 'Insurance detail')
@section('action', 'Create')


@section('content')
<form method="post" action="{{ route('admin.insurance.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Insurance detail create</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Provider</label>
                        <select class="form-control" name="provider_id">
                            <option value="0" {{old( 'provider_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            @foreach($providers as $provider)
                            @if($provider->status==1)
                            <option value="{{$provider->id}}" {{old( 'provider_id' ) == $provider->id ? 'selected' : '' }}>{{$provider->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Insurance policy</label>
                        <select class="form-control" name="policy_id">
                            <option value="0" {{old( 'policy_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            @foreach($policies as $policy)
                            @if($policy->status ==1)
                            <option value="{{$policy->id}}" {{old( 'policy_id' ) == $policy->id ? 'selected' : '' }}>{{$policy->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="0" {{old( 'category_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            <?php
                            foreach ($categories as $key1 => $level1) {
                                if ($level1->parent_id == 0) {
                                    echo '<option value="' . $level1->id . '">' . $level1->name . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control" id="brand" name="brand">
                            <option value="0" {{old( 'brand' ) == 0 ? 'selected' : '' }}>----- Root -----</option>

                        </select>


                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <select class="form-control" id="model" name="model">
                            <option value="0" {{old( 'model' ) == 0 ? 'selected' : '' }}>----- Root -----</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Current Value</label>
                        <select class="form-control" id="value" name="value">
                            <option value="0" {{old( 'value' ) == 0 ? 'selected' : '' }}>----- Root -----</option>

                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" placeholder="Enter rate" id="rate" name="rate" value="{{old('rate')}}">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter price" id="price" name="price" value="{{old('price')}}">
                    </div>

                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- JS TÍNH PRICE -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy tham chiếu đến các phần tử trên trang
        var valueSelect = document.getElementById("value");
        var rateInput = document.getElementById("rate");
        var priceInput = document.querySelector("input[name='price']");

        // Thêm sự kiện "change" cho ô "value" và "rate"
        valueSelect.addEventListener("change", updatePrice);
        rateInput.addEventListener("input", updatePrice);

        // Hàm tính giá trị của ô "price"
        function updatePrice() {
            var selectedValue = valueSelect.value; 
            var rate = parseFloat(rateInput.value);

            if (!isNaN(rate)) {
                // MOTOBIKE
                if (selectedValue === "$300 - $600") {
                    selectedValue = 400; 
                }else if (selectedValue === "$600 - $1,800") {
                    selectedValue = 1000; 
                }else if (selectedValue === "$1,800 - $4,800") {
                    selectedValue = 3000; 
                }else if (selectedValue === "$4,800 - $6,000") {
                    selectedValue = 5300; 
                }else if (selectedValue === "$6,000 - Above") {
                    selectedValue = 6500; 
                }

                // CAR
                if (selectedValue === "$600 - $3,000") {
                    selectedValue = 1300;
                }else if (selectedValue === "$3,000 - $6,000") {
                    selectedValue = 4500;
                }else if (selectedValue === "$6,000 - $30,000") {
                    selectedValue = 12000;
                }else if (selectedValue === "$30,000 - $60,000") {
                    selectedValue = 45000;
                }else if (selectedValue === "$60,000 - $120,000") {
                    selectedValue = 80000;
                }else if (selectedValue === "$120,000 - $300,000") {
                    selectedValue = 210000;
                }else if (selectedValue === "$300,000 - Above") {
                    selectedValue = 400000;
                }
                var price = selectedValue * (rate / 100);
                priceInput.value =price.toFixed(2); // Định dạng kết quả thành tiền tệ với 2 chữ số thập phân
            }
        }
    });
</script>

<!-- END JS -->
<!-- AJAX SHOW CATEGORY -->
<script type='text/javascript'>
    $(document).ready(function() {
        $('#category_id').change(function() {
            $("#brand").empty();
            $("#model").empty();
            $("#value").empty();
            var categoryId = $(this).val();

            // Gửi yêu cầu Ajax để lấy danh sách các brand dựa trên categoryId

            //BRAND 
            $.ajax({
                url: 'getBrand/' + categoryId, // Đặt URL tương ứng với route Laravel của bạn
                type: 'get',
                // data: {categoryId: categoryId},
                dataType: 'json',
                success: function(response) {

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='" + name + "'>" + name + "</option>";

                            $("#brand").append(option);
                        }
                    }

                }
            });

            //MODEL

            $.ajax({
                url: 'getModel/' + categoryId, // Đặt URL tương ứng với route Laravel của bạn
                type: 'get',
                // data: {categoryId: categoryId},
                dataType: 'json',
                success: function(response) {

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='" + name + "'>" + name + "</option>";

                            $("#model").append(option);
                        }
                    }

                }
            });

            //CURRENT VALUE

            $.ajax({
                url: 'getValue/' + categoryId, // Đặt URL tương ứng với route Laravel của bạn
                type: 'get',
                // data: {categoryId: categoryId},
                dataType: 'json',
                success: function(response) {

                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {

                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='" + name + "'>" + name + "</option>";

                            $("#value").append(option);
                        }
                    }

                }
            });
        });
    });
</script>
@endpush
@endsection