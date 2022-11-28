<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>{{$title}}</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{asset('css/output.css')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <!-- Javascript Assets -->
    <script src="{{asset('js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body x-data class="is-header-blur is-sidebar-open" x-bind="$store.global.documentBody" >
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
      x-cloak >
     
      @yield('content')

    </div>
    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>

    <script>
  function ContactForm() {
    return {
      formData :{
        business_email: '',
        password: '',
      },
      formMessage: "",
        formLoading: false,
        buttonText: "Submit",
        err_password: "",
        err_business_email: "",
        url: "http://localhost/tailwind-challenge/interview/login/",

        submitForm() {
          this.formMessage = "";
          this.formLoading = true;
          this.buttonText = "Submitting...";
          console.log(JSON.stringify(this.formData))
          axios({
            method: 'post',
            url: '{{route('submit')}}',
            data: this.formData,
            headers: { 
              "Content-Type": "application/json",
              'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
              Accept: "application/json",
            },
          })
          .then((response) => {
          console.log(response.data)
            if(response.data.status == 400){
            
              this.err_business_email = response.data.errors.business_email;
              this.err_password = response.data.errors.password;
              console.log(this.err_business_email)
            }else if(response.data.status == 300){

              this.formMessage = response.data.error;
          
            }else{
              this.formData.business_email = "";
              this.formData.password = "";
              this.formMessage = "Form successfully submitted.";

              setTimeout(function(){
                  window.location.href = '{{route('dashboard')}}';   
              }, 1500)
            }
              
          })
          .catch((error) => {
            
              this.formMessage = 'kindly input all fields'
          })
          .finally(() => {
              this.formLoading = false;
              this.buttonText = "Submit";
            });
        },
      };
    };
  
    </script>

  </body>
</html>