<?php

/**
 * Created by PhpStorm.
 * User: Jarbit
 * Date: 27/11/2014
 * Time: 18:29
 */
class ModelBase extends EloquentValidation
{

    protected $softDelete = true;
    protected $guarded = [];
    protected $defaults = [];

    public function getId()
    {
        return $this->primaryKey;
    }
} 