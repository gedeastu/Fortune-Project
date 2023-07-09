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
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />

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
  <link rel="stylesheet" href="History.css">

  <!-- title -->
  <title>Fortune - More History</title>
</head>

<body class="">
  <!-- Nav Bar -->
  <div id="nav_float" class="z-10 fixed w-full bottom-5">
    <div class="bg-[#36669a] bg-opacity-30 border border-white border-opacity-20 filter backdrop-blur-lg w-[26rem] h-16 mx-auto flex justify-evenly rounded-3xl shadow-md" id="popUp_chat">
      <a href="../Index.php" class="flex items-center w-max h-full bg-[#3F49A6]/20 shadow-md border border-white/20 p-[0.8rem] rounded-lg">
        <img src="../img/home.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="../Stat/AccountAnalyst.php?date=<?php $date = date('m'); echo $date ?>" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/Vector.svg" alt="" class="w-6 my-auto" />
      </a>
      <label for="IO_modal" class="flex items-center active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/add.svg" alt="" class="w-max" />
      </label>
      <a href="../Budget/Budget.php?date=<?php $date = date('m'); echo $date ?>" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/dollar.svg" alt="" class="w-6 my-auto" />
      </a>
      <a href="../User/profile.php" class="flex active:scale-90 active:transition focus:bg-[#3F49A6]/20 focus:w-max focus:h-full focus:rounded-lg focus:shadow-md focus:border focus:border-white/20 focus:p-[0.8rem]">
        <img src="../img/profile.svg" alt="" class="w-6 my-auto" />
      </a>
    </div>
  </div>
  <!-- Nav Bar -->
  <div class="container max-w-full bg-gradient-to-t to-[#2E3462] from-[#292E53]/100">
    <div id="header" class="w-full flex md:px-10 md:pt-10 md:pb-20 items-center p-8 pt-10">
      <div id="menu_aside" class="my-auto">
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

                <a href="#" class="text-white font-bold text-2xl md:text-4xl"><?= $_SESSION['Username'] ?></a>

              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="header" class="w-full md:h-full">
        <div id="title_income" class="flex items-center justify-center text-2xl text-white font-bold mx-auto w-full px-8">
          <h1 class="text-3xl my-auto">History</h1>
        </div>
      </div>
      <!-- profile -->
      <div id="profile" class="my-auto">
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
            <a href="Conf/LogOut.php" class="group-hover:transition group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-t group-hover:from-cyan-700/75 group-hover:to-[#444A85]">
              Log Out
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div id="container_income" class="max-w-[26em] md:my-auto flex flex-col items-center md:max-w-max md:scale-110 border-opacity-10 border-white border-2 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 bg-opacity-10 rounded-2xl mx-auto sm:max-w-lg shadow-lg my-14 px-7">
      <div id="main" class="h-[40rem] w-max flex flex-col items-center">

        <!-- Paginator -->
        <form action="paginator.php?date=<?php echo $currentMonth ?>&doc=History" method="post">
          <div id="months" class="flex mt-5 justify-between scale-110 min-w-[15rem]">
            <button name="Prev">
              <img src="../img/previous.svg" alt="">
            </button>
            <h2 class="font-semibold text-white text-xl"><?php echo date('F', mktime(0, 0, 0, $currentMonth, 1)); ?></h2>
            <button name="Next">
              <img src="../img/next.svg" alt="">
            </button>
          </div>
        </form>
        <!-- Paginator END -->

        <div id="dropdowns" ` class="flex justify-center scale-[0.8] md:w-[30rem] md:scale-100 p-0 items-center mt-10 md:mx-0 w-max">
          <select name="Type" id="Type" class="w-[12rem] text-center h-[2rem] text-xs font-semibold uppercase rounded-tr-none rounded-br-none rounded-tl-lg rounded-bl-lg flex items-center bg-[#979789]/75 hover:bg-[#BDBDAC] hover:scale-100 hover:border hover:border-white/20 border border-white/20 focus:outline-none dark:text-white" onchange="redirectToPage()">
            <option value="Type">Type</option>
            <option value="Income">Income</option>
            <option value="Expends">Expends</option>
          </select>

          <select name="ShortBy" id="ShortBy" class="w-[12rem] text-center h-[2rem] text-xs font-semibold uppercase rounded-tr-lg rounded-br-lg rounded-tl-none rounded-bl-none items-center bg-[#979789]/75 hover:bg-[#BDBDAC] hover:scale-100 hover:border hover:border-white/20 border border-white/20 focus:outline-none dark:text-white" onchange="redirectToPage()">
            <option value="HIGHEST">HIGHEST</option>
            <option value="All">All</option>
            <option value="LOWEST">LOWEST</option>
          </select>
        </div>
        <script>
          function redirectToPage() {
            var type = document.getElementById("Type").value;
            var shortBy = document.getElementById("ShortBy").value;

            switch (type) {
              case "Type":
                switch (shortBy) {
                  case "All":
                    window.location.href = "History.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "HIGHEST":
                    window.location.href = "History2.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "LOWEST":
                    window.location.href = "History3.php?date=<?php echo $currentMonth ?>";
                    break;
                  default:
                    // Kombinasi tidak valid
                    break;
                }
                break;
              case "Income":
                switch (shortBy) {
                  case "All":
                    window.location.href = "History4.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "HIGHEST":
                    window.location.href = "History5.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "LOWEST":
                    window.location.href = "History6.php?date=<?php echo $currentMonth ?>";
                    break;
                  default:
                    // Kombinasi tidak valid
                    break;
                }
                break;
              case "Expends":
                switch (shortBy) {
                  case "All":
                    window.location.href = "History7.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "HIGHEST":
                    window.location.href = "History8.php?date=<?php echo $currentMonth ?>";
                    break;
                  case "LOWEST":
                    window.location.href = "History9.php?date=<?php echo $currentMonth ?>";
                    break;
                  default:
                    // Kombinasi tidak valid
                    break;
                }
                break;
              default:
                // Kombinasi tidak valid
                break;
            }
          }
        </script>

        <div id="transaction" class="mb-10 md:w-max h-[28em]">
          <div id="content_transaction" class="h-full w-[22rem] md:w-[25rem] overflow-auto relative my-5 rounded-xl shadow-inner">
            <!-- <div class="fixed z-30 w-[27rem] overflow-hidden h-14 bg-gradient-to-t from-[#2E3462]/0 to-[#2E3462] rounded-tl-xl rounded-tr-xl"></div> -->




            <?php
            // Query untuk mengambil data dari tabel History berdasarkan ID User dan filter bulan dan tahun
            // $result = mysqli_query($conn, "SELECT * FROM history WHERE Id_Wallet IN (SELECT Id_Wallet FROM Wallet WHERE Email = (SELECT Email FROM User WHERE Id = '{$_SESSION['id']}')) AND MONTH(Date) = $currentMonth AND YEAR(Date) = $currentYear ORDER BY Id_History DESC");
            $result = mysqli_query($conn, "SELECT * FROM history WHERE Id_Wallet IN (SELECT Id_Wallet FROM Wallet WHERE Email = (SELECT Email FROM User WHERE Id = '{$_SESSION['id']}')) AND MONTH(Date) = $currentMonth AND YEAR(Date) = $currentYear ORDER BY Amount DESC");


            // Memeriksa jumlah data yang ditemukan
            $numRows = mysqli_num_rows($result);

            // Jika data kosong, tampilkan pesan "Kosong"
            if ($numRows === 0) { ?>
              <!-- isi di sini -->
              <div class="border border-white/20 h-full w-full flex absolute rounded-xl">
                <div id="iconAdd" class="m-auto font-bold text-white/40">
                  <img src="../img/empty.svg" alt="" class="mx-auto w-12 opacity-40">
                  <p>Data is Empty</p>
                </div>
              </div>
              <?php
            } else {
              // Jika terdapat data, lakukan looping untuk menampilkan data
              while ($row = mysqli_fetch_assoc($result)) {
                // Mengakses data yang diinginkan
                $idHistory = $row['Id_History'];
                $title = $row['Title'];
                $type = $row['Type'];
                $amount = number_format($row['Amount']);
                $description = $row['Description'];
                $date = $row['Date'];
                $idBudget = $row['Id_Budget'];
                $getIdIcon = mysqli_query($conn, "SELECT c.Icon FROM Category c INNER JOIN Budget b ON c.Id_Category = b.Id_Category INNER JOIN History h ON b.Id_Budget = h.Id_Budget WHERE h.Id_History = $idHistory");
                $Icon_row = mysqli_fetch_assoc($getIdIcon);
                $icon = $Icon_row['Icon'];
              ?>



                <?php
                if ($type === 'Income') {
                  $link = '../IO/income-edit.php?id=';
                } else {
                  $link = '../IO/Expends-edit.php?id=';
                }
                ?>
                <a href="<?php echo $link, $idHistory ?>">
                  <div id="item_transaction" class="flex group mb-5 h-[4.78rem] w-full bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 hover:bg-white/10 hover:transition-all hover:duration-300 hover:ease-in-out rounded-xl" data-tippy-content="">
                    <div class="p-4 relative h-full">
                      <!-- Pasang Icon -->
                      <div class="w-[2rem] mr-4 object-fill"><?php echo $icon ?></div>
                    </div>
                    <div class="text-white my-auto flex justify-between w-full h-full">
                      <div>
                        <h1 class="font-bold text-xl mt-2"><?php echo $title ?></h1>
                        <p><?php echo $date ?></p>
                      </div>
                      <div class="mr-4 my-auto">Rp. <?php echo $amount ?></div>
                    </div>
                  </div>
                </a>


            <?php
              }
            }
            ?>







            <!-- <div id="item_transaction" class="grid-cols-2 flex mb-5 bg-gradient-to-tl to-[#B5B780]/20 from-[#8A98E2]/10 rounded-xl">
              <div class="p-4">
                <img src="../img/food.svg" alt="" class="w-14 my-auto" />
              </div>
              <div class="text-white my-auto flex justify-between w-full h-full">
                <div>
                  <h1 class="font-bold text-xl">Mealpy Food</h1>
                  <p>12 Desember 2022</p>
                </div>
                <div class="mr-4 my-auto">Rp50.000</div>
              </div>
            </div> -->




          </div>
        </div>
      </div>
    </div>
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
  <!--Tippy JS -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <!-- JS Native -->
  <script src="HistoryTippy.js"></script>
  <!-- aosJS init -->
  <script>
    AOS.init();
  </script>
  <!-- Flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
</body>

</html>