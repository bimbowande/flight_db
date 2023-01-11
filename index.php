<html>
    <?php
        include_once('./utils/ConnectInfo.php');
        session_start();
        $testconn = new ConnectInfo();
    ?>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
        <link href='./styles/reset.css' rel='stylesheet'/>
    </head>
    <body>
        <?include_once('./components/navbar.php');?>
        <div class='flight_image'>
            <img src="./img/pexels-pascal-borener-1089306.jpg" alt="">
        </div>

        <div class='button_details'>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Book as a User</button>
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"> Admin Login</button>
        </div>
    </body>

</html>