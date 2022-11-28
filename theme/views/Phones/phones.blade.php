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

    <title>Phones</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />

    <!-- CSS Assets -->
    {{-- @vite('theme/assets/js/app.js') --}}
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

  <body
    x-data
    x-bind="$store.global.documentBody"
    class="is-header-blur is-sidebar-open"
  >
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
            Phones
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >All phones</a
              >
             
            </li>
          </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Users Table -->
          <div>
            <div class="flex items-center justify-between">
              <h2
                class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
              >
                Phones Table
              </h2>
              <div class="flex">
                <div class="flex items-center" x-data="{isInputActive:false}">
                  <label class="block">
                    <input
                      x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                      :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                      class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                      placeholder="Search here..."
                      type="text"
                    />
                  </label>
                  
                </div>
                <div
                  x-data="usePopper({placement:'bottom-end',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                <a href="add_new_phone">
                  <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" 
                     fill="currentColor" 
                    class="h-6 w-6 bi bi-plus" viewBox="0 0 16 16"> 
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg>
                  </button>
                </a>
                   
                </div>
              </div>
            </div>
            <div class="card mt-3">
              <div
                class="is-scrollbar-hidden min-w-full overflow-x-auto"
                x-data="pages.tables.initExample1"
              >
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Name
                      </th>

                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Category
                      </th>

                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Price
                      </th>
                      
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Update
                      </th>

                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Delete
                      </th>
                    </tr>
                  </thead>
                  <tbody> 
                    @forelse($phones as $phone)
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        
                        <td
                          x-text=""
                          class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5"
                        >{{$phone->name}}</td>
                        
                        <td
                          x-text=""
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{$phone->category}}</td>
                        
                        <td
                          x-text=""
                          class="whitespace-nowrap px-4 py-3 sm:px-5"
                        >{{'UGX '.$phone->price}}</td>

                        <td class="whitespace-nowrap px-4 py-3 sm:px-5"><a href="phone_edit/{{$phone->id}}">
                          <label class="inline-flex items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"> <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/> </svg>
                          </label></a>
                        </td>
                        
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" ><a href="phone/delete/{{$phone->id}}">
                          <label class="inline-flex items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg>
                          </label></a>
                        </td>
                        
                      </tr> 
                    @empty
                  <tr
                    class="text-center center border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                  >
                    <td
                      class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"
                      x-text=""
                    >Nothing to show</td>
                  </tr> 
                    @endforelse
                     
                  </tbody>
                  
                </table>
              </div>

              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
                {{-- <div class="flex items-center space-x-2 text-xs+">
                  <span>Show</span>
                  <label class="block">
                    <select
                      class="form-select rounded-full border border-slate-300 bg-white px-2 py-1 pr-6 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                    >
                      <option>10</option>
                      <option>30</option>
                      <option>50</option>
                    </select>
                  </label>
                  <span>entries</span>
                </div> --}}

                <ol class="">
                 
                  <li >
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight text-white transition-colors 
                     focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent  dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      >{!! $phones->links() !!}</a
                    >
                  </li>
                
                </ol>
{{-- 
                <div class="text-xs+">1 - 10 of 10 entries</div> --}}
              </div>
            </div>
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
    </script>
  </body>
</html>
