<?
include('../utils/flight_query_func.php');

$allFlights = new FlightQueryFunc();

$displayFlight = $allFlights->getAllFlights();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
        <link href='../styles/reset.css' rel='stylesheet'/>
    <title>Document</title>
</head>
<body>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a  class="flex items-center">
    
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Airlines</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="./index.php"" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Staffs</a>
        </li>
        <li>
          <a href="./flight.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Schedule Flights</a>
        </li>
        <li>
          <a href="./booking.php"  class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Bookings list</a>
        </li>
        <li>
          <a href="./machines.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Machines</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="width_adjust">
        <a href='./createflight.php'><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Flight Schedule</button></a>
    </div>
    <div class="relative overflow-x-auto width_adjust">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Flight Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Flight Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Origin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Destination
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number of passengers
                    </th>
                    <th scope="col" class="px-6 py-3">
                        More Info
                    </th>
                </tr>
            </thead>
            <tbody>

            <? foreach($displayFlight as $key){ 
            ?>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?echo $key['FLIGHT_NUM']??''?>
                </th>
                <td class="px-6 py-4">
                <?echo $key['FLIGHT_DATE']??'No specific'?>
                </td>
                <td class="px-6 py-4">
                        <?echo $key['ORIGIN']?? ''?> 
                </td>
                <td class="px-6 py-4">
                    <?echo $key['DEST']?? ''?> 
                </td>
                <td class="px-6 py-4">
                    <?echo $key['NUMBER_OF_PASSENGERS']?? '1'?> 
                </td>
                <td>
                <a href='#' class='see_more'><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </a>
                   
                    <a href='#'>
                         <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Update </button>
                    </a>
                </td>
            </tr>
           <? } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
