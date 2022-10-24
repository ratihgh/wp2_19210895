<html>
<head>
	<title>Form Input Data Siswa</title>
</head>
<body>
	<center>
		<form action="<?= base_url('Tugas_uts/cetak'); ?>"
method="post">
			<table>
				<tr>
					<th colspan="3">
						D-Lemas : Form Input Data Siswa
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th align="left">Nama Siswa</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
					</td>
				</tr>
				
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('nama');?></font>
					</td>
				</tr>
				
				<tr>
					<th align="left">NIS</th>
					<td>:</td>
					<td>
						<input type="text" name="nis" id="nis"  value="<?= set_value('nis'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('nis');?></font>
					</td>
				</tr>
				
				<tr>
					<th align="left">Kelas</th>
					<td>:</td>
					<td>
						<input type="text" name="kelas" id="nis"  value="<?= set_value('kelas'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('kelas');?></font>
					</td>
				</tr>
				<tr>
				
				<tr>
					<th align="left">Tanggal Lahir<br>
						<font style="font-size:12;">(format : 2021-04-23)</font>
					</th>
					<td>:</td>
					<td>
						<input type="text" name="tgl" id="tgl"  value="<?= set_value('tgl'); ?>"
					</td>
				</tr>
				
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('tgl');?></font>
					</td>
				</tr>
				<tr>
				<tr>
					<th align="left">Tempat Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="tpt" id="tpt"  value="<?= set_value('tpt'); ?>">
					</td>
				</tr>
				
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('tpt');?></font>
					</td>
				</tr>
				<tr>
				<tr>
					<th align="left">Alamat</th>
					<td>:</td>
					<td>
						<input type="text" name="alm" id="alm"  value="<?= set_value('alm'); ?>">
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('alm');?></font>
					</td>
				</tr>
				
				<tr>
					<th align="left">Jenis Kelamin</th>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
						<input type="radio" name="jk" value="Perempuan">Perempuan<br>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('jk');?></font>
					</td>
				</tr>
				<tr>
					<th align="left">Agama</th>
					<td>:</td>
					<td>
						<select name="agama">
						<option value="" <?php echo set_select('agama', '', TRUE); ?> >--Pilih--</option>
						<option value="2" <?php echo set_select('agama', '2'); ?> >Islam</option>
						<option value="3" <?php echo set_select('agama', '3'); ?> >Katolik</option>
						<option value="4" <?php echo set_select('agama', '4'); ?> >Budha</option>
						<option value="5" <?php echo set_select('agama', '5'); ?> >Hindu</option>
						<option value="6" <?php echo set_select('agama', '6'); ?> >Protestan</option>
						<option value="7" <?php echo set_select('agama', '7'); ?> >Konghuchu</option>
						<option value="8" <?php echo set_select('agama', '8'); ?> >Kristen</option>
						</select> 
					</td>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<td>
						<font style="color:red; font-size:8; align:center;"><?= form_error('agama');?></font>
					</td>
				</tr>
				<tr>
					<td colspan="7">
						<hr>
					</td>
				</tr>	
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>