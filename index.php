<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<header>
    <a href="#" class="logo">Интернет-магазин одежды</a>
  </header>

  <div class="banner"></div>

  <nav>
    <ul>
      <li><a href="#" class="active">Главная</a></li>
      <li><a href="#">Верхняя одежда женская</a></li>
      <li><a href="#">Верхняя одежда мужская</a></li>
    </ul>
  </nav>
  </header>
<body>
    <div class="container">
        <h1>Каталог товаров</h1>

        <div class="catalog">
            <?php
            // Подключение к базе данных
            $conn = mysqli_connect('localhost', 'root', '', 'cat');

            // Проверка подключения
            if (!$conn) {
                die("Ошибка подключения: " . mysqli_connect_error());
            }

            // Запрос на получение товаров
            $q = "SELECT * FROM cato LIMIT 6";
            $r = mysqli_query($conn, $q);

            // Вывод товаров
            while ($n = mysqli_fetch_array($r)) {
                echo '<div class="item">';
                echo '<img src="img/' . $n['image'] . '" alt="' . $n['title'] . '">';
                echo '<div class="info">';
                echo '<h3 class="title">' . $n['title'] . '</h3>';
                echo '<p class="price">' . $n['price'] . '</p>';
                echo '<p class="description">' . $n['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }

            // Закрытие подключения с базой
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
