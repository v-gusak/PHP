<?php
class TicTacGame {
    private $fieldWidth = 3;
    private $fieldHeight = 3;
    private $countToWin = 3;

    // Массив сделанных ходов вида $field[$x][$y] = $player;
    private $field = array();

    /* 
        $winnerCells аналогичен $field, но хранит только клетки, которые
        надо выделить при отображении победившей комбинации. 
    */
    private $winnerCells = array();

    private $currentPlayer = 1; // 1 или 2, а после окончания игры - null.
    private $winner = null; // после окончания игры будет содержать 1 или 2.

    /*
        Обрабатывает очередной ход. Ставит в указанные координаты на поле
        символ текущего игрока. Передаёт ход другому игроку, а в случае победы
        определяет победителя.
        
        Это единственная функция, которая может менять состояние игры.
    */
    public function makeMove($x, $y) {
        // Учитываем ход, если выполняются все условия:
        // 1) игра ещё идет,
        // 2) в поле на указанном месте ещё пусто,
        if(
            $this->currentPlayer
            &&
            $x >= 0
            &&
            $y >= 0
            &&
            empty($this->field[$x][$y]))
        {
                $current = $this->currentPlayer;

                $this->field[$x][$y] = $current;
                $this->currentPlayer = ($current == 1) ? 2 : 1;

                $this->checkWinner();
        }
    }

    /*
        Делает поиск выигравшей комбинации, проходя по всему полю и проверяя
        4 направления (горизонталь, вертикаль и 2 диагонали).
    */
    private function checkWinner() {
        for($y = 0; $y < $this->fieldHeight; $y++) {
            for($x = 0; $x < $this->fieldWidth; $x++) {
                $this->checkLine($x, $y, 1, 0);
                $this->checkLine($x, $y, 1, 1);
                $this->checkLine($x, $y, 0, 1);
                $this->checkLine($x, $y, -1, 1);
            }
        }
        if($this->winner) {
            $this->currentPlayer = null;
        }
    }

    /*
        Проверяет не находится ли в этом месте поля выигрышная комбинация
        из необходимого числа крестиков или ноликов.
        Если выигрышная комбинация найдена, запоминает победителя
        и саму выигрышную комбинацию в массиве winnerCells.
     
        $startX начальная точка, от которой проверять наличие комбинации
        $startY
        $dx направление, в котором искать комбинацию
        $dy
     */
    private function checkLine($startX, $startY, $dx, $dy) {
        $x = $startX;
        $y = $startY;
        $field = $this->field;
        $value = isset($field[$x][$y])? $field[$x][$y]: null;
        $cells = array();
        $foundWinner = false;

        if($value) {
            $cells[] = array($x, $y);
            $foundWinner = true;

            for($i = 1; $i < $this->countToWin; $i++) {
                $x += $dx;
                $y += $dy;
                $value2 = isset($field[$x][$y])? $field[$x][$y]: null;

                if($value2 == $value) {
                    $cells[] = array($x, $y);
                } else {
                    $foundWinner = false;
                    break;
                }
            }
        }
        
        if($foundWinner) {
            foreach($cells as $cell) {
                $this->winnerCells[$cell[0]][$cell[1]] = $value;
            }
            $this->winner = $value;
        }
    }

    /*
        Функции ниже позволяют получить текущее состояние игры и игрового поля.
    */
    public function getCurrentPlayer() { return $this->currentPlayer; }
    public function getWinner()        { return $this->winner; }
    public function getField()         { return $this->field; }
    public function getWinnerCells()   { return $this->winnerCells; }
    public function getFieldWidth()    { return $this->fieldWidth; }
    public function getFieldHeight()   { return $this->fieldHeight; }
}
