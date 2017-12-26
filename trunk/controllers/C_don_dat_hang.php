<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('library/Pager.php');
class C_don_dat_hang
{
	public function DanhSachDonDatHangMoi()
	{
		$smarty=new Smarty_ung_dung();
		$m_don_dat_hang=new M_don_dat_hang();
		$DSDonDHMoi=$m_don_dat_hang->DSDonDatHangMoi();
		if($DSDonDHMoi)
		{
			$smarty->assign('DSDonDatHang',$DSDonDHMoi);
		}
		$smarty->display('don_dat_hang/v_dsdon_dat_hang.tpl');
	}
	
	
	public function DanhSachDonDatHang()
	{

	}
	public function DanhSachDonDatHangChiTiet()
	{
		$smarty=new Smarty_ung_dung();
		$m_don_dat_hang=new M_don_dat_hang();
		$DSDonDHChiTiet=$m_don_dat_hang->DSDonDHChiTiet();
		if($DSDonDHChiTiet)
		{
			$smarty->assign('DSDonDHChiTiet',$DSDonDHChiTiet);
		}
		$smarty->display('don_dat_hang/v_dsdon_dat_hang_chi_tiet.tpl');
	}
	public function XoaDonHang()
	{
		$maDH=$_GET['id'];
		$m_don_dat_hang= new M_don_dat_hang();
		$m_don_dat_hang->XoaDonHang($maDH);
		header('location:'.path.'quan-tri/don-hang/danh-sach-don-hang.html');
	}
	public function CapNhatDonHang()
	{
		$maDH=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_don_dat_hang= new M_don_dat_hang();
		$data=$m_don_dat_hang->getDonHang($maDH);
		$dataDH=array(
			'ma_khach_hang'=>$data['ma_khach_hang'], 'ngay_dat'=>$data['ngay_dat'], 'tong_tien'=>$data['tong_tien'], 'tien_dat_coc'=>$data['tien_dat_coc'], 'con_lai'=>$data['con_lai'], 'hinh_thuc_thanh_toan'=>$data['hinh_thuc_thanh_toan'], 'trang_thai'=>$data['trang_thai'], 'ghi_chu'=>$data['ghi_chu'],'ma_hoa_don'=>$maDH
			);
		if(isset($_POST['btnCapNhat']))
		{
			$dataDH=array(
				'ma_hoa_don'=>$maDH,
				'ma_khach_hang'=>$_POST['ma_khach_hang'], 
				'ngay_dat'=>$_POST['ngay_dat'], 
				'tong_tien'=>$_POST['tong_tien'], 
				'tien_dat_coc'=>$data['tien_dat_coc'], 
				'con_lai'=>$data['con_lai'],
				'hinh_thuc_thanh_toan'=>$_POST['hinh_thuc_thanh_toan'], 
				'trang_thai'=>$data['trang_thai'], 
				'ghi_chu'=>$data['ghi_chu'], 
				);
			$kiemtra=$this->KiemTraDuLieu($dataDH);
			if(empty($kiemtra))
			{
				$m_don_dat_hang=new M_don_dat_hang();
				$m_don_dat_hang->EditDonHang($dataDH);
				header('location:'.path.'quan-tri/don-hang/danh-sach-don-hang.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$m_don_dat_hang=new M_don_dat_hang();
		$smarty->assign('DSDonHang',$m_don_dat_hang->getDSDonHang());
		$smarty->assign('data',$dataDH);
		$smarty->display('don_dat_hang/v_cap_nhat_don_hang.tpl');
	}
	public function KiemTraDuLieu($data)
	{
		$ketqua='';
		if(empty($data['ma_khach_hang']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['ngay_dat']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['tong_tien']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['hinh_thuc_thanh_toan']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
	}
	public function ThongKe()
	{
		$ngaydi='';
		$ngayden=date('Y-m-d');
		$smarty=new Smarty_ung_dung();
		if(isset($_POST['btnxacnhan']))
		{
			$ngaydi=$_POST['ngaydi'];
			$ngayden=$_POST['ngayden'];
			if($ngaydi && $ngayden)
			{
				$m_don_dat_hang = new M_don_dat_hang();
				$DSDonDatHang=$m_don_dat_hang->DSDonDatHang($ngaydi,$ngayden);
				if($DSDonDatHang)
				{
					$smarty=new Smarty_ung_dung();
					$smarty->assign('DSDonDatHang',$DSDonDatHang);
				}
				else
					header('location:'.path.'quan-tri/thong-ke-doanh-thu.html');			
			}
		}
		$smarty->assign('ngaydi',$ngaydi);
		$smarty->assign('ngayden',$ngayden);
		$smarty->display('don_dat_hang/v_thong_ke.tpl');
	}

}
