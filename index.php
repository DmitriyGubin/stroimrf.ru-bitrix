<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("title", "БауАртЭстетика - Построим дом Вашей мечты!");
$APPLICATION->SetPageProperty("keywords", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("description", "Проекты домов. Срок строительства от 6 месяцев. Газобетон/кирпич."); 
$APPLICATION->SetTitle("БауАртЭстетика - Построим дом Вашей мечты!"); ?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"about_company_main_page",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "5",
			"IBLOCK_TYPE" => "about_company",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("NUMBER_HOUSES", "NUMBER_YEARS", "NUMBER_PROJECTS", "NUMBER_EMPLOYEES", "MAIN_PAGE_PICTURE", ""),
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>

	<!-- О наших домах -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"about_our_houses",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "8",
			"IBLOCK_TYPE" => "about_company",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("", "OUR_HOUSES_GALLERY_DESCTOP", "OUR_HOUSES_GALLERY_MOBILE"),
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>


	<!-- Фильтрация по популярным домам -->
	<?
	$pop = 9;
	$arrFilter=array("=PROPERTY_POPULAR"=>$pop);
//$arrFilter=array("ID"=>217);
	?>

	<!-- Популярные дома -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news", 
		"popular_houses_on_main_page", 
		array(
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "Y",
			"AJAX_OPTION_JUMP" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
			"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
			"DETAIL_DISPLAY_TOP_PAGER" => "N",
			"DETAIL_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"DETAIL_PAGER_SHOW_ALL" => "Y",
			"DETAIL_PAGER_TEMPLATE" => "",
			"DETAIL_PAGER_TITLE" => "Страница",
			"DETAIL_PROPERTY_CODE" => array(
				0 => "MATERIAL",
				1 => "TERRACE",
				2 => "AREA",
				3 => "POPULAR",
				4 => "PRICE",
				5 => "FLOORS",
				6 => "",
			),
			"DETAIL_SET_CANONICAL_URL" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "6",
			"IBLOCK_TYPE" => "catalog",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
			"LIST_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"LIST_PROPERTY_CODE" => array(
				0 => "BEST_OFFER",
				1 => "POPULAR",
				2 => "PRICE",
				3 => "",
			),
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"NEWS_COUNT" => "6",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "appart_nav",
			"PAGER_TITLE" => "Новости",
			"PREVIEW_TRUNCATE_LEN" => "",
			"SEF_FOLDER" => "/",
			"SEF_MODE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_STATUS_404" => "Y",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"USE_CATEGORIES" => "N",
			"USE_FILTER" => "Y",
			"FILTER_NAME" => "arrFilter",
			"USE_PERMISSIONS" => "N",
			"USE_RATING" => "N",
			"USE_REVIEW" => "N",
			"USE_RSS" => "N",
			"USE_SEARCH" => "N",
			"USE_SHARE" => "N",
			"COMPONENT_TEMPLATE" => "popular_houses_on_main_page",
			"CACHE_NOTES" => "",
			"FILTER_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"FILTER_PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"SEF_URL_TEMPLATES" => array(
				"news" => "",
				"section" => "#SECTION_CODE_PATH#/",
				"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			)
		),
		false
	);?>

<!-- Для посёлков --> 
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"townships", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "about_company",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "TOWNSHIP_REF",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "townships",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>

<!--  Контакты -->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contacts_on_homepage", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "about_company",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ADRESS",
			1 => "COORDINATES",
			2 => "PHONE",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "contacts_on_homepage"
	),
	false
);?>

<div class="order">
	<h2 class="titlee modify_tytle">Остались вопросы? <br> Оставьте заявку на <br> бесплатную консультацию</h2>
	<button class="buttonn pop_up_order">Оставить заявку</button>
</div>

<style type="text/css">
	@font-face 
	{ 
		font-family: "ManropeRegular";
		src: url("../fonts/ManropeRegular/ManropeRegular.eot");
		src: url("../fonts/ManropeRegular/ManropeRegular.eot?#iefix")format("embedded-opentype"),
		url("../fonts/ManropeRegular/ManropeRegular.woff") format("woff"),
		url("../fonts/ManropeRegular/ManropeRegular.ttf") format("truetype");
		font-style: normal;
		font-weight: normal; 
	}

	* 
	{
		box-sizing: border-box;
	}

	body
	{
		margin: 0px;
	}

	.headd .right_area
	{
		/*width: calc(100%/1920*1280);*/
		width: calc(100%/1920*1450);
		margin-left: calc(100%/1920*470);
	}

	.headd .right_area .right_area_first_line h2
	{
		font-size: 39.29px;
		font-family: "ManropeRegular", sans-serif;
		color: #fefefe;
		text-align: right;
		margin: 0;
	}

	.headd .right_area .right_area_first_line div p
	{
		font-size: 27.89px;
		font-family: "ManropeRegular", sans-serif;
		color: #fefefe;
		text-align: right;
		margin: 0px;
	}


	.right_area_first_line
	{
		display: flex;
		justify-content: flex-end;
	}

	.right_area_first_line img
	{
		height: 5%;
		width: 5%;
		margin-top: 2%;
		display: none;
	}

	.headd .right_area .main_page_title
	{
		text-align: center;
		font-family: "ManropeRegular", sans-serif;
		font-size: 56.77px;
		color: #fefefe;
		margin: 0;
		line-height: 70px;
	}

	.headd .right_area .main_page_price
	{
		text-align: center;
		font-size: 33.63px;
		font-family: "ManropeRegular", sans-serif;
		color: #fefefe;
		margin: 0 0 calc(100%/1080*5) 0;
	}

	.right_area .buttonn
	{
		display: block;
		margin: 0 auto;
		/*height: 50px;*/
		padding: 5px 0;
		width: calc(100%/1280*300);
		border-radius: 10px;
		background: #4e7144;
		color: #fefefe;
		font-size: 24px;
		font-family: "ManropeRegular", sans-serif;
	}

	/*24,78*/
	.headd .right_area .right_area_last_line p
	{
		text-align: center;
		font-size: 24.78px;
		font-family: "ManropeRegular", sans-serif;
		color: #fefefe;
		margin: 0 0 calc(100%/1080*10) 0;
	}

	.right_area .community
	{
		display: flex;
		justify-content: center;
	}

	.right_area .community a
	{
		margin-right: 15px;
		width: calc(100%/1080*45);
	}

	.right_area .community img
	{
		width: 100%;
	}

	.headd .right_area
	{
		position: relative;
	}

	.headd .right_area .slider_img
	{
		width: 100%;
		min-height: 100vh;
	}

	.headd .right_area .content_box
	{
		width: 90%;
		height: 90%;
		position: absolute;
		top: 5%;
		left: 5%;

		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.slick-prev:before, .slick-next:before
	{
		background: red !important;
	}

	.slick-prev
	{
		left: 50px !important;
		z-index: 9999999999;
	}

	.slick-next
	{
		right: 50px !important;
		z-index: 9999999999;
	}

	/**********************************/
	.about_company
	{
		margin-top: 80px;
	}

	.about_company .about_company_text 
	{
		display: flex;
		margin-bottom: 60px
	}

	.about_company img
	{
		width:calc(100%/1790*513);
	}

	.about_company .textt
	{
		width:calc(100%/1790*1277);
		margin-left: 40px;
		display: flex;
		align-items: center;
	}


	.titlee
	{
		font-size: 33px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0 0 40px 0;
	}

	.modify_tytle
	{
		text-align: center;
		margin-bottom: 15px;
	}

	.about_company .textt div p:nth-child(2), .about_our_houses .textt div p:nth-child(2)
	{
		font-size: 16px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0 0 30px 0;
		font-weight: bold;
	}

	.about_company .textt div p:nth-child(3), .about_our_houses .textt div p:nth-child(4)
	{
		font-size: 16px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0;
	}

	.about_company_numbers
	{
		display: flex;
		justify-content: space-around;
		flex-wrap: wrap;
		margin-bottom: 60px;
	}

	.about_company_numbers .blokk
	{
		width: 18%;
		text-align: center;
	}

	.about_company_numbers .blokk h2
	{
		font-size: 100px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0;
		color: #91a78b;
		line-height: 110px;
	}

	.about_company_numbers .blokk span
	{
		font-size: 25px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0;
		border-bottom: 2px black solid;
		font-weight: bold;
	}

	.about_company_numbers .blokk p
	{
		font-size: 15px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0;
		margin-top: 10px;
		color: #484848;
	}

	/********************************************/
	.about_our_houses
	{
		display: flex;
		margin-bottom: 60px;
	}

	.about_our_houses .textt
	{
		width: 50%;
		display: flex;
		align-items: center;
		margin-right: 30px;
	}

	.about_our_houses .houses
	{
		width: 50%;
		display: flex;
		justify-content: space-between;
	}
	/*:nth-child(1)*/

	.about_our_houses .houses div
	{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		/*width: calc(100%/920*425);*/
		width: 48.2%;
	}

	/********************************/
	.popular_houses .four_menu li a 
	{
		font-size: 16px;
		font-family: "ManropeRegular", sans-serif;
		text-decoration: none;
		color: black;
	}

	.popular_houses .four_menu li
	{
		list-style-type: none;
		margin-right: 40px;
	}

	.popular_houses .four_menu
	{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		margin: 10px 0 40px 0;
		padding: 0;
	}

	.houses_list
	{
		display: flex;
		justify-content: space-around;
		flex-wrap: wrap;
	}

	.house_block .good_chois
	{
		position: absolute;
		right: 0px;
		top: 7%;
		width: 40%;
		height: 50px;
		background: #4e7144;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.house_block .good_chois h2
	{
		font-size: 15px !important;
		font-family: "ManropeRegular", sans-serif;
		color: #ffffff;
		margin: 0px;
	}


	.houses_list .house_block
	{
		position: relative;
		width: 48%;
		/*border: 2px #e6edeb solid;*/
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		margin-bottom: 30px;
	}

	.all_popular_proj
	{
		text-align: center;
		font-size: 16px;
		font-weight: bold;
		color: black;
		text-decoration: none;
		font-family: "ManropeRegular", sans-serif;
	}

	.houses_list .house_block img
	{
		width: 100%;
	}

	.houses_list .house_block h2
	{
		font-size: 20px;
		font-family: "ManropeRegular", sans-serif;
		text-align: center;
		margin: 10px 0 10px 0;
	}

	.houses_list .house_block p:nth-child(3)
	{
		font-size: 14px;
		font-family: "ManropeRegular", sans-serif;
		text-align: center;
		margin: 0px;
	}

	.houses_list .house_block p:nth-child(4)
	{
		font-size: 18px;
		font-family: "ManropeRegular", sans-serif;
		text-align: center;
		color: #4e7144;
		margin: 10px 0 10px 0;
		font-weight: bold;
	}

	.buttonn
	{
		display: block;
		margin: 0 auto;
		border-radius: 5px;
		background: #4e7144;
		color: #fefefe;
		border: 1px #4e7144 solid;
		transition: background 0.5s ease;
	}

	.buttonn:hover
	{
		background:#969696;
	}

	.modify_butt_houses_list
	{
		font-size: 16px;
		font-family: "ManropeRegular", sans-serif;
		width: 200px;
		height: 45px;
	}
	/******************************/
	.townships div
	{
		display: flex;
		justify-content: space-around;
		flex-wrap: wrap;
		align-items: center;
		margin-top: 50px;
	}

	.townships div img
	{
		width: 100%;
	}

	.townships div a:nth-child(1)
	{
		width: 5%;
	}

	.townships div a:nth-child(2)
	{
		width: 10%;
	}

	.townships div a:nth-child(3)
	{
		width: 11%;
	}

	.townships div a:nth-child(4)
	{
		width: 20%;
		height: 50%;
	}

	.townships div a:nth-child(5)
	{
		width: 20%;
		margin-bottom: 2%;
	}

	/****************************************/
	.contacts
	{
		display: flex;
		margin-top: 60px;
	}
	.contacts .adress
	{
		width: 45%;
		display: flex;
		align-items: center;
	}

	.contacts .adress h2
	{
		margin-bottom: 30px;
	}

	.contacts .adress div div
	{
		margin-bottom: 30px;
	}

	.contacts .map
	{
		width: 55%;
		height: 420px;
		/*background: green;*/
	}

	.contacts .adress p, .contacts .adress span
	{
		font-family: "ManropeRegular", sans-serif;
		font-size: 16px;
		margin: 0px;
	}

	.contacts .adress div div p:first-child,
	.contacts .adress .boldd
	{
		font-weight: bold;
	}

	/*************************/
	.order
	{
		margin-top: 60px;
	}

	.order h2
	{
		margin-bottom: 30px;
		line-height: 40px;
	}

	.order button
	{
		width: 250px;
		height: 60px;
		font-size: 20px;
		font-family: "ManropeRegular", sans-serif;
	}



	.hidden
	{
		display: flex;
		width: 100%
	}

	.hidden .img_1
	{
		width: 48.5%;
		margin-right: 3%;
	}

	.hidden .righttt
	{
		width: 48.5%;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.hidden .img_2
	{
		width: 100%;
		margin-bottom: 2%;
	}

	.hidden .img_3
	{
		width: 100%;
	}


	.buttonn
	{
		cursor: pointer;
	}

	ul li a:hover
	{
		color:#4e7144 !important;
	}







	/***********медиа запросы*****************/
	@media screen and (max-width: 1400px)
	{
		.headd .right_area .right_area_first_line div p,
		.headd .right_area .right_area_last_line p
		{
			font-size: 16px;
		}

		.headd .right_area .right_area_first_line div h2
		{
			font-size: 20px;
		}

		.headd .right_area .main_page_title
		{
			font-size: 33px;
			line-height: 40px;
		}

		.headd .right_area .main_page_price
		{
			font-size: 20px;
		}

		.right_area .buttonn
		{
			width: 25%;
			font-size: 12px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.headd .right_area .desctop-case
		{
			display: none;
		}

		.headd .right_area .mobile-case
		{
			display: block !important;
		}

		.headd .right_area
		{
			width: 100%;
		}

		.right_area_first_line
		{
			justify-content: space-between;
		}

		.headd .right_area .main_page_price
		{
			margin: 0 0 calc(100%/1080*10) 0;
		}

		.headd .right_area_first_line img
		{
			display: block;
			height: 50%;
			width: 10%;
		}

		/**/
		.headd .right_area .right_area_first_line div h2,
		.headd .right_area .main_page_price
		{
			font-size: 2.6vw;
		}

		.headd .right_area .right_area_first_line div p
		{
			font-size: 2.4vw;
		}

		.headd .right_area .main_page_title
		{
			font-size: 20px !important;
			line-height: 25px;
		}

		.headd .right_area .right_area_last_line p
		{
			font-size: 2.4vw;	
		}
		/**/

		.right_area .buttonn
		{
			width: 30%;
			height: 20%;
			border-radius: 5px;
			font-size: 14px;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 10%;
		}
	}

	@media screen and (max-width: 400px)
	{
		.headd .right_area .right_area_first_line div h2,
		.headd .right_area .main_page_price
		{
			font-size: 3.4vw;
		}

		.headd .right_area .right_area_first_line div p
		{
			font-size: 3.3vw;
		}

		.headd .right_area .main_page_title
		{
			font-size: 3.8vw;
		}

		.headd .right_area .right_area_last_line p
		{
			font-size: 2.8vw;
		}

		.right_area .buttonn
		{
			font-size: 12px;
		}

		.right_area .community a
		{
			width: 7%;
		}
	}


	@media screen and (max-width: 750px)
	{
		.content
		{
			width: 95% !important;
		}
	}

	@media screen and (max-width: 1335px)
	{
		.titlee
		{
			margin-bottom: 0px;
			font-size: 25px;
		}

		.about_company .textt div p:nth-child(2),
		.about_our_houses .textt div p:nth-child(2)
		{
			margin-bottom: 10px;
			font-size: 12px;
		}

		.about_company .textt div p:nth-child(3),
		.about_our_houses .textt div p:nth-child(4)
		{
			font-size: 12px;
		}

		.about_company .textt
		{
			margin-left: 15px;
		}

		.about_our_houses .textt
		{
			margin-right: 3px;
		}
	}

	
	@media screen and (max-width: 1000px)
	{
		.titlee
		{
			font-size: 18px;
		}

		.about_company .textt div p:nth-child(2), .about_our_houses .textt div p:nth-child(2),
		.about_company .textt div p:nth-child(3), .about_our_houses .textt div p:nth-child(4)
		{
			font-size: 10px;
		}

		.about_company .textt
		{
			width:calc(100%/1790*1277);
			margin-left: 10px;
			display: flex;
			align-items: center;
		}

		.titlee
		{
			margin-bottom: 20px;
		}

		.about_company .textt div p:nth-child(2), .about_our_houses .textt div p:nth-child(2)
		{
			margin-bottom: 20px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.about_company .about_company_text
		{
			flex-direction: column;
		}

		.about_company img
		{
			order: 1;
			width: 100%;
		}

		.about_company .textt
		{
			order: 0;
			margin-bottom: 10px;
			width: 100%;
		}

		.about_company .textt
		{
			margin-left: 0px;
		}
	}

	@media screen and (max-width: 1000px)
	{
		.about_company_numbers .blokk h2
		{
			font-size: 50px;
			line-height: 60px;
		}

		.about_company_numbers .blokk span
		{
			font-size: 15px;
		}

		.about_company_numbers .blokk p
		{
			font-size: 10px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.about_company_numbers .blokk
		{
			width: 50%;
			margin-bottom: 20px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.about_our_houses .houses
		{
			display: none;
		}

		.hidden img
		{
			display: block !important;
		}

		.about_our_houses .textt
		{
			width: 100%;
			margin-right: 0px;
		}

		.hidden
		{
			margin-bottom: 20px;
		}
	}

	/*******************************/
	@media screen and (max-width: 1000px)
	{
		.popular_houses .four_menu li a
		{
			font-size: 12px;
		}

		.houses_list .house_block h2
		{
			font-size: 14px;
		}

		.houses_list .house_block p:nth-child(3)
		{
			font-size: 10px;
		}

		.houses_list .house_block p:nth-child(4)
		{
			font-size: 12px;
		}

		.modify_butt_houses_list 
		{
			font-size: 10px;
			width: 120px;
			height: 30px;

		}

		.house_block .good_chois h2
		{
			font-size: 12px !important;
		}

		.house_block .good_chois
		{
			width: 60%;
			height: 30px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.popular_houses .four_menu
		{
			justify-content: flex-start;
		}

		.popular_houses .four_menu li
		{
			list-style-type: none;
			margin-right: 0px;
			width: 33%;
		}
	}

	@media screen and (max-width: 560px)
	{
		.houses_list .house_block
		{
			width: 100%;
		}

		/*.all_popular_proj
		{
			display: block;
			}*/

			.modify_tytle
			{
				text-align: left;
			}

		}

		@media screen and (max-width: 430px)
		{
			.popular_houses .four_menu li
			{
				width: 50%;
			}
		}

		/***************************/
		@media screen and (max-width: 750px)
		{
			.townships div a
			{
				margin-bottom: 20px;
			}
			.townships div a:nth-child(1)
			{
				width: 15%;
			}

			.townships div a:nth-child(2)
			{
				width: 35%;
			}

			.townships div a:nth-child(3)
			{
				width: 35%;
			}

			.townships div a:nth-child(4)
			{
				width: 45%;
				height: 50%;
			}

			.townships div a:nth-child(5)
			{
				width: 45%;
				margin-bottom: 12%;
			}

			.townships div
			{
				margin-top: 0px;
			}
		}
		/**************************************/

		@media screen and (max-width: 1100px)
		{
			.contacts .adress p, .contacts .adress span
			{
				font-size: 12px;
			}

			.adress_plus_coordinate a
			{
				font-size: 12px;
			}

		}

		@media screen and (max-width: 790px)
		{
			.contacts
			{
				flex-direction: column;
			}

			.contacts .adress
			{
				width: 100%;
				margin-right: 0px;
			}

			.contacts .map
			{
				width: 100%;
			}

			.contacts .adress p,
			.contacts .adress span
			{
				font-size: 12px;
			}
		}

		@media screen and (max-width: 1000px)
		{
			.order button
			{
				font-size: 14px;
				height: 50px;
				width: 150px;
			}

			.order h2
			{
				line-height: 30px;
				text-align: center !important;
			}
		}

		/*Отступы*/
		@media screen and (max-width: 750px)
		{
			.about_company,
			.modify_tytle,
			.order
			{
				margin-top: 20px !important;
			}

			.footerr
			{
				margin-top: 30px;
			}

			.contacts
			{
				margin-top: 0px !important;
			}

			.about_company_numbers,
			.about_our_houses
			{
				margin-bottom: 20px;
			}
		}

	</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>