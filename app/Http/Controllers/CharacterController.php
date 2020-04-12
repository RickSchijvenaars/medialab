<?php

namespace App\Http\Controllers;

use App\CharacterExpression;
use App\CharacterValue;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function postAPIData(Request $request){
        foreach ($request->api_data['expressions'] as $key => $expression){
            $fk = CharacterExpression::where('name', $key)->first();
            CharacterValue::create([
                'expression_id' => $fk->id,
                'value' => $expression
            ]);
        }

        $gender_id = CharacterExpression::where('name','gender')->first();

        if ($request->api_data['gender'] == 'male') {
            $gender = 0;
        }else{
            $gender = 1;
        }
        CharacterValue::create([
            'expression_id' => $gender_id->id,
            'value' => $gender
        ]);

        $age_id = CharacterExpression::where('name','age')->first();
        CharacterValue::create([
            'expression_id' => $age_id->id,
            'value' => $request->api_data['age']
        ]);

    }
}
