<?php
$page_title = "Мыльников Никита - Лабораторная работа 1 Основы PHP"; 

// Меню

$current_page = 'index';
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
    $tank_photo = 'tank1.jpg';
    $bmp_photo = 'bmp1.jpg';
    $btr_photo = 'btr1.jpg';
} else {
    $tank_photo = 'tank2.jpg';
    $bmp_photo = 'bmp2.jpg';
    $btr_photo = 'btr2.jpg';
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
        <h1>Современная техника Российской армии</h1>
        <h2>Сухопутные войска: бронетехника</h2>
        <p>Сухопутные войска Российской Федерации являются основой боевой мощи армии. 
        На вооружении состоят современные образцы бронетанковой техники, включая танки 
        Т-90М «Прорыв», Т-72Б3, Т-80БВМ. Также широко представлены боевые машины пехоты 
        (БМП-3, БМП-2М с боевым модулем «Бережок») и бронетранспортеры (БТР-82А, БТР-МДМ).</p>

        <p>Танковые войска предназначены для ведения боевых действий самостоятельно и 
        совместно с другими родами войск. Они способны совершать марши на большие 
        расстояния, прорывать оборону противника, уничтожать его живую силу и технику. 
        Современные российские танки оснащены динамической защитой, комплексами активной 
        защиты и современными системами управления огнем.</p>

        <p>Боевые машины пехоты обеспечивают транспортировку личного состава к переднему 
        краю и огневую поддержку в бою. БМП-3, например, вооружена 100-мм орудием-пусковой 
        установкой, 30-мм автоматической пушкой и пулеметами, что позволяет ей бороться 
        с различными целями – от пехоты до легкобронированной техники и вертолетов.</p>

        <h3>Сравнительные характеристики</h3>
        <table>
            <thead>
                <tr>
                    <th>Модель</th>
                    <th>Калибр основного орудия</th>
                    <th>Запас хода</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                echo '<tr>';
                echo '<td>' . $tank_model . '</td>';
                echo '<td>' . $tank_caliber . '</td>';
                echo '<td>' . $tank_range . '</td>';
                echo '</tr>';
                ?>
                <tr>
                    <td><?php echo $bmp_model ?></td>
                    <td><?php echo $bmp_caliber ?></td>
                    <td><?php echo $bmp_range ?></td>
                </tr>
                <tr>
                    <td><?php echo $btr_model ?></td>
                    <td><?php echo $btr_caliber ?></td>
                    <td><?php echo $btr_range ?></td>
                </tr>
            </tbody>
        </table>
        <div class="photo-container">
            <div class="photo-item">
                <h4>Т-90М Прорыв</h4>
                <img src="images/<?= $tank_photo ?>" alt="Т-90М Прорыв" width="400">
                <p><small>Секунда: <?= $current_second; ?> (<?= ($second_parity == 0) ? 'четная' : 'нечетная'; ?>)</small></p>
            </div>
            <div class="photo-item">
                <h4>БМП-3</h4>
                <img src="images/<?= $bmp_photo ?>" alt="БМП-3" width="400">
                <p><small>Секунда: <?= $current_second; ?> (<?= ($second_parity == 0) ? 'четная' : 'нечетная'; ?>)</small></p>
            </div>
            <div class="photo-item">
                <h4>БТР-82А</h4>
                <img src="images/<?= $btr_photo ?>" alt="БТР-82А" width="400">
                <p><small>Секунда: <?= $current_second; ?> (<?= ($second_parity == 0) ? 'четная' : 'нечетная'; ?>)</small></p>
            </div>
        </div>

        <h2>Воздушно-космические силы</h2>
        <p>Воздушно-космические силы РФ включают в себя военно-воздушные силы, войска 
        противовоздушной и противоракетной обороны, космические войска. На вооружении 
        состоят такие самолеты как Су-57 (истребитель пятого поколения), Су-35С, 
        Су-34, МиГ-31К с гиперзвуковыми ракетами «Кинжал», а также вертолеты Ка-52 
        «Аллигатор», Ми-28Н «Ночной охотник».</p>
        
        <p>Су-57 — первый российский истребитель пятого поколения, предназначенный 
        для уничтожения всех видов воздушных целей, поражения наземных и надводных 
        объектов. Самолет обладает сверхзвуковой крейсерской скоростью, малой 
        радиолокационной заметностью, современным комплексом авионики.</p>
        
        <p>Вертолеты Ка-52 «Аллигатор» предназначены для уничтожения танков, 
        бронированной и небронированной техники, живой силы и вертолетов противника. 
        Они способны работать в любое время суток и в сложных погодных условиях.</p>

        <h3>Характеристики авиационной техники</h3>
        <table>
            <thead>
                <tr>
                    <th>Модель</th>
                    <th>Тип</th>
                    <th>Макс. скорость</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $aircraft1_model = 'Су-57';
                $aircraft1_type = 'Истребитель 5-го поколения'; 
                $aircraft1_speed = '2600 км/ч';
                
                echo '<tr>';
                echo '<td>' . $aircraft1_model . '</td>';
                echo '<td>' . $aircraft1_type . '</td>';
                echo '<td>' . $aircraft1_speed . '</td>';
                echo '</tr>';
                ?>
                
                <tr>
                    <td><?php echo 'Ка-52 "Аллигатор"'; ?></td>
                    <td><?php echo 'Разведывательно-ударный вертолет"'; ?></td>
                    <td><?php echo '300 км/ч"'; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="photo-container">
            <div class="photo-item">
                <h4>Су-57</h4>
                <?php 
                if($second_parity == 0) {
                    echo '<img src="images/su57_1.jpg" alt="Су-57" width="400">';
                } else {
                    echo '<img src="images/su57_2.jpg" alt="Су-57" width="400">';
                } ?>
            </div>
            <div class="photo-item">
                <h4>Ка-52 "Аллигатор"</h4>
                <?php 
                if($second_parity == 0) {
                    echo '<img src="images/ka52_1.jpg" alt="Ка-52" width="400">';
                } else {
                    echo '<img src="images/ka52_2.jpg" alt="Ка-52" width="400">';
                } ?>
            </div>
        </div>
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