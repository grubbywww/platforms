<?php /* Smarty version 2.6.28, created on 2017-03-15 20:01:15
         compiled from main.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->

	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">

					<li class="menu-dropdown mega-menu-dropdown active">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Other Monitor <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu tops" style="min-width: 710px">
							 <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                                                <li>
                                                    <a href="?serv=<?php echo $this->_tpl_vars['val']['app']; ?>
" class="iconify">
                                                   <i class="fa fa-angle-right"></i>
                                                    <?php echo $this->_tpl_vars['val']['app']; ?>
 </a>
                                                </li>
                                                <?php endforeach; endif; unset($_from); ?>
						</ul>
					</li>
					<li class="admin menu-dropdown mega-menu-dropdown" style="display: none">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Admin <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu " style="min-width: 710px">

                                                <li>
                                                    <a href="/app/admin/admin.php" class="iconify">
                                                   <i class="fa fa-angle-right"></i>
                                                    权限</a>
                                                	</li>
                                                	<li>
                                                    <a href="/app/admin/group.php" class="iconify">
                                                   <i class="fa fa-angle-right"></i>
                                                    分组</a>
                                                	</li>
                                                	   <li>
                                                    <a href="/app/admin/item.php" class="iconify">
                                                   <i class="fa fa-angle-right"></i>
                                                    项目添加</a>
                                                	</li>



						</ul>
					</li>

					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>MONITOR<small> platform</small></h1><input type="hidden" id="roles" value="<?php echo $this->_tpl_vars['role']; ?>
">
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<!-- BEGIN THEME PANEL -->

				<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">CREATE URL</h4>
						</div>
						<div class="modal-body">
							     <form action="#" class="form-horizontal">
                                            <div class="form-body">

                                                    <div class="form-group">
                                                    <label class="col-md-3 control-label">DESCRIPTION</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon">
                                                        <i class="fa fa-envelope"></i>
                                                            <input type="text" class="form-control circle" placeholder="描述" id="desc">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">PROXY URL</label>
                                                    <div class="col-md-8">
                                                         <div class="input-icon">
                                                            <i class="fa fa-envelope"></i>
                                                            <input type="text" class="form-control circle" placeholder="代理URL https://platform.op.easemob.com:port" id="purl" onblur="check_port()" value="https://platform.op.easemob.com:">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">TRANSFER URL</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon">
                                                            <i class="fa fa-envelope"></i>
                                                            <input type="text" class="form-control circle" placeholder="转发URL" id="murl" value="http://">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue" onclick="add()">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">PlateForm</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Monitor</a>

				</li>

			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">

					<!-- BEGIN PORTLET-->
					<div class="portlet light">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase" id="item"><?php echo $this->_tpl_vars['item']; ?>
</span>
								<span class="badge badge-danger" id="count"><?php echo $this->_tpl_vars['num']; ?>
</span>
							</div>
							<div class="tools" style="display: none">
                            <div class="actions">
                             <a href="javascript:;" class="btn btn-sm btn-circle btn-default easy-pie-chart-reload" data-toggle="modal" data-target="#portlet-config">
                                <i class="fa fa-repeat"></i> Create</a></div>


							</div>
						</div>

						<div class="portlet-body form" >

							<form role="form" class="form-horizontal form-bordered">
								<div class="form-body conts">

                                <?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
									<div class="form-group" vl="<?php echo $this->_tpl_vars['val']['item']; ?>
">

										<div class="col-md-10">
											<div class="noUi-control noUi-success" id="slider_0">
		 <a class="desc label label-success" style="cursor: pointer;"  hr="<?php echo $this->_tpl_vars['val']['web_url']; ?>
" href="<?php echo $this->_tpl_vars['val']['web_url']; ?>
" target="_blank" ><?php echo $this->_tpl_vars['val']['comment']; ?>
</a>
		</div>
										</div>


							<div class="col-md-2 del" style="display: none;">
							<div class="noUi-control noUi-success" id="slider_1" >

<a class="btn btn-circle btn-icon-only btn-danger"  onclick="del(this)" style="margin-left: 20px">
									<i class="icon-trash"></i>
									</a>
<a class="btn btn-circle btn-icon-only btn-success"  onclick="edit(this,'<?php echo $this->_tpl_vars['val']['item']; ?>
','<?php echo $this->_tpl_vars['val']['web_url']; ?>
','<?php echo $this->_tpl_vars['val']['comment']; ?>
')">
									<i class="icon-wrench"></i>
									</a>

								</div>
							</div>

									</div>
                                    <?php endforeach; endif; unset($_from); ?>





								</div>

							</form>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
		<!-- BEGIN PAGE CONTENT -->
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" style="width:1200px">
    <div class="modal-content" style="width:1200px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" style="z-index:1000">
        <iframe src="" id="ifr" width="1150px" height="800px" frameborder="0"  scrolling="auto"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>