<?php
namespace PureIntento\SoftwareSystem;

enum SoftwarePermission{
    case FREE;
    case ACCOUNT_REQUIRED;

    public function get() : Models\SoftwarePermission{
        $model=Models\SoftwarePermission::where("name",$this->name)->first();
        if($model==null){
            return Models\SoftwarePermission::create(
                [
                    "name"=>$this->name
                ]
                );
        }
        return $model;
    }
}