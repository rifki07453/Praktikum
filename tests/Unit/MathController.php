<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MathController extends Controller
{
public function add(Request $request)
{
$a = (int) $request->input('a');
$b = (int) $request->input('b');
return response()->json([
'result' => $a + $b
]);
}
}