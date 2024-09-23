<?php

use Hadri\Stats\functions\Average;

test("peux calculer la moyenne d'une liste", function () {
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});