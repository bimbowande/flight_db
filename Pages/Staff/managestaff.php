

<?
    include('../utils/staff_query_func.php');
?>

<?php

$pageQuery = new StaffQueryFunc();
$updateStaff = '';

if (isset($_POST) && isset($_POST['submitPage'])){

   $updateStaff =  $pageQuery->addToStaff($_POST['surname'],$_POST['firstname'], $_POST['email'],
    $_POST['house_add'], $_POST['phone'], $_POST['salary'],$_POST['jobrole']);
}
?>


<!DOCTYPE html>
<html>
    <head>
     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
     <link href="../styles/reset.css" rel='stylesheet'/>
    </head>
    <body>
        <div class='container mx-auto'>
            <header class='p-6'>
                <h2 class="font-semibold text-4xl text-center text-slate-900 ">Add New Staff </h2>
            </header>
            <header class='mb-0.5'>
                <p class='underline text-center p '><a href='./viewstaff.php'>View all Staff</a></p>
            </header>
            <div class='flex flex-row border justofy-center text-center'>
                <div class='basis-1/4 p-6'>
                    <form method='POST' action="<?=$_SERVER['PHP_SELF'];?>">
                        <div class='form-group'>
                            <label for="">Surname</label>
                            <input type="text" name='surname' class='form-input px-4 py-3' placeholder='surname' required>
                        </div>
                        <div class='form-group'>
                            <label for="">First Name</label>
                            <input type="text" name='firstname' class='form-input px-4 py-3 ' placeholder='firstname' required>
                        </div>
                        <div class='form-group'>
                            <label for="">Email</label>
                            <input type="text" name='email' class='form-input px-4 py-3 ' type='email' placeholder='email' required>
                        </div>
                        <div class='form-group'>
                        <label for="">Job role</label>
                            <select class='form-input px-4 py-3 '  name='jobrole' type='text'>
                                <option value='captain'>Captain</option>
                                <option value='flight engineer'>flight Engineer</option>
                                <option value='flight attendant'>Flight attendant</option>
                                <option value='navigator'>Navigator</option>
                                <option value='relief crew'>Relief Crew</option>
                                <option value='flight medic'>Flight Medic</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for="">Address</label>
                            <textarea type="text" class='form-input px-4 py-3 ' placeholder='House Address' name='house_add' required>
                            </textarea>
                        </div>
                        
                        <div class='form-group'>
                            <label for="">Phone Number</label>
                            <input type="text" class='form-input px-4 py-3' placeholder='phone' name='phone' required>
                        </div>
                        <div class='form-group'>
                            <label for="">Salary</label>
                            <input type="text" class='form-input px-4 py-3' placeholder='salary' name='salary' required>
                        </div>
                        <div class="form-group p-6">
                            <button class='bg-indigo-500 h-10 px-10  rounded-sm text-white 'type='submit' name='submitPage'>Submit</button>
                        </div>
                        <? echo $updateStaff?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>