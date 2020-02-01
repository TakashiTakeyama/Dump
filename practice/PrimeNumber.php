<?php

for ($i = 1; $i <= 100; $i++) {
    for ($arg = 1; $arg <= 100; $arg++) {
        if ($i % $arg === 0) {
            echo $arg . "は" . $i . "の素数です。" . "\n";
        }
    }
}
