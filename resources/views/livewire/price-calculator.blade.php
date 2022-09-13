<div class="hidden price-calculator lg:block">
    <h1 class="text-2xl font-bold">Price Calculator</h1>
    <div class="calc-body">
        <div class="calc-tabs">

            @foreach ($services as $key => $service)
                <span @class([
                    'curr-tab' => $selectedService == $key,
                    'idle-tab' => $selectedService != $key,
                ]) wire:click="$set('selectedService',{{ $key }})">
                    {{ $service }}
                </span>
            @endforeach


        </div>
        <div class="mt-4 essay-type">
            <select name="essay-type" id="essay-type" class="w-full p-1" {{-- onChange={(e)=> {
                e.preventDefault();
                checkCalcFields();
                }} --}}>
                <option value="" selected disabled>
                    Choose Essay Type
                </option>


                @foreach ($paperTypes as $key => $paperType)
                    <option value="{{ $paperType->rate }}" data-index="{{ $key }}">
                        {{ $paperType->type_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mt-4 subject-area-select">
            <select name="essay-type" id="essay-type" class="w-full p-1">
                <option value="" selected disabled>
                    Choose Subject Area
                </option>



                @foreach ($subjectAreas as $key => $subjectArea)
                    <option value="{{ $subjectArea->rate }}" data-index="{{ $key }}">
                        {{ $subjectArea->area_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-between mt-4 stage-time">
            <select name="stage" id="stage" class="w-45/100 p-1">


                @foreach ($academicLevels as $key => $academicLevel)
                    <option value="{{ $academicLevel->rate }}" selected="{{ $academicLevel->level_name == 'School' }}"
                        data-index="{{ $key }}">
                        {{ $academicLevel->level_name }}
                    </option>
                @endforeach


            </select>

            <select name="essay-time" id="essay-time" class="w-45/100 p-1" {{-- onChange={(e)=> {
                e.preventDefault();
                checkCalcFields();
                }} --}}>
                <option value="0.25">6 Hours</option>
                <option value="0.5">12 Hours</option>
                <option value="1">1 Day</option>
                <option value="2">2 Days</option>
                <option value="3">3 Days</option>
                <option value="5">5 Days</option>
                <option value="7">7 Days</option>
                <option value="10">10 Days</option>
                <option value="14" selected>
                    2 Weeks
                </option>
                <option value="30">1 Month</option>
                <option value="60">2 Months</option>
            </select>
        </div>

        <div class="flex justify-center  mt-4 essay-pages ">
            <input type="number" step="1" min="1" class="w-full text-center p-1 rounded"
                {{-- onChange={(e)=> {
            e.preventDefault();
            checkCalcFields();
            }} --}} placeholder="Enter Number Of Pages..." />
        </div>

        <div class="flex justify-center mt-4 essay-spacing">
            <select name="spacing" id="spacing-input" class="w-full text-center p-1 rounded" {{-- onChange={(e)=> {
                e.preventDefault();
                checkCalcFields();
                }} --}}>
                <option value="" disabled>
                    Choose Spacing
                </option>
                <option value="1">Single Spacing</option>
                <option value="2">Double Spacing</option>
            </select>
        </div>

        <div class="flex justify-end px-3 mt-4 font-bold computed-price">
            {{-- ${orderPrice} --}}0.00
        </div>

        <button class="w-full py-3 mt-4 font-bold text-white rounded bg-primary-4" {{-- onClick={writeMyPaper} --}}>
            Write My Paper
        </button>
    </div>
</div>
