<html>
    <?php
        include_once('./utils/ConnectInfo.php');
        session_start();
        $testconn = new ConnectInfo();
    ?>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container mx-auto">
            <header class='p-6'>
                <h2 class="font-semibold text-4xl text-center text-slate-900 ">Flight Management Service </h2>
            </header>
             <div class='flex flex-row border justify-center text-center'>
                <div class="basis-1/4 p-6">
                     <a href='./Pages/managestaff.php'>
                        <button class="bg-indigo-500 h-10 px-5 rounded-sm text-white font-light opacity-5 hover:opacity-5 ">Manage Staff</button>
                    </a>
                </div>
                <div class="basis-1/4 p-6">
                    <a>
                        <button class="bg-indigo-500 h-10 px-5 rounded-sm text-white font-light opacity-5 hover:opacity-5">Manage Flights</button>
                    </a>
                </div>
                <div class="basis-1/4 p-6">
                    <a>
                        <button class="bg-indigo-500 h-10 px-5 rounded-sm text-white font-light opacity-5 hover:opacity-5">Manage Machines</button>
                    </a>
                </div>
               
             </div>            
        </div>
    </body>

</html>