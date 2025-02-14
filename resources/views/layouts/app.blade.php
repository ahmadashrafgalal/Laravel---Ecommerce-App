<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="padding: 10px; padding-top: .01%;">
    <!---------------------------------------- Navbar ---------------------------------------->
    <div class="navbar bg-base-100 shadow flex" style="position: fixed ;z-index: 1000;">
         <div class="flex-none" style="padding: 0px 20px 0px 0px;">
            <label class="btn btn-circle swap swap-rotate">        
            <!-- this hidden checkbox controls the state -->
            <input id="swap" type="checkbox" />
            <!-- hamburger icon -->
            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>
            <!-- close icon -->
            <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
            </label>
        </div>

        
        <div class="flex-1">
            <img src="{{ asset('images/logo.png') }}" alt="DaisyUI logo" class="w-10 h-10" />
            <a class="font-bold text-xl">  Bebalaaaash</a>
        </div>

        <!-- Search bar -->
        <div class="flex-" >
            <label class="input input-bordered flex items-center gap-2">
            All
            <input type="text" class="grow w-96" placeholder="Search for Product" />
            </label>
        </div>
        <!-- End of Search bar -->

        <div class="flex-none">
            <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span class="badge badge-sm indicator-item">8</span>
                </div>
            </div>
            <!-- cart design -->
            <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-96 bg-base-100 shadow">
                <div class="card-body">
                    <span class="font-bold text-lg">Cart 🛒</span>
                    <!-- Item -->
                    <div class="card w-84 bg-base-100 shadow" style="padding: 20px 20px 20px 0px;">
                        <div class="all flex" style="justify-content: space-around;align-items: center;">
                            <div class="lft" style="align-items: center;">
                                <img src="{{ asset('images/product.jpg') }}" alt="" class="w-24 rounded">
                            </div>
                            <div class="cntr">
                                <h2 class="card-title">Product Name</h2>
                                <p class="text-sm">price : <span>200 $</span></p>
                            </div>
                            <div class="cards-actions ">
                                <button class="btn btn-square btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Item -->
                    <span class="text-info">Total: 999 $</span>
                    <div class="card-actions">
                        <button class="btn btn-primary btn-block">View cart</button>
                    </div>
                </div>
            </div>
            <!-- cart design -->
            </div>


            <!-- Profile or login -->
            <div class="dropdown dropdown-end" style="padding: 0px  20px 0px 20px;">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar" >
                <div class="w-10 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="{{ asset('images/pic.jpg') }}" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                <a class="justify-between">
                    Profile
                    <span class="badge">New</span>
                </a>
                </li>
                <li><a>Logout</a></li>
            </ul>
            </div>
            
            <!-- login -->

            <!-- <div class="navbar-end"> -->
                <!-- <a class="btn btn-primary w-24 font-bold">Login</a> -->
            <!-- </div> -->
            
            <!-- End of Profile or login -->
        </div>
    </div>
    <!---------------------------------------- End of Navbar ---------------------------------------->
    @yield('content')


    
    <aside>
        <div class="sidebar" style="width: 0%; background-color: white;position: fixed;top: 60px;overflow: hidden; transition: .3s;height: 100vh;">
            <div class="card bg-base-100">
                <div class="card-body">
                    <h2 class="card-title">Categories</h2>
                    <ul class="menu menu-nav">
                        <li><a>Electronics</a></li>
                        <li><a>Home Appliances</a></li>
                        <li><a>Books</a></li>
                        <li><a>Stationary</a></li>
                        <li><a>Food</a></li>
                        <li><a>Others</a></li>
                    </ul>
                </div>
            </div>
            <div class="card bg-base-100">
                <div class="card-body">
                    <h2 class="card-title">Brands</h2>
                    <ul class="menu menu-nav">
                        <li><a>Samsung</a></li>
                        <li><a>Apple</a></li>
                        <li><a>LG</a></li>
                        <li><a>HP</a></li>
                        <li><a>Lenovo</a></li>
                        <li><a>Others</a></li>
                    </ul>
                </div>
            </div>
            <!-- div for logout button -->
            <div class="card bg-base-100 w-full" style="position: absolute; bottom: 50px;left: 10px;">
                <div class="card-body">
                    <a class="btn btn-error font-bold" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                        LogOut
                    </a>
                </div>
            <div>
        </div>
    </aside>

    
<script>
    function toggleSidebar() {
        var sidebar = document.querySelector('.sidebar');
        var Checkbox = document.getElementById('swap');
        if (sidebar.style.width === '20%') {
            sidebar.style.width = '0';
        } else {
            sidebar.style.width = '20%';
            Checkbox.checked =      true   ;
        }
    }

    var swapCheckbox = document.getElementById('swap');
    swapCheckbox.addEventListener('change', toggleSidebar);
    document.addEventListener('click', function (event) {
        if (event.target.closest('.sidebar') || event.target.closest('.swap')) return;
        var Checkbox = document.getElementById('swap');
            document.querySelector('.sidebar').style.width = '0';
            Checkbox.checked =      false   ;
    });
</script>
    
</body>
</html>
