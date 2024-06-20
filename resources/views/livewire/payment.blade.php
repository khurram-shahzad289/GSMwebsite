<div class="bg-gray-100">
    <div class="container-1">
        <h1 class="text-3xl py-6">+ADD FUNDS</h1>
        <div class="border rounded-lg flex justify-center items-center w-[90%] mx-auto bg-white">
            <div class="flex flex-col pt-12 gap-8 w-[60%]">
                <div class="flex flex-col gap-2  justify-center items-center">
                    <p class="text-2xl">R {{ $package->getPrice() }}</p>
                    <p>Your Current Balance</p>
                </div>
                <div class="text-center py-2 w-full bg-blue-400 text-white font-bold rounded ">
                    {{ __('* You can add funds to your account so that invoices are automatically paid when they are generated. All deposits are non-refundable.') }}
                </div>
                <div>
                    <p>Deposit Now</p>
                    <div class="w-full flex justify-end border py-3 rounded">
                        <p class="pr-3 text-3xl">{{ $package->getPrice() }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p>Minimum Deposit: R3000.000</p>
                        <p>Maximum Deposit: R10000000.000</p>
                    </div>
                </div>
                <div class="border shadow flex flex-col justify-center items-center rounded py-8 w-full">
                    <div class="w-[90%] flex py-4 gap-4 justify-center items-center">
                        <div class="bg-blue-600 rounded-full w-[20px] h-[20px]"></div>
                        <select class="w-[90%] rounded ">
                            <option>BINANCE MANUAL PAY</option>
                            <option>BANK MANUAL PAY</option>
                            <option>CREDIT MANUAL PAY</option>
                            <option>PAYPAL MANUAL PAY</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-4 py-4 justify-center items-center">
                        <p class="text-blue-800">Name: Mohsin</p>
                        <p>PAY IDE: 123464646</p>
                    </div>
                    <div class="text-green-700">
                        {{ __('AFTER SEND SCREEN SHOT TO WHATSAPP') }}
                    </div>
                    <a href="http://wa.me/+27681986634" class="pt-8 text-4xl font-bold text-green-900 text-center">
                        {{ __('CONTACT US NOW') }}
                    </a>
                    <div>
                        <p class="text-4xl font-bold pt-8"><span class="text-green-400">whatsApp: </span> +27681986634</p>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col gap-10">
                        <div>Deposit</div>
                        <div>Fixed Charge</div>
                        <div>Total</div>
                    </div>
                    <div class="vertical-line-gray"></div>
                    <div class="flex flex-col gap-10 text-right">
                        <div>R300</div>
                        <div>0.00</div>
                        <div class="text-2xl font-black">R 300</div>
                    </div>
                </div>
                <div class="horizontal-line-gray-full "></div>
                <div class="flex justify-between items-center pb-8">
                    <div>Balance after deposit: R {{ $package->getPrice() }}</div>
                    <button class="bg-blue-700 text-white rounded-lg px-3 py-2 text-lg">{{ __('Order Now') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
