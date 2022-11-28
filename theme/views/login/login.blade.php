@extends('login::layouts.master')

@section('content')
<main class="grid w-full grow grid-cols-1 place-items-center">
  <div class="w-full grid place-items-center max-w-[26rem] p-4 sm:px-5">
    <div class="fixed top-0 hidden pt-10 lg:block lg:px-12">
      <a href="#" class="flex items-center space-x-2">
        <img class="h-12 w-12" src="{{asset('/images/app-logo.svg')}}" alt="logo" />
        <p
          class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100"
        >
          lineone
        </p>
      </a>
    </div>
      <div class="mt-4">

      </div>
    </div>
  <form method="POST" x-data="ContactForm()" @submit.prevent="submitForm">
        
    <div class="card mt-5 rounded-lg p-5 lg:p-7">
      <div x-text="formMessage" 
      :class="formMessage != '' ? 'bg-green-200' : 'hidden' "
      class=" px-12 py-3 my-1 text-center text-green-600"></div>   

      <label class="block">
        <span>Username:</span>
        <span class="relative mt-1.5 flex">
          <input
            x-model="formData.business_email"
            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            placeholder="Enter Email"
            type="text"
            id="business_email"
            name="business_email"
            value="{{old('business_email')}}"
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
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
              />
            </svg>
          </span>
        </span>
      </label>

      <p x-data x-text="err_business_email" class="text-red-400 px-2 text-tiny"></p>
 
      <label class="mt-4 block">
        <span>Password:</span>
        <span class="relative mt-1.5 flex">
          <input
            x-model="formData.password"
            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            placeholder="Enter Password"
            type="password"
            id="password"
            name="password"
            value="{{old('password')}}"
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
        </span>
      </label>

      <p x-data x-text="err_password" class="text-red-400 px-2 text-tiny"></p>

      <div class="mt-4 flex items-center justify-between space-x-2">
        <label class="inline-flex items-center space-x-2">
          <input
            class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
            type="checkbox"
          />
          <span class="line-clamp-1">Remember me</span>
        </label>
        <a
          href="#"
          class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100"
          >Forgot Password?</a
        >
      </div>
      <button
        :disabled="formLoading" 
        x-text="buttonText"
        class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
      >
        Sign In
      </button>
      <div class="mt-4 text-center text-xs+">
        <p class="line-clamp-1">
          <span>Dont have Account?</span>

          <a
            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
            href="singup.html"
            >Create account</a
          >
        </p>
      </div>
      <div class="my-7 flex items-center space-x-3">
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
        <p>OR</p>
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
      </div>
      <div class="flex space-x-4">
        <button
          class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
        >
          <img
            class="h-5.5 w-5.5"
            src="{{asset('/images/200x200.png')}}"
            alt="logo"
          />
          <span>Google</span>
        </button>
        <button
          class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
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
    <div
      class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300"
    >
      <!-- <a href="#">Privacy Notice</a>
      <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
      <a href="#">Term of service</a> -->
    </div>
  </div>
</form>
</main>
@endsection