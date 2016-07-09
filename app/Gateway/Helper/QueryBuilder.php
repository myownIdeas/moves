<?php
/**
 * Created by PhpStorm.
 * User: Waqas
 * Date: 5/26/2016
 * Time: 9:52 AM
 */

namespace app\Gateway\Helper;


use App\Quotation;

abstract class QueryBuilder
{

    public function insert(array $record)
    {
        return Quotation::create($record);
    }
    public function getAll()
    {
        return  Quotation::all();

    }
}