<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('./library/Pager.php');
class C_san_pham
{
	public function index()
	{
		$smarty=new Smarty_ung_dung();
		$smarty->display('index.tpl');
	}
	
		public function DSSanPhamKhuyenMai()
	{
		$smarty=new Smarty_ung_dung();
		$m_san_pham=new M_san_pham();
		$DSSanPhamKhuyenMai=$m_san_pham->getDSSanPhamGiamGia();
		if($DSSanPhamKhuyenMai)
		{
			$smarty->assign('DSSanPhamKhuyenMai',$DSSanPhamKhuyenMai);
		}
		$smarty->display('san_pham/v_san_pham_ban_chay.tpl');
	}
	public function ChiTietSanPham()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		$mang=explode('-',$chuoi_url);
		$id=$mang[count($mang)-1];
		$m_san_pham = new M_san_pham();
		$San_Pham=$m_san_pham->getSanPham($id);
		if(!$San_Pham)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();

		$DSSanPhamCungLoai=$m_san_pham->getDSSanPhamCungLoai($id,$San_Pham['ma_loai']);
		//var_dump($DSSanPhamCungLoai);exit;
		if($DSSanPhamCungLoai)
			$smarty->assign('DSSanPham',$DSSanPhamCungLoai);
		
		$smarty->assign('San_Pham',$San_Pham);
		$smarty->display('San_Pham/v_doc_ct_san_pham.tpl');
	}
	public function DSSanPhamLoaiCha()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		
		$m_loai_san_pham = new M_loai_san_pham();
		$LoaiCha=$m_loai_san_pham->getLoaiSanPhamCha($chuoi_url);
		if(!$LoaiCha)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();
		
		$smarty->assign('LoaiCha',$LoaiCha);

		$MangMaLoaiCon=$m_loai_san_pham->getMaLoaiSanPhamConCuaCha($LoaiCha['ma_loai']);
		if($MangMaLoaiCon)
		{
			$m_san_pham = new M_san_pham();
			$dsSanPham=$m_san_pham->getDSSanPhamTheoLoaiCha($MangMaLoaiCon);
			$smarty->assign('DSSanPham',$dsSanPham);

		}
		$smarty->display('san_pham/v_doc_ds_san_pham_theo_loai.tpl');
	}

	public function DSSanPham(){
		$m_san_pham = new M_san_pham();
		$pager = new Pager();
		$limit = 9;
		$start = $pager->findStart($limit);
		$count = $m_san_pham->TongSoSanPham();
		
		$numPage = $pager->findPages($count, $limit);
		$DSSanPham = $m_san_pham->getDSSanPhamPhanTrang($start, $limit);
		//var_dump($DSSanPham);
		$LinkPage = $pager->pageList($_GET['page'], $numPage);
		
		$smarty = new Smarty_ung_dung();

		$smarty->assign('DSSanPham', $DSSanPham);
		$smarty->assign('LinkPage', $LinkPage);

		$smarty->display('san_pham/v_doc_ds_san_pham_theo_loai.tpl');

		
	}
	public function DSSanPhamnAdmin()
	{
		$m_san_pham = new M_san_pham();
		$pager=new Pager();
		$limit=12;
		$start=$pager->findStart($limit);
		$count=$m_san_pham->TongSoSanPham();
		$numPage=$pager->findPages($count, $limit);
		$DSSanPham=$m_san_pham->getDSSanPhamPhanTrang($start,$limit);
		//var_dump($DSMonAn);
		$LinkPage=$pager->pageList_admin($_GET['page'], $numPage);
		//echo $LinkPage;
		$smarty=new Smarty_ung_dung();
		
		$smarty->assign('DSSanPham',$DSSanPham);
		$smarty->assign('LinkPage',$LinkPage);

		$smarty->display('san_pham/v_doc_ds_san_pham_admin.tpl');
	}
	public function ThemSanPham()
	{
		$smarty=new Smarty_ung_dung();
		$dataSanPham=array(
			'ma_loai'=>'', 'ten_san_pham'=>'', 'ten_san_pham_url'=>'', 'noi_dung_tom_tat'=>'', 'noi_dung_chi_tiet'=>'', 'don_gia'=>'', 'don_gia_khuyen_mai'=>'', 'khuyen_mai'=>'', 'hinh'=>'', 'ngay_cap_nhat'=>date('Y-m-d'), 'dvt'=>'',
			);
		if(isset($_POST['btnThem']))
		{
			$dataSanPham=array(
				'ma_loai'=>$_POST['ma_loai'], 
				'ten_san_pham'=>$_POST['ten_san_pham'], 
				'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 
				'noi_dung_tom_tat'=>$_POST['noi_dung_tom_tat'], 
				'noi_dung_chi_tiet'=>$_POST['noi_dung_chi_tiet'], 
				'don_gia'=>$_POST['don_gia'], 
				'don_gia_khuyen_mai'=>$_POST['don_gia_khuyen_mai'], 
				'khuyen_mai'=>$_POST['khuyen_mai'], 
				'hinh'=>'', 
				'ngay_cap_nhat'=>$_POST['ngay_cap_nhat'], 
				'dvt'=>$_POST['dvt']
						);
			$kiemtra=$this->KiemTraDuLieu($dataSanPham);
			if(empty($kiemtra))
			{
				//kiem tra hinh anh
				$hinh=$_FILES['hinh'];
				if($hinh['error']==0)
				{
					$arrType=array('image/jpeg','image/jpg','image/png');
					if(array_search($hinh['type'], $arrType)!==false)
					{
						if($hinh['size']<2000000)
						{
							$name=time().$hinh['name'];
							move_uploaded_file($hinh['tmp_name'], './public/images/san_pham/'.$name);
							$dataSanPham['hinh']=$name;
							$m_san_pham=new M_san_pham();
							$m_san_pham->ThemSanPham($dataSanPham);
							header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');
						}
						else
							$smarty->assign('err','Chỉ chọn hình <2MB');		
					}
					else
						$smarty->assign('err','Chỉ chọn file hình');	
				}
				else
					$smarty->assign('err','Phải chọn hình ảnh');
			}
			

		}
		$m_loai_san_pham=new M_loai_san_pham();
		$smarty->assign('DSLoaiSanPham',$m_loai_san_pham->DSLoaiSanPham());
		$smarty->assign('data',$dataSanPham);
		$smarty->display('san_pham/v_them_san_pham.tpl');
	}
	public function KiemTraDuLieu($data)
	{
		$ketqua='';
		if(empty($data['ma_loai']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['ten_san_pham']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['ten_san_pham_url']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['noi_dung_tom_tat']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['noi_dung_chi_tiet']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(!is_numeric($data['don_gia']))
		{
			$ketqua='Đơn giá phải nhập số';
			return $ketqua;
		}
		if(!is_numeric($data['don_gia_khuyen_mai']))
		{
			$ketqua='Đơn giá KM phải nhập số';
			return $ketqua;
		}
	}
	public function SanPhamBanChay()
	{
		$smarty=new Smarty_ung_dung();
		$m_san_pham=new M_san_pham();
		$DSSanPhamBanChay=$m_san_pham->SanPhamBanChay();
		if($DSSanPhamBanChay)
		{
			$smarty->assign('DSSanPhamBanChay',$DSSanPhamBanChay);
		}
		$smarty->display('san_pham/v_san_pham_ban_chay.tpl');
	}
	public function XoaSanPham()
	{
		$maSP=$_GET['id'];
		$m_san_pham= new M_san_pham();
		$m_san_pham->XoaSanPham($maSP);
		header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');
	}
	public function CapNhatSanPham()
	{
		$maSP=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_san_pham= new M_san_pham();
		$data=$m_san_pham->getSanPham($maSP);
		$dataSanPham=array(
			'ma_loai'=>$data['ma_loai'], 'ten_san_pham'=>$data['ten_san_pham'], 'ten_san_pham_url'=>$data['ten_san_pham_url'], 'noi_dung_tom_tat'=>$data['noi_dung_tom_tat'], 'noi_dung_chi_tiet'=>$data['noi_dung_chi_tiet'], 'don_gia'=>$data['don_gia'], 'don_gia_khuyen_mai'=>$data['don_gia_khuyen_mai'], 'khuyen_mai'=>$data['khuyen_mai'], 'hinh'=>$data['hinh'], 'ngay_cap_nhat'=>$data['ngay_cap_nhat'], 'dvt'=>$data['dvt']
			);
		if(isset($_POST['btnCapNhat']))
		{
			$dataSanPham=array(
				'ma_loai'=>$data['ma_loai'], 
				'ten_san_pham'=>$_POST['ten_san_pham'], 
				'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 
				'noi_dung_tom_tat'=>$data['noi_dung_tom_tat'], 
				'noi_dung_chi_tiet'=>$data['noi_dung_chi_tiet'], 
				'don_gia'=>$_POST['don_gia'], 
				'don_gia_khuyen_mai'=>$_POST['don_gia_khuyen_mai'], 
				'khuyen_mai'=>$data['khuyen_mai'], 
				'hinh'=>$data['hinh'], 
				'ngay_cap_nhat'=>$_POST['ngay_cap_nhat'], 
				'dvt'=>$data['dvt'], 	
				'ma_san_pham'=>	$maSP		);
			$kiemtra=$this->KiemTraDuLieu($dataSanPham);
			if(empty($kiemtra))
			{
				$m_san_pham=new M_san_pham();
				$m_san_pham->CapNhatSanPham($dataSanPham);
				header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');	
			}
		
		}
		$m_loai_san_pham=new M_loai_san_pham();
		$smarty->assign('DSLoaiSanPham',$m_loai_san_pham->DSLoaiSanPham());
		$smarty->assign('data',$dataSanPham);
		$smarty->display('san_pham/v_cap_nhat_san_pham.tpl');
	}

}
?>