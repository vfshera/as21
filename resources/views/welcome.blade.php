<x-app-layout>
    <div class="bg-gray-100">
        <div id="hero" class="hero" style="background: url('storage/images/home.webp')">
            <div class="cta">
                <p class="cta-lead">
                    As
                    <span class="p-1 px-2 font-semibold bg-white text-primary-1">
                        Writers
                    </span>
                </p>

                <p class="hidden sm:block cta-word">
                    We are inclined to optimum dedication in <br />
                    providing top-quality services braced with
                    <br />
                    inimitable creativity and perfectionism.
                    <br />
                    The services we offer stand out for
                    <br />
                    themselves in uniqueness.
                </p>

                <p class="sm:hidden cta-word">
                    We are inclined to optimum dedication in providing
                    top-quality services braced with inimitable
                    creativity and perfectionism.The services we offer
                    stand out for themselves in uniqueness.
                </p>

                <button {{-- onClick={(e)=> {
                    e.preventDefault();
                    window.location.hash = "#whyus";
                    }} --}} class="strt-btn">
                    CHECKOUT OUR SOLUTIONS
                    <img src="/storage/images/forward.svg" class="inline h-5 lg:h-8 xl:ml-2 md:ml-3"
                        alt="Check Our Solutions Button"></img>
                </button>
            </div>
            {{-- <PriceCalculator /> --}}
            <livewire:price-calculator />
        </div>

        <div id="services" class="services">
            <div class="serv-group">
                <h1 class="block w-full my-10 text-center header-text">
                    SERVICES
                </h1>

                <div class="service sm:justify-start xl:justify-center">
                    <img src="/storage/images/rules.svg" class="h-12" alt="Term paper icon"></img>
                    <span>Term Papers</span>
                </div>

                <div class="service sm:justify-start xl:justify-center">
                    <img src="/storage/images/research.svg" class="h-12" alt="Research Paper icon"></img>
                    <span>Research Paper</span>
                </div>

                <div class="service">
                    <img src="/storage/images/whitepaper.svg" class="h-12" alt="White Paper icon"></img>
                    <span>White Paper</span>
                </div>

                <div class="service sm:justify-start xl:justify-center">
                    <img src="/storage/images/assignment.svg" class="h-12" alt="Class Assignment icon"></img>
                    <span>Class Assignment</span>
                </div>

                <div class="service sm:justify-start xl:justify-center">
                    <img src="/storage/images/book_stack.svg" class="h-12" alt="Case Study icon"></img>
                    <span>Case Study</span>
                </div>

                <div class="service ">
                    <img src="/storage/images/dissertations.svg" class="h-12" alt="Dissertation icon"></img>
                    <span>Dissertation</span>
                </div>

                <div class="service sm:justify-start xl:justify-center">
                    <img src="/storage/images/proofread.svg" class="h-12" alt="Case Study icon"></img>
                    <span>Proofreading</span>
                </div>

                {{-- {/* <div class="service sm:justify-start xl:justify-center">
                <img src="/storage/images/transcription.svg" class="h-12" alt="Transcription icon"></img>
                <span>Transcription</span>
            </div> */} --}}

                <div class="service sm:justify-start xl:justify-center">
                    <img src="/storage/images/spellcheck.svg" class="h-12" alt="Editing icon"></img>
                    <span>Editing</span>
                </div>

                <div class="service ">
                    <img src="/storage/images/captioning.svg" class="h-12" alt="Captioning icon"></img>
                    <span>Captioning</span>
                </div>
            </div>
        </div>

        <div class="overview">
            <h1 class="header-text">OVERVIEW</h1>
            <div class="views">
                <div class="view">
                    <p class="text-4xl font-bold num text-primary-1">
                        2000
                    </p>
                    <p class="text-center caption">
                        Projects <br />
                        Completed
                    </p>
                </div>

                <div class="view">
                    <p class="text-4xl font-bold num text-primary-1">
                        85
                    </p>
                    <p class="text-center caption">
                        Countries <br />
                        Represented
                    </p>
                </div>

                <div class="view">
                    <p class="text-4xl font-bold num text-primary-1">
                        95%
                    </p>
                    <p class="text-center caption">
                        Success <br />
                        Rate
                    </p>
                </div>

                <div class="view">
                    <p class="text-4xl font-bold num text-primary-1">
                        100+
                    </p>
                    <p class="text-center caption">
                        Active <br />
                        Tutors
                    </p>
                </div>
            </div>
        </div>

        <div id="whyus" class="why-us">
            <h1 class="mt-24 header-text">
                WHY CHOOSE OUR ESSAY SERVICE
            </h1>
            <p class="px-5 mt-12 text-lg text-center lg:text-2xl text-dark-5">
                We aim to verily offer to subsidize the time constrain
                faced by students across the globe due to the busy
                schedules.
                <br />
                Since most students find it hard to balance student
                life, family and work. <br />
                Therefore, we chip in to extend a hand of care and
                concern in assignemnts and general school work.
            </p>

            <div class="score-card">
                <div class="score-start">
                    <img src="/storage/images/approval.svg" class="inline h-7 w-7" alt="Approved Service Icon"></img>
                    <span class="">
                        Our services are at optimal quality
                    </span>
                </div>

                <div class="score-end">
                    <img src="/storage/images/approval.svg" class="inline h-7 w-7" alt="Approved Service Icon"></img>
                    <span class="">
                        Top-notch tutors at your disposal
                    </span>
                </div>

                <div class=" score-start">
                    <img src="/storage/images/approval.svg" class="inline h-7 w-7" alt="Approved Service Icon"></img>
                    <span class="">
                        Clients Are Our Top Priority
                    </span>
                </div>

                <div class="score-end">
                    <img src="/storage/images/approval.svg" class="inline h-7 w-7" alt="Approved Service Icon"></img>
                    <span class="">Responsive support</span>
                </div>

                <div class="score-start">
                    <img src="/storage/images/approval.svg" class="inline h-7 w-7" alt="Approved Service Icon"></img>
                    <span class="">Delivery on time</span>
                </div>

                <div class="score-end">
                    <img src="/storage/images/approval.svg" class="inline h-7 w-7" alt="Approved Service Icon"></img>
                    <span class="">Cheap rates</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center w-full h-1 my-3 fancy-hr">
                {{-- {/* <hr class="w-4/6 thin-hr bg-primary-1"> </hr> */} --}}
            </div>

            <div class="mb-24 benefits">
                <div class="benefit">
                    <h1 class="text-xl font-bold text-primary-1">
                        Money-Back Guarantee
                    </h1>
                    <p class="text-sm sm:pr-2">
                        Our esteemed clientele obtain their money back
                        in full amounts where cases of dissatisfaction
                        or poor quality arise and valid claims
                        ascertained as true by our Quality assurance
                        department.
                    </p>
                </div>

                <div class="benefit sm:pl-2">
                    <h1 class="text-xl font-bold text-primary-1">
                        Non-Plagiarism Work Guarantee
                    </h1>
                    <p class="text-sm">
                        The presence of systems and softwares that
                        ensure quality and originality of work ensure
                        100% non-plagiarized work is delivered. This is
                        in line with international guidelines and patent
                        rights upheld in plagiarism.
                    </p>
                </div>

                <div class="benefit">
                    <h1 class="text-xl font-bold text-primary-1">
                        Approved and Skilled Writers/Editors
                    </h1>
                    <p class="text-sm sm:pr-2">
                        The commitment of our team in ensuring quality
                        and satisfaction is mantained, calls for
                        dedicated step-wise interview of writers/editors
                        appointment. This puts us at the forefront in
                        delivery of timely, original, qualified and
                        proficient success in completion of tasks to the
                        desires of the clients.
                    </p>
                </div>

                <div class="benefit sm:pl-2">
                    <h1 class="text-xl font-bold text-primary-1">
                        Free Limitless Ammendments
                    </h1>
                    <p class="text-sm">
                        Our clients are free to receive endless
                        modification and revision of content/work in
                        occasions deemed necessary by the clients'
                        instructions.
                    </p>
                </div>
            </div>
            <a href="/client/dashboard/place-order">
                {{-- fix link --}}
                <button class="place-order">
                    Place Your Order
                </button>
            </a>
        </div>

        <div class="subjects">
            <div class="info">
                <h1 class="pt-8 header-text">SUBJECTS AVAILABLE</h1>

                <p class="px-5 py-8 text-center sm:text-xl">
                    Our team of experts is vast in various disciplines,
                    something that we pride in as a team. <br />
                    We offer services in line with the following
                    subjects.
                </p>
            </div>

            <div class="subgroup">
                <div class=" sublist">
                    <span class="subject">English</span>

                    <span class="subject">Literature</span>

                    <span class="subject">History</span>

                    <span class="subject">Sociology</span>

                    <span class="subject">Psychology</span>

                    <span class="subject">Mathematics</span>

                    <span class="subject">Finance</span>

                    <span class="subject">Accounts</span>

                    <span class="subject">Management</span>

                    <span class="subject">Computer Science</span>

                    <span class="subject">
                        Economics and Econometrics Statistics
                    </span>

                    <span class="subject">
                        Healthcare and Nursing
                    </span>

                    <span class="subject">
                        All Branches of Sciences
                    </span>
                </div>

                {{-- {/*<Link to="/find-writer">*/}
                {/*  <button class="find-my-writer">Find My Writer</button>*/}
                {/*</Link>*/} --}}
            </div>
        </div>


        @if ($reviews != null)
            <div class="customer-say">
                <h1 class="px-5 mt-14 lg:mt-28 header-text">
                    WHAT OUR CUSTOMERS SAY
                </h1>

                <div class="cards-list">
                    @foreach ($reviews as $review)
                        <x-rating-card :review="$review" />
                    @endforeach

                </div>
            </div>
        @endif



        <div id="contact" class="contact">
            <h1 class="mt-14 lg:mt-28 header-text">
                GET IN TOUCH WITH US
            </h1>

            <form action="" class="w-5/6 sm:w-3/4 lg:w-3/5 mt-7 mb-14 lg:mb-28 2xl:w-1/2">

                <x-form.input-field label="Name" input-type="text" placeholder="Type your name here..." />
                <x-form.input-field label="Email" input-type="email" placeholder="Type your email here..." />
                <x-form.input-field label="WhatsApp Number" input-type="number"
                    placeholder="Type your number here..." />

                <x-form.text-area-field label="Message" name="message" />

                <x-form.radio-field label="Email Me Back" name="mailback" />
                <x-form.radio-field label="Add Me On WhatsApp" name="addonwhatsapp" />




                <button type="submit" class="btn-pri">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
