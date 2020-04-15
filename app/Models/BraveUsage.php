<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class BraveUsage extends Model
{
    use Sushi;

    protected $rows = [
        [
            'month' => '2018-11',
            'dau' => 1000000,
        ],
        [
            'month' => '2018-12',
            'dau' => 1300000,
        ],
        [
            'month' => '2019-01',
            'dau' => 1400000,
        ],
        [
            'month' => '2019-02',
            'dau' => 1500000,
        ],
        [
            'month' => '2019-03',
            'dau' => 1600000,
        ],
        [
            'month' => '2019-04',
            'dau' => 1800000,
        ],
        [
            'month' => '2019-05',
            'dau' => 2000000,
        ],
        [
            'month' => '2019-06',
            'dau' => 2150000,
        ],
        [
            'month' => '2019-07',
            'dau' => 2400000,
        ],
        [
            'month' => '2019-08',
            'dau' => 2600000,
        ],
        [
            'month' => '2019-09',
            'dau' => 2800000,
        ],
        [
            'month' => '2019-10',
            'dau' => 3000000,
        ],
        [
            'month' => '2019-11',
            'dau' => 3300000,
        ],
        [
            'month' => '2019-12',
            'dau' => 3600000,
        ],
        [
            'month' => '2020-01',
            'dau' => 3800000,
        ],
        [
            'month' => '2020-02',
            'dau' => 4000000,
        ],
        [
            'month' => '2020-03',
            'dau' => 4300000,
        ],

    ];
}