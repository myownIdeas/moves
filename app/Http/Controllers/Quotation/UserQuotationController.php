<?php
/**
 * Created by PhpStorm.
 * User: Waqas
 * Date: 5/26/2016
 * Time: 9:24 AM
 */

namespace app\Http\Controllers\Quotation;


use Illuminate\Routing\Controller;
use App\Repository\UserQuotationRepository;
use Illuminate\Support\Facades\Session;


class UserQuotationController extends Controller
{
    public $userQuotation = "";
    public function __construct()
    {

        $this->userQuotation = new UserQuotationRepository();
    }

    public function index()
    {
        return view('mover.index');
    }
    public function aboutus()
    {
        return view('mover.about');
    }
    public function services()
    {
        return view('mover.services');
    }
    public function blog()
    {
        return view('mover.blog');
    }
    public function contact()
    {
        return view('mover.contact');
    }
    public function admin()
    {
        return view('admin.index');
    }
    public function store()
    {
        $this->userQuotation->store(request()->all());
        Session::flash('message', 'We will Contact With AS soon As possible ThankYou !');
        return redirect('/');
    }
    public function table()
    {
       $quotations = $this->userQuotation->getAll();

        return view('admin.data-table',compact('quotations'));
    }

}