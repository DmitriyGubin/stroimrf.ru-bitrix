<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("title", "Контакты - БауАртЭстетика");
$APPLICATION->SetPageProperty("keywords", "Коттеджи, БауАртЭстетика, строительство, дома.");
$APPLICATION->SetPageProperty("description", "Проекты домов. Срок строительства от 6 месяцев. Газобетон/кирпич.");
$APPLICATION->SetTitle("Контакты - БауАртЭстетика");
?>

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
		margin-top: 0px;
	}

	.headd .right_area
	{
		/*width: calc(100%/1920*1280);*/
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
		/*margin: 3% 0 5% 0;*/
		margin: 40px 0 40px 0;
		font-size: 33px;
		font-family: "ManropeRegular", sans-serif;
		line-height: 40px;
	}

	.mobile
	{
		display: none;
	}

	.right_area
	{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.wrap_text
	{
	/*width: 90%;
	margin: 0 auto;*/
	margin: 0 10px 0 10px;
}

.headd .contacts_text
{
	display: flex;
	justify-content: space-between;
}

.headd .contacts_text p,
.headd .contacts_text span
{
	font-size: 24px;
	font-family: "ManropeRegular", sans-serif;
	margin: 0;
}

.headd .boldd
{
	font-weight: bold;
}

.headd .sales_department,
.headd .phones
{
	width: 50%;
}

.headd .right_area .map
{
	/*width: 90%;*/
	margin: 10px 10px 0 10px;
	height: 420px;
	/*background: green;*/
}






/***********************медиа*************************/

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
/******Заголовки**********/
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
		margin-top: 0px;
	}

	.right_area .head_title
	{
		margin: 40px 0 40px 0;
	}
}

@media screen and (max-width: 1370px)
{
	.headd .contacts_text p, .headd .contacts_text span
	{
		font-size: 12px;
		margin-bottom: 0px;
	}

	.right_area .head_title 
	{
		font-family: "ManropeRegular", sans-serif;
		font-size: 25px;
	}

	.adress_plus_coordinate a
	{
		font-size: 12px;
	}

	/*.right_area .nav_chain
	{
		margin-bottom: 0px;
		}*/
}

	@media screen and (max-width: 750px)
	{
		.headd .right_area .map
		{
			height: 400px;
			margin: 20px 0 0 0;
			width: 100%;
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

	@media screen and (max-width: 550px)
	{
		.headd .contacts_text
		{
			flex-direction: column;

		}

		.headd .sales_department
		{
			margin-bottom: 20px;
		}

		.headd .contacts_text div
		{
			width: 100%;
		}
	}

	@media screen and (max-width: 750px)
	{
		.desctop
		{
			display: none;
		}

		.mobile
		{
			display: block !important;
		}

		.right_area .phone h2
		{
			line-height: 17px;
		}

		.wrap_text
		{
			width: 95%;
			margin: 0 auto;
		}
	}
</style>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>