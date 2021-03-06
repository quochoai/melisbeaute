<div class="col-md-3">
	<?php
		$checkCateProduct = $h->checkExist($tableCate, "cate_id = ".$def['cateid_product']." and deleted_at is null");
		$sideProduct = "";
		if ($checkCateProduct) {
			$sideProduct .= '<ul class="sidebar">';
			$cateProducts = $h->getAll("id, name_vi, name_en", $tableCate, "cate_id = ".$def['cateid_product']." and deleted_at is null", "sort asc, id asc");
			foreach ($cateProducts as $kCate => $cateProduct) {
				$linkCateProduct = chuoilink($cateProduct['name_vi']);
				if ($mod2 == $linkCateProduct) {
					$caret = 'fa-caret-down';
					$clsBlock = ' class="block"';
				} else {
					/*if ($kCate == 0 && $mod1 == $def['link_queennature']) {
						$caret = 'fa-caret-down';
						$clsBlock = ' class="block"';
					} else {*/
						$caret = 'fa-caret-right';
						$clsBlock = '';
					//}
				}
				
				$nameCateProduct = $cateProduct["name_$lng"];
				$product_id = $cateProduct['id'];
				$sideProduct .= '<li>';
				$sideProduct .= '   <p><i class="fas '.$caret.'"></i> '.$nameCateProduct.'</p>';
				$checkProduct = $h->checkExist($tableProduct, "product_id = $product_id and deleted_at is null");
				if ($checkProduct) {
					$products = $h->getAll("id, name_vi, name_en", $tableProduct, "product_id = $product_id and deleted_at is null", "sort desc, id desc");
					$sideProduct .= '<ul'.$clsBlock.'>';
					foreach ($products as $kProduct => $product) {
						$linkProductHtml = chuoilink($product['name_vi']).'.html';
						$nameProduct = $product["name_$lng"];
						$linkProduct = $lng.'/'.$def['link_queennature'].'/'.$linkCateProduct.'/'.$linkProductHtml;
						$clsActive = ($mod3 == $linkProductHtml) ? ' class="active"' : '';
						$sideProduct .= '<li><a href="'.$linkProduct.'"'.$clsActive.'>'.$nameProduct.'</a></li>';

					}
					$sideProduct .= '</ul>';
				}
				$sideProduct .= '</li>';
			}
			$sideProduct .= '</ul>';
		}
		$sideProduct .= '<div class="mb-4">';
		$sideProduct .= '	<div class="eachsidebar cskh">
												<a href="'.$lng.'/'.$def['link_freview'].'">'.$lang['customer_review'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar rvnnt">
												<a href="'.$lng.'/'.$def['link_celes_feel'].'">'.$lang['celebrity_feel'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar km">
												<a href="'.$lng.'/'.$def['link_fpromotion'].'">'.$lang['n_promotion'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvsm">
												<a class="book-calendar-demand" rel="T?? v???n s???a m???">'.$lang['breast_milk_consultation'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvad">
												<a class="book-calendar-demand" rel="T?? v???n ??n d???m">'.$lang['eat_weaning_consultation'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvcsb">
												<a class="book-calendar-demand" rel="T?? v???n ch??m s??c b???u">'.$lang['pregnance_care_consultation'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvcsss">
												<a class="book-calendar-demand" rel="T?? v???n ch??m s??c sau sinh">'.$lang['postpartum_care_consultation'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvgbss">
												<a class="book-calendar-demand" rel="T?? v???n gi???m b??o sau sinh">'.$lang['postpartum_fat_loss_advice'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvdd">
												<a class="book-calendar-demand" rel="T?? v???n dinh d?????ng">'.$lang['nutrition_consulting'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar vtmbb">
												<a class="book-calendar-demand" rel="Vitamin b?? b???u">'.$lang['pregnance_vitamin'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvcsdm">
												<a class="book-calendar-demand" rel="T?? v???n ch??m s??c da m???t">'.$lang['facial_skin_care_consultation'].'</a>
											</div>
											<div class="diverEachsidebar"></div>
											<div class="eachsidebar tvcsdtt">
												<a class="book-calendar-demand" rel="T?? v???n ch??m s??c da to??n th??n">'.$lang['full_body_skin_care_consultation'].'</a>
											</div>
											<div class="diverEachsidebar"></div>';
		$sideProduct .= '</div>';
		_e($sideProduct);
	?>
</div>