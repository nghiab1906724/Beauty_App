<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Catch_;

class HoaDonController extends Controller
{

    public function payCOD(Request $request)
    {
        try {
            $sanPham = DB::table('gio_hang')
                ->where('sdt', Auth::user()->sdt)
                ->where('chon', 1)
                ->join('san_pham', 'san_pham.barCode', '=', 'gio_hang.barCode')
                ->get();
            $thongTinGH = DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->where('macDinh', 1)->get();
            $maHD = time() . "";
            DB::table('hoa_don')->insert([
                'maHD' => $maHD,
                'sdt' => Auth::user()->sdt,
                'hoTenNhan' => $thongTinGH[0]->hoTenNhan,
                'sdtNhan' => $thongTinGH[0]->sdtNhan,
                'dc' => $thongTinGH[0]->dcNhan,
                'tamTinh' => $_POST['tamTinh'],
                'pThucTT' => $_POST['pttt']
            ]);
            $stt = 0;


            foreach ($sanPham as $sp) {

                try {

                    // Kiểm tra và giảm số lượng
                    $loHang = DB::table('lo_hang')
                        ->where('barCode', $sp->barCode)
                        ->where('lo_hang.soLuongConLai', '>=', $sp->soLuongSP)
                        ->orderBy('ngaySX')->first('maLo')->maLo;
                    DB::table('lo_hang')
                        ->where('barCode', $sp->barCode)
                        ->where('lo_hang.maLo', $loHang)
                        ->update(['soLuongConLai' => DB::raw('soLuongConLai - ' . $sp->soLuongSP)]);

                    //Thêm vào chi tiết
                    $stt++;
                    DB::table('chi_tiet_hd')->insert([
                        'maHD' => $maHD,
                        'sdt' => Auth::user()->sdt,
                        'stt' => $stt,
                        'barCode' => $sp->barCode,
                        'giaGoc' => $sp->giaBan,
                        'phanTramDaGiam' => $sp->phanTramGiam,
                        'SLMua' => $sp->soLuongSP,
                        'loHang' => $loHang
                    ]);

                    //Xóa giỏ hàng
                    DB::table('gio_hang')
                        ->where('sdt', Auth::user()->sdt)
                        ->where('chon', 1)
                        ->where('barCode', $sp->barCode)
                        ->delete();
                } catch (Exception $e) {
                }
            }

            if (DB::table('chi_tiet_hd')->where('maHD', $maHD)->where('sdt', Auth::user()->sdt)->count() == 0) {
                DB::table('hoa_don')->where('sdt', Auth::user()->sdt)->where('maHD', $maHD)->delete();
                session()->flash('fail', 'Sản phẩm đã hết hàng');
                return redirect()->back();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return redirect()->route('thanks');
    }

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function payMoMo(Request $request)
    {
        try {
            $sanPham = DB::table('gio_hang')
                ->where('sdt', Auth::user()->sdt)
                ->where('chon', 1)
                ->join('san_pham', 'san_pham.barCode', '=', 'gio_hang.barCode')
                ->get();
            $thongTinGH = DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->where('macDinh', 1)->get();
            $maHD = time() . "";
            DB::table('hoa_don')->insert([
                'maHD' => $maHD,
                'sdt' => Auth::user()->sdt,
                'hoTenNhan' => $thongTinGH[0]->hoTenNhan,
                'sdtNhan' => $thongTinGH[0]->sdtNhan,
                'dc' => $thongTinGH[0]->dcNhan,
                'tamTinh' => 0,
                'pThucTT' => $_POST['pttt']
            ]);
            $stt = 0;
            $tamTinh = 0;

            foreach ($sanPham as $sp) {

                try {

                    // Kiểm tra và giảm số lượng
                    $loHang = DB::table('lo_hang')
                        ->where('barCode', $sp->barCode)
                        ->where('lo_hang.soLuongConLai', '>=', $sp->soLuongSP)
                        ->orderBy('ngaySX')->first('maLo')->maLo;
                    DB::table('lo_hang')
                        ->where('barCode', $sp->barCode)
                        ->where('lo_hang.maLo', $loHang)
                        ->update(['soLuongConLai' => DB::raw('soLuongConLai - ' . $sp->soLuongSP)]);

                    //Thêm vào chi tiết
                    $stt++;
                    DB::table('chi_tiet_hd')->insert([
                        'maHD' => $maHD,
                        'sdt' => Auth::user()->sdt,
                        'stt' => $stt,
                        'barCode' => $sp->barCode,
                        'giaGoc' => $sp->giaBan,
                        'phanTramDaGiam' => $sp->phanTramGiam,
                        'SLMua' => $sp->soLuongSP,
                        'loHang' => $loHang
                    ]);
                    $tamTinh += $sp->giaBan * (1 - $sp->phanTramGiam / 100) * $sp->soLuongSP;

                    //Xóa giỏ hàng
                    DB::table('gio_hang')
                        ->where('sdt', Auth::user()->sdt)
                        ->where('chon', 1)
                        ->where('barCode', $sp->barCode)
                        ->delete();
                } catch (Exception $e) {
                }
            }

            //Kiểm tra xem tạo hóa đơn thành công không
            if (DB::table('chi_tiet_hd')->where('maHD', $maHD)->where('sdt', Auth::user()->sdt)->count() == 0) {
                DB::table('hoa_don')->where('sdt', Auth::user()->sdt)->where('maHD', $maHD)->delete();
                session()->flash('fail', 'Sản phẩm đã hết hàng');
                return redirect()->back();
            } else {
                //Cập nhật tiền cho HD
                DB::table('hoa_don')->where('sdt', Auth::user()->sdt)->where('maHD', $maHD)->update(['tamTinh' => $tamTinh]);

                //Thanh toán MoMo
                //4 giá trị thay đổi khi thanh toán thực, còn đây gán cứng để test
                $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


                $partnerCode = 'MOMOBKUN20180529';
                $accessKey = 'klm05TvNBzhg7h7j';
                $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                $orderInfo = "Thanh toán qua MoMo";
                $amount = $tamTinh + 25000;
                $orderId = $maHD;
                $redirectUrl = route('endPayMoMo');
                $ipnUrl = route('endPayMoMo');
                $extraData = "";



                $requestId = time() . "";
                $requestType = "payWithATM";
                // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                //before sign HMAC SHA256 signature
                $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                $signature = hash_hmac("sha256", $rawHash, $secretKey);
                $data = array(
                    'partnerCode' => $partnerCode,
                    'partnerName' => "Test",
                    "storeId" => "MomoTestStore",
                    'requestId' => $requestId,
                    'amount' => $amount,
                    'orderId' => $orderId,
                    'orderInfo' => $orderInfo,
                    'redirectUrl' => $redirectUrl,
                    'ipnUrl' => $ipnUrl,
                    'lang' => 'vi',
                    'extraData' => $extraData,
                    'requestType' => $requestType,
                    'signature' => $signature
                );
                $result = $this->execPostRequest($endpoint, json_encode($data));
                $jsonResult = json_decode($result, true);  // decode json
                //Just a example, please check more in there

                // header('Location: ' . $jsonResult['payUrl']);

                return redirect()->to($jsonResult['payUrl']);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function endPayMoMo()
    {
        if (isset($_GET['resultCode']) && $_GET['resultCode'] == 0) {
            session()->flash('thanhToan', 'Thanh toán thành công!');
            try {
                DB::table('hoa_don')->where('maHD', $_GET['orderId'])->where('sdt', Auth::user()->sdt)->update([
                    'trangThaiTT' => 1
                ]);
            } catch (Exception $e) {
            }

            DB::table('momo')->insert([
                'partnerCode' => $_GET['partnerCode'],
                'orderId' => $_GET['orderId'],
                'requestId' => $_GET['requestId'],
                'amount' => $_GET['amount'],
                'orderInfo' => $_GET['orderInfo'],
                'orderType' => $_GET['orderType'],
                'transId' => $_GET['transId'],
                'payType' => $_GET['payType'],
                'signature' => $_GET['signature'],
                'sdt' => Auth::user()->sdt
            ]);
            try {
            } catch (Exception $e) {
            }
        } else session()->flash('thanhToan', 'Thanh toán không thành công!');
        return view('thanks');
    }

    public function payVNP(Request $request)
    {

        try {
            $sanPham = DB::table('gio_hang')
                ->where('sdt', Auth::user()->sdt)
                ->where('chon', 1)
                ->join('san_pham', 'san_pham.barCode', '=', 'gio_hang.barCode')
                ->get();
            $thongTinGH = DB::table('thong_tin_gh')->where('sdt', Auth::user()->sdt)->where('macDinh', 1)->get();
            $maHD = time() . "";
            DB::table('hoa_don')->insert([
                'maHD' => $maHD,
                'sdt' => Auth::user()->sdt,
                'hoTenNhan' => $thongTinGH[0]->hoTenNhan,
                'sdtNhan' => $thongTinGH[0]->sdtNhan,
                'dc' => $thongTinGH[0]->dcNhan,
                'tamTinh' => 0,
                'pThucTT' => $_POST['pttt']
            ]);
            $stt = 0;
            $tamTinh = 0;

            foreach ($sanPham as $sp) {

                try {

                    // Kiểm tra và giảm số lượng
                    $loHang = DB::table('lo_hang')
                        ->where('barCode', $sp->barCode)
                        ->where('lo_hang.soLuongConLai', '>=', $sp->soLuongSP)
                        ->orderBy('ngaySX')->first('maLo')->maLo;
                    DB::table('lo_hang')
                        ->where('barCode', $sp->barCode)
                        ->where('lo_hang.maLo', $loHang)
                        ->update(['soLuongConLai' => DB::raw('soLuongConLai - ' . $sp->soLuongSP)]);

                    //Thêm vào chi tiết
                    $stt++;
                    DB::table('chi_tiet_hd')->insert([
                        'maHD' => $maHD,
                        'sdt' => Auth::user()->sdt,
                        'stt' => $stt,
                        'barCode' => $sp->barCode,
                        'giaGoc' => $sp->giaBan,
                        'phanTramDaGiam' => $sp->phanTramGiam,
                        'SLMua' => $sp->soLuongSP,
                        'loHang' => $loHang
                    ]);
                    $tamTinh += $sp->giaBan * (1 - $sp->phanTramGiam / 100) * $sp->soLuongSP;

                    //Xóa giỏ hàng
                    DB::table('gio_hang')
                        ->where('sdt', Auth::user()->sdt)
                        ->where('chon', 1)
                        ->where('barCode', $sp->barCode)
                        ->delete();
                } catch (Exception $e) {
                }
            }

            //Kiểm tra xem tạo hóa đơn thành công không
            if (DB::table('chi_tiet_hd')->where('maHD', $maHD)->where('sdt', Auth::user()->sdt)->count() == 0) {
                DB::table('hoa_don')->where('sdt', Auth::user()->sdt)->where('maHD', $maHD)->delete();
                session()->flash('fail', 'Sản phẩm đã hết hàng');
                return redirect()->back();
            } else {
                //Cập nhật tiền cho HD
                DB::table('hoa_don')->where('sdt', Auth::user()->sdt)->where('maHD', $maHD)->update(['tamTinh' => $tamTinh]);
                //Thanh toán VNPAYVNPAY

                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = route('endPayVNP');
                $vnp_TmnCode = "7OZY22ID"; //Mã website tại VNPAY 
                $vnp_HashSecret = "NVRKONUMZBSOSMHSNYMZHYZUXSLTZYMP"; //Chuỗi bí mật

                $vnp_TxnRef = $maHD; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = "Thanh toán qua VNPAY";
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = ($tamTinh + 25000) * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = '';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                }

                //var_dump($inputData);
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array(
                    'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                );
                if (isset($_POST['redirect'])) {
                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        // return redirect()->route('thanks');
    }

    public function endPayVNP()
    {
        if (isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] == '00') {
            session()->flash('thanhToan', 'Thanh toán thành công!');
            try {
                DB::table('hoa_don')->where('maHD', $_GET['vnp_TxnRef'])->where('sdt', Auth::user()->sdt)->update([
                    'trangThaiTT' => 1
                ]);
            } catch (Exception $e) {
            }
            try {
                DB::table('vnpay')->insert([
                    'vnp_Amount' => $_GET['vnp_Amount'] / 100,
                    'vnp_BankCode' => $_GET['vnp_BankCode'],
                    'vnp_BankTranNo' => $_GET['vnp_BankTranNo'],
                    'vnp_CardType' => $_GET['vnp_CardType'],
                    'vnp_OrderInfo' => $_GET['vnp_OrderInfo'],
                    'vnp_PayDate' => $_GET['vnp_PayDate'],
                    'vnp_TmnCode' => $_GET['vnp_TmnCode'],
                    'vnp_TransactionNo' => $_GET['vnp_TransactionNo'],
                    'vnp_TxnRef' => $_GET['vnp_TxnRef'],
                    'vnp_SecureHash' => $_GET['vnp_SecureHash'],
                    'sdt' => Auth::user()->sdt
                ]);
            } catch (Exception $e) {
            }
        } else session()->flash('thanhToan', 'Thanh toán không thành công!');
        return view('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
