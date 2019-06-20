$(document).ready(function() {
    if (document.createElement('input').placeholder == undefined) {
        $('[placeholder]').focus(function() {
            if ($(this).val() == $(this).attr('placeholder')) {
                $(this).val('');
            }
        }).blur(function() {
            if ($(this).val() == '') {
                $(this).val($(this).attr('placeholder'));
            }
        }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                if ($(this).val() == $(this).attr('placeholder')) {
                    $(this).val('');
                }
            });
        });
    }
});