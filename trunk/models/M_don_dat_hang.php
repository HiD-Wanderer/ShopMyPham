<?php
include_once('models/Database.php');
class M_don_dat_hang extends Database
{
	public function SoDonDatHangMoi()
	{
	   	$this->setQuery('select * from hoa_don where trang_thai=0');
	    return $this->CountAll();
	}
	public function DSDonDatHangMoi()
	{
	   	$this->setQuery('SELECT `ma_hoa_don`, `hoa_don`.`ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `trang_thai`,  `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai` FROM `hoa_don`
			INNER JOIN `khach_hang` ON `hoa_don`.`ma_khach_hang`=`khach_hang`.`ma_khach_hang` where trang_thai=0');
	    return $this->loadAllRow();
	}
	public function DSDonDatHangDaDatCoc()
	{
	   	$this->setQuery('SELECT `ma_hoa_don`, `hoa_don`.`ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `trang_thai`,  `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai` FROM `hoa_don`
			INNER JOIN `khach_hang` ON `hoa_don`.`ma_khach_hang`=`khach_hang`.`ma_khach_hang` where tien_dat_coc!=0');
	    return $this->loadAllRow();
	}
	public function DSDonDatHangDaConNo()
	{
	   	$this->setQuery('SELECT `ma_hoa_don`, `hoa_don`.`ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `trang_thai`,  `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai` FROM `hoa_don`
			INNER JOIN `khach_hang` ON `hoa_don`.`ma_khach_hang`=`khach_hang`.`ma_khach_hang` where con_lai!=0');
	    return $this->loadAllRow();
	}
	public function DSDonDHChiTiet()
	{
	   	$this->setQuery('SELECT `ma_hoa_don`, `chi_tiet_hoa_don`.`ma_san_pham`, `ten_san_pham`, `so_luong`, `chi_tiet_hoa_don`.`don_gia`
	   					from `chi_tiet_hoa_don`
	   					INNER JOIN `san_pham` ON `chi_tiet_hoa_don`.`ma_san_pham`=`san_pham`.`ma_san_pham`
	   	 				where 1');
	     return $this->loadAllRow();
	}
	public function XoaDonHang($ma_hoa_don)
	{
		$this->setQuery('delete from hoa_don where ma_hoa_don=?');
		return $this->execute(array($ma_hoa_don));
	}
	public function getDonHang($ma_hoa_don)
	{
		$this->setQuery('select * from hoa_don where ma_hoa_don=?');
		return $this->loadRow(array($ma_hoa_don));
	}
	public function getDSDonHang()
	{			
		$this->setQuery('select * from hoa_don');
		return $this->loadAllRow();
	}
	public function EditDonHang($data)
	{
		$this->setQuery('update hoa_don set `ma_khach_hang`=?, `ngay_dat`=?, `tong_tien`=?, `tien_dat_coc`=?, `con_lai`=?, `hinh_thuc_thanh_toan`=?, `trang_thai`=?, `ghi_chu`=? where ma_hoa_don=?');
		return $this->execute(array($data['ma_khach_hang'], $data['ngay_dat'], $data['tong_tien'], $data['tien_dat_coc'],$data['con_lai'], $data['hinh_thuc_thanh_toan'], $data['trang_thai'], $data['ghi_chu'], $data['ma_hoa_don']));	
	}
	public function DSDonDatHang($ngay_di, $ngay_den)
	{
	   	$this->setQuery('SELECT * from hoa_don where ngay_dat BETWEEN ? AND ?');
	    return $this->loadAllRow(array($ngay_di,$ngay_den));
	}
}
?>