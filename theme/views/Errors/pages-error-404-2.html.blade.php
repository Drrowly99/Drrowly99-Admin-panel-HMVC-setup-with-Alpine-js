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

    <title>Lineone - Error 404 v2</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="css/app.css" />

    <!-- Javascript Assets -->
    <script src="js/app.js" defer></script>

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
      <main class="grid w-full grow grid-cols-1 place-items-center">
        <div
          class="grid max-w-screen-lg grid-cols-1 place-items-center gap-12 p-6 lg:grid-cols-2 lg:gap-24"
        >
          <div class="absolute p-6 opacity-20 lg:static lg:opacity-100">
            <img
              width="440"
              x-show="!$store.global.isDarkModeEnabled"
              src="images/illustrations/penguins.svg"
              alt="404 image"
            />
            <img
              width="440"
              x-show="$store.global.isDarkModeEnabled"
              src="images/illustrations/penguins-dark.svg"
              alt="404 image"
            />
          </div>
          <div class="z-2 text-center lg:text-left">
            <p
              class="mt-4 text-7xl font-bold text-primary dark:text-accent lg:mt-0"
            >
              404
            </p>
            <p
              class="mt-6 text-xl font-semibold text-slate-800 dark:text-navy-50 lg:mt-10 lg:text-3xl"
            >
              Oops. This Page Not Found.
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200 lg:text-lg">
              This page you are looking not available
            </p>

            <button
              class="btn mt-10 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90"
            >
              Back To Home
            </button>
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