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
    <? include(dirname(__DIR__).'/components/navbar_admin.php'); ?>

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
                <td class="px-6 py-4">
                    <a href='#' class='see_more'>See more</a>
                </td>
            </tr>
           <? } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
