window.onload = function(){
    editor.document.designMode = 'on';
}

$(document).ready(function(){

    /** Bootstrap Tooltip **/
    $('[data-toggle="tooltip"]').tooltip()

    /** Bold **/
    $(".bold").on("click", function(){
        editor.document.execCommand('bold',false,null);
    });

    /** Italic **/
    $(".italic").on("click", function(){
        editor.document.execCommand('italic',false,null);
    });

    /** Underline **/
    $(".underline").on("click", function(){
        editor.document.execCommand('underline',false,null);
    });

    /** StrikeThrough **/
    $(".strikethrough").on("click", function(){
        editor.document.execCommand('strikeThrough',false,null);
    });

    /** Superscript **/
    $(".superscript").on("click", function(){
        editor.document.execCommand('superscript',false,null);
    });

    /** Subscript **/
    $(".subscript").on("click", function(){
        editor.document.execCommand('subscript',false,null);
    });

    /** Horizontal Rule **/
    $(".line").on("click", function(){
        editor.document.execCommand('inserthorizontalrule',false,null);
    });

    /** Paragraph **/
    $(".paragraph").on("click", function(){
        editor.document.execCommand('insertparagraph',false,null);
    });

    /** Left **/
    $(".left").on("click", function(){
        editor.document.execCommand('justifyLeft',false,null);
    });

    /** Center **/
    $(".center").on("click", function(){
        editor.document.execCommand('justifyCenter',false,null);
    });

    /** Right **/
    $(".right").on("click", function(){
        editor.document.execCommand('justifyRight',false,null);
    });

    /** Justify **/
    $(".justify").on("click", function(){
        editor.document.execCommand('justifyFull',false,null);
    });

    /** Ordered List **/
    $(".orderedlist").on("click", function(){
        editor.document.execCommand('insertOrderedList',false,null);
    });

    /** Unordered List **/
    $(".unorderedlist").on("click", function(){
        editor.document.execCommand('insertUnorderedList',false,null);
    });

    /** Undo **/
    $(".undo").on("click", function(){
        editor.document.execCommand('undo',false,null);
    });

    /** Redo **/
    $(".redo").on("click", function(){
        editor.document.execCommand('redo',false,null);
    });

    /** Eraser **/
    $(".eraser").on("click", function(){
        editor.document.execCommand('delete',false,null);
    });

    /** Font Name **/
    $(".fontname").on("click", function(){
        var font = $(this).attr('data-font');
        editor.document.execCommand('fontname',false,font);
    });

    /** Font Size **/
    $(".fontsize").on("click", function(){
        var size = $(this).attr('data-size');
        editor.document.execCommand('fontsize',false,size);
    });

    /** Link **/
    $(".link").on("click", function(){
        var link = $(".linkval").val();
        editor.document.execCommand('createlink',false,link);
    });

    /** Image **/
    $(".myimage").on("click", function(){
        var image = $(".imageval").val();
        editor.document.execCommand('insertImage',false,image);
    });

    /** Unlink **/
    $(".unlink").on("click", function(){
        editor.document.execCommand('unlink',false,null);
    });

    /** Font color **/
    $(".mycolor").on("click", function(){
        var color = $(this).attr('data-color');
        editor.document.execCommand('forecolor',false,color);
    });
    $(".custom-color").on("click", function(){
        var color = $(".wysiwyg-color-input").val();
        editor.document.execCommand('forecolor',false,color);
    });

    /** Background color **/
    $(".mybg").on("click", function(){
        var bgcolor = $(this).attr('data-bg');
        editor.document.execCommand('backcolor',false,bgcolor);
    });
    $(".custom-bg").on("click", function(){
        var bgcolor = $(".wysiwyg-bg-input").val();
        editor.document.execCommand('backcolor',false,bgcolor);
    });

    /** Form Submit **/
    $(".wysiwyg").on("submit", function(){
        var form = document.getElementsByClassName('wysiwyg')[0];
        form.elements['editor-data'].value = window.frames['editor'].document.body.innerHTML;
    });

    /** Submit Button **/
    $("button[type='submit'], input[type='submit']").on('click', function(){
        $('.wysiwyg').submit();
    });

});
