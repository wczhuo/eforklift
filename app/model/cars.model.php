<?php
/*
* $Author ：PHPYUN开发团队
*
* 官网: http://www.phpyun.com
*
* 版权所有 2009-2015 宿迁鑫潮信息技术有限公司，并保留所有权利。
*
* 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class cars_model extends model{
	function GetNewsBaseOnce($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_once("cars_base",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsContentOnce($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_once("cars_content",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsGroupOnce($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_once("cars_group",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsGroupList($Where=array(),$Options=array()){
        $WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_all("cars_group",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
	function GetNewsBaseList($Where=array(),$Options=array()){
		$WhereStr=$this->FormatWhere($Where);
		$FormatOptions=$this->FormatOptions($Options);
		return $this->DB_select_all("cars_base",$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
	}
    function AddNewsHits($Where=array()){
		$ID=(int)$Where['id'];
		if(!is_numeric($ID)){
			return null;
		}
        return $this->DB_update_all('cars_base',"`hits`=`hits`+'1'","`id`='".$ID."'");
    }
    function GetNewsNum($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_select_num('cars_base',$WhereStr);
    }
    function GetProperty($Where=array(),$Options=array('field'=>null)){
        $WhereStr=$this->FormatWhere($Where);
        $FormatOptions=$this->FormatOptions($Options);
        return $this->DB_select_all('property',$WhereStr.$FormatOptions['order'],$FormatOptions['field']);
    }
    function UpdateNews($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('cars_base',$ValuesStr,$WhereStr);
    }
    function UpdateNewsContent($Values=array(),$Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        $ValuesStr=$this->FormatValues($Values);
        return $this->DB_update_all('cars_content',$ValuesStr,$WhereStr);
    }
    function AddNews($Values=array()){
        return $this->insert_into('cars_base',$Values);
    }
    function AddNewsContent($Values=array()){
        return $this->insert_into('cars_content',$Values);
    }
    function DeleteNews($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('cars_base',$WhereStr,"");
    }
    function DeleteNewsContent($Where=array()){
        $WhereStr=$this->FormatWhere($Where);
        return $this->DB_delete_all('cars_content',$WhereStr,"");
    }
}
?>