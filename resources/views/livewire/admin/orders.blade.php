<div class="orders-page">
    <header>
        <div class="searchbar">
            <input type="text" placeholder="search orders...">
        </div>
        <div class="stage">
            <select name="status" id="" value="">
                <option value="">Status</option>
            </select>
        </div>
        <div class="pages">
            {{ $orders->links() }}
        </div>
    </header>

    <section @mousemove="mouseMoving" class="orders" x-data="{
        timer: null,
        look: 'bg-yellow-500',
        order: 'Order #28',
        client: 'Shera',
        topic: 'Long Topic',
        service: 'Rewriting',
        spacing: 'Double Spacing',
        pages: '3 Pages 3 Sources',
        mouseMoving(e) {
            let x = e.pageX - 200;
            let y = e.pageY - 200;
    
            if (y > 300) {
                y -= 300
            }
            if (x > 700) {
                x -= 350
            }
    
    
            $refs.motion.style.top = y + 'px'
            $refs.motion.style.left = x + 'px'
    
    
            console.log({ x, y })
            console.log($refs.motion.style.left, $refs.motion.style.top)
    
    
        },
        setCard(order) {
    
            if (order.stage === 'completed') {
                this.look = 'bg-green-500'
            }
            if (order.stage === 'pending') {
                this.look = 'bg-yellow-500'
            }
            if (order.stage === 'active') {
                this.look = 'bg-blue-500'
            }
    
            if (order.stage === 'cancelled') {
                this.look = 'bg-red-500'
            }
    
            if (order.stage === 'unassigned') {
                this.look = 'bg-gray-600'
            }
    
    
            this.order = 'Order #' + order.id
            this.client = order.user.name
            this.topic = order.topic
            this.service = order.service_type
            this.spacing = order.spacing
            this.pages = order.number_of_pages + ' Pages'
    
            $refs.motion.classList.remove('hidden')
        },
        hideCard() {
            if (this.timer) {
                clearTimeout(this.timer)
            }
            this.timer = setTimeout(() => {
                $refs.motion.classList.add('hidden')
            }, 2500)
        }
    }">

        <div x-ref="motion"
            class="order-brief w-1/5 h-2/3 right-10 top-14 bg-[#fcfbff] rounded shadow absolute overflow-hidden transition-all duration-400 hidden">
            <div class="p-3  relative transition-colors duration-200" :class="look">
                <p x-text="order" class="text-white text-2xl font-bold "></p>
                <p x-text="client" class="text-white"></p>
            </div>


            <div class="p-3">
                <p x-text="topic" class="text-gray-600 italic leading-tight mb-2"></p>
                <p x-text="service" class="text-gray-600 p-1 border border-gray-200  my-1 rounded"></p>
                <p x-text="spacing" class="text-gray-600 p-1 border border-gray-200  my-1 rounded"></p>
                <p x-text="pages" class="text-gray-600 p-1 border border-gray-200  my-1 rounded text-center"></p>
            </div>

        </div>

        <div class="orders-head">
            <span>Invoice</span>
            <span>Client</span>
            <span class="col-span-2">Paper Type</span>
            <span>Pages</span>
            <span>Sources</span>
            <span>Service</span>
            <span>Status</span>
            <span>Urgency</span>
            <span>Cost</span>
            <span>Date</span>
        </div>

        <div class="orders-list">

            @foreach ($orders as $order)
                <a href="#">
                    <span @mouseenter="setCard({{ $order }})" @mouseleave="hideCard()">{{ $order->id }}</span>
                    <span @mouseenter="setCard({{ $order }})"
                        @mouseleave="hideCard()">{{ Str::afterLast($order->user->name, ' ') }}</span>
                    <span @mouseenter="setCard({{ $order }})" @mouseleave="hideCard()"
                        class="col-span-2">{{ $order->type_of_paper }}</span>
                    <span>{{ $order->number_of_pages }}</span>
                    <span>{{ $order->number_of_sources }}</span>
                    <span @mouseenter="setCard({{ $order }})"
                        @mouseleave="hideCard()">{{ $order->service_type }}</span>
                    <span @mouseenter="setCard({{ $order }})" @mouseleave="hideCard()"
                        class="{{ $order->stage }}-order">{{ $order->stage }}</span>
                    <span>{{ $order->urgency }}</span>
                    <span class="cost">{{ number_format($order->cost, 0, '.', ',') }}</span>
                    <span>{{ date('d/m/y', strtotime($order->created_at)) }}</span>
                </a>
            @endforeach
        </div>

    </section>
</div>
