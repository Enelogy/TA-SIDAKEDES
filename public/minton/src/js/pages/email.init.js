/*
Template Name: Minton - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Email init
*/

$(document).ready(function(){
    // summernote
    $('#summernote-basic').summernote({
        placeholder: 'Write something...',
        height: 180,
        callbacks: {
            // fix broken checkbox on link modal
            onInit: function onInit(e) {
                var editor = $(e.editor);
                editor.find('.custom-control-description').addClass('custom-control-label').parent().removeAttr('for');
            }
        }
    });
});