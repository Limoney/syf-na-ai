<?php

namespace App\Controller;
use App\Repository\BuildingRepository;
use App\Repository\LocationRepository;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use App\Utility\Utils;

class MapController
{
    public function index()
    {
        $repo = new BuildingRepository();
        $buildings = $repo->findAll();
        $template = Utils::renderTemplate("map.php",["buildings" => $buildings]);
        echo $template;
    }

    public function viewBuilding($buildingId)
    {
        $buildingRepository = new BuildingRepository();
        $locationRepository = new LocationRepository();
        $building = $buildingRepository->findBy("id",$buildingId)[0];
        $test = [];
        $locations = $locationRepository->findBy("buildingId",$building->getId(),"floorNumber");
        // foreach ($locations as $location)
        // {
        //     if(!key_exists($location->getFloorNumber(),$test))
        //         $test[$location->getFloorNumber()] = [];
        //     $test[$location->getFloorNumber()][] = $location;
        // }
        // Utils::pprint($test);
        // die();
        $template = Utils::renderTemplate("building.php",["building" => $building,"locations" => $locations]);
        echo $template;
    }
}