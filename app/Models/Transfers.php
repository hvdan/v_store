<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sender_method_id',
        'receiver_method_id',
        'sended_amount',
        'received_amount',
        'reference',
    ];

    public function senderMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'sender_method_id', 'id');
    }

    public function receiverMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'receiver_method_id', 'id');
    }
}
