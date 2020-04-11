<?php


namespace App\Http\Controllers;

use App\Http\Services\FrenetService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * @author Sara Souza
 * Class FrenetController
 * @package App\Http\Controllers
 */
class FrenetController extends Controller
{
    /**
     * Function that calculates the frenet coordinate "d".
     *
     * @param Request $request
     * @return Factory|View
     */
    public function converterToFrenet(Request $request){
        $axisD = (new FrenetService())->convertToFrenet($request->post('x'), $request->post('y'), $request->post('theta'), $request->post('rx'), $request->post('ry'));
        return view('welcome',  compact('axisD'));
    }

}
