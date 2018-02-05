function checkPasswordStrength(t,e,n,r){$txt_strength_res=$("#"+n),$txt_confirm_res=$("#"+r);var i=0;return 0==t.length?($txt_strength_res.removeClass(),$txt_strength_res.html(""),void checkPasswordConfirm(t,e,r)):(t.length>7&&(i+=1),t.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)&&(i+=1),t.match(/([a-zA-Z])/)&&t.match(/([0-9])/)&&(i+=1),t.match(/([!,%,&,@,#,$,^,*,?,_,~])/)&&(i+=1),t.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)&&(i+=1),2>i?($txt_strength_res.removeClass(),$txt_strength_res.addClass("weak"),$txt_strength_res.html("弱い")):2==i?($txt_strength_res.removeClass(),$txt_strength_res.addClass("good"),$txt_strength_res.html("普通")):($txt_strength_res.removeClass(),$txt_strength_res.addClass("strong"),$txt_strength_res.html("強い")),void checkPasswordConfirm(t,e,r))}function checkPasswordConfirm(t,e,n){return $txt_confirm_res=$("#"+n),0==e.length?($txt_confirm_res.removeClass(),void $txt_confirm_res.html("")):void(t==e?($txt_confirm_res.removeClass(),$txt_confirm_res.addClass("ok"),$txt_confirm_res.html("OK")):($txt_confirm_res.removeClass(),$txt_confirm_res.addClass("ng"),$txt_confirm_res.html("NG")))}function input_number_only(t,e,n,r,i){var a=e.which;if(8==a||9==a||13==a||46==a||a>=35&&40>=a)return!0;if(a>=112&&123>=a)return!0;if(e.ctrlKey&&(67==a||86==a||88==a||90==a))return!0;if(r&&!n){if(189===a||109===a){var s=t.val(),o=t.caret();return-1===s.indexOf("-")&&0===o?!0:!1}if(110==a||190==a){var s=t.val();return-1===s.indexOf(".")&&s.length>0?!0:!1}if(""!==i&&"undefined"!=typeof i&&(a>=48&&57>=a||a>=96&&105>=a)){var s=t.val();if(s.length>0){var l=s.indexOf("."),o=t.caret();if(-1!==l&&o>l){var c=s.split(".");return c[1].length<i?!0:!1}}}}if(!(a>=48&&57>=a||a>=96&&105>=a))return!1;var s=t.val(),u=t.attr("maxlength");return s.length>=u?!1:!0}function add_comma(t){t+="",x=t.split("."),x1=x[0],x2=x.length>1?"."+x[1]:"";for(var e=/(\d+)(\d{3})/;e.test(x1);)x1=x1.replace(e,"$1,$2");return x1+x2}function remove_comma(t){return t.split(",").join("")}function setCount(t,e,n){t>e&&(t=e),n.html(e-t)}function validateEmail(t){if(""===t||null===t)return!0;var e=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gim;return e.test(t)?!0:!1}function fnc_goback(){location.href="/url/goback"}function disableScreen(t){t?($("#view_content input").attr("disabled","disabled"),$("#view_content select").attr("disabled","disabled"),$("#view_content textarea").attr("disabled","disabled"),$("#view_content a").addClass("disabled")):($("#view_content input").removeAttr("disabled"),$("#view_content select").removeAttr("disabled"),$("#view_content textarea").removeAttr("disabled"),$("#view_content a").removeClass("disabled"))}function disableArea(t,e){e?($("#"+t+" input").attr("disabled","disabled"),$("#"+t+" select").attr("disabled","disabled"),$("#"+t+" textarea").attr("disabled","disabled"),$("#"+t+" a").addClass("disabled")):($("#"+t+" input").removeAttr("disabled"),$("#"+t+" select").removeAttr("disabled"),$("#"+t+" textarea").removeAttr("disabled"),$("#"+t+" a").removeClass("disabled"))}function remove_page_errors(){$("#id_div_flash").empty(),$("#id_div_error").empty()}function firstUppercase(t){return firstChar=t.substring(0,1),firstChar=firstChar.toUpperCase(),tail=t.substring(1),firstChar+tail}var ajaxRunning=!1,MESSAGE_ERROR_AJAX="AJAX error.";jQuery.fn.numericOnly=function(t){return this.each(function(){$(this).keydown(function(e){return input_number_only($(this),e,!1,!0,t)}),$(this).blur(function(){if(isNaN($(this).val()))return $(this).val("");var t=add_comma($(this).val());return $(this).val(t)}),$(this).focus(function(t){t.preventDefault();var e=remove_comma($(this).val());return $(this).val(e)})})},jQuery.fn.integerOnly=function(){return this.each(function(){$(this).keydown(function(t){return input_number_only($(this),t,!1,!0)}),$(this).blur(function(){if(isNaN($(this).val()))return $(this).val("");var t=add_comma($(this).val());return $(this).val(t)}),$(this).focus(function(){var t=remove_comma($(this).val());return $(this).val(t)})})},jQuery.fn.unsignedIntegerOnly=function(){return this.each(function(){$(this).keydown(function(t){return input_number_only($(this),t,!0,!1)}),$(this).blur(function(){if(isNaN($(this).val()))return $(this).val("");var t=add_comma($(this).val());return $(this).val(t)}),$(this).focus(function(){var t=remove_comma($(this).val());return $(this).val(t)})})},function(t){t.fn.caret=function(t){var e=this[0],n="true"===e.contentEditable;if(0==arguments.length){if(window.getSelection){if(n){e.focus();var r=window.getSelection().getRangeAt(0),i=r.cloneRange();return i.selectNodeContents(e),i.setEnd(r.endContainer,r.endOffset),i.toString().length}return e.selectionStart}if(document.selection){if(e.focus(),n){var r=document.selection.createRange(),i=document.body.createTextRange();return i.moveToElementText(e),i.setEndPoint("EndToEnd",r),i.text.length}var t=0,a=e.createTextRange(),i=document.selection.createRange().duplicate(),s=i.getBookmark();for(a.moveToBookmark(s);0!==a.moveStart("character",-1);)t++;return t}return e.selectionStart?e.selectionStart:0}if(-1==t&&(t=this[n?"text":"val"]().length),window.getSelection)n?(e.focus(),window.getSelection().collapse(e.firstChild,t)):e.setSelectionRange(t,t);else if(document.body.createTextRange)if(n){var a=document.body.createTextRange();a.moveToElementText(e),a.moveStart("character",t),a.collapse(!0),a.select()}else{var a=e.createTextRange();a.move("character",t),a.select()}return n||e.focus(),t}}(jQuery),jQuery.fn.limiter=function(t,e){return this.each(function(){$(this).keyup(function(){return setCount($(this).val().length,t,e)}),$(this).focusin(function(){return setCount($(this).val().length,t,e)})})},jQuery.fn.limiter=function(t,e){return this.each(function(){$(this).keyup(function(){return setCount($(this).val().length,t,e)}),$(this).focusin(function(){return setCount($(this).val().length,t,e)})})};