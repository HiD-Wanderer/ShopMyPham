<?php
include_once('models/Database.php');
class M_san_pham extends Database
{
	public function getDSSanPhamGiamGia()
	{
		$this->setQuery('select * from san_pham where don_gia_khuyen_mai>0');
		return $this->loadAllRow();
	}
	public function getDSSanPhamPhanTrang($start,$limit)
	{
		$this->setQuery("select * from san_pham limit $start,$limit");
		return $this->loadAllRow();
	}
	public function getDSSanPhamCungLoai($id,$ma_loai)
	{
		$this->setQuery('select * from san_pham where ma_san_pham!=? and ma_loai=?');
		return $this->loadAllRow(array($id,$ma_loai));
	}
	public function getSanPham($id)
	{
		$this->setQuery('select * from san_pham where ma_san_pham=?');
		return $this->loadRow(array($id));
	}
	public function getTimSanPham($value)
	{
		$tam='%'.$value . '%';
		$this->setQuery('select * from san_pham where ten_san_pham like ?');
		return $this->loadRow(array($tam));
	}
	public function getDSSanPhamTheoLoaiCha($mang)
	{
		$chuoi=implode(',',$mang);
		$this->setQuery("select * from san_pham where ma_loai in ($chuoi)");
		return $this->loadAllRow();
	}

	public function TongSoSanPham(){
		$this->setQuery("SELECT * FROM san_pham where 1");
		return $this->countAll();
	}
	public function ThemSanPham($data)
	{
		$sql='insert into san_pham(`ma_loai`, `ten_san_pham`, `ten_san_pham_url`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`) values(?,?,?,?,?,?,?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['ma_loai'], $data['ten_san_pham'], $data['ten_san_pham_url'], $data['noi_dung_tom_tat'], $data['noi_dung_chi_tiet'], $data['don_gia'], $data['don_gia_khuyen_mai'], $data['khuyen_mai'], $data['hinh'], $data['ngay_cap_nhat'], $data['dvt']));
	}
	public function CapNhatSanPham($data)
	{
		$this->setQuery('update san_pham set `ma_loai`=?, `ten_san_pham`=?, `ten_san_pham_url`=?, `noi_dung_tom_tat`=?, `noi_dung_chi_tiet`=?, `don_gia`=?, `don_gia_khuyen_mai`=?, `khuyen_mai`=?, `hinh`=?, `ngay_cap_nhat`=?, `dvt`=? where ma_san_pham=?');
		return $this->execute(array($data['ma_loai'], $data['ten_san_pham'], $data['ten_san_pham_url'], $data['noi_dung_tom_tat'], $data['noi_dung_chi_tiet'], $data['don_gia'], $data['don_gia_khuyen_mai'], $data['khuyen_mai'], $data['hinh'], $data['ngay_cap_nhat'], $data['dvt'],$data['ma_san_pham']));	

	}
	public function XoaSanPham($ma_san_pham)
	{
		$this->setQuery('delete from san_pham where ma_san_pham=?');
		return $this->execute(array($ma_san_pham));
	}
	public function TaoTimKiemSanPham()
	{
		$this->setQuery("select ten_san_pham, ten_san_pham_url from san_pham");
		return $this->loadAllRow();
	}
	public function TimKiemSanPhamURL($tenurl)
	{
		$ten="'%". $tenurl . "%'";
		$this->setQuery("select * from san_pham where ten_san_pham_url like ?");
		return $this->loadAllRow(array($tenurl));
	}
	public function SanPhamBanChay()
	{
	   	$this->setQuery('SELECT `san_pham`.`ma_san_pham`, `ten_san_pham`,`ten_san_pham_url`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `san_pham`.`don_gia`, `don_gia_khuyen_mai`, sum(`so_luong`)as TSL
	   					FROM `san_pham`
	   					INNER JOIN `chi_tiet_hoa_don` ON `san_pham`.`ma_san_pham`=`chi_tiet_hoa_don`.`ma_san_pham`
	   					GROUP BY `ma_san_pham`,`ten_san_pham`
                        HAVING sum(`so_luong`)>=2
                        ORDER BY sum(`so_luong`) desc
                        LIMIT 0,10');
	    return $this->loadAllRow();
	    
	}
}
?>
