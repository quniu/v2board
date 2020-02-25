<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TutorialSave extends FormRequest
{
    CONST RULES = [
        'title' => 'required',
        // 1:windows 2:macos 3:ios 4:android 5:linux 6:router
        'category_id' => 'required|in:1,2,3,4,5,6',
        'icon' => 'required',
        'steps' => 'required'
    ];
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return self::RULES;
    }

    public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'category_id.required' => '分类不能为空',
            'category_id.in' => '分类格式不正确',
            'icon.required' => '图标不能为空',
            'steps.required' => '教程步骤不能为空'
        ];
    }
}
