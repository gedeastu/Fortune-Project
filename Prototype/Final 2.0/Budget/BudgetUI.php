<?php
include '../Conf/connect.php';
session_start();

// jika session id kosong maka di arahkan ke halaman login
if ($_SESSION['id'] == "") {
  header("location:../Gateaway/login.html");
}

$currentMonth = $_GET['date'];
// $currentMonth--;
$currentYear = date('Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- icon title -->
  <link rel="apple-touch-icon" type="image/png" href="../img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="img/iconLogo.svg" />
  <link rel="apple-touch-icon" type="image/png" href="img/iconLogo.svg" sizes="60x60" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="32x32" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="192x192" />
  <link rel="icon" type="image/png" href="../img/iconLogo.svg" sizes="16x16" />

  <!-- aosJS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  <!-- daisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.0.1/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>

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
  <link rel="stylesheet" href="Budget.css">

  <!-- title -->
  <title>Fortune - My Budget</title>
</head>

<body class="bg-gradient-to-t to-[#2E3462] from-[#292E53]/100 min-h-[100vh] max-w-full">
  <div id="nav_float" class="z-10 fixed w-full bottom-0">
    <div class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl m-10 shadow-md" id="popUp_chat">
      <a href="../Index.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/Home.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="../Stat/AccountAnalyst.php?date=<?php $date = date('m');
                                                echo $date ?>" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
      </a>
      <label for="IO_modal" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/add.svg" alt="" class="w-max" />
      </label>
      <a href="#" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
        <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="../User/profile.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
      </a>
    </div>
  </div>
  <div id="header" class="w-full grid-cols-3 flex justify-between md:px-10 md:pt-10 md:pb-24 p-8 pt-10 z-50">
    <div id="menu_aside" class="my-auto">
      <button type="button" class="btn border-none hover:bg-transparent btn-circle" data-drawer-backdrop="false" data-drawer-target="drawer-left-example" data-drawer-show="drawer-left-example" data-drawer-placement="left" aria-controls="drawer-left-example">
        <img src="../img/menu.svg" alt="" class="w-10 sm:w-12 left-0" />
      </button>
      <div id="drawer-left-example" class="dark:bg-opacity-100 fixed top-0 left-0 z-50 p-4 overflow-y-auto transition-transform duration-500 -translate-x-full w-full h-full bg-gradient-to-t from-cyan-800 to-[#333757] filter backdrop-blur-[5rem]" tabindex="-1" aria-labelledby="drawer-left-label">
        <div class="w-full h-full flex justify-center">
          <button type="button" class="outline-none absolute right-14 top-10" data-drawer-hide="drawer-left-example" aria-controls="drawer-left-example">
            <img src="../img/close.svg" alt="" class="w-9" />
          </button>
          <ul class="h-max w-max my-[20rem] mx-auto md:my-[20rem] md:mx-auto gap-4">
            <li class="text-center flex">
              <img src="../img/Iconsax/Linear/home3.svg" alt="" class="my-auto w-10 pr-2" />
              <a href="../Index.php" class="dark:text-white text-white font-bold md:text-4xl text-2xl">Home</a>
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
            <li class="text-center flex w-max">
              <img src="../img/profile.svg" alt="" class="w-12 my-auto pr-3" />

              <a href="#" class="text-white font-bold text-lg md:text-4xl"><?= $_SESSION['Username'] ?></a>

            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="title" class="w-max m-auto text-white md:flex md:items-center md:gap-2">
      <h1 class="font-bold text-3xl md:text-4xl">
        Budget
      </h1>
    </div>
    <!-- profile -->
    <div id="profile" class="my-auto">
      <button class="btn border-none hover:bg-transparent btn-circle bg-transparent" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
        <img src="../img/profile.svg" alt="" class="my-auto p-0 border-none bg-transparent w-9" />
      </button>
      <ul id="dropdown" aria-labelledby="dropdownDefaultButton" class="bg-gradient-to-t from-cyan-700/75 to-[#444A85] bg-opacity-50 border-white ease-in-out hidden border border-opacity-10 shadow-lg text-white gap-5 rounded-xl md:w-44 w-28 z-40">
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
          <a href="Conf/LogOut.php" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
            Log Out
          </a>
        </li>
      </ul>
    </div>
  </div>

  <main class="h-full px-5 flex flex-col gap-5 md:flex-row md:gap-5">
    <!-- <div id="addBudget" class="fixed bottom-0 z-50">
        <div id="w-32 bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
        </div>
      </div> -->
    <div id="containerContentBudget" class="md:max-w-[50em] mx-auto md:mr-0 h-max border-opacity-10 border-white border-2 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 bg-opacity-10 rounded-2xl">
      <div id="headerContent" class="md:w-[35rem] mx-auto text-white h-[10.3rem]">

        <!-- Paginator -->
        <form action="php/paginator.php?date=<?php echo $currentMonth ?>&doc=Budget" method="post">
          <div id="months" class="flex justify-around pb-10 pt-7 mx-auto">
            <button name="Prev">
              <img src="../img/previous.svg" alt="">
            </button>
            <h2 class="font-semibold text-white text-xl md:text-2xl"><?php echo date('F', mktime(0, 0, 0, $currentMonth, 1)); ?></h2>
            <button name="Next">
              <img src="../img/next.svg" alt="">
            </button>
          </div>
        </form>
        <!-- Paginator -->

        <div id="earn" class="text-center flex gap-7 px-5 mx-auto w-max bg-[#2F3462] border border-white/20 rounded-xl scale-90 md:scale-100">
          <div id="income" class="py-8 w-36 h-14 flex flex-col justify-center">
            <p class="uppercase font-bold">Total Income</p>
            <p class="text-center">1,500,000.00</p>
          </div>
          <div class="w-[0.1rem] h-[3.2rem] bg-white/20 my-auto"></div>
          <div id="Expends" class="py-8 w-36 h-14 flex flex-col justify-center">
            <p class="uppercase font-bold">Total Expends</p>
            <p class="text-center">2,239,000.00</p>
          </div>
        </div>
      </div>

      <div id="heroContent" class="w-[90%] mx-auto py-2 flex flex-col gap-7">
        <div id="date" class="text-white">
          <p class="">Budgeted categories : <span class="font-semibold">January</span></p>
        </div>
        <div id="trackBudget" class="h-[22rem] flex flex-col rounded-xl gap-5 overflow-auto">
          <div id="budgetItem" class="bg-white/10 rounded-xl">
            <div id="descCategory" class="flex items-center justify-center gap-5 pb-3 px-3 w-full">
              <div id="iconCategory" class="m-auto w-[4rem] md:w-[7rem]">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-full m-auto" viewBox="0 0 576 512">
                  <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
              </div>
              <div id="descWritten" class="w-full">
                <div class="flex items-center justify-between pt-3">
                  <h3 class="text-white font-bold text-xl">Gacha Zeus</h3>


                  <!-- Controller -->
                  <div class="dropdown dropdown-end">
                    <label tabindex="0" class="cursor-pointer">
                      <img src="../img/moreHorizontal.svg" alt="" class="">
                    </label>
                    <ul tabindex="0" class="dropdown-content menu p-2 mt-3 shadow bg-white rounded-box w-40 font-medium">
                      <li>
                        <label for="modalEdit" class="text-[1rem] text-[#2F3462]">✏️ Edit</label>
                      </li>
                      <li><label for="delete1" class="text-red-600 text-[1rem]">🗑️ Delete</label></li>
                    </ul>
                  </div>

                  <!-- ModalEdit -->
                  <input type="checkbox" id="modalEdit" class="modal-toggle" />
                  <div class="modal">
                    <div class="modal-box flex flex-col gap-3 bg-[#2E3462] text-white border border-white/20 text-left w-[30rem]">
                      <div id="category" class="flex items-center font-semibold text-lg gap-2">
                        <label for="" class="flex itemx-center">
                          <p class="w-24">Category</p>
                          <span class="text-right">:</span>
                        </label>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-10" viewBox="0 0 576 512">
                          <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                      </div>
                      <div id="inputBudget" class="flex flex-col justify-center w-full">
                        <form action="" class="flex font-semibold items-center text-lg gap-2">
                          <label for="" class="flex items-center">
                            <span class="w-24">Budget</span>
                            <span class="">:</span>
                          </label>
                          <input type="text" class="bg-white/10 border w-full border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </form>
                      </div>
                      <div id="datePicker" class="flex items-center gap-2">
                        <label for="iDate" class="font-semibold text-lg flex">
                          <span class="w-24">Set Date</span>
                          <span>:</span>
                        </label>
                        <input name="iDate" type="date" id="datepicker" class="bg-white/10 border w-full border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        <style>
                          /* CSS to hide the datepicker icon */
                          input[type="date"]::-webkit-calendar-picker-indicator {
                            scale: 1.3;
                            border-radius: 100px;
                            position: absolute;
                            right: 45px;
                            padding: 5px;
                          }
                        </style>
                        <script>
                          var currentDate = new Date();
                          var year = currentDate.getFullYear();
                          var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                          var day = String(currentDate.getDate()).padStart(2, '0');
                          var formattedDate = `${year}-${month}-${day}`;
                          document.getElementById('datepicker').value = formattedDate;
                        </script>
                      </div>
                      <div id="btnSave" class="">
                        <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                      </div>
                      <div class="modal-action absolute -top-4 right-5">
                        <label for="modalEdit" class="font-extrabold">X</label>
                      </div>
                    </div>
                  </div>

                  <!-- ModalDelete -->
                  <input type="checkbox" id="delete1" class="modal-toggle" />
                  <div class="modal">
                    <div class="modal-box w-[25rem] md:w-[50rem] bg-[#2E3462]/70  border border-white border-opacity-20 filter backdrop-blur-lg text-white">
                      <h3 class="font-bold text-lg">Do you sure to Delete your item history ?</h3>
                      <div class="modal-action w-full">
                        <label class="btn bg-blue-600 text-white w-1/2 border-none">Yes</label>
                        <label for="delete1" class="btn bg-blue-600 text-white w-1/2 border-none">No</label>
                      </div>
                    </div>
                  </div>

                </div>
                <div id="content" class="flex justify-between w-full my-3">
                  <div id="contentDesc" class="text-white text-md text-base">
                    <p>Limit : <span class="font-medium">Rp.300,000.00</span></p>
                    <p>Spent : <span class="font-medium">Rp.300,000.00</span></p>
                    <p>Remaining : <span class="font-medium">Rp.0,00</span></p>
                  </div>
                  <div id="dateDesc" class="w-32 text-right text-white/40">
                    <p class="">(January, 2023)</p>
                  </div>
                </div>
                <div id="barProgress" class="w-[100%] mx-auto h-[1.1rem] border border-white/30 rounded-md">
                  <div id="bar" class="w-[80%] h-full bg-blue-400 flex items-center text-sm text-white">
                    <p class="w-max mx-auto">80%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="budgetItem" class="bg-white/10 rounded-xl">
            <div id="descCategory" class="flex items-center justify-center gap-5 pb-3 px-3 w-full">
              <div id="iconCategory" class="m-auto w-[4rem] md:w-[7rem]">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-full m-auto" viewBox="0 0 576 512">
                  <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
              </div>
              <div id="descWritten" class="w-full">
                <div class="flex items-center justify-between pt-3">
                  <h3 class="text-white font-bold text-xl">Gacha Zeus</h3>
                  <div class="dropdown dropdown-end">
                    <label tabindex="0" class="cursor-pointer">
                      <img src="../img/moreHorizontal.svg" alt="" class="">
                    </label>
                    <ul tabindex="0" class="dropdown-content menu p-2 mt-3 shadow bg-white rounded-box w-40 font-medium">
                      <li>
                        <button class="border border-white rounded-md text-[#2E3462] text-[1rem]" onclick="modalEdit2.showModal()">✏️ Edit</button>
                      </li>
                      <li><label for="delete2" class="text-red-600 text-[1rem]">🗑️ Delete</label></li>
                    </ul>
                  </div>
                  <dialog id="modalEdit2" class="modal fixed text-white font-medium flex justify-center">
                    <form method="dialog" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                      <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                      <label for="modalEdit2" class="modal-action cursor-pointer absolute border-none -top-3 right-5">
                        <img src="../img/close.svg" alt="" class="">
                      </label>
                      <div class="w-full flex flex-col gap-3 text-left">
                        <div id="BudgetCategory" class="flex justify-evenly items-center">
                          <label for="category" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                            <span>:</span>
                          </label>
                          <div id="category" class="flex items-center pl-5 w-80 gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5  fill-current" viewBox="0 0 384 512">
                              <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                            </svg>
                            <p>Coupon</p>
                          </div>
                        </div>
                        <div id="inputBudget" class="flex justify-evenly items-center w-full">
                          <form id="Budget" action="" class="">
                            <label for="Budget" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                              <span>:</span>
                            </label>
                            <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                          </form>
                        </div>
                        <div id="datePicker" class="flex justify-evenly items-center w-full">
                          <label for="iDate" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                            <span>:</span>
                          </label>
                          <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                          <style>
                            /* CSS to hide the datepicker icon */
                            input[type="date"]::-webkit-calendar-picker-indicator {
                              scale: 1.3;
                              border-radius: 100px;
                              position: absolute;
                              right: 45px;
                              padding: 5px;
                            }
                          </style>
                          <script>
                            var currentDate = new Date();
                            var year = currentDate.getFullYear();
                            var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                            var day = String(currentDate.getDate()).padStart(2, '0');
                            var formattedDate = `${year}-${month}-${day}`;
                            document.getElementById('datepicker').value = formattedDate;
                          </script>
                        </div>
                        <div id="btnSave" class="">
                          <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                        </div>
                      </div>
                    </form>
                  </dialog>
                  <input type="checkbox" id="delete2" class="modal-toggle" />
                  <div class="modal">
                    <div class="modal-box w-[25rem] md:w-[50rem] bg-[#2E3462]/70  border border-white border-opacity-20 filter backdrop-blur-lg text-white">
                      <h3 class="font-bold text-lg">Do you sure to Delete your item history ?</h3>
                      <div class="modal-action w-full">
                        <label class="btn bg-blue-600 text-white w-1/2 border-none">Yes</label>
                        <label for="delete2" class="btn bg-blue-600 text-white w-1/2 border-none">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="content" class="flex justify-between w-full my-3">
                  <div id="contentDesc" class="text-white text-md text-base">
                    <p>Limit : <span class="font-medium">Rp.300,000.00</span></p>
                    <p>Spent : <span class="font-medium">Rp.300,000.00</span></p>
                    <p>Remaining : <span class="font-medium">Rp.0,00</span></p>
                  </div>
                  <div id="dateDesc" class="w-32 text-right text-white/40">
                    <p class="">(January, 2023)</p>
                  </div>
                </div>
                <div id="barProgress" class="w-[100%] mx-auto h-[1.1rem] border border-white/30 rounded-md">
                  <div id="bar" class="w-[80%] h-full bg-blue-400 flex items-center text-sm text-white">
                    <p class="w-max mx-auto">80%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="budgetItem" class="bg-white/10 rounded-xl">
                    <div id="descWritten" class="flex justify-center gap-5 py-3 px-3 w-full">
                    <div id="iconCategory" class="my-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[4rem] md:w-[5rem] fill-white m-auto" viewBox="0 0 640 512"><path d="M274.9 34.3c-28.1-28.1-73.7-28.1-101.8 0L34.3 173.1c-28.1 28.1-28.1 73.7 0 101.8L173.1 413.7c28.1 28.1 73.7 28.1 101.8 0L413.7 274.9c28.1-28.1 28.1-73.7 0-101.8L274.9 34.3zM200 224a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM96 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 376a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM352 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 120a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm96 328c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H461.7c11.6 36 3.1 77-25.4 105.5L320 413.8V448zM480 328a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                    </div>
                    <div id="descCategory" class="w-full">
                        <div id="title" class="flex justify-between">
                            <h3 class="text-white font-semibold">Gacha Zeus</h3>
                            <img src="../img/moreHorizontal.svg" alt="">
                        </div>
                        <div id="content" class="flex justify-between w-full">
                        <div id="contentDesc" class="text-white">
                            <p>Limit : <span class="font-medium">Rp.300,000.00</span></p>
                            <p>Spent : <span class="font-medium">Rp.300,000.00</span></p>
                            <p>Remaining : <span class="font-medium">Rp.0,00</span></p>
                        </div>
                        <div id="dateDesc">
                            <p>(January, 2023)</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div id="barProgress" class="w-[95%] mx-auto h-5 border border-white/30 mb-3 rounded-md">
                        <div id="bar" class="w-[50%] h-full bg-blue-400"></div>
                    </div>
                </div> -->
      </div>
    </div>

    <div id="SetBudgeted" class="md:w-[35rem] w-[25rem] md:h-[36.3rem] py-5 md:py-0 flex flex-col md:ml-0 gap-7 text-white mx-auto border-opacity-10 border-white border-2 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 bg-opacity-10 rounded-2xl">
      <div id="titleSet" class="md:w-[35rem] flex justify-center text-left my-auto">
        <p class="text-lg md:text-xl font-bold">Didn't have to set Budget yet?</p>
      </div>
      <div id="track_content" class="h-[25rem] mx-3 flex items-center my-auto flex-col gap-7 overflow-auto">
        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_1.showModal()">Set Budget</button>
            <dialog id="my_modal_1" class="modal fixed text-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>

        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_2.showModal()">Set Budget</button>
            <dialog id="my_modal_2" class="modal fixed ritext-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>

        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_3.showModal()">Set Budget</button>
            <dialog id="my_modal_3" class="modal fixed text-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>

        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_4.showModal()">Set Budget</button>
            <dialog id="my_modal_4" class="modal fixed text-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>

        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_5.showModal()">Set Budget</button>
            <dialog id="my_modal_5" class="modal fixed text-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>

        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_6.showModal()">Set Budget</button>
            <dialog id="my_modal_6" class="modal fixed text-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>

        <div id="content" class="flex w-[90%] items-center justify-between mx-auto">
          <div id="categorySet" class="flex items-center gap-2">
            <div id="icon" class="w-[3rem]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 fill-current m-auto" viewBox="0 0 384 512">
                <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
              </svg>
            </div>
            <p class="font-semibold text-xl">Coupon</p>
          </div>
          <div id="btn_set" class="w-32 h-10">
            <button class="w-full h-full border border-white rounded-md" onclick="my_modal_7.showModal()">Set Budget</button>
            <dialog id="my_modal_7" class="modal fixed text-white font-medium">
              <form method="" class="modal-box bg-[#2E3462] border border-white/20 w-[30rem] md:w-[40rem]">
                <h3 class="font-bold text-lg text-center pb-5">Set Budget</h3>
                <div id="close" class="modal-action absolute -top-3 right-5">
                  <button class="">
                    <img src="../img/close.svg" alt="" class="">
                  </button>
                </div>
                <div id="content" class="w-full flex flex-col gap-3 text-left">
                  <div id="iconCategory" class="flex justify-evenly items-center">
                    <label for="" class="font-semibold text-lg w-1/4 flex"><span class="w-full">Category</span>
                      <span>:</span>
                    </label>
                    <div id="category" class="flex items-center pl-5 w-80 gap-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 fill-current" viewBox="0 0 384 512">
                        <path d="M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z" />
                      </svg>
                      <p>Coupon</p>
                    </div>
                  </div>
                  <div id="inputBudget" class="flex justify-evenly items-center w-full">
                    <form id="Budget" action="" class="">
                      <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Budget</span>
                        <span>:</span>
                      </label>
                      <input type="text" class="rounded-md text-white w-80 bg-white/10 border border-white/20">
                    </form>
                  </div>
                  <div id="datePicker" class="flex justify-evenly items-center w-full">
                    <label for="" class="font-semibold text-lg w-1/4 flex justify-evenly"><span class="w-full">Set Date</span>
                      <span>:</span>
                    </label>
                    <input name="iDate" type="date" id="datepicker" class="w-80 bg-white/10 border border-white/20 rounded-md focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    <style>
                      /* CSS to hide the datepicker icon */
                      input[type="date"]::-webkit-calendar-picker-indicator {
                        scale: 1.3;
                        border-radius: 100px;
                        position: absolute;
                        right: 45px;
                        padding: 5px;
                      }
                    </style>
                    <script>
                      var currentDate = new Date();
                      var year = currentDate.getFullYear();
                      var month = String(currentDate.getMonth() + 1).padStart(2, '0');
                      var day = String(currentDate.getDate()).padStart(2, '0');
                      var formattedDate = `${year}-${month}-${day}`;
                      document.getElementById('datepicker').value = formattedDate;
                    </script>
                  </div>
                  <div id="btnSave" class="">
                    <button type="submit" name="submit" class="w-full border-white/10 border hover:border-none active:scale-90 transition bg-gradient-to-tr to-[#5D6186] from-[#8A98E2]/50 text-white py-2 rounded-xl uppercase font-semibold">Save</button>
                  </div>
                </div>
              </form>
            </dialog>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div id="footer" class="mx-auto pt-52 pb-5 md:flex md:justify-between md:px-20 mt-26 md:mt-0">
    <div id="footer_sosmed" class="md:order-last md:my-auto">
      <div id="logoTitle" class="flex sm:w-max h-28 mx-auto w-max md:my-auto md:mx-auto md:h-max">
        <img src="../img/logo.svg" alt="" class="sm:w-16 mr-2 w-16" />
        <h2 class="text-white font-bold w-max sm:text-3xl my-auto text-3xl">
          Fortune
        </h2>
      </div>
      <div id="social_media" class="w-max mx-auto md:my-auto md:mx-auto md:pt-5">
        <div class="flex mx-auto w-max">
          <img src="../img/Theinstragram.svg" alt="" class="w-6" />
          <img src="../img/Vector-1.svg" alt="" class="mx-3 w-6" />
          <img src="../img/Vector-2.svg" alt="" class="w-6" />
        </div>
        <span class="block text-white py-3 text-opacity-50 text-sm">©Copyright Fortune 2023</span>
      </div>
    </div>

    <div id="footer_infoUs" class="md:max-w-md md:my-auto md:order-first pl-5 mt-10 md:pl-0">
      <div id="contact" class="grid-rows-3 text-white pt-5 md:pb-0 md:pt-0">
        <p>Contact:</p>
        <p>unknown@gmail.com</p>
        <p>081XXXXXX</p>
      </div>
      <div id="address" class="grid-rows-2 text-white pt-5 pb-10 md:pb-0 md:pt-0">
        <p>Address:</p>
        <p>Telkom University,Bandung,Indonesia</p>
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
  <!-- JS Native -->
  <script src="#"></script>

  <!-- aosJS init -->
  <script>
    AOS.init();
  </script>

  <!-- Flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
</body>

</html>