<?php
/**
 * Created by PhpStorm.
 * User: Waqas
 * Date: 5/26/2016
 * Time: 9:58 AM
 */

namespace App\Gateway\UserQuotation;


use App\Gateway\Helper\QueryBuilder;

class UserQuotationQueryBuilder extends QueryBuilder
{
  public function __Construct()
  {
      $this->table = "quotation";
  }
}