<div id="content" class="group">
                <div class="zone zone-content">


<style>
    #main {
        min-width: 976px;
    }
</style>

<script>

    // auto reload a page if there is no activity for 5 minutes on the page

    var time = new Date().getTime();

    $(document.body).bind("mousemove keypress", function (e) {
        time = new Date().getTime();
    });

    function refresh() {
        if (new Date().getTime() - time >= 300000)
            window.location.reload(true);
        else
            setTimeout(refresh, 10000);
    }

    setTimeout(refresh, 10000);

    function getDistrictByProvinceId(){
        alert('34563563535635');
    }

</script>




<form action="https://dulieunhadat.vn/Admin" method="get">
    <input id="IsPropertiesWatchList" name="IsPropertiesWatchList" type="hidden" value="False">
    <input id="IsPropertiesExchange" name="IsPropertiesExchange" type="hidden" value="False">
        <div id="tabsAdsType">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="https://dulieunhadat.vn/Admin#" ads="ad-selling" typegroup="gp-house" class="ad-selling-gp-house">
                        Nhà đất
                        Bán
                        <span class="count"></span>
                    </a>
                </li>
                <li class="">
                    <a href="https://dulieunhadat.vn/Admin#" ads="ad-leasing" typegroup="gp-house" class="ad-leasing-gp-house">
                        Nhà đất
                        Cho thuê
                        <span class="count"></span>
                    </a>
                </li>
                <li class="">
                    <a href="https://dulieunhadat.vn/Admin#" ads="ad-selling" typegroup="gp-apartment" class="ad-selling-gp-apartment">
                        Căn hộ
                        Bán
                        <span class="count"></span>
                    </a>
                </li>
                <li class="">
                    <a href="https://dulieunhadat.vn/Admin#" ads="ad-leasing" typegroup="gp-apartment" class="ad-leasing-gp-apartment">
                        Căn hộ
                        Cho thuê
                        <span class="count"></span>
                    </a>
                </li>
            </ul>
        </div>
    <fieldset>
        <table class="filter-table">
            <tbody>
                <tr>
                    <td class="filter-label">Loại tin</td>
                    <td class="filter-label">Nhóm BĐS</td>
                    <td class="filter-label">Loại BĐS</td>
                    <td class="filter-label">Trạng thái</td>
                    <td class="filter-label">Đánh dấu</td>
                </tr>
                <tr>
                    <td>
                        <select class="select-box" id="AdsTypeCssClass" name="AdsTypeCssClass">                            
                            <?php
                                foreach ($loaiTinlist as $loaiTin){
                            ?>
                            <option value="<?php echo $loaiTin['LoaiTin']['TYPE_NEWS_CODE'] ?>"><?php echo $loaiTin['LoaiTin']['TYPE_NEWS_NAME'] ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="select-box" id="TypeGroupCssClasses" name="TypeGroupCssClasses" placeholder="-- Tất cả nhóm BĐS --">
                            <option value="">-- Tất cả nhóm BĐS --</option>
                            <?php
                                foreach ($nhomBdsList as $nhomBds){
                            ?>
                            <option 
                                <?php 
                                    if(isset($dbsNews['BdsNews']['GROUP_CODE'])){
                                        if($dbsNews['BdsNews']['GROUP_CODE'] == $nhomBds['NhomBds']['GROUP_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $nhomBds['NhomBds']['GROUP_CODE'] ?>"><?php echo $nhomBds['NhomBds']['GROUP_NAME'] ?></option>                           
                            <?php
                                }
                            ?>
                        </select>                        
                    </td>
                    <td>
                        <select class="select-box" id="TypeCssClasses" name="TypeCssClasses" placeholder="-- Tất cả loại BĐS --">
                            <option value="">-- Tất cả loại BĐS --</option>
                            <?php
                                foreach ($loaiBdsList as $loaiBds){
                            ?>
                            <option 
                                <?php 
                                    if(isset($dbsNews['BdsNews']['LOAI_BDS_CODE'])){
                                        if($dbsNews['BdsNews']['LOAI_BDS_CODE'] == $loaiBds['LoaiBds']['LOAI_BDS_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $loaiBds['LoaiBds']['LOAI_BDS_CODE'] ?>"><?php echo $loaiBds['LoaiBds']['LOAI_BDS_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>                        
                    </td>
                    <td>
                        <select class="select-box" id="StatusCssClass" name="StatusCssClass">                            
                            <?php
                                foreach ($tinhTranglist as $tinhTrang){
                            ?>
                            <option 
                                <?php 
                                    if(isset($dbsNews['BdsNews']['TINH_TRANG_CODE'])){
                                        if($dbsNews['BdsNews']['TINH_TRANG_CODE'] == $tinhTrang['TinhTrang']['TINH_TRANG_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $tinhTrang['TinhTrang']['TINH_TRANG_CODE'] ?>"><?php echo $tinhTrang['TinhTrang']['TINH_TRANG_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="select-box" id="FlagCssClasses" name="FlagCssClasses" placeholder="-- Vui lòng chọn --" >
                            <?php
                                foreach ($danhDaulist as $danhDau){
                            ?>
                            <option 
                                <?php 
                                    if(isset($dbsNews['BdsNews']['DANH_DAU_CODE'])){
                                        if($dbsNews['BdsNews']['DANH_DAU_CODE'] == $danhDau['DanhDau']['DANH_DAU_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $danhDau['DanhDau']['DANH_DAU_CODE'] ?>"><?php echo $danhDau['DanhDau']['DANH_DAU_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>

                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Tìm kiếm cơ bản -->
        <table class="filter-table margin-top-5">
            <tbody>                
                <tr>
                    <td>
                        <select class="select-box combobox" id="ProvinceId" placeholder="-- Tất cả Tỉnh/TP --" onChange="getDistrictByProvinceId()">
                            <option value="">-- Tất cả Tỉnh/TP --</option>
                            <?php
                                foreach ($provinceList as $province){
                            ?>
                            <option value="<?php echo $province['Provinces']['PROVINCE_ID'] ?>"><?php echo $province['Provinces']['PROVINCE_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="select-box" id="DistrictIds" name="DistrictIds" placeholder="Tất cả Quận / Huyện" onchange="getDistrictByProvinceId()">
                            <option value="">-- Tất cả Quận / Huyện --</option>
                            <?php
                                foreach ($districtList as $district){
                            ?>
                            <option value="<?php echo $district['Districts']['DISTRICT_ID'] ?>"><?php echo $district['Districts']['DISTRICT_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="select-box" id="WardIds" name="WardIds" placeholder="-- Tất cả Phường / Xã --">
                            <option value="">-- Tất cả Phường / Xã --</option>
                        </select>
                    </td>
                    <td>
                         <select class="select-box" id="StreetIds" name="StreetIds" placeholder="-- Tất cả đường --">
                            <option value="">-- Tất cả đường --</option>
                        </select>
                    </td>
                    <td>
                        <input class="text text-box" id="AddressNumber" name="AddressNumber" placeholder="Số nhà" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="text number-box" id="MinPriceProposed" name="MinPriceProposed" placeholder="Giá từ" type="text" value="">
                        <input class="text number-box" id="MaxPriceProposed" name="MaxPriceProposed" placeholder="đến" type="text" value="">
                        <select class="" id="PaymentMethodCssClass" name="PaymentMethodCssClass" style="width:70px">
                            <option selected="selected" value="pm-vnd-b">Tỷ đồng</option>
                            <option value="pm-vnd-m">Triệu đồng</option>
                            <option value="pm-vnd-k">Nghìn đồng</option>
                            <option value="pm-vnd-d">Đồng</option>
                            <option value="pm-usd">USD</option>
                            <option value="pm-usd-k">Nghìn USD</option>
                            <option value="pm-usd-m">Triệu USD</option>
                            <option value="pm-sjc">Lượng vàng</option>
                        </select>

                        <select class="" id="PaymentUnitCssClass" name="PaymentUnitCssClass" style="width:112px; display: none">
                            <option selected="selected" value="unit-total">Tổng diện tích</option>
                            <option value="unit-m2">m2</option>
                        </select>
                    </td>

                    <!-- gp-apartment -->
                        <td></td>
                        <td></td>
                    <td>
                        <input class="text text-box" id="AddressCorner" name="AddressCorner" placeholder="Ngõ / Ngách" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="https://dulieunhadat.vn/Admin#" class="advance-search-trigger"><span class="ui-icon icon-expand"></span> Tìm kiếm nâng cao</a>
                    </td>
                    <td class="filter-label">
                        <select class="select-box" id="LocationCssClass" name="LocationCssClass">
                            <option value="">-- Nhà MT / Hẻm --</option>
                            <option value="h-front">Mặt tiền</option>
                            <option value="h-alley">Trong hẻm</option>
                        </select>
                    </td>
                    <td>
                        <div class="ui-dropdown-checkbox-wrapper">
                            <div class="ui-dropdown-checkbox">
                                <label style="text-align: center;">Chi tiết tin rao</label>
                                <table class="noborder-table">
                                    <tbody><tr>
                                        <td>
                                            
                                            <label><input id="AdsNormal" name="AdsNormal" type="checkbox" value="true"><input name="AdsNormal" type="hidden" value="false">Tin thường</label>
                                            <label><input id="AdsGoodDeal" name="AdsGoodDeal" type="checkbox" value="true"><input name="AdsGoodDeal" type="hidden" value="false"><span title="BĐS giá rẻ" class="icon-ads-hot"></span> BĐS giá rẻ</label>
                                            
                                            <label><input id="AdsVIP1" name="AdsVIP1" type="checkbox" value="true"><input name="AdsVIP1" type="hidden" value="false"><span title="BĐS VIP 1" class="icon-ads-vip-3"></span> BĐS VIP 1</label>
                                            <label><input id="AdsVIP2" name="AdsVIP2" type="checkbox" value="true"><input name="AdsVIP2" type="hidden" value="false"><span title="BĐS VIP 2" class="icon-ads-vip-2"></span> BĐS VIP 2</label>
                                            <label><input id="AdsVIP3" name="AdsVIP3" type="checkbox" value="true"><input name="AdsVIP3" type="hidden" value="false"><span title="BĐS VIP 3" class="icon-ads-vip-1"></span> BĐS VIP 3</label>
                                            <label class="hidden"><input id="AdsHighlightRequest" name="AdsHighlightRequest" type="checkbox" value="true"><input name="AdsHighlightRequest" type="hidden" value="false"><span title="BĐS nổi bật" class="icon-ads-vip"></span> BĐS nổi bật</label>
                                            <label class="hidden"><input id="AdsGoodDealRequest" name="AdsGoodDealRequest" type="checkbox" value="true"><input name="AdsGoodDealRequest" type="hidden" value="false"><span title="BĐS giá rẻ" class="icon-ads-hot"></span> BĐS giá rẻ</label>
                                            <label class="hidden"><input id="AdsVIPRequest" name="AdsVIPRequest" type="checkbox" value="true"><input name="AdsVIPRequest" type="hidden" value="false"><span title="BĐS giao dịch gấp" class="icon-ads-vip"></span> BĐS giao dịch gấp</label>
                                            <label class="hidden"><input id="AdsRequest" name="AdsRequest" type="checkbox" value="true"><input name="AdsRequest" type="hidden" value="false"><span title="BĐS đăng quảng cáo" class="icon-ads-vip"></span> BĐS đăng quảng cáo</label>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <label><input id="IsAuthenticatedInfo" name="IsAuthenticatedInfo" type="checkbox" value="true"><input name="IsAuthenticatedInfo" type="hidden" value="false"><span class="ui-icon icon-check"></span> BĐS đã xác thực</label>
                                            <label><input id="AdsExpired" name="AdsExpired" type="checkbox" value="true"><input name="AdsExpired" type="hidden" value="false"><span title="BĐS hết hạn trên trang chủ" class="ui-icon icon-label-red" style="margin-bottom:-3px;"></span> Hết hạn đăng tin</label>
                                            <label><input id="AdsNotExpired" name="AdsNotExpired" type="checkbox" value="true"><input name="AdsNotExpired" type="hidden" value="false"><span title="BĐS đang hiện trên trang chủ" class="ui-icon icon-label-green" style="margin-bottom:-3px;"></span> Đang hiển thị</label>
                                            <label><input id="PublishAddress" name="PublishAddress" type="checkbox" value="true"><input name="PublishAddress" type="hidden" value="false">Hiện địa chỉ</label>
                                            <label><input id="PublishContact" name="PublishContact" type="checkbox" value="true"><input name="PublishContact" type="hidden" value="false">Hiện liên hệ</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><hr></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label></label>
                                            <label><input id="NoBroker" name="NoBroker" type="checkbox" value="true"><input name="NoBroker" type="hidden" value="false">Miễn trung gian</label>
                                            <label><input id="IsAuction" name="IsAuction" type="checkbox" value="true"><input name="IsAuction" type="hidden" value="false">BĐS phát mãi</label>
                                            
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <label><input id="ShowNeedUpdate" name="ShowNeedUpdate" type="checkbox" value="true"><input name="ShowNeedUpdate" type="hidden" value="false">BĐS cần cập nhật</label>
                                            <label><input id="ShowExcludedInEstimation" name="ShowExcludedInEstimation" type="checkbox" value="true"><input name="ShowExcludedInEstimation" type="hidden" value="false">BĐS loại khỏi định giá</label>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><hr></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                            <label><input id="IsSoldByGroup" name="IsSoldByGroup" type="checkbox" value="true"><input name="IsSoldByGroup" type="hidden" value="false">Được bán bởi Group</label>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <label><input id="UseAccurateSearch" name="UseAccurateSearch" type="checkbox" value="true"><input name="UseAccurateSearch" type="hidden" value="false">Tìm kiếm chính xác</label>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </td>
                    <td><input class="text text-box" id="ContactPhone" name="ContactPhone" placeholder="Liên hệ" type="text" value=""></td>
                    <td><input class="text text-box" id="IdStr" name="IdStr" placeholder="ID Mã tin" type="text" value=""></td>
                </tr>
            </tbody>
        </table>

        <div class="property-form-group-search">
            <div class="advance-search-right">
                <table class="filter-table">
                    <tbody>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>
        </div>



        <!-- Tìm kiếm nâng cao -->
        <table id="tblAdvanceSearch" class="filter-table" style="display: none;">
            <tbody>
                <!-- gp-house -->
                    <tr>
                        <td class="filter-label">Chiều ngang</td>
                        <td><input class="text number-box" id="MinAreaTotalWidth" name="MinAreaTotalWidth" type="text" value=""> đến <input class="text number-box" id="MaxAreaTotalWidth" name="MaxAreaTotalWidth" type="text" value=""> m</td>
                        <td class="filter-label">Chiều sâu</td>
                        <td><input class="text number-box" id="MinAreaTotalLength" name="MinAreaTotalLength" type="text" value=""> đến <input class="text number-box" id="MaxAreaTotalLength" name="MaxAreaTotalLength" type="text" value=""> m</td>
                        <td class="filter-label">Số lầu</td>
                        <td>
                            <input class="text number-box" id="MinFloors" name="MinFloors" type="text" value=""> đến <input class="text number-box" id="MaxFloors" name="MaxFloors" type="text" value="">

                        </td>
                    </tr>
                    <tr>
                        <td class="filter-label">DTKV từ &nbsp;</td>
                        <td>
                            <input class="text number-box" id="MinAreaTotal" name="MinAreaTotal" type="text" value=""> đến <input class="text number-box" id="MaxAreaTotal" name="MaxAreaTotal" type="text" value=""> m<sup>2</sup>
                        </td>
                        <td class="filter-label">Hẻm rộng</td>
                        <td><input class="text number-box" id="MinAlleyWidth" name="MinAlleyWidth" type="text" value=""> đến <input class="text number-box" id="MaxAlleyWidth" name="MaxAlleyWidth" type="text" value=""> m</td>
                        <td class="filter-label">Số lần rẽ</td>
                        <td><input class="text number-box" id="MinAlleyTurns" name="MinAlleyTurns" type="text" value=""> đến <input class="text number-box" id="MaxAlleyTurns" name="MaxAlleyTurns" type="text" value=""></td>
                        <td class="filter-label">KcMT</td>
                        <td><input class="text number-box" id="MinDistanceToStreet" name="MinDistanceToStreet" type="text" value=""> đến <input class="text number-box" id="MaxDistanceToStreet" name="MaxDistanceToStreet" type="text" value=""> m</td>
                    </tr>
                <!-- gp-apartment -->
                <tr>
                    <td class="filter-label">Hướng</td>
                    <td>
                        <select class="select-box multiselect" id="DirectionCssClasses" multiple="multiple" name="DirectionCssClasses" placeholder="-- Hướng --" style="display: none;">
                            <option value="d-east">Ðông</option>
                            <option value="d-west">Tây</option>
                            <option value="d-south">Nam</option>
                            <option value="d-north">Bắc</option>
                            <option value="d-northeast">Đông Bắc</option>
                            <option value="d-southeast">Đông Nam</option>
                            <option value="d-northwest">Tây Bắc</option>
                            <option value="d-southwest">Tây Nam</option>
                        </select>                    
                    </td>
                    <td class="filter-label">Pháp lý</td>
                    <td>
                        <select class="select-box" id="LegalStatusId" name="LegalStatusId">
                            <option value="">-- Tất cả --</option>
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
                    </td>
                    <td class="filter-label">Số PN</td>
                    <td><input class="text number-box" id="MinBedrooms" name="MinBedrooms" type="text" value=""> đến <input class="text number-box" id="MaxBedrooms" name="MaxBedrooms" type="text" value=""></td>
                    <td class="filter-label">Số WC</td>
                    <td><input class="text number-box" id="MinBathrooms" name="MinBathrooms" type="text" value=""> đến <input class="text number-box" id="MaxBathrooms" name="MaxBathrooms" type="text" value=""></td>
                </tr>
                <tr>
                    <td class="filter-label">Đặc điểm tốt</td>
                    <td>
                        <select class="select-box multiselect" id="AdvantageIds" multiple="multiple" name="AdvantageIds" placeholder="-- Vui lòng chọn --" style="display: none;">
                            <option value="85728">Có 2 mặt đường chính</option>
                            <option value="85729">Căn góc, có hẻm bên hông</option>
                            <option value="85730">Có hẻm sau nhà</option>
                            <option value="85732">Gần chợ, siêu thị (&lt;500m)</option>
                            <option value="85733">Gần công viên, trung tâm giải trí (&lt;500m)</option>
                            <option value="85734">Khu dân cư cao cấp có cổng bảo vệ</option>
                            <option value="85735">Vị trí đẹp nhất trong đoạn đường</option>
                            <option value="85736">Tiện làm quán cafe, nhà hàng, khách sạn</option>
                            <option value="85794">Hẻm thông ra đường khác đẹp hơn.</option>
                        </select>
                    </td>
                    <td class="filter-label">Ngày tạo</td>
                    <td colspan="3">
                        <input class="text date-box hasDatepicker" id="CreatedFrom" name="CreatedFrom" type="text" value=""> đến <input class="text date-box hasDatepicker" id="CreatedTo" name="CreatedTo" type="text" value="">
                        <div class="select2-container text text-box" id="s2id_CreatedUserId"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">-- Tạo bởi --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><div class="select2-container text text-box" id="s2id_CreatedUserId" title="" style="display: none;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">-- Tạo bởi --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1" tabindex="-1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><input class="text text-box select2-user select2-group-user" group="1580848" id="CreatedUserId" name="CreatedUserId" placeholder="-- Tạo bởi --" type="text" value="" tabindex="-1" title="" style="display: none;">
                    </td>
                    <td class="filter-label">Nguồn</td>
                    <td><div class="select2-container text text-box" id="s2id_FirstInfoFromUserId"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">-- Nguồn --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><div class="select2-container text text-box" id="s2id_FirstInfoFromUserId" title="" style="display: none;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">-- Nguồn --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2" tabindex="-1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><input class="text text-box select2-user select2-group-user" group="1580848" id="FirstInfoFromUserId" name="FirstInfoFromUserId" placeholder="-- Nguồn --" type="text" value="" tabindex="-1" title="" style="display: none;"></td>
                </tr>
                <tr>
                    <td class="filter-label">Đặc điểm xấu</td>
                    <td>
                        <select class="select-box multiselect" id="DisAdvantageIds" multiple="multiple" name="DisAdvantageIds" placeholder="-- Vui lòng chọn --" style="display: none;"><option value="85737">Đường, hẻm đâm thẳng vào nhà</option>
<option value="85738">Đối diện hoặc gần sát chùa, nhà thờ</option>
<option value="85739">Đối diện hoặc gần sát nhà tang lễ, nhà xác</option>
<option value="85740">Dưới chân cầu hoặc dưới đường dây điện cao thế</option>
<option value="85741">Có cống trước nhà</option>
<option value="85742">Có trụ điện trước nhà</option>
<option value="85743">Có cây lớn trước nhà</option>
<option value="85744">Không cho xây hoặc không thể xây mới</option>
<option value="85745">Bị quy hoạch treo</option>
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;">-- Vui lòng chọn -- <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85737"> Đường, hẻm đâm thẳng vào nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85738"> Đối diện hoặc gần sát chùa, nhà thờ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85739"> Đối diện hoặc gần sát nhà tang lễ, nhà xác</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85740"> Dưới chân cầu hoặc dưới đường dây điện cao thế</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85741"> Có cống trước nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85742"> Có trụ điện trước nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85743"> Có cây lớn trước nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85744"> Không cho xây hoặc không thể xây mới</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85745"> Bị quy hoạch treo</label></a></li></ul></div>
                    </td>
                    <td class="filter-label">Ngày sửa cuối</td>
                    <td colspan="3">
                        <input class="text date-box hasDatepicker" id="LastUpdatedFrom" name="LastUpdatedFrom" type="text" value=""> đến <input class="text date-box hasDatepicker" id="LastUpdatedTo" name="LastUpdatedTo" type="text" value="">
                        <div class="select2-container text text-box" id="s2id_LastUpdatedUserId"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3">-- Sửa bởi --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><div class="select2-container text text-box" id="s2id_LastUpdatedUserId" title="" style="display: none;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3">-- Sửa bởi --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3" tabindex="-1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><input class="text text-box select2-user select2-group-user" group="1580848" id="LastUpdatedUserId" name="LastUpdatedUserId" placeholder="-- Sửa bởi --" type="text" value="" tabindex="-1" title="" style="display: none;">
                    </td>
                        <td class="filter-label">Nhóm</td>
                        <td><div class="select2-container text text-box select2-allowclear" id="s2id_GroupId"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">Quan10</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><div class="select2-container text text-box" id="s2id_GroupId" title="" style="display: none;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">&nbsp;</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4" tabindex="-1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><input class="text text-box select2-group select2-group-seeder" group="1580848" id="GroupId" name="GroupId" placeholder="Nhóm" type="text" value="1580848" tabindex="-1" title="" style="display: none;"></td>
                </tr>
                <tr>
                        <td class="filter-label">Nội thất</td>
                        <td>
                            <select class="select-box" id="InteriorId" name="InteriorId"><option value="">-- Tất cả --</option>
<option value="36">Xây thô</option>
<option value="37">Xây dựng đơn giản</option>
<option value="38">Xây vừa đủ tiện nghi</option>
<option value="39">Xây sang trọng cao cấp</option>
<option value="40">Xây cực kỳ cao cấp</option>
</select>
                        </td>
                    <td class="filter-label">Ngày xuất tin</td>
                    <td colspan="3">
                        <input class="text date-box hasDatepicker" id="LastExportedFrom" name="LastExportedFrom" type="text" value=""> đến <input class="text date-box hasDatepicker" id="LastExportedTo" name="LastExportedTo" type="text" value="">
                        <div class="select2-container text text-box" id="s2id_LastExportedUserId"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-5">-- Xuất bởi --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen5_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-5">   </ul></div></div><div class="select2-container text text-box" id="s2id_LastExportedUserId" title="" style="display: none;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-5">-- Xuất bởi --</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5" tabindex="-1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen5_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-5">   </ul></div></div><input class="text text-box select2-user select2-group-user" group="1580848" id="LastExportedUserId" name="LastExportedUserId" placeholder="-- Xuất bởi --" type="text" value="" tabindex="-1" title="" style="display: none;">
                    </td>
                </tr>
            </tbody>
        </table>

    </fieldset>
    <fieldset class="bulk-actions left">
        <label for="Order">Sắp xếp theo:</label>
        <select id="Order" name="Order">
            <option selected="selected" value="LastUpdatedDate">Ngày sửa lần cuối</option>
            <option value="AddressNumber">Số nhà</option>
            <option value="PriceProposedInVND">Giá rao</option>
        </select>

        <button type="submit" name="btnSearch" onClick="searchBDS();">Tìm kiếm</button>

        Tìm được <strong>66</strong> kết quả (0.81 giây)
    </fieldset>
<input name="__RequestVerificationToken" type="hidden" value="MKoCiog9DoWIK25fHzMndEzQ6F3XS2pr9r-wgv7hGgKyXzOxjfosqg9KBvWwm-zimAKXoDi6TTRlWWN5v1UWTXXFFnyw1F_sf5XrkFZBxRI1"></form>
<script type="text/javascript">
    function getStreetByProvince() {
        var slcStreet = $("#StreetId");
        $.ajax({
            type: "get",
            dataType: "JSON",
            traditional: true,
            url: "/RealEstate.Admin/Home/GetStreetsByProvinceForJson",
            data: {
                provinceId: $("#ProvinceId").val(),
                selectedStreetId: $("#SelectedStreetId").val()
            },
            success: function (response) {
                slcStreet.empty().append("<option value=''></option>");
                $.each(response.list, function (i, item) { slcStreet.append("<option value=" + item.Value + ">" + item.Text + "</option>"); });
                slcStreet.val($("#SelectedStreetId").val());
                slcStreet.change().combobox('refresh');
            },
            error: function (request, status, error) {
                slcStreet.empty().append("<option value=''></option>").change().combobox('refresh');
            }
        });
    }
    $(function () {
        if ($("#StreetId").children().length <= 1) {
            // Get all Streets of HCM
            getStreetByProvince();
        }
    });
</script>
<script type="text/javascript">
    if ($('#StatusCssClass').val() == 'st-pending') $('.local-section-b-s-ch-duy-t').addClass('selected').siblings().removeClass('selected');
    if ($('#AdsHighlightRequest').is(':checked')) $('.local-section-b-s-ng-v-i-p').addClass('selected').siblings().removeClass('selected');
    if ($('#AdsGoodDealRequest').is(':checked')) $('.local-section-b-s-ng-v-i-p').addClass('selected').siblings().removeClass('selected');
    if ($('#AdsVIPRequest').is(':checked')) $('.local-section-b-s-ng-v-i-p').addClass('selected').siblings().removeClass('selected');
    if ($('#AdsRequest').is(':checked')) $('.local-section-b-s-ng-v-i-p').addClass('selected').siblings().removeClass('selected');
    if ($('#IsPropertiesWatchList').val() == 'true') $('.local-section-b-s-l-u-theo-d-i').addClass('selected').siblings().removeClass('selected');
    if ($('#IsPropertiesExchange').val() == 'true') $('.local-section-trao-i-b-s').addClass('selected').siblings().removeClass('selected');
</script>
<form action="https://dulieunhadat.vn/Admin" method="post">    <fieldset class="bulk-actions right">
        <label for="publishActions" class="filter-label">Tác vụ:</label>
        <select class="publishActions multiselect" name="Options.PublishBulkAction" multiple="multiple" placeholder="-- Vui lòng chọn --" style="display: none;">

            <optgroup label="Publish tin rao">
                <!-- Publish -->
                <option value="Publish">Cho phép hiện tin rao</option>
                <option value="UnPublish">- Ẩn tin rao</option>
                <!-- PublishAddress -->
                <option value="PublishAddress">Cho phép hiện số nhà</option>
                <option value="UnPublishAddress">- Ẩn số nhà</option>
                <!-- PublishContact -->
                <option value="PublishContact">Cho phép hiện liên hệ</option>
                <option value="UnPublishContact">- Ẩn liên hệ</option>
            </optgroup>

            <optgroup label="Tin quảng cáo">
                <!-- AdsGoodDeal -->
                <option value="AddToAdsGoodDeal">BĐS giá rẻ</option>
                <option value="RemoveAdsGoodDeal">- Loại khỏi BĐS giá rẻ</option>
                <!-- AdsVIP -->
                
                <option value="AddToVIP1">BĐS VIP 1</option>
                <option value="AddToVIP2">BĐS VIP 2</option>
                <option value="AddToVIP3">BĐS VIP 3</option>
                <option value="RemoveAdsVIP">- Loại khỏi BĐS VIP</option>
                <!-- AdsHighlight -->
                
            </optgroup>

            <optgroup label="Thông tin thêm">
                <!-- IsOwner -->
                <option value="SetIsOwner">BĐS chính chủ</option>
                <option value="UnSetIsOwner">- Xóa BĐS chính chủ</option>
                <!-- NoBroker -->
                <option value="SetNoBroker">BĐS miễn trung gian</option>
                <option value="UnSetNoBroker">- Xóa BĐS miễn trung gian</option>
                <!-- IsAuction -->
                <option value="SetIsAuction">BĐS phát mãi</option>
                <option value="UnSetIsAuction">- Xóa BĐS phát mãi</option>
                <!-- SetIsAuthenticatedInfo -->
                
                <option value="UnSetIsAuthenticatedInfo">- BĐS chưa xác thực</option>
                <!-- Delete UserProperties-->
                <option value="DeleteUserProperties">- Xóa khỏi danh sách theo dõi</option>
            </optgroup>

        </select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;">-- Vui lòng chọn -- <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><label class="multiselect-group">Publish tin rao</label></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="Publish"> Cho phép hiện tin rao</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnPublish"> - Ẩn tin rao</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="PublishAddress"> Cho phép hiện số nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnPublishAddress"> - Ẩn số nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="PublishContact"> Cho phép hiện liên hệ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnPublishContact"> - Ẩn liên hệ</label></a></li><li><label class="multiselect-group">Tin quảng cáo</label></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="AddToAdsGoodDeal"> BĐS giá rẻ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="RemoveAdsGoodDeal"> - Loại khỏi BĐS giá rẻ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="AddToVIP1"> BĐS VIP 1</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="AddToVIP2"> BĐS VIP 2</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="AddToVIP3"> BĐS VIP 3</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="RemoveAdsVIP"> - Loại khỏi BĐS VIP</label></a></li><li><label class="multiselect-group">Thông tin thêm</label></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="SetIsOwner"> BĐS chính chủ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnSetIsOwner"> - Xóa BĐS chính chủ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="SetNoBroker"> BĐS miễn trung gian</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnSetNoBroker"> - Xóa BĐS miễn trung gian</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="SetIsAuction"> BĐS phát mãi</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnSetIsAuction"> - Xóa BĐS phát mãi</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="UnSetIsAuthenticatedInfo"> - BĐS chưa xác thực</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="DeleteUserProperties"> - Xóa khỏi danh sách theo dõi</label></a></li></ul></div>
        <select class="publishActions" name="Options.BulkAction">
            <option selected="selected" value="None"></option>

            <optgroup label="Trạng thái tin rao">
<option value="Refresh">Làm mới tin</option><option value="Listing">BĐS rao bán</option>            </optgroup>


                <optgroup label="Export">
                    <!-- Export -->
                    <option value="Export">Xuất tin rao đăng báo</option>
                </optgroup>

        </select>
        <button type="submit" name="submit.BulkEdit" value=" apply">Apply</button>
<input id="ReturnUrl" name="ReturnUrl" type="hidden" value="file:///E:/ActiveProject/nhapholocphat/ReeSoft%20-%20Quan10.html">
        <div class="btn-group">
            <a class="btn button primaryAction dropdown-toggle" data-toggle="dropdown" href="https://dulieunhadat.vn/Admin#">
                Thêm BĐS mới
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="https://dulieunhadat.vn/Admin/RealEstate/Create?AdsTypeCssClass=ad-selling&amp;TypeGroupCssClass=gp-house&amp;PaymentMethodCssClass=pm-vnd-b">Các loại nhà, đất</a></li>
                <li><a href="https://dulieunhadat.vn/Admin/RealEstate/Create?AdsTypeCssClass=ad-selling&amp;TypeGroupCssClass=gp-apartment&amp;PaymentMethodCssClass=pm-vnd-b">Căn hộ, chung cư</a></li>
                <li><a href="https://dulieunhadat.vn/Admin/RealEstate/Create?AdsTypeCssClass=ad-exchange&amp;TypeGroupCssClass=gp-house&amp;PaymentMethodCssClass=pm-vnd-b">Trao đổi BĐS</a></li>
            </ul>
        </div>
    </fieldset>
    <fieldset>
        <table class="items fixed-table float-header">
            <thead>
                <tr>
                    <th scope="col" class="w20 align-center"><input class="selectAll" type="checkbox" value="Properties"></th>
                    <th scope="col" class="w58">Id</th>
                        <th scope="col" class="w60">Giá (Tỷ)</th>
                                                            <th scope="col" class="w74">Số nhà</th>
                    <th scope="col" class="w130">Đường</th>
                    <th scope="col" class="w46">Phường</th>
                    <th scope="col" class="w36">Quận</th>
                    <th scope="col">Diện tích</th>
                    <th scope="col" class="w78">Nhà</th>
                    <th scope="col" class="w20">Hg</th>
                    <th scope="col" class="w58">MT/H</th>
                    <th scope="col" class="w30">LH</th>
                    <th scope="col" class="w30">Ng</th>
                    <th scope="col" class="w52">Ngày</th>
                </tr>
            </thead>
            <tbody>

                    <tr data-id="1677829" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="1677829" name="Properties[0].Property.Id">
                            <input type="checkbox" value="true" name="Properties[0].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="1677829"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="1677829"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/1677829" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/1677829?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">1677829</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">5.04</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 5.04 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
                                            ?
                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
52/31                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Huỳnh Văn Nghệ

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 15
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (4m x 17m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        <div><em><strong>Nội dung:</strong></em> <p>nhà đẹp, đường 12m</p></div>
                                        <!-- Advantages -->
                                        
                                    </div>
                                </div>
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            3 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng ?m">hẻm ?m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="thành 0903919251<div></div><div class=color-note></div>">thà..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">SyDung</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> SyDung - <strong>Sửa bởi:</strong> SyDung ngày 05/02/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 07/04/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>05/02/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2040040" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2040040" name="Properties[1].Property.Id">
                            <input type="checkbox" value="true" name="Properties[1].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2040040"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2040040"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2040040" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2040040?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2040040</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">10.3</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 10.3 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
8.61 Tỷ
(-16%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
348/36                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Hoàng Văn Thụ

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 4
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (4.2m x 17.25m)</div>
                                        <div>DTQH: (4.2m x 17.25m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            3 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 5m">hẻm 5m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0903044324<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">kieutrinh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> kieutrinh - <strong>Sửa bởi:</strong> kieutrinh ngày 01/02/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 15/11/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>01/02/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>                    
            </tbody>
        </table><div class="floatHeader" style="display:none"><table class="items fixed-table float-header" style="width: 1017px;">
            
            
        <thead><tr>
                    
                    
                        
                                                            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <th scope="col" class="w20 align-center" style="width: 19px;"><input class="selectAll" type="checkbox" value="Properties"></th><th scope="col" class="w58" style="width: 57px;">Id</th><th scope="col" class="w60" style="width: 59px;">Giá (Tỷ)</th><th scope="col" class="w74" style="width: 73px;">Số nhà</th><th scope="col" class="w130" style="width: 129px;">Đường</th><th scope="col" class="w46" style="width: 45px;">Phường</th><th scope="col" class="w36" style="width: 35px;">Quận</th><th scope="col" style="width: 199px;">Diện tích</th><th scope="col" class="w78" style="width: 77px;">Nhà</th><th scope="col" class="w20" style="width: 19px;">Hg</th><th scope="col" class="w58" style="width: 57px;">MT/H</th><th scope="col" class="w30" style="width: 29px;">LH</th><th scope="col" class="w30" style="width: 29px;">Ng</th><th scope="col" class="w52" style="width: 51px;">Ngày</th></tr></thead></table></div><div class="floatHeader" style="position: fixed; top: 0px; left: 285px;"><table class="items fixed-table float-header" style="width: 1017px;">
            
            
        <thead><tr>
                    
                    
                        
                                                            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <th scope="col" class="w20 align-center" style="width: 19px;"><input class="selectAll" type="checkbox" value="Properties"></th><th scope="col" class="w58" style="width: 57px;">Id</th><th scope="col" class="w60" style="width: 59px;">Giá (Tỷ)</th><th scope="col" class="w74" style="width: 73px;">Số nhà</th><th scope="col" class="w130" style="width: 129px;">Đường</th><th scope="col" class="w46" style="width: 45px;">Phường</th><th scope="col" class="w36" style="width: 35px;">Quận</th><th scope="col" style="width: 199px;">Diện tích</th><th scope="col" class="w78" style="width: 77px;">Nhà</th><th scope="col" class="w20" style="width: 19px;">Hg</th><th scope="col" class="w58" style="width: 57px;">MT/H</th><th scope="col" class="w30" style="width: 29px;">LH</th><th scope="col" class="w30" style="width: 29px;">Ng</th><th scope="col" class="w52" style="width: 51px;">Ngày</th></tr></thead></table><div class="floatHeader" style="display:none"><table class="items fixed-table float-header" style="width: 1015px;">
            
            
        <thead><tr>
                    
                    
                        
                                                            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                <th scope="col" class="w20 align-center" style="width: 19px;"><input class="selectAll" type="checkbox" value="Properties"></th><th scope="col" class="w58" style="width: 57px;">Id</th><th scope="col" class="w60" style="width: 59px;">Giá (Tỷ)</th><th scope="col" class="w74" style="width: 73px;">Số nhà</th><th scope="col" class="w130" style="width: 130px;">Đường</th><th scope="col" class="w46" style="width: 45px;">Phường</th><th scope="col" class="w36" style="width: 35px;">Quận</th><th scope="col" style="width: 201px;">Diện tích</th><th scope="col" class="w78" style="width: 77px;">Nhà</th><th scope="col" class="w20" style="width: 18px;">Hg</th><th scope="col" class="w58" style="width: 56px;">MT/H</th><th scope="col" class="w30" style="width: 28px;">LH</th><th scope="col" class="w30" style="width: 28px;">Ng</th><th scope="col" class="w52" style="width: 50px;">Ngày</th></tr></thead></table></div></div>
        

    <div class="pager-footer">
            <div class="page-size-options group">
                <div>Show:</div>

                <select id="undefinedSelector" class="selector pager" name="undefinedSelector"><option value="https://dulieunhadat.vn/Admin?pageSize=0&amp;page=1">All</option><option value="https://dulieunhadat.vn/Admin?pageSize=10&amp;page=1">10</option><option selected="selected">20</option></select>
            </div>

            <span class="page-results">Showing items 1 - 20 of 66</span>
<ul class="pager"><li class="first"><span>1</span></li>
<li><a href="https://dulieunhadat.vn/Admin?page=2">2</a></li>
<li><a href="https://dulieunhadat.vn/Admin?page=3">3</a></li>
<li><a href="https://dulieunhadat.vn/Admin?page=4">4</a></li>
<li><a href="https://dulieunhadat.vn/Admin?page=2">&gt;</a></li>
<li class="last"><a href="https://dulieunhadat.vn/Admin?page=4">&gt;&gt;</a></li>
</ul>
    </div>


    </fieldset>
<input name="__RequestVerificationToken" type="hidden" value="rXzfybtJXh5t6RodZr4--aZDYRf0FuaJY0Qrl-GNd1xMsWyUvVQ_8Sntu9_hW3gkoXWbSdPALYB0CmvqUEmgLlFVzZXyj_WfxlUYATWDk3Y1"></form></div>
            </div>