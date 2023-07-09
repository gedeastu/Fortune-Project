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
      href="../img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="120x120"
      href="../img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      sizes="152x152"
      href="../img/iconLogo.svg"
    />
    <link
      rel="apple-touch-icon"
      type="image/png"
      href="../img/iconLogo.svg"
      sizes="60x60"
    />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="192x192" />
    <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="16x16" />

    <!-- aosJS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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

    <!-- Tailwind Elements -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
    rel="stylesheet" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
    tailwind.config = {
    darkMode: "class",
    theme: {
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
        body: ["Roboto", "sans-serif"],
        mono: ["ui-monospace", "monospace"],
      },
    },
    corePlugins: {
      preflight: false,
    },
    };
    </script>

    <!-- Native CSS -->
    <link rel="stylesheet" href="stat.css">

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.js"></script>

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
    <!-- title -->
    <title>Fortune - Your statistic Money</title>
  </head>
  <body class="min-h-[100vh] bg-gradient-to-t to-[#2E3462] from-[#292E53]/100">
    <div id="nav_float" class="z-10 fixed w-full bottom-0">
      <div
        class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl m-10 shadow-md"
        id="popUp_chat"
      >
        <a href="../Index.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/Home.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="#" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
          <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../add_income_expend/income.html" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/add.svg" alt="" class="w-max" />
        </a>
        <a href="" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../profile/profile.html" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
        </a>
      </div>
    </div>
    <div class="max-w-full">
        <!-- header -->
        <div id="header" class="justify-items-end grid-cols-3 grid p-10 pt-14">
          <div id="menu_aside" class="my-auto w-full">
            <button
              type="button"
              class="btn border-none hover:bg-transparent btn-circle"
              data-drawer-backdrop="false"
              data-drawer-target="drawer-left-example"
              data-drawer-show="drawer-left-example"
              data-drawer-placement="left"
              aria-controls="drawer-left-example"
            >
              <img src="../img/menu.svg" alt="" class="w-11 sm:w-12 left-0" />
            </button>
            <div
              id="drawer-left-example"
              class="dark:bg-opacity-100 fixed top-0 left-0 z-50 p-4 overflow-y-auto transition-transform duration-500 -translate-x-full w-full h-full bg-gradient-to-t from-cyan-800 to-[#333757] filter backdrop-blur-[5rem]"
              tabindex="-1"
              aria-labelledby="drawer-left-label"
            >
              <div class="w-full h-full flex justify-center">
                <button
                  type="button"
                  class="outline-none absolute right-14 top-10"
                  data-drawer-hide="drawer-left-example"
                  aria-controls="drawer-left-example"
                >
                  <img src="../img/close.svg" alt="" class="w-9" />
                </button>
                <ul
                  class="h-max w-max my-[20rem] mx-auto md:my-[20rem] md:mx-auto gap-4"
                >
                  <li class="text-center flex">
                    <img
                      src="../img/Iconsax/Linear/home3.svg"
                      alt=""
                      class="my-auto w-10 pr-2"
                    />
                    <a
                      href="#"
                      class="dark:text-white text-white font-bold md:text-4xl text-2xl"
                      >Home</a
                    >
                  </li>
                  <li class="text-center pt-5 flex">
                    <img
                      src="../img/abouti.svg"
                      alt=""
                      class="my-auto w-10 pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >About</a
                    >
                  </li>
                  <li class="text-center py-5 flex">
                    <img
                      src="../img/Iconsax/Bold/profile2user.svg"
                      alt=""
                      class="my-auto w-11 pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >Contact</a
                    >
                  </li>
                  <li class="text-center pb-5 flex">
                    <img
                      src="../img/Iconsax/Linear/setting2.svg"
                      alt=""
                      class="my-auto w-11 pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >Settings</a
                    >
                  </li>
                  <li class="text-center flex w-40">
                    <img
                      src="../img/profile.svg"
                      alt=""
                      class="w-12 my-auto pr-3"
                    />
                    <a
                      href="#"
                      class="text-white font-bold text-2xl md:text-4xl"
                      >Log In</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="w-max m-auto text-white font-bold text-3xl md:text-4xl">
            Fortune
          </h1>
          <!-- profile -->
          <div id="profile" class="my-auto">
            <button
              class="btn border-none hover:bg-transparent btn-circle bg-transparent"
              id="dropdownDefaultButton"
              data-dropdown-toggle="dropdown"
            >
              <img
                src="../img/profile.svg"
                alt=""
                class="mx-auto my-auto p-0 border-none bg-transparent w-10"
              />
            </button>
            <ul
              id="dropdown"
              aria-labelledby="dropdownDefaultButton"
              class="bg-gradient-to-t from-cyan-700/75 to-[#444A85] bg-opacity-50 border-white ease-in-out hidden border border-opacity-10 shadow-lg text-white m-0 gap-5 rounded-xl md:w-44 w-28 z-40"
            >
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  Dashboard
                </a>
              </li>
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  About me
                </a>
              </li>
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  Finance
                </a>
              </li>
              <li
                class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group"
              >
                <a
                  href="#"
                  class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]"
                >
                  Log Out
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div id="container_statistic" class="bg-gradient-to-t to-[#A2A6A9]/20 from-[#466094]/20 bg-opacity-10 w-[27rem] sm:w-max mx-auto h-max px-6 rounded-2xl border-white border-opacity-30 border shadow-lg">
          <div id="navbar" class="flex items-center justify-center mx-auto h-max my-5">
            <a href="chartBatang.php"><img src="../img/previous.svg" alt="" class="w-3" /></a>
            <h3 class="text-white text-xl font-semibold min-w-[15rem] text-center">
              Donut Chart
            </h3>
            <a href="AccountAnalyst.php"><img src="../img/next.svg" alt="" class="w-3" /></a>
          </div>
          <div id="responsiveMode" class="sm:grid grid grid-cols-1 sm:grid-cols-2 sm:gap-14">
          <div id="responsiveMode1" class="sm:self-center">
          <div id="chart" class="scale-95 w-full md:scale-100 flex flex-col py-2">
            <div class="mx-auto flex sm:block items-center gap-5 relative">
              <div id="donuts_chart" class="my-auto">
              <canvas
                class="w-40 col-span-1"
                data-te-chart="doughnut"
                data-te-dataset-data="[12,10,12,10,5,20]"
                data-te-dataset-background-color="['#810CA8', '#4649FF', '#DC0000', '#FF7000', '#C539B4', '#6C4AB6']">
              </canvas>
              </div>
            <div id="responsiveDesc" class="md:flex md:gap-10 flex gap-5">
              <div id="descChart1" class="justify-center mt-8 text-white grid grid-rows-3 gap-5 my-auto">
                <div id="1" class="flex items-center gap-1">
                  <div class="w-3 h-3 bg-[#810CA8]"></div>
                  <p>Coupon</p>
                </div>
                <div id="2" class="flex items-center gap-1">
                  <div class="w-3 h-3 bg-[#4649FF]"></div>
                  <p>Family</p>
                </div>
                <div id="3" class="flex items-center gap-1">
                  <div class="w-3 h-3 bg-[#DC0000]"></div>
                  <p>Retirement</p>
                </div>
              </div>
              <div id="descChart2" class="justify-center mt-8 text-white grid grid-rows-3 gap-5 my-auto">
                <div id="1" class="flex items-center gap-1">
                  <div class="w-3 h-3 bg-[#FF7000]"></div>
                  <p>Entertaiment</p>
                </div>
                <div id="2" class="flex items-center gap-1">
                  <div class="w-3 h-3 bg-[#C539B4]"></div>
                  <p>Investment</p>
                </div>
                <div id="3" class="flex items-center gap-1">
                  <div class="w-3 h-3 bg-[#6C4AB6]"></div>
                  <p>Award</p>
                </div>
              </div>
            </div>
            </div>
          </div>
          </div>
          <div id="responsiveMode2" class="sm:self-center">
          <div id="totalCash" class="my-6">
            <h1 class="text-white w-max mx-auto font-semibold text-xl">
              Total Cash
            </h1>
            <div class="flex justify-around w-full my-3 text-sm md:text-base">
              <div id="income" class="grid-cols-3 flex w-max my-auto">
                <h4 class="text-white pr-1">Rp50.000.000,00</h4>
                <img src="../img/triangleIncome.svg" alt="" class="w-4" />
                <p class="text-white">10%</p>
              </div>
              <div ></div>
              <div id="expends" class="grid-cols-3 flex pl-3 md:pl-4 w-max my-auto">
                <h4 class="text-white pr-1">Rp30.000.000,00</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
                <p class="text-white">10%</p>
              </div>
            </div>
          </div>
          <div id="historyCash" class="gap-9 mx-auto w-full overflow-auto md:h-[30rem] md:w-96 my-5 flex flex-col text-white">
            <div id="itemHistory" class="flex w-full justify-around">
              <div id="icon" class="w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-current m-auto" viewBox="0 0 384 512"><path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z"/></svg>
              </div>
              <div id="decs" class="self-center">
                <div id="heading">
                  
                </div>
                  <div id="parameter" class="border border-white w-44 h-3">
                    <div id="meter" class="bg-white w-1/2 h-full"></div>
                  </div>
              </div>
              <div id="percent" class="self-center">
                <p>30.00%</p>
              </div>
            </div>
            <div id="itemHistory" class="flex w-full justify-around">
              <div id="icon" class="w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-current m-auto" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
              </div>
              <div id="decs" class="self-center">
                <div id="heading">
                  
                </div>
                  <div id="parameter" class="border border-white w-44 h-3">
                    <div id="meter" class="bg-white w-1/2 h-full"></div>
                  </div>
              </div>
              <div id="percent" class="self-center">
                <p>30.00%</p>
              </div>
            </div>
            <div id="itemHistory" class="flex w-full justify-around">
              <div id="icon" class="w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 448 512"><path d="M272 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-8 187.3l47.4 57.1c11.3 13.6 31.5 15.5 45.1 4.2s15.5-31.5 4.2-45.1l-73.7-88.9c-18.2-22-45.3-34.7-73.9-34.7H177.1c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352h16V480c0 17.7 14.3 32 32 32s32-14.3 32-32V235.3zM352 376c0-4.4 3.6-8 8-8s8 3.6 8 8V488c0 13.3 10.7 24 24 24s24-10.7 24-24V376c0-30.9-25.1-56-56-56s-56 25.1-56 56v8c0 13.3 10.7 24 24 24s24-10.7 24-24v-8z"/></svg>
              </div>
              <div id="decs" class="self-center">
                <div id="heading">
                  
                </div>
                  <div id="parameter" class="border border-white w-44 h-3">
                    <div id="meter" class="bg-white w-1/2 h-full"></div>
                  </div>
              </div>
              <div id="percent" class="self-center">
                <p>30.00%</p>
              </div>
            </div>
            <div id="itemHistory" class="flex w-full justify-around">
              <div id="icon" class="w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-current m-auto" viewBox="0 0 640 512"><path d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z"/></svg>
              </div>
              <div id="decs" class="self-center">
                <div id="heading">
                  
                </div>
                  <div id="parameter" class="border border-white w-44 h-3">
                    <div id="meter" class="bg-white w-1/2 h-full"></div>
                  </div>
              </div>
              <div id="percent" class="self-center">
                <p>30.00%</p>
              </div>
            </div>
            <div id="itemHistory" class="flex w-full justify-around">
              <div id="icon" class="w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 fill-current m-auto" viewBox="0 0 448 512"><path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/></svg>
              </div>
              <div id="decs" class="self-center">
                <div id="heading">
                  
                </div>
                  <div id="parameter" class="border border-white w-44 h-3">
                    <div id="meter" class="bg-white w-1/2 h-full"></div>
                  </div>
              </div>
              <div id="percent" class="self-center">
                <p>30.00%</p>
              </div>
            </div>
            <div id="itemHistory" class="flex w-full justify-around">
              <div id="icon" class="w-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full fill-current m-auto" viewBox="0 0 640 512"><path d="M274.9 34.3c-28.1-28.1-73.7-28.1-101.8 0L34.3 173.1c-28.1 28.1-28.1 73.7 0 101.8L173.1 413.7c28.1 28.1 73.7 28.1 101.8 0L413.7 274.9c28.1-28.1 28.1-73.7 0-101.8L274.9 34.3zM200 224a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM96 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 376a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM352 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 120a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm96 328c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H461.7c11.6 36 3.1 77-25.4 105.5L320 413.8V448zM480 328a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
              </div>
              <div id="decs" class="self-center">
                <div id="heading">
                  
                </div>
                  <div id="parameter" class="border border-white w-44 h-3">
                    <div id="meter" class="bg-white w-1/2 h-full"></div>
                  </div>
              </div>
              <div id="percent" class="self-center">
                <p>30.00%</p>
              </div>
            </div>
            <!-- <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
              <div id="type" class="grid-cols-2 flex gap-2">
                <div
                  id="circle_type"
                  class="w-5 h-5 rounded-full bg-white my-auto"
                ></div>
                <div id="name_type" class="text-white my-auto w-max">
                  Bussiness
                </div>
              </div>
              <div id="date" class="text-white text-[0.7em] flex items-center uppercase my-auto mt-[0.5em] md:text-base md:normal-case md:mt-0">12 Desember 2023</div>
              <div id="total" class="grid-cols-2 flex items-center">
                <h4 class="text-white pr-1">Rp30.000</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
              </div>
            </div> -->
          </div>
          </div>
        </div>
        </div>
    </div>
    </div>

    <script id="for_line_months">
      let progressMonths = document.querySelector("#line_months");
      let progressValue = 0;
      let progressEndValue = 65;
      let speed = 3000;

      let progress = setInterval(() => {
        progressValue++;

        progressMonths.style.background = `conic-gradient(
          #346FB0 ${progressValue * 4}deg,
          #48B5D6 ${progressValue * 3.6}deg
        )`;
        if (progressValue == progressEndValue) {
          clearInterval(progress);
        }
      });
    </script>

    <script id="for_line_weeks">
      let progressWeeks = document.querySelector("#line_weeks");
      let ProgressValue = 0;
      let ProgressEndValue = 75;
      let Speed = 3000;

      let Progress = setInterval(() => {
        ProgressValue++;

        progressWeeks.style.background = `conic-gradient(
          #346FB0 ${ProgressValue * 3.5}deg,
          #48B5D6 ${ProgressValue * 3.5}deg
        )`;
        if (ProgressValue == ProgressEndValue) {
          clearInterval(Progress);
        }
      });
    </script>
    <!-- AOS JS -->
    <script>
      AOS.init();
    </script>
    <!-- Tailwind Elements -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  </body>
</html>