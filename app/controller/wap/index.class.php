<?php
/*
* $Author ��PHPYUN�����Ŷ�
*
* ����: http://www.phpyun.com
*
* ��Ȩ���� 2009-2015 ��Ǩ�γ���Ϣ�������޹�˾������������Ȩ����
*
* ����������δ����Ȩǰ���£�����������ҵ��Ӫ�����ο����Լ��κ���ʽ���ٴη�����
 */
class index_controller extends common{
	function index_action(){ 
		$this->get_moblie();
		$this->seo("index");
		$this->yuntpl(array('wap/index'));
	}
	function loginout_action(){
		$this->unset_cookie();
		$this->wapheader('index.php');
	} 
}
?>