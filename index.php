<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>

      .credit-card {
        max-width: 420px;
        margin-top: 3rem;
      }

      @media only screen and (max-width: 420px)  {
        .credit-card .front {
          font-size: 100%;
          padding: 0 2rem;
          bottom: 2rem !important;
        }
      }
    </style>
  </head>
 <body class="bg-blue-50">
    <div class="visit">
          </div>
    <div class="m-4">
      <div class="credit-card w-full sm:w-auto shadow-lg mx-auto rounded-xl bg-white">
        <header class="flex flex-col justify-center items-center">
          <div
            class="relative"
            id='testid'
          >
          <div id ="qr"></div>
            <?php
              if(isset($_SESSION['QR_IMAGE'])){?>
                <div>
                  <div>
                    <h3>Фио созданного:</h3>
                      <p><?=$_SESSION['name']?></p>
                      <?=$_SESSION['QR_IMAGE']?>
                  <?php session_destroy(); ?>
            <?php  }else{
                }
            ?>
            </div>
        </header>
      <form method="post" class="" action="">
        <main class="mt-4 p-4">
          <h1 class="text-xl font-semibold text-gray-700 text-center">Создать визитку с qr-кодом</h1>
            <div class="my-3" style="display: none;">
                <select type="text" class="data_type block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none" name="data_type" id="data_type">
                <option value="CONTACT" selected>CONTACT</option>
              </select>
            </div>
            <!------ Имя ----->
            <div class="hidden my-3" id="name" style="display: block;">
              <label class="pl-1 uppercase font-bold text-xs">Введите ваше ФИО</label>
              <input type="text" class="name block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none" placeholder="Иванов Иван Иванович" name="name" value = "<?php if (isset($_SESSION['name'])){echo $_SESSION['name'];};?>">
            </div>
            <!------ Имя ----->
            <!------ Номер телефона ----->
            <div class="hidden my-3" id="phone" style="display: block;">
              <label class="pl-1 uppercase font-bold text-xs">Введите номер телефона</label>
              <input type="text" class="phone block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none" placeholder="+7 ХХХ ХХХ ХХ ХХ" name="phone" value= "<?php if (isset($_SESSION['phone'])){echo $_SESSION['phone'];};?>">
            </div>
            <!------ Номер телефона ----->
            <!------ Почта ----->
            <div class="hidden my-3" id="email" style="display: block;">
              <label class="pl-1 uppercase font-bold text-xs">Введите вашу почту</label>
              <input type="email" class="email block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none" placeholder="example@sletat.ru" name="email" value= "<?php if (isset($_SESSION['email'])){echo $_SESSION['email'];};?>">
            </div>
            <!------ Почта ----->
            <!------ Должность ----->
            <div class="hidden my-3" id="note" style="display: block;">
              <label class="pl-1 uppercase font-bold text-xs">Примечание</label>
              <input type="text" class="note block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none" placeholder="Инженер технической поддержки" name="note" value= "<?php if (isset($_SESSION['position'])){echo $_SESSION['position'];};?>">
            </div>
            <!------ Должность ----->
        </main>
        <div class="mt-6 p-4">
          <button
              type="submit"
              class="button px-4 py-3 bg-blue-500 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex hover:bg-blue-600"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
            </svg>

              <span class="ml-2">Создать визитку</span>
          </button>
            <button
                type="submit"
                class="hidden loader px-4 py-3 bg-blue-500 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex hover:bg-blue-600"
            >
              <span class="ml-2">Создаём визитку</span>
              <img src="assets/gif/loader.gif" class="ml-4 h-8 w-10" alt="loader"/></span>
          </button>
        </div>
    </form>
      </div>
    </div>
    <?php include_once 'includes/ajax_queries/post_form_data.php'; ?>
  </body>
</html>
