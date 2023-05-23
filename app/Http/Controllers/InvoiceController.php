<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
class InvoiceController extends Controller
{
    private $invoiceRepository;

    public function __construct(OrderRepositoryInterface $invoiceRepository)
    {
        $this->middleware('auth');
        $this->invoiceRepository = $invoiceRepository;
    }

    public function userInvoice($id){
        //$pdf = PDF::loadView('frontend.invoice');
        //return $pdf->download('customerInvoice.pdf');
        $order = $this->invoiceRepository->orderInfo($id);
        $orderItems = $this->invoiceRepository->invoice($id);
        $shippingAddress = $this->invoiceRepository->deliveryAddress($id);
        return view('frontend.invoice', compact('order','orderItems','shippingAddress'));
    }
}
