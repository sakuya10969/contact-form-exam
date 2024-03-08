<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["content"];

    public static function contentToString($content)
    {
        if ($content == 1) {
            return "商品のお届けについて";
        } elseif ($content == 2) {
            return "商品の交換について";
        } elseif ($content == 3) {
            return "商品トラブル";
        } elseif ($content == 4) {
            return "ショップへのお問い合わせ";
        } elseif ($content == 5) {
            return "その他";
        }
    }
}
