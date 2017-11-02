<?php require("interface1.php");?>

	<div class="container">

				<div class = "row" style = "background-color:#F4F3F2;align:center;">
					<div class = "col-md-12" style = "">
						<img src="image/job_setting.jpg"  border="0" class="img-responsive" alt="Responsive image" />		
						
						<form id = "topSerach" class="form-horizontal" action = "result.php" method = "post">
							時薪
							<input type="text" id="amount" style="background-color : #F4F3F2; border: 0; color: #f6931f; font-weight: bold;" value = "$50 - $400" readonly/>
							<input type = "hidden" value = "50" name = "amountStart"  id = "amountStart"/>
							<input type = "hidden" value = "400" name = "amountEnd"  id = "amountEnd"/>
							<div id="slider-range"></div>
							<div style = "height:5px;"></div>
							年級
							<input type="text" id="year" style="background-color : #F4F3F2; border: 0; color: #f6931f; font-weight: bold;" value = "K.1 - F.7" readonly/>
							<input type = "hidden" value = "0" name = "yearStart" id = "yearStart"/>
							<input type = "hidden" value = "15" name = "yearEnd" id = "yearEnd"/>
							<div id = "slider-year"></div>
							<div style = "height:5px;"></div>
							
							<div class="form-group">
								<label for = "subject" class="col-sm-3 control-label">補習科目</label>
								<div class="col-sm-9">
									<input type = 'hidden' value = '' name = 'selectedSubject' id = 'selectedSubject' />
									<select class="form-control" multiple="multiple" name = "subject" id = "subject" >
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
								<label for = "area" class="col-sm-3 control-label">地區</label>
								<div class="col-sm-9">
									<select name = "area" id = "area">	
										<option value = '0'>None Selected</option>					
										<option value = '1'>新界</option>
										<option value = '2'>九龍</option>
										<option value = '3'>香港島</option>
									</select>
								</div>
							</div>
							<div id = 'area2Div' style = "display:none;">
								<input type = 'hidden' value = '' name = 'selectedDistrict' id = 'selectedDistrict' />
								<div class="form-group">
									<label for = "distict" class="col-sm-3 control-label">地區</label>
									<div class="col-sm-9">
										<select  multiple = "multiple" name = "area2" id = "area2">					
											
										</select>
									</div>									
								</div>
							</div>
							<div class="form-group">
								<label for = "keywordSearch" class="col-sm-3 control-label">關鍵字</label>
								<div class="col-sm-9">
									<input type = 'text' id = "keywordSearch" name = "keywordSearch">					
									<a href = "javascript:Reset();">重設</a>
								</div>	
							</div>
							<input type = "submit" class="btn btn-block btn-primary block" value ="搜尋" />
							<br/><br/><br/>
						</form>	
					</div>
				</div>

	</div>
<?php require("interface2.php");?>