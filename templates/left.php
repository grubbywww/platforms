<div class="page-sidebar-wrapper" >
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">

			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->

					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="javascript:;" onclick="leftlight(this)">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="/app/dashboard/dashboard.php">
                            <span class="badge badge-roundless badge-warning">查询</span>
							<i class="icon-bar-chart"></i>
							按产品线</a>
						</li>
						<li>
							<a href="index_2.html">
                            <span class="badge badge-roundless badge-primary">查询</span>
							<i class="icon-bulb"></i>
							按服务</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" onclick="leftlight(this)">
					<i class="icon-basket"></i>
					<span class="title">云服务器</span>
					<span class="selected"></span>
                    <span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ecommerce_index.html">

                            <a href="/app/cloud/cloud.php">
							<i class="icon-home"></i>
                            云服务器查询</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" onclick="leftlight(this)">
					<i class="icon-rocket"></i>
					<span class="title">物理机</span>
                    <span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="layout_fontawesome_icons.html">
							<span class="badge badge-roundless badge-danger">自有</span>前端机</a>
						</li>

						<li>
							<a href="layout_ajax.html">
                            <span class="badge badge-roundless badge-success">自有</span>
							存储</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" onclick="leftlight(this)">
					<i class="icon-diamond"></i>
					<span class="title">虚拟机</span>
					<span class="selected"></span>
                    <span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							虚拟机查询</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							虚拟机申请</a>
						</li>

					</ul>
				</li>

                <li class="heading" id="admin" style="display:none">
                    <h3 class="uppercase">管理员</h3>
                </li>
                <li style="display:none">
                    <a href="javascript:;" onclick="leftlight(this)">
                    <i class="icon-settings"></i>
                    <span class="title">产品线</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="form_controls_md.html">
                            <span class="badge badge-roundless badge-danger">修改</span>
                            后台</a>
                        </li>


                    </ul>
                </li>
                <li style="display:none">
                    <a href="javascript:;" onclick="leftlight(this)">
                    <i class="icon-briefcase"></i>
                    <span class="title">服务</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="table_basic.html">
                             <span class="badge badge-roundless badge-danger">修改</span>
                            后台</a>
                        </li>


                    </ul>
                </li>




			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
