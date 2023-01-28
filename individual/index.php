<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Коттеджи, БауАртЭстетика, строительство, дома");
$APPLICATION->SetPageProperty("title", "Индивидуальные проекты домов - БауАртЭстетика");
$APPLICATION->SetPageProperty("keywords", "Коттеджи, БауАртЭстетика, строительство, дома");
$APPLICATION->SetPageProperty("description", "Индивидуальные проекты домов. Срок строительства от 6 месяцев. Газобетон/кирпич.");
$APPLICATION->SetTitle("Индивидуальные проекты домов - БауАртЭстетика");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"individual_projects", 
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "XML_ID",
			1 => "NAME",
			2 => "TAGS",
			3 => "SORT",
			4 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
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
			0 => "",
			1 => "",
			2 => "",
			3 => "",
			4 => "",
			5 => "",
			6 => "",
			7 => "VISUALIZATION_EXAMPLES",
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
		"COMPONENT_TEMPLATE" => "individual_projects"
	),
	false
);?>

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

	.footerr
	{
		margin-top: 0px !important;
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
		/*box-shadow: 0 5px 4px -4px black;*/
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
		margin: 40px 0 40px 0;
		/*font-size: 50px;*/
		font-size: 33px;
		font-family: "ManropeRegular", sans-serif;
		line-height: 40px;
	}

	.right_area
	{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.wrapp_right_picture
	{
	/*width: 90%;
	margin: 0 auto;*/
	margin: 0 10px 0 10px;
}

/******************************/
.order
{
	position: relative;
	/*margin-top: 60px;*/
	background-size: 100% auto;
	background-repeat: no-repeat;
	background-image: url("img/34.jpg");
	padding-top: 32%; /*небольшой лайф хак*/
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

/**************/
.buttonn
{
	cursor: pointer;
}

ul li a:hover
{
	color:#4e7144 !important;
}

.buttonn:hover
{
	background:#969696;
}
/********************/
.examples
{
	margin-bottom: 40px;
}

.examples .img_box
{
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
}

.examples .img_box img
{
	width: 32%;
	margin-top: 20px;
}

.examples h2
{
	font-family: "ManropeRegular", sans-serif;
	font-size: 30px;
	margin: 25px 0 5px 0px;
}

/************************************/
.list h2
{
	font-family: "ManropeRegular", sans-serif;
	font-size: 30px;
	margin: 25px 0;
}

.list ul
{
	padding: 0px;
	margin: 0 0 0 20px;
}

.list ul li
{
	font-family: "ManropeRegular", sans-serif;
	font-size: 23px;
}

/*************/
.right_area p
{
	font-family: "ManropeRegular", sans-serif;
	font-size: 23px;
	/*margin: 0 0 60px 0;*/
	margin: 0 0 30px 0;
	line-height: 50px;
}

.right_area p span
{
	font-weight: bold;
}

.right_area h2
{
	font-family: "ManropeRegular", sans-serif;
	font-size: 30px;
	margin: 0 0 20px 0;
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
	background: url('img/right_arrow.png') 0 0 / 50% no-repeat;
}

.slider .slick-arrow.slick-prev{
	left: 0; 
	background: url('img/left_arrow.png') 0 0 / 50% no-repeat;
}

/*Классы для slick-slidera*/






/*******************************медиа запросы***************************/

@media screen and (max-width: 1000px)
{
	.titlee
	{
		font-size: 18px;
	}
}

/***Заголовки******/
@media screen and (max-width: 1400px)
{
	.right_area .head_title
	{
		font-size: 33px;
	}

	.right_area .phone h2
	{
		font-size: 20px;
	}

	.right_area .phone p
	{
		font-size: 16px;
		line-height: 18px;
	}

	.right_area .right_area_first_line
	{
		margin-top: 0px;
	}

	.right_area .nav_chain
	{
		/*margin-bottom: 0px;*/
	}

	.right_area .head_title
	{
		margin: 40px 0 40px 0;
	}
}

@media screen and (max-width: 800px)
{
	.right_area .right_area_first_line
	{
		flex-direction: column;
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

	.right_area .head_title
	{
		font-size: 20px;
		margin-bottom: 20px;
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

/*****************************/
@media screen and (max-width: 1250px)
{
	

	.right_area .head_title 
	{
		font-family: "ManropeRegular", sans-serif;
		font-size: 25px;
	}

	.right_area .nav_chain
	{
		margin-bottom: 0px;
	}
}

@media screen and (max-width: 750px)
{
	.headd .right_area .map
	{
		height: 200px;
		margin-top: 20px;
	}

	.right_area .phone h2
	{
		font-size: 16px;
	}

	.right_area .phone p
	{
		font-size: 12px;
	}

	.right_area .head_title
	{
		font-size: 20px;
		margin: 20px 0 20px 0;
	}
}

/************************/
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
		background-image: url("img/34_mobile.png");
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
/****************************/

/*************************/

@media screen and (max-width: 750px)
{
	.order
	{
		margin-top: 0px;
	}
}

/***************/

@media screen and (max-width: 750px)
{
	.right_area .phone h2
	{
		line-height: 17px;
	}
}

/******************************/
@media screen and (max-width: 1250px)
{
	.list h2
	{
		font-size: 20px;
	}

	.list ul li
	{
		font-size: 16px;
	}
}

@media screen and (max-width: 750px)
{
	.list h2
	{
		font-size: 18px;
	}
}

@media screen and (max-width: 500px)
{
	.list ul li 
	{
		font-size: 12px;
	}

	.list h2 
	{
		font-size: 16px;
	}
}

@media screen and (max-width: 1400px)
{
	.right_area p
	{
		margin-bottom: 20px;
	}
}

@media screen and (max-width: 1250px)
{
	.right_area p
	{
		font-size: 16px;
		line-height: 25px;
		/*margin-bottom: 30px;*/
	}

	.right_area h2
	{
		font-size: 20px;
	}
}

@media screen and (max-width: 750px)
{
	.right_area h2
	{
		font-size: 18px;
	}
}

@media screen and (max-width: 500px)
{
	.right_area p
	{
		font-size: 12px;
		margin-bottom: 20px;
		line-height: 18px;
	}

	.right_area h2
	{
		font-size: 16px;
	}
}
/***********************/
@media screen and (max-width: 1250px)
{
	.examples h2
	{
		font-size: 20px;
	}
}

@media screen and (max-width: 750px)
{
	.examples h2
	{
		font-family: "ManropeRegular", sans-serif;
		font-size: 18px;
	}

	.examples .img_box
	{
		display: none;
	}

	.examples .img_box_mobile
	{
		display: block !important;
	}

	.examples .wrapp_example img
	{
		width: 80%;
		margin: 0 auto;
	}

	.slick-dots 
	{ 
		width: 94% !important;
		text-align: left !important;
		display: flex !important; 
		justify-content: center !important;
	}

	.slick-dots li button:before 
	{
		font-size: 25px !important;
		color: #4e7144 !important;
	}
}

@media screen and (max-width: 500px)
{
	.examples h2 
	{
		font-size: 16px;
	}

	.examples .wrapp_example img
	{
		width: 100%;
	}

	.slick-dots 
	{ 
		width: 91% !important;
	}
}

@media screen and (max-width: 360px)
{
	.slick-dots 
	{ 
		width: 87% !important;
	}
}

@media screen and (max-width: 750px)
{
	.wrapp_right_picture
	{
		width: 95%;
		margin: 0 auto;
	}
}

</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>