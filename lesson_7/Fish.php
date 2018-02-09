<?php

function solutionW($A, $B) {
    $upstream_fishes = [];
    $downstream_fishes = [];

    foreach($A as $key => $fish) {
        if (0 === $B[$key]) {
            $is_alive = true;
            if (0 !== count($upstream_fishes)) {
                foreach($upstream_fishes as $key => $upstream_fish) {
                    if ($fish > $upstream_fish) {
                        unset($upstream_fishes[$key]);
                    } else {
                        $is_alive = false;
                    }
                }
            }
            if ($is_alive) {
                $downstream_fishes[] = $fish;
            }
        } else {
            $upstream_fishes[] = $fish;
        }
    }

    return count($upstream_fishes) + count($downstream_fishes);
}

echo solution([4, 3, 2, 1, 5], [0, 1, 0, 0, 0]); // 2



function solution($A, $B) {
    $alive_fishes = [];
    $previous_fish = null;

    for($i=0; $i<count($A); $i++) {
        if (is_null($previous_fish)) {
            $previous_fish[] = [
                'size' => $A[$i],
                'direction' => $B[$i],
            ];
        } else {

        }
    }

    foreach($A as $key => $fish) {
        if (0 === $B[$key]) {
            $is_alive = true;
            if (0 !== count($upstream_fishes)) {
                foreach($upstream_fishes as $key => $upstream_fish) {
                    if ($fish > $upstream_fish) {
                        unset($upstream_fishes[$key]);
                    } else {
                        $is_alive = false;
                    }
                }
            }
            if ($is_alive) {
                $downstream_fishes[] = $fish;
            }
        } else {
            $upstream_fishes[] = $fish;
        }
    }

    return count($upstream_fishes) + count($downstream_fishes);
}

echo solution([4, 3, 2, 1, 5], [0, 1, 0, 0, 0]); // 2