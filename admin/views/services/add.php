<?php
    include("../../../require_inc.php");
    $service_id = $_POST['service_id'];
?>
<input type="hidden" name="data[service_id]" id="service_id" value="<?php _e($service_id) ?>" />
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['name_service'].' (Vie)') ?></label>
        <input type="text" class="form-control" name="data[name_vi]" id="name_vi_service" />
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['name_service'].' (Eng)') ?></label>
        <input type="text" class="form-control" name="data[name_en]" id="name_en_service" />
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['avatar']) ?></label>
        <input type="file" class="form-control" name="image" id="image_s" />
        <small class="text-danger"><?php _e($lang['size_service']) ?></small>
        <div id="show_image_s" class="d-none"></div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['image_detail']) ?></label>
        <input type="file" class="form-control" name="image_detail" id="image_detail_s" />
        <small class="text-danger"><?php _e($lang['size_detail']) ?></small>
        <div id="show_image_detail_s" class="d-none"></div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['thumbfb']) ?></label>
        <input type="file" class="form-control" name="thumbfb" id="thumbfb_s" />
        <small class="text-danger"><?php _e($lang['size_thumbfb']) ?></small>
        <div id="show_thumbfb_s" class="d-none"></div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['hieuqua'].' (Vie)') ?></label>
        <textarea name="data[hieuqua_vi]" id="hieuqua_vi_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['hieuqua'].' (Eng)') ?></label>
        <textarea name="data[hieuqua_en]" id="hieuqua_en_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['nguyenly'].' (Vie)') ?></label>
        <textarea name="data[nguyenly_vi]" id="nguyenly_vi_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['nguyenly'].' (Eng)') ?></label>
        <textarea name="data[nguyenly_en]" id="nguyenly_en_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['khachhangtrainghiem'].' (Vie)') ?></label>
        <textarea name="data[khtn_vi]" id="khtn_vi_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['khachhangtrainghiem'].' (Eng)') ?></label>
        <textarea name="data[khtn_en]" id="khtn_en_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['uudiemkhimuataimelis'].' (Vie)') ?></label>
        <textarea name="data[uudiem_vi]" id="uudiem_vi_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['uudiemkhimuataimelis'].' (Eng)') ?></label>
        <textarea name="data[uudiem_en]" id="uudiem_en_service" class="form-control"></textarea>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['tag'].' (Vie)') ?></label>
        <textarea class="form-control" name="data[tag_vi]" id="tag_vi" rows="3"></textarea>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['tag'].' (Eng)') ?></label>
        <textarea class="form-control" name="data[tag_en]" id="tag_en" rows="3"></textarea>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['show_home']) ?></label>
        <div class="form-group clearfix">
        <div class="icheck-success d-inline">
            <input type="radio" id="show_home1" name="data[show_home]" value="1" />
            <label for="show_home1"><?php _e($lang['active']) ?></label>
        </div>
        <div class="icheck-success d-inline">
            <input type="radio" id="show_home2" name="data[show_home]" checked />
            <label for="show_home2"><?php _e($lang['hidden']) ?></label>
        </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['title_website'].' (Vie)') ?></label>
        <input type="text" class="form-control" name="data[title_vi]" id="title_vi" />
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['title_website'].' (Eng)') ?></label>
        <input type="text" class="form-control" name="data[title_en]" id="title_en" />
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['description'].' (Vie)') ?></label>
        <textarea class="form-control" name="data[desc_vi]" id="desc_vi" rows="4"></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['description'].' (Eng)') ?></label>
        <textarea class="form-control" name="data[desc_en]" id="desc_en" rows="4"></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['keyword'].' (Vie)') ?></label>
        <textarea class="form-control" name="data[keyw_vi]" id="keyw_vi" rows="4"></textarea>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-form-label" for="name"><?php _e($lang['keyword'].' (Eng)') ?></label>
        <textarea class="form-control" name="data[keyw_en]" id="keyw_en" rows="4"></textarea>
    </div>
</div>
<script type="text/javascript" src="<?php _e(URL) ?>tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea#uudiem_vi_service, textarea#uudiem_en_service, textarea#nguyenly_vi_service, textarea#nguyenly_en_service, textarea#hieuqua_vi_service, textarea#hieuqua_en_service, textarea#khtn_vi_service, textarea#khtn_en_service",
        theme: "modern",
        width: 750,
        height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
    ],
    image_advtab: true, 
    //content_css: "css/content.css",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons responsivefilemanager", 
    external_filemanager_path:"<?php _e(URL) ?>filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "<?php _e(URL) ?>filemanager/plugin.min.js"},
    style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    });
</script>
<script type="text/javascript" src="<?php _e($def['theme']) ?>js/common.js"></script>
<script type="text/javascript">
    $("#image_s").change(function() {
        readSingleImage(this, '#show_image_s');
    });
    $("#image_detail_s").change(function() {
        readSingleImage(this, '#show_image_detail_s');
    });
    $("#thumbfb_s").change(function() {
        readSingleImage(this, '#show_thumbfb_s');
    });
</script>
