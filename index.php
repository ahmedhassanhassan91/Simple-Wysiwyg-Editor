<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>wysiwyg</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/> <!-- Poppins Google Font CDN -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/> <!-- Font Awesome 4.7.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/wysiwyg.css"/>
</head>
<body>
    <div class="container wrap">
        <!-- start wysiwyg -->
        <form action="data.php" method="POST" id="wysiwyg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default bold" data-toggle="tooltip" data-placement="bottom" title="bold"><span class="fa fa-bold"></span></button>
                        <button type="button" class="btn btn-default italic" data-toggle="tooltip" data-placement="bottom" title="italic"><span class="fa fa-italic"></span></button>
                        <button type="button" class="btn btn-default underline" data-toggle="tooltip" data-placement="bottom" title="underline"><span class="fa fa-underline"></span></button>
                        <button type="button" class="btn btn-default strikethrough" data-toggle="tooltip" data-placement="bottom" title="strikethrough"><span class="fa fa-strikethrough"></span></button>
                        <button type="button" class="btn btn-default superscript" data-toggle="tooltip" data-placement="bottom" title="superscript"><span class="fa fa-superscript"></span></button>
                        <button type="button" class="btn btn-default subscript" data-toggle="tooltip" data-placement="bottom" title="subscript"><span class="fa fa-subscript"></span></button>
                        <button type="button" class="btn btn-default line" data-toggle="tooltip" data-placement="bottom" title="line"><span class="fa fa-arrows-h"></span></button>
                        <button type="button" class="btn btn-default paragraph" data-toggle="tooltip" data-placement="bottom" title="paragraph"><span class="fa fa-paragraph"></span></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default left" data-toggle="tooltip" data-placement="bottom" title="text left"><span class="fa fa-align-left"></span></button>
                        <button type="button" class="btn btn-default center" data-toggle="tooltip" data-placement="bottom" title="text center"><span class="fa fa-align-center"></span></button>
                        <button type="button" class="btn btn-default right" data-toggle="tooltip" data-placement="bottom" title="text right"><span class="fa fa-align-right"></span></button>
                        <button type="button" class="btn btn-default justify" data-toggle="tooltip" data-placement="bottom" title="text justify"><span class="fa fa-align-justify"></span></button>
                        <button type="button" class="btn btn-default orderedlist" data-toggle="tooltip" data-placement="bottom" title="orderedlist"><span class="fa fa-list-ol"></span></button>
                        <button type="button" class="btn btn-default unorderedlist" data-toggle="tooltip" data-placement="bottom" title="unorderedlist"><span class="fa fa-list-ul"></span></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default undo" data-toggle="tooltip" data-placement="bottom" title="undo"><span class="fa fa-undo"></span></button>
                        <button type="button" class="btn btn-default redo" data-toggle="tooltip" data-placement="bottom" title="redo"><span class="fa fa-repeat"></span></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default delete" data-toggle="tooltip" data-placement="bottom" title="clear"><span class="fa fa-eraser"></span></button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#link"><span class="fa fa-link"></span></button>
                        <button type="button" class="btn btn-default unlink" data-toggle="tooltip" data-placement="bottom" title="unlink"><span class="fa fa-unlink"></span></button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#image"><span class="fa fa-image"></span></button>
                    </div>
                    <div class="dropdown font">
                        <button class="btn btn-default dropdown-toggle" type="button" id="font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <strong>Font</strong>
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="font">
                            <li data-font="'Poppins',sans-serif" style="font-family:'Poppins'"><a href="#">Poppins</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-font="tahoma" style="font-family:tahoma"><a href="#">Tahoma</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-font="monospace" style="font-family:monospace"><a href="#">Monospace</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-font="cursive" style="font-family:cursive"><a href="#">Cursive</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-font="fantasy" style="font-family:fantasy"><a href="#">Fantasy</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-font="sans-serif" style="font-family:sans-serif"><a href="#">Sans-serif</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-font="serif" style="font-family:serif"><a href="#">Serif</a></li>
                        </ul>
                    </div>
                    <div class="dropdown size">
                        <button class="btn btn-default dropdown-toggle" type="button" id="size" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <strong>Size</strong>
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="size">
                            <li data-size="1"><a href="#">8x</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-size="2"><a href="#">10x</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-size="3"><a href="#">12x</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-size="4"><a href="#">14x</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-size="5"><a href="#">16x</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-size="6"><a href="#">18x</a></li>
                            <li role="separator" class="divider"></li>
                            <li data-size="7"><a href="#">20x</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="color"><span class="glyphicon glyphicon-text-color"></span></button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu wysiwyg-colors">
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
                            <div class="input-group">
                                <input type="text" class="form-control wysiwyg-color-input" placeholder="#000000"/>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default custom-color" style="border:1px solid #d1d1d1;margin-left:-1px;">Add</button>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="text background"><span class="glyphicon glyphicon-text-background"></span></button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu wysiwyg-colors">
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
                            <div class="input-group">
                                <input type="text" class="form-control wysiwyg-bg-input" placeholder="#000000"/>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default custom-bg" style="border:1px solid #d1d1d1;margin-left:-1px;">Add</button>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <iframe name="wysiwyg_editor"></iframe>
                    <textarea name="wysiwyg_content"></textarea>
                </div>
            </div>
            <div class="wysiwyg_footer">
                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
        <!-- insert link modal -->
        <div class="modal fade" tabindex="-1" id="link" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="form-group">
                        <form>
                            <label for="recipient-name" class="control-label">To what URL should this link go ?</label>
                            <input type="text" class="form-control linkval" placeholder="http://www.example.com"/>
                            <button type="button" class="btn btn-default link" data-dismiss="modal"><span class="fa fa-link"></span>Insert Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- insert image modal -->
        <div class="modal fade" tabindex="-1" id="image" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="form-group">
                        <form>
                            <label for="recipient-name" class="control-label">insert your image link</label>
                            <input type="text" class="form-control imageval" placeholder="image link"/>
                            <button type="button" class="btn btn-default myimage" data-dismiss="modal"><span class="fa fa-image"></span>Insert Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wysiwyg -->

    </div>

    <div style="text-align:center;color:#FFF;font-size:13px;">
        <p>&copy; <?= date('Y') ?> Ahmed Hassan</p>
    </div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wysiwyg.js"></script>
</body>
</html>
