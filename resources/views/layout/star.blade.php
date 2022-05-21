<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Halaman Admin</title>
</head>

<body style="background-color: #e2edff;">

    @yield('container')

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0DCAF0" fill-opacity="1" d="M0,0L40,5.3C80,11,160,21,240,37.3C320,53,400,75,480,106.7C560,139,640,181,720,208C800,235,880,245,960,229.3C1040,213,1120,171,1200,128C1280,85,1360,43,1400,21.3L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
	<footer class="bg-primary text-white p-3 text-center">
		<p>Created with love</i> by <a href="https://www.instagram.com/sady_ns/" class="text-white">Sadi Nur Sholeihin</a></p>
	</footer>
	
	{{-- sweetalert --}}
	{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	{{-- jquery --}}
	{{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>  --}}
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
{{-- <script>
	$('.delete').click(function(){
		var students = $(this).attr('data-id');
		swal({
			title: "Apakah kamu yakin?",
			text: "Kamu akan menghapus data mahasiswa dengan id "+students+"",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				window.location = "/delete/"+students+""
				swal("Data  telah dihapus!", {
				icon: "success",
				});
			} else {
				swal("Data Tidak Jadi Di Hapus");
			}
			});
	}); --}}
			
</script>

</html>
