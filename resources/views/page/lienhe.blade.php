	@extends('master')
	@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên lạc</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Contacts</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div class="beta-map">

		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/place/D%C6%B0%C6%A1ng+Quan,+Th%E1%BB%A7y+Nguy%C3%AAn,+H%E1%BA%A3i+Ph%C3%B2ng/@20.8880356,106.6757874,14z/data=!3m1!4b1!4m5!3m4!1s0x314a7b1a2de51a43:0x53157c8528dbf3f4!8m2!3d20.8879379!4d106.6910322?hl=vi-VN" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		</div>
</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p></p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-group form-block">
							<input class="input" input name="your-name" type="text" placeholder="Tên của bạn (required)">
						</div>
						<div class="form-group form-block">
								<input class="input" type="email" name="email" placeholder="hieu55040@gmail.com" required="required" width="20px;">
							</div>
						<div class="form-group form-block">
							<input class="input" input name="your-subject" type="text" placeholder="Số điện thoại">
						</div>
						<div class="form-group form-block">
							<textarea name="your-message" cols="70" rows="5" placeholder="tin nhắn"></textarea>
						</div>
						<div class="form-group form-block">
							<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						khu đô thị Tân Quang Minh Thủy Nguyên <br>
						Hải Phòng
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Mail</h6>
					<p>
				 
						<a href="mailto:hieu55040@gmail.com">hieu55040@gmail.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">SĐT</h6>
					<p>
						0869144298 <br>
						Hoặc 0865682340 <br>
						<a href="hr@hieu55040@gmail.com">hieu55040@gmail.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection