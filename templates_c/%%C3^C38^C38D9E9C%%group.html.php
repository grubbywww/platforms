<?php /* Smarty version 2.6.28, created on 2016-11-17 12:11:24
         compiled from admin/group.html */ ?>
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
                <h1>MONITOR<small>分组</small></h1><input type="hidden" id="roles" value="<?php echo $this->_tpl_vars['role']; ?>
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
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">ADD GROUP</h4>
                        </div>
                        <div class="modal-body">

                            <form class="form-horizontal">
  <div class="form-group">
    <label for="groupname" class="col-sm-2 control-label">GROUP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="groupname" placeholder="GROUPNAME">
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">USER</label>
    <div class="col-sm-10">
     <select multiple class="form-control" id="username" style="height:300px">
<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
  <option><?php echo $this->_tpl_vars['val']['username']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>

</select>
    </div>
  </div>

    <div class="form-group">
    <label for="url" class="col-sm-2 control-label">URL</label>
    <div class="col-sm-10">
     <select multiple class="form-control" id="url" style="height:300px">
 <?php $_from = $this->_tpl_vars['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
  <option><?php echo $this->_tpl_vars['val']['comment']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
    </div>
  </div>


</form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue" onclick="addgroup()">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
                    <div class="modal fade" id="chmyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="chmodal-title"></h4>
                        </div>
                        <div class="modal-body" id="ch_contents">



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue" onclick="ghgroup()">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">PlateForm</a><i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">分组</a>

                </li>

            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">

                    <!-- BEGIN PORTLET-->
                    <div class="portlet light">

                        <div class="portlet-title">
                        <div class="caption">

         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">ADD GROUP</button>
                            </div>

<div class="portlet-body">

                        </div>
                        </div>

                        <div class="portlet-body form" style="height:100%">
 <table class="table table-striped table-bordered table-hover" id="sample_6">
                            <thead>
                            <tr>
                                <th width="20%">
                                    GROUPNAME
                                </th>
                                <th width="20%">
                                    USERNAME
                                </th>
                                <th width="40%">
                                URL
                                </th>
                                <th width="20%">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>

 <?php $_from = $this->_tpl_vars['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                            <tr>
                                <td>
                                <?php echo $this->_tpl_vars['val']['groupname']; ?>

                                </td>
                                <td>
                                <?php echo $this->_tpl_vars['val']['username']; ?>

                                </td>
                                <td>
                                 <?php echo $this->_tpl_vars['val']['url']; ?>

                                </td>
                                <td><span class="label label-primary" onmouseover="ch_group('<?php echo $this->_tpl_vars['val']['groupname']; ?>
','<?php echo $this->_tpl_vars['val']['username']; ?>
','<?php echo $this->_tpl_vars['val']['url']; ?>
')" data-toggle="modal" data-target="#chmyModal" style="cursor: pointer;">Change Group</span><span class="label label-danger" style="cursor: pointer;" onclick="removegroup('<?php echo $this->_tpl_vars['val']['groupname']; ?>
')">Remove Group</span></td>
                            </tr>
<?php endforeach; endif; unset($_from); ?>
                            </tbody>
                            </table>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "table.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>