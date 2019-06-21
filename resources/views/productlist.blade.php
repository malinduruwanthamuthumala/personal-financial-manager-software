@extends('layouts.app')

@section('content-title', 'Products')
@section('content-subtitle', 'product list')

@section('content')
<div class="row maindiv">
   <a href="/addproduct"><input type="submit" class="btn btn-success" value="+ ADD PRODUCT "></a> 
</div>
<div class="row maindiv">
  <div class="col-md-12 ">
    
    <div class="row" class="container" style=" background-color:white;overflow-x: auto; overflow-y: hidden;">
     <table class="table table-light">
         <thead>
            <tr>
            <th>product</th>
            <th>brand name</th>
            <th>unit</th>
            <th>opening_cost</th>
            <th>retail_price</th>
            <th>wholesale_price</th>
            <th>vendor_address</th>
            <th>vendor_name</th>
            <th>reorder_level</th>
            <th>amount</th>
            <th>date</th>
            <th></th>
            <th></th>
            <th></th>
            
            
            </tr>
         </thead>
         <tbody>
            @foreach($products as $products) 
             <tr>
             <td>{{$products->product}}</td>
             <td>{{$products->brand_name}}</td>
             <td>{{$products->unit}}</td>
             <td>{{$products->opening_cost}}</td>
             <td>{{$products->Retail_price}}</td>
             <td>{{$products->wholesale_price}}</td>
            
             <td>{{$products->vendor_address}}</td>
             <td>{{$products->vendor_name}}</td>
             <td>{{$products->reorder_level}}</td>
             <td>{{$products->amount}}</td>
             <td>{{$products->date}}</td>
              <td>
                <form action="/deleteproduct">
                <input type="hidden" value="{{$products->id}}" name="id">
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
              </td>
             <td><input type="submit" class="btn btn-success" value="add amount"></td>
             <td><input type="submit" class="btn btn-info" value="edit product"></td>
             
             </tr>
            @endforeach
         </tbody>
     </table>
    </div>
  </div>
</div>
<div >
</div>
@endsection
<style>
    .maindiv{
        margin:15px;
    }
</style>