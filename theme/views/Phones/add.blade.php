<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>Add Phone</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('css/myapp.css') }}" />

    <!-- Javascript Assets -->
    <script src="{{ asset('js/myapp.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
      x-cloak
    >
      <!-- Sidebar -->
       @include('dashboard::sidebar.sidebar2')

      
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
           Phone
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Add new phone</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewbox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            
          </ul>
        </div>
        @if(count($errors) > 0)
        @foreach ($errors->all() as $error)
          <div class="toast" data-autohide="false" style="background:crimson;margin-left:8px;color:white;">
            <div class="toast-body">  {{ $error }}
            </div>
          </div>
        @endforeach
        @endif
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            
            <div class="col-span-12 lg:col-span-8">
                <form method="POST" action="{{route('add_phone')}}" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                    <div
                        class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5"
                    >
                         
                        <div class="flex justify-center space-x-2">
                        
                            <button
                                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                type="submit"
                                >
                                Add
                            </button>
                        </div>
                    </div>
                    <div class="p-4 sm:p-5">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <label class="block">
                            <span>Phone name </span>
                            <span class="relative mt-1.5 flex">
                            <input
                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Phone eg Tesla"
                                type="text"
                                value=""
                                name="name"
                            />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                            >
                                
                            </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>Category </span>
                            <span class="relative mt-1.5 flex">
                            <input
                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="eg Android or IOS"
                                type="text"
                                value=""
                                name="category"
                            />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                            >
                                
                            </span>
                            </span>
                        </label>
                        <label class="block">
                            <span>Price</span>
                            <span class="relative mt-1.5 flex">
                            <input
                                class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="e.g 300000"
                                type="number"
                                value=""
                                name="price"
                            />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                            >
                                
                            </span>
                            </span>
                        </label>
                       
                        </div>
                        <br>
                        
                    </div>
                </div>
                </form>
            </div> 
        </div>
      </main>
    </div>
    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());

      $(document).ready(function(){
       $('.toast').toast('show');
       $('.toast').delay(3000).fadeOut('fast');
     });

     function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("profile_photo");
            var dp = document.getElementById("actual-btn"); 
            preview.src = src; 
            dp.value = this.files[0].name
            preview.style.display = "block";
        }
    }
    </script>
  </body>
</html>
