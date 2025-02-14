@extends('layouts.app')
@section('content')
    <!---------------------------------------- Main ---------------------------------------->
    <div class="Main" style="margin-top: 100px;display: flex;">
            <section style="max-width: 90%; margin-top: 100px;" data-theme="light">
                  <div class="h-full">
                    <!-- Left column container with background-->
                    <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
                      <div
                        class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
                        <img style="width: 4000px;" src="{{ asset('images/login.svg') }}" alt="Sample image" />
                      </div>

                      <!-- Right column container -->
                      <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
                         <h2 class="text-4xl font-bold mb-6 flex" style="justify-content: center;" >Log <span style="color: #6c63ff;">in</span></h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                          <!-- Email input -->
                          <div class="relative mb-6" data-te-input-wrapper-init>
                            <input
                              type="text"
                              class=" peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-base-100 dark:placeholder:text-base-100 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                              id="exampleFormControlInput2" 
                              name="username" required />
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
                              name="password" required />
                            <label
                              for="exampleFormControlInput22"
                              class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                              >Password
                            </label>
                          </div>

                          <div class="mb-6 flex items-center justify-between">
                            <!-- Register link -->
                            <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                              Don't have an account?
                              <a
                                href="{{ route('register') }}"
                                class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                                style="color: #c45cc2;"
                                >Register</a
                              >
                            </p>

                            
                          </div>

                          <!-- Login button -->
                          <div class="text-center lg:text-left">
                            <button
                              type="submit"
                              class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                              data-te-ripple-init
                              data-te-ripple-color="light" style="background-color: #6c63ff;">
                                Login  
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