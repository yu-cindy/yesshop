@extends('shop.home')

@section('css')
<link href="{{asset('css/carousel.css')}}" rel="stylesheet">
<style>

/*****************globals*************/
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%;
  object-fit: cover;
/*   object-fit: scale-down; */

}

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    //width: 18%;
    //margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.ProductCard {
  //margin-top:50px;
  //background: #C2C2C2;
  padding: 3em;
  line-height: 1.5em;
  border-radius:10px; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors,.textNumbers {
  text-transform: UPPERCASE;
  font-weight: bold; }


.price span {
  color: #51571b; }
.checked{
  color: #f3ff0f; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background:#3a5961;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #1e14db;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.quantity{
    position: relative;
    bottom: 9px;

}
.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

  .center{
width: 150px;
  margin: 40px left;

}


/*@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }
*/

/*# sourceMappingURL=style.css.map */


</style>
@endsection


@section('stage')
{{--{{$product->Product_Name}}
{{$product}}--}}

	<div class="container   ">
		<div class="ProductCard">
			<div class="container-fliud">
				<div class="wrapper row text-left">

					<div class="preview col-md-6">

						<div class="preview-pic tab-content " ><!-- style="height: 25rem; width: 25rem;" -->
						  <div class="tab-pane active" id="pic-1"><img style="height: 20rem; width: 20rem;" src="{{$product->Product_Img}}" /></div>
                          @if($product->Product_Img_others_1!=null)
                          <div class="tab-pane" id="pic-2"><img style="height: 20rem; width: 20rem;" src="{{$product->Product_Img_others_1}}"/></div>
                          @endif
                          @if($product->Product_Img_others_2!=null)
                          <div class="tab-pane" id="pic-3"><img style="height: 20rem; width: 20rem;" src="{{$product->Product_Img_others_2}}"/></div>
                          @endif
                          @if($product->Product_Img_others_3!=null)
                          <div class="tab-pane" id="pic-4"><img style="height: 20rem; width: 20rem;" src="{{$product->Product_Img_others_3}}"/></div>
                          @endif
                          @if($product->Product_Img_others_4!=null)
                          <div class="tab-pane" id="pic-5"><img style="height: 20rem; width: 20rem;" src="{{$product->Product_Img_others_4}}"/></div>
                          @endif
						  <!--<div class="tab-pane" id="pic-2"><img width="300" height="400" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"/></div>
						  <div class="tab-pane" id="pic-3"><img width="300" height="400" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img width="300" height="400" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" /></div>
						  <div class="tab-pane" id="pic-5"><img width="300" height="400" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" /></div>
                            -->


                        @if($product->Product_Img_others_1!=null || $product->Product_Img_others_2!=null || $product->Product_Img_others_3!=null || $product->Product_Img_others_4!=null)
                        <ul class="preview-thumbnail nav nav-tabs mt-5">
                        <li class="active "><a data-target="#pic-1" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img}}" /></a></li>
                        @if($product->Product_Img_others_1!=null)
                        <li class=""><a data-target="#pic-2" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others_1}}" /></a></li>
                        @endif
                        @if($product->Product_Img_others_2!=null)
                        <li class=""><a data-target="#pic-3" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others_2}}" /></a></li>
                        @endif
                        @if($product->Product_Img_others_3!=null)
                        <li class=""><a data-target="#pic-4" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others_3}}" /></a></li>
                        @endif
                        @if($product->Product_Img_others_4!=null)
                        <li class=""><a data-target="#pic-5" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others_4}}" /></a></li>
                        @endif
                        <!--<li class="mr-1"><a data-target="#pic-3" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others}}" /></a></li>
                        <li class="mr-1"><a data-target="#pic-4" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others}}" /></a></li>
                        <li class="mr-1"><a data-target="#pic-5" data-toggle="tab"><img style="height: 4rem; width: 4rem;" src="{{$product->Product_Img_others}}" /></a></li>
                            -->
                        </ul>
                        @endif
                        </div>

						<!--<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{$product->Product_Img}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" /></a></li>
						-->

					</div>
					<div class="details col-md-6">
						<h3 class="product-title mb-3">{{$product->Product_Name}}</h3>
						{{--<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>--}}

                        @if($product->Product_Describe!=null)
                        <p style="white-space: pre-line;" class="product-description mb-5">{{$product->Product_Describe}}</p>
                        @else
                        <p style="white-space: pre-line;"class="product-description mb-5">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                        @endif
						<h2 class="price mb-5"><span class="text-danger">${{$product->Product_Price}}</span></h2>





                        {{--<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

                            <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
                        --}}
                        <div id="product_category_div">
                            </div>


                        <div class="def-number-input number-input safari_only mb-5">

                        <p class="textNumbers">數量:</p>
                        <div class="center">

                            <div class="input-group">

                                <span class="input-group-btn" >
                                    <button type="button" class="btn btn-default btn-number border" disabled="disabled" data-type="minus" data-field="quant[1]" style="height:100%;">
                                        <!--<span class="glyphicon glyphicon-minus"></span>-->
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </span>
                                <input id="buy_quantity" type="text" name="quant[1]" class="form-control input-number"  value="1" min="1" max="99">
                                <span class="input-group-btn" >
                                    <button type="button" class="btn btn-default btn-number border" data-type="plus" data-field="quant[1]" style="height:100%;">
                                        <!--<span class="glyphicon glyphicon-plus"></span>-->
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </span>
                            </div>

                        </div>


                        <!--<input type="image" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"
                            src="https://img.icons8.com/ios-glyphs/30/000000/minus.png"/>
                        <input id="buy_quantity" class="quantity" min="1" name="quantity" value="1" type="number">
                        <input type="image" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"
                            src="https://img.icons8.com/ios-glyphs/30/000000/plus.png"/>
                            <div id="product_category_div" class="mt-5">
                            </div>-->


                        </div>
						<div class="action">
							<button id="add_to_cart" class="bg-success add-to-cart btn btn-default" type="button">加入購物車</button>
							<!--<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        -->
                        </div>
					</div>

				</div>
			</div>
		</div>
        @if($product->Product_Category != 'none')
        <div class="viewed  p-5" >
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="bbb_viewed_title_container">

                            @foreach($user->shop->category as $cate)
                            @if($cate->id == $product->Product_Category )
                            <h5 class="bbb_viewed_title row text-secondary" ><a href="/shop/{{$user->api_token}}/index/{{$cate->id}}"><h3>{{$cate->Category_Name}}</h3></a><span>您還可以參考</span></h5>
                            <div class="bbb_viewed_nav_container">
                                <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                                <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                            </div>
                            @endif
                            @endforeach

                        </div>
                        <div class="bbb_viewed_slider_container py-3 ">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                @foreach($user->shop->merchandise as $merc)
                                @if($merc->Product_Category == $product->Product_Category  )
                                @if($merc->id != $product->id)
                                <div class="owl-item">
                                    <a class="" href="/shop/{{$user->api_token}}/{{$merc->id}}/product">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="{{$merc->Product_Img}}" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_name">{{$merc->Product_Name}}</div>
                                            <div class="bbb_viewed_price">${{$merc->Product_Price}}</div>

                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @endif
                                @endif
                                @endforeach
                                <!--<div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924153/alcatel-smartphones-einsteiger-mittelklasse-neu-3m.jpg" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">₹12225<span>₹13300</span></div>
                                            <div class="bbb_viewed_name"><a href="#">Alkatel Phone</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924221/51_be7qfhil.jpg" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">₹30079</div>
                                            <div class="bbb_viewed_name"><a href="#">Samsung LED</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">₹22250</div>
                                            <div class="bbb_viewed_name"><a href="#">Samsung Mobile</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924275/images.jpg" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">₹1379</div>
                                            <div class="bbb_viewed_name"><a href="#">Huawei Power</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924361/21HmjI5eVcL.jpg" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">₹225<span>₹300</span></div>
                                            <div class="bbb_viewed_name"><a href="#">Sony Power</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560924241/8fbb415a2ab2a4de55bb0c8da73c4172--ps.jpg" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">₹13275</div>
                                            <div class="bbb_viewed_name"><a href="#">Speedlink Mobile</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <li class="item_mark item_discount">-25%</li>
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>


@endsection

@section('js')
<script>

$(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:false,
margin:30,
autoplay:true,
autoplayTimeout:6000,
nav:false,
dots:false,
responsive:
{
0:{items:1},
575:{items:2},
768:{items:3},
991:{items:4},
1199:{items:6}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}


});


var user={!! json_encode($user) !!};
var product={!! json_encode($product) !!};
var add_to_cart=document.getElementById('add_to_cart');
var model=JSON.parse(product.Product_Model);

window.addEventListener('load', function () {
    if(model!=null){
        var model_div = document.createElement('div');
        model_div.setAttribute("class","mb-5 row");
        document.getElementById('product_category_div').appendChild(model_div);
            model.forEach(function(item,index){
                console.log('item',item.value)
                var div = document.createElement('div');
                div.setAttribute("class","form-check form-check-inline mx-3 mb-1");
                var input= document.createElement('input');
                input.setAttribute("class","form-check-input");
                input.setAttribute("type","checkbox");
                input.setAttribute("name","product_model");
                input.setAttribute("id","inlineCheckbox_"+(index+1));
                input.setAttribute("value",index);
                var label= document.createElement('label');
                label.setAttribute("class","form-check-label h5 text-primary");
                label.setAttribute("for","inlineCheckbox_"+(index+1));
                label.innerHTML='<small>'+item.value+'</small>';
                div.appendChild(input);
                div.appendChild(label);
                model_div.appendChild(div);
            });
    }
    $('input[type="checkbox"]').on('change', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });
    add_to_cart.addEventListener("click", function() {
        var buy_id = product.id;
        var buy_quantity = document.getElementById('buy_quantity').value;
        var buy_price=product.Product_Price * buy_quantity;
        var buy_model = [];
        $("input:checkbox[name=product_model]:checked").each(function(){
            buy_model.push($(this).val());
        });

        function update_chart(buy_id,buy_quantity,buy_price,buy_model){
            if(buy_model.length==0){
                buy_model=null;
            }else{
                buy_model=buy_model[0];
            }
            $.ajax({
                type:'POST',
                url:'/shop/'+user.api_token+'/'+'add_cart',
                dataType:'json',
                data:{
                    'buy_id':buy_id,
                    'buy_quantity':buy_quantity,
                    'buy_price':buy_price,
                    'buy_model':buy_model,
                    _token: '{{csrf_token()}}'
                },
                success:function(data){
                    console.log(data)
                    if(data=='updated_cart'){
                        window.location.reload();
                    }else if(data=='not_login'){
                        alert('您尚未登入喔!')
                        window.location.href='/shop/'+user.api_token+'/'+'login_form';
                    }

                },
                error:function(e){
                    alert('Error: ' + e);
                }
            });
        }
        if(document.getElementById('product_category_div').innerHTML!=''){
            if(buy_model.length==0){
                alert('請勾選商品型號')
            }else{
                update_chart(buy_id,buy_quantity,buy_price,buy_model);
            }
        }else{
            update_chart(buy_id,buy_quantity,buy_price,buy_model);
        }

    });


});






$('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {
            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection
