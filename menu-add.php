<?php
		require_once("connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$menuname = $_POST["menu"];
  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($menuname == "" ) {
				   echo "Chưa nhập thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from menu where menu='$menuname'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Menu đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO menu(
	    					menu
	    					) VALUES (
	    					'$menuname'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "Thêm menu thành công";
					}
									    
					
			  }
	}
?>