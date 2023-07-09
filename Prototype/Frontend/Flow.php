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
        <a href="../home_page/homePage.html" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
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
    <div
      class="container max-w-full"
    >
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

        <div
          id="container_statistic"
          class="relative bg-gradient-to-t to-[#A2A6A9]/20 from-[#466094]/20 bg-opacity-10 w-[27rem] md:w-max h-full px-7 rounded-2xl m-auto border-white border-opacity-30 border shadow-lg"
        >
        <div id="navbar" class="flex items-center justify-center mx-auto h-max my-5">
            <a href="AccountAnalyst.php"><img src="../img/previous.svg" alt="" class="w-3" /></a>
            <h3 class="text-white text-xl font-semibold min-w-[15rem] text-center">
              Bar Chart
            </h3>
            <a href="DonutsChart.html"><img src="../img/next.svg" alt="" class="w-3" /></a>
        </div>
      <div id="responsiveMode" class="md:flex md:justify-around md:h-1/2 md:gap-10 md:w-full">
      <div id="responsiveMode1" class="md:self-center">
        <div id="chart" class="w-full relative md:scale-110">
          <div class="flex justify-center">
          <div id="ChartBar" class="text-white scale-75 md:scale-[0.8] relative border mx-auto border-t-0 border-r-0 border-white md:w-[23.5rem] w-[18.5rem] h-[15rem]">
            <div id="bar1" class="md:w-10 w-7 md:left-[1rem] left-[0.7rem] h-5/6 absolute bg-blue-500 z-40 bottom-0"></div>
            <p class="bottom-[-2rem] absolute md:left-[2rem] left-[1.5rem]">1</p>

            <div id="bar1" class="md:w-10 w-7 md:left-[5rem] left-[3.5rem] h-1/3 absolute bg-blue-500 z-40 bottom-0"></div>
            <p class="bottom-[-2rem] absolute md:left-[6rem] left-[4.5rem]">2</p>

            <div id="bar1" class="md:w-10 w-7 md:left-[9rem] left-[6.5rem] h-3/4 absolute bg-blue-500 z-40 bottom-0"></div>
            <p class="bottom-[-2rem] absolute md:left-[10rem] left-[7.5rem]">3</p>

            <div id="bar1" class="md:w-10 w-7 md:left-[13rem] left-[9.5rem] h-1/3 absolute bg-blue-500 z-40 bottom-0"></div>
            <p class="bottom-[-2rem] absolute md:left-[14rem] left-[10.5rem]">4</p>

            <div id="bar1" class="md:w-10 w-7 md:left-[17rem] left-[12.5rem] h-1/4 absolute bg-blue-500 z-40 bottom-0"></div>
            <p class="bottom-[-2rem] absolute md:left-[18rem] left-[13.5rem]">5</p>
            
            <div id="bar1" class="md:w-10 w-7 md:left-[21rem] left-[15.5rem] h-4/6 absolute bg-blue-500 z-40 bottom-0"></div>
            <p class="bottom-[-2rem] absolute md:left-[22rem] left-[16.5rem]">6</p>
            <ul id="HeightMeter" class="relative h-max text-right">
                <li class="border-b-2 border-white/20 h-10 relative text-right"><div class="absolute text-lg left-[-40px]">20m</div></li>
                <li class="border-b-2 border-white/20 h-10 relative text-right"><div class="absolute text-lg left-[-40px]">15m</div></li>
                <li class="border-b-2 border-white/20 h-10 relative text-right"><div class="absolute text-lg left-[-40px]">10m</div></li>
                <li class="border-b-2 border-white/20 h-10 relative text-right"><div class="absolute text-lg left-[-33px]">5m</div></li>
                <li class="border-b-2 border-white/20 h-10 relative text-right"><div class="absolute text-lg left-[-33px]">1m</div></li>
            </ul>
          </div>
          </div>
        </div>
        <div id="totalCash" class="my-6">
            <h1 class="text-white w-max mx-auto font-semibold text-xl">
              Total Cash
            </h1>
            <div class="flex items-center w-full my-3 justify-center gap-3 text-sm md:text-base">
              <div id="income" class="flex w-max my-auto">
                <h4 class="text-white pr-1">Rp50.000.000,00</h4>
                <img src="../img/triangleIncome.svg" alt="" class="w-4" />
                <p class="text-white">10%</p>
              </div>
              <div id="boundary" class="w-1 h-5 bg-white"></div>
              <div id="expends" class="flex w-max my-auto">
                <h4 class="text-white pr-1">Rp30.000.000,00</h4>
                <img src="../img/triangleExpends.svg" alt="" class="w-4" />
                <p class="text-white">10%</p>
              </div>
            </div>
          </div>
      </div>
      <div id="responsiveMode2" class="md:py-1">
          <div id="historyCash" class="overflow-auto relative flex flex-col gap-9 mx-auto w-max md:w-[25rem] my-5 md:h-[35rem]">
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
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
            </div>
          </div>
      </div>
      </div>
        </div>
    </div>

    <!-- Tailwind Elements -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <!-- AOS JS -->
    <script>
      AOS.init();
    </script>
    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  </body>
</html>