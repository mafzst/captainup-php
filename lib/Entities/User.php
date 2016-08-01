<?php


namespace Mafzst\CaptainUp\Entity;


class User
{
    public $id;
    public $hashed_id;
    public $signed_id;
    public $access_token;
    public $fb_id;
    public $fb_name;
    public $fb_gender;
    public $fb_url;
    public $fb_friends;
    public $twitter_followers;
    public $global_name;
    public $global_email;
    public $global_first_name;
    public $global_last_name;
    public $global_display_name;
    public $global_image;
    public $global_url;
    public $app_data;
    public $last_activity;
    public $last_fb_check;
    public $user_state;
    public $points;
    public $member_since;
    public $badges;
    public $achieved_badges;
    public $activities;
    public $current_missions;
    public $badge_progress;
    public $total_actions;
    public $total_daily_actions;
    public $total_weekly_actions;
    public $total_monthly_actions;
    public $action_counter;
    public $all_time_position;
    public $monthly_position;
    public $weekly_position;
    public $daily_position;
    public $monthly_points;
    public $weekly_points;
    public $daily_points;
    public $is_twitter_connected;
    public $is_facebook_connected;
    public $is_google_connected;
    public $is_anonymous;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $name;
    public $image;
    public $level;
    public $next_level;
    public $inbox_activities;
    public $unread_inbox;
    public $private_activities;
    public $unread_activities;
    public $full_profile;
    public $next_mission;

    public function __construct()
    {
        $this->badges = [];
        $this->activities = [];
        $this->inbox_activities = [];
        $this->unread_inbox = [];
        $this->private_activities = [];
        $this->unread_activities = [];
    }
}