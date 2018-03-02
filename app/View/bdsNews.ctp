<?php echo $this->Form->create('BDSNews', array('url' => array ('controller' => 'createBDSNews', 'action' => 'doAddBDSNews'), 'role' => 'form', 'novalidate' => true)); ?>

            <input type="hidden" value="2166882" name="PropertyId" id="PropertyId">

            <input id="IsChanged" name="IsChanged" style="display:none" type="checkbox" value="true"><input name="IsChanged" type="hidden" value="false">

            <!-- StaffInfo -->
            
<!-- Thông tin nội bộ -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Thông tin nội bộ</h1>
                <div class="header-right"></div>
            </div>
        </div>
    </header>
    <article>
        <br>
        <div class="form-horizontal pull-left">
            <!-- LastInfoFromUser -->
            <div class="control-group">
                <label class="control-label">Nguồn:</label>
                <div class="controls">
                    <select id="FlagCssClass" name="FlagCssClass">
                        <?php
                            foreach ($customerlist as $customer){
                        ?>
                        <option 
                            <?php 
                                if(isset($dbdNews['BDS_NEWS']['USER_ID'])){
                                    if($dbdNews['BDS_NEWS']['USER_ID'] == $customer['TCustomer']['USER_ID']){
                                        echo 'selected="selected"';
                                    }
                                }
                            ?>
                            value="<?php echo $customer['TCustomer']['USER_ID'] ?>"><?php echo $customer['TCustomer']['CUSTOMER_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <!-- Flag -->
            <div class="control-group">
                <label class="control-label">Đánh dấu:</label>
                <div class="controls">
                    <select class="deal-good" id="FlagCssClass" name="FlagCssClass">
                        <?php
                            foreach ($danhDaulist as $danhDau){
                        ?>
                            <option 
                                <?php 
                                    if(isset($dbdNews['BDS_NEWS']['EVALUATE_CODE'])){
                                        if($dbdNews['BDS_NEWS']['EVALUATE_CODE'] == $danhDau['DanhDau']['EVALUATE_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $danhDau['DanhDau']['EVALUATE_CODE'] ?>"><?php echo $danhDau['DanhDau']['EVALUATE_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    
                    <label><input id="IsExcludeFromPriceEstimation" name="IsExcludeFromPriceEstimation" type="checkbox" value="true"><input name="IsExcludeFromPriceEstimation" type="hidden" value="false">Loại khỏi định giá</label>
                </div>
            </div>
            <!-- Status -->
            <div class="control-group">
                <label class="control-label">Tình trạng:</label>
                <div class="controls">
                    <select class="select-box" id="StatusCssClass" name="StatusCssClass">
                        <?php
                            foreach ($tinhTranglist as $tinhTrang){
                        ?>
                            <option 
                                <?php 
                                    if(isset($dbdNews['BDS_NEWS']['TINH_TRANG_CODE'])){
                                        if($dbdNews['BDS_NEWS']['TINH_TRANG_CODE'] == $tinhTrang['TinhTrang']['TINH_TRANG_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $tinhTrang['TinhTrang']['TINH_TRANG_CODE'] ?>"><?php echo $tinhTrang['TinhTrang']['TINH_TRANG_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>                        
                <label><input id="IsSoldByGroup" name="IsSoldByGroup" type="checkbox" value="true"><input name="IsSoldByGroup" type="hidden" value="false">Được bán bởi Group</label>
                    <div><em>Ngày thay đổi trạng thái gần nhất     <span>31/01/2018 11:28:11</span>
 bời Tu Anh</em></div>
                </div>
            </div>

            <!-- Note -->
            <div class="control-group">
                <label class="control-label">Ghi chú nội bộ:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="Note" maxlength="250" name="Note" type="text" value="">
                </div>
            </div>

            <!-- ContactPhoneToDisplay -->
            <div class="control-group">
                <label class="control-label">ĐT hiển thị:</label>
                <div class="controls">
N/A                </div>
            </div>
            <!-- Images -->
            <div class="control-group">
                <label class="control-label">Hình ảnh:</label>
                <div class="controls">
                    

<div id="uploadifive-file_upload" class="uploadifive-button" style="height: 30px; line-height: 30px; overflow: hidden; position: relative; text-align: center; width: 100px;">
    Select Files
    <input type="file" id="file_upload" name="file_upload" data-url="/RealEstate.Admin/Home/Upload?contentItemId=2166882&amp;userId=1667444&amp;isPublished=False" style="font-size: 30px; opacity: 0; position: absolute; right: -3px; top: -3px; z-index: 999;" multiple="multiple">
</div>

<!-- The global progress bar -->
<div id="uploadifive-file_progress" class="uploadifive-queue-item" style="display:none;">
    <span id="uploadifive-file_name"></span>
    <div id="progress" class="progress">
        <div class="progress-bar"></div>
    </div>
</div>
<div id="errors"></div>
<div id="queue">
    <div style="position: absolute; bottom:0; left:0; width:100%; text-align:center;">+ drop files here +</div>
</div>
<script type="text/javascript">
    var auth = 'ACE868CFD4E334545F02FD5E8BC82C0022FCA27B3C2D22E9FBE49E887AD00FA927265F51009B9996A555A08DDEC619D609179B7B50A8E1D222F8BFDF7CB8765357123260E3BCCC1B2352A1128BD228FBD8C8166D8A82C64B4C2F972B2FEEA6EF201C83EA88916D247EDC51D7B3B0C211040AB3A688C69047C0221C944255113A';

    $(function () {
        $('#file_upload').fileupload({
            add: function (e, data) {
                var uploadErrors = [];
                var acceptFileTypes = /(\.|\/)(gif|jpe?g|png)$/i;
                if (data.originalFiles[0]['type'].length && !acceptFileTypes.test(data.originalFiles[0]['type'])) {
                    uploadErrors.push('Định dạng file không hợp lệ, chỉ chấp nhận file: .gif, .jpg, .jpeg, .png');
                }
                if (data.originalFiles[0]['size'].length && data.originalFiles[0]['size'] > 50000000) {
                    uploadErrors.push('Kích thước file quá lớn, size tối đa 5MB');
                }
                if (uploadErrors.length > 0) {
                    alert(uploadErrors.join("\n"));
                } else {
                    $('#uploadifive-file_name').text(data.originalFiles[0].name);
                    data.submit();
                }
            },
            url: '/RealEstate.Admin/Home/Upload?contentItemId=2166882&amp;userId=1667444&amp;isPublished=False',
            formData: {
                'timestamp': '636537300857585104',
                'token': auth,
                '__RequestVerificationToken': antiForgeryToken,
                'contentItemId': '2166882',
                'userId': '1667444',
                'isPublished': false
            },
            dataType: 'json',
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#uploadifive-file_progress').show();
                $('#progress .progress-bar').css('width', progress + '%');
            },
            done: function (e, data) {
                if (data.textStatus == "success") {
                    if (onUploadSuccessHandler) onUploadSuccessHandler(data.result);
                } else {
                    //thông báo lỗi
                    console.log(data);
                }

                $('#uploadifive-file_progress').fadeOut();
            }
        });
        //.prop('disabled', !$.support.fileInput)
        //.parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script> 
                </div>
            </div>
            <!-- Youtube Video -->
            <div class="control-group">
                <label class="control-label">Youtube Id:</label>
                <div class="controls">
                    
                    <input class="text text-box" id="YoutubeId" name="YoutubeId" placeholder="Dán YoutubeId vào đây" type="text" value="">
                    <label><input id="YoutubePublish" name="YoutubePublish" type="checkbox" value="true"><input name="YoutubePublish" type="hidden" value="false">Publish video</label>
                    <div>
                        Vào <a href="https://www.youtube.com/upload" target="_blank"><strong>Youtube.com</strong></a> để upload video, <br>
                        sau đó copy YoutubeId giống như hình bên dưới và dán(paste) vào ô trên<br>
                        <a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#colorbox_youtube_guide" title="Click để xem hướng dẫn copy YoutubeId trên link" class="inline-youtube_guide"><i class="icon-help ui-icon"></i> Xem hình</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="form-horizontal pull-left">
            <div class="control-group" style="font-style:italic;">
                <!-- VisitedCount -->
                <!-- TODO -->
            </div>
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>

<!-- Modal -->
<div class="modal fade" id="dialogIsSoldByGroup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">BĐS Đã giao dịch</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <h2>BĐS này do Group của bạn bán phải không?</h2>
                    <div class="select2-container text text-box" id="s2id_IsSoldByUserIds"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">-- NV Giao dịch --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><input class="text text-box select2-user select2-group-user" group="1580848" id="IsSoldByUserIds" multiple="multiple" name="IsSoldByUserIds" placeholder="-- NV Giao dịch --" type="text" value="" tabindex="-1" title="" style="display: none;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="" value="true" data-dismiss="modal">Đúng</button>
                <button type="button" class="" value="false" data-dismiss="modal">Không</button>
            </div>
        </div>
    </div>
</div>


            <!-- GalleryManager -->
            

<script type="text/javascript">

    window.mobileAndTabletcheck = function () {
        var check = false;
        (function (a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    }

    var smPos = 153; var spPos = 153; var sW; var sH;
    jQuery(function (f) {
        if ($(window).width() >= 768 && !mobileAndTabletcheck()) {
            f(".zoom_gallery a[rel^='prettyPhoto']").prettyPhoto({
                changepicturecallback: function () { f("#fullResImage").z("destroy").z() },
                callback: function () { f("#fullResImage").z("destroy") },
                social_tools: false
            });
        }
    });
</script>

<!-- Hình ảnh -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Hình ảnh</h1>
                <div class="header-right"></div>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal">
            <div class="control-group">
                <div class="zoom_gallery">
                    <ul class="gallery">
                                <li>
                                    <div class="image-wrapper">
                                    <div class="image-container">
                                        <a href="https://dulieunhadat.vn/UserFiles/2166882/00b0b66d-869d-4373-b715-0245613733a3.jpeg" target="_blank" rel="prettyPhoto[2166882]">
                                            <img alt="11376433-C6CA-4FC8-9239-10E9A4199EDA.jpeg" src="./ReeSoft - Quan10 - Cập nhật BĐS _ co hinh anh_files/00b0b66d-869d-4373-b715-0245613733a3.jpeg" width="140">
                                        </a>
                                    </div>
                                    </div>
                                    <div class="image-control">
                                        <label><input type="checkbox" name="chkPublished" id="chkPublished-2166885" value="2166885"> Published</label>
                                        <label><input type="radio" name="radIsAvatar" id="radIsAvatar-2166885" value="2166885">Avatar</label>
                                    </div>
                                    <a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#" class="action-delete" id="2166885" rel="11376433-C6CA-4FC8-9239-10E9A4199EDA.jpeg"><span class="ui-icon icon-cross"></span> Xóa hình</a>
                                </li>
                                <li>
                                    <div class="image-wrapper">
                                    <div class="image-container">
                                        <a href="https://dulieunhadat.vn/UserFiles/2166882/8e08b22e-8d3c-4663-9126-573c3871256c.jpeg" target="_blank" rel="prettyPhoto[2166882]">
                                            <img alt="9B573356-8C40-4801-9877-E8DBEA3EFBCA.jpeg" src="./ReeSoft - Quan10 - Cập nhật BĐS _ co hinh anh_files/8e08b22e-8d3c-4663-9126-573c3871256c.jpeg" width="140">
                                        </a>
                                    </div>
                                    </div>
                                    <div class="image-control">
                                        <label><input type="checkbox" name="chkPublished" id="chkPublished-2166883" value="2166883"> Published</label>
                                        <label><input type="radio" name="radIsAvatar" id="radIsAvatar-2166883" value="2166883">Avatar</label>
                                    </div>
                                    <a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#" class="action-delete" id="2166883" rel="9B573356-8C40-4801-9877-E8DBEA3EFBCA.jpeg"><span class="ui-icon icon-cross"></span> Xóa hình</a>
                                </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>


<script type="text/javascript">
    $(function () {
        // Delete image
        $("ul.gallery").on('click', '.action-delete', function () {
            var name = $(this).attr('rel');
            if (confirm('Bạn muốn xóa hình ' + name + ' ?')) {
                $.ajax({
                    type: "post",
                    dataType: "",
                    url: "/RealEstate.Admin/Home/AjaxDeletePropertyImage",
                    data: {
                        id: $(this).attr("id"),
                        __RequestVerificationToken: antiForgeryToken
                    },
                    success: function (response) {
                        if (response.success) {
                            $("a[id=" + response.id + "]").closest('li').fadeOut("slow", function () {
                                $(this).remove();
                            });
                        }
                        else
                            alert(response.message);
                    },
                    error: function (request, status, error) {
                    }
                });
            }
            return false;
        });

        // Publish image
        $("ul.gallery").on('change', 'input[name^=chkPublished]', function () {
            $.ajax({
                type: "post",
                dataType: "",
                url: "/RealEstate.Admin/Home/AjaxPublishPropertyImage",
                data: {
                    id: $(this).val(),
                    isPublished: $(this).is(':checked'),
                    __RequestVerificationToken: antiForgeryToken
                },
                success: function (response) {
                    if (response.success) {
                        // Update thành công
                    }
                    else
                        alert(response.message);
                },
                error: function (request, status, error) {
                }
            });
            return false;
        });

        // Set image as Avatar
        $("ul.gallery").on('change', 'input[name^=radIsAvatar]', function () {
            $.ajax({
                type: "post",
                dataType: "",
                url: "/RealEstate.Admin/Home/AjaxSetAvatarPropertyImage",
                data: {
                    id: $(this).val(),
                    isAvatar: $(this).is(':checked'),
                    __RequestVerificationToken: antiForgeryToken
                },
                success: function (response) {
                    if (response.success) {
                        // Update thành công
                        $("#chkPublished-" + response.id).attr("checked", "checked");
                    }
                    else
                        alert(response.message);
                },
                error: function (request, status, error) {
                }
            });
            return false;
        });

    });

    // Add new Image to list
    function onUploadSuccessHandler(json) {
        var nimg = '<li> \
                <div class="image-wrapper"> \
                <div class="image-container"> \
                    <a href="' + json.path + '" target="_blank" rel="prettyPhoto[' + json.contentItemId + ']"> \
                        <img alt="' + json.fileName + '" src="' + json.path + '" width="140" /> \
                    </a> \
                </div> \
                </div> \
                <div class="image-control">';

        if (json.published == true)
            nimg += '<label><input type="checkbox" name="chkPublished" id="chkPublished-' + json.fileId + '" value="' + json.fileId + '" checked="checked" >Published</label>';
        else
            nimg += '<label><input type="checkbox" name="chkPublished" id="chkPublished-' + json.fileId + '" value="' + json.fileId + '" >Published</label>';

        nimg +='<label><input type="radio" name="radIsAvatar" id="radIsAvatar-' + json.fileId + '" value="' + json.fileId + '" >Avatar</label> \
                </div> \
            </li>';

        $("ul.gallery").append(nimg);

            $("ul.gallery li:last").append('<a href="#" class="action-delete" id="' + json.fileId + '" rel="' + json.fileName + '"><span class="ui-icon icon-cross"></span> Xóa hình</a>');
    }
</script>


            <!-- AdsType, TypeGroup, Type -->
            
<!-- Loại hình BĐS -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Loại hình BĐS</h1>
                <div class="header-right"></div>
            </div>
            <div class="header-msg">
                <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
            </div>
        </div>
    </header>
    <br>
    <article>
        <div class="form-horizontal pull-left">
            <!-- AdsType -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Loại giao dịch:</label>
                <div class="controls">
                    <select class="select-box" id="AdsTypeCssClass" name="AdsTypeCssClass">
                        <?php
                            foreach ($loaiTinlist as $loaiTin){
                        ?>
                            <option 
                                <?php 
                                    if(isset($dbdNews['BDS_NEWS']['TYPE_NEWS_CODE'])){
                                        if($dbdNews['BDS_NEWS']['TYPE_NEWS_CODE'] == $day['DayList']['DAY_LIST_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $loaiTin['LoaiTin']['TYPE_NEWS_CODE'] ?>"><?php echo $loaiTin['LoaiTin']['TYPE_NEWS_NAME'] ?>
                            </option>
                        <?php
                            }
                        ?>
                    </select>
                    

                    <!-- Published -->
                    <label class="w180"><input checked="checked" id="Published" name="Published" type="checkbox" value="true"><input name="Published" type="hidden" value="false">Published</label>
                    <!-- AdsExpirationDate -->
                    <select id="AddAdsExpirationDate" name="AddAdsExpirationDate">
                        <?php
                            foreach ($dayList as $day){
                        ?>
                            <option 
                                <?php 
                                    if(isset($dbdNews['BDS_NEWS']['DAY_LIST_CODE'])){
                                        if($dbdNews['BDS_NEWS']['DAY_LIST_CODE'] == $day['DayList']['DAY_LIST_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $day['DayList']['DAY_LIST_CODE'] ?>">
                                    <?php echo $day['DayList']['DAY_LIST_NAME'] ?>
                            </option>
                        <?php
                            }
                        ?>
                    </select>
                    <input class="text date-box date-box-full hasDatepicker" id="AdsExpirationDate" name="AdsExpirationDate" type="text" value="30/7/2018 4:28:11 AM">
                </div>
            </div>
            <!-- TypeGroup -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Nhóm BĐS:</label>
                <div class="controls">
                    <select class="select-box" data-current-value="gp-house" id="TypeGroupCssClass" name="TypeGroupCssClass">
                        <?php
                            foreach ($nhomBdsList as $nhomBds){
                        ?>
                            <option 
                                <?php 
                                    if(isset($dbdNews['BDS_NEWS']['GROUP_CODE'])){
                                        if($dbdNews['BDS_NEWS']['GROUP_CODE'] == $nhomBds['NhomBds']['GROUP_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $nhomBds['NhomBds']['GROUP_CODE'] ?>"><?php echo $nhomBds['NhomBds']['GROUP_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    

                    <!-- AdsGoodDeal -->
                    <label class="w180"><input id="AdsGoodDeal" name="AdsGoodDeal" type="checkbox" value="true"><input name="AdsGoodDeal" type="hidden" value="false">BĐS giá rẻ</label>
                    <!-- AdsGoodDealExpirationDate -->
                    <select id="AddAdsGoodDealExpirationDate" name="AddAdsGoodDealExpirationDate">
                        <option selected="selected" value="None"></option>
                        <option value="Day10">10 ngày</option>
                        <option value="Day20">20 ngày</option>
                        <option value="Day30">30 ngày</option>
                        <option value="Day60">60 ngày</option>
                        <option value="Day90">90 ngày</option>
                        <option value="Day180">180 ngày</option>
                    </select>
                    <input class="text date-box date-box-full hasDatepicker" id="AdsGoodDealExpirationDate" name="AdsGoodDealExpirationDate" type="text" value="">
                    <!-- AdsGoodDealRequest -->
                </div>
            </div>
            <!-- Type -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Loại BĐS:</label>
                <div class="controls">
                    <select class="select-box" id="TypeCssClass" name="TypeCssClass"><option value="">-- Vui lòng chọn --</option><option value="tp-concrete-house">Nhà phố</option><option value="tp-villa">Biệt thự</option><option value="tp-office-building">Tòa nhà Cao ốc</option><option value="tp-hotel">Khách sạn</option><option value="tp-ground-floor">Mặt bằng</option><option value="tp-room">Phòng</option><option value="tp-warehouse-workshop">Kho xưởng</option><option value="tp-residential-land">Đất nền thổ cư</option><option value="tp-garden-land">Đất trồng cây lâu năm</option><option value="tp-farm-land">Đất nông nghiệp</option><option value="tp-forest-land">Đất lâm nghiệp</option><option value="tp-industrial-park">Đất sản xuất kinh doanh</option><option value="tp-resort-land">Đất du lịch</option><option value="tp-service-land">Đất thương mại dịch vụ</option><option value="tp-only-land">Đất chuyên dụng</option></select>
                    

                        <!-- AdsVIP -->
                        <label class="w99">
                            <input checked="checked" id="AdsVIP" name="AdsVIP" type="checkbox" value="true"><input name="AdsVIP" type="hidden" value="false">BĐS đăng
                        </label>
                        <!-- Type VIP -->
                        <select id="AdsTypeVIPId" name="AdsTypeVIPId">
                            <option value="VIP1">Tin VIP 1</option>
                            <option value="VIP2">Tin VIP 2</option>
                            <option selected="selected" value="VIP3">Tin VIP 3</option>
                        </select>
                        <!-- AdsVIPExpirationDate -->
                        <select id="AddAdsVIPExpirationDate" name="AddAdsVIPExpirationDate">
                            <option selected="selected" value="None"></option>
                            <option value="Day10">10 ngày</option>
                            <option value="Day20">20 ngày</option>
                            <option value="Day30">30 ngày</option>
                            <option value="Day60">60 ngày</option>
                            <option value="Day90">90 ngày</option>
                            <option value="Day180">180 ngày</option>
                        </select>
                        <input class="text date-box date-box-full hasDatepicker" id="AdsVIPExpirationDate" name="AdsVIPExpirationDate" type="text" value="10/2/2018 11:59:59 PM">
                    
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Số dư hiện tại:</label>
                <div class="controls">
                    <div style="width:150px;float:left;color:red;">
                        634,080,000 VNĐ
                    </div>
                    <div style="width:auto;float:left;">
                        Số tiền phải trả: <span style="color:red;" id="writePrice">0</span> VNĐ
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <!--  -->
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>
<script type="text/javascript">
    var unitPriceArray = [0,0,0,0,20]
    var currentBalance =634080000
    var oldPrice = 0;
</script>

            <!-- AddressInfo -->
            
<!-- Địa chỉ -->
<article class="content-item content-item-address">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Địa chỉ</h1>
                <div class="header-right"></div>
            </div>
            <div class="header-msg">
                <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">

            <!-- DisplayForAddress -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Địa chỉ:</label>
                <div class="controls">
                    <strong id="DisplayForAddress">3/1/18 Đội Cung, Phường 11, Quận 11, Tp. Hồ Chí Minh</strong>
                    <input type="hidden" id="DisplayForAddressHidden" value="3/1/18, Đội Cung, Phường 11, Quận 11, Tp. Hồ Chí Minh" placeholder="Nhập vị trí" autocomplete="off">
                </div>
            </div>

            <!-- Province -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Tỉnh / Thành Phố:</label>
                <div class="controls">
                    <div class="combobox-container combobox-selected"> <input type="hidden" value="249" name="ProvinceId"> <div class="input-group"> <div class="combobox-container"> <input type="hidden" name="autocompleteProvinceId" value=""> <div class="input-group"> <input type="text" autocomplete="off" name="autocompleteautocompleteProvinceId" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" class="combobox" style="display: none;"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><div class="combobox-container combobox-selected"> <input type="hidden" value="249" name=""> <div class="input-group"> <input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" name="autocomplete" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><select class="combobox" id="ProvinceId" style="display: none;"><option value="">-- Vui lòng chọn --</option>
<option value="0">-- Chọn tất cả Tỉnh/TP --</option>
<option selected="selected" value="249">Tp. Hồ Chí Minh</option>
<option value="250">Hà Nội</option>
<option value="251">Đà Nẵng</option>
<option value="283">Khánh Hòa</option>
<option value="301">Bình Dương</option>
<option value="293">Đồng Nai</option>
<option value="282">Kiên Giang</option>
<option value="311">Cần Thơ</option>
<option value="310">Hải Phòng</option>
<option value="256">Trà Vinh</option>
<option value="257">Tiền Giang</option>
<option value="254">Vĩnh Long</option>
<option value="258">Thừa Thiên Huế</option>
<option value="259">Thanh Hóa</option>
<option value="260">Thái Nguyên</option>
<option value="261">Thái Bình</option>
<option value="262">Tây Ninh</option>
<option value="263">Sơn La</option>
<option value="264">Sóc Trăng</option>
<option value="265">Quảng Trị</option>
<option value="266">Quảng Ninh</option>
<option value="267">Quảng Ngãi</option>
<option value="268">Quảng Nam</option>
<option value="269">Quảng Bình</option>
<option value="270">Phú Yên</option>
<option value="271">Phú Thọ</option>
<option value="272">Ninh Thuận</option>
<option value="273">Ninh Bình</option>
<option value="274">Nghệ An</option>
<option value="275">Nam Định</option>
<option value="255">Tuyên Quang</option>
<option value="276">Long An</option>
<option value="277">Lào Cai</option>
<option value="278">Lạng Sơn</option>
<option value="279">Lâm Đồng</option>
<option value="280">Lai Châu</option>
<option value="281">Kon Tum</option>
<option value="252">Yên Bái</option>
<option value="284">Hưng Yên</option>
<option value="285">Hòa Bình</option>
<option value="286">Hậu Giang</option>
<option value="287">Hải Dương</option>
<option value="288">Hà Tĩnh</option>
<option value="289">Hà Nam</option>
<option value="290">Hà Giang</option>
<option value="291">Gia Lai</option>
<option value="292">Đồng Tháp</option>
<option value="294">Điện Biên</option>
<option value="295">Đăk Nông</option>
<option value="296">Đăk Lăk</option>
<option value="297">Cao Bằng</option>
<option value="298">Cà Mau</option>
<option value="299">Bình Thuận</option>
<option value="300">Bình Phước</option>
<option value="302">Bình Định</option>
<option value="303">Bến Tre</option>
<option value="304">Bắc Ninh</option>
<option value="305">Bạc Liêu</option>
<option value="306">Bắc Kạn</option>
<option value="307">Bắc Giang</option>
<option value="308">Bà Rịa Vũng Tàu</option>
<option value="309">An Giang</option>
<option value="312">Hà Tây</option>
<option value="253">Vĩnh Phúc</option>
</select>
                    
                </div>
            </div>

            <!-- District -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Quận / Huyện:</label>
                <div class="controls">
                    <div class="combobox-container combobox-selected"> <input type="hidden" value="323" name="DistrictId"> <div class="input-group"> <div class="combobox-container"> <input type="hidden" name="autocompleteDistrictId" value=""> <div class="input-group"> <input type="text" autocomplete="off" name="autocompleteautocompleteDistrictId" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" class="combobox" style="display: none;"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><div class="combobox-container combobox-selected"> <input type="hidden" value="323" name=""> <div class="input-group"> <input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" name="autocomplete" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><select class="combobox" id="DistrictId" style="display: none;"><option value="">-- Vui lòng chọn --</option>
<option value="313">Quận 1</option>
<option value="314">Quận 2</option>
<option value="315">Quận 3</option>
<option value="316">Quận 4</option>
<option value="317">Quận 5</option>
<option value="318">Quận 6</option>
<option value="319">Quận 7</option>
<option value="320">Quận 8</option>
<option value="321">Quận 9</option>
<option value="322">Quận 10</option>
<option selected="selected" value="323">Quận 11</option>
<option value="324">Quận 12</option>
<option value="325">Quận Bình Tân</option>
<option value="326">Quận Bình Thạnh</option>
<option value="327">Quận Gò Vấp</option>
<option value="328">Quận Phú Nhuận</option>
<option value="329">Quận Tân Bình</option>
<option value="330">Quận Tân Phú</option>
<option value="331">Quận Thủ Đức</option>
<option value="332">Huyện Bình Chánh</option>
<option value="333">Huyện Cần Giờ</option>
<option value="334">Huyện Củ Chi</option>
<option value="335">Huyện Hóc Môn</option>
<option value="336">Huyện Nhà Bè</option>
</select>
                    
                </div>
            </div>

            <!-- gp-apartment -->

            <!-- Ward -->
            <div class="control-group">
                <label class="control-label">
                        <span class="text-error">*</span>
                    Phường / Xã:
                </label>
                <div class="controls">
                    <div class="combobox-container combobox-selected"> <input type="hidden" value="1138" name="WardId"> <div class="input-group"> <div class="combobox-container"> <input type="hidden" name="autocompleteWardId" value=""> <div class="input-group"> <input type="text" autocomplete="off" name="autocompleteautocompleteWardId" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" class="combobox" style="display: none;"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><div class="combobox-container combobox-selected"> <input type="hidden" value="1138" name=""> <div class="input-group"> <input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" name="autocomplete" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><select class="combobox" id="WardId" style="display: none;"><option value="">-- Vui lòng chọn --</option>
<option value="1136">Phường 1</option>
<option value="1144">Phường 2</option>
<option value="1145">Phường 3</option>
<option value="1146">Phường 4</option>
<option value="1147">Phường 5</option>
<option value="1148">Phường 6</option>
<option value="1149">Phường 7</option>
<option value="1150">Phường 8</option>
<option value="1151">Phường 9</option>
<option value="1137">Phường 10</option>
<option selected="selected" value="1138">Phường 11</option>
<option value="1139">Phường 12</option>
<option value="1140">Phường 13</option>
<option value="1141">Phường 14</option>
<option value="1142">Phường 15</option>
<option value="1143">Phường 16</option>
<option value="140441">Phường 17</option>
<option value="140442">Phường 26</option>
</select>
                    

                    <input class="text text-box" id="OtherWardName" maxlength="250" name="OtherWardName" style="display:none;" type="text" value="">
                    

                    <label><input id="ChkOtherWardName" name="ChkOtherWardName" tabindex="-1" type="checkbox" value="true"><input name="ChkOtherWardName" type="hidden" value="false">Khác</label>
                </div>
            </div>

            <!-- Street -->
            <div class="control-group">
                <label class="control-label">
                        <span class="text-error">*</span>
                    Đường / Phố:
                </label>
                <div class="controls">
                    <div class="combobox-container combobox-selected"> <input type="hidden" value="5507" name="StreetId"> <div class="input-group"> <div class="combobox-container"> <input type="hidden" name="autocompleteStreetId" value=""> <div class="input-group"> <input type="text" autocomplete="off" name="autocompleteautocompleteStreetId" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" class="combobox" style="display: none;"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><div class="combobox-container combobox-selected"> <input type="hidden" value="5507" name=""> <div class="input-group"> <input type="text" autocomplete="off" placeholder="-- Vui lòng chọn --" name="autocomplete" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><select class="combobox" id="StreetId" style="display: none;"><option value="">-- Vui lòng chọn --</option>
<option value="1798518">Âu Cơ</option>
<option value="5487">Bình Dương Thi Xã</option>
<option value="5488">Bình Thới</option>
<option value="5489">Các Đường Còn Lại Trong Cư Xá Lữ Gia</option>
<option value="5490">Công Chúa Ngọc Hân</option>
<option value="5492">Cư xá Bình Thới (Đường số 2)</option>
<option value="5493">Cư xá Bình Thới (Đường số 3)</option>
<option value="5494">Cư xá Bình Thới (Đường số 3a)</option>
<option value="5495">Cư xá Bình Thới (Đường số 4)</option>
<option value="5496">Cư xá Bình Thới (Đường số 5)</option>
<option value="5497">Cư xá Bình Thới (Đường số 5a)</option>
<option value="5498">Cư xá Bình Thới (Đường số 6)</option>
<option value="5499">Cư xá Bình Thới (Đường số 7)</option>
<option value="5500">Cư xá Bình Thới (Đường số 7a)</option>
<option value="5501">Cư xá Bình Thới (Đường số 8)</option>
<option value="5502">Cư xá Bình Thới (Đường số 9)</option>
<option value="5503">Cư xá Lạc Long Quân</option>
<option value="1579164">Cư xá Phú Thọ Hoà - đường Lạc Long QUân</option>
<option value="5504">Đặng Minh Khiêm</option>
<option value="5505">Đào Nguyên Phổ</option>
<option value="5506">Đỗ Ngọc Thạnh</option>
<option selected="selected" value="5507">Đội Cung</option>
<option value="5508">Đường 1 C/x Lữ Gia</option>
<option value="5509">Đường 100 Bình Thới</option>
<option value="5510">Đường 16 C/x Lữ Gia</option>
<option value="5511">Đường 2 C/X Lữ Gia</option>
<option value="5512">Đường 22 C/x Lữ Gia</option>
<option value="5513">Đường 28 C/x Lữ Gia</option>
<option value="5514">Đường 281 Lý Thường Kiệt</option>
<option value="5515">Đường 2A C/x Lữ Gia</option>
<option value="5516">Đường 2B C/x Lữ Gia</option>
<option value="5517">Đường 3 C/x Lữ Gia</option>
<option value="5518">Đường 3/2</option>
<option value="109997">đường 325,327 Minh Phụng</option>
<option value="109952">Đường 329 Minh Phụng</option>
<option value="5519">Đường 34 C/x Lữ Gia</option>
<option value="5520">Đường 40 C/x Lữ Gia</option>
<option value="5521">Đường 52 (Hẻm Minh Phụng)</option>
<option value="5522">Đường 52 C/x Lữ Gia</option>
<option value="5523">Đường 702 Hồng Bàng</option>
<option value="5524">Đường 762 Hồng Bàng</option>
<option value="5525">Dương Đình Nghệ</option>
<option value="5527">Dương Tử Giang</option>
<option value="5528">Hà Tôn Quyền</option>
<option value="5529">Hàn Hải Nguyên</option>
<option value="5530">Hàn Hải Nguyên (nối Dài)</option>
<option value="5531">Hoà Bình</option>
<option value="5532">Hoà Hảo</option>
<option value="5533">Hoàng Đức Tương</option>
<option value="5534">Hồng Bàng</option>
<option value="5535">Huyện Toại</option>
<option value="5536">Huỳnh Văn Chính</option>
<option value="5537">Khuông Việt</option>
<option value="5538">Lạc Long Quân</option>
<option value="5539">Lạc Long Quân (nối Dài)</option>
<option value="5540">Lãnh Binh Thăng</option>
<option value="5541">Lê Đại Hành</option>
<option value="5542">Lê Thị Bạch Cát</option>
<option value="5543">Lê Tung</option>
<option value="5544">Lò Siêu</option>
<option value="5545">Lữ Gia</option>
<option value="5546">Lý Nam Đế</option>
<option value="5547">Lý Thường Kiệt</option>
<option value="5548">Minh Phụng</option>
<option value="5549">Nguyễn Bá Học</option>
<option value="5550">Nguyễn Chí Thanh</option>
<option value="5551">Nguyễn Thị Nhỏ</option>
<option value="5552">Nguyễn Thị Nhỏ (nối Dài)</option>
<option value="5553">Nguyễn Văn Phú</option>
<option value="5554">Nhật Tảo</option>
<option value="5555">Ông Ích Khiêm</option>
<option value="5556">Phan Xích Long</option>
<option value="5557">Phó Cơ Điều</option>
<option value="5558">Phú Thọ</option>
<option value="5559">Quân Sự</option>
<option value="5560">Tạ Uyên</option>
<option value="5561">Tân Hóa</option>
<option value="5562">Tân Khai</option>
<option value="5563">Tân Phước</option>
<option value="5564">Tân Thành</option>
<option value="5565">Thái Phiên</option>
<option value="5566">Thiên Phước</option>
<option value="5567">Thuận Kiều</option>
<option value="5568">Tôn Thất Hiệp</option>
<option value="5569">Tổng Lung</option>
<option value="5570">Tống Văn Trân</option>
<option value="5571">Trần Quý</option>
<option value="5572">Trịnh Đình Trọng</option>
<option value="5573">Tuệ Tĩnh</option>
<option value="5574">Vĩnh Viễn</option>
<option value="5575">Xóm Đất</option>
</select>
                    

                    <input class="text text-box" id="OtherStreetName" maxlength="250" name="OtherStreetName" style="display:none;" type="text" value="">
                    

                    <label><input id="ChkOtherStreetName" name="ChkOtherStreetName" tabindex="-1" type="checkbox" value="true"><input name="ChkOtherStreetName" type="hidden" value="false">Khác</label>
                </div>
            </div>

            <!-- AddressNumber -->
            <div class="control-group">
                <label class="control-label">
Số nhà / Số lô:                    <a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#colorbox_addresscorner" tabindex="-1" title="Click để xem hướng dẫn" class="inline-addresscorner"><i class="icon-help ui-icon"></i></a>
                </label>
                <div class="controls">
                    <input class="text text-box" id="AddressNumber" maxlength="250" name="AddressNumber" type="text" value="3/1/18">
                    

                        <label><input id="PublishAddress" name="PublishAddress" tabindex="-1" type="checkbox" value="true"><input name="PublishAddress" type="hidden" value="false">Cho phép hiện địa chỉ</label>
                </div>
            </div>

            <!-- gp-house -->
                <!-- AddressCorner -->
                <div class="control-group" style="display: none;">
                    <label class="control-label">
                        Ngõ / Ngách:
                        <a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#colorbox_addresscorner" title="Click để xem hướng dẫn" class="inline-addresscorner"><i class="icon-help ui-icon"></i></a>
                    </label>
                    <div class="controls">
                        <input class="text text-box" id="AddressCorner" maxlength="250" name="AddressCorner" type="text" value="">
                        
                    </div>
                </div>

            <!-- gp-apartment -->

        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>


            <!-- Legal Status, Direction, Location, Alley -->

<!-- Hướng & Vị trí -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Hướng &amp; Vị trí</h1>
                <div class="header-right"></div>
            </div>
            <div class="header-msg">
                <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">
            <!-- LegalStatus -->
            <div class="control-group">
                <label class="control-label">Tình trạng pháp lý:</label>
                <div class="controls">
                    <select class="select-box" id="LegalStatusId" name="LegalStatusId"><option value="">-- Vui lòng chọn --</option>
<option value="41">Sổ hồng</option>
<option value="42">Sổ đỏ</option>
<option value="43">Mẫu chủ quyền cũ</option>
<option value="143053">Hợp đồng mua bán</option>
<option value="45">Hợp đồng góp vốn</option>
<option value="46">Đang hợp thức hóa</option>
<option value="143056">Giấy xác nhân Phường, Xã</option>
<option value="47">Hợp đồng thuê dài hạn</option>
<option value="48">Tờ khai nhà đất</option>
<option value="49">Không có chủ quyền</option>
<option value="50">Giấy tay tự lập</option>
<option value="44">Giấy tờ hợp lệ khác</option>
</select>
                    
                </div>
            </div>
            <!-- Direction -->
            <div class="control-group">
                <label class="control-label">Hướng của BĐS:</label>
                <div class="controls">
                    <select class="select-box" id="DirectionCssClass" name="DirectionCssClass"><option value="">-- Vui lòng chọn --</option>
<option value="d-east">Ðông</option>
<option value="d-west">Tây</option>
<option value="d-south">Nam</option>
<option value="d-north">Bắc</option>
<option value="d-northeast">Đông Bắc</option>
<option selected="selected" value="d-southeast">Đông Nam</option>
<option value="d-northwest">Tây Bắc</option>
<option value="d-southwest">Tây Nam</option>
</select>
                    
                </div>
            </div>
            <!-- Location -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Vị trí BĐS:</label>
                <div class="controls">
                    <select class="select-box" id="LocationCssClass" name="LocationCssClass"><option value="">-- Vui lòng chọn --</option>
<option value="h-front">Mặt tiền</option>
<option selected="selected" value="h-alley">Trong hẻm</option>
</select>
                    
                </div>
            </div>
            <!-- StreetWidth -->
            <div class="control-group" id="divStreetWidth" style="display:none;">
                <label class="control-label">Độ rộng đường trước nhà:</label>
                <div class="controls">
                    <input class="text number-box-ext" id="StreetWidth" name="StreetWidth" type="text" value="" disabled="disabled"> m
                    
                </div>
            </div>
            <!-- DistanceToStreet -->
            <div class="control-group form-horizontal-268" id="divDistanceToStreet" style="">
                <label class="control-label">Khoảng cách từ BĐS ra đường chính:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="DistanceToStreet" name="DistanceToStreet" type="text" value=""> m
                    
                </div>
            </div>
            <!-- AlleyTurns -->
            <div class="control-group form-horizontal-268" id="divAlleyTurns" style="">
                <label class="control-label">Số lần rẽ (quẹo) từ đường chính vào đến BĐS:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyTurns" name="AlleyTurns" type="text" value="1">
                    
                </div>
            </div>
            <div class="control-group" id="divAlleyWidth10" style="display: block;">
                <strong>Nhập độ rộng của các hẻm từ đường chính vào đến BĐS:</strong>
            </div>
            <!-- AlleyWidth1 -->
            <div class="control-group form-horizontal-268" id="divAlleyWidth1" style="display: block;">
                <label class="control-label">Lần rẽ thứ nhất (Hẻm đầu tiên) rộng:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyWidth1" name="AlleyWidth1" type="text" value="3"> m
                    
                </div>
            </div>
            <!-- AlleyWidth2 -->
            <div class="control-group form-horizontal-268" id="divAlleyWidth2" style="display:none;">
                <label class="control-label">Lần rẽ thứ 2:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyWidth2" name="AlleyWidth2" type="text" value=""> m
                    
                </div>
            </div>
            <!-- AlleyWidth3 -->
            <div class="control-group form-horizontal-268" id="divAlleyWidth3" style="display:none;">
                <label class="control-label">Lần rẽ thứ 3:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyWidth3" name="AlleyWidth3" type="text" value=""> m
                    
                </div>
            </div>
            <!-- AlleyWidth4 -->
            <div class="control-group form-horizontal-268" id="divAlleyWidth4" style="display:none;">
                <label class="control-label">Lần rẽ thứ 4:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyWidth4" name="AlleyWidth4" type="text" value=""> m
                    
                </div>
            </div>
            <!-- AlleyWidth5 -->
            <div class="control-group form-horizontal-268" id="divAlleyWidth5" style="display:none;">
                <label class="control-label">Lần rẽ thứ 5:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyWidth5" name="AlleyWidth5" type="text" value=""> m
                    
                </div>
            </div>
            <!-- AlleyWidth6 -->
            <div class="control-group form-horizontal-268" id="divAlleyWidth6" style="display:none;">
                <label class="control-label">Lần rẽ thứ 6:</label>
                <div class="controls">
                    <input class="text number-box-medium" id="AlleyWidth6" name="AlleyWidth6" type="text" value=""> m
                    
                </div>
            </div>
        </div>
        <div class="form-horizontal pull-left">
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>
            <!-- AreaTotal, AreaLegal, AreaResidential -->

<!-- Diện tích -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Diện tích</h1>
                <div class="header-right"></div>
            </div>
            <div class="header-msg">
                <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">
            <!-- AreaTotal -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Diện tích khuôn viên đất:</label>
                <div class="controls">
                    <input class="text number-box-long" id="AreaTotal" name="AreaTotal" placeholder="diện tích" type="text" value=""> m<sup>2</sup>&nbsp;
                    <input class="text number-box-long" id="AreaTotalWidth" name="AreaTotalWidth" placeholder="chiều ngang" type="text" value="3.5">
                    &nbsp;x&nbsp;
                    <input class="text number-box-long" id="AreaTotalLength" name="AreaTotalLength" placeholder="chiều dài" type="text" value="11"> m
                    &nbsp;--&gt;&nbsp;
                    <input class="text number-box-long" id="AreaTotalBackWidth" name="AreaTotalBackWidth" placeholder="mặt hậu" type="text" value=""> m
                    
                    
                    
                    
                    
                </div>
            </div>
            <!-- AreaLegal -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Diện tích phù hợp quy hoạch:</label>
                <div class="controls">
                    <input class="text number-box-long" id="AreaLegal" name="AreaLegal" placeholder="diện tích" type="text" value=""> m<sup>2</sup>&nbsp;
                    <input class="text number-box-long" id="AreaLegalWidth" name="AreaLegalWidth" placeholder="chiều ngang" type="text" value="3.5">
                    &nbsp;x&nbsp;
                    <input class="text number-box-long" id="AreaLegalLength" name="AreaLegalLength" placeholder="chiều dài" type="text" value="11"> m
                    &nbsp;--&gt;&nbsp;
                    <input class="text number-box-long" id="AreaLegalBackWidth" name="AreaLegalBackWidth" placeholder="mặt hậu" type="text" value=""> m
            
                    
                    
                    
                    
                </div>
            </div>
            <!-- AreaIlegalRecognized -->
            <div class="control-group form-horizontal-402">
                <label class="control-label">Diện tích đất vi phạm lộ giới (quy hoạch) nhưng được công nhận:</label>
                <div class="controls">
                    <input class="text number-box-long" id="AreaIlegalRecognized" name="AreaIlegalRecognized" type="text" value=""> m<sup>2</sup>
                    
                </div>
            </div>
        </div>
                <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>
            <!-- Construction -->
            
    <!-- Thông tin xây dựng -->
    <article class="content-item" id="tblConstruction">
        <header>
            <div class="header-wrapper">
                <div class="header-center header-bg-green">
                    <div class="header-left header-bg-green">
                        <div class="header-left-triangle"></div>
                    </div>
                    <h1>Thông tin xây dựng</h1>
                    <div class="header-right"></div>
                </div>
                <div class="header-msg">
                    <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
                </div>
            </div>
        </header>
        <article>
            <div class="form-horizontal pull-left">
                <!-- AreaConstruction -->
                <div class="control-group">
                    <label class="control-label">Diện tích đất xây dựng:</label>
                    <div class="controls">
                        <input class="text number-box-ext" id="AreaConstruction" name="AreaConstruction" type="text" value=""> m<sup>2</sup>
                    </div>
                </div>
                <!-- AreaConstructionFloor -->
                <div class="control-group">
                    <label class="control-label">Dện tích sàn xây dựng:</label>
                    <div class="controls">
                        <input class="text number-box-ext" id="AreaConstructionFloor" name="AreaConstructionFloor" type="text" value=""> m<sup>2</sup>
                    </div>
                </div>
                
                <!-- FloorsCount -->
                <div class="control-group">
                    <label class="control-label">Số tầng:</label>
                    <div class="controls">
                        <select id="FloorsCount" name="FloorsCount" class="select-box">
                            <option selected="selected" value="0">Trệt</option>
                            <option value="1">1 tầng</option>
                            <option value="2">2 tầng</option>
                            <option value="3">3 tầng</option>
                            <option value="4">4 tầng</option>
                            <option value="5">5 tầng</option>
                            <option value="6">6 tầng</option>
                            <option value="7">7 tầng</option>
                            <option value="8">8 tầng</option>
                            <option value="9">9 tầng</option>
                            <option value="10">10 tầng</option>
                            <option value="-1">&gt; 10 tầng</option>
                        </select>
                    </div>
                </div>
                <!-- Floors -->
                <div class="control-group" style="display: none;">
                    <label class="control-label">Số lầu chính xác:</label>
                    <div class="controls">
                        <input class="text number-box-ext" id="Floors" name="Floors" type="text" value="0">
                    </div>
                </div>
                <!-- Bedrooms -->
                <div class="control-group">
                    <label class="control-label">Số phòng ngủ:</label>
                    <div class="controls">
                        <input class="text number-box-ext" id="Bedrooms" name="Bedrooms" type="text" value="">
                    </div>
                </div>
                <!-- Bathrooms -->
                <div class="control-group">
                    <label class="control-label">Số phòng vệ sinh:</label>
                    <div class="controls">
                        <input class="text number-box-ext" id="Bathrooms" name="Bathrooms" type="text" value="">
                    </div>
                </div>
                <!-- TypeConstruction -->
                <div class="control-group">
                    <label class="control-label">Loại công trình xây dựng:</label>
                    <div class="controls">
                        <select class="select-box" id="TypeConstructionId" name="TypeConstructionId"><option value="">-- Vui lòng chọn --</option><option value="274710">Cột gỗ; mái lá hoặc tôn, vách ván hoặc tôn; nền láng xi măng.</option><option value="274708">Cột gạch hoặc gỗ; mái lợp tôn hoặc ngói; nền lát gạch bông hoặc tương đương.</option><option value="274707">Tường gạch sơn nước; mái lợp tôn hoặc ngói; nền lát gạch ceramic các loại hay tương đương.</option><option value="274705">Tường gạch sơn nước, Khung, mái đúc bê tông;  nền lát gạch ceramic các loại hay tương đương.</option></select>
                        
                    </div>
                </div>
                <!-- Interior -->
                <div class="control-group">
                    <label class="control-label">Chọn mức độ đầu tư xây dựng:</label>
                    <div class="controls">
                        <select class="select-box" id="InteriorId" name="InteriorId"><option value="">-- Vui lòng chọn --</option>
<option value="36">Xây thô</option>
<option value="37">Xây dựng đơn giản</option>
<option value="38">Xây vừa đủ tiện nghi</option>
<option value="39">Xây sang trọng cao cấp</option>
<option value="40">Xây cực kỳ cao cấp</option>
</select>
                        
                    </div>
                </div>
                <!-- RemainingValue -->
                <div class="control-group">
                    <label class="control-label">Chất lượng nhà còn lại:</label>
                    <div class="controls">
                        <input class="text number-box-ext" id="RemainingValue" name="RemainingValue" type="text" value=""> %
                    </div>
                </div>
            </div>
            <div class="form-horizontal pull-left">
                <ul style="padding-left:40px;">
                    <li><label><input id="HaveBasement" name="HaveBasement" type="checkbox" value="true"><input name="HaveBasement" type="hidden" value="false">Có tầng hầm</label></li>
                    <li><label><input id="HaveMezzanine" name="HaveMezzanine" type="checkbox" value="true"><input name="HaveMezzanine" type="hidden" value="false">Có lửng</label></li>
                    <li><label><input id="HaveTerrace" name="HaveTerrace" type="checkbox" value="true"><input name="HaveTerrace" type="hidden" value="false">Có sân thượng</label></li>
                    <li><label><input id="HaveGarage" name="HaveGarage" type="checkbox" value="true"><input name="HaveGarage" type="hidden" value="false">Có gara ô tô</label></li>
                    <li><label><input id="HaveElevator" name="HaveElevator" type="checkbox" value="true"><input name="HaveElevator" type="hidden" value="false">Có thang máy</label></li>
                    <li><label><input id="HaveSwimmingPool" name="HaveSwimmingPool" type="checkbox" value="true"><input name="HaveSwimmingPool" type="hidden" value="false">Có hồ bơi</label></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </article>
        <footer></footer>
    </article>


            <!-- Advantage & Disadvantage -->

<!-- Đặc điểm tốt - Đặc điểm xấu -->
<article class="content-item">
    <header>
        <div class="header-wrapper pull-right">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Đặc điểm xấu</h1>
                <div class="header-right"></div>
            </div>
        </div>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Đặc điểm tốt</h1>
                <div class="header-right"></div>
            </div>
        </div>
    </header>
    <article>
        <!-- Advantages -->
        <div class="p50 pull-left">
            <ul>

                <li><input type="hidden" value="85728" name="Advantages[0].Advantage.Id">
                    <label for="Advantages[0].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[0].IsChecked" id="Advantages[0].IsChecked">
                        Có 2 mặt đường chính (+15%)
                    </label>

                </li>
                <li><input type="hidden" value="85729" name="Advantages[1].Advantage.Id">
                    <label for="Advantages[1].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[1].IsChecked" id="Advantages[1].IsChecked">
                        Căn góc, có hẻm bên hông (+7%)
                    </label>

                </li>
                <li><input type="hidden" value="85730" name="Advantages[2].Advantage.Id">
                    <label for="Advantages[2].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[2].IsChecked" id="Advantages[2].IsChecked">
                        Có hẻm sau nhà (+5%)
                    </label>

                </li>
                <li><input type="hidden" value="85732" name="Advantages[3].Advantage.Id">
                    <label for="Advantages[3].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[3].IsChecked" id="Advantages[3].IsChecked">
                        Gần chợ, siêu thị (&lt;500m) (+2%)
                    </label>

                </li>
                <li><input type="hidden" value="85733" name="Advantages[4].Advantage.Id">
                    <label for="Advantages[4].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[4].IsChecked" id="Advantages[4].IsChecked">
                        Gần công viên, trung tâm giải trí (&lt;500m) (+2%)
                    </label>

                </li>
                <li><input type="hidden" value="85734" name="Advantages[5].Advantage.Id">
                    <label for="Advantages[5].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[5].IsChecked" id="Advantages[5].IsChecked">
                        Khu dân cư cao cấp có cổng bảo vệ (+5%)
                    </label>

                </li>
                <li><input type="hidden" value="85735" name="Advantages[6].Advantage.Id">
                    <label for="Advantages[6].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[6].IsChecked" id="Advantages[6].IsChecked">
                        Vị trí đẹp nhất trong đoạn đường (+5%)
                    </label>

                </li>
                <li><input type="hidden" value="85736" name="Advantages[7].Advantage.Id">
                    <label for="Advantages[7].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[7].IsChecked" id="Advantages[7].IsChecked">
                        Tiện làm quán cafe, nhà hàng, khách sạn (+2%)
                    </label>

                </li>
                <li><input type="hidden" value="85794" name="Advantages[8].Advantage.Id">
                    <label for="Advantages[8].IsChecked">
                        <input type="checkbox" value="true" name="Advantages[8].IsChecked" id="Advantages[8].IsChecked">
                        Hẻm thông ra đường khác đẹp hơn. (+5%)
                    </label>

                </li>
            </ul>
            <br>
            <div class="form-inline">
                <!-- OtherAdvantagesDesc -->
                <div class="control-group">
                    <label class="control-label">Đặc điểm tốt khác làm tăng giá trị của BĐS:</label>
                    <div class="controls">
                        <input class="text text-box-medium" id="OtherAdvantagesDesc" maxlength="250" name="OtherAdvantagesDesc" placeholder="Nêu đặc điểm tốt khác làm tăng thêm giá trị của BĐS" type="text" value="">
                    </div>
                </div>
                <!-- OtherAdvantages -->
                <div class="control-group">
                    <label class="control-label">Nhập số phần trăm tăng thêm:</label>
                    <div class="controls">
                        <input class="text number-box" id="OtherAdvantages" name="OtherAdvantages" type="text" value=""> %
                    </div>
                </div>
            </div>
        </div>
        <!-- DisAdvantages -->
        <div class="p50 pull-right">
            <ul style="margin-left:10px;">

                <li><input type="hidden" value="85737" name="DisAdvantages[0].Advantage.Id">
                    <label for="DisAdvantages[0].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[0].IsChecked" id="DisAdvantages[0].IsChecked">
                        Đường, hẻm đâm thẳng vào nhà (-20%)
                    </label>

                </li>
                <li><input type="hidden" value="85738" name="DisAdvantages[1].Advantage.Id">
                    <label for="DisAdvantages[1].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[1].IsChecked" id="DisAdvantages[1].IsChecked">
                        Đối diện hoặc gần sát chùa, nhà thờ (-15%)
                    </label>

                </li>
                <li><input type="hidden" value="85739" name="DisAdvantages[2].Advantage.Id">
                    <label for="DisAdvantages[2].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[2].IsChecked" id="DisAdvantages[2].IsChecked">
                        Đối diện hoặc gần sát nhà tang lễ, nhà xác (-20%)
                    </label>

                </li>
                <li><input type="hidden" value="85740" name="DisAdvantages[3].Advantage.Id">
                    <label for="DisAdvantages[3].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[3].IsChecked" id="DisAdvantages[3].IsChecked">
                        Dưới chân cầu hoặc dưới đường dây điện cao thế (-30%)
                    </label>

                </li>
                <li><input type="hidden" value="85741" name="DisAdvantages[4].Advantage.Id">
                    <label for="DisAdvantages[4].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[4].IsChecked" id="DisAdvantages[4].IsChecked">
                        Có cống trước nhà (-5%)
                    </label>

                </li>
                <li><input type="hidden" value="85742" name="DisAdvantages[5].Advantage.Id">
                    <label for="DisAdvantages[5].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[5].IsChecked" id="DisAdvantages[5].IsChecked">
                        Có trụ điện trước nhà (-5%)
                    </label>

                </li>
                <li><input type="hidden" value="85743" name="DisAdvantages[6].Advantage.Id">
                    <label for="DisAdvantages[6].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[6].IsChecked" id="DisAdvantages[6].IsChecked">
                        Có cây lớn trước nhà (-5%)
                    </label>

                </li>
                <li><input type="hidden" value="85744" name="DisAdvantages[7].Advantage.Id">
                    <label for="DisAdvantages[7].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[7].IsChecked" id="DisAdvantages[7].IsChecked">
                        Không cho xây hoặc không thể xây mới (-10%)
                    </label>

                </li>
                <li><input type="hidden" value="85745" name="DisAdvantages[8].Advantage.Id">
                    <label for="DisAdvantages[8].IsChecked">
                        <input type="checkbox" value="true" name="DisAdvantages[8].IsChecked" id="DisAdvantages[8].IsChecked">
                        Bị quy hoạch treo (-30%)
                    </label>

                </li>
            </ul>
            <br>
            <div class="form-inline" style="margin-left:10px;">
                <!-- OtherDisAdvantagesDesc -->
                <div class="control-group">
                    <label class="control-label">Đặc điểm xấu khác làm giảm giá trị BĐS:</label>
                    <div class="controls">
                        <input class="text text-box-medium" id="OtherDisAdvantagesDesc" maxlength="250" name="OtherDisAdvantagesDesc" placeholder="Nêu đặc điểm xấu khác làm giảm đi giá trị của BĐS" type="text" value="">
                    </div>
                </div>
                <!-- OtherDisAdvantages -->
                <div class="control-group">
                    <label class="control-label">Nhập số phần trăm giảm đi:</label>
                    <div class="controls">
                        <input class="text number-box" id="OtherDisAdvantages" name="OtherDisAdvantages" type="text" value=""> %
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="vr"></div>
    </article>
    <footer></footer>
</article>
            <!-- ContactInfo -->
            <!-- Thông tin liên hệ -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Thông tin liên hệ</h1>
                <div class="header-right"></div>
            </div>
            <div class="header-msg">
                <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">
            <!-- ContactPhone -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Nhập tên + điện thoại:</label>
                <div class="controls">
<input class="text text-box-medium" id="ContactPhone" maxlength="250" name="ContactPhone" type="text" value="0903829667">                        <label><input id="PublishContact" name="PublishContact" type="checkbox" value="true"><input name="PublishContact" type="hidden" value="false">Cho phép hiện Liên hệ</label>
                </div>
            </div>
            <!-- ContactName -->
            <div class="control-group">
                <label class="control-label">Nhập Tên liên hệ:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="ContactName" maxlength="250" name="ContactName" type="text" value="">
                </div>
            </div>
            <!-- ContactAddress -->
            <div class="control-group">
                <label class="control-label">Nhập Địa chỉ liên hệ:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="ContactAddress" maxlength="250" name="ContactAddress" type="text" value="">
                </div>
            </div>
            <!-- ContactEmail -->
            <div class="control-group">
                <label class="control-label">Nhập Email liên hệ:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="ContactEmail" maxlength="250" name="ContactEmail" type="text" value="">
                </div>
            </div>
            <!--  -->
            <div class="control-group">
                <div class="controls">
                    <label><input id="IsOwner" name="IsOwner" type="checkbox" value="true"><input name="IsOwner" type="hidden" value="false">Tin chính chủ</label>
                    <label><input id="NoBroker" name="NoBroker" type="checkbox" value="true"><input name="NoBroker" type="hidden" value="false">Miễn trung gian</label>
                    <label><input id="IsAuction" name="IsAuction" type="checkbox" value="true"><input name="IsAuction" type="hidden" value="false">BĐS phát mãi</label>
                    
                </div>
            </div>
            <!-- IsAuctionContact -->
                <div class="control-group">
                    <label class="control-label">Liên hệ độc quyền:</label>
                    <div class="controls">
                        <input class="text text-box-medium" id="IsAuctionContact" maxlength="250" name="IsAuctionContact" type="text" value="">
                        
                    </div>
                </div>
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>

            <!-- PriceProposed -->
            
<!-- Giá rao -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Giá rao</h1>
                <div class="header-right"></div>
            </div>
            <div class="header-msg">
                <p class="text-success">Các mục có dấu (<span class="text-error">*</span>) là bắt buộc nhập</p>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">

            <!-- PriceEstimatedByStaff -->
            <div class="control-group" style="display:none;">
                <label class="control-label"><span class="text-error">*</span> Định giá bởi nhân viên:</label>
                <div class="controls">
                    <input class="text number-box" id="PriceEstimatedByStaff" name="PriceEstimatedByStaff" type="text" value="">
                    
                    Quảng cáo BĐS giá rẻ cho những BĐS chưa định giá được
                </div>
            </div>
            <!-- PriceNegotiable -->
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <label><input id="PriceNegotiable" name="PriceNegotiable" type="checkbox" value="true"><input name="PriceNegotiable" type="hidden" value="false">Giá thương lượng</label>
                </div>
            </div>
            <!-- PriceProposed -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Giá rao:</label>
                <div class="controls">
                    <input class="text number-box" id="PriceProposed" name="PriceProposed" type="text" value="2.6">
                    <select class="" id="PaymentMethodCssClass" name="PaymentMethodCssClass"><option selected="selected" value="pm-vnd-b">Tỷ đồng</option>
<option value="pm-vnd-m">Triệu đồng</option>
<option value="pm-vnd-k">Nghìn đồng</option>
<option value="pm-vnd-d">Đồng</option>
<option value="pm-usd">USD</option>
<option value="pm-usd-k">Nghìn USD</option>
<option value="pm-usd-m">Triệu USD</option>
<option value="pm-sjc">Lượng vàng</option>
</select>
                    <select class="" id="PaymentUnitCssClass" name="PaymentUnitCssClass"><option selected="selected" value="unit-total">Tổng diện tích</option>
<option value="unit-m2">m2</option>
</select>
                    

                    <button value="submit.Estimate" name="submit.Estimate" type="submit" class="primaryAction">Định giá</button>

                    <div>
                        Giá rao bằng chữ:
                        <span id="PriceProposedInWords" style="font-weight:bold;color:#3F48D5;">Hai  tỷ, sáu  trăm  triệu đồng / Tổng diện tích</span>
                    </div>

                    <!-- ESTIMATION -->
                    <div>
                        <!-- Định giá OK -->
                        <div id="EstimateOK" style="">
                            <div id="FlagCssClass" class="deal-good">
                                Định giá BĐS:
                                <strong id="PriceEstimatedStr">3.285 Tỷ</strong>
                                <span id="PriceChangedInPercent">(+26.34%)</span>
                            </div>
                            <div>
                                Định giá theo BGĐ:
                                <strong id="PriceEstimatedMarketStr">1.531 Tỷ</strong>
                                <span id="PriceEstimatedMarketChangedInPercent">(-41.13%)</span>
                            </div>
                            <div class="control-group" id="PriceEstimationMsg">T1 - Định giá từ 11 căn Hẻm nằm trên các đường có giá trị tương đương.</div>
                                <div class="control-group">
                                    <a class="button" href="https://dulieunhadat.vn/RealEstate.Admin/PropertyAdmin/ViewEvaluationReport/2166882?viewTemplate=Evaluation.Staff.Report" style="width:150px;text-align:left;" target="_blank">Báo cáo Thẩm định giá</a>
                                    <a class="button" href="https://dulieunhadat.vn/RealEstate.Admin/PropertyAdmin/ViewEvaluationReport/2166882?viewTemplate=Evaluation.Staff.Certificate" style="width:160px;text-align:left;" target="_blank">Chứng thư Thẩm định giá</a>
                                </div>
                                <div class="control-group">
                                    <a class="button" href="https://dulieunhadat.vn/RealEstate.Admin/PropertyAdmin/ViewEvaluationReport/2166882?viewTemplate=Evaluation.REV.Report" style="width:150px;text-align:left;" target="_blank">Báo cáo Định giá Tự động</a>
                                    <a class="button" href="https://dulieunhadat.vn/RealEstate.Admin/PropertyAdmin/ViewEvaluationReport/2166882?viewTemplate=Evaluation.REV.Certificate" style="width:160px;text-align:left;" target="_blank">Chứng thư Định giá Tự động</a>
                                </div>
                                <div class="control-group">
                                    <a class="button" href="https://dulieunhadat.vn/RealEstate.Admin/PropertyAdmin/ViewEvaluationReport/2166882?viewTemplate=Evaluation.PL.Report" style="width:150px;text-align:left;" target="_blank">Báo cáo theo Bảng giá đất</a>
                                    <a class="button" href="https://dulieunhadat.vn/RealEstate.Admin/PropertyAdmin/ViewEvaluationReport/2166882?viewTemplate=Evaluation.PL.Certificate" style="width:160px;text-align:left;" target="_blank">Chứng thư theo Bảng giá đất</a>
                                </div>
                                <!--
                                <div class="control-group">
                                    <a class="button" href="http://seabank.dulieunhadat.vn" target="_blank">SeABank Dashboard</a>
                                    <a class="button" href="http://www.newai.vn/vi/giai-phap/nhan-dang-chu-in/" target="_blank">Nhận Dạng Chữ In</a>
                                    <a class="button" href="http://www.newai.vn/vi/giai-phap/bat-dong-san/" target="_blank">Rút Tin BĐS Tự Động</a>
                                </div>
                                -->
                            <div class="debug-panel">
    <div class="ui-growl ui-widget">
        <div class="ui-growl-item-container ui-state-highlight ui-corner-all ui-shadow">
            <div class="ui-growl-item">
                <div style="display: none;" class="ui-growl-icon-close ui-icon ui-icon-closethick"></div>
                <span class="ui-growl-image ui-growl-image-info"></span>
                <div class="ui-growl-message">
                    <div class="gp-house" style="">
                        <div id="DebugAreaLegal">DT HQH: 38.5m<sup>2</sup> 3.5 x 11 Hậu 3.5</div>
                        <div id="DebugAreaStandard">DT chuẩn: 38.5m<sup>2</sup></div>
                        <div id="DebugAreaExcess">DT vượt chuẩn: N/A</div>
                        <div>--</div>
                        <div id="DebugAreaIlegalRecognized"> </div>
                        <div id="DebugAreaIlegalNotRecognized"> </div>
                        <div id="DebugAreaWidth">DT ngang: 38.5m<sup>2</sup></div>
                        <div>--</div>
                        <div id="DebugWidthCoeff">HS ngang: 1</div>
                        <div id="DebugLengthCoeff">HS dài: 0.99</div>
                        <div id="DebugAlleyCoeff">HS hẻm: 0.6</div>
                        <div id="DebugAlleyUnitPrice">ĐG các cấp hẻm: 0.68</div>
                        <div>--</div>
                        <div id="DebugUnitPrice">Đơn giá MT rao bán: N/A</div>
                        <div id="DebugPriceHouseEstimated">Giá nhà định giá: 0.101 Tỷ</div>
                        <div id="DebugPriceLandProposed">Giá đất rao bán: 2.499 Tỷ</div>
                        <div>--</div>
                        <div id="DebugPriceLandEstimated">Giá đất định giá: 3.184 Tỷ</div>
                        <div id="DebugUnitPriceEstimate">Đơn giá dùng ĐG: 0.084 Tỷ / m<sup>2</sup></div>
                    </div>
                    <div class="gp-apartment" style="display: none">
                        <div id="m2">Diện tích sử dụng: N/A</div>
                        <div id="gB">Giá rao bán: 0 Tỷ</div>
                        <div>--</div>
                        <div id="dgNt">Đơn giá xd nội thất: N/A</div>
                        <div id="gNt">Giá xd nội thất: N/A</div>
                        <div>--</div>
                        <div id="pTi">%Tiện ích cộng thêm: N/A</div>
                        <div id="gTi">Giá tiện ích: N/A</div>
                        <div>--</div>
                        <div id="dgT">Đơn giá thô: N/A</div>
                        <div id="hsT">Hệ số tầng căn hộ: N/A</div>
                        <div id="hsCc">Hệ số tòa chung cư: N/A</div>
                        <div>--</div>
                        <div id="dgTcs">Đơn giá thô cơ sở: N/A</div>
                        <div>--</div>
                        <div id="dgDG">Đơn giá dùng ĐG: N/A</div>
                        <div>--</div>
                        <div id="gCs">Giá cơ sở: N/A</div>
                        <div id="gTiCs">Giá tiện ích cơ sở: N/A</div>
                        <div>--</div>
                        <div id="gDG">Giá Định giá: N/A</div>
                    </div>
                    <div>--</div>
                    <div id="DebugFlagCssClass" class="deal-good">
                        <span id="DebugPriceEstimatedInVND">Định giá BĐS: <strong>3.285 Tỷ</strong></span>
                        <span id="DebugPriceChangedInPercent">(+26.34%)</span>
                    </div>
                    <div id="DebugPercent">Đặc điểm tốt / xấu: N/A</div>
                    <div id="DebugPercentMsg"></div>
                    <div>--</div>
                    <div id="DebugEstimationMsg">T1 - Định giá từ <strong><a target="_blank" href="https://dulieunhadat.vn/Admin/RealEstate?Options.List=2166882_list">11</a></strong> căn Hẻm nằm trên các đường có giá trị tương đương.</div>
                    <div>--</div>
                    <div id="DebugBasePriceMarket">Đơn giá MT BGĐ: 0.063 Tỷ / m<sup>2</sup></div>
                    <div id="DebugBasePriceMarketAlley">Đơn giá ĐG BGĐ: 0.038 Tỷ / m<sup>2</sup></div>
                    <div id="DebugBasePriceMarketLandEstimated">Giá đất ĐG theo BGĐ: 1.43 Tỷ</div>
                    <div id="DebugBasePriceMarketPropertyEstimated">Giá BĐS ĐG theo BGĐ: 1.531 Tỷ</div>
                    <div id="DebugBasePriceMarketPropertyEstimatedFinal">Giá ĐG cuối theo BGĐ: 1.531 Tỷ</div>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>                        </div>
                        <!-- Chưa Định giá được -->
                        <div id="EstimateFailed" style="display:none">Không đủ dữ liệu để định giá BĐS!</div>
                        <!-- Thiếu thông tin để Định giá -->
                        <div id="EstimateSkip" style="display:none">BĐS thiếu các thông tin bắt buộc để định giá!</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>

<!-- Modal -->
<div class="modal fade" id="dialogCopyPropertyToAdsType" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Copy sang Cho thuê</h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <!-- AdsType -->
                    <div class="control-group">
                        <label class="control-label"><span class="text-error">*</span> Loại giao dịch:</label>
                        <div class="controls">
                            <select class="select-box" disabled="disabled" id="AdsTypeCssClassCopy" name="AdsTypeCssClassCopy"><option value="ad-selling">Bán</option>
<option selected="selected" value="ad-leasing">Cho thuê</option>
</select>
                            

                            <!-- Published -->
                            <label class="w130"><input checked="checked" id="PublishedCopy" name="PublishedCopy" type="checkbox" value="true"><input name="PublishedCopy" type="hidden" value="false">Published</label>

                        </div>
                    </div>
                    <!-- PriceProposedCopy -->
                    <div class="control-group">
                        <label class="control-label"><span class="text-error">*</span> Giá rao:</label>
                        <div class="controls">
                            <input class="text number-box" id="PriceProposedCopy" name="PriceProposedCopy" type="text" value="">
                            <select class="" id="PaymentMethodCssClassCopy" name="PaymentMethodCssClassCopy"><option value="pm-vnd-b">Tỷ đồng</option>
<option selected="selected" value="pm-vnd-m">Triệu đồng</option>
<option value="pm-vnd-k">Nghìn đồng</option>
<option value="pm-vnd-d">Đồng</option>
<option value="pm-usd">USD</option>
<option value="pm-usd-k">Nghìn USD</option>
<option value="pm-usd-m">Triệu USD</option>
<option value="pm-sjc">Lượng vàng</option>
</select>
                            <select class="" id="PaymentUnitCssClassCopy" name="PaymentUnitCssClassCopy"><option value="unit-total">Tổng diện tích</option>
<option value="unit-m2">m2</option>
</select>
                            
                            <label class="text-error" for="PriceProposedCopy"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="primaryAction" value="submit.Save" name="submit.SaveCopyToAdsType">Copy sang Cho thuê</button>
            </div>
        </div>
    </div>
</div>


            <!-- Valuation -->
            
<!-- Thông tin thẩm định giá -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Thông tin thẩm định giá</h1>
                <div class="header-right"></div>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">

            <!-- ShapeOfProperty -->
            <div class="control-group">
                <label class="control-label">Hình dạng bất động sản:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="ShapeOfProperty" maxlength="250" name="ShapeOfProperty" placeholder="VD: Hình vuông, Hình chữ nhật, ..." type="text" value="">
                </div>
            </div>

            <!-- NumberOfFronts -->
            <div class="control-group">
                <label class="control-label">Số mặt tiếp giáp đường / ngõ:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="NumberOfFronts" name="NumberOfFronts" placeholder="VD: 2" type="number" value="">
                </div>
            </div>

            <!-- LivingEnvironment -->
            <div class="control-group">
                <label class="control-label">Môi trường sống:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="LivingEnvironment" maxlength="250" name="LivingEnvironment" placeholder="VD: Hẻm an ninh, Đối diện là khách sạn, ..." type="text" value="">
                </div>
            </div>

            <!-- TransportInfrastructure -->
            <div class="control-group">
                <label class="control-label">Hạ tầng giao thông:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="TransportInfrastructure" maxlength="250" name="TransportInfrastructure" placeholder="VD: Đường bê tông, ..." type="text" value="">
                </div>
            </div>

            <!-- UnitPriceOfLand -->
            <div class="control-group">
                <label class="control-label">Đơn giá đất / m2:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="UnitPriceOfLand" name="UnitPriceOfLand" type="text" value="">
                </div>
            </div>

            <!-- UnitPriceOfConstruction -->
            <div class="control-group">
                <label class="control-label">Đơn giá xây dựng / m2:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="UnitPriceOfConstruction" name="UnitPriceOfConstruction" type="text" value="">
                </div>
            </div>
            
            <!-- PriceExpected -->
            <div class="control-group">
                <label class="control-label"> Giá dự kiến bán:</label>
                <div class="controls">
                    <input class="text number-box" id="PriceExpected" name="PriceExpected" type="text" value="">

                    <button value="submit.Estimate" name="submit.Estimate" type="submit" class="primaryAction">Định giá</button>

                    <div id="PriceExpectedInWords" style="font-weight:bold;color:#3F48D5;"></div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>


            <!-- AdsContent -->
            
<!-- Thông tin khác -->
<article class="content-item">
    <header>
        <div class="header-wrapper">
            <div class="header-center header-bg-green">
                <div class="header-left header-bg-green">
                    <div class="header-left-triangle"></div>
                </div>
                <h1>Thông tin khác</h1>
                <div class="header-right"></div>
            </div>
        </div>
    </header>
    <article>
        <div class="form-horizontal pull-left">
            <!-- Title -->
            <div class="control-group">
                <label class="control-label">Tiêu đề tin rao:</label>
                <div class="controls">
                    <input class="text text-box-medium" id="Title" maxlength="250" name="Title" type="text" value="">
                </div>
            </div>
            <!-- Content -->
            <div class="control-group">
                <label class="control-label">Thông tin khác:</label>
                <div class="controls">
                    
<script type="text/javascript">
    var mediaPickerEnabled = false;
    var mediaLibraryEnabled = true;
    var directionality = '';
    var language = '';
    var autofocus = '';
</script>

<div id="mceu_24" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px;"><div id="mceu_24-body" class="mce-container-body mce-stack-layout"><div id="mceu_25" class="mce-container mce-menubar mce-toolbar mce-first mce-stack-layout-item" role="menubar" style="border-width: 0px 0px 1px;"><div id="mceu_25-body" class="mce-container-body mce-flow-layout"><div id="mceu_26" class="mce-widget mce-btn mce-menubtn mce-first mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_26" role="menuitem" aria-haspopup="true"><button id="mceu_26-open" role="presentation" type="button" tabindex="-1"><span>File</span> <i class="mce-caret"></i></button></div><div id="mceu_27" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_27" role="menuitem" aria-haspopup="true"><button id="mceu_27-open" role="presentation" type="button" tabindex="-1"><span>Edit</span> <i class="mce-caret"></i></button></div><div id="mceu_28" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_28" role="menuitem" aria-haspopup="true"><button id="mceu_28-open" role="presentation" type="button" tabindex="-1"><span>Insert</span> <i class="mce-caret"></i></button></div><div id="mceu_29" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_29" role="menuitem" aria-haspopup="true"><button id="mceu_29-open" role="presentation" type="button" tabindex="-1"><span>View</span> <i class="mce-caret"></i></button></div><div id="mceu_30" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_30" role="menuitem" aria-haspopup="true"><button id="mceu_30-open" role="presentation" type="button" tabindex="-1"><span>Format</span> <i class="mce-caret"></i></button></div><div id="mceu_31" class="mce-widget mce-btn mce-menubtn mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_31" role="menuitem" aria-haspopup="true"><button id="mceu_31-open" role="presentation" type="button" tabindex="-1"><span>Table</span> <i class="mce-caret"></i></button></div><div id="mceu_32" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" aria-labelledby="mceu_32" role="menuitem" aria-haspopup="true"><button id="mceu_32-open" role="presentation" type="button" tabindex="-1"><span>Tools</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_33" class="mce-toolbar-grp mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group"><div id="mceu_33-body" class="mce-container-body mce-stack-layout"><div id="mceu_34" class="mce-container mce-toolbar mce-first mce-last mce-stack-layout-item" role="toolbar"><div id="mceu_34-body" class="mce-container-body mce-flow-layout"><div id="mceu_35" class="mce-container mce-first mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_35-body"><div id="mceu_0" class="mce-widget mce-btn mce-first mce-disabled" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-label="Undo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div><div id="mceu_1" class="mce-widget mce-btn mce-disabled" tabindex="-1" aria-labelledby="mceu_1" role="button" aria-label="Redo" aria-disabled="true"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div><div id="mceu_2" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_2" role="button" aria-label="Cut"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-cut"></i></button></div><div id="mceu_3" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_3" role="button" aria-label="Copy"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-copy"></i></button></div><div id="mceu_4" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_4" role="button" aria-label="Paste"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-paste"></i></button></div></div></div><div id="mceu_36" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_36-body"><div id="mceu_5" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_5" role="button" aria-label="Bold"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_6" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_6" role="button" aria-label="Italic"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div><div id="mceu_37" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_37-body"><div id="mceu_7" class="mce-widget mce-btn mce-splitbtn mce-menubtn mce-first" role="button" tabindex="-1" aria-label="Bullet list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_8" class="mce-widget mce-btn mce-splitbtn mce-menubtn" role="button" tabindex="-1" aria-label="Numbered list" aria-haspopup="true"><button type="button" hidefocus="1" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div><div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_9" role="button" aria-label="Decrease indent"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div><div id="mceu_10" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_10" role="button" aria-label="Increase indent" aria-disabled="false"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div><div id="mceu_11" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-last" tabindex="-1" aria-labelledby="mceu_11" role="button" aria-haspopup="true"><button id="mceu_11-open" role="presentation" type="button" tabindex="-1"><span>Paragraph</span> <i class="mce-caret"></i></button></div></div></div><div id="mceu_38" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_38-body"><div id="mceu_12" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_12" role="button" aria-label="Align left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div><div id="mceu_13" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_13" role="button" aria-label="Align center"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div><div id="mceu_14" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_14" role="button" aria-label="Align right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div><div id="mceu_15" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_15" role="button" aria-label="Justify"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignjustify"></i></button></div><div id="mceu_16" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_16" role="button" aria-label="Left to right"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-ltr"></i></button></div><div id="mceu_17" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_17" role="button" aria-label="Right to left"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-rtl"></i></button></div></div></div><div id="mceu_39" class="mce-container mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_39-body"><div id="mceu_18" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_18" role="button" aria-label="Insert media"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-image"></i></button></div><div id="mceu_19" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_19" role="button" aria-label="Insert/edit link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div><div id="mceu_20" class="mce-widget mce-btn" tabindex="-1" aria-labelledby="mceu_20" role="button" aria-label="Remove link"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-unlink"></i></button></div><div id="mceu_21" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_21" role="button" aria-label="Special character"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-charmap"></i></button></div></div></div><div id="mceu_40" class="mce-container mce-last mce-flow-layout-item mce-btn-group" role="group"><div id="mceu_40-body"><div id="mceu_22" class="mce-widget mce-btn mce-first" tabindex="-1" aria-labelledby="mceu_22" role="button" aria-label="Source code"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-code"></i></button></div><div id="mceu_23" class="mce-widget mce-btn mce-last" tabindex="-1" aria-labelledby="mceu_23" role="button" aria-label="Fullscreen"><button role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-fullscreen"></i></button></div></div></div></div></div></div></div><div id="mceu_41" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="Content_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" src='javascript:""' style="width: 100%; height: 151px; display: block;"></iframe></div><div id="mceu_42" class="mce-statusbar mce-container mce-panel mce-last mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><div id="mceu_42-body" class="mce-container-body mce-flow-layout"><div id="mceu_43" class="mce-path mce-flow-layout-item mce-first"><div role="button" class="mce-path-item mce-last" data-index="0" tabindex="-1" id="mceu_43-0" aria-level="0">p</div></div><label id="mceu_45" class="mce-wordcount mce-widget mce-label mce-flow-layout-item">Words: 0</label><div id="mceu_44" class="mce-flow-layout-item mce-resizehandle mce-last"><i class="mce-ico mce-i-resize"></i></div></div></div></div></div><textarea class="html tinymce" cols="80" data-mediapicker-title="Insert/Update Media" id="Content" name="Content" rows="5" style="width: 100%; display: none; visibility: hidden;" aria-hidden="true"></textarea>


                </div>
            </div>
            <!-- UpdateMeta -->
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <label><input checked="checked" id="UpdateMeta" name="UpdateMeta" type="checkbox" value="true"><input name="UpdateMeta" type="hidden" value="false">Cập nhật meta Keywords và Description</label>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">&nbsp;</label>
                <div class="controls">
                    <label for="AcceptPostToFacebok"><input id="AcceptPostToFacebok" name="AcceptPostToFacebok" type="checkbox" value="true"><input name="AcceptPostToFacebok" type="hidden" value="false">Chia sẻ lên facebook(Nếu có đăng nhập bằng facebook)</label>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>


            <input id="IsPropertyExchange" name="IsPropertyExchange" type="hidden" value="False">
        <article class="content-item content-item-map">
        <!-- Ban Do -->
        <div class="row">
            <div class="col-xs-12 col-map">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="tabMaps">
                    <li role="presentation" class="active"><a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#mapPlanning" aria-controls="mapPlanning" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-map"></i> Quy hoạch</a></li>
                    <li role="presentation"><a href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin#mapGoogle" aria-controls="mapGoogle" role="tab" data-toggle="tab"><i class="fa fa-globe"></i> Google Map</a></li>
                    <li role="presentation" class="disabled"><a class="nav-text" role="tab" id="mapAddress">3/1/18, Đội Cung, Phường 11, Quận 11, Tp. Hồ Chí Minh</a></li>
                    <input id="MapPart_DisplayForAddress" name="MapPart.DisplayForAddress" type="hidden" value="">
                    <li style="float:right;"><a href="javascript:void(0)" onclick="getAndSetPosition()" class="btn" style="margin: 5px;color:#fff;">Vị trí của bạn</a></li>
                </ul>
            </div>
        </div>
        
    </article></div>

    <?php echo $this->Form->end()?>