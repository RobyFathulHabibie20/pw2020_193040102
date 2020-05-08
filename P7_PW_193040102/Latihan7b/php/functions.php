<?php
	// function untuk melakukan koneksi ke database
	function koneksi() {
		$conn = mysqli_connect("localhost","root","") or die ("koneksi ke DB gagal");
		mysqli_select_db($conn, "pw_193040102") or die ("Database salah!");

		return $conn;
	}

	// function untuk melakukan query ke database
	function query($sql) {
		$conn = koneksi();
		$result = mysqli_query($conn, "$sql");

		$rows = [];
		while ($mkn2 = mysqli_fetch_assoc($result)) {
			$rows[] = $mkn2;
		}
		
		return $rows;
	}

	// fungsi untuk menambahkan data di dalam database
	function tambah($data)
	{
		$conn = koneksi();

		$nama = htmlspecialchars($data['nama']);
		$jenis = htmlspecialchars($data['jenis']);
		$bahan = htmlspecialchars($data['bahan']);
		$asal = htmlspecialchars($data['asal']);
		$harga = htmlspecialchars($data['harga']);
		$gambar = htmlspecialchars($data['gambar']);

		$query = "INSERT INTO makanan2
					VALUES ('','$nama','$jenis','$bahan','$asal','harga','$gambar')";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);			
	}

	// fungsi untuk menghapus data di dalam database
	function hapus($id)
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM makanan2 WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	// fungsi untuk mengubah data
	function ubah($data)
	{
		$conn = koneksi();

		$id = htmlspecialchars($data['id']);
		$nama = htmlspecialchars($data['nama']);
		$jenis = htmlspecialchars($data['jenis']);
		$bahan = htmlspecialchars($data['bahan']);
		$asal = htmlspecialchars($data['asal']);
		$harga = htmlspecialchars($data['harga']);
		$gambar = htmlspecialchars($data['gambar']);

		$query = "UPDATE makanan2
					SET
					gambar = '$gambar',
					nama = '$nama',
					jenis = '$jenis', 
					bahan = '$bahan',
					asal = '$asal',
					harga = '$harga'
					WHERE id = '$id'
					";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);	
	}

	function registrasi($data)
	{
		$conn = koneksi();
		$username = strtolower(stripcslashes($data['username']));
		$password = mysqli_real_escape_string($conn, $data['password']);

		$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
		if (mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('Username sudah digunakan');
				  </script>";
			return false;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);
		$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
		mysqli_query($conn, $query_tambah);

		return mysqli_affected_rows($conn);
	}
?>