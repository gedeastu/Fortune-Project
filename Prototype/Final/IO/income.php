<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- icon title -->
    <link rel="apple-touch-icon" type="image/png" href="../img/iconLogo.svg" />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="76x76"
      href="img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="120x120"
      href="img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="152x152"
      href="img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      href="img/iconLogo.svg"
      sizes="60x60"
    />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="192x192" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="16x16" />

    <!-- aosJS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="income.css">
    <!-- Flowbite -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"
      rel="stylesheet"
    />
    
    <!-- daisyUI -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0c2355f323.js" crossorigin="anonymous"></script>

    <!-- tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {},
          },
        },
      };
    </script>
    <!-- 
    <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
      </style>
    -->

    <!-- CSS Native -->
    <link rel="stylesheet" href="income.css">

    <!-- title -->
    <title>Fortune - Income, Please input your income on this form</title>
  </head>
  <body class="">

    <!-- Nav Bar -->
    <div id="nav_float" class="z-10 fixed w-full bottom-0">
      <div
        class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl m-10 shadow-md"
        id="nav_float">
        <a href="../Index.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/Home.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../statistic/AccountAnalyst.html" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
        </a>
        <div id="add">
        <a href="#" tabindex="0" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
          <img src="../img/add.svg" alt="" class="w-max" />
        </a>
        </div>
        <a href="" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../user/profile.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
        </a>
      </div>
    </div>
    <!-- Nav Bar -->

    <div class="container max-w-full md:h-[100vh] bg-gradient-to-t to-[#2E3462] from-[#292E53]/100">
      <div class="backdrop-blur-[13rem] h-full backdrop-filter py-5 relative md:flex">
        <!-- container_login -->
        <div
          id="container_income"
          class="max-w-[26em] md:my-auto md:max-w-max md:scale-110 border-opacity-10 border-white border-2 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 bg-opacity-10 rounded-2xl mx-auto sm:max-w-lg shadow-lg my-10 px-7"
        >
          <div id="header" class="py-5 w-full md:h-full">
            <div id="title_income" class="text-2xl text-white font-bold mx-auto w-max" >
              <h1>Income</h1>
            </div>
          </div>
          <div id="field_income" class="mt-5 max-w-3xl">
          <div id="responsive_income" class="md:grid-cols-2 md:grid md:h-full md:relative md:items-center md:gap-5">
          <div id="responsive1" class="md:w-full md:h-96">


          <!-- Form Start- -->
          <form action="Php/Income.php" method="post">
            <!-- Amount Field -->
            <div id="Rp" class="bg-white bg-opacity-10 mx-auto rounded-xl h-10">
              <div class="flex justify-around items-center justify-items-stretch">
                <label for="field_rp" class="md:py-0 text-white w-32 pl-5">Rp.</label >
                <input name="Ammount" id="field_rp" type="text" class="bg-transparent text-white rounded-full border-none w-full focus:ring-0"/>
              </div>
            </div>
            <!-- Amount Field END-->

            <!-- Title Income -->
            <div id="Title" class="bg-white bg-opacity-10 mx-auto rounded-xl my-3">
              <div class="flex justify-around">
                <label for="field_rp" class="my-auto py-3 text-white w-32 pl-5">Title :</label>
                <input name="Title" id="field_rp" type="text" class="bg-transparent text-white rounded-full border-none w-full focus:ring-0"/>
              </div>
            </div>
            <!-- Title Income END -->

            <!-- Categoty List -->
            <div id="Category" class="w-full relative bg-white/10 rounded-xl pb-3">
              <div id="titleCategory" class="h-max mb-3 pl-5 text-white">
                <h3 class="pt-1 h-full">Category : </h3>
              </div>
              

              <!-- Scroll Point -->
              <div id="trackCategory" class="mx-5 border border-white/20 h-28 overflow-y-auto relative shadow-inner rounded-lg">

                <!-- List 01-->
                <div id="category_01" class="flex w-full">

                <div id="Money_category" class="flex w-full overflow-hidden">
                  <input name="Category" value="1" id="money" type="radio" class="hidden">
                  <label for="money" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
                  </label>
                </div>

                <div id="Food_category" class="flex w-full overflow-hidden">
                  <input name="Category" value="2" id="food" type="radio" class="hidden">
                  <label for="food" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M169.7 .9c-22.8-1.6-41.9 14-47.5 34.7L110.4 80c.5 0 1.1 0 1.6 0c176.7 0 320 143.3 320 320c0 .5 0 1.1 0 1.6l44.4-11.8c20.8-5.5 36.3-24.7 34.7-47.5C498.5 159.5 352.5 13.5 169.7 .9zM399.8 410.2c.1-3.4 .2-6.8 .2-10.2c0-159.1-128.9-288-288-288c-3.4 0-6.8 .1-10.2 .2L.5 491.9c-1.5 5.5 .1 11.4 4.1 15.4s9.9 5.6 15.4 4.1L399.8 410.2zM176 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm64 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM96 384a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                  </label>
                </div>

                <div id="Inevestment_category" class="flex w-full overflow-hidden">
                  <input name="Category" value="3" id="investment" type="radio" class="hidden">
                  <label for="investment" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 448 512"><path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/></svg>
                  </label>
                </div>

                <div id="Water_category" class="flex w-full overflow-hidden">
                  <input name="Category" value="4" id="water" type="radio" class="hidden">
                  <label for="water" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512"><path d="M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z"/></svg>
                  </label>
                </div>
                
                

                </div>
                <!-- END List 01-->

                <!-- List 02-->
                <!-- <div id="category_02" class="flex w-full ">

                  <div id="book_category" class="flex w-full overflow-hidden">
                    <input type="radio" name="radio" class="hidden" id="book">
                    <label for="book" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 448 512"><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                    </label>
                  </div>

                  <div id="education_category" class="flex w-full overflow-hidden">
                    <input type="radio" name="radio" class="hidden" id="edu">
                    <label for="edu" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 fill-current m-auto" viewBox="0 0 640 512"><path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM256 416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H256V416zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z"/></svg>
                    </label>
                  </div>

                  <div id="transport_category" class="flex w-full overflow-hidden">
                    <input type="radio" name="radio" class="hidden" id="transport">
                    <label for="transport" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
                    </label>
                  </div>

                  <div id="music_category" class="flex w-full overflow-hidden">
                    <input type="radio" name="radio" class="hidden" id="music">
                    <label for="music" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z"/></svg>
                    </label>
                  </div>

                </div> -->
                <!-- END List 02-->

                <!-- List 03-->
                <!-- <div id="category_03" class="flex w-1/2">

                  <div id="entertaiment_category" class="flex w-full overflow-hidden">
                    <input type="radio" name="radio" class="hidden" id="entertaiment">
                    <label for="entertaiment" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg>
                    </label>
                  </div>

                  <div id="game_category" class="flex w-full overflow-hidden">
                    <input type="radio" name="radio" class="hidden" id="game">
                    <label for="game" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 640 512"><path d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z"/></svg>
                    </label>
                  </div>
                  
                </div> -->
                <!-- END List 03-->

              </div>
              <!-- Scroll Point END-->


            </div>
            <!-- Categoty List END -->


            <div id="AccDate" class="flex justify-between my-3 gap-2.5 ">

              <!-- Acc List -->
              <div id="Account" class="w-52 relative bg-white/10 rounded-xl pb-3">
                <div id="titleCategory" class="h-max mb-3 pl-5 text-white">
                  <h3 class="h-full pt-1">Account : </h3>
                </div>

                <!-- Scroll Point -->
                <div id="trackAccount" class="border border-white/10 mx-2 h-12 overflow-auto relative shadow-inner rounded-lg">

                  <!-- List 1 -->
                  <div id="category_01" class="flex w-full overflow-hidden">
                  
                    <div id="assets_category" class="flex w-full overflow-hidden">
                      <input type="radio" value="ATM" name="acc" class="hidden" id="assets">
                      <label for="assets" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current m-auto" viewBox="0 0 384 512"><path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z"/></svg>
                      </label>
                    </div>

                    <div id="expenses_category" class="flex w-full overflow-hidden">
                      <input type="radio" value="Pockets" name="acc" class="hidden" id="expenses">
                      <label for="expenses" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current m-auto" viewBox="0 0 512 512"><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
                      </label>
                    </div>

                    <div id="liabilities_category" class="flex w-full overflow-hidden">
                      <input type="radio" value="Other" name="acc" class="hidden" id="liabilities">
                      <label for="liabilities" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
                      </label>
                    </div>

                  </div>

                  <!-- List 2 -->
                  <!-- <div id="category_02" class="flex w-2/3 overflow-hidden">

                    <div id="equity_category" class="flex w-full overflow-hidden">

                    <input type="radio" name="radio2nd" class="hidden" id="equity">
                    <label for="equity" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 512 512"><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
                    </label>
                    </div>
                    <div id="revenue_category" class="flex w-full overflow-hidden">
                      <input type="radio" name="radio2nd" class="hidden" id="revenue">
                      <label for="revenue" class="cursor-pointer flex w-full p-3 bg-white/25 text-white border border-white/10 overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-max fill-current m-auto" viewBox="0 0 512 512"><path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/></svg>
                      </label>

                    </div>

                  </div> -->

                </div>
                <!-- Scroll Point END-->

              </div>
              <!-- Acc List END-->

              <!-- Date Input -->
              <div id="date" class="bg-white bg-opacity-10 w-60 rounded-xl relative grid-cols-2 flex">
                
                <!-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <img src="../img/calendar.svg" alt="" class="w-4">
                </div> -->
                <input name="iDate" type="date" id="datepicker" class="bg-transparent border-none text-white placeholder-white text-sm rounded-lg focus:ring-blue-500 pl-10 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                <script>
                  var currentDate = new Date();
                  var year = currentDate.getFullYear();
                  var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                  var day = String(currentDate.getDate()).padStart(2, '0');
                  var formattedDate = `${year}-${month}-${day}`;
                  document.getElementById('datepicker').value = formattedDate;
                </script>

              </div>
              <!-- Date Input END-->

            </div>
          

            </div>

            <!-- Description -->
            <div id="responsive2" class="md:w-full md:h-full">
              <div id="description" class="">
                <textarea name="Description" id="field_desc"  cols="50" rows="25" class="w-full max-h-full md:h-96  resize-none pl-5 pt-5 text-white border-none bg-white bg-opacity-10 rounded-2xl placeholder-white" placeholder="description"></textarea>
              </div>
            </div>
            <!-- Description END-->
          
            </div>
            </div>

          <div id="btn_income" class="grid grid-cols-2 my-2 w-full gap-3 pb-20 relative md:gap-5">
            <button type="submit" name="cancel" class="w-full active:scale-90 border-white/10 border transition bg-gradient-to-tl to-[#5D6186] from-[#8A98E2]/50 text-white py-3.5 rounded-xl btn hover:border-none">Cancel</button>
            <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-3.5 rounded-xl btn">Save</button>
          </div>

          </form>
          <!-- Ending Form -->


        </div>
      </div>
    </div>
    <!-- aosJS init -->
    <script>
      AOS.init();
    </script>
    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
  </body>
</html>
