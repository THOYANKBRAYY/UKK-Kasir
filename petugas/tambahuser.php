<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Tambah User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">userID:</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="userID">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">namauser:</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="NamaUser">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
    include_once("../koneksi/koneksi.php");
    if(isset($_POST['submit'])) {
        $id = $_POST['userID'];
		$name = $_POST['namauser'];
		$password = md5($_POST['password']);
		

		// Insert user data into table
		$result = mysqli_query($con, "INSERT INTO user (userID,username, Password) VALUES('$id','$name','$password')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php?page=user'>View Users</a>";
	} 
?>