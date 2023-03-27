<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [ 'deleted_at' ];
        public $table = "wallets";
        protected $primaryKey = 'id';
        protected $fillable = [
            'id',
            'user_id',
            'amount',
            'is_deleted'
        ];

        public function user(){
            return $this->belongsTo(User::class);
        }
}
