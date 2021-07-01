<?php
namespace App\Models\Interfaces;


interface ModelHelper
{
    /**
     * @param $request
     * @param $data
     * @return mixed
     */
    public function validator($request, $data);

}
