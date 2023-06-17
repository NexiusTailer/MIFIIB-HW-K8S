<?php
    print("<h3>Таблица пользователей данного продукта</h3>");

    $db_name = getenv('DB_URL');
    $user_name = getenv('USER_NAME');
    $user_pwd = getenv('USER_PWD');

    $link = mysqli_connect($db_name, $user_name, $user_pwd, "users");

    if (mysqli_connect_errno()) {
        printf("Ошибка подключения к бд: %s", mysqli_connect_error());
        exit();
    }

    $result = mysqli_query($link, "SELECT * FROM `person`");

    print("<table>");
    print("<tr><th>ID</th><th>Name</th><th>Surname</th></tr>");

    while ($row = mysqli_fetch_array($result)) {
        printf("<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['surname'] . "</td></tr>");
    }

    print("</table>");

    phpinfo();
?>
