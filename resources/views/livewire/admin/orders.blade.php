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
            <span>Date</span>
            <span>Status</span>
            <span>Client</span>
            <span>Urgency</span>
        </div>

        <div class="orders-list">

            @foreach ($orders as $order)
                <a href="#">
                    <span>{{ $order->id }}</span>
                    <span>{{ date('jS M Y', strtotime($order->created_at)) }}</span>
                    <span>{{ $order->stage }}</span>
                    <span>{{ $order->user->name }}</span>
                    <span>{{ $order->urgency }}</span>
                </a>
            @endforeach
        </div>

    </section>
</div>
