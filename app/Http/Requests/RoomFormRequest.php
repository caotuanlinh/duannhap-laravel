<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RoomFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'room_no'=>[
                'required',
                Rule::unique('flights_rooms')->ignore($this->id) // check trùng các bản ghi khác trừ chính nó 
            ],
            'floor'=>'required|numeric|min:1',
            'price'=>'required|numeric|min:1',
            'uploadfile'=>'mimes:jpg,bmp,png',

        ];
    }
    public function messages()
    {
        return [
            'room_no.required'=>'Hãy nhập số phòng',
            'room_no.unique'=>'Số phòng đã tồn tại',
            'floor.required'=>'Hãy nhập tên tầng',
            'floor.numeric'=>'Tầng phải là số',
            'floor.min'=>'Tầng thấp nhất là 1',
            'price.required'=>'Hãy nhập giá phòng',
            'price.numeric'=>'Giá phòng phải là số',
            'price.min'=>'Giá phòng thấp nhất là 1',
            'uploadfile.mimes'=>'Ảnh chỉ nhận đuôi :jpg,bmp,png'
        ];
    }
}
