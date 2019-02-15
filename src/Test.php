<?php

namespace PeakXin\PackageTest;

use Illuminate\Database\Eloquent\Model;

/**
 * Model of the table tests.
 */
class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = [
        'name',
    ];
}
