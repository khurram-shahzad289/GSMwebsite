<div class="flex flex-col max-w-[1440px] mx-auto px-8 py-8">
    <div class="text-2xl font-semibold text-gray-500">
        {{ __('Shopping Cart') }}
    </div>
    <div class="flex gap-8">
        <div class="w-[20%]">
            <h2 class=" py-4 text-xl font-semibold text-gray-500">Summary</h2>
            <div class="border-t-2 flex flex-col gap-2 pt-4">
                <div class="flex justify-between">
                    <div>Subtotal</div>
                    <div class="font-bold">{{ $package->getPrice() }} USD</div>
                </div>
                <div class="flex justify-between">
                    <div>Discount</div>
                    <div class="font-bold">0.00USD</div>
                </div>
                <div class="flex justify-between">
                    <div>Taxes</div>
                    <div class="font-bold">0.00USD</div>
                </div>
                <div class="pt-4 flex justify-between">
                    <div>Total</div>
                    <div class="text-lg font-bold">{{ $package->getPrice() }} USD</div>
                </div>
            </div>
        </div>
        <div class="w-[80%]">
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Q</th>
                    <th>Subtotal</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                <tr>
                    <td>{{ $package->getName() }}</td>
                    <td>{{ $package->getPrice() }}USD</td>
                    <td>1</td>
                    <td>0.00USD</td>
                    <td>0.00USD</td>
                    <td style="text-align: right">{{ $package->getPrice() }}USD</td>
                    <td class="flex justify-center items-center">
                        <button wire:click="deletePackage()" class="text-xl font-bold text-white bg-red-200 rounded px-4">
                            -
                        </button>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="flex justify-between">
                        <div>Subtotal</div>
                        <div class="font-bold">{{ $package->getPrice() }} USD</div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="flex justify-between">
                        <div>Discount</div>
                        <div class="font-bold">0.00USD</div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="flex justify-between">
                        <div>Taxes</div>
                        <div class="font-bold">0.00USD</div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="flex justify-between">
                        <div>Total</div>
                        <div class="text-lg font-bold">{{ $package->getPrice() }} USD</div>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div>
        <button class="font-bold">
            {{ __('EMPTY SHOPPING CART') }}
        </button>
    </div>
    <div class="flex gap-8">
        <div class="w-[20%]">
            <h2 class="py-4 text-xl font-semibold text-gray-500">Coupon</h2>
{{--            <div>--}}
{{--                <input>--}}
{{--            </div>--}}
        </div>
        <div class="w-[80%] flex flex-col gap-2">
            <p class="font-bold text-gray-600">Do you have any notes about this order?</p>
            <input id="note" placeholder="Notes" class="border border-1 rounded-lg">
            <button wire:click="checkout()" class="bg-green-300 py-2 rounded-lg">
                {{ __('Confirm Order') }}
            </button>
            <button href="{{ route('home') }}" class="py-2 border border-3 rounded-lg">
                {{ __('Back') }}
            </button>
        </div>
    </div>
</div>
