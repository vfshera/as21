<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{

    use WithPagination;

    public function render()
    {
        $orders = Order::with('user')->orderByDesc('created_at')->paginate(14);

        return view('livewire.admin.orders', compact('orders'));
    }
}