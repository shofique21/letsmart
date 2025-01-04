@extends('layouts.app')

@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800">
        {{ __('Cart') }}
    </h2>
</x-slot>
<main class="my-8">
    <div class="container px-6 mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5  px-5 py-5">
                @if ($message = Session::get('success'))
                <div class=" mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
                @endif
                <!-- <h3 class="text-3xl font-bold">Carts</h3> -->
                <div class="flex-1" style="overflow-x:auto;">
                    <table class="w-full text-sm lg:text-base responsive" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left">Name</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0">
                                    <span class="lg:hidden" title="Quantity">Qtd</span>
                                    <span class="hidden lg:inline">Quantity</span>
                                </th>
                                <th class="hidden text-right md:table-cell"> price</th>
                                <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <input type="hidden" name="cartProduct[]" value="{{$item->id}}">
                            <tr>
                                <td class="hidden pb-4 md:table-cell">
                                    <a href="#" class="text-bg-info text-decoration-none">
                                        <img style="height:100px;" src="{{asset('storage/'.$item->attributes->image)}}" class="w-20 rounded" alt="Thumbnail">
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="text-bg-info text-decoration-none">
                                        <p class="mb-2 md:ml-4 text-purple-600 font-bold .px-2">{{ $item->name }}</p>

                                    </a>
                                </td>
                                <td class="justify-center mt-6 md:justify-end md:flex px-3">
                                    <div class="h-10 w-28">
                                        <div class="relative flex flex-row w-full h-8">

                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}">
                                                <input type="text" name="quantity" value="{{ $item->quantity }}" class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                                <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">
                                        ${{ $item->price }}
                                    </span>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div style="display: flex; flex-direction:row-reverse" class="px-5 pb-4">
                        <span class="mx-5"> Total: ${{ Cart::getTotal() }}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500 p-4">Clear Carts</button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('cart.confirm') }}" method="POST">
                            @csrf
                            <h3 class="pt-4">Delivery Address</h3>
                            <div class="col-10">
                                <div class="form-group col-12 mb-3">
                                    <label for="street_name" class="form-label">Street Address</label>
                                    <textarea name="street_name" rows="3" class="col-12" required></textarea>
                                </div>

                                <div class="form-group col-12  mb-3">
                                    <label for="postCode" class="form-label">Postal code</label>
                                    <input type="text" class="form-control" name="postCode" required>
                                </div>

                                <div class="form-group col-12 mb-3">
                                    <label for="state" class="form-label">State/District</label>
                                    <input type="text" class="form-control" name="state" required>
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label for="phone" class="form-label">Phone No</label>
                                    <input type="text" class="form-control" name="phone" required>
                                </div>
                                <div class="form-group col-12">
                                <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500  p-4">Confrom Order</button>
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