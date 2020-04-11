<?php


namespace App\Http\Services;

/**
 *
 * Class FrenetService
 * @package App\Http\Services
 */
class FrenetService
{
    /**
     * Function that calculates the frenet coordinate "d".
     *
     * @param float $x
     * @param float $y
     * @param int $theta
     * @param float $rx
     * @param float $ry
     * @return float|int
     */
    public function convertToFrenet(float $x, float $y, int $theta, float $rx, float $ry){

        $dX = $x - $rx;
        $dY = $y - $ry;
        $cosTheta = cos($theta);
        $senTheta = sin($theta);
        $cross = $cosTheta * $dY - $senTheta * $dX;
        $q = sqrt($dX * $dX + $dY * $dY);

        $d = $this->sign($cross * $q);
        return $d;

    }

    /**
     * Function that returns signal
     *
     * @param $n
     * @return int
     */
    public function sign(float $n) {
        if($n > 0){
            return 1;

        }elseif ($n < 0){
            return -1;

        }else{
            return 0;
        }
    }


}
