<?php
$page_title = "Мыльников Никита - Лабораторная работа 1 Основы PHP"; 

// Меню

$current_page = 'history';
$index_link = 'index.php';
$history_link = 'history.php';
$gallery_link = 'gallery.php';

// Для таблицы

$history_unit = 'Дружина князя Святослава';
$history_period = 'X век';
$history_battle= 'Оборона Киева';


$current_second = date('s');
$second_parity = $current_second % 2;

if($second_parity == 0) {
    $history_photo1 = 'druzhina1.jpg';
    $history_photo2 = 'regiment1.jpg';
    $history_photo3 = 'pehota1.jpg';

    
} else {
    $history_photo1 = 'druzhina2.jpg';
    $history_photo2 = 'regiment2.jpg';
    $history_photo3 = 'pehota2.jpg';
    
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
        <h1>История и структура Российской армии</h1>
        <h2>От дружины до регулярной армии</h2>
        <p>История русской армии насчитывает более тысячи лет. В Древней Руси основу войска составляли княжеские дружины и народное ополчение.
             В X–XI веках дружина делилась на старшую (бояре) и младшую (отроки, гриди). На вооружении были мечи, копья, луки, топоры и защитное снаряжение — кольчуги и щиты.</p>
        
        <p>Регулярная армия в России была создана при Петре I в конце XVII — начале XVIII века. Рекрутская повинность обеспечила массовый призыв, 
            а создание флота и гвардейских полков (Семёновский, Преображенский) заложило основу военной мощи империи.
             К концу правления Петра I численность армии достигала 200 тысяч человек.</p>
        
        <p>В XIX веке Россия участвовала в Отечественной войне 1812 года, Крымской войне, русско-турецких войнах. 
            Армия совершенствовалась: появились нарезное оружие, новые тактики, железные дороги для переброски войск.
             Особую славу снискали полки, участвовавшие в Бородинском сражении и обороне Севастополя.</p>

        <h3>Структура современных Вооружённых Сил РФ</h3>
        <p>Сегодня Вооружённые Силы Российской Федерации состоят из трёх видов: Сухопутные войска, Воздушно-космические силы, Военно-Морской Флот, 
            а также трёх родов войск: Ракетные войска стратегического назначения, Воздушно-десантные войска, Войска специального назначения. 
            Также в состав входят Тыл ВС, Служба расквартирования и обустройства, Железнодорожные войска и другие формирования.</p>
        
        <h3>Ключевые этапы развития армии</h3>
        <table>
            <thead>
                <tr>
                    <th>Период</th>
                    <th>Тип войск</th>
                    <th>Знаковое сражение</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                echo '<tr>';
                echo '<td>' . $history_unit . '</td>';
                echo '<td>' . $history_period . '</td>';
                echo '<td>' . $history_battle . '</td>';
                echo '</tr>';
                ?>
                <tr>
                    <td><?php echo 'Красная армия' ?></td>
                    <td><?php echo '1941-1945' ?></td>
                    <td><?php echo 'Сталинградская битва' ?></td>
                </tr>
            </tbody>
        </table>
        <div class="photo-container">
            <div class="photo-item">
                <h4>Древнерусская дружина</h4>
                <img src="images/<?= $history_photo1 ?>" alt="Дружина" width="400">
                <p><small>Секунда: <?= $current_second; ?> (<?= ($second_parity == 0) ? 'четная' : 'нечетная'; ?>)</small></p>
            </div>
            <div class="photo-item">
                <h4>Полки Петра I</h4>
                <img src="images/<?= $history_photo2 ?>" alt="Полк Петра I" width="400">
                <p><small>Секунда: <?= $current_second; ?> (<?= ($second_parity == 0) ? 'четная' : 'нечетная'; ?>)</small></p>
            </div>
            <div class="photo-item">
                <h4>Современный войска РФ</h4>
                <img src="images/<?= $history_photo3 ?>" alt="Войска РФ" width="400">
                <p><small>Секунда: <?= $current_second; ?> (<?= ($second_parity == 0) ? 'четная' : 'нечетная'; ?>)</small></p>
            </div>
        </div>

        <h2>Структура командования</h2>
        <p>Вооружённые Силы РФ управляются Министерством обороны и Генеральным штабом. 
            В мирное время численность составляет около 1 млн человек, что позволяет обеспечивать обороноспособность страны. 
            Войска дислоцируются в пяти военных округах: Западном, Центральном, Восточном, Южном и Северном флоте.</p>
        <h3>Военные округа РФ</h3>
        <table>
            <thead>
                <tr>
                    <th>Округ</th>
                    <th>Штаб</th>
                    <th>Приоритетная задача</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                echo '<tr>';
                echo '<td>' . 'Западный военный округ' . '</td>';
                echo '<td>' . 'Санкт-Петербург' . '</td>';
                echo '<td>' . 'Прикрытие западных рубежей' . '</td>';
                echo '</tr>';
                ?>
                
                <tr>
                    <td><?php echo 'Центральный военный округ'; ?></td>
                    <td><?php echo 'Екатеринбург'; ?></td>
                    <td><?php echo 'Стратегический резерв'; ?></td>
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