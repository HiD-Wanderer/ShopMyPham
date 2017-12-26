<?php
include_once('models/Database.php');
class M_nguoi_dung extends Database
{
	public function getDSNguoiDung()
	{			
		$this->setQuery('select * from user');
		return $this->loadAllRow();
	}
	public function getNguoiDungDangNhap($username, $password)
	{
		$this->setQuery('select * from user where username=? && password =?');
		return $this->loadRow(array($username, $password));
	}
	public function getNguoiDung($id)
	{
		$this->setQuery('select * from user where id=?');
		return $this->loadRow(array($id));
	}
	public function AddNguoiDung($data)
	{
		$this->setQuery('insert into user(`username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `identitycard`, `mobiphone`, `role`) values(?,?,?,?,?,?,?,?,?,?)');

		return $this->execute(array($data['username'], $data['password'], $data['fullname'], $data['birthdate'], $data['gender'], $data['address'], $data['email'], $data['identitycard'], $data['mobiphone'], $data['role']));
	}
	public function EditNguoiDung($data)
	{
		$this->setQuery('update user set `username`=?, `password`=?, `fullname`=?, `birthdate`=?, `gender`=?, `address`=?, `email`=?, `identitycard`=?, `mobiphone`=?, `role`=? where id=?');

		return $this->execute(array($data['username'], $data['password'], $data['fullname'], $data['birthdate'], $data['gender'], $data['address'], $data['email'], $data['identitycard'], $data['mobiphone'], $data['role'],$data['id']));	
	}
	public function DeleteNguoiDung($id)
	{
		$this->setQuery('delete from user where id=?');
		return $this->execute(array($id));
	}
}
?>