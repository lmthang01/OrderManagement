<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function exportPDF()
    {
        // Tạo một instance của Dompdf
        $dompdf = new Dompdf();

        // Lấy nội dung view và chuyển đổi thành HTML
        $html = View::make('pdf.my_view')->render();

        // Thêm HTML vào Dompdf
        $dompdf->loadHtml($html);

        // Render file PDF
        $dompdf->render();

        // Xuất file PDF
        $dompdf->stream('my_file.pdf');
    }
}
