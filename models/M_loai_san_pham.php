<?php
include_once('models/Database.php');
class M_loai_san_pham extends Database
{
	public function DSLoaiSanPhamCha()
	{
		$this->setQuery('select * from loai_san_pham where ma_loai_cha=0');
		return $this->loadAllRow();
	}
	public function getLoaiSanPhamCha($chuoiURL)
	{
		$this->setQuery('select * from loai_san_pham where ten_loai_url=?');
		return $this->loadRow(array($chuoiURL));
	}
	public function getMaLoaiSanPhamConCuaCha($ma_loai_cha)
	{
		$this->setQuery('select ma_loai from loai_san_pham where ma_loai_cha=?');
		$query= $this->loadAllRow(array($ma_loai_cha));		
		$mang=array();
		if($query)
		{
			foreach ($query as $value) {
				$mang[]=$value['ma_loai'];
			}
		}
		return $mang;
	}
	public function DSLoaiSanPham()
	{
		$this->setQuery('select * from loai_san_pham where ma_loai_cha=0');
		$DSLoaiCha= $this->loadAllRow();
		$mangLoai=array();
		foreach ($DSLoaiCha as $LoaiCha) {
			$mangLoai[]=array($LoaiCha,$this->DSLoaiSanPham_con($LoaiCha['ma_loai']));
		}
		return $mangLoai;
	}
	public function DSLoaiSanPham_con($ma_loai_cha)
	{
		$this->setQuery('select * from loai_san_pham where ma_loai_cha=?');
		return $this->loadAllRow(array($ma_loai_cha));
	}
}