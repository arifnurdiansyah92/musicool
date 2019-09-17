<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Andev\Musicool\Models\Contact;
use Andev\Musicool\Models\Email;
use Andev\Musicool\Models\Phone;
class ContactController extends Controller
{
	protected $Contact;

    protected $helpers;

    public function __construct(Contact $Contact, Helpers $helpers)
    {
        parent::__construct();
        $this->Contact    = $Contact;
        $this->helpers          = $helpers;
    }

    public function index(){

        $data = $this->Contact->first()->toArray();
        $data["email"] = Email::where('is_main',1)->first()->email;
        $data["no_telfon"] = Phone::where('is_main',1)->first()->phone_number;

        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    public function show($id){

        $data = $this->Contact->where('id',$id)->first();

        if( count($data) > 0){

            return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);

        }

        $this->helpers->apiArrayResponseBuilder(400, 'bad request', ['error' => 'invalid key']);

    }

    public function store(Request $request){

    	$arr = $request->all();

        while ( $data = current($arr)) {
            $this->Contact->{key($arr)} = $data;
            next($arr);
        }

        $validation = Validator::make($request->all(), $this->Contact->rules);
        
        if( $validation->passes() ){
            $this->Contact->save();
            return $this->helpers->apiArrayResponseBuilder(201, 'created', ['id' => $this->Contact->id]);
        }else{
            return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
        }

    }

    public function update($id, Request $request){

        $status = $this->Contact->where('id',$id)->update($data);
    
        if( $status ){
            
            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->Contact->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->Contact->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    
}