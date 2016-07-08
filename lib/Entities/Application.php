<?php


namespace Mafzst\CaptainUp\Entity;


class Application
{
    public $id;
    public $name;
    public $url;
    public $game_center_intro_title;
    public $game_center_intro_text;
    public $game_center_intro_text_html;
    public $sign_up_title;
    public $sign_up_text;
    public $sign_up_text_html;
    public $portal_custom_view;
    public $portal_custom_view_html;
    public $points_notification_texts;
    public $registration_notification_texts;
    public $log_in_notification_texts;
    public $theme;
    public $primary_color;
    public $primary_color_light;
    public $primary_color_dark;
    public $secondary_color;
    public $secondary_color_dark;
    public $grey_color;
    public $black_color;
    public $white_color;
    public $hud_position;
    public $hud_position_left;
    public $hud_position_bottom;
    public $theme_css;
    public $hud_share_module;
    public $use_sign_up_popover;
    public $sign_up_popover_at_visit;
    public $visit_points;
    public $like_points;
    public $tweet_points;
    public $share_points;
    public $registration_points;
    public $log_in_points;
    public $google_plus_points;
    public $video_points;
    public $comment_points;
    public $incoming_visitor_points;
    public $twitter_follow_points;
    public $mobile;
    public $updated_at;
    public $created_at;
    public $badges;
    public $action_settings;
    public $logo;
    public $first_mission;
    public $levels;
    public $plan;

    public function __construct()
    {
        $this->points_notification_texts = [];
        $this->registration_notification_texts = [];
        $this->log_in_notification_texts = [];
        $this->badges = [];
        $this->action_settings = [];
        $this->levels = [];
    }
}