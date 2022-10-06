<div class="orders-page">
    <header>
        <div class="searchbar">
            <input type="text" placeholder="search orders...">
        </div>
        <div class="stage">
            <select name="" id="">
                <option value="">Stage</option>
            </select>
        </div>
        <div class="pages">
            {{ $orders->links() }}
        </div>
    </header>

    <section class="orders">



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
                    <span>{{ $order->id }}</span>
                    <span>{{ $order->user->name }}</span>
                    <span class="col-span-2">{{ $order->type_of_paper }}</span>
                    <span>{{ $order->number_of_pages }}</span>
                    <span>{{ $order->number_of_sources }}</span>
                    <span>{{ $order->service_type }}</span>
                    <span>{{ $order->stage }}</span>
                    <span>{{ $order->urgency }}</span>
                    <span>{{ $order->cost }}</span>
                    <span>{{ date('d/m/y', strtotime($order->created_at)) }}</span>
                </a>
            @endforeach
        </div>

    </section>
</div>
