<?php

namespace App\MyClasses;

use App\Hashtag;

class SearchHashTag
{
    public function searchHashTags($inputText)
    {
        $outputArray=[];
        
        $text = explode(" ", $inputText);

        for ($i = 0; $i < count($text); $i++) {
            if (strpbrk($text[$i], '#') && $text[$i][0] == '#') {
                array_push($outputArray, $text[$i]);
            }
        }
        return array_values(array_unique($outputArray));
    }
    
    
    public function createHashModels($inArr, $post_id)
    {
        for ($i = 0; $i < count($inArr);$i ++) {
            $m_model = Hashtag::firstOrNew([
                'hash_name' => $inArr[$i]
            ]);
            $m_model->save();

                
            $m_model->posts()->attach($post_id);
        }
    }
}


//
