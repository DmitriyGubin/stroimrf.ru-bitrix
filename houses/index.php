<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("title", "Проекты домов - БауАртЭстетика");
$APPLICATION->SetPageProperty("keywords", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("description", "Проекты домов. Срок строительства от 6 месяцев. Газобетон/кирпич.");
$APPLICATION->SetTitle("Проекты домов - БауАртЭстетика");
?>
 
<!-- Cписок формы --> <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"houses_list_material", 
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
		"COMPONENT_TEMPLATE" => "houses_list_material",
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
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "TERRACE",
			1 => "AREA",
			2 => "PRICE",
			3 => "FLOORS",
			4 => "",
		),
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
			0 => "PRICE",
			1 => "",
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
		"SEF_FOLDER" => "/houses/",
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
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?> 

<!-- Популярные дома --> 
<!-- Фильтрация по популярным домам -->
<?
$pop = 9;
$arrFilter=array("=PROPERTY_POPULAR"=>$pop);
//$arrFilter=array("ID"=>217);
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"popular_houses", 
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
			0 => "TERRACE",
			1 => "AREA",
			2 => "POPULAR",
			3 => "PRICE",
			4 => "FLOORS",
			5 => "",
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
			0 => "TERRACE",
			1 => "AREA",
			2 => "POPULAR",
			3 => "PRICE",
			4 => "FLOORS",
			5 => "",
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
		"SEF_FOLDER" => "/houses/",
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
		"COMPONENT_TEMPLATE" => "popular_houses",
		"CACHE_NOTES" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?> 

<!-- Для банков --> 
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"banks",
	Array(
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
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("CREDIT_RATE","CREDIT_CONDITIONS",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "about_company",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("CREDIT_RATE","CREDIT_CONDITIONS",""),
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
		"VARIABLE_ALIASES" => Array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID")
	)
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
</div>
<div class="order">
	<div>
		<h2>Планируете строительство дома?</h2>
		<p>
			Мы готовы помочь вам с ответом и выбором оптимальной конфигурации вашего проекта. Для этого заполните простую форму и мы свяжемся с вами в ближайшее время.
		</p>
		<button class="buttonn pop_up_order">Оставить заявку</button>
	</div>
</div>


<style type="text/css">

	.buttonn
	{
		cursor: pointer;
	}

	/*Поправка*/
	.right_area .right_fon
	{
		width: 100%;
		position: relative;
	}

	.right_area .right_fon img
	{
		width: 100%;
	}

	.right_area .right_fon .content-box
	{
		width: 80%;
		height: 50%;
		position: absolute;
		top: 25%;
		left: 10%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.right_area .right_fon h2 
	{
		text-align: center;
		font-family: "ManropeRegular", sans-serif;
		font-size: 56.77px;
		color: #fefefe;
		margin: 0;
		line-height: 70px;
	}

	.right_area .right_fon .buttonn
	{
		margin-top: 20px;
		width: 30%;
		height: 70px;
		font-size: 24px;
	}
	/*Поправка*/

	.footerr
	{
		margin-top: 0px !important;
	}
	
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
		margin-left: calc(100%/1920*470);
		width: calc(100%/1920*1450);
	}


	.right_area .right_area_first_line
	{
		display: flex;
		justify-content: space-between;
		align-items: center;
		/*margin-top: 3%;*/
		margin-top: 0px;
	}

	.right_area .phone_plus_menu img
	{
		width: 7%;
		display: none;
	}

	.right_area .phone_plus_menu
	{
		display: flex;
		align-items: center;
		/*width: 50%;*/
	}

	.right_area .nav_chain
	{
		display: flex;
		padding: 0px;
	}

	.right_area .phone h2
	{
		font-size: 32px;
		line-height: 32px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0px;
	}

	.right_area .phone p
	{
		font-size: 24px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0px;
	}

	.right_area .phone
	{
		text-align: right;
		margin-top: 10px;
	}

	.right_area .head_title
	{
		display: flex;
		justify-content: space-between;
		margin: 40px 0 40px 0;
	}

	.right_area .head_title h1
	{
		font-size: 33px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0px;
		line-height: 40px;
		width: 45%;
	}

	.right_area .head_title p
	{
		font-size: 19.5px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0px;
		line-height: 25px;
		width: 53%;
	}

	.right_area
	{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.right_area_text
	{
	/*width: 90%;
	margin: 0 auto;*/
	margin: 0 10px 0 10px;
}

.formm 
{
	margin: 60px 0 60px 0;
	display: flex;
}

.formm .input_box
{
	display: flex;
}

.formm .input_box div
{
	position: relative;
}

.formm .input_box div span
{
	position: absolute;
	left: 15px;
	top: 8px;
	font-size: 15px;
	font-family: "ManropeRegular", sans-serif;
}

.formm .input_box div p
{
	position: absolute;
	z-index: 10;
	right: -4px;
	top: -20px;
	font-size: 25px;
}

.formm label
{
	font-size: 27px;
	font-family: "ManropeRegular", sans-serif;
	margin-bottom: 70px;
}

.formm span
{
	font-size: 27px;
	font-family: "ManropeRegular", sans-serif;
	margin-right: 20px;
}

.formm .area input,
.formm .price input
{
	width: 150px;
	height: 40px;
	border-top: 1px #84828e solid;
	border-bottom: 1px #84828e solid;
	border-left: none;
	border-right: none;
	font-size: 20px;
	font-family: "ManropeRegular", sans-serif;
	padding-left: 30%;
}

.formm .area #areaa,
.formm .price #pricee_1
{
	border-left: 1px #84828e solid;
}

.formm .area #areaa_2,
.formm .price #pricee_2
{
	border-right: 1px #84828e solid;
}

.formm .floor,
.formm .additionally
{
	margin-top: 50px;
}

.formm .floor div,
.formm .additionally div
{
	display: flex;
	align-items: center;
}

.formm .floor input,
.formm .additionally input
{
	width: 35px;
	height: 35px;
	margin: 0 7px 0 0;
}

.formm .form_column_two
{
	margin-left: 50px;
}

/*******************/
.popular_houses
{
	margin-bottom: 30px;
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
	display: none;
	text-align: center;
	font-size: 14px;
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
	font-family: "ManropeRegular", sans-serif;
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

.titlee
{
	font-size: 33px;
	font-family: "ManropeRegular", sans-serif;
	margin: 0 0 40px 0;
}

.modify_tytle
{
	text-align: center;
	margin-bottom: 50px;
}

.form_houses .houses_list .house_block
{
	width: 31.5%;
	margin-bottom: 50px;
}
/***************************/
.ipoteka .ipoteka_list
{
	display: flex;
	justify-content: space-around;
	flex-wrap: wrap;
}

.ipoteka .ipoteka_block
{
	/*width: 32.5%;*/
	width: 30%;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	align-items: center;
	padding: 45px 10px 45px 10px;
	margin-bottom: 15px;
	/*box-shadow: 0 0 размытие размер_тени цвет; */
	box-shadow: 0px 0px 15px 5px #f3f3f3;
}

.ipoteka .ipoteka_block ul
{
	display: flex;
	flex-direction: column;
	align-items: center;
	list-style-type: square;
	padding: 0;
	list-style-position: inside;
	width: 70%;
}

.ipoteka .ipoteka_block ul li
{
	color: #4e7144;
	text-align: center;
}

.ipoteka .ipoteka_block ul span
{
	color: black;
	font-size: 12px;
	font-family: "ManropeRegular", sans-serif;
}

.ipoteka .ipoteka_block div
{
	display: flex;
	flex-direction: column;
	align-items: center;
}

.ipoteka .ipoteka_block img
{
	width: 80%;
}

.ipoteka .ipoteka_block h2
{
	margin: 0;
	font-size: 20px;
	font-family: "ManropeRegular", sans-serif;
}

.ipoteka .ipoteka_block div h2:nth-child(2)
{
	color: #4e7144;
	margin-top: 10px;
} 

.ipoteka_block button
{
	width: 55%;
	height: 40px;
	font-size: 14px;
	margin-top: 10px;
}

/*.ipoteka .ipoteka_list div:nth-child(2) img
{
	width: 50%;
	}*/

/*.ipoteka .ipoteka_list div:nth-child(3) img
{
	width: 50%;
	margin-top: 30px;
	margin-bottom: 20px;
	}*/



	.ipoteka .wrapp_ipoteka .ipoteka_block
	{
		width: 50%;
		margin: 0 auto;
	}

	/*Классы для slick-slidera*/

	.slick-prev:before, .slick-next:before
	{
		display: none !important;
	}

	.slider {
		position: relative;
		padding: 0px 20px; /*поля между стрелкой и краем слайдера*/
	}

	.slider .slick-arrow{
		position: absolute;
		/*top: 50%; /*выравнивание по вертикали*/
		/*margin: -15px 0 0 0;  /*корректировка  вертикального выравнивания*/
		/*z-index: 2; /*стрелки сверху картинок*/
		font-size: 0; /* убираем надпись на дефолтной стрелке*/
		width: 15px;  /*ширина стрелки*/
		height: 18px; /*высота стрелки*/
	}

	.slider .slick-arrow.slick-next{
		left: 97%;
		right: 0;
		background: url('../img/right_arrow.png') 0 0 / 50% no-repeat;
	}

	.slider .slick-arrow.slick-prev{
		left: 0; 
		background: url('../img/left_arrow.png') 0 0 / 50% no-repeat;
	}

	/*Классы для slick-slidera*/

	/*************************************/
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
	/*************************************/
	.order
	{
		position: relative;
		margin-top: 60px;
		background-size: 100% auto;
		background-repeat: no-repeat;
		background-image: url("../img/34.jpg");
		padding-top: 32%; /*небольшой лайф хак*/

		/*background-position: center;*/
		/*background-size: cover;*/
	}

	.order div
	{
		position: absolute;
		top: 20%;
		left: 30%;
	}

	.order h2
	{
		font-size: 56px;
		font-family: "ManropeRegular", sans-serif;
		color: #ffffff;
		margin: 0 0 20px 0;
		line-height: 60px;
	}

	.order p
	{
		font-size: 25px;
		font-family: "ManropeRegular", sans-serif;
		color: #ffffff;
		margin: 0 0 30px 0;
		width: 45%;
	}

	.order .buttonn
	{
		width: 340px;
		height: 62px;
		font-size: 24px;
		margin: 0px;
	}

	ul li a:hover
	{
		color:#4e7144 !important;
	}












	/*****************медиа-запросы*************************************************/
	/********Заголовки***********/
	@media screen and (max-width: 1400px)
	{
		.right_area .phone h2
		{
			font-size: 20px;
		}

		.right_area .phone p
		{
			font-size: 16px;
			/*line-height: 18px;*/
		}

		.right_area .right_area_first_line
		{
			margin-top: 0px;
		}

	/*.right_area .nav_chain
	{
		margin-top: 0px;
		}*/

		.right_area .head_title p
		{
			font-size: 14px;
		}
	}

	@media screen and (max-width: 1400px)
	{
		.ipoteka .ipoteka_block ul
		{
			width: 90%;
		}

		.ipoteka_block button
		{
			width: 80% !important;
		}
	}

	@media screen and (max-width: 1050px)
	{
		.ipoteka .ipoteka_block
		{
			width: 32%;
		}

		.ipoteka .ipoteka_block ul
		{
			width: 100%;
		}
	}

	@media screen and (max-width: 1250px)
	{
		.right_area .head_title h1
		{
			font-size: 25px;
		}
	}
	/******Поправка***********/
	@media screen and (max-width: 1200px)
	{
		.right_area .right_fon h2
		{
			font-size: 33px;
			line-height: 37px;
		}

		.right_area .right_fon .buttonn
		{
			height: 50px;
			font-size: 16px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.right_area .right_fon h2
		{
			font-size: 22px;
			line-height: 24px;
		}

		.right_area .right_fon .buttonn
		{
			height: 30px;
			font-size: 14px;
		}
	}

	@media screen and (max-width: 310px)
	{
		.right_area .right_fon h2
		{
			font-size: 17px;
			line-height: 20px;
		}

		.right_area .right_fon .buttonn
		{
			height: 25px;
			font-size: 12px;
		}
	}

	@media screen and (max-width: 500px)
	{
		.right_area .right_fon .buttonn
		{
			width: 50%;
		}
	}

	/*Попрака*/

	@media screen and (max-width: 1000px)
	{
		.titlee
		{
			font-size: 18px;
		}
	}

	@media screen and (max-width: 800px)
	{
		.right_area .head_title,
		.right_area .right_area_first_line
		{
			flex-direction: column;
		}

		.right_area .head_title h1
		{
			margin-bottom: 3%;
			width: 100%;
		}

		.right_area .nav_chain
		{
			order: 1;

		}

		.right_area .phone_plus_menu
		{
			width: 100%;
			order: 0;
			justify-content: flex-end;
		}

		.right_area .nav_chain
		{
			width: 100%;
			justify-content: flex-start;
		}

		.right_area .head_title p
		{
			margin-bottom: 20px;
		}

		.right_area .head_title p
		{
			width: 100%;
		}
	}

	@media screen and (max-width: 750px)
	{
		.headd .right_area
		{
			width: 100%;
		}

		.headd .phone_plus_menu img
		{
			display: block;
		}

		.right_area .phone_plus_menu
		{
			justify-content: space-between;
		}

		/*********/
		.right_area .phone h2
		{
			font-size: 16px;
		}

		.right_area .phone p
		{
			font-size: 12px;
		}

		.right_area .head_title h1
		{
			font-size: 20px;
			margin-bottom: 20px;
		}

		.right_area .head_title p
		{
			font-size: 12px;
		}

		/************Поправка на мобилку***************/
		.right_area .desctop_head
		{
			display: none;
		}

		.right_area .desctop_head
		{
			display: none;
		}

		.right_area .mobile_head
		{
			display: block !important;
			box-shadow: 0px 0px 15px 5px #f3f3f3;
		}

		.right_area .mobile_head .phone_plus_menu
		{
			width: 95%;
			margin: 5px auto;
		}
		/************Поправка на мобилку***************/
	}

	/*********************/
	@media screen and (max-width: 1250px)
	{
		.formm label,
		.formm span
		{
			font-size: 16px;
		}

		.formm .area input, .formm .price input
		{
			font-size: 14px;
		}

		.formm .input_box div span 
		{
			top: 12px;
			font-size: 10px;
		}
	}

	@media screen and (max-width: 900px)
	{
		.formm .area input, .formm .price input
		{
			width: 100px;
		}
	}

	@media screen and (max-width: 730px)
	{
		.formm
		{
			flex-direction: column;
			/*align-items: center;*/
		}

		.formm .area input, .formm .price input
		{
			width: 150px;
		}

		.formm .form_column_two,
		.formm .floor, 
		.formm .additionally
		{
			margin: 20px 0 0 0;
		}

		.formm .area input, .formm .price input
		{
			width: 100px;
			height: 30px;
		}

		.formm .floor input, .formm .additionally input {
			width: 30px;
			height: 30px;
		}

		.formm .input_box div span 
		{
			top: 7px;
		}

		.formm .input_box div p
		{
			top: -21px;
			font-size: 20px;
		}

	/*.formm .floor
	{
		display: none;
		}*/

		.formm .form_column_two
		{
			margin-top: 10px;
		}

	/*.formm .hideee
	{
		display: block !important;
		margin-left: 10%;
		}*/

		.formm .terrace_and_floors
		{
			display: flex;
		}
	}

	@media screen and (max-width: 430px)
	{
		.formm .check_label
		{
			font-size: 10px;
		}

		.formm label
		{
			font-size: 12px;
		}


		.formm .terr
		{
			margin-right: 0px !important;
		}
	}

	@media screen and (max-width: 330px)
	{
		.formm .terrace_and_floors
		{
			flex-direction: column;
		}

		.formm .hideee
		{
			margin: 10px 0 0 0;
		}
	}

	/*******************************/
	@media screen and (max-width: 1000px)
	{
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

	@media screen and (max-width: 560px)
	{
		.houses_list .house_block
		{
			width: 100%;
		}

		.all_popular_proj
		{
			display: block;
		}

		.modify_tytle
		{
			text-align: left;
		}
	}
	/*********************/
	@media screen and (max-width: 1420px)
	{
		.ipoteka_block button
		{
			width: 60%;
		}
	}

	@media screen and (max-width: 1100px)
	{
		.ipoteka_block button
		{
			font-size: 12px;
			width: 70%;
		}
	}

	@media screen and (max-width: 1000px)
	{
		.ipoteka .ipoteka_block
		{
			width: 40%;
		}

		.ipoteka .ipoteka_list
		{
			justify-content: space-around;
		}
	}

	@media screen and (max-width: 1330px)
	{
		.ipoteka_block button
		{
			width: 60%;
		}
	}

	@media screen and (max-width: 1006px)
	{
		.ipoteka_block button
		{
			width: 70%;
		}

	/*.ipoteka .ipoteka_list div:nth-child(2) img
	{
		width: 60%;
		}*/
	}

	@media screen and (max-width: 750px)
	{
		.ipoteka .desctop-ipoteka-list
		{
			display: none;
		}

		.ipoteka .mobile-ipoteka-list
		{
			display: block !important;
		}

		.ipoteka .mobile-ipoteka-list .ipoteka_block
		{
			width: 70%;
			min-height: 500px;
			/*margin: 0px;*/
		}

		.ipoteka .wrapp_ipoteka
		{
			padding: 10px 0 10px 0;
		}

		.ipoteka .mobile-ipoteka-list .ipoteka_block img
		{
			margin: 0px !important;
		}

		.ipoteka .ipoteka_block ul span
		{
			margin-left: -5px;
		}

		.ipoteka .ipoteka_block div
		{
			padding: 0 30px 0 30px;
		}
	}

	@media screen and (max-width: 500px)
	{
		.ipoteka .ipoteka_list img
		{
			/*width: 40% !important;*/
		}

		.ipoteka .ipoteka_block ul span
		{
			font-size: 10px;
		}

		.ipoteka .ipoteka_block div h2
		{
			font-size: 14px;
		}

		.ipoteka .mobile-ipoteka-list .ipoteka_block
		{
			width: 90%;
			/*margin: 0px;*/
		}

		.ipoteka_block button
		{
			font-size: 10px;
		}

		.ipoteka .mobile-ipoteka-list .ipoteka_block
		{
			min-height: 430px;
		}

		.ipoteka .wrapp_ipoteka .ipoteka_block
		{
			padding: 30px 0 30px 0;
		}
	}

/*@media screen and (max-width: 750px)
{
	.ipoteka .ipoteka_list
	{
		flex-direction: column;
		align-items: center;
	}

	.ipoteka .ipoteka_block
	{
		width: 60%;
		margin-bottom: 30px;
	}
}

@media screen and (max-width: 450px)
{
	.ipoteka .ipoteka_block
	{
		width: 100%;
	}
	}*/

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
	/******************/
	@media screen and (max-width: 1500px)
	{
		.order div
		{
			top: 5%;
		}

		.order h2
		{
			font-size: 33px;
		}

		.order p
		{
			font-size: 18px;
		}
	}

	@media screen and (max-width: 1100px)
	{
		.order h2
		{
			font-size: 20px;
			line-height: 25px;
			margin-bottom: 10px;
		}

		.order p
		{
			font-size: 14px;
			margin-bottom: 10px;
		}

		.order .buttonn
		{
			width: 200px;
			height: 40px;
			font-size: 14px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.order
		{
			background-image: url("../img/34_mobile.png");
			padding-top: 92%;
		}

		.order div
		{
			top: 0;
			left: 5%;
			width: 90%;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.order h2
		{
			text-align: center;
		}

		.order p
		{
			width: 100%;
			text-align: center;
		}

		.order .buttonn
		{
			margin: 0 auto;
		}
	}

	@media screen and (max-width: 295px)
	{
		.order h2
		{
			font-size: 16px;
		}

		.order p
		{
			font-size: 12px;
			line-height: 14px;
		}

	}


	/*Отступы*/
	@media screen and (max-width: 750px)
	{
		.formm,
		.modify_tytle,
		.order
		{
			margin: 20px 0 20px 0 !important;
		}

		.order
		{
			margin: 20px 0 0 0 !important;
		}

		.form_houses .houses_list .house_block,
		.modify_tytle,
		.houses_list .house_block,
		.popular_houses,
		.ipoteka .ipoteka_block
		{
			margin-bottom: 20px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.right_area .phone h2
		{
			line-height: 17px;
		}

		.wrapp_img
		{
			width: 90% !important;
			margin: 0 auto;
		}

		.right_area_text,
		.right_area .right_fon
		{
			width: 95% !important;
			margin: 0 auto;
		}
	}

</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

