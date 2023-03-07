<?php

namespace PureIntento\SoftwareSystem\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareLanguage extends Model
{
    use HasFactory;

    protected $fillable=[
        "software_id",
        "language_id",
        "name",
        "description"
    ];
}
