<!DOCTYPE html>
<html lang="en">
	<head>
		<title>{{ ucwords($title) }} - Web App</title>
		<script type="text/javascript">
			var form_data = <?php echo isset($form_data) ? json_encode($form_data) : "false" ?>;
			var form_title = "{{ ucwords($title) }}";
		</script>
		@include('templates.headers')
	</head>
	<body class="navbar-fixed">
		@include('templates.navbar')
		@include('templates.vertical_nav')
		<section id="content" class="content-sidebar bg-white">
			<section class="main">
				<div class="row">
					<div class="col-md-12">
						<section>
							<header class="panel-heading">
								<div class="row">
									<div class="col-md-6">
										<div class="h4">
											<span>
												@if (isset($module_type) && $module_type == "Single")
													<i class="{{ $icon }}"></i> {{ $title }}
												@else
													<i class="{{ $icon }}"></i> {{ isset($form_data['tab'.$module]['id']) ? $form_data['tab'.$module][$record_identifier] : "New $title" }}
												@endif
											</span>
											@if (isset($form_data['tab'.$module]['id']))
												<span class="text-mini m-l-large text-center" id="form-stats">
													<i class="fa fa-circle text-success"></i>
													<span class="m-l-mini h6" id="form-status"><b>Saved</b></span>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6 col-md-push-4">
										<div style="line-height: 39px;">
											@if (isset($form_data['tab'.$module]['id']))
												<a class="btn btn-danger btn-sm" id="delete" name="delete">
													<i class="fa fa-trash-o"></i> Delete
												</a>
											@endif
										</div>
									</div>
								</div>
							</header>
							@include($file)
							<footer class="panel-footer">
								<div class="row">
									<div class="col-md-3">&nbsp;</div>
									<div class="col-md-8">
										<button type="reset" class="btn btn-white" id="reset_form">Reset</button>
										<button type="submit" class="btn btn-primary disabled" id="save_form">
											<i class="fa fa-save"></i> Save changes
										</button>
									</div>
								</div>
							</footer>
						</section>
					</div>
				</div>
			</section>
		</section>
		<a href="#" class="back-to-top">
			<i class="fa fa-chevron-up"></i>
		</a>
		@include('templates.msgbox')
		@if (Session::has('msg'))
			<script type="text/javascript">
				msgbox("{{ Session::get('msg') }}");
			</script>
		@endif
		<script type="text/javascript" src="/js/web_app/form.js"></script>
		@if (File::exists(public_path('/js/web_app/' . snake_case($module) . '.js')))
			<!-- Include client js file -->
			<script type="text/javascript" src="/js/web_app/{{ snake_case($module) }}.js"></script>
		@endif
	</body>
</html>