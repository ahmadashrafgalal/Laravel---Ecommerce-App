@extends('layouts.app')
@section('content')
<!---------------------------------------- Main ---------------------------------------->

    <div class="Main" style="margin-top: 100px; display: flex;" >
        <section style="max-width: 90%; margin-top: 100px;">
              <div class="h-full" >
                <!-- Left column container with background-->
                <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
                  <div
                    class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
                    <img
                      src="{{ asset('images/SignUp.jpg') }}"

                      alt="Sample image" />
                  </div>
                  
                  <!-- Right column container -->

                    <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12" >
                        <h2 class="text-4xl font-bold mb-6 flex" style="justify-content: center;" >Sign <span style="color: #ff735c;">Up</span></h2>
                    <form action="{{ route('register.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input
                            type="text"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-base-100 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput2"
                            name="username" />
                            <label
                            for="exampleFormControlInput2"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >User Name
                            </label>
                        </div>

                        <!-- Password input -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input
                            type="password"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-base-100 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput22"
                            placeholder="Password"
                            name="password" />
                            <label
                            for="exampleFormControlInput22"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Password
                            </label>
                        </div>
                        
                        <!-- Password input 2  -->
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input
                            type="password"
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-base-100 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput22"
                            placeholder="Password Again"
                            name="password_confirmation" />
                            <label
                            for="exampleFormControlInput22"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                            >Password Again
                            </label>
                        </div>

                        <input name="img" type="file" class="file-input file-input-bordered file-input-error w-full max-w-xs" />


                      <div class="mb-6 flex items-center justify-between">
                        <!-- Register link -->
                        <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                           Already have an account?
                          <a
                            href="{{ route('login') }}"
                            class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                            style="color: #c45cc2;"
                            >Login</a
                          >
                        </p>
                      </div>

                      <!-- Login button -->
                      <div class="text-center lg:text-left">
                        <button
                          type="submit"
                          class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase  leading-normal text-white"
                          data-te-ripple-init
                          data-te-ripple-color="light" 
                          style="background-color: #ff735c; :hover { box-shadow: 0 14px 14px #ff735c; }">
                            Sign Up  
                        </button>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

<!---------------------------------------- End of Main ---------------------------------------->

@endsection