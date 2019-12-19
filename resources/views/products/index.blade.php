@extends('template/main')
@section('title', 'iDus - Unauthorized Reseller')
@section('container')

 <!-- Content -->


 <div class="container mt-lg-5 mb-5">
   <br>
   <h1 class="mt-5 display-4">All Product</h1>

   <div class="container mt-5">
    <br><br><br>


        <div class="row">
          @foreach ($products as $product)
              <div class="col-auto mb-4 border-right">
                <a href="#" class="product-item md-height bg-gray d-block">
                  <img src="{{url('assets/img/product/', $product->image)}}" alt="Image" class="img-fluid" width="190px;">
                </a>
                <h4 class="item-title"><a href="#" style="text-decoration:none;color:black;">{{$product->nama_produk}}</a></h4>
              </div>
          @endforeach
        </div>
</div>
</div>
   </div>
 </div>

@endsection

