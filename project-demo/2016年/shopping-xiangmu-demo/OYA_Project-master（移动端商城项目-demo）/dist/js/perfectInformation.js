$(document).ready(function(){var n=$("#sheng"),a=$(".sheng"),t=$("#shi"),o=$(".shi"),e=$("#qu"),l=$(".qu");$.getJSON("../json/country.json",function(a){$.each(a,function(a,o){$.each(o,function(a,o){var l=$("<option/>");l.attr({value:o.name}).html(o.name).appendTo(n),$(".sheng").on("blur",function(){var n=$(".sheng").val();o.name==n&&$.each(o.regions,function(n,a){var o=$("<option/>");o.attr({value:a.name}).html(a.name).appendTo(t),$(".shi").on("blur",function(){var n=$(".shi").val();a.name==n&&$.each(a.regions,function(n,a){var t=$("<option/>");t.attr({value:a.name}).html(a.name).appendTo(e)})})})})})})}),a.on("tap",function(){$(this).val(""),o.val(""),l.val(""),t.empty(),e.empty()}),o.on("tap",function(){$(this).val(""),l.val(""),e.empty()}),l.on("tap",function(){$(this).val("")});var i=$("#nickname"),v=$("#phone"),u=$(".tijiao"),r=$(".fullAddres");v.on("blur",function(){var n=/^[1][358][0-9]{9}$/;""==v.val()?v.attr("placeholder","这是必填字段"):n.test(v.val())||(v.attr("placeholder","请正确填写您的手机号码"),v.val(""))}),u.on("tap",function(){i.val(),v.val(),a.val(),o.val(),l.val(),r.val()})});