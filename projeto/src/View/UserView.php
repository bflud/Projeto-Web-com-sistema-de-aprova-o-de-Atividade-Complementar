<?php

class UserView
{
	public function __construct(){}
	
	public function getIndexRoute()
	{
		return 'logon/index.php';	
	}
	
	public function getIndex2Route()
	{
		return 'index/index.php';
	}
	public function getCreateRoute()
	{
		return 'user/create.php';
	}
	
	public function getListAtividadeRoute()
	{
		return 'user/listAtividade.php';
	}
	public function getListAtividadeUserRoute()
	{
		return 'user/listAtividadeUser.php';
	}
	public function getCreateAtividadeRoute()
	{
		return 'user/createAtividade.php';
	}
	public function getPassRoute()
	{
		return 'user/pass.php';
	}	
	
	public function getListRoute()
	{
		return 'user/list.php';
	}
	public function getUpdateRoute()
	{
		return 'user/update.php';
	}
	public function getAuthenticateRoute()
	{
		return 'index/index.php';
	}
	public function getUpdatePasswordRoute()
	{
		return 'user/updatePassword.php';
	}
	public function getProfileRoute(){
		return 'user/profile.php';
	}
}