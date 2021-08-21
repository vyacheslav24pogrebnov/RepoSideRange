function addSizeRange($strSize){
    $arSize = explode(' ',  trim($strSize));
    $arSizeNew = [];
    if(count($arSize) == 2 && $arSize[1] - $arSize[0] < 10){
        for ($i = $arSize[0]; $i < $arSize[1] + 1; $i++) { 
            $arSizeNew[] = $i;
        }
    }elseif($arSize[1] - $arSize[0] > 10 || count($arSize) == 1){
        $arSizeNew = [];
    }

    return $arSizeNew;
}
