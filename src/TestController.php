<?php

namespace PeakXin\PackageTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PeakXin\PackageTest\Test;

class TestController extends Controller
{
    public function index()
    {
        return redirect()->route('test.create');
    }

    public function create()
    {
        $tests = Test::all();
        $submit = 'Add';
        return view('peakxin.packagetest.list', compact('tests', 'submit'));
    }

    public function store()
    {
        $input = Request::all();
        Test::create($input);
        return redirect()->route('test.create');
    }

    public function edit($id)
    {
        $tests = Test::all();
        $test = $tests->find($id);
        $submit = 'Update';
        return view('wisdmlabs.todolist.list', compact('tests', 'test', 'submit'));
    }

    public function update($id)
    {
        $input = Request::all();
        $test = Test::findOrFail($id);
        $test->update($input);
        return redirect()->route('test.create');
    }

    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        $test->delete();
        return redirect()->route('test.create');
    }
}
