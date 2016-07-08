<?php


namespace Mafzst\CaptainUp;


use Mafzst\CaptainUp\Entity\Action;
use Mafzst\CaptainUp\Entity\Application;
use Mafzst\CaptainUp\Entity\Badge;
use Mafzst\CaptainUp\Entity\Level;

class Parser
{
    public static function parseApp($data)
    {
        $application = new Application();
        self::hydrateObject($application, $data);

        foreach ($application->badges as $i => $badge) {
            $application->badges[$i] = self::parseBadge($badge);
        }

        foreach ($application->levels as $i => $level) {
            $application->levels[$i] = self::parseLevel($level);
        }

        foreach ($application->action_settings as $i => $action) {
            $application->action_settings[$i] = self::parseAction($action);
        }

        return $application;
    }

    public static function parseBadge($data)
    {
        $badge = new Badge();
        self::hydrateObject($badge, $data);

        return $badge;
    }

    public static function parseLevel($data)
    {
        $level = new Level();
        self::hydrateObject($level, $data);

        return $level;
    }

    public static function parseAction($data)
    {
        $action = new Action();
        self::hydrateObject($action, $data);

        return $action;
    }

    private static function hydrateObject(&$object, $data)
    {
        $existingProperties = array_keys(get_object_vars($object));
        $givenProperties = array_keys(get_object_vars($data));

        foreach ($givenProperties as $i => $property) {
            if (!in_array($property, $existingProperties)) continue;

            $index = array_search($property, $existingProperties);
            $var = $existingProperties[$index];

            $object->$var = $data->$property;
        }
    }
}