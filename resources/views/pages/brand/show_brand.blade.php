@extends('layout')
@section('content')
    <div class="features_items"><!--features_items-->

        @foreach($brand_name as $key => $name)

            <h2 class="title text-center">{{$name->brand_name}}</h2>

        @endforeach
        @foreach($brand_by_id as $key => $product)
            <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">

                        <div class="single-products">
                            <div class="productinfo text-center">
                                <form>
                                    @csrf
                                    <input type="hidden" value="{{$product->product_id}}"
                                           class="cart_product_id_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_name}}"
                                           class="cart_product_name_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_image}}"
                                           class="cart_product_image_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_price}}"
                                           class="cart_product_price_{{$product->product_id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                    <a href="{{URL::to('/chi-tiet/'.$product->product_slug)}}">
                                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}"
                                             alt=""/>
                                        <h3>{{number_format($product->product_price,0,',','.').' '.'đ'}}</h3>
                                        <p>{{$product->product_name}}</p>


                                    </a>
                                    <div style="text-align: center !important;">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart"
                                           data-id_product="{{$product->product_id}}" name="add-to-cart">
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </a>
        @endforeach
    </div><!--features_items-->
    <ul class="pagination pagination-sm m-t-none m-b-none">
        {!!$brand_by_id->links()!!}
    </ul>
    <!--/recommended_items-->
@endsection