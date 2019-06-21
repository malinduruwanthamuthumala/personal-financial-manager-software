@extends('layouts.app')

@section('content-title', 'Products')
@section('content-subtitle','Add product')

@section('content')

<div class="container" style="background-color:white">
    <form class="form-group" action="/submitproduct" method="GET">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Product</label>
                        <input type="text" class="form-control" name="product">
                    </div>
                    <div class="col-md-6">
                        <label for="">Brand Name</label>
                        <input type="text" class="form-control" name="brand_name">
                    </div>
                </div>    
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">unit</label>
                        <input type="text" class="form-control" name="unit">
                    </div>
                    <div class="col-md-6">
                        <label for="">Opening Cost</label>
                        <input type="text" class="form-control" name="openning_cost">
                    </div>
                </div>    
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Retail Sale Price</label>
                        <input type="text" class="form-control" name="retail_price">
                    </div>
                    <div class="col-md-6">
                        <label for="">Wholesale Price</label>
                        <input type="text" class="form-control" name="wholesale_price">
                    </div>
                </div>    
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Reorder Level</label>
                        <input type="text" class="form-control" name="reorder_level">
                    </div>
                  
                </div>    
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                                <label for="vendor">vendor name</label>
                                <input type="text" class="form-control" name="vendor_name">
                        </div>
                    </div>    
                </div>
            </div>
            <br>    
            <div class="row">
                    <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">vendor adress</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                
                            </div>    
                        </div>   
            </div>
            <br>         
        <div>
            <input type="submit" class="btn btn-primary" value="Add Product">
        </div>
    </form>
</div>
@endsection
