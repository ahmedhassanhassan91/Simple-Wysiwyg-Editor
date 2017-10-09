window.onload = function(){
    wysiwyg_editor.document.designMode = 'on';
}

$(document).ready(function(){

    /** Bootstrap Tooltip **/
    $('[data-toggle="tooltip"]').tooltip()

    /** Bold **/
    $(".bold").on("click", function(){
        wysiwyg_editor.document.execCommand('bold',false,null);
    });

    /** Italic **/
    $(".italic").on("click", function(){
        wysiwyg_editor.document.execCommand('italic',false,null);
    });

    /** Underline **/
    $(".underline").on("click", function(){
        wysiwyg_editor.document.execCommand('underline',false,null);
    });

    /** StrikeThrough **/
    $(".strikethrough").on("click", function(){
        wysiwyg_editor.document.execCommand('strikeThrough',false,null);
    });

    /** Superscript **/
    $(".superscript").on("click", function(){
        wysiwyg_editor.document.execCommand('superscript',false,null);
    });

    /** Subscript **/
    $(".subscript").on("click", function(){
        wysiwyg_editor.document.execCommand('subscript',false,null);
    });

    /** Horizontal Rule **/
    $(".line").on("click", function(){
        wysiwyg_editor.document.execCommand('inserthorizontalrule',false,null);
    });

    /** Paragraph **/
    $(".paragraph").on("click", function(){
        wysiwyg_editor.document.execCommand('insertparagraph',false,null);
    });

    /** Left **/
    $(".left").on("click", function(){
        wysiwyg_editor.document.execCommand('justifyLeft',false,null);
    });

    /** Center **/
    $(".center").on("click", function(){
        wysiwyg_editor.document.execCommand('justifyCenter',false,null);
    });

    /** Right **/
    $(".right").on("click", function(){
        wysiwyg_editor.document.execCommand('justifyRight',false,null);
    });

    /** Justify **/
    $(".justify").on("click", function(){
        wysiwyg_editor.document.execCommand('justifyFull',false,null);
    });

    /** Ordered List **/
    $(".orderedlist").on("click", function(){
        wysiwyg_editor.document.execCommand('insertOrderedList',false,null);
    });

    /** Unordered List **/
    $(".unorderedlist").on("click", function(){
        wysiwyg_editor.document.execCommand('insertUnorderedList',false,null);
    });

    /** Undo **/
    $(".undo").on("click", function(){
        wysiwyg_editor.document.execCommand('undo',false,null);
    });

    /** Redo **/
    $(".redo").on("click", function(){
        wysiwyg_editor.document.execCommand('redo',false,null);
    });

    /** Delete **/
    $(".delete").on("click", function(){
        wysiwyg_editor.document.execCommand('delete',false,null);
    });

    /** Font Name **/
    $(".font ul li").on("click", function(){
        var font = $(this).attr('data-font');
        wysiwyg_editor.document.execCommand('fontname',false,font);
    });

    /** Font Size **/
    $(".size ul li").on("click", function(){
        var size = $(this).attr('data-size');
        wysiwyg_editor.document.execCommand('fontsize',false,size);
    });

    /** Link **/
    $(".link").on("click", function(){
        var link = $(".linkval").val();
        wysiwyg_editor.document.execCommand('createlink',false,link);
    });

    /** Image **/
    $(".myimage").on("click", function(){
        var image = $(".imageval").val();
        wysiwyg_editor.document.execCommand('insertImage',false,image);
    });

    /** Unlink **/
    $(".unlink").on("click", function(){
        wysiwyg_editor.document.execCommand('unlink',false,null);
    });

    /** Font color **/
    $(".mycolor").on("click", function(){
        var color = $(this).attr('data-color');
        wysiwyg_editor.document.execCommand('forecolor',false,color);
    });
    $(".custom-color").on("click", function(){
        var color = $(".wysiwyg-color-input").val();
        wysiwyg_editor.document.execCommand('forecolor',false,color);
    });

    /** Background color **/
    $(".mybg").on("click", function(){
        var bgcolor = $(this).attr('data-bg');
        wysiwyg_editor.document.execCommand('backcolor',false,bgcolor);
    });
    $(".custom-bg").on("click", function(){
        var bgcolor = $(".wysiwyg-bg-input").val();
        wysiwyg_editor.document.execCommand('backcolor',false,bgcolor);
    });

    /** Form Submit **/
    $("#wysiwyg").on("submit", function(){
        var form = document.getElementById('wysiwyg');
        form.elements['wysiwyg_content'].value = window.frames['wysiwyg_editor'].document.body.innerHTML;
    });

});
