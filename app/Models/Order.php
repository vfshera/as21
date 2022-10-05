<?php

namespace App\Models;

use App\Models\ClientFeedback;
use App\Models\OrderAssign;
use App\Models\OrderMaterial;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "topic",
        "type_of_paper",
        "subject_area",
        "paper_details",
        "paper_format",
        "prefered_english",
        "number_of_sources",
        "spacing",
        "academic_level",
        "number_of_pages",
        "urgency",
        "stage",
        "service_type",
        "user_id",
        "cost",
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderAssign()
    {
        return $this->hasOne(OrderAssign::class, 'order_id');
    }

    public function clientFeedback()
    {
        return $this->hasOne(ClientFeedback::class);
    }

    public function orderMaterials()
    {
        return $this->hasMany(OrderMaterial::class);
    }

    public function scopePaid($query)
    {
        return $query->whereIn('stage', [0, 4]);
    }

    public function scopePending($query)
    {
        return $query->where('stage', 0);
    }

    public function scopeUnassigned($query)
    {
        return $query->where('stage', 4);
    }

    public function scopeActive($query)
    {
        return $query->where('stage', 2);
    }

    public function scopeCancelled($query)
    {
        return $query->where('stage', 3);
    }

    public function scopeCompleted($query)
    {
        return $query->where('stage', 1);
    }

}