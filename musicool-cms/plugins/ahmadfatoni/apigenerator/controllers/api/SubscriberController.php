<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Andev\Musicool\Models\Subscriber;
use Validator;
class SubscriberController extends Controller
{
    protected $Subscriber;

    protected $helpers;

    public function __construct(Subscriber $Subscriber, Helpers $helpers)
    {
        parent::__construct();
        $this->Subscriber    = $Subscriber;
        $this->helpers          = $helpers;
    }

    
    public function index(){ 
        $data = $this->Subscriber->select('email','status')->get()->toArray();
        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    
    public function show($id){ 
        $data = $this->Subscriber->select('email','status')->where('id', '=', $id)->first();
        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    public function store(Request $request){

        $arr = $request->all();
        while ( $data = current($arr)) {
            $this->Subscriber->{key($arr)} = $data;
            next($arr);
        }

        $validation = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
                'unique:andev_musicool_subscribers,email'
            ]
        ]);
        
        if( $validation->passes() ){
            $this->Subscriber->save();
            return $this->helpers->apiArrayResponseBuilder(201, 'created', $this->Subscriber->toArray());
        }else{
            return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
        }

    }

    public function update($id, Request $request){

        $status = $this->Subscriber->where('id',$id)->update($data);
    
        if( $status ){
            
            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->Subscriber->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->Subscriber->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    
}
