      <!-- Sidebar -->
      <div class="sidebar print:hidden">


        <!-- Sidebar Panel -->
        <div class="sidebar-panel is-sidebar-open">
           <div
             class="flex h-full grow flex-col bg-white dark:bg-navy-750 w-full"
           >
             <!-- Sidebar Panel Header -->
             <div
               class=" flex h-18 w-full  items-center justify-between pl-4 pr-1"
             >
               <div class="flex items-center">
                 <div class="avatar mr-3 h-10 w-10 lg:flex">
                  <img class="h-10 w-10" src="{{asset('images/app-logo.svg')}}" alt="logo" />
                 </div>
                 <p
                   class="text-lg font-medium tracking-wider text-slate-800 line-clamp-1 dark:text-navy-100"
                 >
                 Welcome {{$user->business_name}}
                 </p>
               </div>
               <button
                 @click="$store.global.isSidebarExpanded = false"
                 class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden"
               >
                 <svg
                   xmlns="http://www.w3.org/2000/svg"
                   class="h-6 w-6"
                   fill="none"
                   viewbox="0 0 24 24"
                   stroke="currentColor"
                 >
                   <path
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     stroke-width="2"
                     d="M15 19l-7-7 7-7"
                   />
                 </svg>
               </button>
             </div>
 
             <!-- Sidebar Panel Body -->
             <div class=" flex h-[calc(100%-4.5rem)] grow flex-col">
               <div class="is-scrollbar-hidden grow overflow-y-auto pl-3">
                 <div class="mt-2 px-4">

                 </div>
                 <ul
                   class="mt-4 space-y-1.5 px-2 font-inter text-xs+ font-medium"
                 >
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/dashboard')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex justify-between space-x-2 rounded-lg  p-2 tracking-wide text-primary outline-none transition-all  dark:text-accent-light"
                     >
                     <div class="flex items-center space-x-2">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                           <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                           <path fill-opacity=".25"  d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                         </svg>

                         
                       <span>
                         Dashboard
                       </span>
                       
                     </div>
 
                     
                   </a>
                 </li>
                 <li x-data="accordionItem('menu-item-1')">
                   <a
                   :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                   @click="expanded = !expanded"
                   class="group flex items-center justify-between rounded-lg bg-primary/10 p-2 tracking-wide text-primary outline-none transition-all dark:bg-accent-light/10 dark:text-accent-light"
                   href="javascript:void(0);"
                   >
                     
                     <div class="flex items-center space-x-2 fill-primary dark:fill-accent">
                                      
                         
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                           <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                         </svg>
                       <span class="">Ride</span>
                     </div>
                     
                      <svg
                      :class="expanded && 'rotate-90'"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4  transition-transform ease-in-out"
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
                   <ul x-collapse x-show="expanded">
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/rides/ongoing rides')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Ongoing Rides</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/rides/Scheduled Rides')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Scheduled Rides </span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/rides/Completed Rides')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Completed Rides </span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/rides/Canceled Rides')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Canceled Rides </span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/rides/Missed Rides ')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Missed Rides </span>
                         </div>
                       </a>
                     </li>
                     <!-- END RIDES DROPDOWN LIST -->
 
                   </ul>
                 </li>
           
                 <!-- NEW INPUT -->
 
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/pickup and delivery')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex justify-between space-x-2 rounded-lg  p-2 tracking-wide text-primary outline-none transition-all  dark:text-accent-light"
                     >
                     <div class="flex items-center space-x-2">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sec-gr">
                           <path fill="currentColor" d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 116 0h3a.75.75 0 00.75-.75V15z" />
                           <path fill-opacity=".45" d="M8.25 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zM15.75 6.75a.75.75 0 00-.75.75v11.25c0 .087.015.17.042.248a3 3 0 015.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 00-3.732-10.104 1.837 1.837 0 00-1.47-.725H15.75z" />
                           <path d="M19.5 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                         </svg>
                         
                       <span>
                         Pickup & Delivery
                       </span>
                       
                     </div>
 
                     
                   </a>
                 </li>
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/MapView')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide outline-none transition-all   dark:text-accent-light" 
                   >
                   <div class="flex items-center space-x-2">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewbox="0 0 24 24"
                   >
                     <path
                       fill="currentColor"
                       d="m8.625 3.37.353-.661-.353.661Zm10.49 5.602-.354.662.353-.662Zm-.005 6.082.352.662-.352-.662ZM8.626 20.632l-.352-.662.352.662Zm-4.461-4.08-.718-.216.718.216Zm-.007-9.107-.718.215.718-.215Zm4.713 5.323a.75.75 0 0 0 0-1.5v1.5Zm-.6-8.736 10.49 5.602.707-1.323-10.49-5.602-.707 1.323Zm10.487 10.36L8.274 19.97l.704 1.324 10.484-5.578-.704-1.324ZM4.883 16.768l1.364-4.534-1.437-.432-1.363 4.534 1.436.432Zm1.364-4.965-1.37-4.574-1.437.43 1.37 4.574 1.437-.43Zm-.719.965h3.343v-1.5H5.528v1.5Zm2.746 7.202c-.95.505-1.94.289-2.643-.353-.706-.646-1.091-1.708-.748-2.85l-1.436-.431c-.519 1.724.064 3.374 1.172 4.388 1.113 1.017 2.783 1.409 4.36.57l-.705-1.324ZM18.76 9.634c1.82.972 1.818 3.79-.003 4.758l.704 1.325c2.882-1.534 2.884-5.869.006-7.406l-.707 1.323ZM8.978 2.709c-1.575-.841-3.246-.453-4.36.564C3.507 4.285 2.922 5.935 3.44 7.66l1.437-.43c-.343-1.143.044-2.204.751-2.85.703-.64 1.694-.855 2.643-.348l.707-1.323Z"
                     />
                   </svg>
                     <span>
                       Map View
                     </span>
                     
                   </div>
                   </a>
                 </li>
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/manual dispatch')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide text-primary outline-none transition-al" 
                   >
                   
                     <div class="flex items-center space-x-2">
                       <svg xmlns="http://www.w3.org/2000/svg" class=" text-sec-or dark: h-6 w-6" fill="currentColor" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M19 10.35V5h-5v2h3v2.65L13.52 14H10V9H2v7h2c0 1.66 1.34 3 3 3s3-1.34 3-3h4.48L19 10.35zM7 17c-.55 0-1-.45-1-1h2c0 .55-.45 1-1 1z"/>
                           <path fill="currentColor" fill-opacity=".45" d="M5 6h5v2H5zm14 7c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3zm0 4c-.55 0-1-.45-1-1s.45-1 1-1s1 .45 1 1s-.45 1-1 1z"/>
                       </svg>
                       <span >
                         Manual Dispatch
                       </span>
                       
                     </div>
                   </a>
                 </li>
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/contact drivers')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide text-primary outline-none transition-all   dark:text-accent-light" 
                   >
                   <div class="flex items-center space-x-2">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-sec-pi w-6 h-6">
                           <path fill-rule="evenodd" d="M15 3.75a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0V5.56l-4.72 4.72a.75.75 0 11-1.06-1.06l4.72-4.72h-2.69a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                           <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                         </svg>
                         
                     <span>
                       Contact Drivers
                     </span>   
                   </div>
                     
                   </a>
                 </li>
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/dynamic pricing')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide text-primary outline-none transition-all   dark:text-accent-light" 
                   >
                     <div class="flex items-center space-x-2 hover:text-sec-gr">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                           <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                           <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
                           <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                         </svg>
                         
                       <span>
                         Dynamic Pricing
                       </span>   
                     </div>
                   </a>
                 </li>
                 <li x-data="accordionItem('menu-item-3')">
                   <a
                     :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                     @click="expanded = !expanded"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide outline-none transition-all  dark:text-accent-light"
                     href="javascript:void(0);"
                   >
                   <div class="flex items-center space-x-2">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-4.5 w-4.5"
                     fill="none"
                     viewbox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="1.5"
                   >
                     <path
                       stroke-linecap="round"
                       stroke-linejoin="round"
                       stroke-width="1.5"
                       d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                     />
                   </svg>
                     <span>Customers</span>
                     
                   </div>
                   <svg
                       :class="expanded && 'rotate-90'"
                       xmlns="http://www.w3.org/2000/svg"
                       class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
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
                   <ul x-collapse x-show="expanded">
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/customers/active customers')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Active Customers</span>
                         </div>
                       </a>
                     </li>
                   </ul>
                 </li>
                 <li x-data="accordionItem('menu-item-4')">
                   <a
                     :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                     @click="expanded = !expanded"
                     class="flex items-center justify-between p-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                     href="javascript:void(0);"
                   >
                   <div class="flex items-center space-x-2">
                     <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-4.5 w-4.5"
                     fill="none"
                     viewbox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="1.5"
                   >
                     <path
                       stroke-linecap="round"
                       stroke-linejoin="round"
                       d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                     />
                   </svg>
                 </span>
                     <span>Drivers</span>
                   </div>
                   <svg
                   :class="expanded && 'rotate-90'"
                   xmlns="http://www.w3.org/2000/svg"
                   class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
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
                   <ul x-collapse x-show="expanded">
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/drivers/active drivers')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Active Drivers</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/drivers/Deactivate Drivers')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Deactivate Drivers</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/drivers/Driver Enrollment')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Driver Enrollment</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/drivers/Leaderboard')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Leaderboard</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/drivers/Driver Performance')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Driver Performance</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/drivers/Ride Request Details')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Ride Request Details</span>
                         </div>
                       </a>
                     </li>
                   </ul>
                 </li>
 
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/Fleets')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide text-primary outline-none transition-all   dark:text-accent-light" 
                   >
                   <div class="flex items-center space-x-2">
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
                         d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                       />
                     </svg>
                     <span>Fleets</span>
                   </div>
               
                   </a>
                 </li>
 
                 <li x-data="accordionItem('menu-item-5')">
                   <a
                     :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                     @click="expanded = !expanded"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide outline-none transition-all   dark:text-accent-light" 
                   href="javascript:void(0);"
                   >
                   <div class="flex items-center space-x-2">
                     <span>
                       <i class="fa fa-user"></i>
                     </span>
                     <span>Promotions</span>
                   </div>
                   <svg
                   :class="expanded && 'rotate-90'"
                   xmlns="http://www.w3.org/2000/svg"
                   class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
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
                   <ul x-collapse x-show="expanded">
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/Promotions/city wide')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>City Wide</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/Promotions/coupons')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Coupons</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="Referrals{{url('dashboard/Promotions/referrals')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Referrals</span>
                         </div>
                       </a>
                     </li>
                   </ul>
                 </li>
                <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/Chat Support')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide text-primary outline-none transition-all   dark:text-accent-light" 
                   >
                   <div class="flex items-center space-x-2">
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
                         d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                       />
                     </svg>
                     <span>Chat Support</span>
                   </div>

                   </a>
                 </li>
 
                 <li>
                   <a
                     x-data="navLink"
                     href="{{url('dashboard/Analytics')}}"
                     :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                     class="group flex items-center justify-between rounded-lg  p-2 tracking-wide text-primary outline-none transition-all   dark:text-accent-light" 
                   >
                   <div class="flex items-center space-x-2">
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
                         d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                       />
                     </svg>
                     <span>Analytics</span>
                   </div>

                   </a>
                 </li>
 
   
                 <li x-data="accordionItem('menu-item-6')">
                   <a
                     :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                     @click="expanded = !expanded"
                     class="flex items-center justify-between p-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-accent-light dark:hover:text-navy-50"
                     href="javascript:void(0);"
                   >
                   <div class="flex items-center space-x-2">
                     <span>
                       <i class="fa fa-user"></i>
                     </span>
                     <span>Popup</span>
                     
                   </div>
                   <svg
                       :class="expanded && 'rotate-90'"
                       xmlns="http://www.w3.org/2000/svg"
                       class="h-4 w-4  transition-transform ease-in-out"
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
                   <ul x-collapse x-show="expanded">
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/popup/view Popup')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>View Popup</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/popup/Create popup')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Create Popup</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/popup/schedule popup')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Schedule Popup</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/popup/Scheduled popup')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Scheduled Popup</span>
                         </div>
                       </a>
                     </li>         
                   </ul>
                 </li>
 
                 <li>
                   <a
                   class="group flex items-center justify-between rounded-lg  p-2 tracking-wide outline-none transition-all " 
                   href="{{url('dashboard/banners')}}"
                   >
                     <div class="flex items-center space-x-2">
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
                           d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                         />
                       </svg>
                       <span>Banner</span>
                     </div>
                    
                   </a>
                 </li>
 
                 <li>
                   <a
                   class="group flex items-center justify-between rounded-lg  p-2 tracking-wide outline-none transition-all " 
                   href="{{url('dashboard/Airport Stations')}}"
                   >
                     <div class="flex items-center space-x-2">
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
                           d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                         />
                       </svg>
                       <span> Airport Stations</span>
                     </div>

                   </a>
                 </li>
 
                 
                 <li>
                   <a
                   class="group flex items-center justify-between rounded-lg  p-2 tracking-wide  outline-none transition-all " 
                   href="{{url('dashboard/Custom Geofencing')}}"
                   >
                     <div class="flex items-center space-x-2">
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
                           d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                         />
                       </svg>
                       <span>Custom Geofencing</span>
                     </div>

                   </a>
                 </li>
 
                 <li x-data="accordionItem('menu-item-7')">
                   <a
                     :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                     @click="expanded = !expanded"
                     class="flex items-center justify-between p-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                     href="javascript:void(0);"
                   >
                   <div class="flex items-center space-x-2">
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
                           d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20"
                         />
                       </svg>
                     <span>Settings</span>
                     
                     </svg>
                   </div>
                   <svg
                       :class="expanded && 'rotate-90'"
                       xmlns="http://www.w3.org/2000/svg"
                       class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
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
                   <ul x-collapse x-show="expanded">
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/general Settings/')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>General Settings</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/city Settings')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>City Settings</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/manual Dispatch')}}"
                         :class="isActive ? 'font-medium dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Manual Dispatch</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/Vehicle Filters')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Vehicle Filters</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/Vehicle Fare Settings')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Vehicle Fare Settings</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/Geofencing')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Geofencing</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/Managers Settings')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Managers Settings</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/Corporate')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Corporate</span>
                         </div>
                       </a>
                     </li>
                     <li>
                       <a
                         x-data="navLink"
                         href="{{url('dashboard/settings/Enable Delivery')}}"
                         :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                         class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                       >
                         <div class="flex items-center space-x-2">
                           <div
                             class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                           ></div>
                           <span>Enable Delivery</span>
                         </div>
                       </a>
                     </li>
                   </ul>
                 </li>
                 
                 
                 
 
 
                 <!-- NEW INPUT -->

                 </ul>

 
  
               </div>
 

             </div>
           </div>
         </div>     
     
     </div>
     