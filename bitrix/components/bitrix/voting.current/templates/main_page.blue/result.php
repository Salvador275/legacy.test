<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?><?$APPLICATION->IncludeComponent("bitrix:voting.result", "main_page", 
	array(
		"VOTE_ID" => $arResult["VOTE_ID"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"PERMISSION" => $arParams["PERMISSION"],
		"ADDITIONAL_CACHE_ID" => $arResult["ADDITIONAL_CACHE_ID"],
		"THEME" => "blue",
		"VOTE_ALL_RESULTS" => $arParams["VOTE_ALL_RESULTS"],
	),
	($this->__component->__parent ? $this->__component->__parent : $component)
);
?>
