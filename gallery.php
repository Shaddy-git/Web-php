<?php
$page_title = "Мыльников Никита - Лабораторная работа 1 Основы PHP"; 

// Меню

$current_page = 'gallery';
$index_link = 'index.php';
$history_link = 'history.php';
$gallery_link = 'gallery.php';

// Для таблицы

$tank_model = 'Т-90М Прорыв';
$tank_caliber = '125 мм';
$tank_range = '550 км';

$bmp_model = 'БМП-3';
$bmp_caliber = '100 мм';
$bmp_range = '600 км';

$btr_model = 'БТР-82А';
$btr_caliber = '30 мм';
$btr_range = '700 км';

$current_second = date('s');
$second_parity = $current_second % 2;

if($second_parity == 0) {
    $tank_photo = 'gallery_tank1.jpg';
    $air_photo = 'gallery_air1.jpg';
    $navy_photo = 'gallery_navy1.jpg';
    $spec_photo = 'gallery_spec1.jpg';
} else {
    $tank_photo = 'gallery_tank2.jpg';
    $air_photo = 'gallery_air2.jpg';
    $navy_photo = 'gallery_navy2.jpg';
    $spec_photo = 'gallery_spec2.jpg';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        
        .gallery-grid { 
            display: grid; 
            grid-template-columns: repeat(2, 1fr);
             gap: 25px; margin: 30px 0; 
        }

        .gallery-item { text-align: center;
            background: #f9f9f9; 
            padding: 15px; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
        }

        .gallery-item img { width: 100%; 
            height: 250px; 
            object-fit: cover; 
            border: 3px solid #1a3e1a; 
            border-radius: 5px; 
        }

        .gallery-item p { 
            margin: 10px 0 0; 
            font-weight: bold; 
        }

        .note { background: #e8f5e9; 
            padding: 10px; 
            border-left: 4px solid #1a3e1a; 
            margin: 20px 0; 
        }
    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            position: fixed;
            top: 0;
            width: 100%;
            height: 80px;
            background-color: #1a3e1a; 
            color: white;
            z-index: 1000;
        }
        nav {
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }
        ul {
            display: inline;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 5px;
        }
        nav a:hover {
            background-color: #2a5e2a;
            border-radius: 5px;
        }
        nav a.selected {
            background-color: #4caf50; 
            font-weight: bold;
            border-radius: 5px;
        }
        main {
            margin-top: 100px; 
            margin-bottom: 60px;
            padding: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 40px;
            background-color: #333333; 
            color: #cccccc; 
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4c6e4c;
            color: white;
        }
        .photo-container {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }
        .photo-item {
            flex: 1;
            text-align: center;
        }
        .photo-item img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border: 3px solid #1a3e1a;
            border-radius: 5px;
        }
        h1 {
            color: #1a3e1a;
            border-bottom: 2px solid #1a3e1a;
            padding-bottom: 10px;
        }
        h2 {
            color: #333;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul><a href="<?php echo $index_link; ?>" class="<?php if($current_page == 'index') echo 'selected'; ?>">Главная</a></ul>
            <ul><a href="<?php echo $history_link; ?>" class="<?php if($current_page == 'history') echo 'selected'; ?>">История и структура</a></ul>
            <ul><a href="<?php echo $gallery_link; ?>" class="<?php if($current_page == 'gallery') echo 'selected'; ?>">Галерея</a></ul>
        </nav>
    </header>
    <main>
        <h1>Галерея военной техники</h1>
        <h2>Бронетехника</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/<?= $tank_photo; ?>" alt="Танк">
                <p>Т-90М «Прорыв»</p>
            </div>
            <div class="gallery-item">
                <!-- Альтернативный способ вывода -->
                <?php
                if($second_parity == 0) {
                    echo '<img src="images/gallery_bmp1.jpg" alt="БМП-3">';
                } else {
                    echo '<img src="images/gallery_bmp2.jpg" alt="БМП-3">';
                }
                ?>
                <p>БМП-3</p>
            </div>
        </div>
        <h2>Авиация</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/<?= $air_photo; ?>" alt="Су-57">
                <p>Су-57</p>
            </div>
            <div class="gallery-item">
                <?php
                if($second_parity == 0) {
                    echo '<img src="images/gallery_ka521.jpg" alt="Ка-52">';
                } else {
                    echo '<img src="images/gallery_ka522.jpg" alt="Ка-52">';
                }
                ?>
                <p>Ка-52 «Аллигатор»</p>
            </div>
        </div>
        <h2>Военно-морской флот</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/<?= $navy_photo; ?>" alt="Крейсер">
                <p>Ракетный крейсер</p>
            </div>
            <div class="gallery-item">
                <?php
                if($second_parity == 0) {
                    echo '<img src="images/gallery_sub1.jpg" alt="Подлодка">';
                } else {
                    echo '<img src="images/gallery_sub2.jpg" alt="Подлодка">';
                }
                ?>
                <p>Атомная подводная лодка</p>
            </div>
        </div>
        <h2>Специальная техника</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/<?= $spec_photo; ?>" alt="Спецтехника">
                <p>Инженерная машина</p>
            </div>
            <div class="gallery-item">
                <?php
                if($second_parity == 0) {
                    echo '<img src="images/gallery_rszo1.jpg" alt="РСЗО">';
                } else {
                    echo '<img src="images/gallery_rszo2.jpg" alt="РСЗО">';
                }
                ?>
                <p>РСЗО «Торнадо»</p>
            </div>
        </div>
        <h2>Сравнение характеристик (таблица)</h2>
        <table>
            <thead>
                <tr><th>Образец</th><th>Тип</th><th>Год принятия</th></tr>
            </thead>
            <tbody>
                <!-- Первая строка целиком из PHP -->
                <?php
                echo '<tr>';
                echo '<td>Т-90М</td>';
                echo '<td>Основной танк</td>';
                echo '<td>2020</td>';
                echo '</tr>';
                ?>
                <!-- Вторая строка (только данные) -->
                <tr>
                    <td><?php echo 'Су-57'; ?></td>
                    <td><?php echo 'Истребитель 5-го поколения'; ?></td>
                    <td><?php echo '2020'; ?></td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <?php 
        date_default_timezone_set('Europe/Moscow');
        $current_date = date('d.m.Y');
        $current_time = date('H:i:s');
        
        echo 'Сформировано ' . $current_date . ' в ' . $current_time; 
        ?>
    </footer>
</body>
</html>