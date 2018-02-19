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

</script>




<form action="https://dulieunhadat.vn/Admin" method="get"><input id="IsPropertiesWatchList" name="IsPropertiesWatchList" type="hidden" value="False"><input id="IsPropertiesExchange" name="IsPropertiesExchange" type="hidden" value="False">    <div id="tabsAdsType">
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
                        <select class="select-box" id="AdsTypeCssClass" name="AdsTypeCssClass"><option selected="selected" value="ad-selling">Bán</option>
<option value="ad-leasing">Cho thuê</option>
</select>
                    </td>
                    <td>
                        <select class="select-box multiselect" id="TypeGroupCssClasses" multiple="multiple" name="TypeGroupCssClasses" placeholder="-- Tất cả nhóm BĐS --" style="display: none;"><option selected="selected" value="gp-house">Nhà đất</option>
<option value="gp-apartment">Căn hộ</option>
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis" data-toggle="dropdown" title="Nhà đất" style="width: 100%;">Nhà đất <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li class="active"><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="gp-house"> Nhà đất</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="gp-apartment"> Căn hộ</label></a></li></ul></div><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis" data-toggle="dropdown" title="Nhà đất" style="width: 100%;">Nhà đất <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li class="active"><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="gp-house"> Nhà đất</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="gp-apartment"> Căn hộ</label></a></li></ul></div>
                    </td>
                    <td>
                        <select class="select-box multiselect" id="TypeCssClasses" multiple="multiple" name="TypeCssClasses" placeholder="-- Tất cả loại BĐS --" style="display: none;"><optgroup label="Nhà đất">
<option value="tp-concrete-house">Nhà phố</option>
<option value="tp-villa">Biệt thự</option>
<option value="tp-office-building">Tòa nhà Cao ốc</option>
<option value="tp-hotel">Khách sạn</option>
<option value="tp-ground-floor">Mặt bằng</option>
<option value="tp-room">Phòng</option>
<option value="tp-warehouse-workshop">Kho xưởng</option>
</optgroup>
<optgroup label="Đất">
<option value="tp-residential-land">Đất nền thổ cư</option>
<option value="tp-garden-land">Đất trồng cây lâu năm</option>
<option value="tp-farm-land">Đất nông nghiệp</option>
<option value="tp-forest-land">Đất lâm nghiệp</option>
<option value="tp-industrial-park">Đất sản xuất kinh doanh</option>
<option value="tp-resort-land">Đất du lịch</option>
<option value="tp-service-land">Đất thương mại dịch vụ</option>
<option value="tp-only-land">Đất chuyên dụng</option>
</optgroup>
<optgroup label="Căn hộ">
<option value="tp-apartment">Chung cư</option>
<option value="tp-luxury-apartment">Căn hộ cao cấp</option>
<option value="tp-joint-apartment">Nhà chung nhiều hộ</option>
</optgroup>
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;" aria-expanded="false">-- Tất cả loại BĐS -- <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><label class="multiselect-group">Nhà đất</label></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-concrete-house"> Nhà phố</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-villa"> Biệt thự</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-office-building"> Tòa nhà Cao ốc</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-hotel"> Khách sạn</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-ground-floor"> Mặt bằng</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-room"> Phòng</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-warehouse-workshop"> Kho xưởng</label></a></li><li><label class="multiselect-group">Đất</label></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-residential-land"> Đất nền thổ cư</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-garden-land"> Đất trồng cây lâu năm</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-farm-land"> Đất nông nghiệp</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-forest-land"> Đất lâm nghiệp</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-industrial-park"> Đất sản xuất kinh doanh</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-resort-land"> Đất du lịch</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-service-land"> Đất thương mại dịch vụ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-only-land"> Đất chuyên dụng</label></a></li><li><label class="multiselect-group">Căn hộ</label></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-apartment"> Chung cư</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-luxury-apartment"> Căn hộ cao cấp</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="tp-joint-apartment"> Nhà chung nhiều hộ</label></a></li></ul></div>
                    </td>
                    <td>
                        <select class="select-box" id="StatusCssClass" name="StatusCssClass"><option value="-1">-- BĐS Đang rao --</option>
<option value="0">-- Tất cả --</option>
<option value="st-new">Đang cập nhật</option>
<option selected="selected" value="st-selling">Đang rao</option>
<option value="st-negotiate">Đang thương lượng</option>
<option value="st-trading">Chờ giao dịch</option>
<option value="st-sold">Đã giao dịch</option>
<option value="st-onhold">Tạm ngưng</option>
<option value="st-trash">Chờ xóa</option>
<option value="st-no-contact">Không liên lạc được</option>
<option value="st-estimate">BĐS Định giá</option>
<option value="st-pending">Đang chờ duyệt</option>
<option value="st-approved">Đã duyệt</option>
<option value="st-invalid">Không hợp lệ</option>
<option value="st-draft">Đang soạn thảo</option>
<option value="st-trashed">Người đăng đã xóa</option>
<option value="st-info">Thông tin tham khảo</option>
</select>
                    </td>
                    <td>
                        <select class="select-box multiselect" id="FlagCssClasses" multiple="multiple" name="FlagCssClasses" placeholder="-- Vui lòng chọn --" style="display: none;"><option value="deal-good">Nhà rẻ</option>
<option value="deal-very-good">Nhà rất rẻ</option>
<option value="deal-normal">Bình thường</option>
<option value="deal-unknow">Chưa định giá được</option>
<option value="deal-bad">Nhà giá cao</option>
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;" aria-expanded="false">-- Vui lòng chọn -- <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="deal-good"> Nhà rẻ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="deal-very-good"> Nhà rất rẻ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="deal-normal"> Bình thường</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="deal-unknow"> Chưa định giá được</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="deal-bad"> Nhà giá cao</label></a></li></ul></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Tìm kiếm cơ bản -->
        <table class="filter-table margin-top-5">
            <tbody>
                
                <tr>
                    <td>
                        <div class="combobox-container combobox-selected"> <input type="hidden" value="249" name="ProvinceId"> <div class="input-group"> <div class="combobox-container"> <input type="hidden" name="autocompleteProvinceId" value=""> <div class="input-group"> <input type="text" autocomplete="off" name="autocompleteautocompleteProvinceId" class="select-box combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><input type="text" autocomplete="off" placeholder="-- Tất cả Tỉnh/TP --" class="select-box combobox" style="display: none;"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><div class="combobox-container combobox-selected"> <input type="hidden" value="249" name=""> <div class="input-group"> <input type="text" autocomplete="off" placeholder="-- Tất cả Tỉnh/TP --" name="autocomplete" class="select-box combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><select class="select-box combobox" id="ProvinceId" style="display: none;"><option value="">-- Tất cả Tỉnh/TP --</option>
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
                    </td>
                    <td>
                        <select class="select-box multiselect" id="DistrictIds" multiple="multiple" name="DistrictIds" placeholder="Tất cả Quận / Huyện" style="display: none;"><option value="313">Quận 1</option>
<option value="314">Quận 2</option>
<option value="315">Quận 3</option>
<option value="316">Quận 4</option>
<option value="317">Quận 5</option>
<option value="318">Quận 6</option>
<option value="319">Quận 7</option>
<option value="320">Quận 8</option>
<option value="321">Quận 9</option>
<option value="322">Quận 10</option>
<option value="323">Quận 11</option>
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
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;">Tất cả Quận / Huyện <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="313"> Quận 1</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="314"> Quận 2</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="315"> Quận 3</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="316"> Quận 4</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="317"> Quận 5</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="318"> Quận 6</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="319"> Quận 7</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="320"> Quận 8</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="321"> Quận 9</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="322"> Quận 10</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="323"> Quận 11</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="324"> Quận 12</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="325"> Quận Bình Tân</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="326"> Quận Bình Thạnh</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="327"> Quận Gò Vấp</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="328"> Quận Phú Nhuận</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="329"> Quận Tân Bình</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="330"> Quận Tân Phú</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="331"> Quận Thủ Đức</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="332"> Huyện Bình Chánh</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="333"> Huyện Cần Giờ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="334"> Huyện Củ Chi</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="335"> Huyện Hóc Môn</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="336"> Huyện Nhà Bè</label></a></li></ul></div>
                    </td>
                    <td>
                        <select class="select-box multiselect" id="WardIds" multiple="multiple" name="WardIds" placeholder="Tất cả Phường / Xã" style="display: none;"></select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;">Tất cả Phường / Xã <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"></ul></div>
                    </td>
                    <td>
                        <input type="hidden" id="SelectedStreetId">
                        <div class="combobox-container"> <input type="hidden" name="StreetId" value=""> <div class="input-group"> <div class="combobox-container"> <input type="hidden" name="autocompleteStreetId" value=""> <div class="input-group"> <input type="text" autocomplete="off" name="autocompleteautocompleteStreetId" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><input type="text" autocomplete="off" placeholder="-- Tất cả đường --" class="combobox" style="display: none;"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><div class="combobox-container"> <input type="hidden" name="" value=""> <div class="input-group"> <input type="text" autocomplete="off" placeholder="" name="autocomplete" class="combobox"> <span class="input-group-addon dropdown-toggle" data-dropdown="dropdown"> <span class="caret"></span> <span class="glyphicon glyphicon-remove"></span> </span> </div> </div><select class="combobox" id="StreetId" style="display: none;"><option value=""></option><option value="4646">Alexandre De Rhodes - Q1</option><option value="4647">Bà Lê Chân - Q1</option><option value="705913">Bến Chương Dương - Q1</option><option value="4648">Bùi Thị Xuân - Q1</option><option value="4649">Bùi Viện - Q1</option><option value="4650">Cách Mạng Tháng 8 - Q1</option><option value="4651">Calmette - Q1</option><option value="4652">Cao Bá Nhạ - Q1</option><option value="4653">Cao Bá Quát - Q1</option><option value="4654">Cây Điệp - Q1</option><option value="4655">Chu Mạnh Trinh - Q1</option><option value="4656">Cô Bắc - Q1</option><option value="4657">Cô Giang - Q1</option><option value="4658">Cống Quỳnh - Q1</option><option value="4659">Công Trường Lam Sơn - Q1</option><option value="4660">Công Trường Mê Linh - Q1</option><option value="4661">Công Xã Paris - Q1</option><option value="4662">Đặng Dung - Q1</option><option value="4663">Đặng Tất - Q1</option><option value="4664">Đặng Thị Nhu - Q1</option><option value="4665">Đặng Trần Côn - Q1</option><option value="4666">Đề Thám - Q1</option><option value="4667">Điện Biên Phủ - Q1</option><option value="4668">Đinh Công Tráng - Q1</option><option value="4669">Đinh Tiên Hoàng - Q1</option><option value="4670">Đỗ Quang Đẩu - Q1</option><option value="4671">Đông Du - Q1</option><option value="4672">Đồng Khởi - Q1</option><option value="4673">Hai Bà Trưng - Q1</option><option value="4674">Hải Triều - Q1</option><option value="4675">Hàm Nghi - Q1</option><option value="4676">Hàn Thuyên - Q1</option><option value="4677">Hồ Hảo Hớn - Q1</option><option value="4678">Hồ Huấn Nghiệp - Q1</option><option value="4679">Hồ Tùng Mậu - Q1</option><option value="4680">Hòa Mỹ - Q1</option><option value="4681">Hoàng Sa - Q1</option><option value="4682">Huyền Quang - Q1</option><option value="4683">Huyền Trân Công Chúa - Q1</option><option value="4684">Huỳnh Khương Ninh - Q1</option><option value="4685">Huỳnh Thúc Kháng - Q1</option><option value="4686">Ký Con - Q1</option><option value="4687">Lê Anh Xuân - Q1</option><option value="4688">Lê Công Kiều - Q1</option><option value="4689">Lê Duẩn - Q1</option><option value="4690">Lê Lai - Q1</option><option value="4691">Lê Lợi - Q1</option><option value="4692">Lê Thánh Tôn - Q1</option><option value="4693">Lê Thị Hồng Gấm - Q1</option><option value="4694">Lê Thị Riêng - Q1</option><option value="4695">Lê Văn Hưu - Q1</option><option value="4696">Lương Hữu Khánh - Q1</option><option value="4697">Lưu Văn Lang - Q1</option><option value="4698">Lý Tự Trọng - Q1</option><option value="4699">Lý Văn Phức - Q1</option><option value="4700">Mã Lộ - Q1</option><option value="4701">Mạc Đỉnh Chi - Q1</option><option value="4702">Mạc Thị Bưởi - Q1</option><option value="4703">Mai Thị Lựu - Q1</option><option value="4704">Nam Kỳ Khởi Nghĩa - Q1</option><option value="4705">Nam Quốc Cang - Q1</option><option value="4706">Ngô Đức Kế - Q1</option><option value="4707">Ngô Văn Năm - Q1</option><option value="4708">Nguyễn An Ninh - Q1</option><option value="4709">Nguyễn Bỉnh Khiêm - Q1</option><option value="4710">Nguyễn Cảnh Chân - Q1</option><option value="4711">Nguyễn Công Trứ - Q1</option><option value="4712">Nguyễn Cư Trinh - Q1</option><option value="4713">Nguyễn Đình Chiểu - Q1</option><option value="4714">Nguyễn Du - Q1</option><option value="4715">Nguyễn Huệ - Q1</option><option value="1535782">Nguyễn Hữu Cảnh - Q1</option><option value="4716">Nguyễn Hữu Cầu - Q1</option><option value="4717">Nguyễn Huy Tự - Q1</option><option value="4718">Nguyễn Khắc Nhu - Q1</option><option value="4719">Nguyễn Phi Khanh - Q1</option><option value="4720">Nguyễn Siêu - Q1</option><option value="4721">Nguyễn Thái Bình - Q1</option><option value="4722">Nguyễn Thái Học - Q1</option><option value="4723">Nguyễn Thành Ý - Q1</option><option value="4724">Nguyễn Thị Minh Khai - Q1</option><option value="4725">Nguyễn Thị Nghĩa - Q1</option><option value="4726">Nguyễn Thiệp - Q1</option><option value="4727">Nguyễn Trãi - Q1</option><option value="4728">Nguyễn Trung Ngạn - Q1</option><option value="4729">Nguyễn Trung Trực - Q1</option><option value="4730">Nguyễn Văn Bình - Q1</option><option value="4731">Nguyễn Văn Chiêm - Q1</option><option value="4732">Nguyễn Văn Cừ - Q1</option><option value="4733">Nguyễn Văn Đượm - Q1</option><option value="4734">Nguyễn Văn Giai - Q1</option><option value="4735">Nguyễn Văn Nguyễn - Q1</option><option value="4736">Nguyễn Văn Thủ - Q1</option><option value="4737">Nguyễn Văn Tráng - Q1</option><option value="4738">Pasteur - Q1</option><option value="4739">Phạm Hồng Thái - Q1</option><option value="4740">Phạm Ngọc Thạch - Q1</option><option value="4741">Phạm Ngũ Lão - Q1</option><option value="4742">Phạm Viết Chánh - Q1</option><option value="4743">Phan Bội Châu - Q1</option><option value="4744">Phan Chu Trinh - Q1</option><option value="4745">Phan Kế Bính - Q1</option><option value="4746">Phan Liêm - Q1</option><option value="4747">Phan Ngữ - Q1</option><option value="4748">Phan Tôn - Q1</option><option value="4749">Phan Văn Đạt - Q1</option><option value="4750">Phan Văn Trường - Q1</option><option value="4751">Phó Đức Chính - Q1</option><option value="4752">Phùng Khắc Khoan - Q1</option><option value="4753">Sương Nguyệt Ánh - Q1</option><option value="4754">Thạch Thị Thanh - Q1</option><option value="4755">Thái Văn Lung - Q1</option><option value="4756">Thi Sách - Q1</option><option value="4757">Thủ Khoa Huân - Q1</option><option value="4758">Tôn Đức Thắng - Q1</option><option value="4759">Tôn Thất Đạm - Q1</option><option value="4760">Tôn Thất Thiệp - Q1</option><option value="4761">Tôn Thất Tùng - Q1</option><option value="4762">Trần Cao Vân - Q1</option><option value="4763">Trần Đình Xu - Q1</option><option value="4764">Trần Doãn Khanh - Q1</option><option value="4765">Trần Hưng Đạo - Q1</option><option value="4766">Trần Khắc Chân - Q1</option><option value="4767">Trần Khánh Dư - Q1</option><option value="4768">Trần Nhật Duật - Q1</option><option value="4769">Trần Quang Khải - Q1</option><option value="4770">Trần Quý Khoách - Q1</option><option value="4771">Trịnh Văn Cấn - Q1</option><option value="4772">Trương Định - Q1</option><option value="4773">Trương Hán Siêu - Q1</option><option value="4774">Trường Sa - Q1</option><option value="4775">Võ Thị Sáu - Q1</option><option value="4776">Võ Văn Kiệt - Q1</option><option value="4777">Yersin - Q1</option><option value="636740">An Phú - Q2</option><option value="636697">An Phú - An Khánh - Q2</option><option value="663612">Đại Lộ Đông Tây - Q2</option><option value="4778">Đặng Hữu Phổ - Q2</option><option value="4779">Đặng Tiến Đông - Q2</option><option value="1728930">Đỗ Pháp Thuận - Q2</option><option value="4780">Đỗ Xuân Hợp - Q2</option><option value="4781">Đoàn Hữu Trưng - Q2</option><option value="741756">Đồng Văn Cống - Q2</option><option value="4782">Đường 1 - Q2</option><option value="4783">Đường 10 - Q2</option><option value="4784">Đường 11 - Q2</option><option value="4785">Đường 12 - Q2</option><option value="4786">Đường 13 - Q2</option><option value="4787">Đường 14 - Q2</option><option value="4788">Đường 15 - Q2</option><option value="4789">Đường 16 - Q2</option><option value="4790">Đường 17 - Q2</option><option value="4791">Đường 18 - Q2</option><option value="4792">Đường 19 - Q2</option><option value="4793">Đường 2 - Q2</option><option value="4794">Đường 20 - Q2</option><option value="4795">Đường 21 - Q2</option><option value="4796">Đường 22 - Q2</option><option value="4797">Đường 23 - Q2</option><option value="4798">Đường 24 - Q2</option><option value="4799">Đường 25 - Q2</option><option value="4800">Đường 26 - Q2</option><option value="4801">Đường 27 - Q2</option><option value="4802">Đường 28 - Q2</option><option value="4803">Đường 29 - Q2</option><option value="4804">Đường 3 - Q2</option><option value="4805">Đường 30 - Q2</option><option value="4806">Đường 31 - Q2</option><option value="4807">Đường 32 - Q2</option><option value="4808">Đường 33 - Q2</option><option value="4809">Đường 34 - Q2</option><option value="4810">Đường 35 - Q2</option><option value="4811">Đường 36 - Q2</option><option value="4812">Đường 37 - Q2</option><option value="4813">Đường 38 - Q2</option><option value="4814">Đường 39 - Q2</option><option value="4815">Đường 4 - Q2</option><option value="4816">Đường 40 - Q2</option><option value="4817">Đường 41 - Q2</option><option value="4818">Đường 42 - Q2</option><option value="4819">Đường 43 - Q2</option><option value="4820">Đường 44 - Q2</option><option value="4821">Đường 45 - Q2</option><option value="4822">Đường 46 - Q2</option><option value="4823">Đường 47 - Q2</option><option value="4824">Đường 48 - Q2</option><option value="4825">Đường 49 - Q2</option><option value="4826">Đường 5 - Q2</option><option value="4827">Đường 50 - Q2</option><option value="4828">Đường 51 - Q2</option><option value="4829">Đường 52 - Q2</option><option value="4830">Đường 53 - Q2</option><option value="4831">Đường 54 - Q2</option><option value="4832">Đường 55 - Q2</option><option value="4833">Đường 56 - Q2</option><option value="4834">Đường 57 - Q2</option><option value="4835">Đường 58 - Q2</option><option value="4836">Đường 59 - Q2</option><option value="4837">Đường 6 - Q2</option><option value="4838">Đường 60 - Q2</option><option value="4839">Đường 61 - Q2</option><option value="4840">Đường 62 - Q2</option><option value="4841">Đường 63 - Q2</option><option value="4842">Đường 64 - Q2</option><option value="4843">Đường 65 - Q2</option><option value="4844">Đường 66 - Q2</option><option value="4845">Đường 7 - Q2</option><option value="4846">Đường 8 - Q2</option><option value="4847">Đường 9 - Q2</option><option value="4848">Đường A2.1 - Q2</option><option value="4849">Đường A2.10 - Q2</option><option value="4850">Đường A2.11 - Q2</option><option value="4851">Đường A2.12 - Q2</option><option value="4852">Đường A2.13 - Q2</option><option value="4853">Đường A2.14 - Q2</option><option value="4854">Đường A2.15 - Q2</option><option value="4855">Đường A2.16 - Q2</option><option value="4856">Đường A2.2 - Q2</option><option value="4857">Đường A2.3 - Q2</option><option value="4858">Đường A2.4 - Q2</option><option value="4859">Đường A2.5 - Q2</option><option value="4860">Đường A2.6 - Q2</option><option value="4861">Đường A2.7 - Q2</option><option value="4862">Đường A2.8 - Q2</option><option value="4863">Đường A2.9 - Q2</option><option value="637719">Đường B6 - Q2</option><option value="4864">Đường Bắc Nam Ii - Q2</option><option value="4865">Đường Bình Trưng - Q2</option><option value="4866">Đường Chợ An Điền - Q2</option><option value="4867">Đường D10 - Q2</option><option value="4868">Đường D14 - Q2</option><option value="4869">Đường D16 - Q2</option><option value="4870">Đường Đông Tây I - Q2</option><option value="1728931">Dương Văn An - Q2</option><option value="4871">Giang Văn Minh - Q2</option><option value="4872">Lê Đình Quản - Q2</option><option value="4873">Lê Phụng Hiểu - Q2</option><option value="4874">Lê Thước - Q2</option><option value="4875">Lê Văn Miến - Q2</option><option value="4876">Lê Văn Thịnh - Q2</option><option value="4877">Liên Tỉnh Lộ 25b - Q2</option><option value="4878">Lương Định Của - Q2</option><option value="636925">Mai Chí Thọ - Q2</option><option value="4879">Ngô Quang Huy - Q2</option><option value="4880">Nguyễn Bá Huân - Q2</option><option value="4881">Nguyễn Bá Lân - Q2</option><option value="1135033">Nguyễn Cừ - Q2</option><option value="4882">Nguyễn Đăng Giai - Q2</option><option value="4883">Nguyễn Đôn Tiết - Q2</option><option value="4884">Nguyễn Duy Hiệu - Q2</option><option value="4885">Nguyễn Duy Trinh - Q2</option><option value="1728932">Nguyễn Hoàng - Q2</option><option value="1728912">Nguyễn Qúy Cảnh - Q2</option><option value="1728914">Nguyễn Qúy Đức - Q2</option><option value="4886">Nguyễn Thị Định - Q2</option><option value="4887">Nguyễn Trung Nguyệt - Q2</option><option value="4888">Nguyễn Tư Nghiêm - Q2</option><option value="4889">Nguyễn Tuyển - Q2</option><option value="4890">Nguyễn Ư Dĩ - Q2</option><option value="4891">Nguyễn Văn Giáp - Q2</option><option value="4892">Nguyễn Văn Hưởng - Q2</option><option value="4893">Quốc Hương - Q2</option><option value="1728928">Song Hành - Q2</option><option value="1728921">Thái Thuận - Q2</option><option value="4894">Thạnh Mỹ Lợi - Q2</option><option value="4895">Thảo Điền - Q2</option><option value="4896">Thích Mật Thể - Q2</option><option value="636797">Tỉnh lộ 25B - Q2</option><option value="4897">Tống Hữu Định - Q2</option><option value="1728929">Trần Lưu - Q2</option><option value="4898">Trần Não - Q2</option><option value="4899">Trần Ngọc Diện - Q2</option><option value="4900">Trịnh Khắc Lập - Q2</option><option value="4901">Trúc Đường - Q2</option><option value="4902">Võ Trường Toản - Q2</option><option value="1728946">Vũ Tông Phan - Q2</option><option value="4903">Xa Lộ Hà Nội - Q2</option><option value="4904">Xuân Thủy - Q2</option><option value="4905">Bà Huyện Thanh Quan - Q3</option><option value="4906">Bàn Cờ - Q3</option><option value="4907">Bờ Kênh Nhiêu Lộc - Q3</option><option value="4908">Cách Mạng Tháng 8 - Q3</option><option value="4909">Cao Thắng - Q3</option><option value="4910">Công Trường Quốc Tế - Q3</option><option value="4911">Cư Xá Đô Thành Đường số 4 - Q3</option><option value="4912">Cư Xá Đô Thành Đường số 5 - Q3</option><option value="4913">Cư Xá Đô Thành Đường số 6 - Q3</option><option value="4914">Cư Xá Đô Thành-Đường số 1 - Q3</option><option value="4915">Cư Xá Đô Thành-Đường số 2 - Q3</option><option value="4916">Cư Xá Đô Thành-Đường số 3 - Q3</option><option value="4917">Cư Xá Đô Thành-Đường số 7 - Q3</option><option value="4918">Điện Biên Phủ - Q3</option><option value="4919">Đoàn Công Bửu - Q3</option><option value="4920">Hai Bà Trưng - Q3</option><option value="4921">Hồ Xuân Hương - Q3</option><option value="4922">Hoàng Sa - Q3</option><option value="4923">Huỳnh Tịnh Của - Q3</option><option value="4924">Kỳ Đồng - Q3</option><option value="4925">Lê Ngô Cát - Q3</option><option value="4926">Lê Quý Đôn - Q3</option><option value="4927">Lê Văn Sỹ - Q3</option><option value="4928">Lý Chính Thắng - Q3</option><option value="4929">Lý Thái Tổ - Q3</option><option value="4930">Mai Văn Ngọc - Q3</option><option value="4931">Nam Kỳ Khởi Nghĩa - Q3</option><option value="4932">Ngô Thời Nhiệm - Q3</option><option value="4933">Nguyễn Đình Chiểu - Q3</option><option value="4934">Nguyễn Gia Thiều - Q3</option><option value="4935">Nguyễn Hiền - Q3</option><option value="4936">Nguyễn Phúc Nguyên - Q3</option><option value="4937">Nguyễn Sơn Hà - Q3</option><option value="4938">Nguyễn Thị Diệu - Q3</option><option value="4939">Nguyễn Thị Minh Khai - Q3</option><option value="4940">Nguyễn Thiện Thuật - Q3</option><option value="4941">Nguyễn Thông - Q3</option><option value="4942">Nguyễn Thượng Hiền - Q3</option><option value="4943">Nguyễn Văn Mai - Q3</option><option value="4944">Pasteur - Q3</option><option value="4945">Phạm Đình Toái - Q3</option><option value="4946">Phạm Ngọc Thạch - Q3</option><option value="4947">Rạch Bùng Binh - Q3</option><option value="4948">Sư Thiện Chiếu - Q3</option><option value="4949">Trần Cao Vân - Q3</option><option value="4950">Trần Quang Diệu - Q3</option><option value="4951">Trần Quang Diệu (c/x T.Q. Diệu) - Q3</option><option value="4952">Trần Quốc Thảo - Q3</option><option value="4953">Trần Quốc Toản - Q3</option><option value="4954">Trần Văn Đang - Q3</option><option value="4955">Trương Định - Q3</option><option value="4956">Trương Quyền - Q3</option><option value="4957">Trường Sa - Q3</option><option value="4958">Tú Xương - Q3</option><option value="4959">Võ Thị Sáu - Q3</option><option value="4960">Võ Văn Tần - Q3</option><option value="4961">Vườn Chuối - Q3</option><option value="638130">Bến Vân Đồn - Q4</option><option value="4962">Các Đường Nội Bộ Chung Cư Phường 3 - Q4</option><option value="4963">Các Đường Nội Bộ Cư Xá Vĩnh Hội - Q4</option><option value="4964">Đinh Lể - Q4</option><option value="4965">Đoàn Nhữ Hài - Q4</option><option value="4966">Đoàn Văn Bơ - Q4</option><option value="4967">Đường 10c - Q4</option><option value="4968">Đường 20 Thước - Q4</option><option value="4969">Đường Dân Sinh Hai Bên Cầu Ông Lãnh - Q4</option><option value="4971">Đường Số 1 - Q4</option><option value="4972">Đường Số 10 - Q4</option><option value="4973">Đường Số 10a - Q4</option><option value="4974">Đường Số 10b - Q4</option><option value="4975">Đường Số 11 - Q4</option><option value="4976">Đường Số 12 - Q4</option><option value="4977">Đường Số 12a - Q4</option><option value="4978">Đường Số 13 - Q4</option><option value="4979">Đường Số 14 - Q4</option><option value="4980">Đường Số 15 - Q4</option><option value="4981">Đường Số 16 - Q4</option><option value="4982">Đường Số 17 - Q4</option><option value="4983">Đường Số 18 - Q4</option><option value="4984">Đường Số 19 - Q4</option><option value="4985">Đường Số 2 - Q4</option><option value="4986">Đường Số 20 - Q4</option><option value="4987">Đường Số 21 - Q4</option><option value="4988">Đường Số 22 - Q4</option><option value="4989">Đường Số 23 - Q4</option><option value="4990">Đường Số 24 - Q4</option><option value="4991">Đường Số 25 - Q4</option><option value="4992">Đường Số 26 - Q4</option><option value="4993">Đường Số 27 - Q4</option><option value="4994">Đường Số 28 - Q4</option><option value="4995">Đường Số 29 - Q4</option><option value="4996">Đường Số 3 - Q4</option><option value="4997">Đường Số 30 - Q4</option><option value="4998">Đường Số 31 - Q4</option><option value="4999">Đường Số 32 - Q4</option><option value="5000">Đường Số 32a - Q4</option><option value="5001">Đường Số 33 - Q4</option><option value="5002">Đường Số 34 - Q4</option><option value="5003">Đường Số 35 - Q4</option><option value="5004">Đường Số 36 - Q4</option><option value="5005">Đường Số 37 - Q4</option><option value="5006">Đường Số 38 - Q4</option><option value="5007">Đường Số 39 - Q4</option><option value="5008">Đường Số 4 - Q4</option><option value="5009">Đường Số 40 - Q4</option><option value="5010">Đường Số 41 - Q4</option><option value="5011">Đường Số 45 - Q4</option><option value="5012">Đường Số 46 - Q4</option><option value="5013">Đường Số 47 - Q4</option><option value="5014">Đường Số 48 - Q4</option><option value="5015">Đường Số 49 - Q4</option><option value="5016">Đường Số 5 - Q4</option><option value="5017">Đường Số 50 - Q4</option><option value="5018">Đường Số 6 - Q4</option><option value="5019">Đường Số 7 - Q4</option><option value="5020">Đường Số 8 - Q4</option><option value="5021">Đường Số 9 - Q4</option><option value="5022">Hoàng Diệu - Q4</option><option value="5023">Khánh Hội - Q4</option><option value="5024">Lê Quốc Hưng - Q4</option><option value="5025">Lê Thạch - Q4</option><option value="5026">Lê Văn Linh - Q4</option><option value="5027">Lê Văn Linh Nối Dài - Q4</option><option value="5028">Ngô Văn Sở - Q4</option><option value="5029">Nguyễn Hữu Hào - Q4</option><option value="5030">Nguyễn Khoái - Q4</option><option value="5031">Nguyễn Tất Thành - Q4</option><option value="5032">Nguyễn Thần Hiến - Q4</option><option value="5033">Nguyễn Trường Tộ - Q4</option><option value="5034">Tân Vĩnh - Q4</option><option value="5035">Tôn Đản - Q4</option><option value="5036">Tôn Thất Thuyết - Q4</option><option value="5037">Trương Đình Hợi - Q4</option><option value="5038">Vĩnh Khánh - Q4</option><option value="5039">Xóm Chiếu - Q4</option><option value="5040">An Bình - Q5</option><option value="5041">An Điềm - Q5</option><option value="5042">An Dương Vương - Q5</option><option value="5043">Bà Triệu - Q5</option><option value="5044">Bạch Vân - Q5</option><option value="5045">Bãi Sậy - Q5</option><option value="5046">Bùi Hữu Nghĩa - Q5</option><option value="5047">Cao Đạt - Q5</option><option value="5048">Châu Văn Liêm - Q5</option><option value="5049">Chiêu Anh Các - Q5</option><option value="5050">Công Trường An Đông - Q5</option><option value="5051">Đặng Thái Thân - Q5</option><option value="5052">Đào Tấn - Q5</option><option value="5053">Đỗ Ngọc Thạnh - Q5</option><option value="5054">Đỗ Văn Sửu - Q5</option><option value="5055">Dương Tử Giang - Q5</option><option value="5056">Gia Phú - Q5</option><option value="5057">Gò Công - Q5</option><option value="5058">Hà Tôn Quyền - Q5</option><option value="5059">Hải Thượng Lãn Ông - Q5</option><option value="5060">Hàm Tử - Q5</option><option value="5061">Học Lạc - Q5</option><option value="5062">Hồng Bàng - Q5</option><option value="5063">Hùng Vương - Q5</option><option value="5064">Huỳnh Mẫn Đạt - Q5</option><option value="5065">Kim Biên - Q5</option><option value="5066">Ký Hoà - Q5</option><option value="5067">Lão Tử - Q5</option><option value="5068">Lê Hồng Phong - Q5</option><option value="5069">Lê Quang Định - Q5</option><option value="5070">Lương Nhữ Học - Q5</option><option value="5071">Lưu Xuân Tín - Q5</option><option value="5072">Lý Thường Kiệt - Q5</option><option value="5073">Mạc Cửu - Q5</option><option value="5074">Mạc Thiên Tích - Q5</option><option value="5075">Nghĩa Thục - Q5</option><option value="5076">Ngô Gia Tự - Q5</option><option value="5077">Ngô Nhân Tịnh - Q5</option><option value="5078">Ngô Quyền - Q5</option><option value="5079">Nguyễn Án  - Q5</option><option value="5080">Nguyễn An Khương - Q5</option><option value="5081">Nguyễn Biểu - Q5</option><option value="5082">Nguyễn Chí Thanh - Q5</option><option value="5083">Nguyễn Duy Dương - Q5</option><option value="5084">Nguyễn Kim - Q5</option><option value="5085">Nguyễn Thi - Q5</option><option value="5086">Nguyễn Thị Nhỏ - Q5</option><option value="5087">Nguyễn Thời Trung - Q5</option><option value="5088">Nguyễn Trãi - Q5</option><option value="5089">Nguyễn Tri Phương - Q5</option><option value="5090">Nguyễn Văn Cừ - Q5</option><option value="5091">Nguyễn Văn Đừng - Q5</option><option value="5092">Nhiêu Tâm - Q5</option><option value="5093">Phạm Bân - Q5</option><option value="5094">Phạm Đôn - Q5</option><option value="5095">Phạm Hữu Chí - Q5</option><option value="5096">Phan Huy Chú - Q5</option><option value="5097">Phan Phú Tiên - Q5</option><option value="5098">Phan Văn Khoẻ - Q5</option><option value="5099">Phan Văn Trị - Q5</option><option value="5100">Phó Cơ Điều - Q5</option><option value="5101">Phú Đinh - Q5</option><option value="5102">Phù Đổng Thiên Vương - Q5</option><option value="5103">Phú Giáo - Q5</option><option value="5104">Phú Hữu - Q5</option><option value="5105">Phùng Hưng - Q5</option><option value="5106">Phước Hưng - Q5</option><option value="5107">Sư Vạn Hạnh - Q5</option><option value="5108">Tạ Uyên - Q5</option><option value="5109">Tản Đà - Q5</option><option value="5110">Tân Hàng - Q5</option><option value="5111">Tân Hưng - Q5</option><option value="5112">Tân Thành - Q5</option><option value="5113">Tăng Bạt Hổ - Q5</option><option value="5114">Thuận Kiều - Q5</option><option value="5115">Tống Duy Tân - Q5</option><option value="5116">Trần Bình Trọng - Q5</option><option value="5117">Trần Chánh Chiếu - Q5</option><option value="5118">Trần Điện - Q5</option><option value="5119">Trần Hoà - Q5</option><option value="5120">Trần Hưng Đạo - Q5</option><option value="5121">Trần Nhân Tôn - Q5</option><option value="5122">Trần Phú - Q5</option><option value="5123">Trần Tuấn Khải - Q5</option><option value="5124">Trần Tướng Công - Q5</option><option value="5125">Trần Văn Kiểu - Q5</option><option value="5126">Trần Xuân Hoà - Q5</option><option value="5127">Trang Tử - Q5</option><option value="5128">Triệu Quang Phục - Q5</option><option value="5129">Trịnh Hoài Đức - Q5</option><option value="5130">Vạn Kiếp - Q5</option><option value="5131">Vạn Tượng - Q5</option><option value="5132">Võ Trường Toản - Q5</option><option value="5133">Võ Văn Kiệt - Q5</option><option value="5134">Vũ Chí Hiếu - Q5</option><option value="5135">Xóm Chỉ - Q5</option><option value="5136">Xóm Vôi - Q5</option><option value="5137">Yết Kiêu - Q5</option><option value="171933">49 - Q6</option><option value="83575">An Dương Vương - Q6</option><option value="5138">Bà Hom - Q6</option><option value="5139">Bà Ký - Q6</option><option value="5140">Bà Lài - Q6</option><option value="5141">Bãi Sậy - Q6</option><option value="5142">Bến Lò Gốm - Q6</option><option value="5143">Bến Phú Lâm - Q6</option><option value="5144">Bình Phú - Q6</option><option value="5145">Bình Tây - Q6</option><option value="5146">Bình Tiên - Q6</option><option value="5147">Bửu Đình - Q6</option><option value="5148">Cao Vân Lầu - Q6</option><option value="5149">Chợ Lớn - Q6</option><option value="5150">Chu Văn An - Q6</option><option value="5151">Đặng Nguyên Cẩn - Q6</option><option value="5152">Đường 28 Bình Phú - Q6</option><option value="5153">Đường Nội Bộ Cư Xá Đài Rađa - Q6</option><option value="5154">Đường Nội Bộ Cư Xá Phú Lâm A - Q6</option><option value="5155">Đường Nội Bộ Cư Xá Phú Lâm B - Q6</option><option value="5156">Đường Nội Bộ Cư Xá Phú Lâm D - Q6</option><option value="5157">Đường Nội Bộ Khu Phố Chợ Phú Lâm - Q6</option><option value="111575">Đường số 1 - Q6</option><option value="5158">Đường Số 10 - Q6</option><option value="5159">Đường Số 11 - Q6</option><option value="171900">Đường Số 12 - Q6</option><option value="171901">Đường Số 13 - Q6</option><option value="171902">Đường Số 14 - Q6</option><option value="171903">Đường Số 15 - Q6</option><option value="171904">Đường Số 16 - Q6</option><option value="171905">Đường Số 17 - Q6</option><option value="171906">Đường Số 18 - Q6</option><option value="171907">Đường Số 19 - Q6</option><option value="111576">Đường số 2 - Q6</option><option value="171908">Đường Số 20 - Q6</option><option value="171909">Đường Số 21 - Q6</option><option value="171910">Đường Số 22 - Q6</option><option value="171911">Đường Số 23 - Q6</option><option value="171912">Đường Số 24 - Q6</option><option value="171913">Đường Số 25 - Q6</option><option value="171914">Đường Số 26 - Q6</option><option value="171915">Đường Số 27 - Q6</option><option value="171916">Đường Số 28 - Q6</option><option value="171917">Đường Số 29 - Q6</option><option value="111577">Đường số 3 - Q6</option><option value="171918">Đường Số 30 - Q6</option><option value="171919">Đường Số 31 - Q6</option><option value="171920">Đường Số 32 - Q6</option><option value="171921">Đường Số 33 - Q6</option><option value="171922">Đường Số 34 - Q6</option><option value="171923">Đường Số 35 - Q6</option><option value="171924">Đường Số 36 - Q6</option><option value="171925">Đường Số 37 - Q6</option><option value="171926">Đường Số 38 - Q6</option><option value="171927">Đường Số 39 - Q6</option><option value="111578">Đường số 4 - Q6</option><option value="171895">Đường số 40 - Q6</option><option value="171894">Đường số 41 - Q6</option><option value="171896">Đường số 42 - Q6</option><option value="171897">Đường số 43 - Q6</option><option value="171928">Đường Số 44 - Q6</option><option value="171929">Đường Số 45 - Q6</option><option value="171930">Đường Số 46 - Q6</option><option value="171931">Đường Số 47 - Q6</option><option value="171932">Đường Số 48 - Q6</option><option value="111583">Đường số 5 - Q6</option><option value="171934">Đường Số 50 - Q6</option><option value="171935">Đường Số 51 - Q6</option><option value="171936">Đường Số 52 - Q6</option><option value="171937">Đường Số 53 - Q6</option><option value="171938">Đường Số 54 - Q6</option><option value="171939">Đường Số 55 - Q6</option><option value="171940">Đường Số 56 - Q6</option><option value="171941">Đường Số 57 - Q6</option><option value="171942">Đường Số 58 - Q6</option><option value="171943">Đường Số 59 - Q6</option><option value="111584">Đường số 6 - Q6</option><option value="171944">Đường Số 60 - Q6</option><option value="171945">Đường Số 61 - Q6</option><option value="171946">Đường Số 62 - Q6</option><option value="171947">Đường Số 63 - Q6</option><option value="171948">Đường Số 64 - Q6</option><option value="171949">Đường Số 65 - Q6</option><option value="171950">Đường Số 66 - Q6</option><option value="171951">Đường Số 67 - Q6</option><option value="171952">Đường Số 68 - Q6</option><option value="171959">Đường Số 69 - Q6</option><option value="111585">Đường số 7 - Q6</option><option value="171960">Đường Số 70 - Q6</option><option value="171961">Đường Số 71 - Q6</option><option value="171962">Đường Số 72 - Q6</option><option value="171963">Đường Số 73 - Q6</option><option value="171898">Đường Số 74 - Q6</option><option value="171964">Đường Số 75 - Q6</option><option value="1118967">Đường số 76 - Q6</option><option value="171965">Đường Số 77 - Q6</option><option value="171966">Đường Số 78 - Q6</option><option value="171967">Đường Số 79 - Q6</option><option value="111574">Đường số 8 - Q6</option><option value="171968">Đường Số 80 - Q6</option><option value="171969">Đường Số 81 - Q6</option><option value="171970">Đường Số 82 - Q6</option><option value="171899">Đường Số 9 - Q6</option><option value="5160">Gia Phú - Q6</option><option value="5161">Hậu Giang - Q6</option><option value="5162">Hoàng Lê Kha - Q6</option><option value="5163">Hồng Bàng - Q6</option><option value="2090130">Hùng Vương - Q6</option><option value="5164">Kinh Dương Vương - Q6</option><option value="5165">Lê Quang Sung - Q6</option><option value="5166">Lê Tấn Kế - Q6</option><option value="5167">Lê Trực - Q6</option><option value="5168">Lê Tuấn Mậu - Q6</option><option value="1045745">Lò Gốm - Q6</option><option value="5169">Lý Chiêu Hoàng - Q6</option><option value="5170">Mai Xuân Thưởng - Q6</option><option value="5171">Minh Phụng - Q6</option><option value="5172">Ngô Nhân Tịnh - Q6</option><option value="5173">Nguyễn Đình Chi - Q6</option><option value="5174">Nguyễn Hữu Thận - Q6</option><option value="5175">Nguyễn Ngọc Cung - Q6</option><option value="5176">Nguyễn Phạm Tuân - Q6</option><option value="5177">Nguyễn Thị Nhỏ - Q6</option><option value="5178">Nguyễn Văn Luông - Q6</option><option value="5179">Nguyễn Xuân Phụng - Q6</option><option value="5180">Phạm Đình Hổ - Q6</option><option value="5181">Phạm Phú Thứ - Q6</option><option value="5182">Phạm Văn Chí - Q6</option><option value="5183">Phan Anh - Q6</option><option value="5184">Phan Văn Khoẻ - Q6</option><option value="1046706">Song Hành - Q6</option><option value="608425">Tân Hóa - Q6</option><option value="5185">Tân Hoà Đông - Q6</option><option value="5186">Tháp Mười - Q6</option><option value="5187">Trần Trung Lập - Q6</option><option value="5188">Trần Văn Kiểu - Q6</option><option value="5189">Trang Tử - Q6</option><option value="5190">Văn Thân - Q6</option><option value="1472800">Vành Đai - Q6</option><option value="743865">Võ Văn Kiệt - Q6</option><option value="5191">Bến Nghé - Q7</option><option value="5192">Bùi Bằng Đoàn - Q7</option><option value="5193">Bùi Văn Ba - Q7</option><option value="5194">Cao Triều Phát - Q7</option><option value="5195">Chuyên Dùng 9 - Q7</option><option value="5196">Đặng Đại Độ - Q7</option><option value="5197">Đặng Đức Thuật - Q7</option><option value="5198">Đào Trí - Q7</option><option value="5199">Đô Đốc Tuyết - Q7</option><option value="5200">Đường 10 - Q7</option><option value="5201">Đường 15 - Q7</option><option value="5202">Đường 15b - Q7</option><option value="5204">Đường 18 - Q7</option><option value="5205">Đường 19 - Q7</option><option value="5206">Đường 2 - Q7</option><option value="5207">Đường 21 - Q7</option><option value="5208">Đường 22 - Q7</option><option value="5209">Đường 23 - Q7</option><option value="5210">Đường 45 - Q7</option><option value="5212">Đường 60 - Q7</option><option value="749755">Đường 61 - Q7</option><option value="5213">Đường 62 - Q7</option><option value="1391659">Đường 9M - Q7</option><option value="5215">Đường B - Q7</option><option value="5216">Đường C - Q7</option><option value="5217">Đường D - Q7</option><option value="5218">Đường G - Q7</option><option value="5219">Đường N - Q7</option><option value="5220">Đường O - Q7</option><option value="5221">Đường P - Q7</option><option value="1038644">Đường số 1 - Q7</option><option value="5222">Đường Số 10 - Q7</option><option value="5203">Đường Số 17 - Q7</option><option value="1038650">Đường số 25 - Q7</option><option value="1038645">Đường số 32 - Q7</option><option value="1038646">Đường số 33 - Q7</option><option value="1038653">Đường số 37 - Q7</option><option value="1432469">Đường số 39 - Q7</option><option value="1038652">Đường số 39 Tân Qui Đông - Q7</option><option value="1038651">Đường số 47 - Q7</option><option value="749801">Đường Số 49 - Q7</option><option value="1038649">Đường số 53 - Q7</option><option value="1038647">Đường số 59 - Q7</option><option value="5211">Đường số 6 - Q7</option><option value="5214">Đường Số 67 - Q7</option><option value="641586">Đường Số 7 - Q7</option><option value="640373">Đường Số 77 - Q7</option><option value="1038648">Đường số 79 - Q7</option><option value="5223">Đường U - Q7</option><option value="5224">Gò Ô Môi - Q7</option><option value="5225">Hà Huy Tập (h.2102) - Q7</option><option value="5226">Hoàng Quốc Việt - Q7</option><option value="5227">Hoàng Văn Thái - Q7</option><option value="5228">Hưng Long - Q7</option><option value="5229">Huỳnh Tấn Phát - Q7</option><option value="5230">Lâm Văn Bền - Q7</option><option value="5231">Lê Văn Lương - Q7</option><option value="5232">Lê Văn Thêm - Q7</option><option value="5233">Luther King - Q7</option><option value="5234">Lưu Trọng Lư - Q7</option><option value="5235">Lý Long Tường - Q7</option><option value="5236">Lý Phục Man - Q7</option><option value="5237">Mai Văn Vĩnh - Q7</option><option value="5238">Morison - Q7</option><option value="808822">Mỹ Giang - Q7</option><option value="5239">Nguyễn Cao - Q7</option><option value="5240">Nguyễn Đức Cảnh - Q7</option><option value="5241">Nguyễn Hữu Thọ - Q7</option><option value="5242">Nguyễn Khắc Viện - Q7</option><option value="5243">Nguyễn Lương Bằng - Q7</option><option value="5244">Nguyễn Phan Chánh - Q7</option><option value="5245">Nguyễn Thị Thập - Q7</option><option value="5246">Nguyễn Văn Linh - Q7</option><option value="5247">Nguyễn Văn Quỳ - Q7</option><option value="803980">Nội Khu Nam Thiên 3 - Q7</option><option value="5248">Phạm Hữu Lầu - Q7</option><option value="5249">Phạm Thái Bường - Q7</option><option value="5250">Phạm Thiều - Q7</option><option value="5251">Phạm Văn Nghị - Q7</option><option value="5252">Phan Huy Thực - Q7</option><option value="5253">Phan Khiêm Ích - Q7</option><option value="5254">Phan Văn Chương - Q7</option><option value="5255">Phố Tiểu Bắc - Q7</option><option value="5256">Phố Tiểu Đông - Q7</option><option value="5257">Phố Tiểu Nam - Q7</option><option value="639398">Phú Thuận - Q7</option><option value="5258">Raymondienne - Q7</option><option value="5259">Tân Mỹ - Q7</option><option value="5260">Tân Phú - Q7</option><option value="739854">Tân Quy Đông - Q7</option><option value="5261">Tân Thuận Tây - Q7</option><option value="5262">Tân Trào - Q7</option><option value="5263">Tôn Dật Tiên - Q7</option><option value="5264">Trần Trọng Cung - Q7</option><option value="5265">Trần Văn Khánh - Q7</option><option value="5266">Trần Văn Trà - Q7</option><option value="5267">Trần Xuân Soạn - Q7</option><option value="1774065">152 Cao Lỗ - Q8</option><option value="640831">An Dương Vương - Q8</option><option value="5268">Âu Dương Lân - Q8</option><option value="5269">Ba Đình - Q8</option><option value="188204">Ba tơ - Q8</option><option value="1391636">Bến Bình Đông - Q8</option><option value="5270">Bến Cần Giuộc - Q8</option><option value="5271">Bến Phú Định - Q8</option><option value="5272">Bến Ụ Cây - Q8</option><option value="5273">Bến Xóm Củi - Q8</option><option value="5274">Bình Đông - Q8</option><option value="5275">Bình Đức - Q8</option><option value="5276">Bông Sao - Q8</option><option value="5277">Bùi Huy Bích - Q8</option><option value="5278">Bùi Minh Trực - Q8</option><option value="5279">Các Đường Lô Trong Khu Dân Cư Phường 9, 10 - Q8</option><option value="5280">Các Đường Số Chẵn Phường 4, 5 - Q8</option><option value="5281">Các Đường Số Lẻ Phường 4, 5 - Q8</option><option value="5282">Các Đường Trong Khu Dân Cư Mới Báo Thanh Niên P. 1 - Q8</option><option value="5283">Các Đường Trong Khu Dân Cư Mới Phường 16 - Q8</option><option value="5284">Các Đường Trong Khu Dân Cư Mới Phường 4 - Q8</option><option value="5285">Các Đường Trong Khu Dân Cư Mới Phường 5 - Q8</option><option value="5286">Các Đường Trong Khu Dân Cư Mới Phường 6 - Q8</option><option value="5287">Các Đường Trong Khu Dân Cư Mới Phường 7 - Q8</option><option value="5288">Cao Lỗ - Q8</option><option value="5289">Cao Xuân Dục - Q8</option><option value="5290">Cây Sung - Q8</option><option value="617712">Chánh Hưng - Q8</option><option value="5291">Dạ Nam - Q8</option><option value="5292">Dã Tượng - Q8</option><option value="679778">Đại Lộ Đông Tây - Q8</option><option value="5293">Đặng Chất - Q8</option><option value="5294">Đào Cam Mộc - Q8</option><option value="5295">Đình An Tài - Q8</option><option value="5296">Đinh Hoà - Q8</option><option value="5297">Đông Hồ (đường Số 11) - Q8</option><option value="5298">Đường 1011 Phạm Thế Hiển - Q8</option><option value="5299">Đường 1107 Phạm Thế Hiển (dọc Rạch Hiệp Ân) - Q8</option><option value="5300">Đường 41 - Phú Định - Q8</option><option value="5301">Đường 44 - Trương Đình Hội - Q8</option><option value="5302">Dương Bá Trạc - Q8</option><option value="5303">Đường Nối Phạm Thế Hiển-batơ - Q8</option><option value="5304">Đường Số 111 - Q8</option><option value="855249">Đường số 12 An Dương Vương - Q8</option><option value="1574401">Đường số 13 - Q8</option><option value="791725">Đường số 84 - Q8</option><option value="5305">Đường Vào Khu Dân Cư Phú Lợi - Q8</option><option value="5306">Đường Ven Sông Xáng - Q8</option><option value="1071000">Hoài Thanh - Q8</option><option value="129628">Hưng Phú - Q8</option><option value="1339268">Lê Quang Kim - Q8</option><option value="1038655">Lê Thành Phương - Q8</option><option value="1050203">Liên TỈnh 5 - Q8</option><option value="867630">Lương Văn Can - Q8</option><option value="608266">Lưu Hữu Phước - Q8</option><option value="867629">Lý Đạo Thành - Q8</option><option value="1038657">Mạc Vân - Q8</option><option value="608679">Mễ Cốc - Q8</option><option value="867628">Nguyễn Chế Nghĩa - Q8</option><option value="608680">Nguyễn Duy - Q8</option><option value="884941">Nguyễn Ngọc Cung - Q8</option><option value="1018000">Nguyễn Quyền - Q8</option><option value="738517">Nguyễn Thị Tần - Q8</option><option value="640889">Nguyễn Văn Linh - Q8</option><option value="608691">Phạm Hùng - Q8</option><option value="640873">Phạm Thế Hiển - Q8</option><option value="5307">Phong Phú - Q8</option><option value="1036542">Quốc lộ 50 - Q8</option><option value="179346">Tạ Quang Bửu - Q8</option><option value="1265929">Trần Nguyên Hãn - Q8</option><option value="608681">Trịnh Quang Nghị - Q8</option><option value="679788">Trương Đình Hội - Q8</option><option value="5308">Tùng Thiện Vương - Q8</option><option value="1066351">Ưu Long - Q8</option><option value="1038658">Võ Trứ - Q8</option><option value="640418">Võ Văn Kiệt - Q8</option><option value="1002793">Ấp Ông Nhiêu - Q9</option><option value="5309">Bưng Ông Thoàn - Q9</option><option value="5310">Bưng Sáu Xã - Q9</option><option value="5311">Cầu Đình - Q9</option><option value="5312">Cầu Xây - Q9</option><option value="5313">Cầu Xây 2 - Q9</option><option value="5314">Chu Văn An - Q9</option><option value="5315">Đại Lộ 1 - Q9</option><option value="5316">Đại Lộ 2 - Q9</option><option value="5317">Đại Lộ 3 - Q9</option><option value="5318">Dân Chủ - Q9</option><option value="5319">Đình Phong Phú - Q9</option><option value="5320">Đỗ Xuân Hợp - Q9</option><option value="5321">Đường 109 - Q9</option><option value="5322">Đường 11 - Q9</option><option value="5323">Đường 12 - Q9</option><option value="5324">Đường 120 - Q9</option><option value="5325">Đường 138 - Q9</option><option value="5326">Đường 144 - Q9</option><option value="5327">Đường 147 - Q9</option><option value="5328">Đường 15 - Q9</option><option value="5329">Đường 160 - Q9</option><option value="1181618">Đường 168 - Q9</option><option value="5330">Đường 179 - Q9</option><option value="5331">Đường 185 - Q9</option><option value="5332">Đường 18a - Q9</option><option value="5333">Đường 18b - Q9</option><option value="5334">Đường 197 - Q9</option><option value="5335">Đường 21 - Q9</option><option value="5336">Đường 215 - Q9</option><option value="5337">Đường 22 - Q9</option><option value="5338">Đường 23 - Q9</option><option value="5339">Đường 24 - Q9</option><option value="5340">Đường 245 - Q9</option><option value="5341">Đường 25 - Q9</option><option value="5342">Đường 29 - Q9</option><option value="5343">Đường 297 - Q9</option><option value="5344">Đường 339 - Q9</option><option value="5345">Đường 359 - Q9</option><option value="1359991">đường 3DB khu Nam Long - Q9</option><option value="5346">Đường 400 - Q9</option><option value="5347">Đường 442 - Q9</option><option value="5348">Đường 475 - Q9</option><option value="5349">Đường 61 - Q9</option><option value="5350">Đường 671 - Q9</option><option value="5351">Đường 6a - Q9</option><option value="5352">Đường 6b - Q9</option><option value="5353">Đường 6c - Q9</option><option value="5354">Đường 6d - Q9</option><option value="5355">Đường 79 - Q9</option><option value="1560832">Đường 816 - Q9</option><option value="5356">Đường 990 - Q9</option><option value="1798887">Đường A - Q9</option><option value="1729365">Đường D2 - Q9</option><option value="1028400">Đường D3 Khu dân cư dự án Nam Long - Q9</option><option value="1354106">Đường D6 - Q9</option><option value="5357">Dương Đình Hội - Q9</option><option value="5358">Đường Số 1 - Q9</option><option value="5359">Đường Số 11 - Q9</option><option value="5360">Đường Số 12 - Q9</option><option value="5361">Đường Số 13 - Q9</option><option value="5362">Đường Số 14 - Q9</option><option value="5363">Đường Số 15 - Q9</option><option value="5364">Đường Số 154 - Q9</option><option value="5365">Đường Số 16 - Q9</option><option value="5366">Đường Số 2 - Q9</option><option value="5367">Đường Số 20 - Q9</option><option value="5368">Đường Số 207 - Q9</option><option value="5369">Đường Số 236 - Q9</option><option value="5370">Đường Số 265 - Q9</option><option value="5371">Đường Số 275 - Q9</option><option value="5372">Đường Số 311 - Q9</option><option value="5373">Đường Số 379 - Q9</option><option value="5374">Đường Số 385 - Q9</option><option value="5375">Đường Số 5 - Q9</option><option value="5376">Đường Số 6 - Q9</option><option value="5377">Đường Số 68 - Q9</option><option value="5378">Đường Số 7 - Q9</option><option value="5379">Đường Số 8 - Q9</option><option value="5380">Đường Số 85 - Q9</option><option value="5381">Đường Số 904 - Q9</option><option value="905136">Đường Vành Đai Trong - Q9</option><option value="1140359">Gò Cát - Q9</option><option value="5382">Gò Nổi - Q9</option><option value="5383">Hai Bà Trưng - Q9</option><option value="5384">Hàng Tre - Q9</option><option value="5385">Hồ Bá Phấn - Q9</option><option value="5386">Hoàng Hữu Nam - Q9</option><option value="5387">Hồng Sến - Q9</option><option value="5388">Huỳnh Thúc Kháng - Q9</option><option value="5389">Ích Thạnh - Q9</option><option value="5390">Khổng Tử - Q9</option><option value="5391">Lã Xuân Oai - Q9</option><option value="5392">Lê Lợi - Q9</option><option value="5393">Lê Văn Việt - Q9</option><option value="641023">Liên Phường - Q9</option><option value="5394">Lò Lu - Q9</option><option value="5395">Long Phước - Q9</option><option value="5396">Long Sơn - Q9</option><option value="5397">Long Thuận - Q9</option><option value="5398">Mạc Hiển Tích - Q9</option><option value="5399">Man Thiện - Q9</option><option value="5400">Nam Cao - Q9</option><option value="5401">Nam Hoà - Q9</option><option value="5402">Ngô Quyền - Q9</option><option value="5403">Nguyễn Công Trứ - Q9</option><option value="5404">Nguyễn Duy Trinh - Q9</option><option value="5405">Nguyễn Thái Học - Q9</option><option value="5406">Nguyễn Văn Tăng - Q9</option><option value="5407">Nguyễn Văn Thạnh - Q9</option><option value="5408">Nguyễn Xiển - Q9</option><option value="5409">Phan Chu Trinh - Q9</option><option value="5410">Phan Đạt Đức - Q9</option><option value="5411">Phan Đình Phùng - Q9</option><option value="5412">Phước Thiện - Q9</option><option value="5413">Quang Trung - Q9</option><option value="5414">Quang Trung (nối Dài) - Q9</option><option value="5415">Tam Đa - Q9</option><option value="5416">Tân Hoà Ii - Q9</option><option value="5417">Tân Lập I - Q9</option><option value="5418">Tân Lập Ii - Q9</option><option value="5419">Tăng Nhơn Phú - Q9</option><option value="5420">Tây Hoà - Q9</option><option value="5421">Trần Hưng Đạo - Q9</option><option value="5422">Trần Quốc Toản - Q9</option><option value="5423">Trần Trọng Khiêm - Q9</option><option value="5424">Trịnh Hoài Đức - Q9</option><option value="5425">Trương Hanh - Q9</option><option value="5426">Trường Lưu - Q9</option><option value="5427">Trương Văn Hải - Q9</option><option value="5428">Trương Văn Thành - Q9</option><option value="5429">Tú Xương - Q9</option><option value="5430">Võ Văn Hát - Q9</option><option value="5431">Xa Lộ Hà Nội - Q9</option><option value="1832461">525  - Q10</option><option value="5432">Bà Hạt - Q10</option><option value="5433">Ba Vì - Q10</option><option value="5434">Bắc Hải - Q10</option><option value="5435">Bắc Hải (nối Dài) - Q10</option><option value="5436">Bạch Mã - Q10</option><option value="5437">Bửu Long - Q10</option><option value="5438">Các Đường Trong Cư Xá Bắc Hải - Q10</option><option value="5439">Cách Mạng Tháng 8 - Q10</option><option value="5440">Cao Thắng - Q10</option><option value="5441">Châu Thới - Q10</option><option value="5475">Cư Xá 100căn (Thành Thái) - Q10</option><option value="1841879">Cư Xá Diên Hồng - Q10</option><option value="5476">Cư xá Đồng Tiến (hẻm số 7 Thành Thái) - Q10</option><option value="5442">Cửu Long - Q10</option><option value="5443">Đào Duy Từ - Q10</option><option value="5444">Điện Biên Phủ - Q10</option><option value="5445">Đồng Nai - Q10</option><option value="5446">Đường 3/2 - Q10</option><option value="5447">Hồ Bá Kiện - Q10</option><option value="5448">Hồ Thị Kỷ - Q10</option><option value="5449">Hòa Hảo - Q10</option><option value="5450">Hòa Hưng - Q10</option><option value="5451">Hoàng Dư Khương - Q10</option><option value="5452">Hồng Lĩnh - Q10</option><option value="5453">Hưng Long - Q10</option><option value="5454">Hùng Vương - Q10</option><option value="5455">Hương Giang - Q10</option><option value="5456">Lê Hồng Phong - Q10</option><option value="5457">Lý Thái Tổ - Q10</option><option value="5458">Lý Thường Kiệt - Q10</option><option value="5459">Ngô Gia Tự - Q10</option><option value="5460">Ngô Quyền - Q10</option><option value="5461">Nguyễn Chí Thanh - Q10</option><option value="5462">Nguyễn Duy Dương - Q10</option><option value="5463">Nguyễn Giản Thanh - Q10</option><option value="5464">Nguyễn Kim - Q10</option><option value="5465">Nguyễn Lâm - Q10</option><option value="5466">Nguyễn Ngọc Lộc - Q10</option><option value="5467">Nguyễn Thượng Hiền - Q10</option><option value="5468">Nguyễn Tiểu La - Q10</option><option value="5469">Nguyễn Tri Phương - Q10</option><option value="5470">Nhật Tảo - Q10</option><option value="5471">Sư Vạn Hạnh - Q10</option><option value="5472">Tam Đảo - Q10</option><option value="5473">Tân Phước - Q10</option><option value="5474">Thành Thái - Q10</option><option value="5477">Thành Thái (nối Dài) - Q10</option><option value="5478">Thất Sơn - Q10</option><option value="5479">Tô Hiến Thành - Q10</option><option value="5480">Trần Bình Trọng - Q10</option><option value="5481">Trần Minh Quyền - Q10</option><option value="5482">Trần Nhân Tôn - Q10</option><option value="5483">Trần Thiện Chánh - Q10</option><option value="5484">Trường Sơn - Q10</option><option value="5485">Vĩnh Viễn - Q10</option><option value="1798518">Âu Cơ - Q11</option><option value="5487">Bình Dương Thi Xã - Q11</option><option value="5488">Bình Thới - Q11</option><option value="5489">Các Đường Còn Lại Trong Cư Xá Lữ Gia - Q11</option><option value="5490">Công Chúa Ngọc Hân - Q11</option><option value="5492">Cư xá Bình Thới (Đường số 2) - Q11</option><option value="5493">Cư xá Bình Thới (Đường số 3) - Q11</option><option value="5494">Cư xá Bình Thới (Đường số 3a) - Q11</option><option value="5495">Cư xá Bình Thới (Đường số 4) - Q11</option><option value="5496">Cư xá Bình Thới (Đường số 5) - Q11</option><option value="5497">Cư xá Bình Thới (Đường số 5a) - Q11</option><option value="5498">Cư xá Bình Thới (Đường số 6) - Q11</option><option value="5499">Cư xá Bình Thới (Đường số 7) - Q11</option><option value="5500">Cư xá Bình Thới (Đường số 7a) - Q11</option><option value="5501">Cư xá Bình Thới (Đường số 8) - Q11</option><option value="5502">Cư xá Bình Thới (Đường số 9) - Q11</option><option value="5503">Cư xá Lạc Long Quân - Q11</option><option value="1579164">Cư xá Phú Thọ Hoà - đường Lạc Long QUân - Q11</option><option value="5504">Đặng Minh Khiêm - Q11</option><option value="5505">Đào Nguyên Phổ - Q11</option><option value="5506">Đỗ Ngọc Thạnh - Q11</option><option value="5507">Đội Cung - Q11</option><option value="5508">Đường 1 C/x Lữ Gia - Q11</option><option value="5509">Đường 100 Bình Thới - Q11</option><option value="5510">Đường 16 C/x Lữ Gia - Q11</option><option value="5511">Đường 2 C/X Lữ Gia - Q11</option><option value="5512">Đường 22 C/x Lữ Gia - Q11</option><option value="5513">Đường 28 C/x Lữ Gia - Q11</option><option value="5514">Đường 281 Lý Thường Kiệt - Q11</option><option value="5515">Đường 2A C/x Lữ Gia - Q11</option><option value="5516">Đường 2B C/x Lữ Gia - Q11</option><option value="5517">Đường 3 C/x Lữ Gia - Q11</option><option value="5518">Đường 3/2 - Q11</option><option value="109997">đường 325,327 Minh Phụng - Q11</option><option value="109952">Đường 329 Minh Phụng - Q11</option><option value="5519">Đường 34 C/x Lữ Gia - Q11</option><option value="5520">Đường 40 C/x Lữ Gia - Q11</option><option value="5521">Đường 52 (Hẻm Minh Phụng) - Q11</option><option value="5522">Đường 52 C/x Lữ Gia - Q11</option><option value="5523">Đường 702 Hồng Bàng - Q11</option><option value="5524">Đường 762 Hồng Bàng - Q11</option><option value="5525">Dương Đình Nghệ - Q11</option><option value="5527">Dương Tử Giang - Q11</option><option value="5528">Hà Tôn Quyền - Q11</option><option value="5529">Hàn Hải Nguyên - Q11</option><option value="5530">Hàn Hải Nguyên (nối Dài) - Q11</option><option value="5531">Hoà Bình - Q11</option><option value="5532">Hoà Hảo - Q11</option><option value="5533">Hoàng Đức Tương - Q11</option><option value="5534">Hồng Bàng - Q11</option><option value="5535">Huyện Toại - Q11</option><option value="5536">Huỳnh Văn Chính - Q11</option><option value="5537">Khuông Việt - Q11</option><option value="5538">Lạc Long Quân - Q11</option><option value="5539">Lạc Long Quân (nối Dài) - Q11</option><option value="5540">Lãnh Binh Thăng - Q11</option><option value="5541">Lê Đại Hành - Q11</option><option value="5542">Lê Thị Bạch Cát - Q11</option><option value="5543">Lê Tung - Q11</option><option value="5544">Lò Siêu - Q11</option><option value="5545">Lữ Gia - Q11</option><option value="5546">Lý Nam Đế - Q11</option><option value="5547">Lý Thường Kiệt - Q11</option><option value="5548">Minh Phụng - Q11</option><option value="5549">Nguyễn Bá Học - Q11</option><option value="5550">Nguyễn Chí Thanh - Q11</option><option value="5551">Nguyễn Thị Nhỏ - Q11</option><option value="5552">Nguyễn Thị Nhỏ (nối Dài) - Q11</option><option value="5553">Nguyễn Văn Phú - Q11</option><option value="5554">Nhật Tảo - Q11</option><option value="5555">Ông Ích Khiêm - Q11</option><option value="5556">Phan Xích Long - Q11</option><option value="5557">Phó Cơ Điều - Q11</option><option value="5558">Phú Thọ - Q11</option><option value="5559">Quân Sự - Q11</option><option value="5560">Tạ Uyên - Q11</option><option value="5561">Tân Hóa - Q11</option><option value="5562">Tân Khai - Q11</option><option value="5563">Tân Phước - Q11</option><option value="5564">Tân Thành - Q11</option><option value="5565">Thái Phiên - Q11</option><option value="5566">Thiên Phước - Q11</option><option value="5567">Thuận Kiều - Q11</option><option value="5568">Tôn Thất Hiệp - Q11</option><option value="5569">Tổng Lung - Q11</option><option value="5570">Tống Văn Trân - Q11</option><option value="5571">Trần Quý - Q11</option><option value="5572">Trịnh Đình Trọng - Q11</option><option value="5573">Tuệ Tĩnh - Q11</option><option value="5574">Vĩnh Viễn - Q11</option><option value="5575">Xóm Đất - Q11</option><option value="5576">Bùi Văn Ngữ - Q12</option><option value="5577">Cầu Lò Heo - Q12</option><option value="5578">Đình Giao Khẩu - Q12</option><option value="5579">Đông Hưng Thuận 2 - Q12</option><option value="5580">Đường Liên Phường (trước Trung Tâm Y Tế) - Q12</option><option value="1640697">Đường TA08 - Q12</option><option value="1701338">Dương Thị Mười - Q12</option><option value="1714981">Đường TX22 - Q12</option><option value="5581">Hà Huy Giáp - Q12</option><option value="5582">Hiệp Thành 05 - Q12</option><option value="5583">Hiệp Thành 06 - Q12</option><option value="5584">Hiệp Thành 13 - Q12</option><option value="5585">Hiệp Thành 17 - Q12</option><option value="5586">Hiệp Thành 22 - Q12</option><option value="5587">Hiệp Thành 23 - Q12</option><option value="5588">Hiệp Thành 27 - Q12</option><option value="950301">Khu phố 02 - Q12</option><option value="5589">Lê Đức Thọ - Q12</option><option value="5590">Lê Thị Riêng - Q12</option><option value="5591">Lê Văn Khương - Q12</option><option value="5592">Nguyễn Ảnh Thủ - Q12</option><option value="5593">Nguyễn Thành Vĩnh - Q12</option><option value="1701350">Nguyễn Thị Búp - Q12</option><option value="5594">Nguyễn Văn Quá - Q12</option><option value="5595">Phan Văn Hớn - Q12</option><option value="5596">Quốc Lộ 1a - Q12</option><option value="5597">Quốc Lộ 22 - Q12</option><option value="5598">Tân Chánh Hiệp 10 - Q12</option><option value="140356">Tân Thới Hiệp 22 (TTH22) - Q12</option><option value="5599">Tân Thới Nhất 05 - Q12</option><option value="5600">Tân Thới Nhất 1 - Q12</option><option value="684737">Tân Thới Nhất 13 - Q12</option><option value="895210">Tân Thới Nhất 17 - Q12</option><option value="5601">Tân Thới Nhất 2 - Q12</option><option value="5602">Tân Thới Nhất 6 - Q12</option><option value="5603">Tân Thới Nhất 8 - Q12</option><option value="2051009">Thạnh Lộc 17 - Q12</option><option value="5604">Thạnh Lộc 30 - Q12</option><option value="5605">Thạnh Xuân 13 - Q12</option><option value="5606">Thới An 19 - Q12</option><option value="5607">Tỉnh Lộ 15 - Q12</option><option value="5608">Tô Ký - Q12</option><option value="5609">Tô Ngọc Vân - Q12</option><option value="1701339">Trần Thị Cờ - Q12</option><option value="1701347">Trần Thị Kiều - Q12</option><option value="5610">Trung Mỹ Tây 13 - Q12</option><option value="1760119">Trung Mỹ Tây 17 - Q12</option><option value="5611">Trung Mỹ Tây 2a - Q12</option><option value="5612">Trường Chinh - Q12</option><option value="140357">TTH 37 - Q12</option><option value="140358">TTH 7 - Q12</option><option value="5613">Vườn Lài - Q12</option><option value="1040780">An Dương Vương - Q. Bình Tân</option><option value="5614">Ấn Văn Hóa - Q. Bình Tân</option><option value="5615">Ao Đôi - Q. Bình Tân</option><option value="5616">Ao Sen - Q. Bình Tân</option><option value="5617">Ấp Chiến Lược - Q. Bình Tân</option><option value="5618">Bến Lội - Q. Bình Tân</option><option value="5619">Bình Long - Q. Bình Tân</option><option value="5620">Bình Thành - Q. Bình Tân</option><option value="5621">Bình trị Đông - Q. Bình Tân</option><option value="5622">Bông Sen - Q. Bình Tân</option><option value="5623">Bùi Dương Lịch - Q. Bình Tân</option><option value="5624">Bùi Hữu Diện - Q. Bình Tân</option><option value="5625">Bùi Tự Toàn - Q. Bình Tân</option><option value="5626">Cầu Kinh - Q. Bình Tân</option><option value="5627">Cây Cám - Q. Bình Tân</option><option value="992910">Cư Xá An Lạc - Q. Bình Tân</option><option value="5628">Đất Mới - Q. Bình Tân</option><option value="5629">Đình Nghi Xuân - Q. Bình Tân</option><option value="5630">Đỗ Năng Tế - Q. Bình Tân</option><option value="5631">Đoàn Phú Tứ - Q. Bình Tân</option><option value="5632">Đường 1 - Q. Bình Tân</option><option value="5633">Đường 18b - Q. Bình Tân</option><option value="5634">Đường 1a - Q. Bình Tân</option><option value="5635">Đường 1b - Q. Bình Tân</option><option value="5636">Đường 2 - Q. Bình Tân</option><option value="5637">Đường 2a - Q. Bình Tân</option><option value="5638">Đường 2b - Q. Bình Tân</option><option value="5639">Đường 3 - Q. Bình Tân</option><option value="5640">Đường 3a - Q. Bình Tân</option><option value="5641">Đường 3b - Q. Bình Tân</option><option value="5642">Đường 4 - Q. Bình Tân</option><option value="5643">Đường 4a - Q. Bình Tân</option><option value="5644">Đường 4b - Q. Bình Tân</option><option value="5645">Đường 504 - Q. Bình Tân</option><option value="5646">Đường 532 - Q. Bình Tân</option><option value="5647">Đường 6 - Q. Bình Tân</option><option value="5648">Dương Bá Cung - Q. Bình Tân</option><option value="5649">Đường Bia Truyền Thống - Q. Bình Tân</option><option value="5650">Đường Bờ Sông - Q. Bình Tân</option><option value="5651">Đường Bờ Tuyến - Q. Bình Tân</option><option value="5652">Đường Mã lò - Q. Bình Tân</option><option value="5653">Đường Miếu Bình Đông - Q. Bình Tân</option><option value="5654">Đường Miếu Gò Xoài - Q. Bình Tân</option><option value="5655">Đường Số 1 - Q. Bình Tân</option><option value="5656">Đường Số 10 - Q. Bình Tân</option><option value="5657">Đường Số 11 - Q. Bình Tân</option><option value="5658">Đường Số 11a - Q. Bình Tân</option><option value="5659">Đường Số 12 - Q. Bình Tân</option><option value="5660">Đường Số 13 - Q. Bình Tân</option><option value="5661">Đường Số 13a - Q. Bình Tân</option><option value="5662">Đường Số 14 - Q. Bình Tân</option><option value="5663">Đường Số 14a - Q. Bình Tân</option><option value="5664">Đường Số 14b - Q. Bình Tân</option><option value="5665">Đường Số 15 - Q. Bình Tân</option><option value="5666">Đường Số 16 - Q. Bình Tân</option><option value="5667">Đường Số 16a - Q. Bình Tân</option><option value="5668">Đường Số 17 - Q. Bình Tân</option><option value="5669">Đường Số 17a - Q. Bình Tân</option><option value="5670">Đường Số 17b - Q. Bình Tân</option><option value="970724">Đường số 18 - Q. Bình Tân</option><option value="5671">Đường Số 18a - Q. Bình Tân</option><option value="5672">Đường Số 18c - Q. Bình Tân</option><option value="5673">Đường Số 18d - Q. Bình Tân</option><option value="5674">Đường Số 18e - Q. Bình Tân</option><option value="5675">Đường Số 19 - Q. Bình Tân</option><option value="5676">Đường Số 19a - Q. Bình Tân</option><option value="5677">Đường Số 1b - Q. Bình Tân</option><option value="5678">Đường Số 1c - Q. Bình Tân</option><option value="5679">Đường Số 1d - Q. Bình Tân</option><option value="5680">Đường Số 2 - Q. Bình Tân</option><option value="5681">Đường Số 20 - Q. Bình Tân</option><option value="5682">Đường Số 21 - Q. Bình Tân</option><option value="5683">Đường Số 22 - Q. Bình Tân</option><option value="5684">Đường Số 24 - Q. Bình Tân</option><option value="5685">Đường Số 24a - Q. Bình Tân</option><option value="5686">Đường Số 25 - Q. Bình Tân</option><option value="987654">Đường số 26 - Q. Bình Tân</option><option value="5687">Đường Số 26/3 - Q. Bình Tân</option><option value="907148">Đường số 27 - Q. Bình Tân</option><option value="5688">Đường Số 29 - Q. Bình Tân</option><option value="5689">Đường Số 2a - Q. Bình Tân</option><option value="5690">Đường Số 2b - Q. Bình Tân</option><option value="5691">Đường Số 2c - Q. Bình Tân</option><option value="5692">Đường Số 2d - Q. Bình Tân</option><option value="5693">Đường Số 3 - Q. Bình Tân</option><option value="1216877">Đường số 30 - Q. Bình Tân</option><option value="1573510">Đường số 34 - Q. Bình Tân</option><option value="5694">Đường Số 38 - Q. Bình Tân</option><option value="5695">Đường Số 38a - Q. Bình Tân</option><option value="5696">Đường Số 3a - Q. Bình Tân</option><option value="5697">Đường Số 3b - Q. Bình Tân</option><option value="5698">Đường Số 3c - Q. Bình Tân</option><option value="5699">Đường Số 4 - Q. Bình Tân</option><option value="5700">Đường Số 40 - Q. Bình Tân</option><option value="5701">Đường Số 40a - Q. Bình Tân</option><option value="5702">Đường Số 40b - Q. Bình Tân</option><option value="5703">Đường Số 42 - Q. Bình Tân</option><option value="5704">Đường Số 42a - Q. Bình Tân</option><option value="589462">Đường số 43 - Q. Bình Tân</option><option value="5705">Đường Số 44 - Q. Bình Tân</option><option value="5706">Đường Số 46 - Q. Bình Tân</option><option value="5707">Đường Số 46a - Q. Bình Tân</option><option value="5708">Đường Số 46b - Q. Bình Tân</option><option value="5709">Đường Số 47 - Q. Bình Tân</option><option value="5710">Đường Số 48 - Q. Bình Tân</option><option value="5711">Đường Số 48a - Q. Bình Tân</option><option value="5712">Đường Số 48b - Q. Bình Tân</option><option value="5713">Đường Số 48c - Q. Bình Tân</option><option value="5714">Đường Số 49 - Q. Bình Tân</option><option value="5715">Đường Số 49a - Q. Bình Tân</option><option value="5716">Đường Số 49b - Q. Bình Tân</option><option value="5717">Đường Số 49c - Q. Bình Tân</option><option value="5718">Đường Số 4c - Q. Bình Tân</option><option value="5719">Đường Số 5 - Q. Bình Tân</option><option value="5720">Đường Số 50 - Q. Bình Tân</option><option value="5721">Đường Số 50a - Q. Bình Tân</option><option value="5722">Đường Số 50b - Q. Bình Tân</option><option value="5723">Đường Số 50c - Q. Bình Tân</option><option value="5724">Đường Số 50d - Q. Bình Tân</option><option value="5725">Đường Số 51 - Q. Bình Tân</option><option value="5726">Đường Số 52 - Q. Bình Tân</option><option value="5727">Đường Số 52a - Q. Bình Tân</option><option value="5728">Đường Số 52b - Q. Bình Tân</option><option value="5729">Đường Số 53 - Q. Bình Tân</option><option value="5730">Đường Số 53a - Q. Bình Tân</option><option value="5731">Đường Số 53b - Q. Bình Tân</option><option value="5732">Đường Số 53c - Q. Bình Tân</option><option value="5733">Đường Số 53d - Q. Bình Tân</option><option value="5734">Đường Số 54 - Q. Bình Tân</option><option value="5735">Đường Số 54a - Q. Bình Tân</option><option value="5736">Đường Số 55 - Q. Bình Tân</option><option value="5737">Đường Số 55a - Q. Bình Tân</option><option value="5738">Đường Số 55b - Q. Bình Tân</option><option value="5739">Đường Số 57 - Q. Bình Tân</option><option value="5740">Đường Số 57a - Q. Bình Tân</option><option value="5741">Đường Số 57b - Q. Bình Tân</option><option value="5742">Đường Số 57c - Q. Bình Tân</option><option value="5743">Đường Số 59 - Q. Bình Tân</option><option value="5744">Đường Số 59b - Q. Bình Tân</option><option value="797478">Đường số 5A - Q. Bình Tân</option><option value="5745">Đường Số 5b - Q. Bình Tân</option><option value="5746">Đường Số 5c - Q. Bình Tân</option><option value="5747">Đường Số 5d - Q. Bình Tân</option><option value="5748">Đường Số 5e - Q. Bình Tân</option><option value="5749">Đường Số 5f - Q. Bình Tân</option><option value="5750">Đường Số 6 - Q. Bình Tân</option><option value="5751">Đường Số 7 - Q. Bình Tân</option><option value="5752">Đường Số 7a - Q. Bình Tân</option><option value="5753">Đường Số 7b - Q. Bình Tân</option><option value="5754">Đường Số 8 - Q. Bình Tân</option><option value="5755">Đường Số 8b - Q. Bình Tân</option><option value="5756">Đường Số 9 - Q. Bình Tân</option><option value="5757">Đường Số 9a - Q. Bình Tân</option><option value="5758">Đường Số 9b - Q. Bình Tân</option><option value="5759">Dương Tự Quán - Q. Bình Tân</option><option value="5760">Gò Xoài - Q. Bình Tân</option><option value="5761">Hồ Học Lãm - Q. Bình Tân</option><option value="5762">Hồ Văn Long - Q. Bình Tân</option><option value="5763">Hoàng Hưng - Q. Bình Tân</option><option value="5764">Hoàng Văn Hợp - Q. Bình Tân</option><option value="642866">Hùng Vương - Q. Bình Tân</option><option value="5765">Hương Lộ 13 (lê Trọng Tấn) - Q. Bình Tân</option><option value="5766">Hương Lộ 2 - Q. Bình Tân</option><option value="5767">Hương Lộ 3 - Q. Bình Tân</option><option value="1042370">Kênh Nước Đen - Q. Bình Tân</option><option value="5768">Khiếu Năng Tỉnh - Q. Bình Tân</option><option value="5769">Kinh Dương Vương - Q. Bình Tân</option><option value="5770">Lâm Hoành - Q. Bình Tân</option><option value="5771">Lê Cơ - Q. Bình Tân</option><option value="5772">Lê Công Phép - Q. Bình Tân</option><option value="5773">Lê Đình Cẩn - Q. Bình Tân</option><option value="5774">Lê Đình Dương - Q. Bình Tân</option><option value="5775">Lê Ngung - Q. Bình Tân</option><option value="5776">Lê Tấn Bê - Q. Bình Tân</option><option value="5777">Lê Trọng Tấn - Q. Bình Tân</option><option value="5778">Lê Văn Quới - Q. Bình Tân</option><option value="5779">Liên Khu 1 - Q. Bình Tân</option><option value="5780">Liên Khu 10 - Q. Bình Tân</option><option value="1040782">Liên khu 10-11 - Q. Bình Tân</option><option value="5781">Liên Khu 11 - Q. Bình Tân</option><option value="5782">Liên Khu 12 - Q. Bình Tân</option><option value="5783">Liên Khu 13 - Q. Bình Tân</option><option value="5784">Liên Khu 14 - Q. Bình Tân</option><option value="5785">Liên Khu 15 - Q. Bình Tân</option><option value="1043439">Liên khu 1-6 - Q. Bình Tân</option><option value="5786">Liên Khu 16 - Q. Bình Tân</option><option value="1043437">Liên khu 16-18 - Q. Bình Tân</option><option value="5787">Liên Khu 17 - Q. Bình Tân</option><option value="5788">Liên Khu 18 - Q. Bình Tân</option><option value="5789">Liên Khu 2 - Q. Bình Tân</option><option value="1040781">Liên khu 2-10 - Q. Bình Tân</option><option value="1043438">Liên khu 2-3 - Q. Bình Tân</option><option value="5790">Liên Khu 3 - Q. Bình Tân</option><option value="5791">Liên Khu 4 - Q. Bình Tân</option><option value="5792">Liên Khu 5 - Q. Bình Tân</option><option value="1040784">Liên khu 5-6 - Q. Bình Tân</option><option value="5793">Liên Khu 6 - Q. Bình Tân</option><option value="5794">Liên Khu 7 - Q. Bình Tân</option><option value="5795">Liên Khu 8 - Q. Bình Tân</option><option value="1040783">Liên khu 8-9 - Q. Bình Tân</option><option value="5796">Liên Khu 9 - Q. Bình Tân</option><option value="5797">Lộ Tẻ - Q. Bình Tân</option><option value="5798">Lô Tư - Q. Bình Tân</option><option value="5799">Ngô Y Linh - Q. Bình Tân</option><option value="5800">Nguyễn Cửu Phú - Q. Bình Tân</option><option value="5801">Nguyễn Đình Kiên - Q. Bình Tân</option><option value="5802">Nguyễn Hới - Q. Bình Tân</option><option value="5803">Nguyễn Quý Yêm - Q. Bình Tân</option><option value="5804">Nguyễn Thị Tú - Q. Bình Tân</option><option value="5805">Nguyễn Thức Đường - Q. Bình Tân</option><option value="5806">Nguyễn Thức Tự - Q. Bình Tân</option><option value="5807">Nguyễn Triệu Luật - Q. Bình Tân</option><option value="5808">Nguyễn Trọng Trí - Q. Bình Tân</option><option value="5809">Nguyễn Văn Cự - Q. Bình Tân</option><option value="5810">Phạm Bành - Q. Bình Tân</option><option value="5811">Phạm Đăng Giản - Q. Bình Tân</option><option value="5812">phạm đăng giảng - Q. Bình Tân</option><option value="5813">Phan Anh - Q. Bình Tân</option><option value="5814">Phan Cát Tựu - Q. Bình Tân</option><option value="5815">Phan Đình Thông - Q. Bình Tân</option><option value="5816">Phùng Tá Chu - Q. Bình Tân</option><option value="5817">Quốc Lộ 1a - Q. Bình Tân</option><option value="5818">Sinco - Q. Bình Tân</option><option value="5819">Sông Suối - Q. Bình Tân</option><option value="5820">Sông Tắc - Q. Bình Tân</option><option value="5821">Tạ Mỹ Duật - Q. Bình Tân</option><option value="5822">Tân Hoà Đông - Q. Bình Tân</option><option value="5823">Tân Kỳ Tân Quý - Q. Bình Tân</option><option value="5824">Tập Đoàn 6b - Q. Bình Tân</option><option value="5825">Tây Lân - Q. Bình Tân</option><option value="5826">Tên Lửa - Q. Bình Tân</option><option value="5827">Thoại Ngọc Hầu - Q. Bình Tân</option><option value="5828">Tỉnh Lộ 10 - Q. Bình Tân</option><option value="5829">Trần Đại Nghĩa - Q. Bình Tân</option><option value="5830">Trần Thanh Mại - Q. Bình Tân</option><option value="5831">Trương Phước Phan - Q. Bình Tân</option><option value="5832">Vành Đai Trong - Q. Bình Tân</option><option value="5833">Vĩnh Lộc (hương Lộ 80) - Q. Bình Tân</option><option value="5834">Võ Văn Vân - Q. Bình Tân</option><option value="5835">Vũ Hữu - Q. Bình Tân</option><option value="5836">Vương Văn Huống - Q. Bình Tân</option><option value="5837">Bạch Đằng - Q. Bình Thạnh</option><option value="5838">Bình Lợi - Q. Bình Thạnh</option><option value="5839">Bình Quới - Q. Bình Thạnh</option><option value="5840">Bùi Đình Tuý - Q. Bình Thạnh</option><option value="5841">Bùi Hữu Nghĩa - Q. Bình Thạnh</option><option value="645198">Cầu Ván - Q. Bình Thạnh</option><option value="5842">Chu Văn An - Q. Bình Thạnh</option><option value="5843">Công Trường Hoà Bình - Q. Bình Thạnh</option><option value="5844">Công Trường Tự Do - Q. Bình Thạnh</option><option value="2023065">Cư Xá Phan Đăng Lưu - Q. Bình Thạnh</option><option value="5845">Điện Biên Phủ - Q. Bình Thạnh</option><option value="5846">Diên Hồng - Q. Bình Thạnh</option><option value="5847">Đinh Bộ Lĩnh - Q. Bình Thạnh</option><option value="5848">Đinh Tiên Hoàng - Q. Bình Thạnh</option><option value="5849">Đống Đa - Q. Bình Thạnh</option><option value="5850">Đường 1 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5851">Đường 10 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5852">Đường 12 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5853">Đường 12ab Khu Miếu Nổi - Q. Bình Thạnh</option><option value="5854">Đường 14 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5855">Đường 16 Khu Miếu Nổi - Q. Bình Thạnh</option><option value="5856">Đường 2 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5857">Đường 3 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5858">Đường 4 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5859">Đường 5 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5860">Đường 6 C/x Chu Văn An - Q. Bình Thạnh</option><option value="1892171">Đường 7 c/x Chu Văn An - Q. Bình Thạnh</option><option value="5861">Đường 8 C/x Chu Văn An - Q. Bình Thạnh</option><option value="5862">Đường D1 - Q. Bình Thạnh</option><option value="5863">Đường D2 - Q. Bình Thạnh</option><option value="5864">Đường D3 - Q. Bình Thạnh</option><option value="5865">Đường D5 - Q. Bình Thạnh</option><option value="5866">Đường Phú Mỹ - Q. Bình Thạnh</option><option value="5867">Đường số 12 khu Thanh Đa - Q. Bình Thạnh</option><option value="5868">Đường số 14 khu Thanh Đa - Q. Bình Thạnh</option><option value="5869">Đường số 3 Khu Thanh Đa - Q. Bình Thạnh</option><option value="5870">Đường Trục - Q. Bình Thạnh</option><option value="5871">Hồ Xuân Hương - Q. Bình Thạnh</option><option value="5872">Hoàng Hoa Thám - Q. Bình Thạnh</option><option value="5873">Hồng Bàng - Q. Bình Thạnh</option><option value="5874">Huỳnh Đình Hai - Q. Bình Thạnh</option><option value="5875">Huỳnh Mẫn Đạt - Q. Bình Thạnh</option><option value="5876">Huỳnh Tá Bang - Q. Bình Thạnh</option><option value="5877">Huỳnh Tịnh Của - Q. Bình Thạnh</option><option value="5878">Lam Sơn - Q. Bình Thạnh</option><option value="5879">Lê Quang Định - Q. Bình Thạnh</option><option value="5880">Lê Trực - Q. Bình Thạnh</option><option value="5881">Lương Ngọc Quyến - Q. Bình Thạnh</option><option value="5882">Mai Xuân Thưởng - Q. Bình Thạnh</option><option value="5883">Mê Linh - Q. Bình Thạnh</option><option value="5884">Ngô Đức Kế - Q. Bình Thạnh</option><option value="5885">Ngô Nhân Tịnh - Q. Bình Thạnh</option><option value="5886">Ngô Tất Tố - Q. Bình Thạnh</option><option value="5887">Nguyễn An Ninh - Q. Bình Thạnh</option><option value="5888">Nguyễn Bỉnh Khiêm - Q. Bình Thạnh</option><option value="5889">Nguyễn Công Hoan - Q. Bình Thạnh</option><option value="5890">Nguyễn Công Trứ - Q. Bình Thạnh</option><option value="5891">Nguyễn Cửu Vân - Q. Bình Thạnh</option><option value="5892">Nguyễn Duy - Q. Bình Thạnh</option><option value="5893">Nguyên Hồng - Q. Bình Thạnh</option><option value="5894">Nguyễn Hữu Cảnh - Q. Bình Thạnh</option><option value="577132">Nguyễn Hữu Thoại - Q. Bình Thạnh</option><option value="5895">Nguyễn Huy Lượng - Q. Bình Thạnh</option><option value="5896">Nguyễn Huy Tưởng - Q. Bình Thạnh</option><option value="5897">Nguyễn Khuyến - Q. Bình Thạnh</option><option value="5898">Nguyễn Lâm - Q. Bình Thạnh</option><option value="5899">Nguyễn Ngọc Phương - Q. Bình Thạnh</option><option value="5900">Nguyễn Thái Học - Q. Bình Thạnh</option><option value="5901">Nguyễn Thiện Thuật - Q. Bình Thạnh</option><option value="5902">Nguyễn Thượng Hiền - Q. Bình Thạnh</option><option value="5903">Nguyễn Trung Trực - Q. Bình Thạnh</option><option value="5904">Nguyễn Văn Đậu - Q. Bình Thạnh</option><option value="5905">Nguyễn Văn Lạc - Q. Bình Thạnh</option><option value="5906">Nguyễn Xí - Q. Bình Thạnh</option><option value="5907">Nguyễn Xuân Ôn - Q. Bình Thạnh</option><option value="5908">Nơ Trang Long - Q. Bình Thạnh</option><option value="775258">Phạm Văn Đồng - Q. Bình Thạnh</option><option value="5909">Phạm Viết Chánh - Q. Bình Thạnh</option><option value="5910">Phan Bội Châu - Q. Bình Thạnh</option><option value="5911">Phan Chu Trinh - Q. Bình Thạnh</option><option value="5912">Phan Đăng Lưu - Q. Bình Thạnh</option><option value="5913">Phan Huy Ôn - Q. Bình Thạnh</option><option value="5914">Phan Văn Hân - Q. Bình Thạnh</option><option value="5915">Phan Văn Trị - Q. Bình Thạnh</option><option value="5916">Phan Xích Long - Q. Bình Thạnh</option><option value="5917">Phó Đức Chính - Q. Bình Thạnh</option><option value="5918">Phú Mỹ - Q. Bình Thạnh</option><option value="5919">Quốc Lộ 13 - Q. Bình Thạnh</option><option value="5921">Tăng Bạt Hổ - Q. Bình Thạnh</option><option value="5922">Thanh Đa - Q. Bình Thạnh</option><option value="5923">Thiên Hộ Dương - Q. Bình Thạnh</option><option value="5924">Trần Bình Trọng - Q. Bình Thạnh</option><option value="5925">Trần Kế Xương - Q. Bình Thạnh</option><option value="5926">Trần Quý Cáp - Q. Bình Thạnh</option><option value="5927">Trần Văn Kỷ - Q. Bình Thạnh</option><option value="5928">Trịnh Hoài Đức - Q. Bình Thạnh</option><option value="5929">Trường Sa - Q. Bình Thạnh</option><option value="5930">Ung Văn Khiêm - Q. Bình Thạnh</option><option value="5931">Vạn Kiếp - Q. Bình Thạnh</option><option value="5932">Võ Duy Ninh - Q. Bình Thạnh</option><option value="5933">Võ Trường Toản - Q. Bình Thạnh</option><option value="5934">Vũ Huy Tấn - Q. Bình Thạnh</option><option value="5935">Vũ Ngọc Phan - Q. Bình Thạnh</option><option value="5936">Vũ Tùng - Q. Bình Thạnh</option><option value="5937">Xô Viết Nghệ Tĩnh - Q. Bình Thạnh</option><option value="5938">Yên Đỗ - Q. Bình Thạnh</option><option value="5939">An Hội - Q. Gò vấp</option><option value="5940">An Nhơn - Q. Gò vấp</option><option value="5941">Bạch Đằng - Q. Gò vấp</option><option value="170244">Bến Đình - Q. Gò vấp</option><option value="170644">Bùi Quang Là - Q. Gò vấp</option><option value="5942">Cây Trâm (Nguyễn Văn Khối) - Q. Gò vấp</option><option value="170658">Đỗ Phúc Thịnh - Q. Gò vấp</option><option value="5943">Dương Quãng Hàm - Q. Gò vấp</option><option value="5944">Đường Số 1 - Q. Gò vấp</option><option value="5945">Đường Số 10 - Q. Gò vấp</option><option value="5946">Đường Số 11 - Q. Gò vấp</option><option value="5947">Đường Số 12 - Q. Gò vấp</option><option value="5948">Đường Số 13 - Q. Gò vấp</option><option value="5949">Đường Số 14 - Q. Gò vấp</option><option value="5950">Đường Số 15 - Q. Gò vấp</option><option value="5951">Đường Số 16 - Q. Gò vấp</option><option value="5952">Đường Số 17 - Q. Gò vấp</option><option value="5953">Đường Số 18 - Q. Gò vấp</option><option value="5954">Đường Số 19 - Q. Gò vấp</option><option value="5955">Đường Số 2 - Q. Gò vấp</option><option value="5956">Đường Số 20 - Q. Gò vấp</option><option value="5957">Đường Số 21 - Q. Gò vấp</option><option value="5958">Đường Số 22 - Q. Gò vấp</option><option value="5959">Đường Số 23 - Q. Gò vấp</option><option value="5960">Đường Số 24 - Q. Gò vấp</option><option value="5961">Đường Số 25 - Q. Gò vấp</option><option value="5962">Đường Số 26 - Q. Gò vấp</option><option value="5963">Đường Số 27 - Q. Gò vấp</option><option value="5964">Đường Số 28 - Q. Gò vấp</option><option value="5965">Đường Số 29 - Q. Gò vấp</option><option value="5966">Đường Số 3 - Q. Gò vấp</option><option value="5967">Đường Số 30 - Q. Gò vấp</option><option value="5968">Đường Số 31 - Q. Gò vấp</option><option value="5969">Đường số 32 - Q. Gò vấp</option><option value="170672">Đường số 33 - Q. Gò vấp</option><option value="170682">Đường số 36 - Q. Gò vấp</option><option value="170681">Đường số 37 - Q. Gò vấp</option><option value="170680">Đường số 38 - Q. Gò vấp</option><option value="170723">Đường số 39 - Q. Gò vấp</option><option value="5970">Đường Số 4 - Q. Gò vấp</option><option value="170724">Đường số 40 - Q. Gò vấp</option><option value="170725">Đường số 41 - Q. Gò vấp</option><option value="170726">Đường số 42 - Q. Gò vấp</option><option value="170727">Đường số 43 - Q. Gò vấp</option><option value="170728">Đường số 44 - Q. Gò vấp</option><option value="170737">Đường số 45 - Q. Gò vấp</option><option value="170738">Đường số 46 - Q. Gò vấp</option><option value="170739">Đường số 47 - Q. Gò vấp</option><option value="170741">Đường số 48 - Q. Gò vấp</option><option value="170742">Đường số 49 - Q. Gò vấp</option><option value="5971">Đường Số 5 - Q. Gò vấp</option><option value="170729">Đường số 50 - Q. Gò vấp</option><option value="170731">Đường số 51 - Q. Gò vấp</option><option value="170732">Đường số 53 - Q. Gò vấp</option><option value="170733">Đường số 59 - Q. Gò vấp</option><option value="5972">Đường Số 6 - Q. Gò vấp</option><option value="170734">Đường số 61 - Q. Gò vấp</option><option value="5973">Đường Số 7 - Q. Gò vấp</option><option value="5974">Đường Số 8 - Q. Gò vấp</option><option value="1441959">Đường số 9 - Q. Gò vấp</option><option value="1441958">Đường Số 9 (Phường 15) - Q. Gò vấp</option><option value="5975">Đường Số 9 (Phường10) - Q. Gò vấp</option><option value="5976">Hà Huy Giáp - Q. Gò vấp</option><option value="5977">Hạnh Thông - Q. Gò vấp</option><option value="5978">Hoàng Hoa Thám - Q. Gò vấp</option><option value="5979">Hoàng Minh Giám - Q. Gò vấp</option><option value="5980">Huỳnh Khương An - Q. Gò vấp</option><option value="5981">Huỳnh Văn Nghệ - Q. Gò vấp</option><option value="5982">Lê Đức Thọ - Q. Gò vấp</option><option value="5983">Lê Hoàng Phái - Q. Gò vấp</option><option value="5984">Lê Lai - Q. Gò vấp</option><option value="5985">Lê Lợi - Q. Gò vấp</option><option value="5986">Lê Quang Định - Q. Gò vấp</option><option value="5987">Lê Thị Hồng - Q. Gò vấp</option><option value="5988">Lê Văn Thọ - Q. Gò vấp</option><option value="5989">Lương Ngọc Quyến - Q. Gò vấp</option><option value="5990">Lý Thường Kiệt - Q. Gò vấp</option><option value="5991">Nguyễn Bỉnh Khiêm - Q. Gò vấp</option><option value="5992">Nguyễn Du - Q. Gò vấp</option><option value="170654">Nguyễn Duy Cung - Q. Gò vấp</option><option value="5993">Nguyên Hồng - Q. Gò vấp</option><option value="170333">Nguyễn Huy Điển - Q. Gò vấp</option><option value="5994">Nguyễn Kiệm - Q. Gò vấp</option><option value="5995">Nguyễn Oanh - Q. Gò vấp</option><option value="5996">Nguyễn Thái Sơn - Q. Gò vấp</option><option value="5997">Nguyễn Thượng Hiền - Q. Gò vấp</option><option value="170641">Nguyễn tư giản - Q. Gò vấp</option><option value="5998">Nguyễn Tuân - Q. Gò vấp</option><option value="5999">Nguyễn Văn Bảo - Q. Gò vấp</option><option value="6000">Nguyễn Văn Công - Q. Gò vấp</option><option value="6001">Nguyễn Văn Dung - Q. Gò vấp</option><option value="6002">Nguyễn Văn Lượng - Q. Gò vấp</option><option value="6003">Nguyễn Văn Nghi - Q. Gò vấp</option><option value="6004">Phạm Huy Thông - Q. Gò vấp</option><option value="6005">Phạm Ngũ Lão - Q. Gò vấp</option><option value="6006">Phạm Văn Bạch - Q. Gò vấp</option><option value="6007">Phạm Văn Chiêu - Q. Gò vấp</option><option value="1251127">Phạm Văn Đồng - Q. Gò vấp</option><option value="6008">Phan Huy Ích - Q. Gò vấp</option><option value="6009">Phan Văn Trị - Q. Gò vấp</option><option value="6010">Quang Trung - Q. Gò vấp</option><option value="6011">Tân Sơn - Q. Gò vấp</option><option value="6012">Thích Bữu Đăng - Q. Gò vấp</option><option value="6013">Thiên Hộ Dương - Q. Gò vấp</option><option value="6014">Thống Nhất - Q. Gò vấp</option><option value="6015">Thông Tây Hội - Q. Gò vấp</option><option value="6016">Trần Bá Giao - Q. Gò vấp</option><option value="6017">Trần Bình Trọng - Q. Gò vấp</option><option value="6018">Trần Phú Cương - Q. Gò vấp</option><option value="6019">Trần Quốc Tuấn - Q. Gò vấp</option><option value="6020">Trần Thị Nghĩ - Q. Gò vấp</option><option value="6021">Trưng Nữ Vương - Q. Gò vấp</option><option value="6022">Trương Đăng Quế - Q. Gò vấp</option><option value="6023">Trương Minh Ký - Q. Gò vấp</option><option value="6024">Tú Mỡ - Q. Gò vấp</option><option value="1308045">Bùi Văn Thêm - Q. Phú Nhuận</option><option value="6025">Cầm Bá Thước - Q. Phú Nhuận</option><option value="6026">Cao Thắng - Q. Phú Nhuận</option><option value="6027">Chiến Thắng - Q. Phú Nhuận</option><option value="6028">Cô Bắc - Q. Phú Nhuận</option><option value="6029">Cô Giang - Q. Phú Nhuận</option><option value="6030">Cù Lao - Q. Phú Nhuận</option><option value="111249">Cư xá Cao Thắng - Q. Phú Nhuận</option><option value="1658239">Cư Xá Nguyễn Đình Chiểu - Q. Phú Nhuận</option><option value="1769377">Cư xá Nguyễn Văn Trỗi - Q. Phú Nhuận</option><option value="6031">Đặng Thai Mai - Q. Phú Nhuận</option><option value="6032">Đặng Văn Ngữ - Q. Phú Nhuận</option><option value="1795888">Đặng Văn Sâm - Q. Phú Nhuận</option><option value="6033">Đào Duy Anh - Q. Phú Nhuận</option><option value="6034">Đào Duy Từ  - Q. Phú Nhuận</option><option value="6035">Đỗ Tấn Phong - Q. Phú Nhuận</option><option value="6036">Đoàn Thị Điểm  - Q. Phú Nhuận</option><option value="1304089">Đường D11 - Q. Phú Nhuận</option><option value="6037">Đường Nội Bộ Khu Dân Cư Rạch Miễu (p.2,7) - Q. Phú Nhuận</option><option value="6038">Duy Tân - Q. Phú Nhuận</option><option value="6039">Hồ Biểu Chánh - Q. Phú Nhuận</option><option value="6040">Hồ Văn Huê - Q. Phú Nhuận</option><option value="6041">hoa cau - Q. Phú Nhuận</option><option value="6042">Hoa Cúc - Q. Phú Nhuận</option><option value="6043">Hoa Đào - Q. Phú Nhuận</option><option value="6044">Hoa hồng - Q. Phú Nhuận</option><option value="6045">Hoa Huệ - Q. Phú Nhuận</option><option value="873930">Hoa Lài - Q. Phú Nhuận</option><option value="6046">Hoa Lan - Q. Phú Nhuận</option><option value="6047">Hoa Mai - Q. Phú Nhuận</option><option value="6048">Hoa Phượng - Q. Phú Nhuận</option><option value="6049">Hoa Sứ - Q. Phú Nhuận</option><option value="6050">Hoa Sữa - Q. Phú Nhuận</option><option value="6051">Hoa Thị - Q. Phú Nhuận</option><option value="6052">Hoa Trà - Q. Phú Nhuận</option><option value="6053">Hoàng Diệu - Q. Phú Nhuận</option><option value="6054">Hoàng Hoa Thám - Q. Phú Nhuận</option><option value="6055">Hoàng Minh Giám - Q. Phú Nhuận</option><option value="6056">Hoàng Văn Thụ - Q. Phú Nhuận</option><option value="6057">Hồng hà - Q. Phú Nhuận</option><option value="6058">Huỳnh Văn Bánh - Q. Phú Nhuận</option><option value="6059">Ký Con (PN) - Q. Phú Nhuận</option><option value="6060">Lam sơn - Q. Phú Nhuận</option><option value="6061">Lê Quý Đôn - Q. Phú Nhuận</option><option value="6062">Lê Tự Tài - Q. Phú Nhuận</option><option value="6063">Lê Văn Sỹ - Q. Phú Nhuận</option><option value="6064">Mai Văn Ngọc - Q. Phú Nhuận</option><option value="6065">Ngô Thời Nhiệm - Q. Phú Nhuận</option><option value="6066">Nguyễn Công Hoan - Q. Phú Nhuận</option><option value="6067">Nguyễn Đình Chiểu - Q. Phú Nhuận</option><option value="6068">Nguyễn Đình Chính - Q. Phú Nhuận</option><option value="6069">Nguyễn Kiệm - Q. Phú Nhuận</option><option value="6070">Nguyễn Lâm - Q. Phú Nhuận</option><option value="6071">Nguyễn Thị Huỳnh - Q. Phú Nhuận</option><option value="6072">Nguyễn Thượng Hiền - Q. Phú Nhuận</option><option value="6073">Nguyễn Trọng Tuyển - Q. Phú Nhuận</option><option value="6074">Nguyễn Trường Tộ - Q. Phú Nhuận</option><option value="6075">Nguyễn Văn Đậu - Q. Phú Nhuận</option><option value="6076">Nguyễn Văn Trỗi - Q. Phú Nhuận</option><option value="6077">Nhiêu Tứ - Q. Phú Nhuận</option><option value="6078">Phạm Văn Hai - Q. Phú Nhuận</option><option value="6079">Phan Đăng Lưu - Q. Phú Nhuận</option><option value="6080">Phan Đình Phùng - Q. Phú Nhuận</option><option value="6081">Phan Tây Hồ - Q. Phú Nhuận</option><option value="6082">Phan Xích Long - Q. Phú Nhuận</option><option value="6083">Phổ Quang - Q. Phú Nhuận</option><option value="6084">Phùng Văn Cung - Q. Phú Nhuận</option><option value="6085">Tân Canh - Q. Phú Nhuận</option><option value="6086">Thích Quảng Đức - Q. Phú Nhuận</option><option value="6087">Trần Cao Vân - Q. Phú Nhuận</option><option value="6088">Trần Hữu Trang - Q. Phú Nhuận</option><option value="6089">Trần Huy Liệu - Q. Phú Nhuận</option><option value="6090">Trần Kế Xương - Q. Phú Nhuận</option><option value="6091">Trần Khắc Chân - Q. Phú Nhuận</option><option value="6092">Trương Quốc Dung - Q. Phú Nhuận</option><option value="6093">Trường Sa - Q. Phú Nhuận</option><option value="6094">Ven Kênh Nhiêu Lộc Thị Nghè - Q. Phú Nhuận</option><option value="6095">Ấp Bắc - Q Tân Bình</option><option value="6096">Âu Cơ - Q Tân Bình</option><option value="6097">Ba Gia - Q Tân Bình</option><option value="6098">Ba Vân - Q Tân Bình</option><option value="6099">Ba Vì - Q Tân Bình</option><option value="6100">Bắc Hải - Q Tân Bình</option><option value="6101">Bạch Đằng - Q Tân Bình</option><option value="6102">Bạch Đằng 2 - Q Tân Bình</option><option value="6103">Bành Văn Trân - Q Tân Bình</option><option value="6104">Bàu Bàng - Q Tân Bình</option><option value="6105">Bàu Cát - Q Tân Bình</option><option value="6106">Bàu Cát 1 - Q Tân Bình</option><option value="6107">Bàu Cát 2 - Q Tân Bình</option><option value="6108">Bàu Cát 3 - Q Tân Bình</option><option value="6109">Bàu Cát 4 - Q Tân Bình</option><option value="6110">Bàu Cát 5 - Q Tân Bình</option><option value="6111">Bàu Cát 6 - Q Tân Bình</option><option value="6112">Bàu Cát 7 - Q Tân Bình</option><option value="6113">Bàu Cát 8 - Q Tân Bình</option><option value="6114">Bàu cát 9 - Q Tân Bình</option><option value="1474020">Bảy Hiền - Q Tân Bình</option><option value="6115">Bế Văn Đàn - Q Tân Bình</option><option value="6116">Bến Cát - Q Tân Bình</option><option value="6117">Bình Giã - Q Tân Bình</option><option value="6118">Bùi Thế Mỹ - Q Tân Bình</option><option value="6119">Bùi Thị Xuân - Q Tân Bình</option><option value="6120">Ca Văn Thỉnh - Q Tân Bình</option><option value="6121">Cách Mạng Tháng 8 - Q Tân Bình</option><option value="6123">Chấn Hưng - Q Tân Bình</option><option value="6124">Châu Vĩnh Tế - Q Tân Bình</option><option value="6125">Chí Công - Q Tân Bình</option><option value="6126">Chí Linh - Q Tân Bình</option><option value="6127">Chữ Đồng Tử - Q Tân Bình</option><option value="6128">Cộng Hoà - Q Tân Bình</option><option value="6122">Cống Lỡ - Q Tân Bình</option><option value="6129">Cù Chính Lan - Q Tân Bình</option><option value="1383086">Cư Xá Lữ Gia - Q Tân Bình</option><option value="748571">Cư Xá Phú Thọ Hòa - Q Tân Bình</option><option value="6130">Cửu Long - Q Tân Bình</option><option value="6131">Đại Nghĩa - Q Tân Bình</option><option value="6132">Dân Trí - Q Tân Bình</option><option value="6133">Đặng Lộ - Q Tân Bình</option><option value="6134">Đặng Minh Trứ - Q Tân Bình</option><option value="6135">Đất Thánh - Q Tân Bình</option><option value="6136">Đinh Điền - Q Tân Bình</option><option value="6137">Đồ Sơn - Q Tân Bình</option><option value="6138">Dọc Bờ Kênh Nhiêu Lộc - Q Tân Bình</option><option value="6139">Đống Đa - Q Tân Bình</option><option value="6140">Đồng Đen - Q Tân Bình</option><option value="6141">Đông Hồ - Q Tân Bình</option><option value="6142">Đồng khởi - Q Tân Bình</option><option value="6143">Đồng Nai - Q Tân Bình</option><option value="6144">Đông Sơn - Q Tân Bình</option><option value="6145">Đồng Xoài - Q Tân Bình</option><option value="6146">Đường 175 Lý Thường Kiệt - Q Tân Bình</option><option value="6147">Đường A4 - Q Tân Bình</option><option value="139487">Đường B1 - Q Tân Bình</option><option value="139488">Đường B2 - Q Tân Bình</option><option value="6148">Đường B6 - Q Tân Bình</option><option value="6149">Đường C1 - Q Tân Bình</option><option value="6150">Đường C12 - Q Tân Bình</option><option value="6151">Đường C18 - Q Tân Bình</option><option value="6152">Đường C2 (Phường 13) - Q Tân Bình</option><option value="6153">Đường C22 - Q Tân Bình</option><option value="6154">Đường C27 - Q Tân Bình</option><option value="6155">Đường C3 - Q Tân Bình</option><option value="6156">Đường D50 - Q Tân Bình</option><option value="6157">Đường D51 - Q Tân Bình</option><option value="6158">Đường D52 - Q Tân Bình</option><option value="6159">Đường Nhà Kho Pepsi - Q Tân Bình</option><option value="6160">Đường Số 1 - Q Tân Bình</option><option value="6161">Đường Số 2 - Q Tân Bình</option><option value="6162">Đường Số 3 - Q Tân Bình</option><option value="6163">Đường Số 4 - Q Tân Bình</option><option value="6164">Đường Số 5 - Q Tân Bình</option><option value="6165">Đường Số 6 - Q Tân Bình</option><option value="6166">Đường Số 7 - Q Tân Bình</option><option value="6167">Đường Tổ 46-p10 - Q Tân Bình</option><option value="6168">Dương Vân Nga - Q Tân Bình</option><option value="6169">Duy Tân - Q Tân Bình</option><option value="6170">Giải Phóng - Q Tân Bình</option><option value="6171">Gò Cẩm Đệm - Q Tân Bình</option><option value="6172">Hà Bá Tường - Q Tân Bình</option><option value="6173">Hà Bá Tuyển - Q Tân Bình</option><option value="6174">Hát Giang - Q Tân Bình</option><option value="6175">Hậu Giang - Q Tân Bình</option><option value="6176">Hiệp Nhất - Q Tân Bình</option><option value="6177">Hoà Hiệp - Q Tân Bình</option><option value="6178">Hoàng Bật Đạt - Q Tân Bình</option><option value="6179">Hoàng Hoa Thám - Q Tân Bình</option><option value="6180">Hoàng Kế Viêm (c21) - Q Tân Bình</option><option value="6181">Hoàng Sa - Q Tân Bình</option><option value="6182">Hoàng Văn Thụ - Q Tân Bình</option><option value="6183">Hoàng Việt - Q Tân Bình</option><option value="6184">Hồng Hà - Q Tân Bình</option><option value="6185">Hồng Lạc - Q Tân Bình</option><option value="6186">Hồng Lạc (hương Lộ 2) - Q Tân Bình</option><option value="6187">Hưng Hoá - Q Tân Bình</option><option value="6188">Huỳnh Lan Khanh - Q Tân Bình</option><option value="6189">Huỳnh Tịnh Của - Q Tân Bình</option><option value="6190">Huỳnh Văn Nghệ - Q Tân Bình</option><option value="6191">Khai Quang - Q Tân Bình</option><option value="6192">Khai Trí - Q Tân Bình</option><option value="6193">Lạc Long Quân - Q Tân Bình</option><option value="6194">Lam Sơn - Q Tân Bình</option><option value="6195">Lê Bình - Q Tân Bình</option><option value="6196">Lê Duy Nhuận (c28) - Q Tân Bình</option><option value="6197">Lê Lai - Q Tân Bình</option><option value="6198">Lê Lợi - Q Tân Bình</option><option value="6199">Lê Minh Xuân - Q Tân Bình</option><option value="6200">Lê Ngân - Q Tân Bình</option><option value="6201">Lê Tấn Quốc - Q Tân Bình</option><option value="6202">Lê Trung Nghĩa (c26) - Q Tân Bình</option><option value="6203">Lê Văn Huân - Q Tân Bình</option><option value="6204">Lê Văn Sỹ - Q Tân Bình</option><option value="6205">Lộc Hưng - Q Tân Bình</option><option value="6206">Lộc Vinh - Q Tân Bình</option><option value="6207">Long Hưng - Q Tân Bình</option><option value="6208">Lưu Nhân Chú - Q Tân Bình</option><option value="6209">Lý Thường Kiệt - Q Tân Bình</option><option value="6210">Mai Lão Bạng - Q Tân Bình</option><option value="6211">Năm Châu - Q Tân Bình</option><option value="6212">Nghĩa Hoà - Q Tân Bình</option><option value="6213">Nghĩa Hưng - Q Tân Bình</option><option value="6214">Nghĩa Phát - Q Tân Bình</option><option value="6215">Ngô Bệ - Q Tân Bình</option><option value="6216">Ngô Thị Thu Minh - Q Tân Bình</option><option value="6217">Ngự Bình - Q Tân Bình</option><option value="6218">Nguyễn Bá Tòng - Q Tân Bình</option><option value="6219">Nguyễn Bá Tuyển (c29) - Q Tân Bình</option><option value="6220">Nguyễn Bặc - Q Tân Bình</option><option value="6221">Nguyễn Cảnh Dị - Q Tân Bình</option><option value="6222">Nguyễn Chánh Sắt - Q Tân Bình</option><option value="6223">Nguyễn Đình Khơi - Q Tân Bình</option><option value="6224">Nguyễn Đức Thuận - Q Tân Bình</option><option value="6225">Nguyễn Hiến Lê - Q Tân Bình</option><option value="6226">Nguyễn Hồng Đào - Q Tân Bình</option><option value="6227">Nguyễn Minh Hoàng (c25) - Q Tân Bình</option><option value="6228">Nguyễn Phúc Chu - Q Tân Bình</option><option value="6229">Nguyễn Quang Bích(b4) - Q Tân Bình</option><option value="944474">Nguyễn Sáng - Q Tân Bình</option><option value="6230">Nguyễn Sỹ Sách - Q Tân Bình</option><option value="6231">Nguyễn Thái Bình - Q Tân Bình</option><option value="1450143">Nguyễn Thái Học - Q Tân Bình</option><option value="6232">Nguyễn Thanh Tuyền - Q Tân Bình</option><option value="6233">Nguyễn Thế Lộc - Q Tân Bình</option><option value="6234">Nguyễn Thị Nhỏ - Q Tân Bình</option><option value="6235">Nguyễn Trọng Lội - Q Tân Bình</option><option value="6236">Nguyễn Trọng Tuyển - Q Tân Bình</option><option value="6237">Nguyễn Tử Nha - Q Tân Bình</option><option value="6238">Nguyễn Văn Mại - Q Tân Bình</option><option value="6239">Nguyễn Văn Trỗi - Q Tân Bình</option><option value="6240">Nguyễn Văn Vĩ - Q Tân Bình</option><option value="6241">Nguyễn Văn Vĩnh - Q Tân Bình</option><option value="108677">Nguyễn Văn Vỹ - Q Tân Bình</option><option value="6242">Nhất Chi Mai - Q Tân Bình</option><option value="6243">Ni Sư Huỳnh Liên - Q Tân Bình</option><option value="6244">Núi Thành - Q Tân Bình</option><option value="6245">Phạm Cự Lượng - Q Tân Bình</option><option value="6246">Phạm Hồng Thái - Q Tân Bình</option><option value="6247">Phạm Phú Thứ - Q Tân Bình</option><option value="6248">Phạm Văn Bạch - Q Tân Bình</option><option value="6249">Phạm Văn Hai - Q Tân Bình</option><option value="6250">Phan Bá Phiến - Q Tân Bình</option><option value="6251">Phan Đình Giót - Q Tân Bình</option><option value="6252">Phan Huy Ích - Q Tân Bình</option><option value="6253">Phan Sào Nam - Q Tân Bình</option><option value="6254">Phan Thúc Duyện - Q Tân Bình</option><option value="6255">Phan Văn Lâu - Q Tân Bình</option><option value="6256">Phan Văn Sửu - Q Tân Bình</option><option value="6257">Phổ Quang - Q Tân Bình</option><option value="6258">Phú Hoà - Q Tân Bình</option><option value="6259">Phú Lộc - Q Tân Bình</option><option value="6260">Quách Văn Tuấn - Q Tân Bình</option><option value="6261">Quảng Hiền - Q Tân Bình</option><option value="6262">Sầm Sơn - Q Tân Bình</option><option value="6263">Sao Mai - Q Tân Bình</option><option value="6264">Sơn Cang - Q Tân Bình</option><option value="6265">Sơn Hưng - Q Tân Bình</option><option value="6266">Sông Đà - Q Tân Bình</option><option value="6267">Sông Đáy - Q Tân Bình</option><option value="6268">Sông Nhuệ - Q Tân Bình</option><option value="6269">Sông Thao - Q Tân Bình</option><option value="6270">Sông Thương - Q Tân Bình</option><option value="6271">Tái Thiết - Q Tân Bình</option><option value="6272">Tân Canh - Q Tân Bình</option><option value="6273">Tân Châu - Q Tân Bình</option><option value="6274">Tân Hải - Q Tân Bình</option><option value="6275">Tân Khai - Q Tân Bình</option><option value="6276">Tân Kỳ Tân Quí - Q Tân Bình</option><option value="6277">Tân Lập - Q Tân Bình</option><option value="6278">Tân Phước - Q Tân Bình</option><option value="1588184">Tân Sơn - Q Tân Bình</option><option value="6279">Tân Sơn Hoà - Q Tân Bình</option><option value="6280">Tân Tạo - Q Tân Bình</option><option value="6281">Tân Thọ - Q Tân Bình</option><option value="6282">Tân Tiến - Q Tân Bình</option><option value="6283">Tân Trang - Q Tân Bình</option><option value="6284">Tân Trụ - Q Tân Bình</option><option value="6285">Tản Viên - Q Tân Bình</option><option value="6286">Tân Xuân - Q Tân Bình</option><option value="6287">Thái Thị Nhạn - Q Tân Bình</option><option value="6288">Thân Nhân Trung - Q Tân Bình</option><option value="6289">Thăng Long - Q Tân Bình</option><option value="6290">Thành Mỹ - Q Tân Bình</option><option value="6291">Thép Mới - Q Tân Bình</option><option value="6292">Thích Minh Nguyệt - Q Tân Bình</option><option value="6293">Thiên Phước - Q Tân Bình</option><option value="6294">Thủ Khoa Huân - Q Tân Bình</option><option value="6295">Tiền Giang - Q Tân Bình</option><option value="6296">Tống Văn Hên - Q Tân Bình</option><option value="6297">Trà Khúc - Q Tân Bình</option><option value="6298">Trần Mai Ninh - Q Tân Bình</option><option value="6299">Trần Quốc Hoàn - Q Tân Bình</option><option value="6300">Trần Thái Tông - Q Tân Bình</option><option value="6301">Trần Thánh Tông - Q Tân Bình</option><option value="6302">Trần Triệu Luật - Q Tân Bình</option><option value="6303">Trần Văn Danh - Q Tân Bình</option><option value="6304">Trần Văn Dư - Q Tân Bình</option><option value="6305">Trần Văn Hoàng - Q Tân Bình</option><option value="6306">Trần Văn Quang - Q Tân Bình</option><option value="6307">Trung Lang - Q Tân Bình</option><option value="6308">Trường Chinh - Q Tân Bình</option><option value="6309">Trương Công Định - Q Tân Bình</option><option value="6310">Trương Hoàng Thanh - Q Tân Bình</option><option value="6311">Trường Sa - Q Tân Bình</option><option value="6312">Trường Sơn - Q Tân Bình</option><option value="6313">Trương Vĩnh Ký - Q Tân Bình</option><option value="6314">Tự Cường - Q Tân Bình</option><option value="6315">Tứ Hải - Q Tân Bình</option><option value="6316">Tự Lập - Q Tân Bình</option><option value="6317">Út Tịch - Q Tân Bình</option><option value="6318">Văn Chung - Q Tân Bình</option><option value="6319">Vân Côi - Q Tân Bình</option><option value="6320">Võ Thành Trang - Q Tân Bình</option><option value="6321">Vườn Lan - Q Tân Bình</option><option value="6322">Xuân Diệu - Q Tân Bình</option><option value="6323">Xuân Hồng - Q Tân Bình</option><option value="6324">Yên Thế - Q Tân Bình</option><option value="629665"> Nguyễn Thế Truyện - Q Tân Phú</option><option value="6325">30 tháng 4 - Q Tân Phú</option><option value="6326">Âu Cơ - Q Tân Phú</option><option value="6327">Bác Ái - Q Tân Phú</option><option value="6328">Bình Long - Q Tân Phú</option><option value="6329">Bùi Cẩm Hổ - Q Tân Phú</option><option value="6330">Các Đường Nối Giữa Đường Số 16 Và 20 - Q Tân Phú</option><option value="6331">Cách Mạng - Q Tân Phú</option><option value="189395">Cao Văn Ngọc - Q Tân Phú</option><option value="6332">Cầu Xéo - Q Tân Phú</option><option value="901324">Cây Keo - Q Tân Phú</option><option value="6333">Chân Lý - Q Tân Phú</option><option value="6334">Chế Lan Viên - Q Tân Phú</option><option value="6335">Chu Thiên - Q Tân Phú</option><option value="6336">Chu Văn An - Q Tân Phú</option><option value="6337">cn13 - Q Tân Phú</option><option value="6338">Cộng Hoà 3 - Q Tân Phú</option><option value="6339">Đàm Thận Huy - Q Tân Phú</option><option value="6340">Dân Chủ - Q Tân Phú</option><option value="6341">Dân Tộc - Q Tân Phú</option><option value="6342">dc8 - Q Tân Phú</option><option value="1666301">Diệp Minh Châu - Q Tân Phú</option><option value="6343">Đinh Liệt - Q Tân Phú</option><option value="6344">Đỗ Bí - Q Tân Phú</option><option value="6345">Đỗ Công Tường - Q Tân Phú</option><option value="6346">Đô Đốc Chấn - Q Tân Phú</option><option value="6347">Đô Đốc Lộc - Q Tân Phú</option><option value="6348">Đô Đốc Long - Q Tân Phú</option><option value="6349">Đô Đốc Thủ - Q Tân Phú</option><option value="6350">Đỗ Đức Dục - Q Tân Phú</option><option value="6351">Đỗ Nhuận - Q Tân Phú</option><option value="6352">Đỗ Thị Tâm - Q Tân Phú</option><option value="6353">Đỗ Thừa Luông - Q Tân Phú</option><option value="6354">Đỗ Thừa Tự - Q Tân Phú</option><option value="6355">Đoàn Giỏi - Q Tân Phú</option><option value="6356">Đoàn Hồng Phước - Q Tân Phú</option><option value="6357">Đoàn Kết - Q Tân Phú</option><option value="6358">Độc Lập - Q Tân Phú</option><option value="6359">Đường 30/4 - Q Tân Phú</option><option value="819646">Đường A - Q Tân Phú</option><option value="6360">Đường B1 - Q Tân Phú</option><option value="6361">Đường B2 - Q Tân Phú</option><option value="6362">Đường B3 - Q Tân Phú</option><option value="6363">Đường B4 - Q Tân Phú</option><option value="6364">Đường Bờ Bao Tân Thắng - Q Tân Phú</option><option value="6365">Đường C1 - Q Tân Phú</option><option value="6366">Đường C4 - Q Tân Phú</option><option value="6367">Đường C4a - Q Tân Phú</option><option value="6368">Đường C5 - Q Tân Phú</option><option value="6369">Đường C6 - Q Tân Phú</option><option value="6370">Đường C6a - Q Tân Phú</option><option value="6371">Đường C7 - Q Tân Phú</option><option value="6372">Đường C8 - Q Tân Phú</option><option value="6373">Đường Cây Keo - Q Tân Phú</option><option value="6374">Đường Cc1 - Q Tân Phú</option><option value="6375">Đường Cc2 - Q Tân Phú</option><option value="6376">Đường Cc3 - Q Tân Phú</option><option value="6377">Đường Cc4 - Q Tân Phú</option><option value="6378">Đường Cc5 - Q Tân Phú</option><option value="6379">Đường Cn1 - Q Tân Phú</option><option value="6380">Đường Cn11 - Q Tân Phú</option><option value="6381">Đường Cn6 - Q Tân Phú</option><option value="6382">Đường D10 - Q Tân Phú</option><option value="6383">Đường D11 - Q Tân Phú</option><option value="6384">Đường D12 - Q Tân Phú</option><option value="6385">Đường D13 - Q Tân Phú</option><option value="6386">Đường D14a - Q Tân Phú</option><option value="6387">Đường D14b - Q Tân Phú</option><option value="6388">Đường D15 - Q Tân Phú</option><option value="6389">Đường D16 - Q Tân Phú</option><option value="6390">Đường D9 - Q Tân Phú</option><option value="6391">Đường Dc1 - Q Tân Phú</option><option value="6392">Đường Dc11 - Q Tân Phú</option><option value="6393">Đường Dc3 - Q Tân Phú</option><option value="6394">Đường Dc4 - Q Tân Phú</option><option value="6395">Đường Dc5 - Q Tân Phú</option><option value="6396">Đường Dc7 - Q Tân Phú</option><option value="6397">Đường Dc9 - Q Tân Phú</option><option value="6398">Đường Điện Cao Thế - Q Tân Phú</option><option value="6399">Dương Đức Hiền - Q Tân Phú</option><option value="6400">Đường Hướng Đông Chợ Sơn Kỳ - Q Tân Phú</option><option value="6401">Đường Kênh 19/5 - Q Tân Phú</option><option value="6403">Dương Khuê - Q Tân Phú</option><option value="811696">Dương Minh Châu - Q Tân Phú</option><option value="6404">Đường Nối Tân Sơn Nhì- Trương Vĩnh Ký - Q Tân Phú</option><option value="6405">Đường S1 - Q Tân Phú</option><option value="6406">Đường S11 - Q Tân Phú</option><option value="6407">Đường S3 - Q Tân Phú</option><option value="6408">Đường S5 - Q Tân Phú</option><option value="6409">Đường S7 - Q Tân Phú</option><option value="6410">Đường S9 - Q Tân Phú</option><option value="6411">Đường Số 1 - Q Tân Phú</option><option value="6412">Đường Số 18 (p.tân Quý) - Q Tân Phú</option><option value="6413">Đường Số 19 (p.tân Quý) - Q Tân Phú</option><option value="6414">Đường Số 2 - Q Tân Phú</option><option value="6415">Đường Số 27 (p.sơn Kỳ) - Q Tân Phú</option><option value="6416">Đường Số 3 - Q Tân Phú</option><option value="968287">Đường số 41 - Q Tân Phú</option><option value="6417">Đường T1 - Q Tân Phú</option><option value="6418">Đường T4a - Q Tân Phú</option><option value="6419">Đường T4b - Q Tân Phú</option><option value="6420">Đường T6 - Q Tân Phú</option><option value="734576">Dương Thiệu Tước - Q Tân Phú</option><option value="6421">Đường Tổ 46 - Q Tân Phú</option><option value="6422">Đường Tổ 48 - Q Tân Phú</option><option value="6423">Đường Trước Trường Ptth Tân Bình - Q Tân Phú</option><option value="6424">Dương Văn Dương - Q Tân Phú</option><option value="6425">Gò Dầu - Q Tân Phú</option><option value="6426">Hàn Mặc Tử - Q Tân Phú</option><option value="6427">Hành Lang Bảo Vệ Nhánh Phụ Kênh Nước Đen - Q Tân Phú</option><option value="6428">Hiền Vương - Q Tân Phú</option><option value="6429">Hồ Đắc Di - Q Tân Phú</option><option value="6430">Hồ Ngọc Cẩn - Q Tân Phú</option><option value="6431">Hòa Bình - Q Tân Phú</option><option value="6432">Hoàng Ngọc Phách - Q Tân Phú</option><option value="6433">Hoàng Thiều Hoa - Q Tân Phú</option><option value="6434">Hoàng Văn Hoè - Q Tân Phú</option><option value="1648427">Hoàng Xuân Hoành - Q Tân Phú</option><option value="6435">Hoàng Xuân Nhị - Q Tân Phú</option><option value="6436">hương lộ 3 - Q Tân Phú</option><option value="6437">Huỳnh Thiện Lộc - Q Tân Phú</option><option value="6438">Huỳnh Văn Chính - Q Tân Phú</option><option value="275137">Huỳnh Văn Gấm - Q Tân Phú</option><option value="6439">Huỳnh Văn Một - Q Tân Phú</option><option value="6440">Ích Thiện - Q Tân Phú</option><option value="6402">Kênh Tân Hoá - Q Tân Phú</option><option value="6441">Khuông Việt - Q Tân Phú</option><option value="6442">Lê Cảnh Tuân - Q Tân Phú</option><option value="6443">Lê Cao Lãng - Q Tân Phú</option><option value="6444">lê đại - Q Tân Phú</option><option value="6445">Lê Đình Thám - Q Tân Phú</option><option value="6446">Lê Khôi - Q Tân Phú</option><option value="6447">Lê Lâm - Q Tân Phú</option><option value="6448">Lê Lăng - Q Tân Phú</option><option value="6449">Lê Liễu - Q Tân Phú</option><option value="6450">Lê Lộ - Q Tân Phú</option><option value="6451">Lê Lư - Q Tân Phú</option><option value="6452">Lê Ngã - Q Tân Phú</option><option value="571283">Lê Nghĩa - Q Tân Phú</option><option value="6453">Lê Niệm - Q Tân Phú</option><option value="6454">Lê Quang Chiểu - Q Tân Phú</option><option value="6455">Lê Quốc Trinh - Q Tân Phú</option><option value="6456">Lê Sao - Q Tân Phú</option><option value="6457">Lê Sát - Q Tân Phú</option><option value="6458">Lê Thiệt - Q Tân Phú</option><option value="6459">Lê Thúc Hoạch - Q Tân Phú</option><option value="6460">Lê Trọng Tấn - Q Tân Phú</option><option value="6461">Lê Trung Đình - Q Tân Phú</option><option value="6462">Lê Văn Phan - Q Tân Phú</option><option value="6463">Lê Vĩnh Hoà - Q Tân Phú</option><option value="6464">Lương Đắc Bằng - Q Tân Phú</option><option value="6465">Lương Minh Nguyệt - Q Tân Phú</option><option value="6466">Lương Thế Vinh - Q Tân Phú</option><option value="6467">Lương Trúc Đàm - Q Tân Phú</option><option value="178843">Lưu Chí Hiếu - Q Tân Phú</option><option value="6468">Lũy Bán Bích - Q Tân Phú</option><option value="6469">Lý Thái Tông - Q Tân Phú</option><option value="6470">Lý Thánh Tông - Q Tân Phú</option><option value="6471">Lý Tuệ - Q Tân Phú</option><option value="6472">Nghiêm Toản - Q Tân Phú</option><option value="275132">Nghụy Như KonTum - Q Tân Phú</option><option value="6473">Ngô Quyền - Q Tân Phú</option><option value="6474">Nguyễn Bá Tòng - Q Tân Phú</option><option value="6475">Nguyễn Chích - Q Tân Phú</option><option value="6476">Nguyễn Cửu Đàm - Q Tân Phú</option><option value="6477">Nguyễn Dữ - Q Tân Phú</option><option value="1708377">Nguyễn Háo Vĩnh - Q Tân Phú</option><option value="6478">Nguyễn Hậu - Q Tân Phú</option><option value="6479">Nguyễn Hữu Dật - Q Tân Phú</option><option value="6480">Nguyễn Hữu Tiến - Q Tân Phú</option><option value="6481">Nguyễn Lộ Trạch - Q Tân Phú</option><option value="6482">Nguyễn Lý - Q Tân Phú</option><option value="6483">Nguyễn Minh Châu - Q Tân Phú</option><option value="6484">Nguyễn Mỹ Ca - Q Tân Phú</option><option value="6485">nguyễn nghiêm - Q Tân Phú</option><option value="6486">Nguyễn Ngọc Nhựt - Q Tân Phú</option><option value="6487">Nguyễn Nhữ Lãm - Q Tân Phú</option><option value="275138">Nguyễn Quang Diệu - Q Tân Phú</option><option value="174891">Nguyễn Quý Anh - Q Tân Phú</option><option value="6488">Nguyễn Sơn - Q Tân Phú</option><option value="6489">Nguyễn Súy - Q Tân Phú</option><option value="6490">Nguyễn Thái Học - Q Tân Phú</option><option value="6491">Nguyễn Trường Tộ - Q Tân Phú</option><option value="6492">Nguyễn Văn Dưỡng - Q Tân Phú</option><option value="6493">Nguyễn Văn Huyên - Q Tân Phú</option><option value="6494">Nguyễn Văn Linh - Q Tân Phú</option><option value="6495">Nguyễn Văn Ngọc - Q Tân Phú</option><option value="6496">Nguyễn Văn Săng - Q Tân Phú</option><option value="6497">Nguyễn Văn Tố - Q Tân Phú</option><option value="618992">Nguyễn Văn Vịnh - Q Tân Phú</option><option value="1648428">Nguyễn Văn Yến - Q Tân Phú</option><option value="6498">Nguyễn Xuân Khoát - Q Tân Phú</option><option value="6499">Nhánh Đường Lý Tuệ - Q Tân Phú</option><option value="6500">nhiêu lộc - Q Tân Phú</option><option value="6501">Phạm Ngọc - Q Tân Phú</option><option value="1600244">Phạm Ngọc Thảo - Q Tân Phú</option><option value="6502">Phạm Quý Thích - Q Tân Phú</option><option value="6503">Phạm Vấn - Q Tân Phú</option><option value="6504">Phạm Văn Xảo - Q Tân Phú</option><option value="6505">Phan Anh - Q Tân Phú</option><option value="6506">Phan Chu Trinh - Q Tân Phú</option><option value="6507">Phan Đình Phùng - Q Tân Phú</option><option value="6508">Phan Văn Năm - Q Tân Phú</option><option value="6509">Phú Thọ Hoà - Q Tân Phú</option><option value="6510">Phùng Chí Kiên - Q Tân Phú</option><option value="6511">Quách Đình Bảo - Q Tân Phú</option><option value="6512">Quách Hữu Nghiêm - Q Tân Phú</option><option value="6513">Quách Vũ - Q Tân Phú</option><option value="6514">Sơn Kỳ - Q Tân Phú</option><option value="6515">Tân Hương - Q Tân Phú</option><option value="6516">Tân Kỳ Tân Quý - Q Tân Phú</option><option value="6517">Tân Quý - Q Tân Phú</option><option value="6518">Tân Sơn Nhì - Q Tân Phú</option><option value="6519">Tân Thành - Q Tân Phú</option><option value="6520">Tây Sơn - Q Tân Phú</option><option value="6521">Tây Thạnh - Q Tân Phú</option><option value="6522">Thạch Lam - Q Tân Phú</option><option value="6523">Thẩm Mỹ - Q Tân Phú</option><option value="6524">Thành Công - Q Tân Phú</option><option value="6525">Thoại Ngọc Hầu - Q Tân Phú</option><option value="6526">Thống Nhất - Q Tân Phú</option><option value="6527">Tô Hiệu - Q Tân Phú</option><option value="6528">Trần Hưng Đạo - Q Tân Phú</option><option value="6529">Trần Quang Cơ - Q Tân Phú</option><option value="6530">Trần Tấn - Q Tân Phú</option><option value="6531">Trần Thủ Độ - Q Tân Phú</option><option value="698684">Trần Văn Cẩn - Q Tân Phú</option><option value="6532">Trần Văn Giáp - Q Tân Phú</option><option value="6533">Trần Văn Ơn - Q Tân Phú</option><option value="6534">Trịnh Đình Thảo - Q Tân Phú</option><option value="6535">Trịnh Đình Trọng - Q Tân Phú</option><option value="6536">Trịnh Lỗi - Q Tân Phú</option><option value="6537">Trường Chinh - Q Tân Phú</option><option value="6538">Trương Vân Lĩnh - Q Tân Phú</option><option value="6539">Trương Vĩnh Ký - Q Tân Phú</option><option value="6540">Tự Do 1 - Q Tân Phú</option><option value="6541">Tự Quyết - Q Tân Phú</option><option value="6542">Văn Cao - Q Tân Phú</option><option value="1666288">Võ Công Tồn - Q Tân Phú</option><option value="6543">Võ Hoành - Q Tân Phú</option><option value="6544">Võ Văn Dũng - Q Tân Phú</option><option value="6545">Vũ Trọng Phụng - Q Tân Phú</option><option value="6546">Vườn Lài - Q Tân Phú</option><option value="6547">Ỷ Lan - Q Tân Phú</option><option value="6548">Yên Đỗ - Q Tân Phú</option><option value="140878">Bà Giang - Q. Thủ Đức</option><option value="140883">Bác Ái - Q. Thủ Đức</option><option value="6549">Bình Chiểu - Q. Thủ Đức</option><option value="6559">Bình Phú - Q. Thủ Đức</option><option value="6550">Bồi Hoàn - Q. Thủ Đức</option><option value="6564">Cầu Bà Cả - Q. Thủ Đức</option><option value="6551">Cây Keo - Q. Thủ Đức</option><option value="6552">Chương Dương - Q. Thủ Đức</option><option value="6561">Chuông Tre - Q. Thủ Đức</option><option value="6553">Dân Chủ(Phường Bình Thọ) - Q. Thủ Đức</option><option value="6554">Đặng Thị Rành - Q. Thủ Đức</option><option value="6555">Đặng Văn Bi - Q. Thủ Đức</option><option value="6556">Đào Trinh Nhất - Q. Thủ Đức</option><option value="6557">Đoàn Công Hớn - Q. Thủ Đức</option><option value="140917">Đoàn Kết - Q. Thủ Đức</option><option value="6558">Đường 24 - Q. Thủ Đức</option><option value="6560">Đường Số 1 - Q. Thủ Đức</option><option value="1191675">Đường số 10 - Q. Thủ Đức</option><option value="6562">Đường Số 11 - Q. Thủ Đức</option><option value="6563">Đường Số 11,(Phường Trường Thọ) - Q. Thủ Đức</option><option value="6565">Đường Số 12,Phường Linh Tây - Q. Thủ Đức</option><option value="6566">Đường Số 12-Phường Trường Thọ - Q. Thủ Đức</option><option value="6567">Đường Số 13-Phường Linh Xuân - Q. Thủ Đức</option><option value="140923">Đường số 14 - Q. Thủ Đức</option><option value="140926">Đường số 15 - Q. Thủ Đức</option><option value="6568">Đường Số 16,Phường Linh Trung - Q. Thủ Đức</option><option value="6569">Đường Số 16-Phường Linh Chiểu - Q. Thủ Đức</option><option value="895227">Đường số 17 - Q. Thủ Đức</option><option value="6570">Đường Số 17,Phường Hiệp Bình Phước - Q. Thủ Đức</option><option value="6571">Đường Số 17,Phường Linh Chiểu - Q. Thủ Đức</option><option value="6572">Đường Số 17,Phường Linh Trung - Q. Thủ Đức</option><option value="671710">Đường số 18, P.Hiệp Bình Chánh - Q. Thủ Đức</option><option value="6573">Đường Số 18-Phường Linh Trung - Q. Thủ Đức</option><option value="6574">Đường Số 19,Phường Hiệp Bình Chánh - Q. Thủ Đức</option><option value="774736">Đường số 2 - Q. Thủ Đức</option><option value="6575">Đường Số 2(Phường Linh Trung) - Q. Thủ Đức</option><option value="6576">Đường Số 2,Phường Hiệp Bình Chánh - Q. Thủ Đức</option><option value="140927">Đường số 20 - Q. Thủ Đức</option><option value="140928">Đường số 21 - Q. Thủ Đức</option><option value="140929">Đường số 22 - Q. Thủ Đức</option><option value="140930">Đường số 23 - Q. Thủ Đức</option><option value="140931">Đường số 24 - Q. Thủ Đức</option><option value="140932">Đường số 25 - Q. Thủ Đức</option><option value="140934">Đường số 26 - Q. Thủ Đức</option><option value="140935">Đường số 27 - Q. Thủ Đức</option><option value="6577">Đường Số 27,Phường Hiệp Bình Chánh - Q. Thủ Đức</option><option value="140936">Đường số 28 - Q. Thủ Đức</option><option value="140937">Đường số 29 - Q. Thủ Đức</option><option value="6580">Đường Số 3 - Q. Thủ Đức</option><option value="6578">Đường số 3 (P. Hiệp Bình Phước) - Q. Thủ Đức</option><option value="6579">Đường số 3(Đường Chữ U),Phường Linh Xuân - Q. Thủ Đức</option><option value="140938">Đường số 30 - Q. Thủ Đức</option><option value="140939">Đường số 31 - Q. Thủ Đức</option><option value="140940">Đường số 32 - Q. Thủ Đức</option><option value="140941">Đường số 33 - Q. Thủ Đức</option><option value="140942">Đường số 34 - Q. Thủ Đức</option><option value="6581">Đường Số 35 - Q. Thủ Đức</option><option value="6582">Đường Số 36 - Q. Thủ Đức</option><option value="140957">Đường số 37 - Q. Thủ Đức</option><option value="6583">Đường Số 38 - Q. Thủ Đức</option><option value="140958">Đường số 39 - Q. Thủ Đức</option><option value="6584">Đường Số 3-Phường Linh Trung - Q. Thủ Đức</option><option value="6585">Đường Số 4 - Q. Thủ Đức</option><option value="6586">Đường Số 4,Phường Linh Xuân - Q. Thủ Đức</option><option value="6587">Đường Số 4,Phường Trường Thọ - Q. Thủ Đức</option><option value="140959">Đường số 40 - Q. Thủ Đức</option><option value="140960">Đường số 41 - Q. Thủ Đức</option><option value="140961">Đường số 42 - Q. Thủ Đức</option><option value="140962">Đường số 43 - Q. Thủ Đức</option><option value="140963">Đường số 44 - Q. Thủ Đức</option><option value="140964">Đường số 45 - Q. Thủ Đức</option><option value="140965">Đường số 46 - Q. Thủ Đức</option><option value="140966">Đường số 47 - Q. Thủ Đức</option><option value="140967">Đường số 48 - Q. Thủ Đức</option><option value="140968">Đường số 49 - Q. Thủ Đức</option><option value="6588">Đường Số 4-Phường Linh Trung - Q. Thủ Đức</option><option value="124972">Đường số 5 - Q. Thủ Đức</option><option value="140877">Đường Số 5 (Bà Giang) - Q. Thủ Đức</option><option value="6589">Đường Số 5(Bà Giang) - Q. Thủ Đức</option><option value="140970">Đường số 50 - Q. Thủ Đức</option><option value="140971">Đường số 51 - Q. Thủ Đức</option><option value="140972">Đường số 52 - Q. Thủ Đức</option><option value="140973">Đường số 53 - Q. Thủ Đức</option><option value="6590">Đường số 6 P.Trường Thọ - Q. Thủ Đức</option><option value="6591">Đường số 6 phường rường Thọ - Q. Thủ Đức</option><option value="671674">Đường số 6, P.Hiệp Bình Phước - Q. Thủ Đức</option><option value="6592">Đường Số 6,Phường Linh Chiểu - Q. Thủ Đức</option><option value="6593">Đường Số 6,Phường Linh Trung - Q. Thủ Đức</option><option value="6594">Đường Số 6-Phường Linh Xuân - Q. Thủ Đức</option><option value="6597">Đường Số 7 - Q. Thủ Đức</option><option value="6595">Đường Số 7,Phường Linh Trung - Q. Thủ Đức</option><option value="6596">Đường Số 7-Phường Linh Xuân - Q. Thủ Đức</option><option value="6598">Đường Số 8 - Q. Thủ Đức</option><option value="6599">Đường Số 8(Phường Trường Thọ) - Q. Thủ Đức</option><option value="6600">Đường Số 8,Phường Linh Trung - Q. Thủ Đức</option><option value="6601">Đường Số 9(Phường Trường Thọ) - Q. Thủ Đức</option><option value="6602">Đường Số 9,Phường Linh Tây - Q. Thủ Đức</option><option value="6603">Đường Số 9,Phường Tam Bình - Q. Thủ Đức</option><option value="6604">Đường Số 9-Phường Linh Trung - Q. Thủ Đức</option><option value="6605">Dương Văn Cam - Q. Thủ Đức</option><option value="6606">Gò Dưa(Hương Lộ 25 Phường Tam Bình) - Q. Thủ Đức</option><option value="6607">Hiệp Bình - Q. Thủ Đức</option><option value="6608">Hồ Văn Tư - Q. Thủ Đức</option><option value="140974">Hòa Bình - Q. Thủ Đức</option><option value="140975">Hoàng Diệu - Q. Thủ Đức</option><option value="6609">Hoàng Diệu 2 - Q. Thủ Đức</option><option value="140976">Hữu Nghị - Q. Thủ Đức</option><option value="6610">Kha Vạn Cân - Q. Thủ Đức</option><option value="140980">Khổng Tử - Q. Thủ Đức</option><option value="140981">Khu dân cư Tam Bình - Q. Thủ Đức</option><option value="6611">Khu Làng Đại Học (Phường Bình Thọ)  - Q. Thủ Đức</option><option value="6612">Lam Sơn - Q. Thủ Đức</option><option value="140982">Lê Quý Đôn - Q. Thủ Đức</option><option value="1391638">Lê Thị Hoa - Q. Thủ Đức</option><option value="6613">Lê Thị Hoa,Phường Bình Chiểu - Q. Thủ Đức</option><option value="6614">Lê Văn Chí - Q. Thủ Đức</option><option value="6615">Lê Văn Ninh - Q. Thủ Đức</option><option value="6616">Lê Văn Tách - Q. Thủ Đức</option><option value="6617">Linh Đông - Q. Thủ Đức</option><option value="6618">Linh Trung - Q. Thủ Đức</option><option value="6619">Lý Tế Xuyên - Q. Thủ Đức</option><option value="6620">Ngô Chí Quốc - Q. Thủ Đức</option><option value="6621">Nguyễn Văn Bá(Phường Bình Thọ,Trường Thọ) - Q. Thủ Đức</option><option value="6622">Nguyễn Văn Lịch - Q. Thủ Đức</option><option value="861243">Phạm Văn Đồng - Q. Thủ Đức</option><option value="6623">Phú Châu - Q. Thủ Đức</option><option value="666867">Quốc lộ 1(Xa Lộ Đại Hàn)  - Q. Thủ Đức</option><option value="6625">Quốc Lộ 13 - Q. Thủ Đức</option><option value="6624">Quốc Lộ 13 Cũ - Q. Thủ Đức</option><option value="6626">Quốc Lộ 1A - Q. Thủ Đức</option><option value="6627">Quốc Lộ 1K(Kha Vạn Cân Cũ) - Q. Thủ Đức</option><option value="140997">Quy Đức - Q. Thủ Đức</option><option value="140998">Rạch Lùng - Q. Thủ Đức</option><option value="6628">Tam Bình - Q. Thủ Đức</option><option value="6629">Tam Châu(Tam Phú-Tam Bình) - Q. Thủ Đức</option><option value="6630">Tam Hà - Q. Thủ Đức</option><option value="6631">Thống Nhất(Phường Bình Thọ) - Q. Thủ Đức</option><option value="141000">Tỉnh lộ 42 - Q. Thủ Đức</option><option value="6632">Tỉnh Lộ 43 - Q. Thủ Đức</option><option value="141001">Tỉnh lộ 44 - Q. Thủ Đức</option><option value="6633">Tô Ngọc Vân - Q. Thủ Đức</option><option value="6634">Tô Vĩnh Diện - Q. Thủ Đức</option><option value="6635">Trần Văn Nữa(Ngô Quyền) - Q. Thủ Đức</option><option value="141002">Trịnh Phong Đán - Q. Thủ Đức</option><option value="6636">Trường Thọ - Q. Thủ Đức</option><option value="141003">Truông Tre - Q. Thủ Đức</option><option value="6637">Trương Văn Ngư - Q. Thủ Đức</option><option value="141004">Ụ Ghe - Q. Thủ Đức</option><option value="6638">Võ Văn Ngân - Q. Thủ Đức</option><option value="1192301">Xa Lộ Hà Nội - Q. Thủ Đức</option><option value="6639">Xa Lộ Hà Nội(Quốc Lộ 52) - Q. Thủ Đức</option><option value="141006">Xuân Hiệp - Q. Thủ Đức</option><option value="6640">An Hạ - Q. Bình Chánh</option><option value="140818">An Phú Tây - Q. Bình Chánh</option><option value="6641">An Phú Tây-Hưng Long - Q. Bình Chánh</option><option value="6642">Bà Cả - Q. Bình Chánh</option><option value="6643">Bà Điểm - Q. Bình Chánh</option><option value="6644">Bà Thao - Q. Bình Chánh</option><option value="6645">Bàu Gốc - Q. Bình Chánh</option><option value="6646">Bến Lội - Q. Bình Chánh</option><option value="6647">Bình Hưng - Q. Bình Chánh</option><option value="6648">Bình Minh - Q. Bình Chánh</option><option value="6649">Bình Trường - Q. Bình Chánh</option><option value="6650">Bờ Huệ - Q. Bình Chánh</option><option value="6651">Bông Văn Dĩa - Q. Bình Chánh</option><option value="6652">Bùi Thanh Khiết - Q. Bình Chánh</option><option value="6653">Bùi Văn Sự - Q. Bình Chánh</option><option value="6654">Cái Trung - Q. Bình Chánh</option><option value="6655">Cao Tốc Hồ Chí Minh-Trung Lương - Q. Bình Chánh</option><option value="6656">Cây Bàng - Q. Bình Chánh</option><option value="6657">Cây Cám (Vĩnh Lộc B) - Q. Bình Chánh</option><option value="140828">Chánh Hưng - Q. Bình Chánh</option><option value="140829">Cư xá Phồn Vinh - Q. Bình Chánh</option><option value="6658">Đa Phước - Q. Bình Chánh</option><option value="140830">Đại lộ Đông Tây - Q. Bình Chánh</option><option value="6659">Dân Công Hỏa Tiến - Q. Bình Chánh</option><option value="140831">Đê Rạch Ông Đồ - Q. Bình Chánh</option><option value="6660">Đê Ranh Long An - Q. Bình Chánh</option><option value="6661">Đê Số 2 (Tân Nhựt) - Q. Bình Chánh</option><option value="6662">Đinh Đức Thiện - Q. Bình Chánh</option><option value="140832">Đoàn Nguyễn Tuân - Q. Bình Chánh</option><option value="6663">Đướng 11A,Khu Dân Cư Him Lam 6A - Q. Bình Chánh</option><option value="6664">Đường 13A,Khu Dân Cư Him Lam 6A - Q. Bình Chánh</option><option value="6665">Đường 18B - Q. Bình Chánh</option><option value="6666">Đường 1A (Công Nghệ Mới) - Q. Bình Chánh</option><option value="6667">Đường 4B (Đa Phước) - Q. Bình Chánh</option><option value="6668">Đường 6A - Q. Bình Chánh</option><option value="6669">Đường Ấp 1 - Q. Bình Chánh</option><option value="6670">Đường Ấp 2 (An Phú Tây) - Q. Bình Chánh</option><option value="6671">Đường Ấp 4 (Kinh A) - Q. Bình Chánh</option><option value="6672">Đường Bảy Tấn - Q. Bình Chánh</option><option value="6673">Đường Bờ Nhà Thờ - Q. Bình Chánh</option><option value="6674">Đường Bờ Xe Lam - Q. Bình Chánh</option><option value="6675">Đường Chùa - Q. Bình Chánh</option><option value="140833">Đường Đá Đỏ - Q. Bình Chánh</option><option value="112426">Đường Đất - Q. Bình Chánh</option><option value="6676">Đường Đê Rạch Ông Đồ - Q. Bình Chánh</option><option value="6677">Dương Đình Cúc - Q. Bình Chánh</option><option value="6678">Đường Giao Thông Hào Ấp 3 - Q. Bình Chánh</option><option value="6679">Đường Kinh T11 - Q. Bình Chánh</option><option value="6680">Đường Kinh T14 - Q. Bình Chánh</option><option value="6681">Đường Kinh Tập Đoàn 7 - Q. Bình Chánh</option><option value="6682">Đường Liên Ấp 12 - Q. Bình Chánh</option><option value="6684">Đường Liên Ấp 12 Bình Lợi - Q. Bình Chánh</option><option value="681463">Đường Liên Ấp 123 - Q. Bình Chánh</option><option value="6685">Đường Liên Ấp 23 - Q. Bình Chánh</option><option value="6686">Đường Liên Ấp 234 - Q. Bình Chánh</option><option value="6687">Đường Liên Ấp 34 - Q. Bình Chánh</option><option value="6688">Đường Liên Ấp 345 - Q. Bình Chánh</option><option value="6689">Đường Liên Ấp 45 - Q. Bình Chánh</option><option value="6690">Đường Liên Ấp 56 - Q. Bình Chánh</option><option value="6691">Đường Liên Ấp 62 - Q. Bình Chánh</option><option value="6692">Đường Lô 2 - Q. Bình Chánh</option><option value="6693">Đường Miếu Ông Đá - Q. Bình Chánh</option><option value="6694">Đường Số 1,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6695">Đường Số 1,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6696">Đường Số 1,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6697">Đường Số 1,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6698">Đường Số 10,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6699">Đường Số 10,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6700">Đường Số 10,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6701">Đường Số 10,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6702">Đường Số 10A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6703">Đường Số 10B,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6704">Đường Số 11,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6705">Đường Số 11,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6706">Đường Số 12,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6707">Đường Số 12,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6708">Đường Số 13,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6709">Đường Số 13,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6710">Đường Số 14,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6711">Đường Số 14,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6712">Đường Số 15,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6713">Đường Số 15,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6714">Đường Số 16,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6715">Đường Số 16,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6716">Đường Số 17,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6717">Đường Số 18,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6718">Đường Số 18,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6719">Đường Số 19,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6720">Đường Số 1A,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6721">Đường Số 1A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6722">Đường Số 1B,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6723">Đường Số 1C,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6724">Đường Số 1D,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6725">Đường Số 1E,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6726">Đường Số 1F,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6727">Đường Số 2,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6728">Đường Số 2,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6729">Đường Số 2,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6730">Đường Số 2,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6731">Đường Số 20,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6732">Đường Số 20,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6733">Đường Số 21,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6734">Đường Số 22,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6735">Đường Số 22,Khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6736">Đường Số 24,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6737">Đường Số 24,khu dân cư Him Lam 6A - Q. Bình Chánh</option><option value="6738">Đường Số 2A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6739">Đường Số 2B,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6740">Đường Số 3,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6741">Đường số 3,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6742">Đường Số 3,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6743">Đường Số 3,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6744">Đường Số 3A,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6745">Đường Số 4,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6746">Đường Số 4,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6747">Đường Số 4,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6748">Đường Số 4,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6749">Đường Số 4A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="742808">Đường số 5 - Q. Bình Chánh</option><option value="6750">Đường Số 5 A,B,C,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6751">Đường Số 5,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6752">Đường Số 5,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6753">Đường Số 5,khu dân cư Him Lam 6B - Q. Bình Chánh</option><option value="6754">Đường Số 5,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6755">Đường Số 5,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6756">Đường Số 5A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6757">Đường Số 5B,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6758">Đường Số 5C,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6759">Đường Số 6,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6760">Đường Số 6,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6761">Đường Số 6,khu dân cư Him Lam - Q. Bình Chánh</option><option value="6762">Đường Số 6,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6763">Đường Số 6,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6764">Đường Số 6A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6765">Đường Số 6B,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6766">Đường Số 6C,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6767">Đường Số 6D,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6768">Đường Số 7,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6769">Đường Số 7,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6770">Đường Số 7A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6771">Đường Số 8,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6772">Đường Số 8,khu dân cư Gia Hòa - Q. Bình Chánh</option><option value="6773">Đường Số 8,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6774">Đường Số 8,khu tái định cư Tân Túc - Q. Bình Chánh</option><option value="6775">Đường Số 8A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6776">Đường Số 8B,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6777">Đường Số 8C,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6778">Đường Số 9,khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="6779">Đường Số 9,khu dân cư Him Lam 6B - Q. Bình Chánh</option><option value="6780">Đường Số 9,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6781">Đường Số 9A,khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6782">Đường Sư 9 - Q. Bình Chánh</option><option value="6783">Đường T12 - Q. Bình Chánh</option><option value="6784">Đường Tập Đoàn 16 (Đa Phước) - Q. Bình Chánh</option><option value="6785">Đường Tập Đoàn 7-11 - Q. Bình Chánh</option><option value="6786">Đường Xã Hai - Q. Bình Chánh</option><option value="6787">Hoàng Đạo Thúy - Q. Bình Chánh</option><option value="6788">Hoàng Phan Thái - Q. Bình Chánh</option><option value="6789">Hốc Hưu - Q. Bình Chánh</option><option value="6790">Hưng Long-Quy Đức - Q. Bình Chánh</option><option value="6791">Hưng Nhơn - Q. Bình Chánh</option><option value="140834">Hùng Vương - Q. Bình Chánh</option><option value="6792">Hương Lộ 11 - Q. Bình Chánh</option><option value="140839">Hương lộ 80 - Q. Bình Chánh</option><option value="6793">Huỳnh Bá Chánh - Q. Bình Chánh</option><option value="6794">Huỳnh Văn Trí - Q. Bình Chánh</option><option value="6795">Kênh A - Q. Bình Chánh</option><option value="6796">Kênh B - Q. Bình Chánh</option><option value="140848">Khiếu năng tỉnh - Q. Bình Chánh</option><option value="6797">Khoa Đông (Lê Minh Xuân) - Q. Bình Chánh</option><option value="140840">Khu dân cư Bình Hưng - Q. Bình Chánh</option><option value="140846">Khu dân cư Nam - Nam Sài Gòn - Q. Bình Chánh</option><option value="140847">Khu dân cư Trung Sơn - Q. Bình Chánh</option><option value="6798">Khuất Văn Bứt - Q. Bình Chánh</option><option value="6799">Kinh 10 - Q. Bình Chánh</option><option value="6800">Kinh 5 - Q. Bình Chánh</option><option value="6801">Kinh 7 - Q. Bình Chánh</option><option value="6802">Kinh 8 - Q. Bình Chánh</option><option value="6803">Kinh 9 - Q. Bình Chánh</option><option value="140851">Kinh A - Q. Bình Chánh</option><option value="6804">Kinh C - Q. Bình Chánh</option><option value="6805">Kinh Liên Vùng (Kinh Trung Ương) - Q. Bình Chánh</option><option value="6806">Kinh Sáu Oánh - Q. Bình Chánh</option><option value="6807">Kinh Số 7 - Q. Bình Chánh</option><option value="6808">Kinh T11 - Q. Bình Chánh</option><option value="6809">Kinh T12 - Q. Bình Chánh</option><option value="6810">Lại Hùng Cường - Q. Bình Chánh</option><option value="6811">Láng Le-Bàu Cò - Q. Bình Chánh</option><option value="6812">Lê Bá Trịnh - Q. Bình Chánh</option><option value="6813">Lê Chính Đáng - Q. Bình Chánh</option><option value="6814">Lê Đình Chi - Q. Bình Chánh</option><option value="140852">Lê Minh Xuân - Q. Bình Chánh</option><option value="6815">Linh Hòa - Q. Bình Chánh</option><option value="6816">Lương Ngang - Q. Bình Chánh</option><option value="6817">Mai Bá Hương - Q. Bình Chánh</option><option value="6818">Ngã Ba Chú Lường - Q. Bình Chánh</option><option value="6819">Nguyễn Cửu Phú - Q. Bình Chánh</option><option value="6820">Nguyễn Đình Kiên - Q. Bình Chánh</option><option value="6821">Nguyễn Hữu Trí - Q. Bình Chánh</option><option value="140856">Nguyễn Thị Thập - Q. Bình Chánh</option><option value="6822">Nguyễn Thị Tú - Q. Bình Chánh</option><option value="140857">Nguyễn Tri Phương(nối dài) - Q. Bình Chánh</option><option value="6823">Nguyễn Văn Bứa - Q. Bình Chánh</option><option value="140864">Nguyễn Văn Cừ - Q. Bình Chánh</option><option value="140865">Nguyễn Văn Cừ (nối dài) - Q. Bình Chánh</option><option value="6824">Nguyễn Văn Linh - Q. Bình Chánh</option><option value="6825">Nguyễn Văn Long - Q. Bình Chánh</option><option value="6826">Nguyễn Văn Thê - Q. Bình Chánh</option><option value="6827">Nguyễn Văn Thời (Quy Đức ,Bà Bầu) - Q. Bình Chánh</option><option value="140866">Nữ Dân Công - Q. Bình Chánh</option><option value="6828">Phạm Hùng (Chánh Hưng Nối Dài) - Q. Bình Chánh</option><option value="140870">Phạm Văn Sáng - Q. Bình Chánh</option><option value="6829">Phan Tấn Mười - Q. Bình Chánh</option><option value="6830">Quách Điêu - Q. Bình Chánh</option><option value="140871">Quốc lộ 13 - Q. Bình Chánh</option><option value="6831">Quốc Lộ 1A - Q. Bình Chánh</option><option value="6832">Quốc Lộ 50 - Q. Bình Chánh</option><option value="140872">Quy Đức - Q. Bình Chánh</option><option value="6833">Rạch Ông Cốm - Q. Bình Chánh</option><option value="6834">Tân Liêm - Q. Bình Chánh</option><option value="6835">Tân Liểu - Q. Bình Chánh</option><option value="6836">Tân Long - Q. Bình Chánh</option><option value="6837">Tân Nhiểu - Q. Bình Chánh</option><option value="6838">Tân Quý Tây (Đoàn Nguyễn Tuân) - Q. Bình Chánh</option><option value="6839">Tân Túc - Q. Bình Chánh</option><option value="6840">Thanh Niên - Q. Bình Chánh</option><option value="6841">Thế Lữ - Q. Bình Chánh</option><option value="6842">Thích Thiện Hòa - Q. Bình Chánh</option><option value="6843">Thiên Giang - Q. Bình Chánh</option><option value="6844">Thới Hòa - Q. Bình Chánh</option><option value="6845">Tỉnh Lộ 10 - Q. Bình Chánh</option><option value="6846">Trần Đại Nghĩa - Q. Bình Chánh</option><option value="6847">Trần Hải Phụng - Q. Bình Chánh</option><option value="6848">Trịnh Như Khuê - Q. Bình Chánh</option><option value="6849">Trịnh Quang Nghị - Q. Bình Chánh</option><option value="6850">Trương Văn Đa - Q. Bình Chánh</option><option value="6851">Vĩnh Lộc - Q. Bình Chánh</option><option value="140876">Vĩnh Lộc B - Q. Bình Chánh</option><option value="6852">Võ Hữu Lợi - Q. Bình Chánh</option><option value="666079">Võ Văn Kiệt - Q. Bình Chánh</option><option value="6853">Võ Văn Vân - Q. Bình Chánh</option><option value="6854">Vườn Thơm - Q. Bình Chánh</option><option value="6855">Xóm Dầu - Q. Bình Chánh</option><option value="6856">Xóm Giữa - Q. Bình Chánh</option><option value="6857">Xóm Hố - Q. Bình Chánh</option><option value="6858">An Thới Đông - Cần Giờ</option><option value="6859">Bà Xán - Cần Giờ</option><option value="140807">Bến Đò Mới - Cần Giờ</option><option value="6860">Bùi Lâm - Cần Giờ</option><option value="6861">Đặng Văn Kiều - Cần Giờ</option><option value="6862">Đào Cử - Cần Giờ</option><option value="6863">Đê Ec - Cần Giờ</option><option value="6864">Đường Chính Vào Khu Dân Cư Đông Tranh - Cần Giờ</option><option value="6865">Đường Đê Ấp Trần Hưng Đạo - Cần Giờ</option><option value="6866">Đường Ra Bến Đò Đông Hòa - Cần Giờ</option><option value="6867">Dương Văn Hạnh - Cần Giờ</option><option value="6868">Duyên Hải - Cần Giờ</option><option value="6869">Giồng Ao - Cần Giờ</option><option value="6870">Hà Quang Vóc - Cần Giờ</option><option value="6871">Khu Dân Cư An Bình - Cần Giờ</option><option value="6872">Khu Dân Cư An Hòa - Cần Giờ</option><option value="6873">Khu Dân Cư An Lộc - Cần Giờ</option><option value="6874">Khu Dân Cư An Phước - Cần Giờ</option><option value="6875">Khu Dân Cư Bình Thạnh - Cần Giờ</option><option value="6876">Khu Dân Cư Bình Trung - Cần Giờ</option><option value="6877">Khu Dân Cư Hòa Hiệp - Cần Giờ</option><option value="6878">Khu Dân Cư Mỹ Khánh - Cần Giờ</option><option value="140810">Khu dân cư Rạch Lá - Cần Giờ</option><option value="6879">Khu Dân Cư Thạnh Bình - Cần Giờ</option><option value="6880">Khu Dân Cư Thạnh Hòa - Cần Giờ</option><option value="6881">Khu Dân Cư Thiêng Liềng - Cần Giờ</option><option value="6882">Lê Hùng Yên - Cần Giờ</option><option value="6883">Lê Thương - Cần Giờ</option><option value="6884">Lê Trọng Mân - Cần Giờ</option><option value="6885">Lương Văn Nho - Cần Giờ</option><option value="6886">Lý Nhơn - Cần Giờ</option><option value="6887">Nguyễn Công Bao - Cần Giờ</option><option value="6888">Nguyễn Phan Vinh - Cần Giờ</option><option value="140814">Nguyễn Thị Nê - Cần Giờ</option><option value="6889">Nguyễn Văn Mạnh - Cần Giờ</option><option value="6890">Phan Đức - Cần Giờ</option><option value="6891">Phan Trọng Tuệ - Cần Giờ</option><option value="6892">Quảng Xuyến - Cần Giờ</option><option value="6893">Rừng Sác - Cần Giờ</option><option value="6894">Tắc Xuất - Cần Giờ</option><option value="6895">Tam Thôn Hiệp - Cần Giờ</option><option value="6896">Thạnh Thới - Cần Giờ</option><option value="6897">Trần Quang Đạo - Cần Giờ</option><option value="6898">Trần Quang Quờn - Cần Giờ</option><option value="6899">An Nhơn Tây - Củ Chi</option><option value="140785">An Phú - Củ Chi</option><option value="6900">Bà Thiên - Củ Chi</option><option value="6901">Bàu Lách - Củ Chi</option><option value="6902">Bàu Trăm - Củ Chi</option><option value="6903">Bàu Tre - Củ Chi</option><option value="6904">Bến Cỏ - Củ Chi</option><option value="6905">Bến Đình - Củ Chi</option><option value="6906">Bến Súc - Củ Chi</option><option value="6907">Bến Than (Đường Làng Số 4) - Củ Chi</option><option value="6908">Bình Mỹ - Củ Chi</option><option value="6909">Bốn Phú (Trung An)-Huỳnh Thị Bẳng (Phú Hòa Đông) - Củ Chi</option><option value="6910">Bùi Thị Điệt - Củ Chi</option><option value="6911">Bùi Thị He - Củ Chi</option><option value="6912">Cá Lăng - Củ Chi</option><option value="6913">Can Trường - Củ Chi</option><option value="6914">Cây Bài - Củ Chi</option><option value="6915">Cây Gỏ - Củ Chi</option><option value="140786">Cây Trắc - Củ Chi</option><option value="140787">Cây Trôm - Củ Chi</option><option value="6916">Cây Trôm-Mỹ Khánh - Củ Chi</option><option value="6917">Đào Văn Thử - Củ Chi</option><option value="6918">Đinh Chương Dương - Củ Chi</option><option value="6919">Đình Kiến (Đinh Kiếp) - Củ Chi</option><option value="6920">Đỗ Đăng Tuyển - Củ Chi</option><option value="6921">Đỗ Đình Nhân - Củ Chi</option><option value="6922">Đỗ Ngọc Du - Củ Chi</option><option value="6923">Đỗ Quang Cơ - Củ Chi</option><option value="1869388">Đường 01 - Củ Chi</option><option value="1869389">Đường 02 - Củ Chi</option><option value="6924">Đường 11 - Củ Chi</option><option value="6925">Đường 35, 39, 40 - Củ Chi</option><option value="6926">Đường 41 - Củ Chi</option><option value="6927">Đường 42 - Củ Chi</option><option value="6928">Đường Ranh Khu Công Nghiệp - Củ Chi</option><option value="6929">Giáp Hải - Củ Chi</option><option value="6930">Giáp Hải nối dài - Củ Chi</option><option value="951037">Giồng Cát - Củ Chi</option><option value="6931">Hà Văn Lao - Củ Chi</option><option value="6932">Hồ Văn Tắng - Củ Chi</option><option value="6933">Hoàng Bá Huân - Củ Chi</option><option value="6934">Hương Lộ 10 - Củ Chi</option><option value="140789">Hương lộ 2 - Củ Chi</option><option value="140791">Hương lộ 22 - Củ Chi</option><option value="140790">Hương lộ 4 - Củ Chi</option><option value="6935">Huỳnh Minh Mương - Củ Chi</option><option value="6936">Huỳnh Thị Bẳng - Củ Chi</option><option value="6937">Huỳnh Văn Cọ - Củ Chi</option><option value="6938">Láng The - Củ Chi</option><option value="6939">Lê Minh Nhựt - Củ Chi</option><option value="6940">Lê Thị Siêng - Củ Chi</option><option value="6941">Lê Thọ Xuân - Củ Chi</option><option value="6942">Lê Vĩnh Huy - Củ Chi</option><option value="6943">Liên Ấp Hội Thạnh-Ấp Chợ-Ấp An Bình - Củ Chi</option><option value="140797">Liên xã Bàu Hưng Lợi - Củ Chi</option><option value="6944">Liên Xã Phước Vĩnh An-Phạm Văn Cội - Củ Chi</option><option value="6945">Liên Xã Trung Lập-Sa Nhỏ - Củ Chi</option><option value="6946">Liêu Bình Hương - Củ Chi</option><option value="6947">Lưu Khải Hồng - Củ Chi</option><option value="6948">Ngô Tri Hòa - Củ Chi</option><option value="6949">Nguyễn Đại Năng - Củ Chi</option><option value="6950">Nguyễn Đình Huân - Củ Chi</option><option value="6951">Nguyễn Giao - Củ Chi</option><option value="6952">Nguyễn Kim Cương - Củ Chi</option><option value="6953">Nguyễn Phong Sắc - Củ Chi</option><option value="6954">Nguyễn Phúc Trú - Củ Chi</option><option value="6955">Nguyễn Thị Lắm - Củ Chi</option><option value="6956">Nguyễn Thị Lắng - Củ Chi</option><option value="6957">Nguyễn Thị Nê - Củ Chi</option><option value="6958">Nguyễn Thị Rành - Củ Chi</option><option value="6959">Nguyễn Thị Rư - Củ Chi</option><option value="6960">Nguyễn Thị Triệu - Củ Chi</option><option value="6961">Nguyễn Văn Khạ - Củ Chi</option><option value="6962">Nguyễn Văn Khạ nối dài - Củ Chi</option><option value="6963">Nguyễn Văn Ni - Củ Chi</option><option value="6964">Nguyễn Văn Nì - Củ Chi</option><option value="6965">Nguyễn Văn On - Củ Chi</option><option value="6966">Nguyễn Văn Tỳ (Nguyễn Văn Tỷ) - Củ Chi</option><option value="6967">Nguyễn Văn Xơ - Củ Chi</option><option value="6968">Nguyễn Viết Xuân - Củ Chi</option><option value="6969">Nhữ Tiến Hiền - Củ Chi</option><option value="6970">Nhuận Đức - Củ Chi</option><option value="6971">Ninh Tốn - Củ Chi</option><option value="6972">Ông Ích Đường - Củ Chi</option><option value="6973">Phạm Hữu Tâm - Củ Chi</option><option value="6974">Phạm Phú Tiết - Củ Chi</option><option value="6975">Phạm Văn Chèo - Củ Chi</option><option value="6976">Phan Thị Hổi - Củ Chi</option><option value="6977">Quốc Lộ 22 - Củ Chi</option><option value="6978">Sông Lu - Củ Chi</option><option value="6979">Suối Lội - Củ Chi</option><option value="6980">Tam Tân - Củ Chi</option><option value="140798">Tân Phú Trung - Củ Chi</option><option value="6981">Tỉnh Lộ 15 - Củ Chi</option><option value="6982">Tỉnh Lộ 2 - Củ Chi</option><option value="6983">Tỉnh Lộ 6 - Củ Chi</option><option value="6984">Tỉnh Lộ 7 - Củ Chi</option><option value="6985">Tỉnh Lộ 8 - Củ Chi</option><option value="6986">Tỉnh Lộ 9 - Củ Chi</option><option value="6987">Trần Thị Ngần - Củ Chi</option><option value="6988">Trần Tử Bình - Củ Chi</option><option value="6989">Trần Văn Chẩm - Củ Chi</option><option value="6990">Trung An - Củ Chi</option><option value="6991">Trương Thị Kiện - Củ Chi</option><option value="6992">Võ Thị Hồng - Củ Chi</option><option value="6993">Võ Văn Bích - Củ Chi</option><option value="6994">Võ Văn Điều - Củ Chi</option><option value="6995">Vũ Duy Chí - Củ Chi</option><option value="6996">Vũ Tụ - Củ Chi</option><option value="6997">Ấp Dân Thắng 1 - Hóc Môn</option><option value="6998">Ấp Dân Thắng 2 - Hóc Môn</option><option value="6999">Ấp Đình 4 (Tân Xuân) - Hóc Môn</option><option value="140760">Ấp Mỹ Hòa I - Hóc Môn</option><option value="7000">Ấp Tam Đông - Hóc Môn</option><option value="992906">Ấp Tân Thới 2 - Hóc Môn</option><option value="1625401">Ấp Thới Tây 1 - Hóc Môn</option><option value="992636">Ấp Thới Tây 3 - Hóc Môn</option><option value="7001">Ấp Thống Nhất 2-Nhị Tân 1 - Hóc Môn</option><option value="140761">Ấp Tiền Lân - Hóc Môn</option><option value="140762">Bà Điểm - Hóc Môn</option><option value="7002">Bà Điểm 2 - Hóc Môn</option><option value="7003">Bà Điểm 5 - Hóc Môn</option><option value="7004">Bà Điểm 6 - Hóc Môn</option><option value="7005">Bà Điểm 7 - Hóc Môn</option><option value="7006">Bà Điểm 8 - Hóc Môn</option><option value="7007">Bà Triệu - Hóc Môn</option><option value="7008">Bùi Chu - Hóc Môn</option><option value="7009">Bùi Công Trừng - Hóc Môn</option><option value="7010">Bùi Văn Ngữ - Hóc Môn</option><option value="140763">Chu Mạnh Trinh - Hóc Môn</option><option value="7011">Đặng Công Bỉnh - Hóc Môn</option><option value="7012">Đặng Thúc Vịnh - Hóc Môn</option><option value="7013">Đỗ Văn Dậy - Hóc Môn</option><option value="7014">Đồng Tâm - Hóc Môn</option><option value="7015">Đường 02-Ấp Mới 2 - Hóc Môn</option><option value="7016">Đường Ấp Đình 2 - Hóc Môn</option><option value="7017">Dương Công Khi - Hóc Môn</option><option value="7018">Đường Đông Thạnh 1 (Đông Thạnh) - Hóc Môn</option><option value="7019">Đường Đông Thạnh 2 - Hóc Môn</option><option value="7020">Đường Đông Thạnh 5 - Hóc Môn</option><option value="7021">Đường Khu Phố 1-01 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7022">Đường Khu Phố 1-02 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7023">Đường Khu Phố 1-03 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7024">Đường Khu Phố 2-01 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7025">Đường Khu Phố 2-02 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7026">Đường Khu Phố 3-01 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7027">Đường Khu Phố 3-07 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7028">Đường Khu Phố 3-08 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7029">Đường Khu Phố 8-15 (Thị Trấn Hóc Môn) - Hóc Môn</option><option value="7030">Đường Số 08-Mỹ Hòa 3 (Tân Xuân) - Hóc Môn</option><option value="7031">Đường Số 1 (Xuân Thới Đông) - Hóc Môn</option><option value="7032">Đường Số 2 (Xuân Thới Đông) - Hóc Môn</option><option value="7033">Đường Số 3 - Hóc Môn</option><option value="7034">Đường Số 4 (Xuân Thới Đông) - Hóc Môn</option><option value="7035">Đường Số 5 (Xuân Thới Đông) - Hóc Môn</option><option value="7036">Đường Số 6 (Xuân Thới Đông) - Hóc Môn</option><option value="7037">Đường Số 7 (Xuân Thới Đông) - Hóc Môn</option><option value="7038">Đường Tân Hiệp - Hóc Môn</option><option value="7039">Đường Tân Hiệp 14 - Hóc Môn</option><option value="7040">Đường tân Hiệp 15 - Hóc Môn</option><option value="7041">Đường Tân Hiệp 31 - Hóc Môn</option><option value="7042">Đường Tân Hiệp 4 - Hóc Môn</option><option value="7043">Đường Tân Hiệp 7 - Hóc Môn</option><option value="7044">Đường Tân Xuân 2 - Hóc Môn</option><option value="7045">Đường Tân Xuân 6 - Hóc Môn</option><option value="7046">Đường Tuyến ống Nước Sạch - Hóc Môn</option><option value="7047">Giác Đạo - Hóc Môn</option><option value="7048">Hà Nội - Hóc Môn</option><option value="7049">Hương Lộ 60 (Lê Lợi) - Hóc Môn</option><option value="7050">Hương Lộ 60B - Hóc Môn</option><option value="7051">Hương Lộ 80B - Hóc Môn</option><option value="7052">Lê Lai - Hóc Môn</option><option value="140765">Lê Lợi - Hóc Môn</option><option value="7053">Lê Thị Hà - Hóc Môn</option><option value="7054">Lê Văn Khương - Hóc Môn</option><option value="7055">Liên Ấp 1-4 Xã Xuân Thới Thượng - Hóc Môn</option><option value="7056">Liên Ấp 2-6-7 Xã Đông Thạnh - Hóc Môn</option><option value="7057">Liên Ấp 3-7 Xã Xuân Thới Thượng - Hóc Môn</option><option value="7058">Liên Ấp 5-7 Xã Đông Thạnh - Hóc Môn</option><option value="7059">Liên Ấp Nam Thới-Thới Tứ Xã Thới Tam Thôn - Hóc Môn</option><option value="7060">Liên Ấp Thới Tứ Trung Đông - Hóc Môn</option><option value="7061">Liên Xã (Tân Xuân-Xuân Thới Sơn-Xuân Thới Thượng) - Hóc Môn</option><option value="7062">Liên Xã Tân Thới Nhì-Thị Trấn - Hóc Môn</option><option value="7063">Liên Xã Thị Trấn -Tân Hiệp - Hóc Môn</option><option value="7064">Liên Xã Thị Trấn -Thới Tam Thôn - Hóc Môn</option><option value="7065">Liên xã Thị Trấn Thới Tam Thôn-Đông Thạnh - Hóc Môn</option><option value="7066">Lý Nam Đế - Hóc Môn</option><option value="7067">Lý Thường Kiệt - Hóc Môn</option><option value="7068">Mỹ Huề - Hóc Môn</option><option value="7069">Ngô Quyền - Hóc Môn</option><option value="7070">Nguyễn Ảnh Thủ - Hóc Môn</option><option value="7071">Nguyễn Hữu Cầu - Hóc Môn</option><option value="7072">Nguyễn Thị Sóc - Hóc Môn</option><option value="7073">Nguyễn Thị Thử - Hóc Môn</option><option value="7074">Nguyễn Văn Bứa - Hóc Môn</option><option value="7075">Nhà Vuông - Hóc Môn</option><option value="7076">Nhị Bình 3 (Nhị Bình)  - Hóc Môn</option><option value="7077">Nhị Bình 8 (Nhị Bình) - Hóc Môn</option><option value="7078">Nhị Bình 9 (Nhị Bình) - Hóc Môn</option><option value="140766">Ống nước - Hóc Môn</option><option value="7079">Phạm Văn Sáng - Hóc Môn</option><option value="7080">Phan Văn Đối - Hóc Môn</option><option value="7081">Phan Văn Hớn - Hóc Môn</option><option value="7082">Quang Trung - Hóc Môn</option><option value="7083">Quốc Lộ 1A - Hóc Môn</option><option value="7084">Quốc Lộ 22 (Quốc Lộ 1) - Hóc Môn</option><option value="7085">Rạch Hóc Môn - Hóc Môn</option><option value="7086">Ranh Ấp Mỹ Hòa 1-Mỹ Hòa 3 - Hóc Môn</option><option value="7087">Ranh Xã Trung Chánh-Tân Xuân - Hóc Môn</option><option value="7088">Rỗng Bàng Xã Tân Hiệp - Hóc Môn</option><option value="7089">Số 12 Xã Tân Thới Nhì - Hóc Môn</option><option value="7090">Số 14 Xã Tân Thới Nhì - Hóc Môn</option><option value="7091">Số 17 Xã Tân Thới Nhì - Hóc Môn</option><option value="7092">Số 5 Xã Tân Thới Nhì - Hóc Môn</option><option value="7093">Số 6 Xã Tân Thới Nhì - Hóc Môn</option><option value="7094">Số 7 Xã Tân Thới Nhì - Hóc Môn</option><option value="7095">Số 8 Xã Tân Thới Nhì - Hóc Môn</option><option value="140767">Tam Đông - Hóc Môn</option><option value="140768">Tân Hiệp - Hóc Môn</option><option value="7096">Tân Hiệp 14-32 (Tân Hiệp) - Hóc Môn</option><option value="140770">Tân Hiệp 15 - Hóc Môn</option><option value="140771">Tân Hiệp 31 - Hóc Môn</option><option value="7097">Tân Hiệp 4 nối dài (Tân Hiệp) - Hóc Môn</option><option value="7098">Tân Hiệp 6 - Hóc Môn</option><option value="140769">Tân Hiệp 7 - Hóc Môn</option><option value="7099">Tân Hiệp 8 (Tân Hiệp) - Hóc Môn</option><option value="7100">Tân Tiến 11 (Xuân Thới Đông) - Hóc Môn</option><option value="7101">Tân Tiến 12 (Xuân Thới Đông) - Hóc Môn</option><option value="7102">Tân Tiến 4 (Xuân Thới Đông) - Hóc Môn</option><option value="7103">Tân Xuân 1 (Tân Xuân) - Hóc Môn</option><option value="7104">Tân Xuân 3 (Tân Xuân) - Hóc Môn</option><option value="7105">Tân Xuân 4 (Tân Xuân) - Hóc Môn</option><option value="7106">Tân Xuân 5 (Tân Xuân) - Hóc Môn</option><option value="7107">Tân Xuân 7 (Tân Xuân) - Hóc Môn</option><option value="7108">Thái Bình - Hóc Môn</option><option value="140782">Thành ủy - Hóc Môn</option><option value="7109">Thiên Quang - Hóc Môn</option><option value="7110">Thới Tam Thôn 11A (Thới Tam Thôn) - Hóc Môn</option><option value="7111">Thới Tam Thôn 13 (Thới Tam Thôn) - Hóc Môn</option><option value="7112">Thới Tam Thôn 6 (Thới Tam Thôn) - Hóc Môn</option><option value="7113">Thới Tây-Tân Hiệp (Đường Tân Hiệp 5) - Hóc Môn</option><option value="7114">Thương Mại 1 - Hóc Môn</option><option value="7115">Thương Mại 3 - Hóc Môn</option><option value="7116">Tô Ký - Hóc Môn</option><option value="7117">Trần Bình Trọng - Hóc Môn</option><option value="1021535">Trần Hưng Đạo - Hóc Môn</option><option value="7118">Trần Khắc Chân - Hóc Môn</option><option value="7119">Trần Khắc Chân nối dài - Hóc Môn</option><option value="7120">Trần Văn Mười - Hóc Môn</option><option value="7121">Trịnh Thị Miếng (Đường Trung Chánh-Tân Hiệp) - Hóc Môn</option><option value="7122">Trung Đông 11 (Thới Tam Thôn) - Hóc Môn</option><option value="7123">Trung Đông 12 (Thới Tam Thôn) - Hóc Môn</option><option value="7124">Trung Đông 7 (Thới Tam Thôn) - Hóc Môn</option><option value="7125">Trung Đông 8 (Thới Tam Thôn) - Hóc Môn</option><option value="7126">Trung Mỹ - Hóc Môn</option><option value="7127">Trưng Nữ Vương - Hóc Môn</option><option value="7128">Trương Vương 3 - Hóc Môn</option><option value="7129">Tuyến 5 Xã Thới Tam Thôn - Hóc Môn</option><option value="7130">Tuyến 9 Xã Thới Tam Thôn - Hóc Môn</option><option value="7131">Vạn Hạnh 1 - Hóc Môn</option><option value="7132">Vạn Hạnh 3 - Hóc Môn</option><option value="7133">Vạn Hạnh 4 - Hóc Môn</option><option value="140784">Võ Văn Bích - Hóc Môn</option><option value="7134">Xuân Thới 15 - Hóc Môn</option><option value="7135">Xuân Thới 2 Xã Xuân Thới Đông - Hóc Môn</option><option value="7136">Xuân Thới 23 - Hóc Môn</option><option value="7137">Xuân Thới 3 Xã Xuân Thới Đông - Hóc Môn</option><option value="7138">Xuân Thới 5 - Hóc Môn</option><option value="7139">Xuân Thới 6 - Hóc Môn</option><option value="7140">Xuân Thới 7 - Hóc Môn</option><option value="7141">Xuân Thới 8 - Hóc Môn</option><option value="7142">Xuân Thới 9 - Hóc Môn</option><option value="7143">Xuân Thới Sơn 1 - Hóc Môn</option><option value="7144">Xuân Thới Sơn 16 - Hóc Môn</option><option value="7145">Xuân Thới Sơn 2 - Hóc Môn</option><option value="7146">Xuân Thới Sơn 2 - Hóc Môn</option><option value="7147">Xuân Thới Sơn 20 - Hóc Môn</option><option value="7148">Xuân Thới Sơn 20C - Hóc Môn</option><option value="7149">Xuân Thới Sơn 21 (Xuân Thới Sơn) - Hóc Môn</option><option value="7150">Xuân Thới Sơn 22 - Hóc Môn</option><option value="7151">Xuân Thới Sơn 26 (Xuân Thới Sơn) - Hóc Môn</option><option value="7152">Xuân Thới Sơn 27 (Xuân Thới Sơn) - Hóc Môn</option><option value="7153">Xuân Thới Sơn 37 - Hóc Môn</option><option value="7154">Xuân Thới Sơn 38 - Hóc Môn</option><option value="7155">Xuân Thới Sơn 4 - Hóc Môn</option><option value="7156">Xuân Thới Sơn 5 - Hóc Môn</option><option value="7157">Xuân Thới Sơn 6 (Xuân Thới Sơn) - Hóc Môn</option><option value="7158">Xuân Thới Sơn 8 (Xuân Thới Sơn) - Hóc Môn</option><option value="7159">Xuân Thới Sơn A (Xuân Thới Sơn) - Hóc Môn</option><option value="7160">Xuân Thới Thượng 15 (Ấp 1) - Hóc Môn</option><option value="7161">Xuân Thới Thượng 16 (Ấp 1) - Hóc Môn</option><option value="7162">Xuân Thới Thượng 17 (Ấp 1) - Hóc Môn</option><option value="7163">Xuân Thới Thượng 23 (Ấp 4) - Hóc Môn</option><option value="7164">Xuân Thới Thượng 24 (Ấp 4) - Hóc Môn</option><option value="7165">Xuân Thới Thượng 26 - Hóc Môn</option><option value="7166">Xuân Thới Thượng 4 (Ấp 4) - Hóc Môn</option><option value="7167">Xuân Thới Thượng 5 (Ấp 5) - Hóc Môn</option><option value="7168">Xuân Thới Thượng 6 (Ấp 2) - Hóc Môn</option><option value="7169">Xuân Thới Thượng 7 (Ấp 3) - Hóc Môn</option><option value="7170">Xuân Thới Thượng 8 (Ấp 3) - Hóc Môn</option><option value="7171">Xuân Thới Thượng 9 (Ấp 3) - Hóc Môn</option><option value="140687">Chánh Hưng - Nhà Bè</option><option value="7172">Chánh Hưng nối dài - Nhà Bè</option><option value="7173">Đặng Nhữ Lâm - Nhà Bè</option><option value="140764">Đặng Văn Mười - Nhà Bè</option><option value="7174">Đào Sư Tích - Nhà Bè</option><option value="7175">Đào Tông Nguyên - Nhà Bè</option><option value="140688">Đào Xuân Tích - Nhà Bè</option><option value="140689">Đường Bà Cả - Nhà Bè</option><option value="7176">Đường Bờ Tây - Nhà Bè</option><option value="7177">Dương Cát Lợi - Nhà Bè</option><option value="140690">Đường Khu Dân Cư COTEC - Nhà Bè</option><option value="7178">Đường Khu Trung Tâm Huyện - Nhà Bè</option><option value="7179">Đường Liên Ấp 2-3 - Nhà Bè</option><option value="7180">Đường Liên Ấp 3-4 - Nhà Bè</option><option value="140691">Đường NB Khu TĐC Phước Kiến Giai đoạn 1 - Nhà Bè</option><option value="7181">Đường nội bộ KCN Hiệp Phước - Nhà Bè</option><option value="7182">Đường Nội Bộ KDC Rạch Nò - Nhà Bè</option><option value="7183">Đường Nội Bộ KDC Thái Sơn - Nhà Bè</option><option value="7184">Đường nội bộ KDC Trường Đại Học KHXH và NV - Nhà Bè</option><option value="7185">Đường Nội Bộ Khu CBCNV Huyện Xã Long Thới - Nhà Bè</option><option value="7186">Đường Nội Bộ Khu Tái Định Cư KCN Hiệp Phước - Nhà Bè</option><option value="7187">Đường Nội Bộ Khu Tái Định Cư Khu Vực cầu Bà Sáu - Nhà Bè</option><option value="7188">Đường Vào Dầu Nhớt BP - Nhà Bè</option><option value="7189">Đường vào KDC VITACO - Nhà Bè</option><option value="7190">Đường Vào Kho Xăng Dầu Lâm Tài Chính - Nhà Bè</option><option value="7191">Đường Vào Kho Xăng Dầu PETECHIM - Nhà Bè</option><option value="7192">Đường vào trung tâm sinh hoạt Thanh Thiếu Niên - Nhà Bè</option><option value="7193">Đường vào Trường THCS Lê Lợi - Nhà Bè</option><option value="7194">Huỳnh Tấn Phát - Nhà Bè</option><option value="140749">Khu cao ốc Phú Hoàng Anh - Nhà Bè</option><option value="140747">Khu dân cư Phú Xuân - Nhà Bè</option><option value="140748">Khu dân cư Thái Sơn - Nhà Bè</option><option value="7195">Lê Văn Lương - Nhà Bè</option><option value="140750">Long Thới - Nhà Bè</option><option value="7196">Long Thới-Nhơn Đức - Nhà Bè</option><option value="7197">Ngã Ba Đình - Nhà Bè</option><option value="7198">Nguyễn Bình - Nhà Bè</option><option value="7199">Nguyễn Hữu Thọ - Nhà Bè</option><option value="140751">Nguyễn Lương Bằng - Nhà Bè</option><option value="140752">Nguyễn Văn Linh - Nhà Bè</option><option value="7200">Nguyễn Văn Tạo - Nhà Bè</option><option value="140754">Nguyễn Văn Thọ - Nhà Bè</option><option value="140755">Nhơn Đức - Nhà Bè</option><option value="7201">Nhơn Đức-Phước Lộc - Nhà Bè</option><option value="7202">Phạm Hữu Lầu - Nhà Bè</option><option value="7203">Phan Văn Bảy - Nhà Bè</option></select>
                    </td>
                    <td>
                        <input class="text text-box" id="AddressNumber" name="AddressNumber" placeholder="Số nhà" type="text" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="text number-box" id="MinPriceProposed" name="MinPriceProposed" placeholder="Giá từ" type="text" value="">
                        <input class="text number-box" id="MaxPriceProposed" name="MaxPriceProposed" placeholder="đến" type="text" value="">

                        <select class="" id="PaymentMethodCssClass" name="PaymentMethodCssClass" style="width:70px"><option selected="selected" value="pm-vnd-b">Tỷ đồng</option>
<option value="pm-vnd-m">Triệu đồng</option>
<option value="pm-vnd-k">Nghìn đồng</option>
<option value="pm-vnd-d">Đồng</option>
<option value="pm-usd">USD</option>
<option value="pm-usd-k">Nghìn USD</option>
<option value="pm-usd-m">Triệu USD</option>
<option value="pm-sjc">Lượng vàng</option>
</select>

                        <select class="" id="PaymentUnitCssClass" name="PaymentUnitCssClass" style="width:112px"><option selected="selected" value="unit-total">Tổng diện tích</option>
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
                        <select class="select-box" id="LocationCssClass" name="LocationCssClass"><option value="">-- Nhà MT / Hẻm --</option>
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
                        <select class="select-box multiselect" id="DirectionCssClasses" multiple="multiple" name="DirectionCssClasses" placeholder="-- Hướng --" style="display: none;"><option value="d-east">Ðông</option>
<option value="d-west">Tây</option>
<option value="d-south">Nam</option>
<option value="d-north">Bắc</option>
<option value="d-northeast">Đông Bắc</option>
<option value="d-southeast">Đông Nam</option>
<option value="d-northwest">Tây Bắc</option>
<option value="d-southwest">Tây Nam</option>
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;">-- Hướng -- <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-east"> Ðông</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-west"> Tây</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-south"> Nam</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-north"> Bắc</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-northeast"> Đông Bắc</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-southeast"> Đông Nam</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-northwest"> Tây Bắc</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="d-southwest"> Tây Nam</label></a></li></ul></div>
                    </td>
                    <td class="filter-label">Pháp lý</td>
                    <td>
                        <select class="select-box" id="LegalStatusId" name="LegalStatusId"><option value="">-- Tất cả --</option>
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
                        <select class="select-box multiselect" id="AdvantageIds" multiple="multiple" name="AdvantageIds" placeholder="-- Vui lòng chọn --" style="display: none;"><option value="85728">Có 2 mặt đường chính</option>
<option value="85729">Căn góc, có hẻm bên hông</option>
<option value="85730">Có hẻm sau nhà</option>
<option value="85732">Gần chợ, siêu thị (&lt;500m)</option>
<option value="85733">Gần công viên, trung tâm giải trí (&lt;500m)</option>
<option value="85734">Khu dân cư cao cấp có cổng bảo vệ</option>
<option value="85735">Vị trí đẹp nhất trong đoạn đường</option>
<option value="85736">Tiện làm quán cafe, nhà hàng, khách sạn</option>
<option value="85794">Hẻm thông ra đường khác đẹp hơn.</option>
</select><div class="btn-group form-control"><button type="button" class="multiselect dropdown-toggle text-left text-ellipsis placeholder" data-toggle="dropdown" title="" style="width: 100%;">-- Vui lòng chọn -- <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span><input class="multiselect-search form-control input-sm" type="text" placeholder="Tìm kiếm..."></div><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85728"> Có 2 mặt đường chính</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85729"> Căn góc, có hẻm bên hông</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85730"> Có hẻm sau nhà</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85732"> Gần chợ, siêu thị (&lt;500m)</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85733"> Gần công viên, trung tâm giải trí (&lt;500m)</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85734"> Khu dân cư cao cấp có cổng bảo vệ</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85735"> Vị trí đẹp nhất trong đoạn đường</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85736"> Tiện làm quán cafe, nhà hàng, khách sạn</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85794"> Hẻm thông ra đường khác đẹp hơn.</label></a></li></ul></div>
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

        <button type="submit" name="submit.Filter" value="Filter">Tìm kiếm</button>

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
                    <tr data-id="2166882" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2166882" name="Properties[2].Property.Id">
                            <input type="checkbox" value="true" name="Properties[2].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2166882"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2166882"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2166882" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2166882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2166882</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-good">
                                <span data-toggle="tooltip">2.6</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.6 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
3.21 Tỷ
(+23%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
3/1/18                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2166882/00b0b66d-869d-4373-b715-0245613733a3.jpeg" target="_blank" rel="prettyPhoto[2166882]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2166882/8e08b22e-8d3c-4663-9126-573c3871256c.jpeg" target="_blank" rel="prettyPhoto[2166882]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Đội Cung

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 11
                        </td>

                        <!-- District -->
                        <td>
                            Q11
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.5m x 11m)</div>
                                        <div>DTQH: (3.5m x 11m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            
                        </td>

                        <!-- Direction -->
                        <td>
ĐN                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 3m">hẻm 3m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0903829667<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 31/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 31/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>31/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>
                    <tr data-id="2161290" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2161290" name="Properties[3].Property.Id">
                            <input type="checkbox" value="true" name="Properties[3].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2161290"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2161290"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2161290" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2161290?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2161290</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">2.65</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.65 Tỷ  / Tổng DT</div>
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
341/i9                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Lạc Long Quân

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 5
                        </td>

                        <!-- District -->
                        <td>
                            Q11
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.1m x 7m)</div>
                                        <div>DTQH: (3.1m x 7m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            2 lầu
                        </td>

                        <!-- Direction -->
                        <td>
N                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 3m">hẻm 3m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="01207137566<div></div><div class=color-note></div>">012..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 26/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 26/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>26/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2017244" class="">
                        <td class="align-center">
                            <input type="hidden" value="2017244" name="Properties[4].Property.Id">
                            <input type="checkbox" value="true" name="Properties[4].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2017244"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2017244"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2017244" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2017244?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2017244</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">10.8</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 10.8 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
10.82 Tỷ
(N/A)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
47                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2017244/94d77976-6dd5-475b-a04b-b599f1cf53d2.jpg" target="_blank" rel="prettyPhoto[2017244]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2017244/267d03ac-a2c1-4e27-a818-870a870d33a8.jpg" target="_blank" rel="prettyPhoto[2017244]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
            <a href="https://dulieunhadat.vn/UserFiles/2017244/3a888f47-8d67-42f6-9b05-63c3b5f1cf6d.jpg" target="_blank" rel="prettyPhoto[2017244]" class="ui-icon icon-mime-jpg" style="display:none;">3</a>
            <a href="https://dulieunhadat.vn/UserFiles/2017244/16519a18-e471-4bf8-a883-61a6652c1378.jpg" target="_blank" rel="prettyPhoto[2017244]" class="ui-icon icon-mime-jpg" style="display:none;">4</a>
            <a href="https://dulieunhadat.vn/UserFiles/2017244/50c65d14-1253-46de-8a4f-d9117162a3c4.jpg" target="_blank" rel="prettyPhoto[2017244]" class="ui-icon icon-mime-jpg" style="display:none;">5</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Lê Tấn Quốc

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 13
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (4m x 25m) mặt hậu 7.1m</div>
                                        <div>DTQH: (4m x 22m) mặt hậu 7.1m</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        <div><em><strong>Nội dung:</strong></em> <p><span>Gia đình chuẩn bị đi nước ngoài định cư nên cần bán gấp nhà ở quận Tân Bình&nbsp;</span><br><br><span>Mặt tiền đường Lê Tấn Quốc, để lại nội thất<span>&nbsp;</span></span><br><span>Gồm 1 trệt 3 lầu<span>&nbsp;</span></span><br><span>Diện tích 110,8 m2 ( 4mx25m) nở hậu<span>&nbsp;</span></span><br><br><span>Có sổ hồng chính chủ<span>&nbsp;</span></span><br><span>Giá bán 10,8 tỷ có thể thương lượng<span>&nbsp;</span></span><br><br><span>LH&nbsp;0909.671.715</span></p></div>
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
                            <span data-toggle="tooltip" title="">MT</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="chị Dung 0932156057 - 0911168268<div></div><div class=color-note></div>">chị..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">HuynhPhuong.Q10</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> HuynhPhuong.Q10 - <strong>Sửa bởi:</strong> Kimha.Q10 ngày 25/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 03/11/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>25/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>
                    <tr data-id="2087758" class="">
                        <td class="align-center">
                            <input type="hidden" value="2087758" name="Properties[5].Property.Id">
                            <input type="checkbox" value="true" name="Properties[5].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2087758"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2087758"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2087758" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2087758?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2087758</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-bad">
                                <span data-toggle="tooltip">15</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 15 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
10.48 Tỷ
(-30%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
15                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2087758/5b92c05a-361b-4d82-9fb1-36a86e9d7dd3.jpeg" target="_blank" rel="prettyPhoto[2087758]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2087758/7f9acc29-8a29-40fc-a5c6-15927b586690.jpg" target="_blank" rel="prettyPhoto[2087758]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Nguyễn Quang Bích(b4)

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 13
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (7m x 30m) mặt hậu 5m</div>
                                        <div>DTQH: (7m x 26m) mặt hậu 5m</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        
                                        <!-- Advantages -->
                                        <div><em><strong>Đặc điểm:</strong></em> Đường, hẻm đâm thẳng vào nhà</div>
                                    </div>
                                </div>
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            2 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="">MT</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0902417979 anh Thảo<div></div><div class=color-note>Nhà đường đâm</div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Thinh.Q10</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Thinh.Q10 - <strong>Sửa bởi:</strong> SyDung ngày 22/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 11/12/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>22/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2154423" class="">
                        <td class="align-center">
                            <input type="hidden" value="2154423" name="Properties[6].Property.Id">
                            <input type="checkbox" value="true" name="Properties[6].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2154423"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2154423"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2154423" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2154423?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2154423</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">2.5</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.5 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
2.49 Tỷ
(N/A)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
22/9g                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2154423/d49dd12d-cee0-431a-85da-bd5d99c7b766.jpg" target="_blank" rel="prettyPhoto[2154423]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2154423/ebf61def-c6d8-4dcb-9d69-8cce04d666a0.jpeg" target="_blank" rel="prettyPhoto[2154423]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Hoà Bình

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 5
                        </td>

                        <!-- District -->
                        <td>
                            Q11
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (6m x 7m)</div>
                                        <div>DTQH: (6m x 7m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        
                                        <!-- Advantages -->
                                        <div><em><strong>Đặc điểm:</strong></em> Căn góc, có hẻm bên hông</div>
                                    </div>
                                </div>
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            
                        </td>

                        <!-- Direction -->
                        <td>
T                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 3m">hẻm 3m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0996038876 Chị Oanh<div></div><div class=color-note></div>">099..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 20/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 20/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>20/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2153312" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2153312" name="Properties[7].Property.Id">
                            <input type="checkbox" value="true" name="Properties[7].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2153312"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2153312"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2153312" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2153312?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2153312</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">2.75</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.75 Tỷ  / Tổng DT</div>
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
19/40/9c                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2153312/176a236d-e77e-4ff0-85ba-b429b2178630.jpg" target="_blank" rel="prettyPhoto[2153312]" class="ui-icon icon-mime-jpg">1</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Bình Thới

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 11
                        </td>

                        <!-- District -->
                        <td>
                            Q11
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (5m x 5m)</div>
                                        <div>DTQH: (5m x 5m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        
                                        <!-- Advantages -->
                                        <div><em><strong>Đặc điểm:</strong></em> Căn góc, có hẻm bên hông</div>
                                    </div>
                                </div>
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            2 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="2 lần rẽ, lần rẽ 1 rộng 3m, hẻm trước nhà rộng 2.5m">hẻm 2.5m, 2 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="01207137566 Hải<div></div><div class=color-note></div>">012..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 19/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 19/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>19/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="1672178" class="">
                        <td class="align-center">
                            <input type="hidden" value="1672178" name="Properties[8].Property.Id">
                            <input type="checkbox" value="true" name="Properties[8].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="1672178"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="1672178"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/1672178" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/1672178?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">1672178</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">3.8</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 3.8 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
3.07 Tỷ
(-19%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
202/47/18/7                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/1672178/560d779f-dbbe-4eac-99e6-1e03b4f36ebc.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/5d225653-e36d-4bba-8422-da10f0680586.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/bd82ae9a-b8ed-4c4d-8ffe-45017c4e8c19.jpeg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">3</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/26787884-4829-4af5-9d59-d1836ac63bd3.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">4</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/2883a56a-e2ea-4281-a92d-3c954d43ae10.jpeg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">5</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/73528292-007d-4092-8a82-088800c5397b.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">6</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/5f060c07-1479-4db1-a255-ddbe2d5f25ec.jpeg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">7</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/4578d7ad-0278-4dc0-805f-ef42ac38d71d.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">8</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/9b4e0d20-b8c3-4c40-9aab-5985042e0ef3.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">9</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/93a567fc-7f05-4f41-9589-7daded27fba8.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">10</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/06c74584-ea7a-45bf-b34e-0f8400d8e8f1.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">11</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/eb5dc04c-8be0-4f0b-bc9c-76788295a10c.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">12</a>
            <a href="https://dulieunhadat.vn/UserFiles/1672178/1a93ff3f-5e34-4aaa-ada7-af69ca4e3868.jpg" target="_blank" rel="prettyPhoto[1672178]" class="ui-icon icon-mime-jpg" style="display:none;">13</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Phạm Văn Hai

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 5
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.6m x 12.6m)</div>
                                        <div>DTQH: (3.6m x 12.6m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        <div><em><strong>Nội dung:</strong></em> <p>2 lầu kiên cố, nội thất cao cấp,3PN,3WC&nbsp;</p></div>
                                        <!-- Advantages -->
                                        <div><em><strong>Đặc điểm:</strong></em> Gần chợ, siêu thị (&lt;500m)</div>
                                    </div>
                                </div>
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            
                        </td>

                        <!-- Direction -->
                        <td>
ĐB                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="3 lần rẽ, lần rẽ 1 rộng 4m, lần rẽ 2 rộng 3m, hẻm trước nhà rộng 3m">hẻm 3m, 3 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0902545889 - chị Hạnh-0983483649<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">kieutrinh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> kieutrinh - <strong>Sửa bởi:</strong> kieutrinh ngày 19/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 01/04/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>19/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>
                    <tr data-id="2150522" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2150522" name="Properties[9].Property.Id">
                            <input type="checkbox" value="true" name="Properties[9].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2150522"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2150522"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2150522" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2150522?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2150522</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-very-good">
                                <span data-toggle="tooltip">4.15</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 4.15 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
5.99 Tỷ
(+44%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
106/2                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Lạc Long Quân

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 3
                        </td>

                        <!-- District -->
                        <td>
                            Q11
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.3m x 14m)</div>
                                        <div>DTQH: (3.3m x 14m)</div>

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
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 8m">hẻm 8m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0981232360<div></div><div class=color-note></div>">098..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 18/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 18/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>18/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="1919785" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="1919785" name="Properties[10].Property.Id">
                            <input type="checkbox" value="true" name="Properties[10].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="1919785"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="1919785"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/1919785" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/1919785?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">1919785</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-bad">
                                <span data-toggle="tooltip">4.2</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 4.2 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
2.74 Tỷ
(-35%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
23                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Nguyễn Đình Khơi

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
                                        <div>DTKV: (3m x 7m)</div>
                                        <div>DTQH: (3m x 7m)</div>

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
TN                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="">MT</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0908990207 Lợi<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">kieutrinh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> kieutrinh - <strong>Sửa bởi:</strong> kieutrinh ngày 15/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 14/09/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>15/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>
                    <tr data-id="2144791" class="">
                        <td class="align-center">
                            <input type="hidden" value="2144791" name="Properties[11].Property.Id">
                            <input type="checkbox" value="true" name="Properties[11].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2144791"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2144791"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2144791" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2144791?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2144791</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-good">
                                <span data-toggle="tooltip">2.5</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.5 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
3.17 Tỷ
(+27%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
38/22                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2144791/c77ef3e9-228d-40a7-b706-217564843843.jpeg" target="_blank" rel="prettyPhoto[2144791]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2144791/c4093a7a-4260-4aa8-973f-b15dc688c5c7.jpeg" target="_blank" rel="prettyPhoto[2144791]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Trần Thánh Tông

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
                                        <div>DTKV: (4m x 10m)</div>
                                        <div>DTQH: (4m x 10m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            2 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 6m">hẻm 6m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0985606943<div></div><div class=color-note></div>">098..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 15/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 15/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>15/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2038057" class="">
                        <td class="align-center">
                            <input type="hidden" value="2038057" name="Properties[12].Property.Id">
                            <input type="checkbox" value="true" name="Properties[12].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2038057"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2038057"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2038057" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2038057?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2038057</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">7.5</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 7.5 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
6.02 Tỷ
(-20%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
25/15                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2038057/db781d0a-1dc9-4411-bb92-e3c9c243aee2.jpg" target="_blank" rel="prettyPhoto[2038057]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2038057/bde0fe84-c3b2-4805-b7a9-0f3df1de1c9e.png" target="_blank" rel="prettyPhoto[2038057]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
            <a href="https://dulieunhadat.vn/UserFiles/2038057/0c212d7f-0a90-4671-b9cb-108379c8c287.jpeg" target="_blank" rel="prettyPhoto[2038057]" class="ui-icon icon-mime-jpg" style="display:none;">3</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Thăng Long

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
                                        <div>DTKV: (5m x 17m)</div>
                                        <div>DTQH: (5m x 17m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                                <a href="https://dulieunhadat.vn/Admin#" data-toggle="tooltip">chi tiết...</a>
                                <div data-tooltip-content="" style="display:none">
                                    <div>
                                        <!-- Title -->
                                         
                                        <!-- Content -->
                                        
                                        <!-- Advantages -->
                                        <div><em><strong>Đặc điểm:</strong></em> Đường, hẻm đâm thẳng vào nhà</div>
                                    </div>
                                </div>
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            4 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="cách MT 50m, 1 lần rẽ, hẻm trước nhà rộng 4m">hẻm 4m, cách MT 50m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0935879953<div></div><div class=color-note></div>">093..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Du.Q10</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Du.Q10 - <strong>Sửa bởi:</strong> Du.Q10 ngày 13/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 14/11/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>13/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2143129" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2143129" name="Properties[13].Property.Id">
                            <input type="checkbox" value="true" name="Properties[13].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2143129"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2143129"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2143129" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2143129?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2143129</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">3.48</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 3.48 Tỷ  / Tổng DT</div>
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
338/16                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Âu Cơ

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 10
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.6m x 10m)</div>
                                        <div>DTQH: (3.6m x 10m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            
                        </td>

                        <!-- Direction -->
                        <td>
ĐB                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 3m">hẻm 3m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0903011121<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 13/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 13/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>13/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>
                    <tr data-id="2137491" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2137491" name="Properties[14].Property.Id">
                            <input type="checkbox" value="true" name="Properties[14].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2137491"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2137491"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2137491" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2137491?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2137491</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">3.1</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 3.1 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
2.41 Tỷ
(-22%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
21/11                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2137491/88598e0b-b449-4eb9-b04d-4c385a2b7b4c.png" target="_blank" rel="prettyPhoto[2137491]" class="ui-icon icon-mime-jpg">1</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Hồng Lạc

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 10
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.2m x 8.4m) mặt hậu 3.25m</div>
                                        <div>DTQH: (3.2m x 8.4m) mặt hậu 3.25m</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            2 lầu
                        </td>

                        <!-- Direction -->
                        <td>
TN                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 4m">hẻm 4m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0907562812 Xuân<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Thinh.Q10</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Thinh.Q10 - <strong>Sửa bởi:</strong> Thinh.Q10 ngày 12/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 10/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>12/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                                <span title="BĐS giao dịch VIP" class=" icon-ads-vip-1"></span>
                        </td>
                    </tr>
                    <tr data-id="1809234" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="1809234" name="Properties[15].Property.Id">
                            <input type="checkbox" value="true" name="Properties[15].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="1809234"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="1809234"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/1809234" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/1809234?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">1809234</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-very-good">
                                <span data-toggle="tooltip">4</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 4 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
5.36 Tỷ
(+34%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
72/19                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Văn Chung

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 13
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (4m x 14m)</div>
                                        <div>DTQH: (4m x 14m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            1 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 6m">hẻm 6m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0932671278 cò<div></div><div class=color-note></div>">093..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> kieutrinh ngày 12/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 18/07/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>12/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2141140" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2141140" name="Properties[16].Property.Id">
                            <input type="checkbox" value="true" name="Properties[16].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2141140"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2141140"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2141140" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2141140?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2141140</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">2.5</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.5 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
1.8 Tỷ
(-28%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
6/12                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2141140/b8ea6e05-72ea-4ac1-b3c0-cd99781bba42.jpeg" target="_blank" rel="prettyPhoto[2141140]" class="ui-icon icon-mime-jpg">1</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Tống Văn Hên

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
                                        <div>DTKV: (3m x 10m)</div>
                                        <div>DTQH: (3m x 10m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            1 lầu
                        </td>

                        <!-- Direction -->
                        <td>
TN                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 3m">hẻm 3m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0933358628<div></div><div class=color-note></div>">093..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 12/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 12/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>12/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2141014" class="">
                        <td class="align-center">
                            <input type="hidden" value="2141014" name="Properties[17].Property.Id">
                            <input type="checkbox" value="true" name="Properties[17].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2141014"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2141014"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2141014" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2141014?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2141014</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">3.73</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 3.73 Tỷ  / Tổng DT</div>
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
83/20/15                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2141014/980b7f35-8e54-4c84-ab14-0fc7dd8a02c2.jpeg" target="_blank" rel="prettyPhoto[2141014]" class="ui-icon icon-mime-jpg">1</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Phạm Văn Bạch

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
                                        <div>DTKV: (4m x 12m)</div>
                                        <div>DTQH: (4m x 12m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            1 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="2 lần rẽ, lần rẽ 1 rộng 6m, hẻm trước nhà rộng 6m">hẻm 6m, 2 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0938182832-A.Tùng<div></div><div class=color-note></div>">093..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 12/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 12/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>12/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2076882" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2076882" name="Properties[18].Property.Id">
                            <input type="checkbox" value="true" name="Properties[18].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2076882"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2076882"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2076882" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2076882?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2076882</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">2.2</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 2.2 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
1.62 Tỷ
(-26%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
136/43                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2076882/5708ab3b-27e5-4f50-83b0-39889080d81c.jpeg" target="_blank" rel="prettyPhoto[2076882]" class="ui-icon icon-mime-jpg">1</a>
            <a href="https://dulieunhadat.vn/UserFiles/2076882/83baa03e-e106-485a-a4d4-fbb29bc5e9fb.jpg" target="_blank" rel="prettyPhoto[2076882]" class="ui-icon icon-mime-jpg" style="display:none;">2</a>
            <a href="https://dulieunhadat.vn/UserFiles/2076882/43eef688-aabc-4b60-9a5f-874810d38f31.jpeg" target="_blank" rel="prettyPhoto[2076882]" class="ui-icon icon-mime-jpg" style="display:none;">3</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Trần Văn Quang

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 10
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (3.1m x 8.2m) mặt hậu 3.3m</div>
                                        <div>DTQH: (3.1m x 8.2m) mặt hậu 3.3m</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            1 lầu
                        </td>

                        <!-- Direction -->
                        <td>
Đ                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 3m">hẻm 3m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="0937446726 Ngọc<div></div><div class=color-note></div>">093..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 12/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 05/12/17</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>12/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
                        </td>
                    </tr>
                    <tr data-id="2140943" class=" ">
                        <td class="align-center">
                            <input type="hidden" value="2140943" name="Properties[19].Property.Id">
                            <input type="checkbox" value="true" name="Properties[19].IsChecked">

                            <!-- IsAuthenticatedInfo -->

                            <div>
                                <span title="Lưu vào danh sách theo dõi" class="ui-icon icon-save pointer follow-property " data-id="2140943"></span>
                                <span title="Xóa khỏi danh sách theo dõi" class="ui-icon icon-cross pointer unfollow-property hidden" data-id="2140943"></span>
                            </div>
                        </td>

                        <td>
                            <!-- Published -->
                                <a href="https://dinhgianhadat.vn/tim-kiem-bat-dong-san/2140943" title="Xem trên web" target="_blank">
                                        <span title="BĐS đang hiện trên trang chủ" class="left ui-icon icon-label-green" style="margin-top:3px;"></span>
                                </a>

                            <!-- ID -->
                            <span class="">
                                <a class="p-id" href="https://dulieunhadat.vn/Admin/RealEstate/Edit/2140943?returnUrl=https%3A%2F%2Fdulieunhadat.vn%2FAdmin">2140943</a>
                            </span>

                            <!-- UserGroup -->
                                <div><small class="small">Q10</small></div>

                            <!-- AdsVIPRequest -->

                        </td>

                        <!-- PriceProposedInVND -->
                            <td class="deal-normal">
                                <span data-toggle="tooltip">6.65</span>
                                <div data-tooltip-content="" style="display:none">
                                    <div><em><strong>Giá rao:</strong></em> 6.65 Tỷ  / Tổng DT</div>
                                    <div>
                                        <em><strong>Định giá:</strong></em>
6.12 Tỷ
(-8%)                                    </div>
                                </div>
                            </td>

                        <!-- PriceEstimatedInVND -->

                        <!-- PriceEstimatedInVND Rating -->

                        <!-- AddressNumber -->
                        <td class="st-selling">
                                <!-- PublishAddress -->
37/2B                                <!-- Status -->
                                    <span class="small"></span>
                                <!-- Gallery -->


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
        else {
            f(".zoom_gallery a[rel^='prettyPhoto']").show()
        }
    });
</script>
    <div class="zoom_gallery">
            <a href="https://dulieunhadat.vn/UserFiles/2140943/df7e826f-ad63-43b7-a1e0-cd0de6a20f91.jpeg" target="_blank" rel="prettyPhoto[2140943]" class="ui-icon icon-mime-jpg">1</a>
    </div>
                                <!-- AddressCorner -->
                                <!-- ApartmentNumber -->
                        </td>

                        <!-- Street -->
                        <td class="st-selling">
                            Nhất Chi Mai

                        </td>

                        <!-- Ward -->
                        <td>
                            P. 13
                        </td>

                        <!-- District -->
                        <td>
                            Q Tân Bình
                        </td>

                        <!-- Area -->
                        <td>
                                        <div>DTKV: (4m x 15m)</div>
                                        <div>DTQH: (4m x 15m)</div>

                            <!-- Title -->
                            <!-- Content -->
                            <!-- Advantages -->
                        </td>

                        <!-- PropertyType -->
                        <td>
Nhà phố                            4 lầu
                        </td>

                        <!-- Direction -->
                        <td>
                        </td>

                        <!-- Location -->
                        <td>
                            <span data-toggle="tooltip" title="1 lần rẽ, hẻm trước nhà rộng 4m">hẻm 4m, 1 lần rẽ</span>
                        </td>

                        <!-- ContactPhone -->
                        <td class="nowrap">
                                    <!-- PublishContact -->
                                    <!-- ContactPhone -->
    <div data-toggle="tooltip" title="090.373.6898 - Đức<div></div><div class=color-note></div>">090..</div>
                        </td>

                        <!-- UserInfo -->
                        <td class="nowrap">
                            <div data-toggle="tooltip">Tu Anh</div>
<div data-tooltip-content="" style="display:none">
    <div><em><strong>Nguồn gần nhất:</strong> Tu Anh - <strong>Sửa bởi:</strong> Tu Anh ngày 12/01/18</em></div>
    <div><em><strong>Nguồn đầu tiên:</strong> Tu Anh - <strong>Tạo bởi:</strong> Tu Anh ngày 12/01/18</em></div>
</div>

                        </td>

                        <!-- Date -->
                        <td>
                            <!-- Date -->
    <span>12/01/18</span>

                            <!-- AdsHighlight -->

                            <!-- AdsGoodDeal -->

                            <!-- AdsVIP -->
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