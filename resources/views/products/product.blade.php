@extends('layouts.app')

@section('content')

    <!---------------------------------------- Main ---------------------------------------->
<div class="Main flex justify-center" style="margin-top: 100px">
    <!-- Product Div -->
    <div class="container ">
        <div class="card lg:card-side bg-base-100 " >
            <figure style="max-width: 30%;">
                <img class="rounded-box" src="/storage/{{ $product->img }}" alt="Album"/>
            </figure>
            <div class="card-body flex">
                <div class="all" style="display: flex;">
                    <!-- Left Div -->
                    <div class="left" style="width: 80%;">
                        <h2 class="card-title text-4xl font-bold">{{ $product->name }}</h2>

                        <div class="chat chat-start" style="margin-top: 20px;">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component" src="/storage/{{ $product->user->img }}"/>
                                </div>
                            </div>
                            <div>
                                <h1 class="font-bold text-xl" style="margin-top: 5px;">{{ $product->user->name }}</h1>
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="category" style="margin-top: 20px;">
                            <div class="badge badge-secondary badge-outline">{{ $product->category }}</div>
                        </div>

                        <!-- Price -->
                        <div class="card-actions" style="margin-top: 20px;">
                            <span class="text-xl">${{ $product->price + 10 }}</span>
                            <span class="text-2xl font-bold">${{ $product->price }}</span>
                            <style>.card-actions .text-xl {position: relative;}.card-actions .text-xl::before {content: "";position: absolute;top: 10px; left: 0;width: 100%;height: 1px; background-color: black; transform: rotate(20deg); }</style>
                        </div>

                        <!-- Amount -->
                        <div class="amount" style="margin-top: 20px;align-items: center;">
                            <span class="text-lg"><span class="text-success text-xl font-bold">In Stock</span></span>
                            <span class="indicator-item badge badge-primary">{{ $product->amount }} Piece </span> 
                            
                        </div>

                    </div>


                    <div class="right" style="width: 25%;">
                        <div class="card-actions justify-end"
                                style="position: absolute;right: 3%;bottom: 10%;">
                            <button class="btn btn-primary">🛍 Order Now!</button>
                            <button class="btn btn-warning">🛒Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!---------------------------------------- End of Main ---------------------------------------->

    <!-- ---------------------  Same Category Prouducts  -------------------------------- -->
        <div class="title" style="margin: 30px;">
            <h1 class="text-2xl font-bold">Category Prouducts </h1>
        </div>
        <div class="flex justify-center">
        <div class="carousel carousel-center p-4 space-x-4 bg-erro r rounded-box" id="carousel" style="width: 96%;max-height: 5%;">
          <div class="carousel-item" style="padding-left: 5px;">
            <!-- Card -->
            <div class="card w-64 bg-base-100 shadow-xl" style="margin-left: 8px;margin-right:8px">
              <figure style="max-height: 200px;"><!-- contorl white around pic -->
                <img src="Prouduct.png" alt="Shoes" class="rounded-xl" />
              </figure>
              <div class="card-body items-center text-center">
                <h2 class="card-title font-bold">Nike Dunk Low</h2>
                <p>by : Nike</p>
                <div class="card-actions price">
                    <div class="card-actions price" >
                        <span class="text-xl " >$59.99</span>
                        <span class="text-2xl font-bold">$49.99</span>
                    </div>
                    <style>.card-actions.price .text-xl {position: relative;}.card-actions.price .text-xl::before {content: "";position: absolute;top: 10px; left: 0;width: 100%;height: 1px; background-color: black; transform: rotate(20deg); }</style>
                </div>
                <div class="rating rating-l rating-half">
                    <input type="radio" name="rating-10" class="rating-hidden" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-1" checked />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-10" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                </div>
              </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card w-64 bg-base-100 shadow-xl" style="margin-left: 8px;margin-right:8px">
              <figure style="max-height: 200px;"><!-- contorl white around pic -->
                <img src="Prouduct.png" alt="Shoes" class="rounded-xl" />
              </figure>
              <div class="card-body">
                <h2 class="card-title font-bold">Nike Dunk Low</h2>
                <p>by : Nike</p>
                <div class="card-actions price">
                    <div class="card-actions price" >
                        <span class="text-2xl font-bold">$49.99</span>
                    </div>
                </div>
                <div class="rating rating-l rating-half">
                    <input type="radio" name="rating-111" class="rating-hidden" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-1" checked />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-1" />
                    <input type="radio" name="rating-111" class="bg-orange-500 mask mask-star-2 mask-half-2" />
                </div>
              </div>
            </div>
            <!-- Card -->
          </div> 
        </div>
        </div>
        <!-- ---------------------  -------------------------------- -->
        <div class="Bottom" style="display: flex;">
          <!-- Bottom div -->


@endsection