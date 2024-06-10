@php
    $countries  = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];


@endphp

<div class="w-full">
    <x-header/>
    <x-navigation/>

    <form wire:submit.prevent="register">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-4xl flex gap-4  items-center">

            <img class="w-[25px] h-[25px]" src="/images/icons/user.png">
            <h2 class="text-gray-500 text-[28px]">
                Personal Details
            </h2>

        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <div class="flex flex-col gap-3">
                    <div class="flex justify-between gap-8">
                        <div id="name-col" class="w-1/2">
                            <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                                <span class="text-red-500">*</span> Full Name
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="name" id="name" type="text"
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"
                                />
                            </div>

                            @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="phone-col" class="w-1/2">
                            <label for="phone" class="block text-sm font-medium text-gray-700 leading-5">
                                Phone
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="phone" id="phone" type="tel"
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('phone') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                            </div>

                            @error('phone')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex justify-between gap-8">
                        <div id="name-col" class="w-1/2">
                            <label for="country" class="block text-sm font-medium text-gray-700 leading-5">
                                <span class="text-red-500">*</span> Country
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <select wire:model.lazy="country" id="country" type="text"
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('country') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                    @foreach($countries as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @error('country')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div id="phone-col" class="w-1/2">
                            <label for="city" class="block text-sm font-medium text-gray-700 leading-5">
                                City
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="city" id="city" type="text"
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('city') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                            </div>

                            @error('city')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div id="address-col">
                        <label for="address" class="block text-sm font-medium text-gray-700 leading-5">
                            Address
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="address" id="address" placeholder="Street Address" type="text"

                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('address') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                        </div>

                        @error('address')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div id="zip-col">
                        <label for="zip" class="block text-sm font-medium text-gray-700 leading-5">
                            ZIP Code
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="zip" id="zip" placeholder="ZIP Code" type="text"

                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('zip') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                        </div>

                        @error('zip')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>


        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-4xl flex gap-4  items-center">

            <img class="w-[25px] h-[25px]" src="/images/icons/padlock.png">
            <h2 class="text-gray-500 text-[28px]">
                Account Details
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-4xl">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <div class="flex flex-col gap-3">

                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            <span class="text-red-500">*</span>Email
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="email" id="email" type="email"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                        </div>

                        @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <label for="username" class="block text-sm font-medium text-gray-700 leading-5">
                            <span class="text-red-500">*</span>Username
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="username" id="username" type="text"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('username') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                        </div>

                        @error('username')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-between gap-8">
                        <div class="mt-6 w-1/2">
                            <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                                <span class="text-red-500">*</span> Password
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="password" id="password" type="password"
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror"/>
                            </div>

                            @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6 w-1/2">
                            <label for="password_confirmation"
                                   class="block text-sm font-medium text-gray-700 leading-5">
                                <span class="text-red-500">*</span> Confirm Password
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="passwordConfirmation" id="password_confirmation"
                                       type="password"

                                       class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                            </div>
                        </div>
                    </div>

                    <div id="check-box" class="flex items-center gap-3">
                        <input type="checkbox" id="terms" name="terms" wire:model.lazy="terms">
                        <p class="font-semibold text-gray-500">By Proceeding You Agree To <a class="text-red-700">Terms
                                Of Service</a> And <a class="text-red-700">Privacy Policy</a></p>
                    </div>
                    <div class="mt-6">
                                    <span class="block w-full rounded-md shadow-sm">
                                        <button type="submit"
                                                class="flex justify-center w-1/3 px-4 py-3 text-sm font-medium text-white bg-[#9c2b2b] border border-transparent rounded-md hover:bg-black focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                            Complete Registration
                                        </button>
                                     </span>
                    </div>
                </div>

            </div>
        </div>
    </form>


    <x-footer/>
</div>
