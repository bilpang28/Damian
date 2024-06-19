@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') UI Kit @endslot
            @slot('li_3') Popover & Tooltips @endslot
            @slot('title') Popover & Tooltips @endslot
        @endcomponent

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popovers Example</h4>
                                <p class="text-muted mb-0">Add small overlay content, like those found in iOS, to any element for housing secondary information.</p>
                            </div><!--end card-header-->
                            <div class="card-body button-items">
                                <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on top
                                    </button>

                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on right
                                    </button>

                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on bottom
                                    </button>

                                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                    Popover on left
                                    </button>

                                    <a tabindex="0" class="btn btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bootstrap Tooltips</h4>
                                <p class="text-muted mb-0">Hover over the links below to see tooltips:</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                    Tooltip on top
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                                    Tooltip on right
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                                    Tooltip on bottom
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                                    Tooltip on left
                                </button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Placement</h4>
                                <p class="text-muted mb-0">The default tippy tooltip looks like this when given no options. It has a nifty backdrop filling animation!</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-placement="top">Top</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-placement="bottom">Bottom</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-placement="left">Left</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-placement="right">Right</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-placement="top-start">Top-Start</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-placement="top-end">Top-End</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Arrows</h4>
                                <p class="text-muted mb-0">Arrows point toward the reference element.
                                    There are two different types of arrows: sharp and round.
                                    You can transform the proportion and scale of the arrows any way you like.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-arrow="true" data-tippy-animation="fade">Default</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-arrow="true" data-tippy-arrowType="round" data-tippy-animation="fade">Round</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-arrow="true" data-tippy-arrowTransform="scaleX(1.5)" data-tippy-animation="fade">Wide</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-arrow="true" data-tippy-arrowTransform="scaleX(0.75)" data-tippy-animation="fade">Skinny</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-arrow="true" data-tippy-arrowTransform="scale(0.75)" data-tippy-animation="fade">Small</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-arrow="true" data-tippy-arrowTransform="scale(1.35)" data-tippy-animation="fade">Large</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Interactivity</h4>
                                <p class="text-muted mb-0">Tooltips can be interactive, meaning they won't hide when you hover over or click on them.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-interactive="true">Interactive (hover)</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-interactive="true" data-tippy-trigger="click">Interactive (click)</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Animations</h4>
                                <p class="text-muted mb-0">Tooltips can have different types of animations.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="shift-away" data-tippy-arrow="true">Shift away</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="shift-toward" data-tippy-arrow="true">Shift toward</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="fade" data-tippy-arrow="true">Fade</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="scale" data-tippy-arrow="true">Scale</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="perspective" data-tippy-arrow="true">Perspective</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="shift-away" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (shift-away)</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="shift-toward" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (shift-toward)</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="scale" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (scale)</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-animation="perspective" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (perspective)</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Duration</h4>
                                <p class="text-muted mb-0">A tippy can have different transition durations.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-duration="0">0ms</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-duration="200">200ms</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-duration="1000">1000ms</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-duration="[500, 200]">[500ms, 200ms]</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">HTML</h4>
                                <p class="text-muted mb-0">Tooltips can contain HTML, allowing you to craft awesome interactive popovers.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" id="myElement" data-tippy-interactive="true" data-tippy-theme="light rounded" data-tippy-arrow="true" data-tippy-size="large" data-tippy-arrowTransform="scale(2)" data-tippy-animation="fade" data-tippy-distance="15" data-tippy-interactiveBorder="20" data-local>HTML Templates</button>
                                <div id="feature__html" data-template>
                                    <div style="padding:20px"><img width="50" src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" />
                                        <h5>Look! The Dastone logo is inside a <strong>Dastone</strong>.</h5>
                                        <button class="btn btn-sm btn-primary tippy-btn" data-close>Close</button>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Themes</h4>
                                <p class="text-muted mb-0">A tippy can have any kind of theme you want! Creating a custom theme is a breeze.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="See-through!" data-tippy-theme="translucent">Translucent</button>
                                <button class="btn btn-outline-primary tippy-btn" title="Nice n&#39; light" data-tippy-theme="light" data-tippy-arrow="true">Light</button>
                                <button class="btn btn-outline-primary tippy-btn" title="Awesome colors!" data-tippy-theme="gradient">Gradient</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Misc</h4>
                                <p class="text-muted mb-0">Tippy has a ton of features, and it's constantly improving.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button class="btn btn-outline-primary tippy-btn" title="How cool&#39;s this?!" data-tippy-followCursor="true" data-tippy-arrow="true" data-tippy-animation="fade">Follow cursor</button>
                                <button class="btn btn-outline-primary tippy-btn" title="You&#39;ll need a touch device for this one." data-tippy-touchHold="true">Touch &amp; Hold</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m hugging the tooltip!" data-tippy-distance="0" data-tippy-animation="fade">Distance</button>
                                <button class="btn btn-outline-primary tippy-btn" title="10px x-axis, 50px y-axis offset" data-tippy-offset="10, 50">Offset</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-size="small">Small</button>
                                <button class="btn btn-outline-primary tippy-btn" title="I&#39;m a Tippy tooltip!" data-tippy-size="large">Large</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div>

@endsection
@section('script')
    <script src="assets/plugins/tippy/tippy.all.min.js"></script>
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        tippy('.tippy-btn');
        tippy('#myElement', {
            html: document.querySelector('#feature__html'),
            arrow: true,
            animation: 'fade'
        });
    </script>
@endsection
