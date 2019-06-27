<?php

require_once('tcpdf.php');

$con= mysqli_connect("localhost","root",'','db_bhn') ;
         mysqli_query($con, "SET NAMES 'utf8' ");


date_default_timezone_set("Asia/Bangkok");
$id = $_GET['id'];
$addfood="SELECT
tb_product.pro_name,
tb_orders_detail.Qty,
tb_product.pro_price,
tb_orders_detail.OrderID
FROM
tb_orders_detail INNER JOIN
tb_product ON tb_orders_detail.ProductID = tb_product.pro_id WHERE OrderID = $id";
 $query = mysqli_query($con, $addfood);



// สร้าง Class ใหม่ขึ้นมา กำหนดให้สืบทอดจาก Class ของ TCPDF
class MindphpTCPDF extends TCPDF
{
    // สร้าง function ชื่อ Header สำหรับปรับแต่งการแสดงผลในส่วนหัวของเอกสาร
    public function Header()
    {
        // สร้างคำสั่ง HTML ในตัวอย่างนี้ สร้างตาราง 2 คอลัมน์
        // คอลัมน์แรก สำหรับแสดงรูปภาพ คำสั่ง HTML แสดงรูปภาพและต้องใช้ URL แบบเต็ม
        // คอลัมน์ที่สอง สำหรับแสดงข้อความ
        // $html = '<table><tr>'

        //     . '<td width="70"><img src="img/logo.jpg" width="100" /></td>'
        //     . '<td width="200" align="center"></td>'
        //     . '<td width="290" align="" ><h5>Longdoo Café</h5><h5>ที่อยู่ : 30/1 ม.7 ต.หนองจ๊อม อ.สันทราย จ.เชียงใหม่ 50290</h5><h5>Tel : 098 287 3867</h5></td></tr>'
        //     . '</table><hr />';

$html = '<table border="" width="720" cellpadding="10">';
$html .= '<tr>';
$html .= '<td width="500" align="center"><h1> ใบเสร็จรับเงิน </h1></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td width="80"><img src="img/logoo.png" width="100" /></td>';

$html .= '<td width="400" align="" ><h5>ที่อยู่ :ศูนย์เรียนรู้เศรษฐกิจพอเพียงบ้านโฮ่งนอก ต.แม่แรม อ.แม่ริม จ.เชียงใหม่ 58180 </h5><h5>Tel : 081 883 2096 </h5><h5>วันที่ออกใบเสร็จ :';
$html .=  date("d/m/Y") ;
$html .= '</h5></td>';
$html .= '</tr>';
$html .= '</table><hr />' ;

        $this->writeHTMLCell('', '', '', '', $html);
    }



    // สร้าง function ชื่อ Footer สำหรับปรับแต่งการแสดงผลในส่วนท้ายของเอกสาร
    public function Footer()
    {
        // กำหนดตำแหน่งที่จะแสดงรูปภาพและข้อความ 15mm นับจากท้ายเอกสาร
        $this->SetY(-15);
        // คำสั่งสำหรับแทรกรูปภาพ กำหนดที่อยู่ไฟล์รูปภาพในเครื่องของเรา
        $this->Image('tcpdf_logo.png');

        // สำหรับตัวอักษรที่จะใช้คือ helvetica เป็นตัวหนา และขนาดอักษรคือ 10
        $this->SetFont('helvetica', 'B', 10);
        // คำสั่งสำหรับแสดงข้อความ โดยกำหนด ความกว้าง และ ความสูงของข้อความได้ใน 2 ช่องแรก
        // ช่องที่ 3 คือข้อความที่แสดง ส่วนค่า C คือ กำหนดให้แสดงข้อความตรงกลาง
        $this->Cell('', '', '', 0, false, 'C');

        // สำหรับตัวอักษรที่จะใช้คือ helvetica เป็นตัวเอียง และขนาดอักษรคือ 8
        $this->SetFont('helvetica', 'I', 8);
        // คำสั่งสำหรับแสดงข้อความ โดยกำหนด ความกว้าง และ ความสูงของข้อความได้ใน 2 ช่องแรก
        // ช่องที่ 3 คือข้อความที่แสดง $this->getAliasNumPage() คือ หมายเลขหน้าปัจจุบัน และ $this->getAliasNbPages() จำนวนหน้าทั้งหมด
        // ส่วนค่า R คือ กำหนดให้แสดงข้อความชิดขวา
      
    }
}

$pdf = new MindphpTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8');
$pdf->setHeaderFont(array('freeserif', '', 12));

$pdf->SetCreator('Mindphp');
$pdf->SetAuthor('Mindphp Developer');
$pdf->SetTitle('Mindphp Example 03');
$pdf->SetSubject('Mindphp Example');
$pdf->SetKeywords('Mindphp, TCPDF, PDF, example, guide');

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->AddPage();

$strSQL4 = "SELECT * FROM tb_order WHERE order_id = '".$id."' ";
$objQuery4 = mysqli_query($con,$strSQL4);
$array4= mysqli_fetch_array($objQuery4);

$html = '<table border="" width="720" cellpadding="10">';
$html .= '</table>' ;
$html .= '<table border="" width="720" cellpadding="10">';
$html .= '<tr>';
$html .= '<td width="70%" align="center"><h2>รายการสินค้า</h2></td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '<table border="1"  width="720" cellpadding="10">';
$html .= '<tr style="background-color:Aquamarine   ;">';
$html .= '<td width="18%"><h4>ชื่อสินค้า </h4></td>';
$html .= '<td width="18%"><h4>จำนวน </h4></td>';
$html .= '<td width="17%"><h4>ราคา(ต่อหน่วย) </h4></td>';
$html .= '<td width="17%"><h4>ราคารวม </h4></td>';
$html .= '</tr>';
while($array= mysqli_fetch_array($query)){
$html .= '<tr>';
$html .= '<td width="18%"><h5>';
$html .= $array["pro_name"];
$html .= '</h5></td>';
$html .= '<td width="18%"><h5>';
$html .= $array["Qty"];
$html .= '</h5></td>';
$html .= '<td width="17%"><h5>';
$html .= $array["pro_price"];
$html .= '</h5></td>';
$html .= '<td width="17%"><h5>';
$html .= $array["Qty"] * $array["pro_price"];
$html .= '</h5></td>';
$html .= '</tr>';
}

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM tb_orders_detail WHERE OrderID = '$id ' ";
$objQuery2 = mysqli_query($con,$strSQL2);
while($objResult2 = mysqli_fetch_array($objQuery2))
{
$strSQL3 = "SELECT * FROM tb_product WHERE pro_id = '".$objResult2["ProductID"]."' ";
$objQuery3 = mysqli_query($con,$strSQL3);
$objResult3 = mysqli_fetch_array($objQuery3);
$Total = $objResult2["Qty"] * $objResult3["pro_price"];
$SumTotal = $SumTotal + $Total;
}
$html .= '</table>';
$html .= '<table border="" width="720" cellpadding="10">';
$html .= '<tr>';
$html .= '<td width="520" align="right"><h4>ราคารวม : ';
$html .=  number_format($SumTotal,2);
$html .= ' บาท</h4></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td width="70%"></td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '<table border="" width="720" cellpadding="10">';
$html .= '<tr>';
$html .= '<td width="70%" align="left"><h3>ที่อยู่ผู้สั่งสินค้า</h3></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td width="70%"><h4>    ชื่อ สกุล : ';
$html .= $array4["Name"];
$html .= '</h4><h4>   ที่อยู่ : ';
$html .= $array4["Address"];
$html .= '</h4><h4>    เบอร์ติดต่อ : ';
$html .= $array4["Tel"];
$html .= '</h4><h4>    อีเมล์ : ';
$html .= $array4["Email"];
$html .= '</h4></td>';
$html .= '</tr>';
$html .= '</table>' ;
$pdf->SetFont('freeserif', '', 12);
$pdf->writeHTMLCell(0, 0, '', 50, $html, 0, 1, 0, true, '', true);

$pdf->Output('mindphp03.pdf', 'I');
