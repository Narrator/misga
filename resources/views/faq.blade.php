@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Frequently Asked Questions</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">FAQ</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="faq-wrapper col-md-8 col-sm-7">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae lacinia nunc. Proin egestas imperdiet ante non fermentum. Duis sollicitudin lacinia massa ac sagittis. Pellentesque et elit erat. Sed quis sem consectetur, interdum nisi vel, eleifend leo. Quisque nunc libero, porta vel varius eget, dapibus in nisl. Cras fringilla eu sem a ultrices. Proin sit amet nunc eget nisl fringilla iaculis sed eu nulla. Ut malesuada, risus nec eleifend consequat, quam nulla sodales felis, sit amet iaculis leo leo egestas sapien. Duis tristique diam in lectus tempor, nec mattis ligula consequat. Aliquam eget mauris sit amet dui bibendum iaculis. Proin eu justo ut massa vulputate eleifend. Praesent mattis lorem orci, ac interdum sapien pretium sit amet.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-2">
                                            Donec sollicitudin, mauris ut sollicitudin porta?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Donec sollicitudin, mauris ut sollicitudin porta, nisi felis varius libero, quis vulputate dolor odio ac elit. Donec gravida, nisi at ornare pulvinar, nisl neque rhoncus arcu, vel malesuada neque magna et metus. Aenean lacinia ipsum consequat hendrerit condimentum. Vivamus quis nisi quis nisi dictum viverra. Cras dignissim eros at urna hendrerit interdum. In dictum, ligula laoreet consequat dignissim, velit sapien lacinia nunc, eleifend hendrerit massa nisl sed libero. Donec nulla dolor, pretium id ornare eget, adipiscing sit amet elit. Cras pharetra porta tincidunt. Nam ut convallis magna, vel iaculis lectus. Vivamus auctor a metus non semper. Ut ac ornare leo.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-3">
                                            Nullam eleifend neque eu egestas ultrices?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Nullam eleifend neque eu egestas ultrices. Duis sit amet nibh id metus ultrices porta. Sed elementum, ipsum sit amet lacinia facilisis, lectus elit scelerisque lectus, vel blandit odio arcu et diam. Etiam consequat rutrum porta. Sed sollicitudin dictum tortor quis vestibulum. Curabitur vitae est porttitor, convallis mi iaculis, venenatis neque. Duis et nulla et lorem commodo dictum. Praesent blandit est eget adipiscing rhoncus.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-4">
                                            Suspendisse mollis neque augue?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Aenean commodo, nunc in feugiat dictum, nibh nibh laoreet lectus, nec posuere velit nulla a ligula. Nullam non odio laoreet, rhoncus nibh eget, sollicitudin lorem. Nullam posuere semper magna vitae suscipit. Mauris vel elit eget elit facilisis euismod. Nunc sit amet purus pellentesque, dapibus enim non, tempus arcu. Etiam ornare egestas enim ac accumsan. Maecenas viverra tortor vitae suscipit volutpat. In gravida vehicula consequat. Vivamus ac suscipit tortor.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-5">
                                            Fusce rhoncus, arcu eget elementum pretium sem purus faucibus erat?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sodales odio et risus fringilla, quis fermentum tellus mollis. Sed massa libero, placerat nec eros a, ornare ultrices massa. Phasellus interdum, felis a euismod consequat, tellus odio iaculis quam, ut placerat justo erat ac lacus. Ut volutpat eros quis sagittis rutrum. Vestibulum id est eu elit malesuada facilisis. Ut tempor consequat magna id consectetur.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-6">
                                            Integer tempor neque vitae dictum ultrices?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Vestibulum dignissim mattis tellus, at bibendum nibh sollicitudin ut. Nam vitae lorem vel odio elementum viverra ut et dolor. Mauris vitae diam ultrices, viverra est eu, egestas mi. Aenean sed quam id lectus porta scelerisque. Nulla at ultricies lacus. Morbi ultrices elit eget vulputate sagittis. Curabitur porta nibh mattis neque suscipit commodo. Sed placerat vestibulum lacus sit amet varius. Integer tempor neque vitae dictum ultrices. Fusce ac ligula nisi. Nullam vulputate diam vitae odio venenatis malesuada. Sed libero risus, placerat ut urna sed, bibendum vulputate lacus.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-7">
                                            Pellentesque habitant morbi tristique?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Mauris eu faucibus sem, ac pharetra justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur blandit euismod ipsum, ac commodo eros tincidunt et. Aenean tincidunt vestibulum adipiscing. Ut eu enim velit. Ut lectus leo, interdum sodales nibh nec, dictum pulvinar nisl. In consequat fringilla turpis id porta. Cras eget lacus ac orci facilisis aliquam. Fusce a lobortis purus. Integer sed odio et ipsum interdum volutpat at nec nisl. Sed pulvinar ante orci, id tristique sapien cursus et. Nullam ut augue et magna ornare aliquam ut vulputate dui. Vivamus fringilla eu ipsum ut mattis. Nulla a varius velit. Phasellus at lectus ut felis posuere lacinia in id purus.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-8">
                                            Aenean tempus pulvinar tempor?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Mauris eu faucibus sem, ac pharetra justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur blandit euismod ipsum, ac commodo eros tincidunt et. Aenean tincidunt vestibulum adipiscing. Ut eu enim velit. Ut lectus leo, interdum sodales nibh nec, dictum pulvinar nisl. In consequat fringilla turpis id porta. Cras eget lacus ac orci facilisis aliquam. Fusce a lobortis purus. Integer sed odio et ipsum interdum volutpat at nec nisl. Sed pulvinar ante orci, id tristique sapien cursus et. Nullam ut augue et magna ornare aliquam ut vulputate dui. Vivamus fringilla eu ipsum ut mattis. Nulla a varius velit. Phasellus at lectus ut felis posuere lacinia in id purus.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-9">
                                            Quisque quam odio mattis in sem id?
                                            </a>
                                        </h4>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Mauris eu faucibus sem, ac pharetra justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur blandit euismod ipsum, ac commodo eros tincidunt et. Aenean tincidunt vestibulum adipiscing. Ut eu enim velit. Ut lectus leo, interdum sodales nibh nec, dictum pulvinar nisl. In consequat fringilla turpis id porta. Cras eget lacus ac orci facilisis aliquam. Fusce a lobortis purus. Integer sed odio et ipsum interdum volutpat at nec nisl. Sed pulvinar ante orci, id tristique sapien cursus et. Nullam ut augue et magna ornare aliquam ut vulputate dui. Vivamus fringilla eu ipsum ut mattis. Nulla a varius velit. Phasellus at lectus ut felis posuere lacinia in id purus.
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                            </div><!--//panel-group-->
                        </div><!--//faq-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Why MIS @ OSU?</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="https://spears.okstate.edu/mis-analytics/files/DSandAD_MA_Flier_16_v1.pdf"><i class="fa fa-download"></i>Download prospectus</a>
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
