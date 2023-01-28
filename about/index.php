<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("title", "БауАртЭстетика - Построим дом Вашей мечты!");
$APPLICATION->SetPageProperty("keywords", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("description", "Проекты домов. Срок строительства от 6 месяцев. Газобетон/кирпич.");
$APPLICATION->SetTitle("БауАртЭстетика - Построим дом Вашей мечты!");
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"about_company",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
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
		"PROPERTY_CODE" => array(0=>"additional_text",1=>"number_houses",2=>"number_years",3=>"number_projects",4=>"number_employees",5=>"main_text",6=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
	);?>


<style type="text/css">
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
		width: calc(100%/1920*1450);
		margin-left: calc(100%/1920*470);
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
		/*margin: 7% 0 7% 0;
		font-size: 50px;*/
		margin: 40px 0 40px 0;
		font-size: 33px;
		font-family: "ManropeRegular", sans-serif;
		line-height: 33px;
	}

	.right_area
	{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.wrapp_right_picture
	{
		margin: 0 10px 0 10px;
	}

	.wrapp_right_picture img
	{
		width: 100%;
	}

	.right_area .head_sub_title
	{
		font-size: 25px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0px;
	}

	.right_area p
	{
		font-size: 25px;
		font-family: "ManropeRegular", sans-serif;
		/*margin: 3% 0 3% 0;*/
		margin: 30px 0 30px 0;
	}

	.about_company
	{
		font-size: 25px;
		font-family: "ManropeRegular", sans-serif;
		/*margin: 70px 0 90px 0;*/
		margin: 30px 0 30px 0;
	}

	/***************************/
	.about_company_numbers
	{
		display: flex;
		justify-content: space-around;
		flex-wrap: wrap;
		/*margin-bottom: 90px;*/
		margin-bottom: 30px;
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
	/******************************/
	.order
	{
		position: relative;
		margin-top: 60px;
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
	.headd .mobile_img
	{
		display: none;
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

















	/********************медиа******************/


	@media screen and (max-width: 1000px)
	{
		.titlee
		{
			font-size: 18px;
		}
	}



	@media screen and (max-width: 800px)
	{
		.right_area .right_area_first_line
		{
			flex-direction: column;
		}

		/*.right_area .head_title
		{
			margin-bottom: 8%;
		}*/

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

	/*************Заголовки****************/
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

		.right_area .head_title
		{
			font-size: 33px;
			margin: 40px 0 40px 0;
		}

		/*.right_area .nav_chain
		{
			margin-bottom: 0px;
		}*/
	}

	@media screen and (max-width: 1250px)
	{
		.right_area .head_title 
		{
			font-family: "ManropeRegular", sans-serif;
			line-height: 40px;
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

	/*****************************/
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
			/*background-image: url("img/34.png");*/
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

	@media screen and (max-width: 1250px)
	{
		.right_area .head_sub_title,
		.right_area p
		{
			font-size: 16px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.headd .mobile_img
		{
			display: block !important;
			width: 100%;
		}

		.headd .desctop_img
		{
			display: none !important;
		}
	}

	@media screen and (max-width: 500px)
	{
		.right_area .head_sub_title,
		.right_area p
		{
			font-size: 12px;
		}
	}

	/*************************/
	@media screen and (max-width: 1250px)
	{
		.about_company
		{
			font-size: 16px;
		}
	}

	@media screen and (max-width: 500px)
	{
		.about_company
		{
			font-size: 12px;
		}
	}

	@media screen and (max-width: 750px)
	{
		.about_company
		{
			margin-top: 15px;
		}

		.about_company,
		.about_company_numbers
		{
			margin-bottom: 20px;
		}

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

		.wrapp_right_picture
		{
			width: 95%;
			margin: 0 auto;
		}
	}
</style>




	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>