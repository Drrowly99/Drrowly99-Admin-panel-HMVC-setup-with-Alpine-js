<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    <div class="main-sidebar">
      <div
        class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800"
      >
        <!-- Application Logo -->
        <div class="flex pt-4">
          <a href="/">
            <img
              class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
              src="{{ asset('images/app-logo.svg') }}"
              alt="logo"
            />
          </a>
        </div>

        <!-- Main Sections Links -->
        <div
          class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6"
        >
          <!-- Dashobards -->
          <a
            href="/dashboard"
            class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            x-tooltip.placement.right="'Dashboard'"
          >
            <svg
              class="h-7 w-7"
              viewbox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M5 14.0585C5 13.0494 5 12.5448 5.22166 12.1141C5.44333 11.6833 5.8539 11.3901 6.67505 10.8035L10.8375 7.83034C11.3989 7.42938 11.6795 7.2289 12 7.2289C12.3205 7.2289 12.6011 7.42938 13.1625 7.83034L17.325 10.8035C18.1461 11.3901 18.5567 11.6833 18.7783 12.1141C19 12.5448 19 13.0494 19 14.0585V19C19 19.9428 19 20.4142 18.7071 20.7071C18.4142 21 17.9428 21 17 21H7C6.05719 21 5.58579 21 5.29289 20.7071C5 20.4142 5 19.9428 5 19V14.0585Z"
                fill-opacity="0.3"
                class="fill-slate-500 dark:fill-navy-200"
              />
              <path
                d="M3 12.3866C3 12.6535 3 12.7869 3.0841 12.8281C3.16819 12.8692 3.27352 12.7873 3.48418 12.6234L10.7721 6.95502C11.362 6.49625 11.6569 6.26686 12 6.26686C12.3431 6.26686 12.638 6.49625 13.2279 6.95502L20.5158 12.6234C20.7265 12.7873 20.8318 12.8692 20.9159 12.8281C21 12.7869 21 12.6535 21 12.3866V11.9782C21 11.4978 21 11.2576 20.8983 11.0497C20.7966 10.8418 20.607 10.6944 20.2279 10.3995L13.2279 4.95502C12.638 4.49625 12.3431 4.26686 12 4.26686C11.6569 4.26686 11.362 4.49625 10.7721 4.95502L3.77212 10.3995C3.39295 10.6944 3.20337 10.8418 3.10168 11.0497C3 11.2576 3 11.4978 3 11.9782V12.3866Z"
                class="fill-slate-500 dark:fill-navy-200"
              />
              <path
                d="M12.5 15H11.5C10.3954 15 9.5 15.8954 9.5 17V20.85C9.5 20.9328 9.56716 21 9.65 21H14.35C14.4328 21 14.5 20.9328 14.5 20.85V17C14.5 15.8954 13.6046 15 12.5 15Z"
                class="fill-slate-500 dark:fill-navy-200"
              />
              <rect
                x="16"
                y="5"
                width="2"
                height="4"
                rx="0.5"
                class="fill-slate-500 dark:fill-navy-200"
              />
            </svg>
          </a>

          <!-- Phones -->
          <a
            href="/phones"
            class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            x-tooltip.placement.right="'Phones'"
          >
            <svg
              class="h-7 w-7"
              viewbox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M9.85714 3H4.14286C3.51167 3 3 3.51167 3 4.14286V9.85714C3 10.4883 3.51167 11 4.14286 11H9.85714C10.4883 11 11 10.4883 11 9.85714V4.14286C11 3.51167 10.4883 3 9.85714 3Z"
                class="fill-slate-500 dark:fill-navy-200"
              />
              <path
                d="M9.85714 12.8999H4.14286C3.51167 12.8999 3 13.4116 3 14.0428V19.757C3 20.3882 3.51167 20.8999 4.14286 20.8999H9.85714C10.4883 20.8999 11 20.3882 11 19.757V14.0428C11 13.4116 10.4883 12.8999 9.85714 12.8999Z"
                class="fill-slate-500 dark:fill-navy-200"
                fill-opacity="0.3"
              />
              <path
                d="M19.757 3H14.0428C13.4116 3 12.8999 3.51167 12.8999 4.14286V9.85714C12.8999 10.4883 13.4116 11 14.0428 11H19.757C20.3882 11 20.8999 10.4883 20.8999 9.85714V4.14286C20.8999 3.51167 20.3882 3 19.757 3Z"
                class="fill-slate-500 dark:fill-navy-200"
                fill-opacity="0.3"
              />
              <path
                d="M19.757 12.8999H14.0428C13.4116 12.8999 12.8999 13.4116 12.8999 14.0428V19.757C12.8999 20.3882 13.4116 20.8999 14.0428 20.8999H19.757C20.3882 20.8999 20.8999 20.3882 20.8999 19.757V14.0428C20.8999 13.4116 20.3882 12.8999 19.757 12.8999Z"
                class="fill-slate-500 dark:fill-navy-200"
                fill-opacity="0.3"
              />
            </svg>
          </a>
         
        </div>

        <!-- Bottom Links -->
        <div class="flex flex-col items-center space-y-3 py-3">
          <!-- logout -->
          <a href="logout"
            class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
            <svg 
                style="color: rgb(115, 118, 160);" 
                xmlns="http://www.w3.org/2000/svg" 
                 fill="currentColor" 
                class="h-7 w-7 bi bi-box-arrow-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" fill="#7376a0"></path> <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" fill="#7376a0"></path> </svg>
          </a>

          
        </div>
      </div>
    </div>  
</div>
 <!-- App Header Wrapper-->
 <nav class="header print:hidden">
  <!-- App Header  -->
  <div
    class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden"
  >
    <!-- Header Items -->
    <div class="flex w-full items-center justify-between">
      <!-- Left: Sidebar Toggle Button -->
      <div class="h-7 w-7">
        <button
          class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
          :class="$store.global.isSidebarExpanded && 'active'"
          @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

      <!-- Right: Header buttons -->
      <div class="-mr-1.5 flex items-center space-x-2">
        <!-- Mobile Search Toggle -->
        <button
          @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
          class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100"
            fill="none"
            viewbox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1.5"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            />
          </svg>
        </button>

        <!-- Main Searchbar -->
        <template x-if="$store.breakpoints.smAndUp">
          <div
            class="flex"
            x-data="usePopper({placement:'bottom-end',offset:12})"
            @click.outside="if(isShowPopper) isShowPopper = false"
          >
            <div class="relative mr-4 flex h-8">
              <input
                placeholder="Search here..."
                class="form-input peer h-full rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:text-navy-100 dark:placeholder-navy-300 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                :class="isShowPopper ? 'w-80' : 'w-60'"
                @focus="isShowPopper= true"
                type="text"
                x-ref="popperRef"
              />
              <div
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4.5 w-4.5 transition-colors duration-200"
                  fill="currentColor"
                  viewbox="0 0 24 24"
                >
                  <path
                    d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"
                  />
                </svg>
              </div>
            </div>
            
          </div>
        </template>

        <!-- Dark Mode Toggle -->
        <button
          @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
          class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
        >
          <svg
            x-show="$store.global.isDarkModeEnabled"
            x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
            x-transition:enter-start="scale-75"
            x-transition:enter-end="scale-100 static"
            class="h-6 w-6 text-amber-400"
            fill="currentColor"
            viewbox="0 0 24 24"
          >
            <path
              d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x-show="!$store.global.isDarkModeEnabled"
            x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
            x-transition:enter-start="scale-75"
            x-transition:enter-end="scale-100 static"
            class="h-6 w-6 text-amber-400"
            viewbox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
              clip-rule="evenodd"
            />
          </svg>
        </button>
        
        <!-- Monochrome Mode Toggle -->
        <button
          @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled"
          class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
        >
          <i
            class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"
          ></i>
        </button>

        <!-- Notification-->
        <div
          x-effect="if($store.global.isSearchbarActive) isShowPopper = false"
          x-data="usePopper({placement:'bottom-end',offset:12})"
          @click.outside="if(isShowPopper) isShowPopper = false"
          class="flex"
        >
          <button
            @click="isShowPopper = !isShowPopper"
            x-ref="popperRef"
            class="btn relative h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-slate-500 dark:text-navy-100"
              stroke="currentColor"
              fill="none"
              viewbox="0 0 24 24"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z"
              />
            </svg>

            <span
              class="absolute -top-px -right-px flex h-3 w-3 items-center justify-center"
            >
              <span
                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80"
              ></span>
              <span
                class="inline-flex h-2 w-2 rounded-full bg-secondary"
              ></span>
            </span>
          </button>
           
        </div>

        <!-- Right Sidebar Toggle -->
        <button
          @click="$store.global.isRightSidebarExpanded = true"
          class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100"
            fill="none"
            viewbox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="1.5"
              d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Mobile Searchbar -->
<div
  x-show="$store.breakpoints.isXs && $store.global.isSearchbarActive"
  x-transition:enter="easy-out transition-all"
  x-transition:enter-start="opacity-0 scale-105"
  x-transition:enter-end="opacity-100 scale-100"
  x-transition:leave="easy-in transition-all"
  x-transition:leave-start="opacity-100 scale-100"
  x-transition:leave-end="opacity-0 scale-95"
  class="fixed inset-0 z-[100] flex flex-col bg-white dark:bg-navy-700 sm:hidden"
>
  <div
    class="flex items-center space-x-2 bg-slate-100 px-3 pt-2 dark:bg-navy-800"
  >
    <button
      class="btn -ml-1.5 h-7 w-7 shrink-0 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25"
      @click="$store.global.isSearchbarActive = false"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="none"
        stroke-width="1.5"
        viewbox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15 19l-7-7 7-7"
        />
      </svg>
    </button>
    <input
      x-effect="$store.global.isSearchbarActive && $nextTick(() => $el.focus() );"
      class="form-input h-8 w-full bg-transparent placeholder-slate-400 dark:placeholder-navy-300"
      type="text"
      placeholder="Search here..."
    />
  </div>

</div>