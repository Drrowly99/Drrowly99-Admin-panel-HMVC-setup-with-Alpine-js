<main class="main-content w-full pb-8 px-5" >
    <div
      class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6"
    >


      <div class="col-span-12">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2 class="text-xl capitalize font-bold text-slate-800 dark:text-navy-50 lg:text-2xl">
            {{$info['menu']}} <span class="text-xl capitalize font-medium text-slate-800 dark:text-navy-50 lg:text-xl">{{$info['sub']}}</span>
          </h2>

          <div class=" h-full py-1 sm:flex">
            <div class="hidden h-full w-px bg-slate-300 dark:bg-navy-600">
              <i class="fa fa-user"></i>
            </div>
          </div>

        </div>
        <div class="flex items-center justify-between">
          <h2 class="text-base capitalize font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            @switch($info['menu'])
                @case('rides')
                    Latest Rides
                    @break
                    @case('pickup and delivery')
                    Latest Deliveries
                    @break
                    @case('MapView')
                    Latest Map
                    @break
                    @case('manual dispatch')
                    Latest Dispatches
                    @break
                    @case('contact drivers')
                    Driver List
                    @break
                    @case('dynamic pricing')
                    Latest Prices
                    @break
                    @case('customers')
                    Customer List
                    @break
                    @case('drivers')
                    drivers list
                    @break
                    @case('Fleets')
                    Latest Fleets
                    @break
                    @case('Promotions')
                    New Promotions 
                    @break
                    @case('Chat Support')
                    Support List
                    @break
                    @case('Analytics')
                    See Analytics
                    @break
                    @case('popup')
                    popup List
                    @break
                    @case('banners')
                    banners List
                    @break
                    @case('Airport Stations')
                    Stations List
                    @break
                    @case('Custom Geofencing')
                    View Geofencing
                    @break
                    @case('settings')
                    settings List
                    @break
                    
            
                @default
                    
            @endswitch
          </h2>

          <div class="flex">
            <div class="flex items-center" x-data="{isInputActive:false}">
              <label class="block">
                <input
                  x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                  :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                  class="form-input w-full bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                  placeholder="Search here..."
                  type="text"
                />
              </label>
              <button
                @click="isInputActive = !isInputActive"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4.5 w-4.5"
                  fill="none"
                  viewbox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  />
                </svg>
              </button>
            </div>
            <div
              x-data="usePopper({placement:'bottom-end',offset:4})"
              @click.outside="if(isShowPopper) isShowPopper = false"
              class="inline-flex"
            >
              <button
                x-ref="popperRef"
                @click="isShowPopper = !isShowPopper"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4.5 w-4.5"
                  fill="none"
                  viewbox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                  />
                </svg>
              </button>
              <div
                x-ref="popperRoot"
                class="popper-root"
                :class="isShowPopper && 'show'"
              >
                <div
                  class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                >
                  <ul>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >Action</a
                      >
                    </li>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >Another Action</a
                      >
                    </li>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >Something else</a
                      >
                    </li>
                  </ul>
                  <div
                    class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                  ></div>
                  <ul>
                    <li>
                      <a
                        href="#"
                        class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        >Separated Link</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-3 ">
          <div class="is-scrollbar-hidden min-w-full overflow-x-auto" style="background:wh!important;">
            <table class="is-hoverable w-full text-left"> 
              <thead>
                <tr>
                  <th
                    class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Order
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Date
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Name
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Address
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Order Status
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Payment
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Total
                  </th>

                  <th
                    class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  ></th>
                </tr>
              </thead>
              <tbody>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #95647
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">25 May 2021</p>
                    <p class="mt-0.5 text-xs">01:25 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Anthony Jensen
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      260 W. Storm Street New York, NY 10025.
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-warning/10 text-warning dark:bg-warning/15"
                    >
                      Unconfirmed
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-warning">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Await Auth</span>
                    </div>
                  </td>

                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $2 654
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #84895
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">03 May 2021</p>
                    <p class="mt-0.5 text-xs">09:44 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >John Due
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      13811 Gimbert Ln Santa Ana, California(CA), 92705
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-success/10 text-success dark:bg-success/15"
                    >
                      Completed
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-success">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $3 654
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #49756
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">19 Jun 2021</p>
                    <p class="mt-0.5 text-xs">5:43 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Tom Robert
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      3803 Fox Rd Huron, Ohio(OH), 44839
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge bg-info/10 text-info dark:bg-info/15">
                      Shipped
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-success">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $6 156
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #79632
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">03 Jun 2021</p>
                    <p class="mt-0.5 text-xs">4:54 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Nolan Doe
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      1805 Jackson Ave Seaford, New York(NY), 11783
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light"
                    >
                      Processing
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-success">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $7 621
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #12668
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">09 Jun 2021</p>
                    <p class="mt-0.5 text-xs">2:03 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Henry Curtis
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      421 Basswood Ln Haysville, Kansas(KS), 67060
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-error/10 text-error dark:bg-error/15"
                    >
                      Cancelled
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-error">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Failed</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $456
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #66463
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">23 Jul 2021</p>
                    <p class="mt-0.5 text-xs">9:11 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Katrina West
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      205 Hope Rd Helena, Montana(MT), 59602
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-warning/10 text-warning dark:bg-warning/15"
                    >
                      Unconfirmed
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-warning">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Await Auth</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $5 116
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>

                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #53133
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">11 Aug 2021</p>
                    <p class="mt-0.5 text-xs">12:11 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Lance Tucker
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      1805 Jackson Ave Seaford, New York(NY), 11783
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-warning/10 text-warning dark:bg-warning/15"
                    >
                      Unconfirmed
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-warning">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Await Auth</span>
                    </div>
                  </td>

                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $4 952
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #5684
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">11 May 2021</p>
                    <p class="mt-0.5 text-xs">07:55 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Raul Bradley
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      13811 Gimbert Ln Santa Ana, California(CA), 92705
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-success/10 text-success dark:bg-success/15"
                    >
                      Completed
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-success">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $5 137
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #64669
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">29 Jun 2021</p>
                    <p class="mt-0.5 text-xs">1:54 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Derrick Simmons
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      3803 Fox Rd Huron, Ohio(OH), 44839
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge bg-info/10 text-info dark:bg-info/15">
                      Shipped
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-success">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $2 566
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr
                  class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                >
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="font-medium text-primary dark:text-accent-light"
                    >
                      #31669
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="font-medium">08 Jun 2021</p>
                    <p class="mt-0.5 text-xs">7:36 AM</p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{asset('images/200x200.png')}}"
                          alt="avatar"
                        />
                      </div>

                      <span
                        class="font-medium text-slate-700 dark:text-navy-100"
                        >Samantha Shelton
                      </span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p class="w-48 overflow-hidden text-ellipsis text-xs+">
                      1805 Jackson Ave Seaford, New York(NY), 11783
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div
                      class="badge bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light"
                    >
                      Processing
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <div class="badge space-x-2.5 text-xs+ text-success">
                      <div class="h-2 w-2 rounded-full bg-current"></div>
                      <span>Paid</span>
                    </div>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <p
                      class="text-sm+ font-medium text-slate-700 dark:text-navy-100"
                    >
                      $9 665
                    </p>
                  </td>
                  <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <button
                      class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewbox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div
            class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
          >
            <div class="flex items-center space-x-2 text-xs+">
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
            </div>

            <ol class="pagination">
              <li class="rounded-l-lg bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    fill="none"
                    viewbox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 19l-7-7 7-7"
                    />
                  </svg>
                </a>
              </li>
              <li class="bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >1</a
                >
              </li>
              <li class="bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  >2</a
                >
              </li>
              <li class="bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >3</a
                >
              </li>
              <li class="bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >4</a
                >
              </li>
              <li class="bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 min-w-[2rem] items-center justify-center rounded-lg px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >5</a
                >
              </li>
              <li class="rounded-r-lg bg-slate-150 dark:bg-navy-500">
                <a
                  href="#"
                  class="flex h-8 w-8 items-center justify-center rounded-lg text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                >
                  <svg
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
                </a>
              </li>
            </ol>

            <div class="text-xs+">1 - 10 of 10 entries</div>
          </div>
        </div>
      </div>
    </div>

  </main>