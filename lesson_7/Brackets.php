<?php

function solution($S) {
    $string = str_split($S);
    $open_symbols = ['(', '[', '{'];
    $symbol_relation = [
        ')' => '(',
        ']' => '[',
        '}' => '{',
    ];
    $symbols_list = [];

    foreach($string as $symbol) {
        if (in_array($symbol, $open_symbols)) {
            $symbols_list[] = $symbol;
        } else {
            $last_symbol = array_pop($symbols_list);
            if ($last_symbol !== $symbol_relation[$symbol]) {
                return 0;
            }
        }
    }

    if (0 !== count($symbols_list)) {
        return 0;
    }

    return 1;
}
echo solution('{[()()]}'); // 1
echo solution('([)()]'); // 0