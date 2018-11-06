<!-- Start Wysiwyg -->
<div class="row">

    <!-- Buttons -->
    <div class="col-12 wysiwyg-buttons">
        <!-- Bold -->
        <button type="button" class="btn btn-default bold" data-toggle="tooltip" data-placement="bottom" title="bold">
            <i class="fas fa-bold"></i>
        </button>
        <!-- Italic -->
        <button type="button" class="btn btn-default italic" data-toggle="tooltip" data-placement="bottom" title="italic">
            <i class="fas fa-italic"></i>
        </button>
        <!-- Underline -->
        <button type="button" class="btn btn-default underline" data-toggle="tooltip" data-placement="bottom" title="underline">
            <i class="fas fa-underline"></i>
        </button>
        <!-- Strikethrough -->
        <button type="button" class="btn btn-default strikethrough" data-toggle="tooltip" data-placement="bottom" title="strikethrough">
            <i class="fas fa-strikethrough"></i>
        </button>
        <!-- Superscript -->
        <button type="button" class="btn btn-default superscript" data-toggle="tooltip" data-placement="bottom" title="superscript">
            <i class="fas fa-superscript"></i>
        </button>
        <!-- Subscript -->
        <button type="button" class="btn btn-default subscript" data-toggle="tooltip" data-placement="bottom" title="subscript">
            <i class="fas fa-subscript"></i>
        </button>
        <!-- Horizontal Rule -->
        <button type="button" class="btn btn-default line" data-toggle="tooltip" data-placement="bottom" title="line">
            <i class="fas fa-minus"></i>
        </button>
        <!-- Paragraph -->
        <button type="button" class="btn btn-default paragraph" data-toggle="tooltip" data-placement="bottom" title="paragraph">
            <i class="fas fa-paragraph"></i>
        </button>
        <!-- Align Left -->
        <button type="button" class="btn btn-default left" data-toggle="tooltip" data-placement="bottom" title="align left">
            <i class="fas fa-align-left"></i>
        </button>
        <!-- Align Center -->
        <button type="button" class="btn btn-default center" data-toggle="tooltip" data-placement="bottom" title="align center">
            <i class="fas fa-align-center"></i>
        </button>
        <!-- Align Right -->
        <button type="button" class="btn btn-default right" data-toggle="tooltip" data-placement="bottom" title="align right">
            <i class="fas fa-align-right"></i>
        </button>
        <!-- Align Justify -->
        <button type="button" class="btn btn-default justify" data-toggle="tooltip" data-placement="bottom" title="align justify">
            <i class="fas fa-align-justify"></i>
        </button>
        <!-- Ordered List -->
        <button type="button" class="btn btn-default orderedlist" data-toggle="tooltip" data-placement="bottom" title="ordered list">
            <i class="fas fa-list-ol"></i>
        </button>
        <!-- Unordered List -->
        <button type="button" class="btn btn-default unorderedlist" data-toggle="tooltip" data-placement="bottom" title="unordered list">
            <i class="fas fa-list-ul"></i>
        </button>
        <!-- Undo -->
        <button type="button" class="btn btn-default undo" data-toggle="tooltip" data-placement="bottom" title="undo">
            <i class="fas fa-undo"></i>
        </button>
        <!-- Redo -->
        <button type="button" class="btn btn-default redo" data-toggle="tooltip" data-placement="bottom" title="redo">
            <i class="fas fa-redo"></i>
        </button>
        <!-- Eraser -->
        <button type="button" class="btn btn-default eraser" data-toggle="tooltip" data-placement="bottom" title="eraser">
            <i class="fas fa-eraser"></i>
        </button>
        <!-- Link -->
        <button type="button" type="button" class="btn btn-default" data-toggle="modal" data-target="#link-modal">
            <i class="fas fa-link" data-toggle="tooltip" data-placement="bottom" title="link"></i>
        </button>
        <!-- Unlink -->
        <button type="button" type="button" class="btn btn-default unlink" data-toggle="tooltip" data-placement="bottom" title="unlink">
            <i class="fas fa-unlink"></i>
        </button>
        <!-- Image -->
        <button type="button" type="button" class="btn btn-default" data-toggle="modal" data-target="#image-modal">
            <i class="far fa-image" data-toggle="tooltip" data-placement="bottom" title="image"></i>
        </button>
        <!-- Fonts -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="fonts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-font" data-toggle="tooltip" data-placement="bottom" title="text font"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="fonts">
                <li data-font="'Poppins',sans-serif" style="font-family:'Poppins'" class="fontname">
                    Poppins
                </li>
                <li data-font="tahoma" style="font-family:tahoma" class="fontname">
                    Tahoma
                </li>
                <li data-font="monospace" style="font-family:monospace" class="fontname">
                    Monospace
                </li>
                <li data-font="cursive" style="font-family:cursive" class="fontname">
                    Cursive
                </li>
                <li data-font="fantasy" style="font-family:fantasy" class="fontname">
                    Fantasy
                </li>
                <li data-font="sans-serif" style="font-family:sans-serif" class="fontname">
                    Sans-serif
                </li>
                <li data-font="serif" style="font-family:serif" class="fontname">
                    Serif
                </li>
            </div>
        </div>
        <!-- Sizes -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="sizes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-text-height" data-toggle="tooltip" data-placement="bottom" title="text size"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="sizes">
                <li data-size="1" class="fontsize">8x</li>
                <li data-size="2" class="fontsize">10x</li>
                <li data-size="3" class="fontsize">12x</li>
                <li data-size="4" class="fontsize">14x</li>
                <li data-size="5" class="fontsize">16x</li>
                <li data-size="6" class="fontsize">18x</li>
                <li data-size="7" class="fontsize">20x</li>
            </div>
        </div>
        <!-- Text Colors -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-palette" data-toggle="tooltip" data-placement="bottom" title="text color"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right wysiwyg-colors" aria-labelledby="color">
                <span class="mycolor" data-color="#000000" style="background-color:#000000;"></span>
                <span class="mycolor" data-color="#424242" style="background-color:#424242;"></span>
                <span class="mycolor" data-color="#636363" style="background-color:#636363;"></span>
                <span class="mycolor" data-color="#9C9C94" style="background-color:#9C9C94;"></span>
                <span class="mycolor" data-color="#CEC6CE" style="background-color:#CEC6CE;"></span>
                <span class="mycolor" data-color="#EFEFEF" style="background-color:#EFEFEF;"></span>
                <span class="mycolor" data-color="#F7F7F7" style="background-color:#F7F7F7;"></span>
                <span class="mycolor" data-color="#FFFFFF" style="background-color:#FFFFFF;"></span>
                <span class="mycolor" data-color="#FF0000" style="background-color:#FF0000;"></span>
                <span class="mycolor" data-color="#FF9C00" style="background-color:#FF9C00;"></span>
                <span class="mycolor" data-color="#FFFF00" style="background-color:#FFFF00;"></span>
                <span class="mycolor" data-color="#00FF00" style="background-color:#00FF00;"></span>
                <span class="mycolor" data-color="#00FFFF" style="background-color:#00FFFF;"></span>
                <span class="mycolor" data-color="#0000FF" style="background-color:#0000FF;"></span>
                <span class="mycolor" data-color="#9C00FF" style="background-color:#9C00FF;"></span>
                <span class="mycolor" data-color="#FF00FF" style="background-color:#FF00FF;"></span>
                <span class="mycolor" data-color="#F7C6CE" style="background-color:#F7C6CE;"></span>
                <span class="mycolor" data-color="#FFE7CE" style="background-color:#FFE7CE;"></span>
                <span class="mycolor" data-color="#FFEFC6" style="background-color:#FFEFC6;"></span>
                <span class="mycolor" data-color="#D6EFD6" style="background-color:#D6EFD6;"></span>
                <span class="mycolor" data-color="#CEDEE7" style="background-color:#CEDEE7;"></span>
                <span class="mycolor" data-color="#CEE7F7" style="background-color:#CEE7F7;"></span>
                <span class="mycolor" data-color="#D6D6E7" style="background-color:#D6D6E7;"></span>
                <span class="mycolor" data-color="#E7D6DE" style="background-color:#E7D6DE;"></span>
                <span class="mycolor" data-color="#E79C9C" style="background-color:#E79C9C;"></span>
                <span class="mycolor" data-color="#FFC69C" style="background-color:#FFC69C;"></span>
                <span class="mycolor" data-color="#FFE79C" style="background-color:#FFE79C;"></span>
                <span class="mycolor" data-color="#B5D6A5" style="background-color:#B5D6A5;"></span>
                <span class="mycolor" data-color="#A5C6CE" style="background-color:#A5C6CE;"></span>
                <span class="mycolor" data-color="#9CC6EF" style="background-color:#9CC6EF;"></span>
                <span class="mycolor" data-color="#B5A5D6" style="background-color:#B5A5D6;"></span>
                <span class="mycolor" data-color="#D6A5BD" style="background-color:#D6A5BD;"></span>
                <span class="mycolor" data-color="#E76363" style="background-color:#E76363;"></span>
                <span class="mycolor" data-color="#F7AD6B" style="background-color:#F7AD6B;"></span>
                <span class="mycolor" data-color="#FFD663" style="background-color:#FFD663;"></span>
                <span class="mycolor" data-color="#94BD7B" style="background-color:#94BD7B;"></span>
                <span class="mycolor" data-color="#73A5AD" style="background-color:#73A5AD;"></span>
                <span class="mycolor" data-color="#6BADDE" style="background-color:#6BADDE;"></span>
                <span class="mycolor" data-color="#8C7BC6" style="background-color:#8C7BC6;"></span>
                <span class="mycolor" data-color="#C67BA5" style="background-color:#C67BA5;"></span>
                <span class="mycolor" data-color="#CE0000" style="background-color:#CE0000;"></span>
                <span class="mycolor" data-color="#E79439" style="background-color:#E79439;"></span>
                <span class="mycolor" data-color="#EFC631" style="background-color:#EFC631;"></span>
                <span class="mycolor" data-color="#6BA54A" style="background-color:#6BA54A;"></span>
                <span class="mycolor" data-color="#4A7B8C" style="background-color:#4A7B8C;"></span>
                <span class="mycolor" data-color="#3984C6" style="background-color:#3984C6;"></span>
                <span class="mycolor" data-color="#634AA5" style="background-color:#634AA5;"></span>
                <span class="mycolor" data-color="#A54A7B" style="background-color:#A54A7B;"></span>
                <span class="mycolor" data-color="#9C0000" style="background-color:#9C0000;"></span>
                <span class="mycolor" data-color="#B56308" style="background-color:#B56308;"></span>
                <span class="mycolor" data-color="#BD9400" style="background-color:#BD9400;"></span>
                <span class="mycolor" data-color="#397B21" style="background-color:#397B21;"></span>
                <span class="mycolor" data-color="#104A5A" style="background-color:#104A5A;"></span>
                <span class="mycolor" data-color="#085294" style="background-color:#085294;"></span>
                <span class="mycolor" data-color="#311873" style="background-color:#311873;"></span>
                <span class="mycolor" data-color="#731842" style="background-color:#731842;"></span>
                <span class="mycolor" data-color="#630000" style="background-color:#630000;"></span>
                <span class="mycolor" data-color="#7B3900" style="background-color:#7B3900;"></span>
                <span class="mycolor" data-color="#846300" style="background-color:#846300;"></span>
                <span class="mycolor" data-color="#295218" style="background-color:#295218;"></span>
                <span class="mycolor" data-color="#083139" style="background-color:#083139;"></span>
                <span class="mycolor" data-color="#003163" style="background-color:#003163;"></span>
                <span class="mycolor" data-color="#21104A" style="background-color:#21104A;"></span>
                <span class="mycolor" data-color="#4A1031" style="background-color:#4A1031;"></span>
                <div class="mt-2">
                    <input type="text" class="form-control wysiwyg-color-input" placeholder="#000000"/>
                    <button type="button" class="btn btn-default btn-block custom-color mt-2" style="border:1px solid #d1d1d1;margin-left:-1px;">add color</button>
                </div>
            </div>
        </div>
        <!-- Text Background Colors -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="bgcolor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fill-drip" data-toggle="tooltip" data-placement="bottom" title="text backgroun color"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right wysiwyg-colors" aria-labelledby="bgcolor">
                <span class="mybg" data-bg="#000000" style="background-color:#000000;"></span>
                <span class="mybg" data-bg="#424242" style="background-color:#424242;"></span>
                <span class="mybg" data-bg="#636363" style="background-color:#636363;"></span>
                <span class="mybg" data-bg="#9C9C94" style="background-color:#9C9C94;"></span>
                <span class="mybg" data-bg="#CEC6CE" style="background-color:#CEC6CE;"></span>
                <span class="mybg" data-bg="#EFEFEF" style="background-color:#EFEFEF;"></span>
                <span class="mybg" data-bg="#F7F7F7" style="background-color:#F7F7F7;"></span>
                <span class="mybg" data-bg="#FFFFFF" style="background-color:#FFFFFF;"></span>
                <span class="mybg" data-bg="#FF0000" style="background-color:#FF0000;"></span>
                <span class="mybg" data-bg="#FF9C00" style="background-color:#FF9C00;"></span>
                <span class="mybg" data-bg="#FFFF00" style="background-color:#FFFF00;"></span>
                <span class="mybg" data-bg="#00FF00" style="background-color:#00FF00;"></span>
                <span class="mybg" data-bg="#00FFFF" style="background-color:#00FFFF;"></span>
                <span class="mybg" data-bg="#0000FF" style="background-color:#0000FF;"></span>
                <span class="mybg" data-bg="#9C00FF" style="background-color:#9C00FF;"></span>
                <span class="mybg" data-bg="#FF00FF" style="background-color:#FF00FF;"></span>
                <span class="mybg" data-bg="#F7C6CE" style="background-color:#F7C6CE;"></span>
                <span class="mybg" data-bg="#FFE7CE" style="background-color:#FFE7CE;"></span>
                <span class="mybg" data-bg="#FFEFC6" style="background-color:#FFEFC6;"></span>
                <span class="mybg" data-bg="#D6EFD6" style="background-color:#D6EFD6;"></span>
                <span class="mybg" data-bg="#CEDEE7" style="background-color:#CEDEE7;"></span>
                <span class="mybg" data-bg="#CEE7F7" style="background-color:#CEE7F7;"></span>
                <span class="mybg" data-bg="#D6D6E7" style="background-color:#D6D6E7;"></span>
                <span class="mybg" data-bg="#E7D6DE" style="background-color:#E7D6DE;"></span>
                <span class="mybg" data-bg="#E79C9C" style="background-color:#E79C9C;"></span>
                <span class="mybg" data-bg="#FFC69C" style="background-color:#FFC69C;"></span>
                <span class="mybg" data-bg="#FFE79C" style="background-color:#FFE79C;"></span>
                <span class="mybg" data-bg="#B5D6A5" style="background-color:#B5D6A5;"></span>
                <span class="mybg" data-bg="#A5C6CE" style="background-color:#A5C6CE;"></span>
                <span class="mybg" data-bg="#9CC6EF" style="background-color:#9CC6EF;"></span>
                <span class="mybg" data-bg="#B5A5D6" style="background-color:#B5A5D6;"></span>
                <span class="mybg" data-bg="#D6A5BD" style="background-color:#D6A5BD;"></span>
                <span class="mybg" data-bg="#E76363" style="background-color:#E76363;"></span>
                <span class="mybg" data-bg="#F7AD6B" style="background-color:#F7AD6B;"></span>
                <span class="mybg" data-bg="#FFD663" style="background-color:#FFD663;"></span>
                <span class="mybg" data-bg="#94BD7B" style="background-color:#94BD7B;"></span>
                <span class="mybg" data-bg="#73A5AD" style="background-color:#73A5AD;"></span>
                <span class="mybg" data-bg="#6BADDE" style="background-color:#6BADDE;"></span>
                <span class="mybg" data-bg="#8C7BC6" style="background-color:#8C7BC6;"></span>
                <span class="mybg" data-bg="#C67BA5" style="background-color:#C67BA5;"></span>
                <span class="mybg" data-bg="#CE0000" style="background-color:#CE0000;"></span>
                <span class="mybg" data-bg="#E79439" style="background-color:#E79439;"></span>
                <span class="mybg" data-bg="#EFC631" style="background-color:#EFC631;"></span>
                <span class="mybg" data-bg="#6BA54A" style="background-color:#6BA54A;"></span>
                <span class="mybg" data-bg="#4A7B8C" style="background-color:#4A7B8C;"></span>
                <span class="mybg" data-bg="#3984C6" style="background-color:#3984C6;"></span>
                <span class="mybg" data-bg="#634AA5" style="background-color:#634AA5;"></span>
                <span class="mybg" data-bg="#A54A7B" style="background-color:#A54A7B;"></span>
                <span class="mybg" data-bg="#9C0000" style="background-color:#9C0000;"></span>
                <span class="mybg" data-bg="#B56308" style="background-color:#B56308;"></span>
                <span class="mybg" data-bg="#BD9400" style="background-color:#BD9400;"></span>
                <span class="mybg" data-bg="#397B21" style="background-color:#397B21;"></span>
                <span class="mybg" data-bg="#104A5A" style="background-color:#104A5A;"></span>
                <span class="mybg" data-bg="#085294" style="background-color:#085294;"></span>
                <span class="mybg" data-bg="#311873" style="background-color:#311873;"></span>
                <span class="mybg" data-bg="#731842" style="background-color:#731842;"></span>
                <span class="mybg" data-bg="#630000" style="background-color:#630000;"></span>
                <span class="mybg" data-bg="#7B3900" style="background-color:#7B3900;"></span>
                <span class="mybg" data-bg="#846300" style="background-color:#846300;"></span>
                <span class="mybg" data-bg="#295218" style="background-color:#295218;"></span>
                <span class="mybg" data-bg="#083139" style="background-color:#083139;"></span>
                <span class="mybg" data-bg="#003163" style="background-color:#003163;"></span>
                <span class="mybg" data-bg="#21104A" style="background-color:#21104A;"></span>
                <span class="mybg" data-bg="#4A1031" style="background-color:#4A1031;"></span>
                <div class="mt-2">
                    <input type="text" class="form-control wysiwyg-bg-input" placeholder="#000000"/>
                    <button type="button" class="btn btn-default btn-block custom-bg mt-2" style="border:1px solid #d1d1d1;margin-left:-1px;">add color</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Content -->
    <div class="col-12 wysiwyg-content">
        <iframe name="editor"></iframe>
        <textarea name="editor-data"></textarea>
    </div>

    <!-- Link Modal -->
    <div class="modal fade" tabindex="-1" id="link-modal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-3">
                <form>
                    <label for="recipient-name" class="control-label">Insert URL ?</label>
                    <input type="text" class="form-control linkval" placeholder="http://www.example.com"/>
                    <br/>
                    <button type="button" class="btn btn-default link" data-dismiss="modal">Ok, Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" tabindex="-1" id="image-modal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-3">
                <form>
                    <label for="recipient-name" class="control-label">Insert Your Image Link</label>
                    <input type="text" class="form-control imageval" placeholder="link"/>
                    <br/>
                    <button type="button" class="btn btn-default myimage" data-dismiss="modal">Ok, Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>

    <button type="submit" name="submit" class="btn btn-default mt-3 submit-btn">Submit Data</button>

</div>
<!-- End Wysiwyg -->