<?php


namespace Mafzst\CaptainUp\Entity;


class Badge
{
    public $id;
    public $name;
    public $description;
    public $description_html;
    public $points;
    public $weight;
    public $active;
    public $conditions_operator;
    public $preset_image;
    public $repeatable;
    public $custom;
    public $hidden;
    public $conditions;
    public $repeat_interval;
    public $weekly_repeatable_reset_day;
    public $rewards;

    public function __construct()
    {
        $this->conditions = [];
        $this->rewards = [];
    }
}