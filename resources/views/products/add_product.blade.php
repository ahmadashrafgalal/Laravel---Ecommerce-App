@extends('layouts.app')

@section('content')
    <!---------------------------------------- Main ---------------------------------------->

    <div class="Main" style="margin-top: 100px;">
        <div class="card bg-base-100 shadow-xl" style="padding: 20px;">
            <div class="flex justify-center" style="margin-top: -15px;">
                <h2 class="card-title text-3xl ">Add New Product</h2>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Product Name</span>
                    </label>
                    <input type="text" placeholder="Product Name" class="input input-bordered" name="name" required>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Product Description</span>
                    </label>
                    <input type="text" placeholder="Product Description" class="input input-bordered" name="description" required>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Category</span>
                    </label>
                    <input type="text" placeholder="Category" class="input input-bordered" name="category" required>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Price</span>
                    </label>
                    <input type="number" placeholder="Price" class="input input-bordered" name="price" required>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Image</span>
                    </label>
                    <div class="con flex" style="align-items: center;">
                        <div class="avatar">
                            <div class="w-24 rounded-xl">
                                <img id="profile_pic" src="{{ asset('images/alt_product.png') }}" />
                            </div>
                        </div>
                        <input name="img" id="id_Inst_Profile_img" type="file" class="file-input w-full max-w-xs" style="margin-left: 50px;"  required/>
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Amount</span>
                    </label>
                    <input type="number" placeholder="Amount" class="input input-bordered" name="amount" required>
                </div>

                <div class="flex justify-center" style="margin: 35px 0px 0px 0px;" >
                    <button type="submit" class="btn btn-primary w-96">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <!---------------------------------------- End of Main ---------------------------------------->
    <script>
        let profilepic = document.getElementById('profile_pic')
        let input_file = document.getElementById('id_Inst_Profile_img')
        input_file.onchange = (e)=> {
            const [file] = input_file.files;
            if(file){
                profilepic.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection