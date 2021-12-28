<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Site;
use App\Models\Note;
use App\Models\Location;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function show($sites ){  

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
        return view('app.locations.show', ['sites' => $sites])->with('success', 'Double click to add a marker');
    }
    public function store(){
        $qty = request('qty') ? request('qty') : $qty = 4;
        // localStorage.setItem("qty", $qty);
        setcookie("qty", $qty, time() + (86400 * 30), "/");
        $location = request("location");
        $site = new Site ();
        $site->location = $location;
        $site->rating = request("rating");
        $site->x_coord = request("x_coord");
        $site->y_coord = request("y_coord");
        $site->save();

        $updated = date("Y-m-d H:i:s");
        $id = request('id');
        DB::update('update locations set sites_updated_at = ? where id = ?',[$updated,$location]);
        
        if( request("note"))
        {
            $note = new Note ();
            $note->note = request("note");
            $note->site = $site->id;
            $note->save();   
        }
        return redirect('/app/location/'.request("location").'?qty='.$qty)->with('success','Marker added');
    }
    public function destroy($id){
        $site = Site::findOrFail($id);
        $site->delete();
        $location =request('location');
        return redirect('/app/location/'.$location.'/')->with('success','Marker deleted');
    }
}
