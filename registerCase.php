<?php require("interface1.php");?>
<div class="container-fluid">
<div class = "row" >
					<div class = "col-md-12">
						<h3><u>補習登記</u></h3>
						<form id = "parentForm" action = "saveParentForm.php" method = 'POST' class="form-horizontal">
							<div class="form-group">
								<label for = "studentName" class="col-sm-3 control-label">學生姓名</label>
								<div class="col-sm-9">
									<input type = 'text' id = "studentName" name = "studentName">	
								</div>
							</div>							
							<div class="form-group">
								<label for = "studentPhone" class="col-sm-3 control-label">電話</label>
								<div class="col-sm-9">
									<input type = 'text' id = "studentPhone" name = "studentPhone" onkeypress="return isNumberKey(event)">	
								</div>
							</div>
							<div class="form-group">
								<label for = "studentArea" class="col-sm-3 control-label">地區</label>
								<div class="col-sm-9">
									<select name = "studentArea" id = "studentArea">	
										<option value = '0'>None Selected</option>					
										<option value = '1'>新界</option>
										<option value = '2'>九龍</option>
										<option value = '3'>香港島</option>
									</select>
								</div>
							</div>
							<div id = 'studentArea2Div' style = "display:none;">
								<div class="form-group">
									<label for = "studentArea2" class="col-sm-3 control-label">地區</label>
									<div class="col-sm-9">
										<select name = "studentArea2" id = "studentArea2">					
											
										</select>
									</div>
								</div>
							</div>		
							<div class="form-group">
								<label for = "house" class="col-sm-3 control-label">屋苑/街道/屋村</label>
								<div class="col-sm-9">
									<input type = 'text' id = "house" name = "house">
								</div>
							</div>	
							<div class="form-group">
								<label for = "studentYear" class="col-sm-3 control-label">學生年級</label>
								<div class="col-sm-9">
									<select id = "studentYear" name = "studentYear">
										<option value = 'P.1'>P.1</option>
										<option value = '升P.1'>升P.1</option>
										<option value = 'P.2'>P.2</option>
										<option value = '升P.2'>升P.2</option>
										<option value = 'P.3'>P.3</option>
										<option value = '升P.3'>升P.3</option>
										<option value = 'P.4'>P.4</option>
										<option value = '升P.4'>升P.4</option>
										<option value = 'P.5'>P.5</option>
										<option value = '升P.5'>升P.5</option>
										<option value = 'P.6'>P.6</option>
										<option value = '升P.6'>升P.6</option>
										<option value = 'F.1'>F.1</option>
										<option value = '升F.1'>升F.1</option>
										<option value = 'F.2'>F.2</option>
										<option value = '升F.2'>升F.2</option>
										<option value = 'F.3'>F.3</option>
										<option value = '升F.3'>升F.3</option>
										<option value = 'F.4'>F.4</option>
										<option value = '升F.4'>升F.4</option>
										<option value = 'F.5'>F.5</option>
										<option value = '升F.5'>升F.5</option>	
										<option value = 'F.6'>F.6</option>
										<option value = '升F.6'>升F.6</option>										
									</select>
								</div>
							</div>	
							<div class="form-group">
								<label for = "studentSubject" class="col-sm-3 control-label">補習科目</label>
								<div class="col-sm-9">
									<select class="form-control" multiple="multiple" name = "studentSubject" id = "studentSubject" >
										<option value = '中文'>中文</option>
										<option value = '英文'>英文</option>
										<option value = '數學'>數學</option>
										<option value = '數學(M1)'>數學(M1)</option>
										<option value = '數學(M2)'>數學(M2)</option>
										<option value = '物理'>物理</option>
										<option value = '化學'>化學</option>
										<option value = '生物'>生物</option>
										<option value = '中史'>中史</option>
										<option value = '西史'>西史</option>
										<option value = '地理'>地理</option>
										<option value = '中國文學'>中國文學</option>
										<option value = '英國文學'>英國文學</option>
										<option value = '經濟'>經濟</option> 
										<option value = '會計(BAFS)'>會計(BAFS)</option>
										<option value = '通識'>通識</option>
										<option value = '普通話'>普通話</option>
										<option value = '英文會話'>英文會話</option> 
										<option value = '日文'>日文</option>
										<option value = '全科'>全科</option>					
									</select>
								</div>
							</div>	
							<div class="form-group">
								<label for = "studentRemark" class="col-sm-3 control-label">備註</label>
								<div class="col-sm-9">
									<input type = 'text' id = "studentRemark" name = "studentRemark">
								</div>
							</div>	
							<div class="form-group">
								<div class="col-sm-3"></div>
								<div class="col-sm-9">
									<button class="btn btn-default" type="button" onclick = "regSubmit()">登記</button>							
								</div>
							</div>
							<input type = "hidden" name = "hiddenStudentYear" id = "hiddenStudentYear" />
							<input type = "hidden" name = "hiddenStudentSubject" id = "hiddenStudentSubject" />
						</form>
					</div>
				</div>
</div>
<?php require("interface2.php");?>