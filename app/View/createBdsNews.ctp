<?php echo $this->Form->create('BDSNews', array('url' => array ('controller' => 'BDSNews', 'action' => 'doAddBDSNews'), 'role' => 'form', 'novalidate' => true)); ?>

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
                <h1>Thông tin nội bộ - Tạo BDS mới</h1>
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
                                if(isset($bdsNews['BDSNews']['USER_ID'])){
                                    if($bdsNews['BDSNews']['USER_ID'] == $customer['TCustomer']['USER_ID']){
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
                                    if(isset($bdsNews['BDSNews']['DANH_DAU_CODE'])){
                                        if($bdsNews['BDSNews']['DANH_DAU_CODE'] == $danhDau['DanhDau']['DANH_DAU_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $danhDau['DanhDau']['DANH_DAU_CODE'] ?>"><?php echo $danhDau['DanhDau']['DANH_DAU_NAME'] ?></option>
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
                                    if(isset($bdsNews['BDSNews']['TINH_TRANG_CODE'])){
                                        if($bdsNews['BDSNews']['TINH_TRANG_CODE'] == $tinhTrang['TinhTrang']['TINH_TRANG_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $tinhTrang['TinhTrang']['TINH_TRANG_CODE'] ?>"><?php echo $tinhTrang['TinhTrang']['TINH_TRANG_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>                        
                <label><input id="IsSoldByGroup" name="IsSoldByGroup" type="checkbox" value="true">Được bán bởi Group</label>
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
                                        
                                    </div>
                                    </div>
                                    <div class="image-control">
                                        <label><input type="checkbox" name="chkPublished" id="chkPublished-2166883" value="2166883"> Published</label>
                                        <label><input type="radio" name="radIsAvatar" id="radIsAvatar-2166883" value="2166883">Avatar</label>
                                    </div>
                                    <div>Xóa hình</div>
                                </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </article>
    <footer></footer>
</article>
            
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
                                    if(isset($bdsNews['BDSNews']['TYPE_NEWS_CODE'])){
                                        if($bdsNews['BDSNews']['TYPE_NEWS_CODE'] == $day['DayList']['DAY_LIST_CODE']){
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
                                    if(isset($bdsNews['BDSNews']['DAY_LIST_CODE'])){
                                        if($bdsNews['BDSNews']['DAY_LIST_CODE'] == $day['DayList']['DAY_LIST_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $day['DayList']['DAY_LIST_CODE'] ?>"><?php echo $day['DayList']['DAY_LIST_NAME'] ?></option>
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
                                    if(isset($bdsNews['BDSNews']['GROUP_CODE'])){
                                        if($bdsNews['BDSNews']['GROUP_CODE'] == $nhomBds['NhomBds']['GROUP_CODE']){
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
                        <?php
                            foreach ($dayList as $day){
                        ?>
                            <option 
                                <?php 
                                    if(isset($bdsNews['BDSNews']['DAY_LIST_CODE'])){
                                        if($bdsNews['BDSNews']['DAY_LIST_CODE'] == $day['DayList']['DAY_LIST_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $day['DayList']['DAY_LIST_CODE'] ?>"><?php echo $day['DayList']['DAY_LIST_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <input class="text date-box date-box-full hasDatepicker" id="AdsGoodDealExpirationDate" name="AdsGoodDealExpirationDate" type="text" value="">
                    <!-- AdsGoodDealRequest -->
                </div>
            </div>
            <!-- Type -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Loại BĐS:</label>
                <div class="controls">
                    <select class="select-box" id="TypeCssClass" name="TypeCssClass"><option value="">-- Vui lòng chọn --</option>
                        <?php
                            foreach ($loaiBdsList as $loaiBds){
                        ?>
                            <option 
                                <?php 
                                    if(isset($bdsNews['BDSNews']['LOAI_BDS_CODE'])){
                                        if($bdsNews['BDSNews']['LOAI_BDS_CODE'] == $loaiBds['LoaiBds']['LOAI_BDS_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $loaiBds['LoaiBds']['LOAI_BDS_CODE'] ?>"><?php echo $loaiBds['LoaiBds']['LOAI_BDS_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    

                        <!-- AdsVIP -->
                        <label class="w99">
                            <input checked="checked" id="AdsVIP" name="AdsVIP" type="checkbox" value="true"><input name="AdsVIP" type="hidden" value="false">BĐS đăng
                        </label>
                        <!-- Type VIP -->
                        <select id="AdsTypeVIPId" name="AdsTypeVIPId">
                            <?php
                                foreach ($tinVipList as $tinVip){
                            ?>
                                <option 
                                    <?php 
                                        if(isset($bdsNews['BDSNews']['TIN_VIP_CODE'])){
                                            if($bdsNews['BDSNews']['TIN_VIP_CODE'] == $tinVip['TinVip']['TIN_VIP_CODE']){
                                                echo 'selected="selected"';
                                            }
                                        }
                                    ?>
                                    value="<?php echo $tinVip['TinVip']['TIN_VIP_CODE'] ?>"><?php echo $tinVip['TinVip']['TIN_VIP_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                        <!-- AdsVIPExpirationDate -->
                        <select id="AddAdsVIPExpirationDate" name="AddAdsVIPExpirationDate">
                            <?php
                                foreach ($dayList as $day){
                            ?>
                                <option 
                                    <?php 
                                        if(isset($bdsNews['BDSNews']['TIN_VIP_DAY_LIST_CODE'])){
                                            if($bdsNews['BDSNews']['TIN_VIP_DAY_LIST_CODE'] == $day['DayList']['DAY_LIST_CODE']){
                                                echo 'selected="selected"';
                                            }
                                        }
                                    ?>
                                    value="<?php echo $day['DayList']['DAY_LIST_CODE'] ?>"><?php echo $day['DayList']['DAY_LIST_NAME'] ?></option>
                            <?php
                                }
                            ?>
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
                    <select><option value="">-- Vui lòng chọn --</option>
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
                    <select><option value="">-- Vui lòng chọn --</option>
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
                    <input class="text text-box" id="AddressNumber" maxlength="250" name="AddressNumber" type="text" value="">
                </div>
            </div>

            <!-- Street -->
            <div class="control-group">
                <label class="control-label">
                        <span class="text-error">*</span>
                    Đường / Phố:
                </label>
                <div class="controls">
                    <input class="text text-box" id="AddressNumber" maxlength="250" name="AddressNumber" type="text" value="">
                </div>
            </div>

            <!-- AddressNumber -->
            <div class="control-group">
                <label class="control-label">Số nhà / Số lô:</label>
                <div class="controls">
                    <input class="text text-box" id="AddressNumber" maxlength="250" name="AddressNumber" type="text" value="">
                    

                        <label><input id="PublishAddress" name="PublishAddress" tabindex="-1" type="checkbox" value="true"><input name="PublishAddress" type="hidden" value="false">Cho phép hiện địa chỉ</label>
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
                        <?php
                            foreach ($phapLyList as $phapLy){
                        ?>
                            <option 
                                <?php 
                                    if(isset($bdsNews['BDSNews']['PHAP_LY_CODE'])){
                                        if($bdsNews['BDSNews']['PHAP_LY_CODE'] == $phapLy['PhapLy']['PHAP_LY_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $phapLy['PhapLy']['PHAP_LY_CODE'] ?>"><?php echo $phapLy['PhapLy']['PHAP_LY_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    
                </div>
            </div>
            <!-- Direction -->
            <div class="control-group">
                <label class="control-label">Hướng của BĐS:</label>
                <div class="controls">
                    <select class="select-box" id="DirectionCssClass" name="DirectionCssClass"><option value="">-- Vui lòng chọn --</option>
                        <?php
                            foreach ($huongList as $huong){
                        ?>
                            <option 
                                <?php 
                                    if(isset($bdsNews['BDSNews']['HUONG_CODE'])){
                                        if($bdsNews['BDSNews']['HUONG_CODE'] == $huong['Huong']['HUONG_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $huong['Huong']['HUONG_CODE'] ?>"><?php echo $huong['Huong']['HUONG_NAME'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    
                </div>
            </div>
            <!-- Location -->
            <div class="control-group">
                <label class="control-label"><span class="text-error">*</span> Vị trí BĐS:</label>
                <div class="controls">
                    <select class="select-box" id="LocationCssClass" name="LocationCssClass"><option value="">-- Vui lòng chọn --</option>
                        <?php
                            foreach ($viTriList as $viTri){
                        ?>
                            <option 
                                <?php 
                                    if(isset($bdsNews['BDSNews']['VI_TRI_CODE'])){
                                        if($bdsNews['BDSNews']['VI_TRI_CODE'] == $viTri['ViTri']['VI_TRI_CODE']){
                                            echo 'selected="selected"';
                                        }
                                    }
                                ?>
                                value="<?php echo $viTri['ViTri']['VI_TRI_CODE'] ?>"><?php echo $viTri['ViTri']['VI_TRI_NAME'] ?></option>
                        <?php
                            }
                        ?>
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
                            <?php
                                foreach ($soTangList as $soTang){
                            ?>
                                <option 
                                    <?php 
                                        if(isset($bdsNews['BDSNews']['SO_TANG_CODE'])){
                                            if($bdsNews['BDSNews']['SO_TANG_CODE'] == $soTang['SoTang']['SO_TANG_CODE']){
                                                echo 'selected="selected"';
                                            }
                                        }
                                    ?>
                                    value="<?php echo $soTang['SoTang']['SO_TANG_CODE'] ?>"><?php echo $soTang['SoTang']['SO_TANG_NAME'] ?></option>
                            <?php
                                }
                            ?>
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
                        <select class="select-box" id="TypeConstructionId" name="TypeConstructionId"><option value="">-- Vui lòng chọn --</option>
                            <?php
                                foreach ($loaiCongTrinhList as $loaiCongTrinh){
                            ?>
                                <option 
                                    <?php 
                                        if(isset($bdsNews['BDSNews']['LOAI_CONG_TRINH_CODE'])){
                                            if($bdsNews['BDSNews']['LOAI_CONG_TRINH_CODE'] == $loaiCongTrinh['LoaiCongTrinh']['LOAI_CONG_TRINH_CODE']){
                                                echo 'selected="selected"';
                                            }
                                        }
                                    ?>
                                    value="<?php echo $loaiCongTrinh['LoaiCongTrinh']['LOAI_CONG_TRINH_CODE'] ?>"><?php echo $loaiCongTrinh['LoaiCongTrinh']['LOAI_CONG_TRINH_NAME'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                        
                    </div>
                </div>
                <!-- Interior -->
                <div class="control-group">
                    <label class="control-label">Chọn mức độ đầu tư xây dựng:</label>
                    <div class="controls">
                        <select class="select-box" id="InteriorId" name="InteriorId"><option value="">-- Vui lòng chọn --</option>
                            <?php
                                foreach ($mucXayList as $mucXay){
                            ?>
                                <option 
                                    <?php 
                                        if(isset($bdsNews['BDSNews']['MUC_XAY_CODE'])){
                                            if($bdsNews['BDSNews']['MUC_XAY_CODE'] == $mucXay['MucXay']['MUC_XAY_CODE']){
                                                echo 'selected="selected"';
                                            }
                                        }
                                    ?>
                                    value="<?php echo $mucXay['MucXay']['MUC_XAY_CODE'] ?>"><?php echo $mucXay['MucXay']['MUC_XAY_NAME'] ?></option>
                            <?php
                                }
                            ?>
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
    <footer></footer>
</article>

        <article class="content-item content-item-map">
        <!-- Ban Do -->
        <div class="row">
            <div class="col-xs-12 col-map">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="tabMaps">
                    <li><br></li>
                </ul>
            </div>
        </div>
        
    </article>
<br>
<br>
    <?php echo $this->Form->end(__('Submit'))?>
    <br>
	<br>