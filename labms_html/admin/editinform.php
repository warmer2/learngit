<?php include"topcommon.php"?>

			<!-- start: Content -->
			<div id="content" class="span10">
			
			<!-- 页面定位显示 -->
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">首页</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">发布公告</a></li>
			</ul>
			<!-- End -->  
			
            <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>发布公告</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">题目</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">日期</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="08/04/15">
							  </div>
							</div>
        					
                            <!-- 配置富文本编辑器 -->
                                <!-- 配置文件 -->
                                <script type="text/javascript" src="../plugins/ueditor1_4_3/ueditor.config.js"></script>
                                <!-- 编辑器源码文件 -->
                                <script type="text/javascript" src="../plugins/ueditor1_4_3/ueditor.all.js"></script>
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue = UE.getEditor('container');
                                </script>	
                            <!-- End -->

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">内容</label>
							  <div class="controls">
								<!-- 加载编辑器的容器 -->
								<script id="container" name="content" type="text/plain"  style="width:85%"></script>
							  </div>
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="fileInput">附件</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>  
                            
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">提交</button>
							  <button type="reset" class="btn">重置</button>
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->

			</div><!--/row-->
            
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

<?php include"footer.php"?>	