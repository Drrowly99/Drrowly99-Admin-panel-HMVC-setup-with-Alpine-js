@extends('register::layouts.master')

@section('content')

<main class="grid w-full grow grid-cols-1 place-items-center">
  <div class="-full max-w-[26rem] p-4 sm:px-5 relative min-h-full ">
    <div class=" relative top-0 grid place-content-center m-auto max-[h-14] sm:h-10 md:h-10">
      <div class="grid place-content-center">
        <a href="#" class="flex items-center space-x-2">
          <img class="lg:h-12 lg:w-12 md:h-10 md:w-10 sm:h-8 sm:w-8 " src="{{asset('/images/app-logo.svg')}}" alt="logo" />
          <p
            class=" lg:text-xl md:text-lg sm:text-xs+ font-semibold uppercase text-slate-700 dark:text-navy-100"
          >
            lineone
          </p>
        </a>
      </div>
    
    </div>

    <form action="submit" method="POST">
      @csrf
    <div class="relative max-h-[auto] border-blue-600 card mt-2  lg:mt-4 md:mt-3 sm:mt-2 rounded-lg p-4 sm:p-5 lg:p-7" >
      @if (Session::has('success'))
      <div class="bg-green-200 px-12 py-3 my-1 text-center text-green-600">{{Session::get('success')}}</div>  
      @endif     
      @if (Session::has('error'))
      <div class="bg-red-200 px-12 py-3 my-1 text-center text-red-600">{{Session::get('error')}}</div>
      @endif
      <label class="relative flex">
        <input
        id="business_name"
        name="business_name"
        value="{{old('business_name')}}"
        class="sm:py-1.5 lg:py-2  max-[770px]:py-1.5 form-input peer w-full sm:w-full rounded-lg border border-slate-300 bg-transparent px-3 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
        placeholder="Business Name "
          type="text"
        />
        <span
          class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
        >
          <i class="fa fa-user"></i>
        </span>
      </label>
      @error('business_name')
        <p class="text-red-400 px-2 text-tiny" >{{$message}}</p>
      @enderror

      <label class="relative mt-2 flex">
        <input
        id="business_email"
        name="business_email"
        value="{{old('business_email')}}"
          class="sm:py-1.5 lg:py-2  max-[770px]:py-1.5 form-input peer w-full sm:w-full rounded-lg border border-slate-300 bg-transparent px-3 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
          placeholder="Business Email"
          type="text"
        />
        <span
        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5 transition-colors duration-200"
          fill="none"
          viewbox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
          />
        </svg>
      </span>
      </label>
      @error('business_email')
      <p class="text-red-400 px-2 text-tiny">{{$message}}</p>
      @enderror
      <label class="relative mt-2 flex">
        
        <input
        id="phone_no"
        name="phone_no"
        value="{{old('phone_no')}}"
          class="sm:py-1.5 lg:py-2  max-[770px]:py-1.5 form-input peer w-full  rounded-lg border border-slate-300 bg-transparent px-3 pl-16 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
          placeholder="Phone Number"
          type="tel"
          style="padding-left: 60px!important;"
        />
        <span
          class="pointer-events-none absolute flex h-full w-14 border-r-slate-300 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
        >
        <span class="w-8 h-3/4 grid place-content-center">
          <img src="{{asset('/flags/4x3/in.svg')}}" class="h-4 w-14 relative"/>
        </span>
        <span class="text-slate-400">+91</span>
        </span>
      </label>
      @error('phone_no')
      <p class="text-red-400 px-2 text-tiny">{{$message}}</p>
      @enderror
      <label class="relative mt-2 flex">
        <input
        id="password"
        name="password"
        value="{{old('password')}}"
          class="sm:py-1.5 lg:py-2  max-[770px]:py-1.5 form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
          placeholder="Password"
          type="password"
        />
        <span
          class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 transition-colors duration-200"
            fill="none"
            viewbox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="1.5"
              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
            />
          </svg>
        </span>
      </label>
      @error('password')
      <p class="text-red-400 px-2 text-tiny">{{$message}}</p>
      @enderror
      <label class="relative mt-2 flex">
        <input
        id="password_confirmation"
        name="password_confirmation"
        value="{{old('password_confirmation')}}"
          class="sm:py-1.5 lg:py-2 max-[770px]:py-1.5 form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
          placeholder="Repeat Password"
          type="password"
        />
        <span
          class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 transition-colors duration-200"
            fill="none"
            viewbox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="1.5"
              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
            />
          </svg>
        </span>
      </label>
      @error('password_confirmation')
      <p class="text-red-400 px-2 text-tiny">{{$message}}</p>
      @enderror

      <div class="mt-4 flex items-center space-x-2">
        <input
          class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
          type="checkbox"
        />
        <p class="line-clamp-1">
          I agree with
          <a
            href="#"
            class="text-slate-400 hover:underline dark:text-navy-300"
          >
            privacy policy
          </a>
        </p>
      </div>
      <button
        class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
      >
        Sign Up
      </button>
      <div class="mt-4 text-center text-xs+">
        <p class="line-clamp-1 text-xs sm:text-sm">
          <span>Already have an account? </span>
          <a
            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
            href="login.html"
            >Sign In</a
          >
        </p>
      </div>
      <div class="max-[600px]:my-4 sm:my-2 flex items-center space-x-3">
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
        <p class="text-tiny+ uppercase">or sign up with email</p>
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
      </div>
      <div class="flex space-x-4  max-[600px]:my-3 sm:my-2 ">
        <button
          class="btn w-full space-x-3  border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90  max-[600px]:h-8"
        >
          <img
            class="h-5.5 w-5.5"
            src="{{asset('/images/200x200.png')}}"
            alt="logo"
          />
          <span>Google</span>
        </button>
        <button
          class="btn w-full space-x-3  border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90  max-[770px]:h-8"
        >
          <img
            class="h-5.5 w-5.5"
            src="{{asset('/images/200x200.png')}}"
            alt="logo"
          />
          <span>Github</span>
        </button>
      </div>
    </div>
  </div>
</form>
</main>

@endsection