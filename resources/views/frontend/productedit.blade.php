@extends('layouts.frontendmaster')
@section('content')

     <div class="row">
        <div class="col-3"></div>

        <div class="col-lg-7 ms-5">
<div class="tab-content bg-light p-3" id="v-pills-tabContent">
            <h5>EDIT PRODUCT</h5>


        <form action="{{ url('product/edit/post') }}/{{ $product->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Brand Name</label>
            <input type="text"
            class="form-control" name="brand_name" value="{{ $product->brand_name }}" aria-describedby="helpId" placeholder="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Modle</label>
            <input type="text"
            class="form-control" name="modle_name" value="{{ $product->modle_name }}" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
            <label for="" class="form-label">Description</label>
            <input type="text"
            class="form-control" name="descrtiption" value="{{ $product->descrtiption }}" aria-describedby="helpId" placeholder="">


                <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        </div>


        </div>
     </div>

 </div>
 @endsection
