$(document).ready(function() {
    
    jQuery(function () {
        var classFontSize = new Array();
        var txtFontSize = new Array();
        var nameClassFont = new Array();
        
        // nameClassFont.push('body');
        nameClassFont.push('.-fsize-xs');
        nameClassFont.push('.-fsize-sm');
        nameClassFont.push('.-fsize-ssm');
        nameClassFont.push('.-fsize-md');
        nameClassFont.push('.-fsize-lg');
        nameClassFont.push('.-fsize-xl');
        nameClassFont.push('.navbar-nav .nav-link');
        nameClassFont.push('.whead .title');
        nameClassFont.push('.whead .title.-sm');
        nameClassFont.push('.whead .desc');
        nameClassFont.push('.btn');

        for (var i = 0; i < nameClassFont.length; i++) {
            classFontSize.push(nameClassFont[i]);
            txtFontSize.push(parseInt($(nameClassFont[i]).css('font-size')));
        }

        $('#fontSizeSmall').click(function () {
            for (var i = 0; i < classFontSize.length; i++) {
                $(classFontSize[i]).css("font-size", txtFontSize[i] + "px");
            }
            $(this).addClass('active');
            $('#fontSizeMedium').removeClass('active');
            $('#fontSizeLarge').removeClass('active');
            $('.overflow-line-1').trunk8({
                lines: 1,
                tooltip: false
            });
            $('.overflow-line-2').trunk8({
                lines: 2,
                tooltip: false
            });
            $('.overflow-line-3').trunk8({
                lines: 3,
                tooltip: false
            });
            $('.overflow-line-4').trunk8({
                lines: 4,
                tooltip: false
            });
        });

        $('#fontSizeMedium').click(function () {
            for (var i = 0; i < classFontSize.length; i++) {
                $(classFontSize[i]).css("font-size", (txtFontSize[i] + parseInt(1)) + "px");
            }
            $(this).addClass('active');
            $('#fontSizeSmall').removeClass('active');
            $('#fontSizeLarge').removeClass('active');
            $('.overflow-line-1').trunk8({
                lines: 1,
                tooltip: false
            });
            $('.overflow-line-2').trunk8({
                lines: 2,
                tooltip: false
            });
            $('.overflow-line-3').trunk8({
                lines: 3,
                tooltip: false
            });
            $('.overflow-line-4').trunk8({
                lines: 4,
                tooltip: false
            });
        });

        $('#fontSizeLarge').click(function () {
            for (var i = 0; i < classFontSize.length; i++) {
                $(classFontSize[i]).css("font-size", (txtFontSize[i] + parseInt(2)) + "px");
            }
            $(this).addClass('active');
            $('#fontSizeSmall').removeClass('active');
            $('#fontSizeMedium').removeClass('active');
            $('.overflow-line-1').trunk8({
                lines: 1,
                tooltip: false
            });
            $('.overflow-line-2').trunk8({
                lines: 2,
                tooltip: false
            });
            $('.overflow-line-3').trunk8({
                lines: 3,
                tooltip: false
            });
            $('.overflow-line-4').trunk8({
                lines: 4,
                tooltip: false
            });
        });
    });

});