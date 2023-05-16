<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Fabric;
use App\Models\Pictures;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index(){

        return view('website.index');
    }
    public function fabric(){

        return view('website.fabric');
    }
    public function fabricCategory(){

        return view('website.fabricCategory');
    }


    public function spung(){

        return view('website.spung');
    }
    public function rugs(){

        return view('website.rugs');
    }


    public function fabricType($fabric){

        $pageName = ucfirst($fabric . " " . "Fabric");

        $type = $fabric;
        if ($fabric == "Curtain"){
            $fabric = "Curtains";
        }

        $pictures = Fabric::withoutGlobalScopes()
            ->where('type', $fabric)
            ->get()
            ->groupBy('catalog_id');


        if($fabric == "inner"){
            $fabric = "Inner Fabric";
            $pictures = Fabric::withoutGlobalScopes()->where('category',$fabric)->get()->groupBy('catalog_id');
            return view('website.Fabricgallery',compact('pictures','pageName','type'));
        }
        if($fabric == "main"){
            $fabric = "Main Fabric";
            $pictures = Fabric::withoutGlobalScopes()->where('category',$fabric)->get()->groupBy('catalog_id');
            return view('website.Fabricgallery',compact('pictures','pageName','type'));
        }




        return view('website.Fabricgallery',compact('pictures','pageName'));
    }




    public function gallery($type, Request $request){


        if($type == "curtains"){
            $type = 'curtain';
        }

        $pictures = Pictures::withoutGlobalScopes()->where('type',$type)->get();

        if ($request->search){
            $pictures = Pictures::withoutGlobalScopes()->where('type',$type)->where('name',$request->search)->get();
        }


        $pageName = ucfirst($type. " " . "Style");

        return view('website.gallery',compact('pictures','pageName' ,'request','type'));
    }

    public function option($type){

        if($type == "Curtain"){
            $type = 'curtains';
        }
        $image1 = Settings::where('name',$type."1")->first();


        $image2 = Settings::where('name',$type."2")->first();

        $pageName = ucfirst($type . " " . "Style");

        return view('website.option',compact('pageName','type','image1','image2'));
    }

    public function inquire($type){

        $pageName = ucfirst($type . " " . "Style");

        $fabric_image = Fabric::withoutGlobalScopes()->get();
        $fabric_inner = Fabric::withoutGlobalScopes()->where('category','Inner Fabric')->get();
        $fabric_main = Fabric::withoutGlobalScopes()->where('category','Main Fabric')->get();
        $table_list = Pictures::withoutGlobalScopes()->where('type','table')->get();

        $cartage_image = Pictures::withoutGlobalScopes()->where('type','curtain')->get();
        $rugs_image = Pictures::withoutGlobalScopes()->where('type','rugs')->get();

        return view('website.inquire',compact('rugs_image','table_list','pageName','fabric_main','fabric_inner','type','fabric_image','cartage_image'));
    }

    public function getCatalog($type  , $category) {

        $catalogs = Fabric::where('type', $type)->distinct('catalog_id')->pluck('catalog_id');

        $catalogs = Catalog::find($catalogs);

        return view('website/partial/catalog',compact('catalogs' ,'category'));

    }

    public function getFabric($catalog_id, $category) {

        $fabrics = Fabric::where('catalog_id', $catalog_id)->where('type', '!=' ,'Curtains')->get();


        return view('website/partial/getFabric',compact('fabrics','category'));

    }






}
