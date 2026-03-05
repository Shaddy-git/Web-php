<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 3 Мыльников Никита 241-351</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <img class="logo" src="/images/polytech_logo_main_RGB_ru.png" alt="Логотип" width="150">
    </header>
    
    <main>
        <div class="menu-container calculator">
            <?php
            $store = isset($_GET['store']) ? $_GET['store'] : '';
            $counter = isset($_GET['counter']) ? (int)$_GET['counter'] : 0;

            if (isset($_GET['key'])) {
                $counter++;
                
                if ($_GET['key'] === 'reset') {
                    $store = '';
                } else {
                    $store .= $_GET['key'];
                }
            }
            ?>
            
            <h2>Цифры</h2>
            
            <div class="result"><?php echo $store; ?></div>

            <div class="buttons">
                <?php for ($i = 1; $i <= 9; $i++): ?>
                    <a href="?key=<?php echo $i; ?>&store=<?php echo urlencode($store); ?>&counter=<?php echo $counter; ?>" class="btn"><?php echo $i; ?></a>
                <?php endfor; ?>
                <a href="?key=0&store=<?php echo urlencode($store); ?>&counter=<?php echo $counter; ?>" class="btn">0</a>
            </div>

            <div class="buttons">
                <a href="?key=reset&store=<?php echo urlencode($store); ?>&counter=<?php echo $counter; ?>" class="btn btn-reset">СБРОС</a>
            </div>

            <div class="counter">
                Всего нажатий: <?php echo $counter; ?>
            </div>
        </div>
    </main>
    
    <footer>
        <p>Выполнил: Мыльников Никита</p>
    </footer>
</body>
</html>