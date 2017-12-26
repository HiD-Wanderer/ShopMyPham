<?php
	session_start();
	chdir(dirname(__DIR__));
	define('path','http://localhost:81/ShopMyPham/'); 
	define ('imagePath','http://localhost:81/ShopMyPham/public/images/');
	define ('cssPath','http://localhost:81/ShopMyPham/public/css/');
	define ('fontsPath','http://localhost:81/ShopMyPham/public/fonts/');
	define ('jsPath','http://localhost:81/ShopMyPham/public/js/');
	require_once('smarty/libs/smarty.class.php');
	include_once('models/M_san_pham.php');
	include_once('models/M_loai_san_pham.php');
	include_once('models/M_don_dat_hang.php');
	include_once('models/M_khach_hang.php');
	include_once('models/M_tin_tuc.php');
	include_once('library/Gio_hang.php');
	class Smarty_ung_dung extends smarty
	{		
		function __construct()
		{
			parent::__construct();
			$this->setTemplateDir('views/template/');
			$this->setConfigDir('views/config');
			$this->setCacheDir('views/cache');
			$this->setCompileDir('views/template_c');
			$this->assign(['path' => path, 'iPath' => imagePath, 'iPath1' => cssPath, 'iPath2' => fontsPath, 'iPath3' => jsPath]); 
			$m_loai_san_pham=new M_loai_san_pham();
			$this->assign('dsLoaiSanPhamMenu',$m_loai_san_pham->DSLoaiSanPhamCha());
			$m_don_dat_hang=new M_don_dat_hang();
			$this->assign('SoDonDatHangMoi',$m_don_dat_hang->SoDonDatHangMoi());
			$m_san_pham= new M_san_pham();
			$this->assign('dsTimSanPham',$m_san_pham->TaoTimKiemSanPham());
			$m_khach_hang= new M_khach_hang();
			$m_tin_tuc= new M_tin_tuc();
			
		}
	}
?>