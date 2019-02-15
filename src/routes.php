<?php
Route::resource('/test', 'PeakXin\PackageTest\TestController');
Route::get('test2', function () {
    return view('packagetest::test');
});