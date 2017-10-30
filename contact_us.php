<?php require("interface1.php");?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<a href='tutor_up_email_step1.php'>如想設定接收/拒絕本公司補習電郵宣傳請按這裡!!!</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style = "background-color:#E8E8E8; padding-top:10px;">
			<form action = 'contact_us1.php' method = 'POST' name ='contact_us_form' class="form-horizontal">			
			    
				<div class="form-group">
				    <label for="name" class="col-sm-5 control-label">英文姓名（請留全名）</label>
					<div class="col-sm-7">
						<input type = 'text' name = 'name' id = 'name'>
					</div>
				</div>
				
				<div class="form-group">
				    <label for="number" class="col-sm-5 control-label">聯絡電話</label>
					<div class="col-sm-7">
						<input type = 'text' name = 'number' id = 'number'>
					</div>
				</div>				
				
				<div class="form-group">
				    <label for="email" class="col-sm-5 control-label">聯絡電郵</label>
					<div class="col-sm-7">
						<input type = 'text' name = 'email' id = 'email'>
					</div>
				</div>		

				<div class="form-group">
				    <label for="heading" class="col-sm-5 control-label">查詢主題</label>
					<div class="col-sm-7">
						<input type = 'text' name = 'heading' id = 'heading'>
					</div>
				</div>					
				
				<div class="form-group">
				    <label for="content1" class="col-sm-5 control-label">有關問題詳細資料</label>
					<div class="col-sm-7">
						<textarea rows = "8" class="form-control" id="content1"  id = 'content1' ></textarea>
						本公司辦公時間: 逢星期一至六上午9:00至晚上10:00
					</div>
				</div>					
				
				<div class="form-group">
				    <label for="submit" class="col-sm-5 control-label"></label>
					<div class="col-sm-7">
						<input type="submit" name="Submit" value="送出">
					</div>
				</div>	
				
			</form>
			</div>
			<div class="col-md-8" style = "background-color:#E8E8E8">
			</div>
		</div>
	</div>
					
<?php require("interface2.php");?>			