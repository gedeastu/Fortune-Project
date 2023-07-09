<?php
include '../Conf/connect.php';
session_start();

// jika session id kosong maka di arahkan ke halaman login
if ($_SESSION['id'] == "") {
  header("location:../Gateaway/login.html");
}

$currentMonth = $_GET['date'];
$currentYear = date('Y');

// Get total Expense
$result_expense = mysqli_query($conn, "SELECT SUM(Amount) AS Total_Expense FROM History WHERE Type = 'Expense' AND Id_Wallet = '{$_SESSION['id']}' AND MONTH(Date) = $currentMonth AND YEAR(Date) = $currentYear");

$rowEx = mysqli_fetch_assoc($result_expense);

// Get total Income
$result_income = mysqli_query($conn, "SELECT SUM(Amount) AS Total_Income FROM History WHERE Type = 'Income' AND Id_Wallet = '{$_SESSION['id']}' AND MONTH(Date) = $currentMonth AND YEAR(Date) = $currentYear");

$rowIn = mysqli_fetch_assoc($result_income);

// Jika ada Income dan Expense
if ($rowEx["Total_Expense"] && $rowIn["Total_Income"]) {
  $expense = $rowEx["Total_Expense"];
  $income = $rowIn["Total_Income"];

  $total = $income + $expense;
  $perExpense = round(($expense / $total) * 100);
  $perIncome = 100 - $perExpense;

  $inAmmount = number_format($income);
  $exAmmount = number_format($expense);

  // Jika hanya Expense
} elseif ($rowEx["Total_Expense"]) {
  $perExpense = 100;
  $perIncome = 0;

  $inAmmount = 0;
  $exAmmount = number_format($rowEx["Total_Expense"]);

  // Jika hanya Income
} elseif ($rowIn["Total_Income"]) {
  $perExpense = 0;
  $perIncome = 100;

  $inAmmount = number_format($rowIn["Total_Income"]);
  $exAmmount = 0;

  // Jikat tidak semuanya
} else {
  $exAmmount = 0;
  $inAmmount = 0;
  $perExpense = 0;
  $perIncome = 0;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- icon title -->
  <link rel="apple-touch-icon" type="image/png" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" href="../img/iconLogo.svg" sizes="60x60" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="32x32" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="192x192" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="16x16" />

  <!-- aosJS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  <!-- Native CSS -->
  <link rel="stylesheet" href="stat.css">
  <style>
  </style>

  <!-- daisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
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
      <div class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl m-10 shadow-md" id="popUp_chat">
        <a href="../Index.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/Home.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../Stat/AccountAnalyst.php?date=<?php $date = date('m'); echo $date ?>" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
          <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
        </a>
        <label for="IO_modal" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/add.svg" alt="" class="w-max" />
        </label>
        <a href="../Budget/Budget.php?date=<?php $date = date('m'); echo $date ?>" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
        </a>
        <a href="../User/profile.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
          <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
        </a>
      </div>
    </div>
  <div class="container max-w-full">
    <!-- header -->
    <div id="header" class="justify-items-end grid-cols-3 grid md:px-10 md:pt-10 md:pb-20 items-center p-8 pt-10">
      <div id="menu_aside" class="my-auto w-full self-center">
        <button type="button" class="btn border-none hover:bg-transparent btn-circle" data-drawer-backdrop="false" data-drawer-target="drawer-left-example" data-drawer-show="drawer-left-example" data-drawer-placement="left" aria-controls="drawer-left-example">
          <img src="../img/menu.svg" alt="" class="w-11 sm:w-12 left-0" />
        </button>
        <div id="drawer-left-example" class="dark:bg-opacity-100 fixed top-0 left-0 z-50 p-4 overflow-y-auto transition-transform duration-500 -translate-x-full w-full h-full bg-gradient-to-t from-cyan-800 to-[#333757] filter backdrop-blur-[5rem]" tabindex="-1" aria-labelledby="drawer-left-label">
          <div class="w-full h-full flex justify-center">
            <button type="button" class="outline-none absolute right-14 top-10" data-drawer-hide="drawer-left-example" aria-controls="drawer-left-example">
              <img src="../img/close.svg" alt="" class="w-9" />
            </button>
            <ul class="h-max w-max my-[20rem] mx-auto md:my-[20rem] md:mx-auto gap-4">
              <li class="text-center flex">
                <img src="../img/Iconsax/Linear/home3.svg" alt="" class="my-auto w-10 pr-2" />
                <a href="#" class="dark:text-white text-white font-bold md:text-4xl text-2xl">Home</a>
              </li>
              <li class="text-center pt-5 flex">
                <img src="../img/abouti.svg" alt="" class="my-auto w-10 pr-3" />
                <a href="#" class="text-white font-bold text-2xl md:text-4xl">About</a>
              </li>
              <li class="text-center py-5 flex">
                <img src="../img/Iconsax/Bold/profile2user.svg" alt="" class="my-auto w-11 pr-3" />
                <a href="#" class="text-white font-bold text-2xl md:text-4xl">Contact</a>
              </li>
              <li class="text-center pb-5 flex">
                <img src="../img/Iconsax/Linear/setting2.svg" alt="" class="my-auto w-11 pr-3" />
                <a href="#" class="text-white font-bold text-2xl md:text-4xl">Settings</a>
              </li>
              <li class="text-center flex w-40">
                <img src="../img/profile.svg" alt="" class="w-12 my-auto pr-3" />
                <a href="#" class="text-white font-bold text-2xl md:text-4xl">Log In</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <h1 class="w-max m-auto text-white font-bold text-3xl md:text-4xl self-center">
        Fortune
      </h1>
      <!-- profile -->
      <div id="profile" class="my-auto self-center">
        <button class="btn border-none hover:bg-transparent btn-circle bg-transparent" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
          <img src="../img/profile.svg" alt="" class="mx-auto my-auto p-0 border-none bg-transparent w-10" />
        </button>
        <ul id="dropdown" aria-labelledby="dropdownDefaultButton" class="bg-gradient-to-t from-cyan-700/75 to-[#444A85] bg-opacity-50 border-white ease-in-out hidden border border-opacity-10 shadow-lg text-white m-0 gap-5 rounded-xl md:w-44 w-28 z-40">
          <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
            <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
              Dashboard
            </a>
          </li>
          <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
            <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
              About me
            </a>
          </li>
          <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
            <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
              Finance
            </a>
          </li>
          <li class="btn normal-case rounded-tl-xl rounded-tr-xl w-full h-full overflow-hidden bg-transparent border-none text-white py-2 font-normal text-xs md:text-lg hover:bg-white group">
            <a href="#" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
              Log Out
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div id="container_statistic" class="relative bg-gradient-to-t to-[#A2A6A9]/20 from-[#466094]/20 bg-opacity-10 w-[27rem] h-full md:w-max px-6 rounded-2xl mx-auto border-white border-opacity-30 border shadow-lg">

      <!-- Paginator -->
      <form action="Paginator.php?date=<?php echo $currentMonth ?>&doc=AccountAnalyst" method="post">
        <div id="navbar" class="flex items-center justify-center mx-auto h-max my-5">
          <button name="Prev">
            <img src="../img/previous.svg" alt="">
          </button>
          <h3 class="text-white text-xl font-semibold min-w-[15rem] text-center">
            <?php echo date('F', mktime(0, 0, 0, $currentMonth, 1)); ?>
          </h3>
          <button name="Next">
            <img src="../img/next.svg" alt="">
          </button>
        </div>
      </form>
      <!-- Paginator -->


      <div id="responsiveMode" class="md:flex md:justify-around md:gap-10 md:h-full md:w-full">
        <div id="responsiveMode1" class="md:self-center md:h-[30rem] md:flex md:flex-col md:items-center">
          <div id="switchGraphs" class="flex items-start justify-center scale-90 md:h-[6rem] my-5">


            <select name="Type" id="Type" onchange="redirectToPage()" class="bg-[#D0CFD8]/10 font-semibold p-3 text-center text-white uppercase border-white/20 rounded-lg">
              <option value="Analyst">Account Analyst</option>
              <option value="Overview">Overview</option>
              <!-- <option value="">Flow Expese</option> -->
            </select>
            <script>
              function redirectToPage() {
                var type = document.getElementById("Type").value;
                switch (type) {
                  case "Analyst":
                    window.location.href = "AccountAnalyst.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "Overview":
                    window.location.href = "Overview.php?date=<?php echo $currentMonth ?>";
                    break;

                  default:
                    break;
                }
              }
            </script>


          </div>
          <div class="flex flex-col gap-10">



            <div id="chart" class="scale-95 md:scale-125">

              <!-- Expense -->
              <div id="line_months" class="mx-auto grid place-items-center bg-gradient-to-t from-[#466094] to-[#A2A6A9] relative w-40 h-40 rounded-full shadow-xl">

                <div class="bg-[#464C70] rounded-full w-32 h-32 grid place-items-center">

                  <!-- Income -->
                  <div id="line_weeks" class="w-24 h-24 bg-gradient-to-t to-[#A2A6A9] from-[#46609400] rounded-full grid place-items-center shadow-xl">

                    <div class="bg-[#464C70] rounded-full w-[4.3rem] h-[4.3rem] grid place-items-center">

                      <div class="bg-white w-14 h-14 rounded-full grid place-items-center">
                        <img src="../img/iconLogo.svg" alt="" class="w-10" />
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>




            <div id="totalCash" class="">
              <h1 class="text-white w-max mx-auto font-semibold text-xl">
                Total Cash
              </h1>
              <div class="flex items-center w-full my-3 justify-center gap-3 text-sm md:text-base">
                <div id="income" class="flex w-max my-auto">
                  <h4 class="text-white pr-1">Rp.<?php echo $inAmmount ?></h4>
                  <img src="../img/triangleIncome.svg" alt="" class="w-4" />
                  <p class="text-white"><?php echo $perIncome ?>%</p>
                </div>
                <div id="boundary" class="w-1 h-5 bg-white"></div>
                <div id="expends" class="flex w-max my-auto">
                  <h4 class="text-white pr-1">Rp.<?php echo $exAmmount ?></h4>
                  <img src="../img/triangleExpends.svg" alt="" class="w-4" />
                  <p class="text-white"><?php echo $perExpense ?>%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="responsiveMode2">
          <div id="historyCash" class="gap-7 mx-auto w-max md:w-[25rem] md:my-14 my-5 md:h-[30rem] overflow-auto relative flex flex-col">
            <div id="bussiness_type" class="flex grid-cols-3 gap-6 items-center">
              <div id="type" class="grid-cols-2 flex gap-2">
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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
                <div id="circle_type" class="w-5 h-5 rounded-full bg-white my-auto"></div>
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

  <input type="checkbox" id="IO_modal" class="modal-toggle" />
  <div class="modal">
    <div class="modal-box w-[25rem] md:w-[50rem] bg-[#2E3462]/70  border border-white border-opacity-20 filter backdrop-blur-lg text-white">
      <h3 class="font-bold text-lg">Please choice your destination!</h3>
      <p class="py-4">There's </p>
      <label for="IO_modal" class="absolute top-5 right-5 cursor-pointer active:scale-90 active:transition">
        <img src="../img/close.svg" alt="" class="w-5">
      </label>
      <div class="modal-action w-full">
        <a href="../IO/income.html" class="btn bg-blue-600 text-white w-1/2 border-none">Income</a>
        <a href="../IO/Expends.html" class="btn bg-blue-600 text-white w-1/2 border-none">Expends</a>
      </div>
    </div>
  </div>

  <script id="for_line_months">
    let progressMonths = document.querySelector("#line_months");
    let progressValue = 0;
    let progressEndValue = <?php echo ($perExpense == 100) ? 1 : $perExpense; ?>;
    let speed = 100;

    let progress = setInterval(() => {
      progressValue++;

      progressMonths.style.background = `conic-gradient(
          #346FB0 ${progressValue * 3.6}deg,
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
    let ProgressEndValue = <?php echo ($perIncome == 100) ? 1 : $perIncome; ?>;
    let Speed = 100;

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
  <!-- Flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>