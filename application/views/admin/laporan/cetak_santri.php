<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Santri</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head><body>
  
<table style="width: 100%;">
    <tr>
    <td><img src="assets/images/logo.JPG" style="; width: 90px; height: auto;"></td>
        <td align="center">
            <span style="font-size: 25px; line-height: 1.3; font-weight: bold;">
                Pondok Tahfidz Majelis Tazkiyah</span>
            <span style="font-size: 20px; line-height: 1.3;">
         
            <br>Lubuk Begalung</span>
                 <span style="font-size: 20px; line-height: 1.3;">
                <br>Kota Padang, Sumatera Barat 25213</span>
                 <span style="font-size: 20px; line-height: 1.3;">
                <br>Telp: (0751) 27939</span>
          </td>
         
        </tr>
  </table>
  
  <hr class="line-title">
		 <center><p><span style="font-size: 16px;  font-weight: bold;">LAPORAN SANTRI</span></p>
		 </center><br><br>
<table>
<tr style="font-size: 14px; font-weight: bold">
	<td>Kategori Kelompok</td>
	<td> : <?php echo $kategori_kelompok;?></td>
</tr>
</table>
<br><br>
 <table  border="1" cellspacing="0%"" cellpadding="5%" width="100%">
    <tr>
               
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Hp</th>
                <th>Nama Kelompok</th>
                
                <!-- <th>Pengajar</th> -->

                
    </tr>
  <?php foreach($detail as $key => $result):?>
    <tr>
                <td><?php echo $key + 1;?></td>
                <td><?php echo $result['nama_santri'];?></td>
                <td><?php echo $result['jenis_kelamin'];?></td>
                <td><?php echo $result['nohp'];?></td>
                <td><?php echo $result['namakelompok'];?></td>
                
                <!-- <td><?php echo $result['idpengajar'];?></td> -->
                
                                
	</tr>
            <?php endforeach;?>
            <!-- <tr>
                <td colspan="3" style="padding: 25px;" align="center"><b>TOTAL SANTRI</b></td>
                <td><?php echo $key + 1;?></td>
             
          </tr> --> 
   

  </table>
  <table style="font-weight: bold;" align="right">
    		<tr><td><br><br><br><br><br><br></td>
    			<td>Padang, <?php echo date("d") . " " . date("F") . " " . date("Y"); ?> <br><br>Kepala Pondok<br></td>
   			</tr>
    		<tr>
    			<td><br><br><br><br><br><br><br><br></td>
          <td height="100">(Ustadz Yandi) <br><br>Nip. 19590919 198003 2 005</td>
          
        </tr>
		</table>
<br><br><br><br><br><br><br><br><br><br><br>
</body></html>