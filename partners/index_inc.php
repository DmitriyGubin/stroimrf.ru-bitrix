<script type="text/javascript">
       jQuery(function($){
       $("#phonee").mask("+7(999) 999-9999");
       $("#agent_phonee").mask("+7(999) 999-9999");
       });
</script>
<style type="text/css">
    .footerr
    {
        margin-top: 0px;
    }

    .headd .right_area
    {
       /* width: calc(100%/1920*1280);*/
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
        /*margin: 4% 0 1% 0;*/
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
        /*width: 90%;
        margin: 0 auto;*/
        margin: 0 10px 0 10px;
    }

    /******************************/

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


    .main_filds
    {
        margin: 0px;
        font-size: 25px;
        font-family: "ManropeRegular", sans-serif;
    }

    /*******************/
    .order_form
    {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 10px;
    }

    .order_form .form_block 
    {
        margin-top: 3%;
        width: 48.5%;
    }

    .order_form .form_block label
    {
        font-size: 21px;
        font-weight: bold;
        font-family: "ManropeRegular", sans-serif;
    }

    .order_form .form_block input
    {
        width: 100%;
        height: 50px;
        padding-left: 20px;
        margin-top: 10px;
        font-size: 21px;
        font-family: "ManropeRegular", sans-serif;
    }

    .form_block p
    {
        margin: 7% 0 3% 0;
        font-size: 17px;
        font-family: "ManropeRegular", sans-serif;
    }

    .form_block p span
    {
        color: #4e7144;
    }

    .form_block textarea
    {
        margin-top: 10px;
        width: 100%;
        height: 150px;
        padding-left: 20px;
        font-size: 21px;
        font-family: "ManropeRegular", sans-serif;
    }

    .form_block .buttonn
    {
        width: 250px;
        height: 65px;
        margin: 25px 0 10px 0;
        font-size: 23px;
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

    /*****************медиа запросы*****************/

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

    /***********Заголовок******************/
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
    
    @media screen and (max-width: 1250px)
    {
        .right_area .head_title 
        {
            font-size: 25px;
            font-family: "ManropeRegular", sans-serif;
            line-height: 40px;
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

    /***************/

    @media screen and (max-width: 750px)
    {
        .right_area .phone h2
        {
            line-height: 17px;
        }
    }
    /******************************/

    @media screen and (max-width: 1300px)
    {
        .order_form .form_block #full_name_agentt
        {
            margin-top: 45px;
        }
    }

    @media screen and (max-width: 1250px)
    {
        .main_filds 
        {
            font-size: 20px;
        }

        .order_form .form_block label,
        .order_form .form_block input,
        .order_form .form_block textarea
        {
            font-size: 14px;
        }

        .order_form .form_block textarea
        {
            padding-top: 12px;
        }

        .order_form .form_block #full_name_agentt
        {
            margin-top: 10px;
        }

        .form_block p
        {
            font-size: 10px;
        }

        .form_block .buttonn
        {
            font-size: 16px;
            height: 50px;
            width: 200px;
        }
    }

     @media screen and (max-width: 875px)
     {
     	.order_form .form_block #full_name_agentt
     	{
     		margin-top: 33px;
     	}
     }

     @media screen and (max-width: 750px)
    {
        .order_form .form_block #full_name_agentt 
        {
            margin-top: 10px;
        }

        .main_filds 
        {
            font-size: 12px;
        }
    }

    @media screen and (max-width: 674px)
    {
        .order_form .form_block #full_name_agentt 
        {
            margin-top: 34px;
        }
    }

    @media screen and (max-width: 500px)
    {
        .order_form .form_block 
        {
            width: 100%;
        }

        .order_form .form_block #full_name_agentt 
        {
            margin-top: 10px;
        }

        .form_block p
        {
            display: none;
        }

        .order_form .mobile_record
        {
            display: block !important;
            font-size: 10px;
            font-family: "ManropeRegular", sans-serif;
        }

        .order_form .mobile_record span
        {
            color: #4e7144;
        }

        .order_form
        {
            margin-top: 10px;
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








<?
    if(CModule::IncludeModule("iblock"))
    { 
        $arFilter = Array("IBLOCK_ID"=>5, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");

        $res = CIBlockElement::GetList(
            Array(), //сортировка данных
            $arFilter, //фильтр данных
            false, //группировка данных
            false, // постраничная навигация
            Array()
        );

        $ob = $res->GetNextElement();
        $arResult_contacts[] = $ob->GetProperties();
        //debug($arResult_contacts);
    }
        
?>




<!-- Для мобильной версии -->
<div class="mobile_head" style="display: none">
    <div class="phone_plus_menu">
        <img id="show_menu" src="<?=SITE_TEMPLATE_PATH?>/img/menu.png">
        <div class="phone">
            <a href="tel:<?=$arResult_contacts[0]['PHONE']['VALUE']?>" style="text-decoration: none; color: black;">
                <h2><?=$arResult_contacts[0]['PHONE']['VALUE']?></h2>
            </a>
            <p><?=$arResult_contacts[0]['CITY']['VALUE']?></p>
        </div>
    </div>
</div>
<!-- Для мобильной версии -->

<div class="wrapp_right_picture">
    <div class="right_area_first_line">

        <ul class="nav_chain">
            <li> <a href="/">Главная&#8194;❯&#8194;</a> </li>
            <li> <a href="/about/">О компании&#8194;❯&#8194;</a> </li>
            <li> <a href="#">Партнёрам</a> </li>
        </ul>

        <div class="phone_plus_menu desctop_head">
            <!-- <img id="show_menu" src="img/menu.png"> -->
            <div class="phone">
                <a href="tel:<?=$arResult_contacts[0]['PHONE']['VALUE']?>" style="text-decoration: none; color: black;">
                    <h2><?=$arResult_contacts[0]['PHONE']['VALUE']?></h2>
                </a>
                <p><?=$arResult_contacts[0]['CITY']['VALUE']?></p>
            </div>
        </div>
    </div>

    <h1 class="head_title">Если вы хотите стать нашим партнером, заполните простую форму!</h1>
    <p class="main_filds">
        Поля отмеченные звёздочкой (*) обязательны для заполнения.
    </p>

    <form class="order_form" method="post" action="">
        <div class="form_block">
            <label for="full_name_clientt">Укажите ФИО клиента*</label>
            <br>
            <input placeholder="ФИО клиента" id="full_name_clientt" name="full_name_client" type="text"/>
        </div>

        <div class="form_block">
            <label for="phonee">Укажите телефон*</label>
            <br>
            <input placeholder="+7 (999) 999 99 99" id="phonee" name="phone" type="text"/>
        </div>

        <div class="form_block">
            <label for="agencyy">Укажите название агенства недвижимости*</label>
            <br>
            <input placeholder="Впешите название" id="agencyy" name="agency" type="text"/>
        </div>

        <div class="form_block">
            <label for="full_name_agentt">Укажите ФИО агента*</label>
            <br>
            <input placeholder="Впишите ФИО агента" id="full_name_agentt" name="full_name_agent" type="text"/>
        </div>

        <div class="form_block">
            <label for="agent_phonee">Укажите телефон агента*</label>
            <br>
            <input placeholder="+ 7 (999) 999 99 99" id="agent_phonee" name="agent_phonee" type="text"/>
        </div>

        <div class="form_block">
            <label for="emailll">Укажите e-mail агента</label>
            <br>
            <input placeholder="Впишите почту" id="emailll" name="emaill" type="email"/>
        </div>

        <div class="form_block">
            <label for="objectt">Впишите объект</label>
            <br>
            <input placeholder="Объект" id="objectt" name="object" type="text"/>
            <p>
                Отправляя эту форму, вы уведомляете БауАртЭститику 
                о клиенте агента. Оставленное вами уведомление будет
                отправлено в отдел продаж. Клиент закрпеляется за агентом
                на срок до 60 дней при бронировании и на 30 дней консультации.Заполняя данное обращение, вы <span> соглашаетесь на
                обработку персональных данных.</span>
            </p>
        </div>

        <div class="form_block">
            <label for="objectt">Комментарий</label>
            <br>
            <textarea id="comments" name="coments" placeholder="Бронь, консультация, номер паспорта"></textarea>
            <button id="send-order-partners" class="buttonn">Отправить</button>
        </div>

        <div class="mobile_record" style="display: none;">
            <p>
                Отправляя эту форму, вы уведомляете БауАртЭститику 
                о клиенте агента. Оставленное вами уведомление будет
                отправлено в отдел продаж. Клиент закрпеляется за агентом
                на срок до 60 дней при бронировании и на 30 дней консультации.Заполняя данное обращение, вы <span> соглашаетесь на
                обработку персональных данных.</span>
            </p>
        </div> 
    </form>
</div>