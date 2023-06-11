<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\OrderListRepositoryInterface;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    private $orderListRepository;

    public function __construct(OrderListRepositoryInterface $orderListRepository)
    {
        $this->middleware('isAdmin');
        $this->orderListRepository = $orderListRepository;
    }

    public function orderList()
    {
        $orderList = $this->orderListRepository->allOrder();
        return view('admin.orderList', compact('orderList'));
        
    }

    public function orderDetails($id)
    {
        $oderItems = $this->orderListRepository->orderDetails($id);
        $shippingAddress = $this->orderListRepository->shippingAddress($id);
        return view('admin.orderView', compact('oderItems','shippingAddress'));
    }
}
