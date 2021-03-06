<!-- Book Calendaer -->
<div class="w-100 position-relative"> <!--  id="content" -->
	<div id="jssor_1" class="jso_2">
		<!-- Loading Screen -->
		<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/img/svg/spin.svg" />
		</div>
		<div data-u="slides" class="jsso_2">
			<?php
				$tableSlider = "sliders";
				$checkSlider = $h->checkExist($tableSlider, "deleted_at is null and active = 1 and hc_id = 1");
				if ($checkSlider) {
						$sliders = $h->getAll("alt_vi, alt_en, url, image", $tableSlider, "deleted_at is null and active = 1 and hc_id = 1", "sort asc, id desc");
						$imgSlider = "";
						foreach ($sliders as $slider) {
							$linkSlider = ($slider['url'] != '' && $slider['url'] != '#') ? '<a href="'.$slider['url'].'"><img data-u="image" alt="" src="'.$def['upload_slider_home'].$slider['image'].'" alt="'.$slider["alt_$lng"].'" /></a>' : '<img data-u="image" alt="" src="'.$def['upload_slider_home'].$slider['image'].'" alt="'.$slider["alt_$lng"].'" />';
							$imgSlider .= '<div>'.$linkSlider.'</div>';
						}
						_e($imgSlider);
				} else 
					_e('<div><img data-u="image" alt="" src="assets/img/slider_test/1.png" /></div>');
			?>
		</div>
		<!-- Arrow Navigator -->
		<div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			</svg>
		</div>
		<div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			</svg>
		</div>
	</div>
</div>
<!-- content main -->
<section class="content_main marginContent">
	<div class="subcontent bglime">
		<div class="row section_melisspa page-section" id="startup" style="background-image: url(assets/img/bg_landing/about_1.jpg);">
			<div class="col-md-6 c_melis">
				<div class="subc_melis">
					<h2 class="startup text-center color_light_yellow">C??u chuy???n kh???i nghi???p</h2>
					<div class="melisbeaute_melismom text-uppercase color_light_white text-center">Melis Mom - Melis Beaute'</div>
					<div class="content_melis color_light_white text-justify">
						<p>V???i 10 n??m kinh nghi???m trong l??nh v???c ch??m 
							s??c s???c kh???e v?? l??m ?????p, Melis Mom- Melis 
							Beaute??? ra ?????i v???i khao kh??t mang t???i m???t d???ch 
							v??? ch??m s??c s???c kh???e v?? l??m ?????p cho ph??? n??? 
							trong h??nh tr??nh l??m m??? tuy???t v???i v?? nu??i con 
							kh??n l???n</p>
						<p>M???c d?? ???? c?? l??c ch??n b?????c gi???a c?? h???i v?? ??am 
							m?? khi l???a ch???n l??nh v???c kinh doanh, nh??ng 
							sau c??ng Melis Mom- Melis Beaute??? v???n l?? s???a 
							l???a ch???n b???ng t??m huy???t c???a m???t ng?????i m???, 
							ng?????i v??? v???i kh??t khao ?????p ????? gi??? l???a h???nh 
							ph??c gia ????nh, ?????p ????? c??c con t??? h??o, ?????p ????? t??? 
							tin v?? th??nh c??ng tr??n m???t tr???n gia ????nh v?? x?? 
							h???i.</p>
						<p>T??? tr??i tim, c???m ??n c??c m??? ???? tin y??u! </p>
						<p class="pr-3 text-right">Ch??? T???ch H??QT</p>
						<p class="pr-5 text-right">V?? Ki???u Vi</p>
					</div>
				</div>
			</div>
			
		</div>
		<!-- vision -->
		<div class="row section_melisspa page-section" id="vision" style="background-image: url(assets/img/bg_landing/about_2.jpg);">
			<div class="col-md-11">
				<div class="pt-5 pb-2 text-capitalize color_light_white text-right font_taviraj">
					H??nh T??nh L???n ????i Khi Kh???i Ngu???n T??? Nh???ng C??u Chuy???n Nh???<br />
					Melis Spa - Gi??p Ph??? N??? ???? Ho??n Th??nh Thi??n Ch???c Sinh N??? Ng??y C??ng Tr??? ?????p, T??? Tin<br />
					V?? Th??nh C??ng - Tr??? Th??nh Ng?????i M??? Tuy???t V???i Nh???t C???a Con M??nh!
				</div>
			</div>
			<div class="col-md-4 offset-md-7 col-xs-offset-0 c_vision mb-5">
				<div class="sub_vision">
					<div class="content_vision">
						<h3 class="title_landing text-capitalize color_light_white font_taviraj">T???m nh??n</h3>
						<ul class="color_light_white li font_taviraj">
							<li>Kh???ng ?????nh v??? th??? Spa B???u Sau Sinh 5 sao chu???n Nh???t</li>
							<li>C???p nh???t ph????ng ph??p v?? li???u tr??nh ch??m s??c hi???u qu??? nh???t</li>
							<li>Mang t???i d???ch v??? T???n T??m - Chu ????o - An To??n - Chuy??n Nghi???p Nh???t</li>
						</ul>
						<h3 class="title_landing text-capitalize color_light_white font_taviraj">M???c ti??u</h3>
						<ul class="color_light_white li font_taviraj">
							<li>Spa ???????c nhi???u kh??ch h??ng ph??n kh??c cao c???p tin ch???n nh???t.</li>
							<li>H??? Th???ng Th????ng Hi???u Melis Mom-Melis Beaute??? kh???p c??? n?????c v?? v????n xa t???m qu???c t???</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- goal -->
		<div class="row section_melisspa" style="background-image: url(assets/img/bg_landing/about_3.jpg);">
			<div class="col-md-4 offset-md-1 col-xs-offset-0 c_vision mb-5 mt-5">
				<div class="sub_vision">
					<div class="content_vision">
						<h3 class="title_landing text-capitalize color_light_white font_taviraj">S??? m???nh</h3>
						<ul class="color_light_white li font_taviraj">
							<li>Gi??p ph??? n??? trong th???i k??? mang thai kh???e ?????p - h???nh ph??c- m??? tr??n con vu??ng</li>
							<li>Gi??p ph??? n??? sau sinh v??? form nhanh v?? nu??i con s???a m??? ho??n to??n</li>
							<li>Gi??p ph??? n??? ???? ho??n th??nh thi??n ch???c sinh n??? ng??y c??ng tr??? ?????p, t??? tin v?? th??nh c??ng, tr??? th??nh ng?????i m??? tuy???t v???i nh???t c???a con m??nh!</li>
						</ul>
						<h3 class="title_landing text-capitalize color_light_white font_taviraj">Gi?? Tr??? C???t L??i</h3>
						<ul class="color_light_white li font_taviraj">
							<li>Ni???m Tin ??? Ch???t L?????ng- B???n S???c- Chuy??n Nghi???p- V??n Minh</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- team -->
		<div class="row section_melisspa page-section" id="team" style="background-image: url(assets/img/bg_landing/about_4.jpg);">
			<div class="col-md-6 offset-md-6 col-xs-offset-0 c_melis">
				<div class="subc_melis">
					<div class="melisbeaute_melismom text-uppercase color_light_white text-center mt-4">T??I NGUY??N CON NG?????I</div>
					<div class="content_melis color_light_white text-justify">
						<p>Chuy??n Vi??n B???u Sau Sinh t???i Melis Mom ?????u l?? y t?? ??i???u d?????ng ???????c ????o t???o ch??nh quy</p>
						<p>?????i Ng?? B??c S?? C??? V???n Chuy??n M??n li???u tr??nh ch??m s??c t???i Melis Mom ?????u l?? Ti???n S??, Th???c S??, B??c S?? c?? kinh nghi???m l??u n??m trong l??nh v???c S???n Khoa</p>
						<p>K??? Thu???t Vi??n t???i Melis Beaute??? ?????u c?? th??m ni??n kinh nghi???m t???i thi???u 3 n??m trong l??nh v???c Spa </p>
						<p>?????i Ng?? Chuy??n Gia, B??c S?? C??? V???n t???i Melis Beaute??? ?????u l?? b??c s?? c?? kinh nghi???m l??u n??m v??? da li???u, gi???m b??o, l??m ?????p</p>
						<p>?????i ng?? nh??n vi??n t???i Melis Mom- Melis Beaute??? ?????u ???????c ????o t???o b??i b???n ????? ?????m b???o m???t m??i tr?????ng th?? gi??n l??m ?????p g???n g??i, nhi???t th??nh, v??n minh v?? chuy??n nghi???p.</p>
					</div>
				</div>
			</div>                    
		</div>
		<!-- community -->
		<div class="row section_melisspa page-section" id="community" style="background-image: url(assets/img/bg_landing/about_5.jpg);">
			<div class="col-md-6 c_melis">
				<div class="subc_melis">
					<div class="melisbeaute_melismom text-uppercase color_light_white text-center mt-4">Ho???t ?????ng c???ng ?????ng</div>
					<div class="content_melis color_light_white text-justify">
						<p>V???i m???c ti??u h??nh ?????ng ngay khi cho ??i l?? ???? ???????c nh???n l???i nh???n l???i, S???ng c?? T??m ???t s??? c?? T???m:</p>
						<p>M???i n??m Melis Mom- Melis Beaute??? ?????u tr??ch t??? 5-10% l???i nhu???n kinh doanh ????? tham gia c??ng B??o Nh??n ?????o v?? ?????i S???ng ???ng h??? cho c??c tr??? em ngh??o kh?? kh??n, ng?????i gi?? c?? ho??n c???nh neo ????n ...</p>
						<p>B??n c???nh ???? Melis Mom- Melis Beaute??? c??ng lu??n ??u ti??n cho nh???ng m??? b???m s???a c?? m???t c??ng vi???c t???t v?? ???n ?????nh, ph?? h???p t???i c??ng ty.</p>
						<p>Melis Mom ??? Melis Beaute??? c??ng s???n s??ng tr??? gi??p nh???ng ho??n c???nh kh?? kh??n khi li??n h??? tr???c ti???p v??? ???????ng d??y n??ng ho???c c??c Group C???ng ?????ng c???a c??ng ty sau khi x??c th???c th??ng tin. </p>
						<p>?????i ng?? nh??n vi??n t???i Melis Mom- Melis Beaute??? ?????u ???????c ????o t???o b??i b???n ????? ?????m b???o m???t m??i tr?????ng th?? gi??n l??m ?????p g???n g??i, nhi???t th??nh, v??n minh v?? chuy??n nghi???p.</p>
					</div>
				</div>
			</div>                    
		</div>
		<!-- gallery image -->
		<div class="row py-4 mx-4 position-relative page-section" id="gallery_image">
			<h2 class="title_gallery text-uppercase color_light_white py-3 px-5">Th?? vi???n ???nh</h2>
			<div class="viewall">
				<a class="btn btn-read-more viewall_images">
					<i class="fas fa-plus"></i>&nbsp;XEM T???T C???
				</a>
			</div>
			<div class="col-md-12 mt-4">
				<div class="row">
					<div class="col-md-4 mb-4">
						<figure>
							<a class="gallery_image" rel="2"><img src="assets/img/bg_landing/gal_img_1.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a class="gal_text gallery_image" rel="2"><i class="fas fa-images"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a class="gallery_image" rel="1"><img src="assets/img/bg_landing/gal_img_2.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a class="gallery_image gal_text" rel="1"><i class="fas fa-images"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a class="gallery_image" rel="4"><img src="assets/img/bg_landing/gal_img_3.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a class="gallery_image gal_text" rel="4"><i class="fas fa-images"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<img src="assets/img/bg_landing/gal_img_1.jpg" class="w-100 mb-1" alt="" />
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="#" class="gal_text"><i class="fas fa-images"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<img src="assets/img/bg_landing/gal_img_2.jpg" class="w-100 mb-1" alt="" />
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="#" class="gal_text"><i class="fas fa-images"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<img src="assets/img/bg_landing/gal_img_3.jpg" class="w-100 mb-1" alt="" />
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="#" class="gal_text"><i class="fas fa-images"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
				</div>
				<div class="row d-none" id="viewallimages" >
					<div class="col-md-4 mb-4">
						<figure>
							<a class="gallery_image" rel="2"><img src="assets/img/bg_landing/gal_img_1.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a class="gal_text gallery_image" rel="2"><i class="fas fa-images"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a class="gallery_image" rel="1"><img src="assets/img/bg_landing/gal_img_2.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a class="gallery_image gal_text" rel="1"><i class="fas fa-images"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a class="gallery_image" rel="3"><img src="assets/img/bg_landing/gal_img_3.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a class="gallery_image gal_text" rel="3"><i class="fas fa-images"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<img src="assets/img/bg_landing/gal_img_1.jpg" class="w-100 mb-1" alt="" />
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="#" class="gal_text"><i class="fas fa-images"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<img src="assets/img/bg_landing/gal_img_2.jpg" class="w-100 mb-1" alt="" />
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="#" class="gal_text"><i class="fas fa-images"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<img src="assets/img/bg_landing/gal_img_3.jpg" class="w-100 mb-1" alt="" />
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="#" class="gal_text"><i class="fas fa-images"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
				</div>
				<div class="img_gal"></div>
			</div>
		</div>
		<!-- gallery video -->
		<div class="row py-4 mx-4 position-relative page-section" id="gallery_video">
			<h2 class="title_gallery text-uppercase color_light_white py-3 px-5">Th?? vi???n Video</h2>
			<div class="viewall">
				<a class="btn btn-read-more viewall_videos">
					<i class="fas fa-plus"></i>&nbsp;XEM T???T C???
				</a>
			</div>
			<div class="col-md-12 mt-4">
				<div class="row">
					<div class="col-md-4 mb-4">
						<figure>
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=Romg9XOb0wQ"><img src="assets/img/bg_landing/gal_video_1.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_2.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="gal_text popup-youtube"><i class="fab fa-youtube"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_3.jpeg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=Romg9XOb0wQ"><img src="assets/img/bg_landing/gal_video_1.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_2.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="gal_text popup-youtube"><i class="fab fa-youtube"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_3.jpeg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
				</div>
				<div class="row d-none" id="viewallvideos">
					<div class="col-md-4 mb-4">
						<figure>
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=Romg9XOb0wQ"><img src="assets/img/bg_landing/gal_video_1.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_2.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="gal_text popup-youtube"><i class="fab fa-youtube"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_3.jpeg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=Romg9XOb0wQ"><img src="assets/img/bg_landing/gal_video_1.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> T???t kh??ng ?????ng - BV nhi TW</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_2.jpg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=D0UragpOAiE" class="gal_text popup-youtube"><i class="fab fa-youtube"></i> Happy Women's Day</a></h4>
					</div>
					<div class="col-md-4 mb-4">
						<figure>
							<a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube"><img src="assets/img/bg_landing/gal_video_3.jpeg" class="w-100 mb-1" alt="" /></a>
						</figure>
						<h4 class="m-0 p-0 color_brown text-capitalize"><a href="https://www.youtube.com/watch?v=GtgDM6wFNvg" class="popup-youtube gal_text"><i class="fab fa-youtube"></i> Beauty talk - Tr?? chuy???n c??ng b??c s??</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end content main -->