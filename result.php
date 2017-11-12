<?php require("interface1.php");?>
<?php
$amountStart = $_POST["amountStart"];
$amountEnd = $_POST["amountEnd"];
$yearStart = $_POST["yearStart"];
$yearEnd = $_POST["yearEnd"];
$selectedSubject = $_POST["selectedSubject"];
$area = $_POST["area"];
$selectedDistrict = $_POST["selectedDistrict"];
$keywordSearch = $_POST["keywordSearch"];
// echo $amountStart."<br/>";
// echo $amountEnd."<br/>";
// echo $yearStart."<br/>";
// echo $yearEnd."<br/>";
// echo $selectedSubject."<br/>";
// echo $area."<br/>";
// echo $selectedDistrict."<br/>";
// echo $keywordSearch."<br/>";
?>
<script>
    window.onload = function() 
    {
        Load();
        masterSearch(<?php echo $amountStart;?>, <?php echo $amountEnd;?>, <?php echo $yearStart;?>, <?php echo $yearEnd;?>, 
        "<?php echo $selectedSubject;?>", "<?php echo $selectedDistrict;?>", "<?php echo $keywordSearch;?>", "<?php echo $keywordSearch;?>");
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class = "col-md-1">
            <button onclick = 'javascript:window.history.back();' class = "btn-primary">返回</button>
        </div>
    </div>
</div>
<br/>
<div class="container-fluid">
    <div id = "content"></div>
</div>

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
															<div class="col-md-12" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'mobile' id = 'mobile' style ="width:320px;">
															</div>
														</div>
														
														<div class="form-group">
															<label for="CName" class="col-sm-2 control-label">導師姓名</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'CName' id = 'CName' style ="width:320px;">
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
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'need_salary' id = 'need_salary' style ="width:320px;">
															</div>
														</div>				
														
														 <div class="form-group">
															<label for="need_salary" class="col-sm-12 control-label" style = "text-align:left;">填入自己許可的時間有助增加受聘的機會</label>
														</div>		
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期一</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'mon' id = 'mon' style ="width:320px;">
															</div>
														</div>					
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期二</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'tue' id = 'tue' style ="width:320px;"> 
															</div>
														</div>						

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期三</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'wed' id = 'wed' style ="width:320px;">
															</div>
														</div>						
														
														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期四</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'thur' id = 'thur' style ="width:320px;">
															</div>
														</div>	

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期五</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'fri' id = 'fri' style ="width:320px;">
															</div>
														</div>	

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期六</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'sat' id = 'sat' style ="width:320px;">
															</div>
														</div>	

														<div class="form-group">
															<label for="need_salary" class="col-sm-2 control-label">星期日</label>
															<div class="col-sm-10" style = "border-bottom:1px solid gray;">
																<input type = 'text' name = 'sun' id = 'sun' style ="width:320px;">
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

<?php require("interface2.php");?>