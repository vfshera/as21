<div class="hidden price-calculator lg:block">
    <h1 class="text-2xl font-bold">Price Calculator</h1>
    <div class="calc-body">
        <div class="calc-tabs">
            <span {{-- class={paperAction==0 ? "curr-tab" : "idle-tab" } onClick={(e)=> {
                e.preventDefault();
                setPaperAction(0);
                checkCalcFields();
                }} --}}>
                Writing
            </span>
            <span {{-- class={paperAction==1 ? "curr-tab" : "idle-tab" } onClick={(e)=> {
                e.preventDefault();
                setPaperAction(1);
                checkCalcFields();
                }} --}}>
                Rewriting
            </span>
            <span {{-- class={paperAction==2 ? "curr-tab" : "idle-tab" } 
            onClick={(e)=> {
                e.preventDefault();
                setPaperAction(2);
                checkCalcFields();
                }} --}}>
                Editing
            </span>
        </div>
        <div class="mt-4 essay-type">
            <select name="essay-type" id="essay-type" class="w-full p-1" {{-- onChange={(e)=> {
                e.preventDefault();
                checkCalcFields();
                }} --}}>
                <option value="" selected disabled>
                    Choose Essay Type
                </option>

                {{-- {allPaperTypes.map((papertype, index) => (
                <option value={papertype.rate} key={index}>
                    {papertype.type_name}
                </option>
                ))} --}}
            </select>
        </div>

        <div class="mt-4 subject-area-select">
            <select name="essay-type" id="essay-type" class="w-full p-1" {{-- onChange={(e)=> {
                e.preventDefault();
                checkCalcFields();
                }} --}}>
                <option value="" selected disabled>
                    Choose Subject Area
                </option>

                {{-- {allSubjectAreas.map((subarea, index) => (
                <option value={subarea.rate} key={index}>
                    {subarea.area_name}
                </option>
                ))} --}}
            </select>
        </div>

        <div class="flex justify-between mt-4 stage-time">
            <select name="stage" id="stage" class="w-45/100 p-1" {{-- onChange={(e)=> {
                e.preventDefault();
                checkCalcFields();
                }} --}}>
                {{-- {allAcademicLevels.map((academiclevel, index) =>
                academiclevel.level_name === "School" ? (
                <option value={academiclevel.rate} selected key={index}>
                    {academiclevel.level_name}
                </option>
                ) : (
                <option value={academiclevel.rate} key={index}>
                    {academiclevel.level_name}
                </option>
                )
                )} --}}
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
            {{-- ${orderPrice} --}}
        </div>

        <button class="w-full py-3 mt-4 font-bold text-white rounded bg-primary-4" {{-- onClick={writeMyPaper} --}}>
            Write My Paper
        </button>
    </div>
</div>
