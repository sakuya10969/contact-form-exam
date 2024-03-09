<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name", "gender", "email", "tell", "address", "building", "detail", "category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function genderToString($gender)
    {
        if ($gender == 1) {
            return "男性";
        } elseif ($gender == 2) {
            return "女性";
        } elseif ($gender == 3) {
            return "その他";
        }
    }

    public function genderToInt($gender)
    {
        if ($gender == "男性") {
            return 1;
        } elseif ($gender == "女性") {
            return 2;
        } elseif ($gender == "その他") {
            return 3;
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where(function ($query) use ($keyword) {
                $query->where("first_name", "like", "%$keyword%")
                    ->orWhere("last_name", "like", "%$keyword%")
                    ->orWhere("email", "like", "%$keyword%");
            });
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            $query->where("gender", $gender);
        }
    }

    public function scopeDateSearch($query, $date)
    {
        if (!empty($date)) {
            $query->where("created_at", $date);
        }
    }
}
