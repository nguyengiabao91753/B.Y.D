@extends('admin.master')

@section('module', 'Insurance detail')
@section('action', 'edit')

@section('content')
<form method="post" action="{{ route('admin.insurance.update',['id',$insurance->id]) }}">
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
                            <option value="0">----- Root -----</option>
                            @foreach($providers as $provider)
                            <option value="{{$provider->id}}">{{$provider->name}}</option>
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
                            <option value="0">----- Root -----</option>
                            <?php
                            foreach ($categories as $key1=> $level1) {
                                if ($level1->parent_id == 0) {
                                    unset($categories[$key1]);
                                    foreach ($categories as $key2=> $level2) {
                                        if ($level2->parent_id == $level1->id) {
                                            unset($categories[$key2]);
                                            foreach ($categories as $key3=> $level3) {
                                                if ($level3->parent_id == $level2->id) {
                                                
                                                echo '<option value="' . $level3->id . '">' . $level3->name . '</option>';
                                                unset($categories[$key3]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <select class="form-control" name="model">
                            <option value="0">----- Root -----</option>
                            <?php
                            foreach ($categories as $key1=> $level1) {
                                if ($level1->parent_id == 0) {
                                    unset($categories[$key1]);
                                    foreach ($categories as $key2=> $level2) {
                                        if ($level2->parent_id == $level1->id) {
                                            unset($categories[$key2]);
                                            foreach ($categories as $key3=> $level3) {
                                                if ($level3->parent_id == $level2->id) {
                
                                                echo '<option value="' . $level3->id . '">' . $level3->name . '</option>';
                                                unset($categories[$key3]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
            
                    <div class="form-group">
                        <label>Current Value(Pkr)</label>
                        <select class="form-control" name="pkr">
                            <option value="0">----- Root -----</option>
                           <?php
                            foreach ($categories as $key1=> $level1) {
                                if ($level1->parent_id == 0) {
                                    unset($categories[$key1]);
                                    foreach ($categories as $key2=> $level2) {
                                        if ($level2->parent_id == $level1->id) {
                                            unset($categories[$key2]);
                                            foreach ($categories as $key3=> $level3) {
                                                if ($level3->parent_id == $level2->id) {
                                                
                                                echo '<option value="' . $level3->id . '">' . $level3->name . '</option>';
                                                unset($categories[$key3]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="price" value="{{old('price',$insurance->price)}}">
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" class="form-control" placeholder="Enter product price" name="rate" value="{{old('rate',$insurance->rate)}}">
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