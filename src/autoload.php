<?php
namespace ytk;
//auto generated code
class autoload
{


	public static function loadClass($class)
	{
		$rootPath = dirname(__FILE__);
		$filename = $rootPath."/open/core/http/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/core/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/token/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/token/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/token/data/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/utils/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_createOrUpdateOrienPlan/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_createOrUpdateOrienPlan/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanAuthorsAdd/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanAuthorsAdd/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_getOrderList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_getOrderList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchEncrypt/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchEncrypt/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_instituteColonelActivityList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_instituteColonelActivityList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityProductAudit/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityProductAudit/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_instituteColonelActivityOperate/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_instituteColonelActivityOperate/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanCtrl/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanCtrl/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_materialsProductsDetails/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_materialsProductsDetails/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_instituteOrderAds/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_instituteOrderAds/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityProduct/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityProduct/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanAuthors/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanAuthors/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_materialsProductsSearch/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_materialsProductsSearch/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidDel/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidDel/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_activityProductCategoryList/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_activityProductCategoryList/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_instituteLiveShare/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_instituteLiveShare/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanAudit/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_orienPlanAudit/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_queryInstituteOrders/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_queryInstituteOrders/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_liveShareMaterial/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_liveShareMaterial/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityCreateOrUpdate/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityCreateOrUpdate/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidCreate/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidCreate/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidEdit/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/buyin_institutePidEdit/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_getSearchIndex/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_getSearchIndex/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityProductExtension/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_colonelActivityProductExtension/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_materialsProductCategory/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/alliance_materialsProductCategory/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchSensitive/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}
		$filename = $rootPath."/open/api/order_batchSensitive/param/".$class.".php";
		if(is_file($filename)) {
			include $filename;
			return;
		}

	}
}
spl_autoload_register('\autoload::loadClass');