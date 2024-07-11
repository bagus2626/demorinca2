<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDocument extends Model
{
    use HasFactory;
    protected $table = 'log_documents';
    protected $guarded = ['id'];

    public function documents() {
        return $this->belongsTo(Document::class);
    }
}
