@extends('admin.master')

@section('module', 'Insurance detail')
@section('action', 'Create')

@section('content')

<script>
    $(document).ready(function () {
  const categorySelect = $("#category");
  const brandSelect = $("#brand");
  const modelSelect = $("#model");

  // Lắng nghe sự kiện khi Category thay đổi
  categorySelect.change(function () {
    const selectedCategory = categorySelect.val();

    // Gửi Ajax request để lấy danh sách Brand dựa trên lựa chọn Category
    $.ajax({
      url: "/get-brands", // Thay đổi URL này để phù hợp với đường dẫn của bạn
      method: "GET",
      data: { category_id: selectedCategory },
      success: function (data) {
        // Xóa các option hiện tại trong khung select Brand và Model
        brandSelect.empty();
        modelSelect.empty();

        // Thêm các option Brand từ dữ liệu Ajax response
        brandSelect.append($('<option>', {
          value: '',
          text: '----- Select a Brand -----',
        }));

        $.each(data.brands, function (key, value) {
          brandSelect.append($('<option>', {
            value: key,
            text: value,
          }));
        });
      },
      error: function () {
        // Xử lý lỗi nếu cần
      },
    });
  });

  // Lắng nghe sự kiện khi Brand thay đổi
  brandSelect.change(function () {
    const selectedBrand = brandSelect.val();

    // Gửi Ajax request để lấy danh sách Model dựa trên lựa chọn Brand
    $.ajax({
      url: "/get-models", // Thay đổi URL này để phù hợp với đường dẫn của bạn
      method: "GET",
      data: { brand_id: selectedBrand },
      success: function (data) {
        // Xóa các option hiện tại trong khung select Model
        modelSelect.empty();

        // Thêm các option Model từ dữ liệu Ajax response
        modelSelect.append($('<option>', {
          value: '',
          text: '----- Select a Model -----',
        }));

        $.each(data.models, function (key, value) {
          modelSelect.append($('<option>', {
            value: key,
            text: value,
          }));
        });
      },
      error: function () {
        // Xử lý lỗi nếu cần
      },
    });
  });
});

</script>
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
                            <option value="{{$provider->id}}" {{old( 'provider_id' ) == $provider->id ? 'selected' : '' }}>{{$provider->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Insurance policy</label>
                        <select class="form-control" name="policy_id">
                            <option value="0" {{old( 'policy_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            @foreach($policies as $policy)
                            <option value="{{$policy->id}}" {{old( 'policy_id' ) == $policy->id ? 'selected' : '' }}>{{$policy->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option value="0" {{old( 'category_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            <?php
                            foreach ($categories as $level1) {
                                if ($level1->parent_id == 0) {
                                    echo '<option value="' . $level1->id . '">' . $level1->name . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control" name="brand">
                            <option value="0" {{old( 'brand' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <select class="form-control" name="model">
                            <option value="0" {{old( 'model' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Current Value(Pkr)</label>
                        <select class="form-control" name="pkr">
                            <option value="0" {{old( 'pkr' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                           
                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="price" value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="rate" value="{{old('rate')}}">
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

@endsection