<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('library/Pager.php');
include_once('library/Gio_Hang.php');
include_once('models/M_khach_hang.php');

class C_khach_hang
{
	public function ThemMatHangVaoGioHang()
	{
		if(isset($_POST['sanpham']) && $_POST['so_luong'])
		{
			$masanpham=$_POST['sanpham'];
			$soluong=$_POST['so_luong'];
			$m_san_pham=new M_san_pham();
			$sanpham=$m_san_pham->getSanPham($masanpham);
			if($sanpham)
			{
				$gio_hang=new Gio_hang();
				if($sanpham['don_gia_khuyen_mai']>0)
					$gio_hang->Them($masanpham,$sanpham['ten_san_pham'],$sanpham['don_gia_khuyen_mai'],$soluong);
				else
					$gio_hang->Them($masanpham,$sanpham['ten_san_pham'],$sanpham['don_gia'],$soluong);
				echo number_format($gio_hang->TongSoLuong()) .' SP ('. number_format($gio_hang->TongSoTien()) . ' vnđ)';
			}
			else
			{
				echo '';
			}
		}
		else
		{
			echo '';
		}
		
	}
	public function ThemVaoGioHang()
	{
		if(isset($_POST['mbst']) && $_POST['so_luong'])
		{
			$mbts=$_POST['mbst'];
			$soluong=$_POST['so_luong'];
			$m_bo_suu_tap=new m_bo_suu_tap();
			$bosuutap=$m_bo_suu_tap->getBoSuuTap($mbst);
			if($bosuutap)
			{
				$gio_hang=new Gio_hang();
				if($bosuutap['don_gia_khuyen_mai']>0)
					$gio_hang->Them($mbst.'-bst',$bosuutap['ten_bo_suu_tap'],$bosuutap['don_gia_khuyen_mai'],$soluong);
				else
					$gio_hang->Them($mbst.'-td',$bosuutap['ten_bo_suu_tap'],$bosuutap['don_gia'],$soluong);
				echo number_format($gio_hang->TongSoLuong()) .' SP ('. number_format($gio_hang->TongSoTien()) . ' vnđ)';
			}
			else
			{
				echo '';
			}
		}
		else
		{
			echo '';
		}
	}
	public function ThongTinGioHang()
	{
		$gio_hang=new Gio_hang();

		
		if(isset($_POST['CapNhat']))
		{
			$TTGioHang=$gio_hang->ThongTinGioHang();
			foreach ($TTGioHang as $masanpham => $TT) {
				$SlMoi=$_POST['sl_'.$masanpham];
				if($SlMoi!=$TT[1])
					$gio_hang->CapNhatGioHang($masanpham,$SlMoi);
			}
		}

		$TTGioHang=$gio_hang->ThongTinGioHang();
		
		$smarty=new Smarty_ung_dung();

		if($TTGioHang)
		{
			$mangSanPham=array();
			$mangBoSuuTap=array();
			foreach ($TTGioHang as $ma => $TT) {
				if(strpos($ma,'-bst')!==false)
					$mangBoSuuTap[$ma]=$TT;
				else
					$mangSanPham[$ma]=$TT;
			}
			if(count($mangSanPham)>0)
				$smarty->assign('mangSanPham',$mangSanPham);
			if(count($mangBoSuuTap)>0)
				$smarty->assign('mangBoSuuTap',$mangBoSuuTap);
		}
		$smarty->display('khach_hang/v_thong_tin_gio_hang.tpl');
	}
	public function HuyGioHang()
	{
		$gio_hang=new Gio_hang();
		$gio_hang->HuyGioHang();
		header('location:'.path.'khach-hang/thong-tin-gio-hang.html');
	}
	public function DangNhap()
	{	

		$smarty=new Smarty_ung_dung();
		$smarty->assign('ten_dang_nhap','');
		if(isset($_POST['submit']))
		{
			$ten_dang_nhap=$_POST['ten_dang_nhap'];
			$mat_khau=$_POST['mat_khau'];
			if(!empty($ten_dang_nhap) && !empty($mat_khau))
			{
				$m_khach_hang = new M_khach_hang();
				$khach_hang=$m_khach_hang->KhachHangDangNhap($ten_dang_nhap,$mat_khau);
				if($khach_hang)
				{
					$gio_hang=new Gio_hang();

					$SOHD=$m_khach_hang->ThemDonDatHang(array('ma_khach_hang'=>$khach_hang['ma_khach_hang'], 'ngay_dat'=>date('Y-m-d'), 'tong_tien'=>$gio_hang->TongSoTien(), 'tien_dat_coc'=>0, 'con_lai'=>$gio_hang->TongSoTien(), 'hinh_thuc_thanh_toan'=>'TM', 'ghi_chu'=>'','trang_thai'=>0));
					
					$ttGH=$gio_hang->ThongTinGioHang();
					foreach ($ttGH as $masanpham => $TT) {
						
								$dataChiTiet=array('ma_hoa_don'=>$SOHD, 'ma_san_pham'=>$masanpham , 'so_luong'=>$TT[1], 'don_gia'=>$TT[0], 'san_pham_bst'=>0);

								$m_khach_hang->ThemChiTietHoaDon($dataChiTiet);													
					}
					$gio_hang->HuyGioHang();
					header('location:'.path.'khach-hang/thong-tin-don-dat-hang/'.$SOHD);
				}
				else
					$smarty->assign('err','Đăng nhập không thành công');
			}
			else
			{
				$smarty->assign('ten_dang_nhap',$ten_dang_nhap);
				$smarty->assign('err','Vui lòng nhập thông tin đầy đủ');
			}
		}
		$smarty->display('khach_hang/v_dang_nhap.tpl');
	}
	public function ThongTinDonDatHang()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$m_khach_hang = new M_khach_hang();
			$DonDatHang=$m_khach_hang->DonDatHang($id);
			if(!$DonDatHang)
				header('location:'.path);
			$smarty=new Smarty_ung_dung();
			$smarty->assign('DonDatHang',$DonDatHang);
			$smarty->display('khach_hang/v_thong_tin_don_dat_hang.tpl');
		
						
		}
		else
			header('location:'.path);
	}
	
   
	public function DangKy()
	{
		$dataKhachHang=array('ten_khach_hang'=>'', 'phai'=>0, 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'', 'ghi_chu'=>'', 'ten_dang_nhap'=>'', 'mat_khau'=>'');
		$dataErr=array('ten_khach_hang'=>'', 'phai'=>0, 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'', 'ghi_chu'=>'', 'ten_dang_nhap'=>'', 'mat_khau'=>'');
		if(isset($_POST['dangky']))
		{
			$dataKhachHang=array(
				'ten_khach_hang'=>$_POST['ten_khach_hang'],
				'phai'=>$_POST['phai'], 
				'email'=>$_POST['email'], 
				'dia_chi'=>$_POST['dia_chi'], 
				'dien_thoai'=>$_POST['dien_thoai'], 
				'ghi_chu'=>$_POST['ghi_chu'], 
				'ten_dang_nhap'=>$_POST['ten_dang_nhap'], 
				'mat_khau'=>$_POST['mat_khau']
				);
			$res=1;
			$dataErr=$this->KiemTraDuLieu($dataKhachHang,$res);
			if($res==1)
			{
				$m_khach_hang = new M_khach_hang();
				$res=$m_khach_hang->ThemKhachHang($dataKhachHang);
				if($res)
					header('location:'.path.'khach-hang/dat-hang.html');
				else
					$dataErr['mss']='Thêm không thành công';
			}
		}
		$smarty=new Smarty_ung_dung();
		$smarty->assign('data',$dataKhachHang);
		$smarty->assign('dataErr',$dataErr);
		$smarty->display('khach_hang/v_dang_ky.tpl');
	}
	public function KiemTraDuLieu($data, &$res)	
	{
		$dataErr=array('ten_khach_hang'=>'', 'phai'=>0, 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'', 'ghi_chu'=>'', 'ten_dang_nhap'=>'', 'mat_khau'=>'');
		if(empty($data['ten_khach_hang']))
		{
			$res=0;
			$dataErr['ten_khach_hang']='*';
		}
		if(empty($data['email']))
		{
			$res=0;
			$dataErr['email']='*';
		}
		if(empty($data['dia_chi']))
		{
			$res=0;
			$dataErr['dia_chi']='*';
		}
		if(empty($data['dien_thoai']))
		{
			$res=0;
			$dataErr['dien_thoai']='*';
		}
		if(empty($data['ten_dang_nhap']))
		{
			$res=0;
			$dataErr['ten_dang_nhap']='*';
		}
		if(empty($data['mat_khau']))
		{
			$res=0;
			$dataErr['mat_khau']='*';
		}
		return $dataErr;
	}
	public function DonHangMoi()
	{
		$smarty= new Smarty_ung_dung();
		$m_don_dat_hang=new M_don_dat_hang();
		echo $m_don_dat_hang->SoDonDatHangMoi();
	}

}