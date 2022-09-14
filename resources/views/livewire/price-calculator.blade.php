<div class="price-calculator ">
    <h1 class="">Price Calculator</h1>
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
        <div class="essay-type">
            <select name="essay-type" id="essay-type" {{-- onChange={(e)=> {
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

        <div class=" subject-area">
            <select name="subject-area" id="subject-area">
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

        <div class=" stage-time">
            <select name="stage" id="stage">


                @foreach ($academicLevels as $key => $academicLevel)
                    <option value="{{ $academicLevel->rate }}" selected="{{ $academicLevel->level_name == 'School' }}"
                        data-index="{{ $key }}">
                        {{ $academicLevel->level_name }}
                    </option>
                @endforeach


            </select>

            <select name="essay-time" id="essay-time" {{-- onChange={(e)=> {
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

        <div class="essay-pages ">
            <input type="number" step="1" min="1" {{-- onChange={(e)=> {
            e.preventDefault();
            checkCalcFields();
            }} --}}
                placeholder="Enter Number Of Pages..." />
        </div>

        <div class="essay-spacing">
            <select name="spacing" id="spacing-input" {{-- onChange={(e)=> {
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

        <div class="computed-price">
            {{-- ${orderPrice} --}}0.00
        </div>

        <button class="write-my-paper" {{-- onClick={writeMyPaper} --}}>
            Write My Paper
        </button>
    </div>
</div>
