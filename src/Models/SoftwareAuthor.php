<?php

namespace PureIntento\SoftwareSystem\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareAuthor extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "url",
    ];
}
