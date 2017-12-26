<?php
include_once('controllers/C_don_dat_hang.php');
$c_don_dat_hang = new C_don_dat_hang();
if (isset($_GET['key'])){
	switch ($_GET['key']) {
		case 'ds-don-hang':
			$c_don_dat_hang->DanhSachDonDatHangMoi();
			break;
		case 'don-hang-moi':
			$c_khach_hang->DonHangMoi();
		default:
		case 'don-hang-moi':
			$c_don_dat_hang->DanhSachDonDatHangMoi();
			break;
		case 'ds-don-hang-dat-coc':
			$c_don_dat_hang->DanhSachDonDatHangDaDatCoc();
			break;
		case 'ds-don-hang-con-no':
			$c_don_dat_hang->DanhSachDonDatHangConNo();
			break;
		case 'ds-chi-tiet':
			$c_don_dat_hang->DanhSachDonDatHangChiTiet();
			break;
		case 'xoa-don-hang':
			$c_don_dat_hang->XoaDonHang();
			break;
		case 'cap-nhat-don-hang':
			$c_don_dat_hang->CapNhatDonHang();
			break;
		case 'thong-ke':
			$c_don_dat_hang->ThongKe();
			break;
		case 'thong-ke-don-hang':
			$c_don_dat_hang->ThongKeDonHang();
			break;
	}
}
?>