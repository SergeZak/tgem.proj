@extends('layouts.admin_app')

@section('title')
    List Features
@endsection

@section('content')
    <!-- widget grid -->
    <section id="widget-grid" class="">

        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
                    <!-- widget options:
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"

								-->

                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Features</h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width:20%;">Feature Name (used as title)</th>
                                    <th style="width:10%;">Icon</th>
                                    <th>Feature Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($features as $f)
                                        <tr>
                                            <td>{{ $f->name }}</td>
                                            <td><i class="fa {{ $f->icon }}"></i></td>
                                            <td>{{ $f->text }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- WIDGET END -->

        </div>
        <!-- end row -->

    </section>
    <!-- end widget grid -->
@endsection