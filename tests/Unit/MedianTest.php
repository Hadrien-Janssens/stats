<?php

use Hadri\Stats\functions\Median;

test("peux calculer le median d'une liste", function () {
    $list = [1, 2, 3, 3, 5];
    $list1 = [1, 2, 3, 4, 5, 5];

    expect(Median::calculate($list))->toBe(3.0);
    expect(Median::calculate($list1))->toBe(3.5);
});