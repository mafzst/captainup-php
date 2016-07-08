<?php


namespace Mafzst\CaptainUp\Entity;


class Action
{
    public $id;
    public $points;
    public $points_interval;
    public $influence_boost;
    public $leaderboard;
    public $counters;
    public $show_activity;
    public $privacy;
    public $authentication;
    public $support;
    public $name;
    public $past_tense;
    public $present_progressive;
    public $notification;
    public $mutual;
    public $temporal;
    public $preset_image;
    public $show_in_inbox;
    public $entity_schemas;

    public function __construct()
    {
        $this->entity_schemas = [];
    }
}