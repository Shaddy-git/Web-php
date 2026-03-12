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
            <h2>Таблицы</h2>
            <?php
            $Columns = 3; // Число столбцов
            $structures = [
                // Обычная таблица
                "Имя*Фамилия*Возраст#Иван*Иванов*25#Мария*Петрова*30",
                // Пропуск строки
                "Строка1*Значение1##Строка3*Значение3",
                // Таблица с пустыми строками
                "* *",
                // Таблица с пустыми ячейками
                "Строка 1 * Столбец 2 # Строка 2 * Столбец 2 * Столбец 3 # Строка 3 * Столбец 2 * Столбец 3 * Столбец 4",
                // Таблица с пустыми ячейками
                "Строка 1 * Столбец 2 # Строка 2 * Столбец 2 * Столбец 3 # Строка 3 * Столбец 2 * Столбец 3 * Столбец 4",
                // Пустая строка в начале
                "#ВтораяСтрока*Стобец 2*Столбец 3#ТретьяСтрока*Столбец 1*Столбец 2",
                // Таблица с пустыми ячейками
                "Строка 1 * Столбец 2 * Столбец 3 * Столбец 4 # Строка 2 * Столбец 2 * * Столбец 4 # Строка 3 * Столбец 2 * Столбец 3 * Столбец 4",
                // Таблица 8
                "Имя*Возраст*Город#Анна*25*Москва#Иван*30*СПб#Мария*28*Казань*#Анастасия*#Глеб**#Владимир",
                //Таблица без строкы
                ""
            ];
            function getTR($data, $cols)
            {
                $cells = explode('*', $data);

                if (count($cells) > $cols) {
                    $cells = array_slice($cells, 0, $cols);
                }

                if (count($cells) === 1 && $cells[0] === '') {
                    $cells = [];
                }

                // Начинаем формировать строку таблицы
                $rowHtml = '<tr>';

                // Выводим столько ячеек, сколько есть в данных
                foreach ($cells as $cell) {
                    $rowHtml .= '<td>' . htmlspecialchars($cell) . '</td>';
                }

                // Добавляем пустые ячейки, если нужно дополнить до требуемого числа колонок
                $existingCells = count($cells);
                for ($i = $existingCells; $i < $cols; $i++) {
                    $rowHtml .= '<td>&nbsp;</td>'; 
                }

                $rowHtml .= '</tr>';
                return $rowHtml;
            }
            function outTable($structure, $cols, $tableNumber)
            {
                if ($cols <= 0) {
                    echo "<p>Неправильное число колонок</p>";
                    return;
                }

                // РАЗБИВАЕМ СТРОКУ НА СТРОКИ ТАБЛИЦЫ
                $rows = explode('#', $structure);
                $hasAnyNonEmptyRow = false;
                foreach ($rows as $row) {
                    if (trim($row) !== '') {
                        $hasAnyNonEmptyRow = true;
                        break;
                    }
                }

                // Если нет ни одной непустой строки - "В таблице нет строк"
                if (!$hasAnyNonEmptyRow) {
                    echo "<p>В таблице №{$tableNumber} нет строк</p>";
                    return;
                }

                // ===== ПРОВЕРКА 2: ЕСТЬ ЛИ СТРОКИ С НЕПУСТЫМИ ЯЧЕЙКАМИ =====
                $hasNonEmptyRow = false;
                $allRowsHtml = '';

                foreach ($rows as $rowString) {
                    // Пропускаем пустые строки
                    if (trim($rowString) === '') {
                        continue;
                    }

                    $rowHtml = getTR($rowString, $cols);

                    $rawCells = explode('*', $rowString);
                    $hasContent = false;
                    foreach ($rawCells as $cell) {
                        if (trim($cell) !== '') {
                            $hasContent = true;
                            break;
                        }
                    }

                    // Если есть контент - добавляем строку
                    if ($hasContent) {
                        $allRowsHtml .= $rowHtml;
                        $hasNonEmptyRow = true;
                    }
                }

                if (!$hasNonEmptyRow) {
                    echo "<p>В таблице №{$tableNumber} нет строк с ячейками</p>";
                    return;
                }

                // ВЫВОД ТАБЛИЦЫ
                echo "<h2>Таблица №{$tableNumber}</h2>";
                echo "<table border='1' cellpadding='5' cellspacing='0'>";
                echo $allRowsHtml;
                echo "</table>";
            }
            
            for ($i = 0; $i < count($structures); $i++) {
                outTable($structures[$i], $Columns, $i + 1);
            }
            ?>
        </div>
    </main>

    <footer>
        <p>Выполнил: Мыльников Никита</p>
    </footer>
</body>

</html>