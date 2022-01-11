<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Site;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index($sites ){  

        $qty = request('qty') ? request('qty') : $qty = 4;
        // localStorage.setItem("qty", 4);
        setcookie("qty", $qty, time() + (86400 * 30), "/");
        $sites = DB::table('sites')
        ->select('sites.id as siteid', 'notes.note', 'notes.id AS noteid', 'sites.updated_at','sites.rating', 'sites.x_coord', 'sites.y_coord', 'locations.url', 'locations.name', 'locations.id')
        ->rightJoin('locations', 'locations.id', '=', 'sites.location')
        ->leftJoin('notes', 'notes.site', '=', 'sites.id')
        ->where([
                ['locations.id', '=',$sites],
                ['locations.user', '=', Auth::id()],
            ])
        ->whereNotNull('locations.id')
        ->orderBy('sites.id', 'desc')
        ->limit($qty)
        ->get();
        return view('app.stats.index', ['sites' => $sites])->with('success', 'Double click to add a marker');
    }
}
