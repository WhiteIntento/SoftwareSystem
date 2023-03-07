<?php

namespace PureIntento\SoftwareSystem\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable=[
        "software_author_id",
        "license",
    ];
}
