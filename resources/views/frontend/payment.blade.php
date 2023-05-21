@extends('layouts.app')

@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800">
        {{ __('Payment') }}
    </h2>
</x-slot>
<main class="my-8">
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5  px-5 py-5">
                <!-- <h3 class="text-3xl font-bold">Carts</h3> -->
                <div class="flex-1" style="overflow-x:auto;">
                    <div> 
                        <form action="{{ route('payment.confirm') }}" method="POST">
                            @csrf
                            <h3 class="pt-4">Delivery Address</h3>
                            <div class="col-10">
                                <div class="form-group col-12 mb-3">
                                    <label for="state" class="form-label">Payment Type</label>
                                    <select class="form-control" name="payment_type" required>
                                            <option value="">Select payment type</option>
                                            <option value="Cash On Delivery">Cash On delivery</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="card">Card</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label for="amount" class="form-label">Amount</label>
                                    <input type="text" class="form-control" name="amount" required>
                                </div>
                                <div class="form-group col-12">
                                    <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500  p-4">Confrom</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection