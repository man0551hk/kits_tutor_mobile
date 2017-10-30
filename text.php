<?php require("interface1.php");?>

	<div class="container-fluid">
		<div class="row">

			<div class = "col-xs-12 col-sm-12 col-md-4" style = "background-color:#F4F3F2;padding-top:5px;padding-bottom:5px;">
				<img src="image/job_setting.jpg"  border="0" class="img-responsive" alt="Responsive image">		
				
				
				<form id = "topSerach" >
					時薪
					<input type="text" id="amount" style="background-color : #F4F3F2; border: 0; color: #f6931f; font-weight: bold;" value = "$50 - $400" readonly/>
					<div id="slider-range"></div>
					<div style = "height:5px;"></div>
					年級
					<input type="text" id="year" style="background-color : #F4F3F2; border: 0; color: #f6931f; font-weight: bold;" value = "K.1 - F.7" readonly/>
					<div id = "slider-year"></div>
					<div style = "height:5px;"></div>
					
					<select class="form-control">
						<option value = '0'>補習科目</option>
						<option value = ''>中文</option>
						<option value = ''>英文</option>
						<option value = ''>數學</option>
						<option value = ''>數學(M1)</option>
						<option value = ''>數學(M2)</option>
						<option value = ''>物理</option>
						<option value = ''>化學</option>
						<option value = ''>生物</option>
						<option value = ''>中史</option>
						<option value = ''>西史</option>
						<option value = ''>地理</option>
						<option value = ''>中國文學</option>
						<option value = ''>英國文學</option>
						<option value = ''>經濟</option> 
						<option value = ''>會計(BAFS)</option>
						<option value = ''>通識</option>
						<option value = ''>普通話</option>
						<option value = ''>英文會話</option> 
						<option value = ''>日文</option>
						<option value = ''>全科</option>					
					</select>
					<div style = "height:5px;"></div>
					
					
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							
						</ul>
					</div>
					<div style = "height:5px;"></div>
					
					<table>
						<tr>
							<td>
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="parentArea" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										地區
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="parentArea">
										<li><a href="#">新界</a></li>  
										<li><a href="#">九龍</a></li>  
										<li><a href="#">香港島</a></li> 
									</ul>
								</div>	
							</td>
							<td width = "5px;"></td>
							<td>
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="subArea" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">										
										選擇
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="subArea">
										
									</ul>
								</div>	
							</td>
						</tr>
					</table>
					

					

					
					<div style = "height:5px;"></div>
					關鍵字
					<input type = 'text' id = "keywordSearch" name = "keywordSearch">					
					<a href = "javascript:Reset();">重設</a>
				</form>	
						
			</div>		
			<div  class = "col-xs-12 col-sm-12 col-md-4" >
				<!--<div id = "content" class= "content" >
				</div>-->
			</div>			
			<div class = "col-md-4">			
			</div>				
		</div>
	</div>
<?php require("interface2.php");?>