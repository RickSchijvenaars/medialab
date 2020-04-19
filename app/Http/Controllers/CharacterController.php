<?php

namespace App\Http\Controllers;

use App\CharacterExpression;
use App\CharacterValue;
use App\QrScanLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{

    public function index(){
        $values = CharacterValue::select(DB::raw('avg(value) as avg_val, expression_id'))
            ->groupBy('expression_id')
            ->whereNotIn('expression_id', [8,9])
            ->get();

        $maxValue = 0;
        foreach($values as $value) {
            if($value->avg_val > $maxValue) {
                $maxValue = $value->avg_val;
                $emotion_id = $value->expression_id;
            }
        }
    
        $emotion = CharacterExpression::find($emotion_id)->name;

        $genders = CharacterValue::where('expression_id', 8)->select('value')->get();
        $genderList = [];
        foreach ($genders as $value){
            array_push($genderList, intval($value->value));
        }

        $genderList = array_count_values($genderList);

        if(array_search(max($genderList), $genderList) == 0) {
            $gender = 'male';
        } else {
            $gender = 'female';
        }

        $age = CharacterValue::where('expression_id', 9)->select('value')->avg('value');        

        $location = QrScanLocation::withCount('scans')->orderBy('scans_count', 'desc')->first()->name;

        return view('index', compact('emotion', 'gender', 'location', 'age', 'values'));
    }

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
