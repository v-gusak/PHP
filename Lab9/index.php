<?php
    // Подключаем объявление класса игры.
    require_once(dirname(__FILE__) . '/classes.php');

    session_start();

    // Получаем из сессии текущую игру.
    // Если игры еще нет, создаём новую.
    $game = isset($_SESSION['game'])? $_SESSION['game']: null;
    if(!$game || !is_object($game)) {
        $game = new TicTacGame();
    }

    // Обрабатываем запрос пользователя, выполняя нужное действие.
    $params = $_GET + $_POST;
    
    if(isset($params['action'])) {
        $action = $params['action'];

        if($action == 'move') {
            // Обрабатываем ход пользователя.
            $game->makeMove((int)$params['x'], (int)$params['y']);

        } else if($action == 'newGame') {
            // Пользователь решил начать новую игру.
            $game = new TicTacGame();
        }
    }

    // Добавляем вновь созданную игру в сессию.
    $_SESSION['game'] = $game;

    $width = $game->getFieldWidth();
    $height = $game->getFieldHeight();
    $field = $game->getField();
    $winnerCells = $game->getWinnerCells();
?>

<!DOCTYPE html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row text-center mt-4">
            <?php if($game->getCurrentPlayer()) { ?>
                <!-- Отображаем приглашение сделать ход. -->
                <div class="icon player<?php echo $game->getCurrentPlayer() ?>">Ход делает игрок </div>
            <?php } ?>

            <?php if($game->getWinner()) { ?>
                <!-- Отображаем сообщение о победителе -->
                <div class="icon player<?php echo $game->getWinner() ?>">Победил игрок </div>!
            <?php } ?>

            <!-- Рисуем игровое поле, отображая сделанные ходы
            и подсвечивая победившую комбинацию. -->
            <div class="ticTacField mt-3">
                <?php for($y  =0; $y < $height; $y++) { ?>
                    <div class="ticTacRow">
                        <?php for($x = 0; $x < $width; $x++) {
                            // $player - игрок, сходивший в эту клетку. Или null, если клетка свободна.
                            // $winner - флаг, означающий, что эта клетка должна быть подсвечена при победе.
                            $player = isset($field[$x][$y])? $field[$x][$y]: null;
                            $winner = isset($winnerCells[$x][$y]);
                            $class = ($player? ' player' . $player: '') . ($winner? ' winner': '');
                        ?>
                            <div class="ticTacCell<?php echo $class ?>">
                                <?php if(!$player) { ?>
                                    <!-- Клетка свободна. Отображаем здесь ссылку,
                                    на которую нужно кликнуть для совершения хода. -->
                                    <a href="?action=move&amp;x=<?php echo $x ?>&amp;y=<?php echo $y ?>"></a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

            
        </div>
    </div>
    <div class="button">
        <a href="?action=newGame"><button type="button" class="btn btn-outline-warning">Начать новую игру</button></a>
    </div>
</body>
</html>
