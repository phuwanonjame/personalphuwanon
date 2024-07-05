
<?php
include 'connect.php';
include 'user.php';


$userObj = new User($conn);
$user_id = 1; 
$userData = $userObj->getUserById($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ae5f01d289.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="w-screen h-screen bg-sky-900">
        <div class="h-full flex justify-center items-center ">
            <div class="w-[793.92px] h-[900.24px] bg-white ">
                <div class="flex h-full ">
                    <div class="w-1/3 bg-slate-900">
                        <div class="flex flex-col mt-[67px] justify-center items-center text-white">
                            <div class="bg-blue-700 flex justify-center w-full">
                                <img class="rounded-t-full shadow-md" width="143" src="./image/S__13615107.jpg" alt="" />
                            </div>
                            <div class="p-1 flex flex-col justify-center items-center">
                                <div class="flex flex-col mt-5 justify-center items-center">
                                    <br />
                                    <p class="text-xl p-2 border-blue-700 border-2 rounded-md text-white">ช่องทางติดต่อ</p>
                                    <div class="mt-5 w-4/5">
                                        <p class="text-xs"><i class="fa-solid fa-phone text-blue-600 p-1"></i> <?php echo $userData['phone']; ?></p>
                                        <p class="text-xs"><i class="fa-solid fa-envelope text-blue-600 p-1"></i> <?php echo $userData['email']; ?></p>
                                        <p class="text-xs "><i class="fa-solid fa-location-dot text-blue-600 p-1 "></i> <?php echo $userData['residence']; ?></p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="w-2/3">
                        <div class="">
                            <div class="flex flex-col items-center mt-5 justify-center">
                                <div class="mt-12 w-full">
                                    <div class="bg-blue-700 p-2 h-fit flex flex-col justify-center items-center text-white">
                                        <h1 class="text-[56px]"><?php echo $userData['first_name']; ?></h1>
                                        <h1 class="text-[56px] ml-36"><?php echo $userData['last_name']; ?></h1>
                                    </div>
                                </div>
                                <div class="w-4/5 mt-5">
                                    <div>
                                        <h1 class="text-2xl text-center bg-blue-600 rounded-md text-white shadow-md">ประวัติส่วนตัว</h1>
                                        <div class=" mt-2">
                                            <p>ชื่อ :  <?php echo $userData['first_name']; ?> <?php echo $userData['last_name']; ?></p>
                                            <p>ชื่อเล่น : <?php echo $userData['nickname']; ?></p>
                                            <p>เกิด :  <?php echo $userData['date_of_birth']; ?></p>
                                            <div class="flex gap-5">
                                                <p>สัญชาติ : <?php echo $userData['nationality']; ?></p>
                                                <p>เชื้อชาติ : <?php echo $userData['ethnicity']; ?></p>
                                            </div>
                                            <div class="flex gap-5">
                                                <p>ศาสนา: <?php echo $userData['religion']; ?></p>
                                                <p>สถานภาพ : <?php echo $userData['marital_status']; ?></p>
                                            </div>
                                            <p>ภูมิลำเนา : <?php echo $userData['residence']; ?></p>
                                            <p>ที่อยู่ปัจจุบัน : <?php echo $userData['current_address']; ?></p>
                                            <p>โทร : <?php echo $userData['phone']; ?></p>
                                            <p>Email : <?php echo $userData['email']; ?></p>
                                            <p>ความสามารถพิเศษ : <?php echo $userData['special_skills']; ?></p>
                                            <p>งานอดิเรก : <?php echo $userData['hobbies']; ?></p>
                                            <div class="mt-5">
                                                <h1 class="text-2xl text-center bg-blue-600 rounded-md text-white shadow-md">ข้อมูลบิดา-มารดา</h1>
                                                <div class="mt-5">
                                                <p>บิดาชื่อ : <?php echo $userData['father_name']; ?></p>
                                                <p>เบอร์ติดต่อ : <?php echo $userData['father_phone']; ?></p>

                                                <p>ประกอบอาชีพ : <?php echo $userData['father_occupation']; ?></p>
                                      
                                         
                                                <p>มารดาชื่อ : <?php echo $userData['mother_name']; ?></p>
                                                <p>เบอร์ติดต่อ : <?php echo $userData['mother_phone']; ?></p>
                                                <p>ประกอบอาชีพ : <?php echo $userData['mother_occupation']; ?></p>
                                                <p>สถานภาพสมรส : <?php echo $userData['marital_status_parent']; ?></p>
                                    
                                                </div>
                                                
                                            </div>
                                            
                                                
                                           
                                        </div>
                                    </div>
                                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
