<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;
use App\goods;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class VideoController extends Controller
{
    // ALL VIEW
    public function viewCreate(){
        return view('createvideo');
    }

    public function viewUpdate(){
        return view('updatevideo');
    }

    public function viewPlay($idvideo){
        $data = video::find($idvideo);

        return view('playvideo', ['data' => $data]);
    }

    public function createVideo(Request $request){
        //Pengolahan Video
        $idvideo = Uuid::generate();
        $title = $request->input('title');
    	$descriptions = $request->input('descriptions');
        $url = $request->input('url');
        $user = Auth::user()->id;

        parse_str(parse_url( $url, PHP_URL_QUERY ), $vars );
        $url = $vars['v'];

        DB::table('videos')->insert(
            ['id' => $idvideo, 'file' => $title, 'url' => $url,'descriptions' => $descriptions, 'users_id' => $user]
        );

        //Pengolahan Goods
        $name = $request->input('name');
        $details = $request->input('details');
        $price = $request->input('price');
        
        for($i = count($name); $i>=1; $i--){
            $idgoods = Uuid::generate();
            DB::table('goods')->insert(
                ['id' => $idgoods, 'name' => $name[$i-1], 'details' => $details[$i-1],'price' => $price[$i-1], 'videos_id' => $idvideo]
            );
        }

        return redirect('/');
    }

    public function updatevideo(Request $request, $id){
        //Update Video
        $data = video::find($id);
        $title = $request->input('title');
    	$descriptions = $request->input('descriptions');
        $url = $request->input('url');

        parse_str(parse_url( $url, PHP_URL_QUERY ), $vars );
        $url = $vars['v'];
        
        DB::table('videos')
            ->where('id', $data->id)
            ->update(['file' => $title, 'url' => $url,'descriptions' => $descriptions]);

        //Update Goods
        $name = $request->input('name');
        $details = $request->input('details');
        $price = $request->input('price');
        
        for($i = count($name); $i>=1; $i--){
            DB::table('goods')
            ->where('id', $data->id)
            ->update(['name' => $name[$i-1], 'details' => $details[$i-1],'price' => $price[$i-1]]);
        }

        return redirect('/');
    }

    public function deleteVideo($id){
        video::destroy($id);
    
        return redirect('/');
    }
}
