<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 2 Мыльников Никита</title>
    <link rel="stylesheet" href="/styles.css">
</head>

<body>
    <header>
        <img class="logo" src="/images/polytech_logo_main_RGB_ru.png" alt="Логотип" width="150">
    </header>
    <main>
        <div class="menu-container">
            <h2>Результаты вычислений:</h2>
            <?php
            $x_start = 5;
            $encounting = 50;
            $step = 2;
            $min_value = -100;
            $max_value = 1000;
            $type = "A";

            $sum = 0;
            $count = 0;
            $values = array();
            $max_f = -INF;
            $min_f = INF;

            switch ($type) {
                case 'B':
                    echo '<ul class="result-ul">';
                    break;
                case 'C':
                    echo '<ol class="result-ol">';
                    break;
                case 'D':
                    echo '<table class="result-table">';
                    echo '<tr><th>№</th><th>Аргумент (x)</th><th>Значение f(x)</th></tr>';
                    break;
                case 'E':
                    echo '<div class="result-flex>"';
                    break;
                default:
                    break;
            }

            echo '<p class="tittle-cycle">1. Цикл FOR:</p>';

            $x = $x_start;
            for ($i = 0; $i < $encounting; $i++, $x += $step) {
                if ($x <= 10) {
                    $f = $x * $x * 0.33 + 4;
                } elseif ($x < 20) {
                    $f = 18 * $x - 3;
                } else {
                    $f = 1 / ($x * 0.1 - 2) + 3;
                }

                $f_display = $f;

                if ($f_display >= $max_value || $f_display <= $min_value) {
                    if ($i > 0) return $f_display = 'error';
                }

                $values[] = $f_display;
                $sum += $f_display;
                $count++;
                if ($f_display > $max_f) $max_f = $f_display;
                if ($f_display < $min_f) $min_f = $f_display;

                switch ($type) {
                    case 'A':
                        echo 'f(' . round($x, 3) . ') = ' . $f_display . '<br>';
                        break;
                    case 'B':
                    case 'C':
                        echo '<li>[FOR] f(' . round($x, 3) . ') = ' . $f_display . '</li>';
                        break;
                    case 'D':
                        echo '<tr>';
                        echo '<td>' . ($i + 1) . '</td>';
                        echo '<td>' . round($x, 3) . '</td>';
                        echo '<td>' . $f_display . '</td>';
                        echo '</tr>';
                        break;
                    case 'E':
                        echo '<div class="result-block">[FOR] f(' . round($x, 3) . ') = ' . $f_display . '</div>';
                        break;
                }
            }

           /* echo '<p class="tittle-cycle">2. Цикл WHILE:</p>';

            $x = $x_start;
            $i = 0;
            while ($i < $encounting) {

                if ($x <= 10) {
                    $f = $x * $x * 0.33 + 4;
                } elseif ($x < 20) {
                    $f = 18 * $x - 3;
                } else {
                    $f = 1 / ($x * 0.1 - 2) + 3;
                }

                $f_display = $f;

                if ($f_display >= $max_value || $f_display <= $min_value) {
                    if ($i > 0) return $f_display = 'error';
                }

                $values[] = $f_display;
                $sum += $f_display;
                $count++;
                if ($f_display > $max_f) $max_f = $f_display;
                if ($f_display < $min_f) $min_f = $f_display;

                switch ($type) {
                    case 'A':
                        echo 'f(' . round($x, 3) . ') = ' . $f_display . '<br>';
                        break;
                    case 'B':
                    case 'C':
                        echo '<li>[FOR] f(' . round($x, 3) . ') = ' . $f_display . '</li>';
                        break;
                    case 'D':
                        echo '<tr>';
                        echo '<td>' . ($i + 1) . '</td>';
                        echo '<td>' . round($x, 3) . '</td>';
                        echo '<td>' . $f_display . '</td>';
                        echo '</tr>';
                        break;
                    case 'E':
                        echo '<div class="result-block">[FOR] f(' . round($x, 3) . ') = ' . $f_display . '</div>';
                        break;
                }
                $i++;
                $x += $step;
            } */

           /* echo '<p class="tittle-cycle">3. Цикл DO WHILE:</p>';

            $x = $x_start;
            $i = 0;
            do {
                if ($x <= 10) {
                    $f = $x * $x * 0.33 + 4;
                } elseif ($x < 20) {
                    $f = 18 * $x - 3;
                } else {
                    $f = 1 / ($x * 0.1 - 2) + 3;
                }

                $f_display = $f;

                if ($f_display >= $max_value || $f_display <= $min_value) {
                    if ($i > 0) return $f_display = 'error';
                }

                $values[] = $f_display;
                $sum += $f_display;
                $count++;
                if ($f_display > $max_f) $max_f = $f_display;
                if ($f_display < $min_f) $min_f = $f_display;

                switch ($type) {
                    case 'A':
                        echo 'f(' . round($x, 3) . ') = ' . $f_display . '<br>';
                        break;
                    case 'B':
                    case 'C':
                        echo '<li>[FOR] f(' . round($x, 3) . ') = ' . $f_display . '</li>';
                        break;
                    case 'D':
                        echo '<tr>';
                        echo '<td>' . ($i + 1) . '</td>';
                        echo '<td>' . round($x, 3) . '</td>';
                        echo '<td>' . $f_display . '</td>';
                        echo '</tr>';
                        break;
                    case 'E':
                        echo '<div class="result-block">[FOR] f(' . round($x, 3) . ') = ' . $f_display . '</div>';
                        break;
                }
                $i++;
                $x += $step;
            } while ($i < $encounting);

            switch ($type) {
                case 'B':
                    echo '</ul>';
                    break;
                case 'C':
                    echo '</ol>';
                    break;
                case 'D':
                    echo '</table>';
                    break;
                case 'E':
                    echo '</div>';
                    break;
                default:
                    break;
            } */

            echo '</div>';

            if ($count > 0) {
                $average = $sum / $count;
                $average_rounded = round($average, 3);

                echo '<div class="stats">';
                echo '<h3>Статистика (по всем циклам):</h3>';
                echo '<p>Максимальное значение: <span>' . $max_f . '</span></p>';
                echo '<p>Минимальное значение: <span>' . $min_f . '</span></p>';
                echo '<p>Сумма значений: <span>' . round($sum, 3) . '</span></p>';
                echo '<p>Среднее арифметическое: <span>' . $average_rounded . '</span></p>';
                echo '<p>Всего вычислено значений: <span>' . $count . '</span></p>';
                echo '</div>';
            } 
            ?>
        </div>

    </main>
    <footer>
        <?php echo '<p>Тип верстки: <span id = "layout-type">' . $type . '</span></p>'; ?>
        <p>Выполнил: Мыльников Никита</p>
    </footer>
</body>

</html>