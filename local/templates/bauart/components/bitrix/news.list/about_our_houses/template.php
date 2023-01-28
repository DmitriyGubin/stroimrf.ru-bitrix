<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//debug($arResult['ITEMS']);
?>

<div class="about_our_houses" id="about_our_houses_scroll">
	<div class="textt">
		<div>
			<h2 class="titlee">О наших домах</h2>
			<p>
				<?= $arResult["ITEMS"][0]['PREVIEW_TEXT']; ?>
			</p>

			<div class="hidden">
				<img alt="#" style="display: none;" class="img_1" src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_MOBILE']['VALUE'][0])?>"/>
				<div class="righttt">
					<img alt="#" style="display: none;" class="img_2" src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_MOBILE']['VALUE'][1])?>"/>
					<img alt="#" style="display: none;" class="img_3" src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_MOBILE']['VALUE'][2])?>"/>
				</div>
			</div>

			<p>
				<?= $arResult["ITEMS"][0]['DETAIL_TEXT']; ?>
			</p>
		</div>
	</div>

	<div class="houses">
		<div>
			<img alt="#" src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_DESCTOP']['VALUE'][0])?>" style="height: calc(100%/728*507);">
			<img src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_DESCTOP']['VALUE'][1])?>" style="height: calc(100%/728*191);">
		</div>

		<div>
			<img alt="#" src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_DESCTOP']['VALUE'][2])?>" style="height: calc(100%/728*191);">
			<img alt="#" src="<?=\CFile::GetPath($arResult["ITEMS"][0]['PROPERTIES']['OUR_HOUSES_GALLERY_DESCTOP']['VALUE'][3])?>" style="height: calc(100%/728*507);">
		</div>
	</div>
</div>









<?/*
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
