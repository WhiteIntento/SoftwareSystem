<?php

namespace PureIntento\SoftwareSystem\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareVersion extends Model
{
    use HasFactory;

    protected $fillable=[
        "software_id",
        "version",
        "file_path",
        "downloads",
    ];
}
