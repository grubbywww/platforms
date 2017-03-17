<?php /* Smarty version 2.6.28, created on 2016-11-21 00:11:17
         compiled from admin/admin.html */ ?>
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
                                                    <a href="/app/main.php?serv=<?php echo $this->_tpl_vars['val']['app']; ?>
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
                <h1>MONITOR<small>权限</small></h1><input type="hidden" id="roles" value="<?php echo $this->_tpl_vars['role']; ?>
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
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                             Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
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
                    <a href="#">用户授权</a>

                </li>

            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">

                    <!-- BEGIN PORTLET-->
                    <div class="portlet light">

                        <div class="portlet-title">

                           <div class='form-group extend'><div class='col-md-3'><div class='noUi-control noUi-success' id='slider_0'><input type='text' id="user" class='form-control' placeholder='用户名'></div></div><div class='col-md-8'><div class='noUi-control noUi-success' id='slider_0'></div></div><div class='col-md-1'><div class='noUi-control noUi-success' id='slider_0'><button type='button' class='btn btn-primary' onclick='adduser()'>SUBMIT</button></div></div></div>
                        </div>

                        <div class="portlet-body form" style="height:100%">

                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-body userconts">

                                <?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                                    <div class="form-group" >

                                        <div class="col-md-11">
                                            <div class="noUi-control noUi-success" id="slider_0">
                                           <h3><span class="label label-danger"><?php echo $this->_tpl_vars['val']['user']; ?>
</span></h3>
                                            </div>
                                        </div>


                            <div class="col-md-1 del" style="display: none">
                            <div class="noUi-control noUi-success" id="slider_1" >
                        <i class="fa fa-remove" onclick="deluser(this)" style="color:gray;margin-left:60px;cursor:pointer;"></i>
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

<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>