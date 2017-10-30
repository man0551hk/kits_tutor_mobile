<?php require("interface1.php");?>

	<div class="container-fluid">
		<div class="row">

			<div class = "col-xs-12 col-sm-12 col-md-4" style = "padding-top:5px;padding-bottom:5px;">
				<div class = "row" style = "background-color:#F4F3F2;">
					<div class = "col-md-12">
						<img src="image/job_setting.jpg"  border="0" class="img-responsive" alt="Responsive image">		
						<div id = "debug"></div>
						<form id = "topSerach" class="form-horizontal" >
							時薪
							<input type="text" id="amount" style="background-color : #F4F3F2; border: 0; color: #f6931f; font-weight: bold;" value = "$50 - $400" readonly/>
							<div id="slider-range"></div>
							<div style = "height:5px;"></div>
							年級
							<input type="text" id="year" style="background-color : #F4F3F2; border: 0; color: #f6931f; font-weight: bold;" value = "K.1 - F.7" readonly/>
							<div id = "slider-year"></div>
							<div style = "height:5px;"></div>
							
							<div class="form-group">
								<label for = "subject" class="col-sm-3 control-label">補習科目</label>
								<div class="col-sm-9">
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
								<div class="form-group">
									<label for = "area2" class="col-sm-3 control-label">地區</label>
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
						</form>	
					
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">補習個案內容</h4>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-8">
													<form action = 'tutorSumitJob1.php' method = 'POST' name ='apply_form' class="form-horizontal">			
														<div class="form-group">
															<div class="col-sm-10">
																<input class="form-control" type="text" name = 'job_number' id = 'job_number' readonly>
															</div>
														</div>		
														<div class="form-group">
															<label for="case_content1" class="col-sm-2 control-label">個案內容</label>
															<div class="col-sm-8">
															  <textarea rows = "8" class="form-control" id="case_content1"  id = 'case_content1' readonly></textarea>
															</div>
														</div>	
														<div class="form-group">
															<label for="mobile" class="col-sm-2 control-label">手提電話</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'mobile' id = 'mobile'>
															</div>
														</div>
														
														<div class="form-group">
															<label for="CName" class="col-sm-2 control-label">導師姓名</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'CName' id = 'CName'>
															</div>
														</div>	

														<div class="form-group">
															<label for="subSelfIntro" class="col-sm-2 control-label">個人簡介</label>
															<div class="col-sm-8">
																<textarea rows = "8" class="form-control" id="subSelfIntro"  id = 'subSelfIntro' ></textarea>
															</div>
														</div>
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">要求薪金</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'need_salary' id = 'need_salary'>
															</div>
														</div>				
														
														 <div class="form-group">
															<label for="need_salary" class="col-sm-12 control-label" style = "text-align:left;">填入自己許可的時間有助增加受聘的機會</label>
														</div>		
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期一</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'mon' id = 'mon'>
															</div>
														</div>					
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期二</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'tue' id = 'tue'>
															</div>
														</div>						

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期三</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'wed' id = 'wed'>
															</div>
														</div>						
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期四</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'thur' id = 'thur'>
															</div>
														</div>	

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期五</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'fri' id = 'fri'>
															</div>
														</div>	

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期六</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'sat' id = 'sat'>
															</div>
														</div>	

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期日</label>
															<div class="col-sm-10">
																<input type = 'text' name = 'sun' id = 'sun'>
															</div>
														</div>	

													</form>
												</div>
												<div class="col-md-4">
													<div id="googleMap"  style="width:300px;height:300px;"></div>
													 <!-- <div id="adv"  style="width:300px;height:300px;">
													放廣告位置<a href='image/20150407.jpg' target='_blank'><img src="image/20150407.jpg"  border="0" width="212" height="300"></a>
													</div>	-->						
												</div>		
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
										<button type="button" class="btn btn-primary" id = "applyBtn">應徵</button>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12"><div style = "height:10px;"></div></div>
				</div>
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
			<div  class = "col-xs-12 col-sm-12 col-md-8" id = "content" >
				
			</div>			
						
		</div>
	</div>
<?php require("interface2.php");?>