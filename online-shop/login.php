<?php

$nezashlo = true;
$isAuth = false;
$showForm = true;
if (!empty($_POST)) {
    include "data/users.php";
    include "data/passwords.php";
    $keyUsers = array_search($_POST["email"], $usersArr); // $key = 2;
    if ($keyUsers !== false && $_POST['password'] == $passArr[$keyUsers]) {
        $isAuth = true;
    }
}
if ($isAuth && !empty($_POST)) {
    $showForm = false;
} elseif (!$isAuth && !empty($_POST)){
    $nezashlo = false;
}
?>

<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/form.min.css" rel="stylesheet">
    <link href="assets/css/tailwind.css" rel="stylesheet">
    <link href="assets/css/base.css" rel="stylesheet">

    <title>Рога и Сила - Главная страница</title>
    <link href="assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <?php include ("templates/header.php"); ?>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Авторизация</h1>
               <?php if (!$nezashlo ) {
                   includeTemplate("messages/error_message.php", ["message" => "Неверно указан логин или пароль",]);
                ?>
                <?php } ?>
            <?php if (!$showForm) {
                     includeTemplate("messages/success_message.php", [ "message" => "Вы успешно авторизовались",]);
             } ?>
          
            <?php if ($showForm) { ?> <form action ="/login.php" method="post">
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com" value="<?php if (!$nezashlo) {
                                $postValue = $_POST["email"] ?? "";
                                echo $postValue;
                                } ?>">
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******" value="<?php if (
                                !$nezashlo
                            ) {
                                $postValue = $_POST["password"] ?? "";
                                echo $postValue;
                            } ?>">
                        </div>
                        <div class="block">
                            <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Войти
                            </button>
                            <a href="register.html" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня нет аккаунта
                            </a>
                        </div>
                    </div>
                </div>
            </form> <?php } ?>
        </div>
    </main>
    <?php include ("templates/footer.php"); ?>
</div>

</body>
</html>