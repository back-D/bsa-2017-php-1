<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    public function generate()
    {
        //TODO: Implement emoji generator using yield
        $emojiArr = ['😀', '😃', '😄', '😁', '😆', '😅', '😂'];
        for ($i = 0; $i < count($emojiArr); $i++) {
        	yield $emojiArr[$i];
        }
    }
}
