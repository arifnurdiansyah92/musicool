<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Andev\Musicool\Models\Gallery;
class GalleryController extends Controller
{
	protected $Gallery;

    protected $helpers;

    public function __construct(Gallery $Gallery, Helpers $helpers)
    {
        parent::__construct();
        $this->Gallery    = $Gallery;
        $this->helpers          = $helpers;
    }

    public function index(Request $req){
        $limit = $req->limit ?? 9;
        $data = $this->Gallery;
        if($req->category_id){
            $data = $data->where("category_gallery_id",$req->category_id);
        }
        $data = $data->paginate($limit)->toArray();
        return $data;
    }

    public function show($id){

        $data = $this->Gallery->where('id',$id)->first();

        if( count($data) > 0){

            return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);

        }

        $this->helpers->apiArrayResponseBuilder(400, 'bad request', ['error' => 'invalid key']);

    }

    public function store(Request $request){

    	$arr = $request->all();

        while ( $data = current($arr)) {
            $this->Gallery->{key($arr)} = $data;
            next($arr);
        }

        $validation = Validator::make($request->all(), $this->Gallery->rules);
        
        if( $validation->passes() ){
            $this->Gallery->save();
            return $this->helpers->apiArrayResponseBuilder(201, 'created', ['id' => $this->Gallery->id]);
        }else{
            return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
        }

    }

    public function update($id, Request $request){

        $status = $this->Gallery->where('id',$id)->update($data);
    
        if( $status ){
            
            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->Gallery->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->Gallery->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    
}