<?php
namespace Market\Core\Services;

use Illuminate\Support\Facades\Validator;
use Market\WMS\Resources\Resource;

class CoreService {
    protected $resource;
    
    public function __construct(Resource $resource) {
        $this->resource = $resource;
    }
    public function list()
    {
        return $this->resource->model->all();
    }
    public function store(array $data)
    {

        $validator = Validator::make($data, $this->resource->rules());
         if ($validator->fails()) {
            return abort(422, 'Model data is not valid!');
        }
        $modelData = $validator->validated($data);
        $item =  $this->resource->model;
        $fields = $this->resource->fields();
        foreach($fields as $field){
            $key = $field->getKey();
            $model = $field->serve($item, $key, $modelData[$key]);
        }
        $item->save();
        return $item;
    }
    public function update($id, array $data)
    {
        $validator = Validator::make($data, $this->resource->rules());
         if ($validator->fails()) {
            return abort(422, 'Model data is not valid!');
        }
        $modelData = $validator->validated($data);
        $item = $this->resource->model->find($id);
        $fields = $this->resource->fields();
        foreach($fields as $field){
            $key = $field->getKey();
            $model = $field->serve($item, $key, $modelData[$key]);
        }
        $item->update();
        return $item;

    }
    public function delete($id)
    {
        $item = $this->resource->model->find($id);
        $item->delete();
        return [
            'result' => 'ok'
        ];
    }
}