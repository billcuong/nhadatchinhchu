<!--scripts-->
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

    function searchBDS(){        
        /*var queryHtml = '<?php echo RwsConstant::FULL_BASE_URL_HOST;?>';    
        var loaitin = $("#AdsTypeCssClass").val();        
        var nhomBds =  $("#TypeGroupCssClasses").val();
        var loaiBds = $("#TypeCssClasses").val();
        var trangthai = $("#StatusCssClass").val();
        var danhdau = $("#FlagCssClasses").val();
        
        var filters = "/bdsNewsList?";
        if(loaitin != ''){            
                filters += "&loaitin=" + loaitin;
        }
        if(nhomBds != ''){            
                filters += "&nhomBds=" + nhomBds;
        }
        if(loaiBds != ''){
                filters += "&loaiBds=" + loaiBds;
        }
        if(trangthai != ''){            
                filters += "&trangthai=" + trangthai;
        }
        if(danhdau != ''){            
                filters += "&danhdau=" + danhdau;
        }
        queryHtml = queryHtml + filters.replace('?&', '?');
        if(id_select_sort_by != ''){
            queryHtml = queryHtml + "&search_sort=" + id_select_sort_by;
        }
        if(id_video_page != ''){
            queryHtml = queryHtml + "&page=" + id_video_page;
        }  
        alert(queryHtml);*/
        $("#bdsNewsListForm").submit();
    }


</script>
<!--PHP code-->
<?php echo $this->Form->create('bdsNewsList', array('id'=>'bdsNewsListForm', 'url' => array ('controller' => 'bDSNewsList', 'action' => 'loadSearchInfo'), 'novalidate' => true)); ?>
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
        
    </fieldset>
    <fieldset class="bulk-actions left">
        <label for="Order">Sắp xếp theo:</label>
        <select id="Order" name="Order">
            <option selected="selected" value="LastUpdatedDate">Ngày sửa lần cuối</option>
            <option value="AddressNumber">Số nhà</option>
            <option value="PriceProposedInVND">Giá rao</option>
        </select>

        <button type="button" name="btnSearch" onClick="searchBDS();">Tìm kiếm</button>
        Tìm được <strong><?php echo count($data) ?></strong> kết quả
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
                <?php
                if($data==NULL){
                    echo "<h2>Dada Empty</h2>";
                } else{
                    $idx = 0;
                    foreach($data as $item){
                ?>
                    <tr data-id="<?php $item['BDSNews']['BDSNEWS_ID']?>" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="<?php echo $item['BDSNews']['BDSNEWS_ID']?>" name="Properties[<?php echo $idx ?>].Property.Id">
                            <input type="checkbox" value="true" name="Properties[<?php echo $idx ?>].IsChecked">
                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="<?php echo $item['BDSNews']['BDSNEWS_ID']?>"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="<?php echo $item['BDSNews']['BDSNEWS_ID']?>"></span>
                            </div>
                        </td>
                        <td>
                            <!-- Published -->
                                <a href="<?php echo RwsConstant::FULL_BASE_URL_HOST;?>/newsList?type=1">
                                <a href="<?php echo RwsConstant::FULL_BASE_URL_HOST;?>/BDSNews/Edit?id="<?php echo $item['BDSNews']['BDSNEWS_ID'];?>" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>
                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="<?php echo RwsConstant::FULL_BASE_URL_HOST;?>/BDSNews/Edit?id="<?php echo $item['BDSNews']['BDSNEWS_ID']; ?>"><?php echo $item['BDSNews']['BDSNEWS_ID']; ?></a>
                            </span>
                            <!-- UserGroup -->
                                <div><small class="small"><?php echo $item['BDSNews']['GROUP_CODE']; ?></small></div>
                            <!-- AdsVIPRequest -->                            
                        </td>
                        <!-- PriceProposedInVND -->
                        <td class="deal-normal">
                            <!--<?php echo $item['BDSNews']['GIA_RAO'] . $item['BDSNews']['DON_VI_TIEN_ID']; ?>-->
                            <?php echo $item['BDSNews']['GIA_RAO'] ?>
                            <span data-toggle="tooltip"></span>
                            <div data-tooltip-content="" style="display:none">
                                <div><em><strong>Giá rao:</strong></em> <?php echo $item['BDSNews']['GIA_RAO'] . '/ Tổng DT'; ?></div>
                                <div><em><strong>Định giá:</strong></em><?php echo $item['BDSNews']['GIA_DU_KIEN']; ?></div>
                            </div>
                        </td>
                        <!-- PriceEstimatedInVND -->
                        <!-- PriceEstimatedInVND Rating -->
                        <!-- AddressNumber -->
                        <td class="st-selling"><?php echo $item['BDSNews']['SO_NHA']; ?>
                                <!-- PublishAddress -->
                                <!-- Status -->
                                <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>
                        <!-- Street -->                        
                        <td><?php echo $item['Street']['STREET_NAME']; ?></td>
                        <!-- Ward -->
                        <td><?php echo $item['Ward']['WARD_NAME']; ?></td>
                        <!-- District -->
                        <td><?php echo $item['District']['DISTRICT_NAME']; ?></td>
                        <!-- Area -->
                        <td>
                            <div>DTKV: (<?php echo $item['BDSNews']['DIEN_TICH_RONG'];?>m x <?php echo $item['BDSNews']['DIEN_TICH_DAI']?> m<br>
                                 DTQH: (<?php echo $item['BDSNews']['DIEN_TICH_QH_RONG'];?>m x <?php echo $item['BDSNews']['DIEN_TICH_QH_DAI']?> m ?>
                                    <?php 
                                    if($item['BDSNews']['BDS_NOTE'] != NULL){
                                    ?>
                                        <a href="<?php echo RwsConstant::FULL_BASE_URL_HOST . '/BDSNewsList#'; ?>" data-toggle="tooltip"></a>
                                        <div data-tooltip-content="" style="display:none">
                                            <div>
                                                <!-- Title -->                                     
                                                <!-- Content -->
                                                <div><em><strong>Nội dung:</strong></em> <p><?php echo $item['BDSNews']['BDS_NOTE']; ?></p></div>
                                                <!-- Advantages -->                                    
                                            </div>
                                        </div>
                                    <?php 
                                    }
                                    ?>
                             </div>
                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>
                        <!-- PropertyType -->
                        <td>
                            <?php echo $item['Loai_Bds']['LOAI_BDS_NAME']; ?>
                        </td>
                        <!-- Direction -->
                        <td><?php echo $item['Huong']['HUONG_NAME']; ?></td>
                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="<?php echo $item['BDSNews']['KHOAN_CACH_DUONG_CHINH']; ?>"><?php echo $item['BDSNews']['KHOAN_CACH_DUONG_CHINH']; ?></span>
                        </td>
                        <!-- ContactPhone -->
                        <td class="nowrap">
                            <!-- PublishContact -->
                            <!-- ContactPhone -->
                            <div data-toggle="tooltip" title="<?php echo $item['BDSNews']['TEN_DIEN_THOAI']; ?><div></div><div class=color-note></div>"><?php echo $item['BDSNews']['TEN_LIEN_HE']; ?></div>
                        </td>
                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip"><?php echo $item['BDSNews']['LIEN_HE_DOC_QUYEN']; ?></div>
                            <div data-tooltip-content="" style="display:none">
                                <div><em><strong>Nguồn gần nhất:</strong> <?php echo $item['BDSNews']['USER_UPDATE']; ?> - <strong>Sửa bởi:</strong> <?php echo $item['BDSNews']['USER_UPDATE']; ?> ngày <?php echo $item['BDSNews']['UPDATE_YMD']; ?></em></div>
                                <div><em><strong>Nguồn đầu tiên:</strong> <?php echo $item['BDSNews']['USER_CREATE']; ?> - <strong>Tạo bởi:</strong> <?php echo $item['BDSNews']['USER_CREATE']; ?> ngày <?php echo $item['BDSNews']['CREATE_YMD']; ?></em></div>
                            </div>
                        </td>
                        <!-- Date -->
                        <td>
                            <!-- Date -->
                            <span><?php echo $item['BDSNews']['CREATE_YMD'] ?></span>
                            <!-- AdsHighlight -->
                            <!-- AdsGoodDeal -->
                            <!-- AdsVIP -->
                        </td>
                    </tr>   
                    <?php
                        $idx++;
                    }
                }
                ?>                 
            </tbody>
        </table>
        <div class="floatHeader" style="display:none">
        <table class="items fixed-table float-header" style="width: 1017px;">
            <thead>
                <tr>
                    <th scope="col" class="w20 align-center" style="width: 19px;">
                        <input class="selectAll" type="checkbox" value="Properties">
                    </th>
                    <th scope="col" class="w58" style="width: 57px;">Id</th>
                    <th scope="col" class="w60" style="width: 59px;">Giá (Tỷ)</th>
                    <th scope="col" class="w74" style="width: 73px;">Số nhà</th>
                    <th scope="col" class="w130" style="width: 129px;">Đường</th>
                    <th scope="col" class="w46" style="width: 45px;">Phường</th>
                    <th scope="col" class="w36" style="width: 35px;">Quận</th>
                    <th scope="col" style="width: 199px;">Diện tích</th>
                    <th scope="col" class="w78" style="width: 77px;">Nhà</th>
                    <th scope="col" class="w20" style="width: 19px;">Hg</th>
                    <th scope="col" class="w58" style="width: 57px;">MT/H</th>
                    <th scope="col" class="w30" style="width: 29px;">LH</th>
                    <th scope="col" class="w30" style="width: 29px;">Ng</th>
                    <th scope="col" class="w52" style="width: 51px;">Ngày</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="floatHeader" style="position: fixed; top: 0px; left: 285px;">
        <table class="items fixed-table float-header" style="width: 1017px;">
            <thead>
                <tr>
                    <th scope="col" class="w20 align-center" style="width: 19px;">
                        <input class="selectAll" type="checkbox" value="Properties">
                    </th>
                    <th scope="col" class="w58" style="width: 57px;">Id</th>
                    <th scope="col" class="w60" style="width: 59px;">Giá (Tỷ)</th>
                    <th scope="col" class="w74" style="width: 73px;">Số nhà</th>
                    <th scope="col" class="w130" style="width: 129px;">Đường</th>
                    <th scope="col" class="w46" style="width: 45px;">Phường</th>
                    <th scope="col" class="w36" style="width: 35px;">Quận</th>
                    <th scope="col" style="width: 199px;">Diện tích</th>
                    <th scope="col" class="w78" style="width: 77px;">Nhà</th>
                    <th scope="col" class="w20" style="width: 19px;">Hg</th>
                    <th scope="col" class="w58" style="width: 57px;">MT/H</th>
                    <th scope="col" class="w30" style="width: 29px;">LH</th>
                    <th scope="col" class="w30" style="width: 29px;">Ng</th>
                    <th scope="col" class="w52" style="width: 51px;">Ngày</th>
                </tr>
            </thead>
        </table>
        <div class="floatHeader" style="display:none">
            <table class="items fixed-table float-header" style="width: 1015px;">
                <thead>
                    <tr> 
                        <th scope="col" class="w20 align-center" style="width: 19px;">
                            <input class="selectAll" type="checkbox" value="Properties">
                        </th>
                        <th scope="col" class="w58" style="width: 57px;">Id</th>
                        <th scope="col" class="w60" style="width: 59px;">Giá (Tỷ)</th>
                        <th scope="col" class="w74" style="width: 73px;">Số nhà</th>
                        <th scope="col" class="w130" style="width: 130px;">Đường</th>
                        <th scope="col" class="w46" style="width: 45px;">Phường</th>
                        <th scope="col" class="w36" style="width: 35px;">Quận</th>
                        <th scope="col" style="width: 201px;">Diện tích</th>
                        <th scope="col" class="w78" style="width: 77px;">Nhà</th>
                        <th scope="col" class="w20" style="width: 18px;">Hg</th>
                        <th scope="col" class="w58" style="width: 56px;">MT/H</th>
                        <th scope="col" class="w30" style="width: 28px;">LH</th>
                        <th scope="col" class="w30" style="width: 28px;">Ng</th>
                        <th scope="col" class="w52" style="width: 50px;">Ngày</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>        

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
</form>