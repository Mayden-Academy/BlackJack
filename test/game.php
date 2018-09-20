<?php

require('../game.php');

use PHPUnit\Framework\TestCase;

class Game extends TestCase
{

    const SUITS = ['diamonds', 'hearts', 'clubs', 'spades'];

    const NUMBERS = [
        'ace' => 11,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'jack' => 10,
        'queen' => 10,
        'king' => 10
    ];

    public function testpickCard()
    {
        $card = pickCard(self::SUITS, self::NUMBERS);

        $this->assertArrayHasKey('card', $card);
        $this->assertArrayHasKey('value', $card);
    }

    public function testcalcWinner()
    {
        $winner = calcWinner(1,1);

        $this->assertEquals('<h3>Draw!</h3>', $winner);
    }

}
?>
