<?php
/**
 * Created by PhpStorm.
 * User: Waqas
 * Date: 5/26/2016
 * Time: 9:38 AM
 */

namespace App\Repository;


use App\Gateway\UserQuotation\UserQuotationQueryBuilder;
use Illuminate\Support\Facades\Mail;

class UserQuotationRepository extends Repository
{
    public $tableGateway;
    public function __construct()
    {
      $this->tableGateway = new UserQuotationQueryBuilder();
    }
    public function store($userQuotation)
    {
        $quotation =$this->tableGateway->insert($userQuotation);

       return  Mail::send('mover.welcome',['quotation' => $quotation], function($message) use($quotation)
        {
            $message->from('packerandmoers@gmail.com','RTMOVER.org');
            $message->to('Rtmoversuae@gmail.com')->subject('RTMOVERS');
        });
    }
    public function getAll()
    {
       return  $this->tableGateway->getAll();
    }
}