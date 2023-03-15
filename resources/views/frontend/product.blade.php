@extends('layouts.frontendmaster')
@section('content')

     <div class="row">
        <div class="col-3"></div>

        <div class="col-lg-7 ms-5">
<div class="tab-content bg-light p-3" id="v-pills-tabContent">
            <h5>PRODUCT</h5>

            <div class="table-responsive">
            <form action="" method="post">

            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Brand name</th>
                        <th scope="col">Modle</th>
                        <th scope="col">Discription</th>
                        <th class="text-center">image</th>
                        <th class="text-center" scope="col">action</th>
                         <th class="text-center" scope="col">Created Time</th>



                    </tr>
                </thead>
                <tbody>
              @foreach ($products as $product)
                 <tr class="">

                    </tr>
                    <tr class="">
                        <td scope="row">{{ $loop->index+1}}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->modle_name }}</td>
                        <td>{{ $product->descrtiption }}</td>

                        <td>
                            @if($product->product_photo)
                            <img name ='product_photo' style="width:50px;height:50px" src="{{ asset('uploads/product_photo') }}/{{ $product->product_photo }}" ></td>
                            @else
                             <img name ='product_photo' style="width:50px;height:50px" src="{{ asset('frontend_asset') }}/images/defult_photo.png" ></td>
                            @endif
                         <td class="text-center"><a name="" class="btn-success btn-sm" href="{{ url('product/edit') }}/{{ $product->id }}" role="button">Edit</a>
                          <a name="" class="btn-danger btn-sm" href="{{ url('product/delete') }}/{{ $product->id }}" role="button">Delete</a>
                        </td>
                         <td>{{ $product->updated_at }}</td>
                    </tr>

                </tbody>
              @endforeach


              @if($products->count()==0)
                 <tr class="text-center text-danger" >
                      <td colspan="50"> NO Data To Show </td>
                    </tr>
                @endif

            </table>
        </div>

     {{--    {{ $product->links() }} --}}
     </div>

 </div>
 @endsection
