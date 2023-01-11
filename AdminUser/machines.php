<?
include('../utils/machine_query_func.php');

$allFlights = new MachineQueryFunc();

$displayM = $allFlights->getAllMachinesList();
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
        <a href='./createmachine.php'><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Machine</button></a>
    </div>
    <div class="relative overflow-x-auto width_adjust">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       Machine Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Name
                    </th>
                    
                </tr>
            </thead>
            <tbody>

            <? foreach($displayM as $key){ 
            ?>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <? echo $key['NUMUSER']??''?>
                </th>
                <td class="px-6 py-4">
                <?echo $key['MANUFACTURER'].' '.$key['MODEL'] ??'No specific'?>
                </td>
               
            </tr>
           <? } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
