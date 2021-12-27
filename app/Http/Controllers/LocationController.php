<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Site;
use Session;
use Illuminate\Support\Facades\Gate;

class LocationController extends Controller
{
    public function index(){
        
        $user = Auth::user();

        $locations = DB::table('locations')
        ->select('locations.id', 'locations.name', 'locations.url', 'sites.updated_at')
        ->leftJoin('sites', 'locations.id', '=', 'sites.location')
        ->where('locations.user', '=', $user->id)
        ->groupBy('sites.location')
        ->orderBy('updated_at', 'asc')
        ->get();

        return view('app.locations.index',['locations'=> $locations ])->with('success', 'Add or choose a location');
    }    
    public function post(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image_name = time().'.'.$request->image->extension();  
        $path = Storage::disk('s3')->put('locations', $request->image);
        $image = str_replace('locations/','',$path);
        $path = Storage::disk('s3')->url($path);      
        $location = new Location ();
        $location->name = request("name");
        $location->url = url($path);
        $location->image = $image;
        $user = Auth::user();
        $location->user = $user->id;
        $location->save();
        return redirect()->back()
            ->with('success', 'Image uploaded successfully.')
        ; 
    }
    public function destroy($id){
        $location = Location::findOrFail($id);
        // $s3 = Storage::disk('s3');
        Storage::disk('s3')->delete('locations/'.$location->image);

        // $image = $location->image;
        // $s3->delete("locations/", $image);
        $location->delete();
        return redirect('/app/locations')->with('success','Location deleted');
    }
}
