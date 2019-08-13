<?php if ($jenis == "lembar-verifikasi"){
foreach ($data as $key) {} ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>LEMBAR VERIFIKASI DENGAN DATABASE PBB DAN ZONA NILAI</title>
	</head>
	<body>
		<h3>LEMBAR VERIFIKASI DENGAN DATABASE PBB DAN ZONA NILAI</h3>
		<table width="100%" cellpadding="4px">
			<tr>
				<td width="25%">NOMOR</td>
				<td width="1%">:</td>
				<td width="50%"><?= $key->id_transaksi ?></td>
			</tr>
			<tr>
				<td width="25%">TANGGAL PELAYANAN</td>
				<td width="1%">:</td>
				<td width="50%"><?= date_indo(date("Y-m-d", strtotime($key->diubah))) ?></td>
			</tr>
			<tr>
				<td width="25%">NAMA WAJIB PAJAK</td>
				<td width="1%">:</td>
				<td width="50%"><?= $key->nama_wp ?></td>
			</tr>
			<tr>
				<td width="25%">NIK I</td>
				<td width="1%">:</td>
				<td width="50%"><?= $key->nik_wp ?></td>
			</tr>
			<tr>
				<td width="25%">NIK I DST</td>
				<td width="1%">:</td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%">ALAMAT WAJIB PAJAK</td>
				<td width="1%">:</td>
				<td width="50%"><?= $key->alamat_wp ?></td>
			</tr>
			<tr>
				<td width="25%">ALAMAT OBJEK PAJAK</td>
				<td width="1%">:</td>
				<td width="50%"><?= $key->alamat_op ?></td>
			</tr>
			<tr>
				<td width="25%">NOP</td>
				<td width="1%">:</td>
				<td width="50%"><?= nop($key->nop) ?></td>
			</tr>
			<tr>
				<td width="25%">JENIS TRANSAKSI</td>
				<td width="1%">:</td>
				<td width="25%"><?= $key->jenis_transaksi ?></td>
			</tr>
			<tr>
				<td width="25%">TRANSAKSI/NOP</td>
				<td width="1%">:</td>
				<td width="15%" style="text-align: right; padding-right: 30%"><?= rp($key->nilai_transaksi) ?></td>
			</tr>
			<tr>
				<td width="25%">NJOPTKP</td>
				<td width="1%">:</td>
				<td width="25%" style="text-align: right; padding-right: 30%""><?= rp($key->njoptkp) ?></td>
			</tr>
			<tr>
				<td width="25%">NJKP</td>
				<td width="1%">:</td>
				<td width="25%" style="text-align: right; padding-right: 30%""><?= rp($key->njkp) ?></td>
			</tr>
			<tr>
				<td width="25%">BPHTB</td>
				<td width="1%">:</td>
				<td width="50%" style="text-align: right; padding-right: 30%""><?= rp($key->bphtb) ?></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td colspan="3">HASIL VERIVIKASI :</td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%">PBB</td>
				<td width="1%">:</td>
				<td width="50%" style="border-bottom: 1px dashed black"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%">ZONA NILAI</td>
				<td width="1%">:</td>
				<td width="50%" style="border-bottom: 1px dashed black"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%">PARAF KASUBID P2TID</td>
				<td width="1%">:</td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%"></td>
				<td width="1%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td width="25%">PARAF KASUBID PELAYANAN</td>
				<td width="1%">:</td>
				<td width="50%"></td>
			</tr>
		</table>
	</body>
	<script type="text/javascript">
		window.print();
	</script>
	</html>
<?php } ?>

<?php if ($jenis == "ssb"){
for ($i=1; $i <= 5; $i++) {
	if ($i == 1) {
		$untuk = "Untuk Wajib Pajak";
	}elseif ($i == 2) {
		$untuk = "Untuk PPAT";
	}elseif ($i == 3) {
		$untuk = "Untuk BPN<br>Kabupaten Pekalongan";
	}elseif ($i == 4) {
		$untuk = "Untuk BPKB<br>Kabupaten Pekalongan";
	}else{
		$untuk = "Arsip Bendahara";
	} ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>SURAT SETORAN BEA PEROLEHAN HAK ATAS TANAH DAN BANGUNAN (SSB)</title>
	</head>
	<style type="text/css">
		html {
		    font-size: 10px;
		    font-family: "Arial";
		}
	</style>
	<?php foreach ($data as $key){} ?>
	<body>
	<div style="width: 100%; height: 100%;">
		<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="5px">
			<tr>
				<td rowspan="2" style="text-align: center;">
					<img src="http://localhost/bphtb/assets/logokab.png" height="5%">
					<p style="font-weight: bold; font-size: 5px; text-align: center; line-height: 8px">PEMERINTAH DAERAH<br>KABUPATEN PEKALONGAN</p>
				</td>
				<td style="text-align: center; font-size: 18px; font-weight: bold;">SURAT SETORAN<br>BEA PEROLEHAN HAK ATAS TANAH DAN BANGUNAN<br>(SSB)</td>
				<td rowspan="2" style="text-align: center;"><p style="font-weight: bold; font-size: 24px">Lembar <?= $i ?></p><br><p style="margin-top: -30px"><?= $untuk ?></p></td>
			</tr>
			<tr>
				<td style="font-weight: bold; text-align: center;">BERFUNGSI SEBAGAI SURAT PEMBERITAHUAN OBJEK PAJAK<br>PAJAK BUMI DAN BANGUNAN (SPOB PBB)</td>
			</tr>
			<tr>
				<td colspan="3" style="font-weight: bold; text-align: center; font-size: 14px"> BADAN PENGELOLA KEUANGAN DAERAH</td>
			</tr>
			<tr>
				<td colspan="3">
					<table cellpadding="2px" width="100%">
						<tr>
							<td>A. 1. Nama Wajib Pajak</td>
							<td>:</td>
							<td colspan="3"><?= $key->nama_wp ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">2. NPWP</td>
							<td>:</td>
							<td colspan="3"><?= $key->npwp ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">3. Alamat Wajib Pajak</td>
							<td>:</td>
							<td width="45%" style="border-bottom: 1px solid black"><?= $key->alamat_wp ?></td>
							<td>Blok/Kav/Nomor</td>
							<td>:</td>
							<td width="15%" style="border-bottom: 1px solid black"><?= $key->blok_wp ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">4. Kelurahan/Desa</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black"><?= $key->desa_wp ?></td>
							<td>5. Kecamatan</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black"><?= $key->kec_wp ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">6. Kabupaten/Kota</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black"><?= $key->kab_wp ?></td>
							<td>7. Kode Pos</td>
							<td>:</td>
							<td><?= $key->kodepos_wp ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table cellpadding="2px" width="100%">
						<tr>
							<td>B. 1. NOP PBB</td>
							<td>:</td>
							<td colspan="3"><?= nop($key->nop) ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">2. Lokasi Objek Pajak</td>
							<td>:</td>
							<td width="45%" style="border-bottom: 1px solid black"><?= $key->alamat_op ?></td>
							<td>Blok/Kav/Nomor</td>
							<td>:</td>
							<td width="15%" style="border-bottom: 1px solid black"><?= substr($key->nop, 10, 3) ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">3. Kelurahan/Desa</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black"><?= $key->desa_op ?></td>
							<td>5. Kecamatan</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black"><?= $key->kec_op ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">4. Kabupaten/Kota</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black">Pekalongan</td>
							<td>6. Kode Pos</td>
							<td>:</td>
							<td><?= kodepos($key->desa_op) ?></td>
						</tr>
						<tr>
							<td style="padding-left: 20px">Perhitungan NOP PBB</td>
							<td>:</td>
							<td style="border-bottom: 1px solid black"></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td colspan="6">
								<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="2">
									<tr>
										<th width="10%">Objek Pajak</th>
										<th width="30%">Diisi luas tanah dan atau bangunan yang haknya diperoleh</th>
										<th width="30%">Diisi berdasarkan SPPT PBB tahun terjadinya perolehan hak/Tahun .....</th>
										<th colspan="3">Luas x NJOP PBB / m<sup>2</sup></th>
									</tr>
									<tr style="text-align: center;">
										<td rowspan="2">Tanah (bumi)</td>
										<td>7. Luas Tanah (bumi)</td>
										<td>9. NJOP tanah (bumi) / m<sup>2</sup></td>
										<td colspan="3">(angka 7 x angka 9)</td>
									</tr>
									<tr style="text-align: center;">
										<td><?= $key->luas_tanah ?> m<sup>2</sup></td>
										<td style="text-align: left; padding-left: 10px">Rp. <?= rp($key->njop_tanah) ?></td>
										<td width="2%" style="text-align: left;">11</td>
										<td colspan="2" style="text-align: left; padding-left: 10px">Rp. <?= rp($key->luas_tanah*$key->njop_tanah) ?></td>
									</tr>
									<tr style="text-align: center;">
										<td rowspan="2">Bangunan</td>
										<td>8. Luas Bangunan</td>
										<td>10. NJOP Bangunan / m<sup>2</sup></td>
										<td colspan="3">(angka 8 x angka 10)</td>
									</tr>
									<tr style="text-align: center;">
										<td><?= $key->luas_bangunan ?> m<sup>2</sup></td>
										<td style="text-align: left; padding-left: 10px">Rp. <?= rp($key->njop_bangunan) ?></td>
										<td width="1%" style="text-align: left;">12</td>
										<td colspan="2" style="text-align: left; padding-left: 10px">Rp. <?= rp($key->luas_bangunan*$key->njop_bangunan) ?></td>
									</tr>
									<tr style="text-align: center;">
										<td rowspan="2" colspan="3" style="border-left: none; border-bottom: none"></td>
										<td colspan="3">(angka 11 x angka 12)</td>
									</tr>
									<tr style="text-align: center;">
										<td width="1%" style="text-align: left;">13</td>
										<?php $tanahbangunan = ($key->luas_tanah*$key->njop_tanah)*($key->luas_bangunan*$key->njop_bangunan); ?>
										<td colspan="2" style="text-align: left; padding-left: 10px">Rp. <?= rp($tanahbangunan) ?></td>
									</tr>
									<tr style="text-align: center;">
										<td colspan="3" style="text-align: left; border-left: none">14. Jenis perolehan hak atas tanah dan/atau bangunan</td>
										<td width="1%" style="text-align: left;"></td>
										<td width="3%" style="text-align: left;"></td>
										<td style="text-align: left;"><i>Diisi sesuai petunjuk SSB</i></td>
									</tr>
									<tr style="text-align: center;">
										<td colspan="3" style="text-align: left;">15. Harga transaksi yang terjadi pada peroleh hak atas tanah dan/atau bangunan / Nilai Pasar</td>
										<td colspan="3" style="text-align: left; padding-left: 10px">Rp. <?= rp($key->nilai_transaksi) ?></td>
									</tr>
									<tr style="text-align: center;">
										<td colspan="2" style="text-align: left;">16. Nomor Sertifikat Tanah</td>
										<td colspan="4" style="text-align: left;">: <?= $key->no_sertifikat_tanah ?></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="padding: 0px; border: none">
					<table width="100%" cellpadding="5" border="1" style="border-collapse: collapse;">
						<tr style="border-top: 1px solid black; border-bottom: 1px solid black">
							<td colspan="2" width="60%" style="border-right: 1px solid black">C. PERHITUNGAN BPHTB (Hanya diisi berdasarkan Perhitungan Wajib Pajak)</td>
							<td colspan="2" style="text-align: center;"><i>Dalam Rupiah</i></td>
						</tr>
						<tr style="border-top: 1px solid black; border-bottom: 1px solid black">
							<td colspan="2" style="border-right: 1px solid black; padding-left: 20px">Nilai Perolehan Objek Pajak (NPOP)</td>
							<td width="2%" style="text-align: center;">1.</td>
							<?php $npop = $key->nilai_transaksi >= $tanahbangunan ? $key->nilai_transaksi:$tanahbangunan; ?>
							<td style="text-align: center;"><?= rp($npop) ?></td>
						</tr>
						<tr style="border-top: 1px solid black; border-bottom: 1px solid black">
							<td colspan="2" style="border-right: 1px solid black; padding-left: 20px">Nilai Perolehan Objek Pajak TIdak Kena Pajak(NPOPTKP)</td>
							<td width="2%" style="text-align: center;">2.</td>
							<td style="text-align: center;"><?= rp($key->njoptkp) ?></td>
						</tr>
						<tr style="border-top: 1px solid black; border-bottom: 1px solid black">
							<td style="border-right: 1px solid black; padding-left: 20px">Nilai Perolehan Objek Pajak Kena Pajak(NPOPKP)</td>
							<td style="text-align: center;">Angka 1 - angka 2</td>
							<td width="2%" style="text-align: center;">3.</td>
							<td style="text-align: center;"><?= rp($npop-$key->njoptkp) ?></td>
						</tr>
						<tr style="border-top: 1px solid black; border-bottom: 1px solid black">
							<td style="border-right: 1px solid black; padding-left: 20px">Bea Perolehan Hak Atas Tanah dan Bangunan yang terhutang</td>
							<td style="text-align: center;">5% x angka 3</td>
							<td width="2%" style="text-align: center;">4.</td>
							<?php $bphtb = ($npop-$key->njoptkp)*5/100; ?>
							<td style="text-align: center;"><?= rp($bphtb) ?></td>
						</tr>
						<tr style="border-top: 1px solid black; border-bottom: 1px solid black">
							<td colspan="2" style="border-right: 1px solid black; padding-left: 20px">Bea Perolehan Hak Atas Tanah dan Bangunan yang harus dibayar</td>
							<td width="2%" style="text-align: center;">5.</td>
							<td style="text-align: center;"><?= rp($bphtb) ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table cellpadding="5" width="100%">
						<tr>
							<td colspan="3">D. Jumlah setoran berdasarkan : (Beri tanda silang "X" pada kotak sesuai)</td>
						</tr>
						<tr>
							<td width="2%" style="border: 1px solid black;"></td>
							<td width="80%">a. Perhitungan Wajib Pajak</td>
						</tr>
						<tr>
							<td width="2%" style="border: 1px solid black;"></td>
							<td>b. STB / SKBKB / SKBKBT*)<span style="margin-left: 40px">Nomor :______________________________________ Tanggal : ________________________________________</span></td>
						</tr>
						<tr>
							<td width="2%" style="border: 1px solid black;"></td>
							<td>c. Pengurangan dihitung sendiri karena<span style="margin-left: 80px; border: 1px solid black; width: 50px;height: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="border: 1px solid black; width: 50px;height: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
						</tr>
						<tr>
							<td width="2%" style="border: 1px solid black;"></td>
							<td>d. _________________________________</td>
						</tr>
						<tr>
							<td colspan="2"><i>*) Coret yang tidak perlu</i></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="padding: 0px; border: none">
					<table cellpadding="5" width="100%" border="1" style="border-collapse: collapse;" width="100%">
						<tr>
							<td style="padding-left: 40px" width="40%">
								<table>
									<tr>
										<td>Jumlah Pembayaran : Rp. <?= rp($bphtb) ?></td>
										<td></td>
									</tr>
									<tr>
										<td>Terbilang : <?= terbilang($bphtb) ?> Rupiah</td>
										<td></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td></td>
									</tr>
								</table>
							</td>
							<td style="text-align: center; vertical-align: top;" width="20%;">
								KODE BILLING <br>
								<center>
									<table cellpadding="5px">
										<tr>
											<td style="border: 1px solid black">3</td>
											<td style="border: 1px solid black">3</td>
											<td> </td>
											<td style="border: 1px solid black">2</td>
											<td style="border: 1px solid black">6</td>
											<td> </td>
											<td style="border: 1px solid black">1</td>
											<td style="border: 1px solid black">1</td>
											<td> </td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 6, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 7, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 8, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 9, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 10, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 11, 1) ?></td>
											<td> </td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 12, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 13, 1) ?></td>
											<td style="border: 1px solid black"><?= substr($key->kode_billing, 14, 1) ?></td>
										</tr>
									</table>
								</center>
							</td>
							<td style="text-align: center;">
								Untuk disetorkan ke Rekening Kas Daerah Kabupaten Pekalongan <br>
								Kode Akun <br>
								<center>
									<table cellpadding="5px">
										<tr>
											<td style="border: 1px solid black">1</td>
											<td> </td>
											<td style="border: 1px solid black">1</td>
											<td style="border: 1px solid black">0</td>
											<td style="border: 1px solid black">9</td>
											<td> </td>
											<td style="border: 1px solid black">0</td>
											<td style="border: 1px solid black">0</td>
											<td style="border: 1px solid black">0</td>
											<td> </td>
											<td style="border: 1px solid black">8</td>
											<td style="border: 1px solid black">7</td>
											<td style="border: 1px solid black">2</td>
										</tr>
									</table>
								</center>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="padding: 0px; border: none">
					<table cellpadding="5" width="100%" border="1" style="border-collapse: collapse;" width="100%">
						<tr>
							<?php if ($key->dikuasakan): ?>
							<td width="40%" style="text-align: center; vertical-align: top;border-bottom: none">
								MENGETAHUI :<br>
								PPAT/NOTARIS/KEPALA KANTOR LELANG/PEJABAT LELANG<br>/KEPALA KANTOR PERTANAHAN KABUPATEN/KOTA
							</td>
							<?php endif ?>
							<td width="<?= $key->dikuasakan ? "33%":"20%" ?>" style="text-align: center; vertical-align: top;border-bottom: none">
								PETUGAS<br>
								VERIVIKASI/PENGESAHAN<br>
								BPKD KAB. PEKALONGAN<br>
								Tanggal : .................
							</td>
							<td width="<?= $key->dikuasakan ? "33%":"20%" ?>" style="text-align: center; vertical-align: top;border-bottom: none">
								DITERIMA OLEH :<br>
								TEMPAT PEMBAYARAN BPHTB<br>
								Tanggal : .................
							</td>
							<td width="<?= $key->dikuasakan ? "33%":"20%" ?>" style="text-align: center; vertical-align: top;border-bottom: none">
								............... Tgl ..... ............<br>
								WAJIB PAJAK/PENYETOR
							</td>
						</tr>
						<tr style="border-top: none; border-bottom: none">
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php if ($key->dikuasakan): ?>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php endif ?>
						</tr>
						<tr style="border-top: none; border-bottom: none">
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php if ($key->dikuasakan): ?>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php endif ?>
						</tr>
						<tr style="border-top: none; border-bottom: none">
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php if ($key->dikuasakan): ?>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php endif ?>
						</tr>
						<tr style="border-top: none; border-bottom: none">
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php if ($key->dikuasakan): ?>
							<td style="border-top: none; border-bottom: none"> </td>
							<?php endif ?>
						</tr>
						<tr>
							<?php if ($key->dikuasakan): ?>
							<td style="text-align: center; font-size: 8px; border-top: 1px solid black">Nama lengkap, stempel dan tanda tangan</td>
							<?php endif ?>
							<td style="text-align: center; font-size: 8px; border-top: 1px solid black">Nama lengkap, stempel dan tanda tangan</td>
							<td style="text-align: center; font-size: 8px; border-top: 1px solid black">Nama lengkap, stempel dan tanda tangan</td>
							<td style="text-align: center; font-size: 8px; border-top: 1px solid black">Nama lengkap, stempel dan tanda tangan</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="padding: 0px; border: none">
					<table cellpadding="5" width="100%" border="1" style="border-collapse: collapse;" width="100%">
						<tr>
							<td width="20%" style="text-align: center; vertical-align: center;border-bottom: none">
								Hanya diisi<br>
								oleh Petugas
							</td>
							<td style="text-align: left; vertical-align: center;border-bottom: none; background-color: lightgrey">
								<table width="100%">
									<tr>
										<td>Nomor Dokumen</td>
										<td>:</td>
										<td>
											<table width="100%" cellpadding="10">
												<tr>
													<td style="border: 1px solid black; background-color: white; background-color: white"></td>
													<td style="border: 1px solid black; background-color: white; background-color: white"></td>
													<td></td>
													<td style="border: 1px solid black; background-color: white; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white; background-color: white"> </td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
													<td style="border: 1px solid black; background-color: white"> </td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td>NOP PBB</td>
										<td>:</td>
										<td>
											<table width="100%" cellpadding="10">
												<tr>
													<td style="border: 1px solid black; background-color: white">3</td>
													<td style="border: 1px solid black; background-color: white">3</td>
													<td></td>
													<td style="border: 1px solid black; background-color: white">2</td>
													<td style="border: 1px solid black; background-color: white">6</td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 4,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 5,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 6,1) ?></td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 7,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 8,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 9,1) ?></td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 10,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 11,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 12,1) ?></td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 13,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 14,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 15,1) ?></td>
													<td style="border: 1px solid black; background-color: white"><?= substr($key->nop, 16,1) ?></td>
													<td></td>
													<td style="border: 1px solid black; background-color: white"> <?= substr($key->nop, 17,1) ?></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<?php if ($i < 5): ?>
	<div style="page-break-before:always;">
	<br>
	<?php endif ?>
	</body>
	<script type="text/javascript">
		//window.print();
	</script>
	</html>
<?php } } ?>