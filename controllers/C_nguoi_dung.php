<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('models/M_nguoi_dung.php');
class C_nguoi_dung
{
	public function DangNhap()
	{
		$username='';
		$smarty=new Smarty_ung_dung();
		if(isset($_POST['btnDangNhap']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(!empty($username) && !empty($password))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$nguoi_dung=$m_nguoi_dung->getNguoiDungDangNhap($username, md5($password));
				if($nguoi_dung)
				{
					$_SESSION['fullname']=$nguoi_dung['fullname'];
					$_SESSION['role']=$nguoi_dung['role'];
					$_SESSION['username']=$nguoi_dung['username'];
					$_SESSION['id']=$nguoi_dung['id'];
					header('location:'.path.'quan-tri.html');
				}
				else
					$smarty->assign('err','Đăng nhập không thành công');	

			}
			else
				$smarty->assign('err','Vui lòng nhập đầy đủ thông tin');
		}
		
		$smarty->assign('username',$username);
		$smarty->display('nguoi_dung/v_login.tpl');
	}
	public function LockScreen()
	{
		$username=$_SESSION['username'];
		$fullname=$_SESSION['fullname'];
		$smarty=new Smarty_ung_dung();	
		if(isset($_POST['btnDangNhap']))
		{
			$username=$_SESSION['username'];
			$password=$_POST['password'];
			if(!empty($username) && !empty($password))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$nguoi_dung=$m_nguoi_dung->getNguoiDungDangNhap($username, md5($password));
				if($nguoi_dung)
				{
					$_SESSION['fullname']=$nguoi_dung['fullname'];
					$_SESSION['role']=$nguoi_dung['role'];
					header('location:'.path.'quan-tri.html');
				}
				else
					$smarty->assign('err','Đăng nhập không thành công');	

			}
			else
				$smarty->assign('err','Vui lòng nhập đầy đủ thông tin');
		}
		$smarty->assign('fullname',$fullname);
		$smarty->display('nguoi_dung/lock_screen.tpl');
	}
	public function HeThongQuanTri()
	{
		if(!isset($_SESSION['fullname']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$smarty=new Smarty_ung_dung();
		$smarty->display('nguoi_dung/v_he_thong.tpl');
	}
	public function DangXuat()
	{
		session_unset($_SESSION['fullname']);
		session_unset($_SESSION['role']);
		session_unset($_SESSION['username']);
		session_unset($_SESSION['id']);
		header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
	}
	public function DSNguoiDung()
	{
		try
		{
			$m_nguoi_dung=new M_nguoi_dung();
			$query=$m_nguoi_dung->getDSNguoiDung();
			
			$smarty=new Smarty_ung_dung();
			$smarty->assign('DSNguoiDung',$query);
			$smarty->display('nguoi_dung/v_doc_ds_Nguoi_dung.tpl');

		}
		catch(PDOException $e)
		{
			echo $e->getMessgae();
		}
		$pdo=NULL;
	}
	public function CapNhatNguoiDung123()
	{
		$maND=$_GET['id'];
		try
		{
			$pdo=new PDO('mysql:host=localhost; dbname=studio_ao_cuoi','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->query('set names utf8');	
			//$query=$pdo->query('select * from user');
			/*cach 1
			$pdoStament=$pdo->prepare('select * from user where id=?');
			$pdoStament->bindParam(1,$maND);
			*/
			//cach 2
			$pdoStament=$pdo->prepare('select * from user where id=:ma');
			$pdoStament->bindParam(":ma",$maND);

			//cach 3:
			//$pdoStament=$pdo->prepare('select * from user where id=?');
			//$pdoStament->execute(array($maND));

			$pdoStament->execute();
			if($pdoStament->rowCount()>0)
				$query=$pdoStament->fetch(PDO::FETCH_OBJ);
			else
				header('location:'.path);
			$smarty=new Smarty_ung_dung();
			$smarty->assign('DSNguoiDung',$query);
			$smarty->display('nguoi_dung/v_CapNhatNguoiDung.tpl');

		}
		catch(PDOException $e)
		{
			echo $e->getMessgae();
		}
		$pdo=NULL;
	}
	public function ThemNguoiDung()
	{
		$smarty=new Smarty_ung_dung();
		$dataNguoiDung=array(
			'username'=>'', 'password'=>'', 'fullname'=>'', 'birthdate'=>date('Y-m-d'), 'gender'=>0, 'address'=>'', 'email'=>'', 'identitycard'=>'', 'mobiphone'=>'', 'role'=>''
			);
		if(isset($_POST['btnThem']))
		{
			$dataNguoiDung=array(
				'username'=>$_POST['username'], 
				'password'=>$_POST['password'], 
				'fullname'=>$_POST['fullname'], 
				'birthdate'=>$_POST['birthdate'], 
				'gender'=>isset($_POST['gender'])?1:0,
				'address'=>$_POST['address'], 
				'email'=>$_POST['email'], 
				'identitycard'=>$_POST['identitycard'], 
				'mobiphone'=>$_POST['mobiphone'], 
				'role'=>$_POST['role'], 
				);
			$kiemtra=$this->KiemTraDuLieu($dataNguoiDung);
			if(empty($kiemtra))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$m_nguoi_dung->AddNguoiDung($dataNguoiDung);
				header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$m_nguoi_dung=new M_nguoi_dung();
		$smarty->assign('DSNguoiDung',$m_nguoi_dung->getDSNguoiDung());
		$smarty->assign('data',$dataNguoiDung);
		$smarty->display('nguoi_dung/v_them_nguoi_dung.tpl');
	}
	public function KiemTraDuLieu($data)
	{
		$ketqua='';
		if(empty($data['username']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['password']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['fullname']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['birthdate']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['address']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['email']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(!is_numeric($data['identitycard']))
		{
			$ketqua='Số CMND phải nhập là số';
			return $ketqua;
		}
		if(empty($data['role']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(!is_numeric($data['mobiphone']))
		{
			$ketqua='Số điện thoại phải nhập số';
			return $ketqua;
		}
	}
	public function XoaNguoiDung()
	{
		$maND=$_GET['id'];
		$m_nguoi_dung= new M_nguoi_dung();
		$m_nguoi_dung->DeleteNguoiDung($maND);
		header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');
	}
	public function CapNhatNguoiDung()
	{
		$maND=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_nguoi_dung= new M_nguoi_dung();
		$data=$m_nguoi_dung->getNguoiDung($maND);
		$dataNguoiDung=array(
			'username'=>$data['username'], 'password'=>$data['password'], 'fullname'=>$data['fullname'], 'birthdate'=>$data['birthdate'], 'gender'=>$data['gender'], 'address'=>$data['address'], 'email'=>$data['email'], 'identitycard'=>$data['identitycard'], 'mobiphone'=>$data['mobiphone'], 'role'=>$data['role']
			);
		if(isset($_POST['btnCapNhat']))
		{
			$dataNguoiDung=array(
				'username'=>$_POST['username'], 
				'password'=>$_POST['password'], 
				'fullname'=>$_POST['fullname'], 
				'birthdate'=>$_POST['birthdate'], 
				'gender'=>isset($_POST['gender'])?1:0,
				'address'=>$_POST['address'], 
				'email'=>$_POST['email'], 
				'identitycard'=>$_POST['identitycard'], 
				'mobiphone'=>$_POST['mobiphone'], 
				'role'=>$_POST['role'], 
				'id'=>$maND
				);
			$kiemtra=$this->KiemTraDuLieu($dataNguoiDung);
			if(empty($kiemtra))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$m_nguoi_dung->EditNguoiDung($dataNguoiDung);
				header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$m_nguoi_dung=new M_nguoi_dung();
		$smarty->assign('DSNguoiDung',$m_nguoi_dung->getDSNguoiDung());
		$smarty->assign('data',$dataNguoiDung);
		$smarty->display('nguoi_dung/v_cap_nhat_nguoi_dung.tpl');
	}
	public function profile()
	{
		$maND=$_SESSION['id'];
		$smarty=new Smarty_ung_dung();
		$m_nguoi_dung= new M_nguoi_dung();
		$data=$m_nguoi_dung->getNguoiDung($maND);
		$dataNguoiDung=array(
			'username'=>$data['username'], 'password'=>$data['password'], 'fullname'=>$data['fullname'], 'birthdate'=>$data['birthdate'], 'gender'=>$data['gender'], 'address'=>$data['address'], 'email'=>$data['email'], 'identitycard'=>$data['identitycard'], 'mobiphone'=>$data['mobiphone'], 'role'=>$data['role']
			);
		$smarty->assign('data',$dataNguoiDung);
		$smarty->display('nguoi_dung/profile.tpl');
	}
}
