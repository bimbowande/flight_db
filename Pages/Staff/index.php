<html>

<?php
 include('../utils/staff_query_func.php');
$staffDump = new StaffQueryFunc();

 # get all the items
 $allstaff = $staffDump->getAllStaff();

//  print_r($allstaff);

?>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    </head>
    <body>
       
        <div class='container mx-auto'>
            <table class="border-collapse border border-slate-400 ">
                <thead>
                    <tr>
                        <th class="border border-slate-300">S/N</th>
                        <th class="border border-slate-300">SURNAME</th>
                        <th class="border border-slate-300">FIRST NAME</th>
                        <th class="border border-slate-300">HOUSE ADDRESS</th>
                        <th class="border border-slate-300">PHONE</th>
                        <th class="border border-slate-300">SALARY</th>
                    </tr>
                </thead>
                <tbody>
                    <? foreach ($allstaff as $key){
                    ?>
                    <tr class='p-4'>
                        <td class="border border-slate-300  p-4"><?echo $key['EMPNUM']??''?></td>
                        <td class="border border-slate-300  p-4"><?echo $key['SURNAME']??''?></td>
                        <td class="border border-slate-300  p-4"><?echo $key['FIRST_NAME']??''?></td>
                        <td class="border border-slate-300  p-4"><?echo $key['HOUSE_ADDRESS']??''?></td>
                        <td class="border border-slate-300  p-4"><?echo $key['PHONE']??''?></td>
                        <td class="border border-slate-300  p-4"><?echo '$'. $key['SALARY']??''?></td>
                        <td  class='border border-slate-300  p-4'><button class> Edit</button></td>
                    </tr>
                    <?}?>
                </tbody>
            </table>
        </div>
    </body>
</html>
