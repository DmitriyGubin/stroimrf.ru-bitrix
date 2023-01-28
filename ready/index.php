<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("title", "Построенные проекты - БауАртЭстетика");
$APPLICATION->SetPageProperty("keywords", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("description", "Галерея готовых коттеджей. Срок строительства от 6 месяцев.");
$APPLICATION->SetTitle("Построенные проекты - БауАртЭстетика");
?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news", 
		"ready_houses", 
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
				0 => "BEST_OFFER",
				1 => "MATERIAL",
				2 => "TERRACE",
				3 => "AREA",
				4 => "POPULAR",
				5 => "PRICE",
				6 => "FLOORS",
				7 => "",
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
				0 => "MATERIAL",
				1 => "TERRACE",
				2 => "AREA",
				3 => "PRICE",
				4 => "FLOORS",
				5 => "",
			),
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "15",
			"IBLOCK_TYPE" => "catalog",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
			"LIST_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"LIST_PROPERTY_CODE" => array(
				0 => "BEST_OFFER",
				1 => "MATERIAL",
				2 => "TERRACE",
				3 => "AREA",
				4 => "POPULAR",
				5 => "PRICE",
				6 => "FLOORS",
				7 => "",
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
			"USE_FILTER" => "Y",
			"USE_PERMISSIONS" => "N",
			"USE_RATING" => "N",
			"USE_REVIEW" => "N",
			"USE_RSS" => "N",
			"USE_SEARCH" => "N",
			"USE_SHARE" => "N",
			"COMPONENT_TEMPLATE" => "ready_houses",
			"CACHE_NOTES" => "",
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
		<h2>Хотите увидеть коттеджи <br> своими глазами?</h2>
		<p>
			Запишитесь на экскурсию, заполнив простую 
			заявку. И наш менеджер перезвонит и запишет вас
			на просмотр домов.
		</p>
		<button class="buttonn pop_up_order">Записаться</button>
	</div> 
</div>

<style type="text/css">

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

	.right_area .right_fon p
	{
		text-align: center;
		font-family: "ManropeRegular", sans-serif;
		font-size: 33px;
		color: #fefefe;
		margin: 10px 0 10px 0;

	}

	.right_area .right_fon .buttonn
	{
		width: 40%;
		height: 70px;
		font-size: 24px;
	}
	/*Поправка*/

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
		cursor: pointer;
	}

	.buttonn:hover
	{
		background:#969696;
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
		/*font-size: 56px;*/
		font-size: 33px;
		font-family: "ManropeRegular", sans-serif;
		margin: 0px;
		line-height: 34px;
	}

	.right_area img
	{
		width: 100%;
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
		font-size: 24px;
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
	.formm .additionally input,
	.formm .form_material input
	{
		width: 35px;
		height: 35px;
		margin: 0 7px 0 0;
	}

	.formm .form_column_two,
	.formm .form_material
	{
		margin-left: 50px;
	}

	.formm .form_material .check_material
	{
		display: flex;
		flex-wrap: wrap;
	}

	.formm .check_material div
	{
		display: flex;
		align-items: center;
		width: 50%;
		margin-bottom: 28px;
	}

	.formm .check_material div:last-child
	{
		width: 100%;
	}

	/*************************************/
	.order
	{
		position: relative;
		margin-top: 60px;
		background-size: 100% auto;
		background-repeat: no-repeat;
		background-image: url("img/34.jpg");
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



	/******************медиа-запросы******************/
	/******Поправка***********/
	/******Заголовок*************/
	@media screen and (max-width: 1400px)
	{
		.right_area .phone h2
		{
			font-size: 20px;
		}

		.right_area .phone p
		{
			font-size: 16px;
		}

		.right_area .right_area_first_line
		{
			margin: 0;
		}

		.right_area .head_title
		{
			margin: 40px 0 40px 0;
		}

		.right_area .nav_chain
		{
			/*margin-bottom: 0px;*/
		}

		.right_area .head_title h1
		{
			font-size: 33px;
		}

	}

	@media screen and (max-width: 1200px)
	{
		.right_area .right_fon h2
		{
			font-size: 33px;
			line-height: 37px;
		}

		.right_area .right_fon p
		{
			font-size: 20px;
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
			line-height: 37px;
		}

		.right_area .right_fon p
		{
			font-size: 14px;
			margin: 5px 0 5px 0;
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

		.right_area .right_fon p
		{
			font-size: 12px;
			/*margin: 5px 0 5px 0;*/
		}

		.right_area .right_fon .buttonn
		{
			height: 25px;
			font-size: 12px;
		}
	}
	/*Поправка*/

	@media screen and (max-width: 1250px)
	{
		.right_area .head_title h1
		{
			font-size: 25px;
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

		.right_area .head_title h1
		{
			font-size: 20px;
			margin-bottom: 20px;
		}

		.right_area .head_title
		{
			margin-top: 2%;
			margin-bottom: 0px;
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




	@media screen and (max-width: 1530px)
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

		.formm .form_column_two,
		.formm .form_material
		{
			margin-left: 20px;
		}

		.formm .check_material div 
		{
			margin-bottom: 25px;
		}
	}

	@media screen and (max-width: 1310px)
	{
		.formm .area input, .formm .price input
		{
			width: 100px;
		}

		.formm .floor input, 
		.formm .additionally input, 
		.formm .form_material input
		{
			width: 25px;
			height: 25px;
		}
	}

	@media screen and (max-width: 1010px)
	{
		.formm
		{
			flex-direction: column;
			/*align-items: center;*/
		}

		.formm .form_column_two,
		.formm .floor, 
		.formm .additionally,
		.formm .form_material
		{
			margin: 20px 0 0 0;
		}

		.formm .area input, .formm .price input
		{
			width: 100px;
			height: 30px;
		}

		.formm .floor input, 
		.formm .additionally input,
		.formm .form_material input
		{
			width: 20px;
			height: 20px;
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

			.formm .check_material div
			{
				margin-bottom: 10px;
			}

			.formm .check_material div
			{
				width: 25%;
			}
		}

		@media screen and (max-width: 750px)
		{
			.formm .check_material div
			{
				width: 33.3%;
			}

			.formm .check_material div:nth-child(1)
			{
				order: 0;
			}

			.formm .check_material div:nth-child(2)
			{
				order: 3;
			}

			.formm .check_material div:nth-child(3)
			{
				order: 1;
			}

			.formm .check_material div:nth-child(4)
			{
				order: 2;
			}

			.formm .check_material div:nth-child(5)
			{
				order: 4;
				width: 50% !important;
			}
		}

		@media screen and (max-width: 540px)
		{
			.formm .check_material div
			{
				width: 50% !important;
			}

			.formm .check_material div:nth-child(5)
			{
				width: 100% !important;
			}
		}

		@media screen and (max-width: 430px)
		{
			.formm .check_label,
			.formm span
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
		/***************************/
		@media screen and (max-width: 1650px)
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

		@media screen and (max-width: 1250px)
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


		/*Отступы*/
		@media screen and (max-width: 750px)
		{
			.formm
			{
				margin: 20px 0 20px 0 !important;
			}

			.order
			{
				margin: 20px 0 0 0 !important;
			}

			.houses_list .house_block,
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
		}

		@media screen and (max-width: 750px)
		{
			.right_area_text
			{
				width: 95%;
				margin: 0 auto;
			}
		}









		/*Популярные дома поправка*/
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


		/*медиа запросы***********************/
		@media screen and (max-width: 750px)
		{
			.popular_houses
			{
				margin-bottom: 20px;
			}
		}

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
		}

	</style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>