<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">User</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">Dashboard </span>
{{--                        <span class="badge rounded-pill bg-info ms-auto mr-3">3</span>--}}
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span class="hide-menu">User Management </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('permission-categories.index') }}" class="sidebar-link">
                                <i class="mdi mdi-view-quilt"></i>
                                <span class="hide-menu"> Permission Category </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('permissions.index') }}" class="sidebar-link">
                                <i class="mdi mdi-view-parallel"></i>
                                <span class="hide-menu"> Permissions </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('roles.index') }}" class="sidebar-link">
                                <i class="mdi mdi-account-key"></i>
                                <span class="hide-menu"> Role </span>
                            </a>
                        </li>
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="sidebar-type-fullsidebar.html.htm" class="sidebar-link">--}}
{{--                                <i class="mdi mdi-account"></i>--}}
{{--                                <span class="hide-menu"> User </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-crop-square"></i>
                        <span class="hide-menu">Gas Stations </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('employee-roles.index') }}" class="sidebar-link">
                                <i class="mdi mdi-format-align-left"></i>
                                <span class="hide-menu"> Employee Role </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('gas-station-employees.index') }}" class="sidebar-link">
                                <i class="mdi mdi-format-align-right"></i>
                                <span class="hide-menu"> Gas Station Employee </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('gas-stations.index') }}" class="sidebar-link">
                                <i class="mdi mdi-format-float-left"></i>
                                <span class="hide-menu"> Gas Station </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('newsletters.index') }}" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu">Newsletter</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home-sliders.index') }}" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Home Page Slider</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-calendar.html.htm" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Calendar</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-taskboard.html.htm" aria-expanded="false"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu">Taskboard</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-contacts.html.htm" aria-expanded="false"><i class="mdi mdi-account-box"></i><span class="hide-menu">Contact</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-notes.html.htm" aria-expanded="false"><i class="mdi mdi-arrange-bring-forward"></i><span class="hide-menu">Notes</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-invoice.html.htm" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Invoice</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-inbox"></i>
                        <span class="hide-menu">Inbox </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="inbox-email.html.htm" class="sidebar-link">
                                <i class="mdi mdi-email"></i>
                                <span class="hide-menu"> Email </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="inbox-email-detail.html.htm" class="sidebar-link">
                                <i class="mdi mdi-email-alert"></i>
                                <span class="hide-menu"> Email Detail </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="inbox-email-compose.html.htm" class="sidebar-link">
                                <i class="mdi mdi-email-secure"></i>
                                <span class="hide-menu"> Email Compose </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-book-variant"></i>
                        <span class="hide-menu">Ticket </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="ticket-list.html.htm" class="sidebar-link">
                                <i class="mdi mdi-book-multiple"></i>
                                <span class="hide-menu"> Ticket List </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ticket-detail.html.htm" class="sidebar-link">
                                <i class="mdi mdi-book-plus"></i>
                                <span class="hide-menu"> Ticket Detail </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">UI</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-list-alt"></i>
                        <span class="hide-menu">Ui Elements </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="ui-accordian.html.htm" class="sidebar-link"><i class="mdi mdi-box-shadow"></i><span class="hide-menu"> Accordian</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-badge.html.htm" class="sidebar-link"><i class="mdi mdi-application"></i><span class="hide-menu"> Badge</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-buttons.html.htm" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu"> Buttons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-modals.html.htm" class="sidebar-link">
                                <i class="mdi mdi-tablet"></i>
                                <span class="hide-menu"> Modals</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-tab.html.htm" class="sidebar-link">
                                <i class="mdi mdi-sort-variant"></i>
                                <span class="hide-menu"> Tab</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-tooltip-popover.html.htm" class="sidebar-link">
                                <i class="mdi mdi-image-filter-vintage"></i>
                                <span class="hide-menu"> Tooltip &amp; Popover</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-notification.html.htm" class="sidebar-link">
                                <i class="mdi mdi-message-bulleted"></i>
                                <span class="hide-menu"> Notification</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-progressbar.html.htm" class="sidebar-link">
                                <i class="mdi mdi-poll"></i>
                                <span class="hide-menu"> Progressbar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-typography.html.htm" class="sidebar-link">
                                <i class="mdi mdi-format-line-spacing"></i>
                                <span class="hide-menu"> Typography</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-bootstrap.html.htm" class="sidebar-link">
                                <i class="mdi mdi-bootstrap"></i>
                                <span class="hide-menu"> Bootstrap Ui</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-breadcrumb.html.htm" class="sidebar-link">
                                <i class="mdi mdi-equal"></i>
                                <span class="hide-menu"> Breadcrumb</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-offcanvas.html.htm" class="sidebar-link">
                                <i class="mdi mdi-content-copy"></i>
                                <span class="hide-menu"> Offcanvas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-lists.html.htm" class="sidebar-link">
                                <i class="mdi mdi-file-video"></i>
                                <span class="hide-menu"> Lists</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-grid.html.htm" class="sidebar-link">
                                <i class="mdi mdi-view-module"></i>
                                <span class="hide-menu"> Grid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-carousel.html.htm" class="sidebar-link">
                                <i class="mdi mdi-view-carousel"></i>
                                <span class="hide-menu"> Carousel</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-scrollspy.html.htm" class="sidebar-link">
                                <i class="mdi mdi-crop-free"></i>
                                <span class="hide-menu"> Scrollspy</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-spinner.html.htm" class="sidebar-link">
                                <i class="mdi mdi-application"></i>
                                <span class="hide-menu"> Spinner</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-toasts.html.htm" class="sidebar-link">
                                <i class="mdi mdi-apple-safari"></i>
                                <span class="hide-menu"> Toasts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span class="hide-menu">Cards</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="ui-cards.html.htm" class="sidebar-link">
                                <i class="mdi mdi-layers"></i>
                                <span class="hide-menu"> Basic Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-customs.html.htm" class="sidebar-link">
                                <i class="mdi mdi-credit-card-scan"></i>
                                <span class="hide-menu">Custom Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-weather.html.htm" class="sidebar-link">
                                <i class="mdi mdi-weather-fog"></i>
                                <span class="hide-menu">Weather Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-card-draggable.html.htm" class="sidebar-link">
                                <i class="mdi mdi-bandcamp"></i>
                                <span class="hide-menu">Draggable Cards</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-image-filter-tilt-shift"></i>
                        <span class="hide-menu">Components</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="component-sweetalert.html.htm" class="sidebar-link">
                                <i class="mdi mdi-layers"></i>
                                <span class="hide-menu"> Sweet Alert</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-nestable.html.htm" class="sidebar-link">
                                <i class="mdi mdi-credit-card-scan"></i>
                                <span class="hide-menu">Nestable</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-noui-slider.html.htm" class="sidebar-link">
                                <i class="mdi mdi-weather-fog"></i>
                                <span class="hide-menu">Noui slider</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-rating.html.htm" class="sidebar-link">
                                <i class="mdi mdi-bandcamp"></i>
                                <span class="hide-menu">Rating</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="component-toastr.html.htm" class="sidebar-link">
                                <i class="mdi mdi-poll"></i>
                                <span class="hide-menu">Toastr</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-widgets"></i>
                        <span class="hide-menu">Widgets </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="widgets-feeds.html.htm" class="sidebar-link"><i class="mdi mdi-account-box"></i><span class="hide-menu"> Feed Widgets </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-apps.html.htm" class="sidebar-link">
                                <i class="mdi mdi-comment-processing-outline"></i>
                                <span class="hide-menu"> Apps Widgets </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-data.html.htm" class="sidebar-link">
                                <i class="mdi mdi-calendar"></i>
                                <span class="hide-menu"> Data Widgets </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="widgets-charts.html.htm" class="sidebar-link">
                                <i class="mdi mdi-bulletin-board"></i>
                                <span class="hide-menu"> Charts Widgets</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Forms</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-collage"></i>
                        <span class="hide-menu">Form Elements</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-inputs.html.htm" class="sidebar-link">
                                <i class="mdi mdi-priority-low"></i>
                                <span class="hide-menu"> Forms Input</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-input-groups.html.htm" class="sidebar-link">
                                <i class="mdi mdi-rounded-corner"></i>
                                <span class="hide-menu"> Input Groups</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-input-grid.html.htm" class="sidebar-link">
                                <i class="mdi mdi-select-all"></i>
                                <span class="hide-menu"> Input Grid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-checkbox-radio.html.htm" class="sidebar-link">
                                <i class="mdi mdi-shape-plus"></i>
                                <span class="hide-menu"> Checkboxes &amp; Radios</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-bootstrap-touchspin.html.htm" class="sidebar-link">
                                <i class="mdi mdi-switch"></i>
                                <span class="hide-menu"> Bootstrap Touchspin</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-bootstrap-switch.html.htm" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch-off"></i>
                                <span class="hide-menu"> Bootstrap Switch</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-select2.html.htm" class="sidebar-link">
                                <i class="mdi mdi-relative-scale"></i>
                                <span class="hide-menu"> Select2</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-dual-listbox.html.htm" class="sidebar-link">
                                <i class="mdi mdi-tab-unselected"></i>
                                <span class="hide-menu"> Dual Listbox</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">Form Layouts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-basic.html.htm" class="sidebar-link">
                                <i class="mdi mdi-vector-difference-ba"></i>
                                <span class="hide-menu"> Basic Forms</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-horizontal.html.htm" class="sidebar-link">
                                <i class="mdi mdi-file-document-box"></i>
                                <span class="hide-menu"> Form Horizontal</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-actions.html.htm" class="sidebar-link">
                                <i class="mdi mdi-code-greater-than"></i>
                                <span class="hide-menu"> Form Actions</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-row-separator.html.htm" class="sidebar-link">
                                <i class="mdi mdi-code-equal"></i>
                                <span class="hide-menu"> Row Separator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-bordered.html.htm" class="sidebar-link">
                                <i class="mdi mdi-flip-to-front"></i>
                                <span class="hide-menu"> Form Bordered</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-striped-row.html.htm" class="sidebar-link">
                                <i class="mdi mdi-content-duplicate"></i>
                                <span class="hide-menu"> Striped Rows</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-detail.html.htm" class="sidebar-link">
                                <i class="mdi mdi-cards-outline"></i>
                                <span class="hide-menu"> Form Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-code-equal"></i>
                        <span class="hide-menu">Form Addons</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-paginator.html.htm" class="sidebar-link">
                                <i class="mdi mdi-export"></i>
                                <span class="hide-menu"> Paginator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-img-cropper.html.htm" class="sidebar-link">
                                <i class="mdi mdi-crop"></i>
                                <span class="hide-menu"> Image Cropper</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-dropzone.html.htm" class="sidebar-link">
                                <i class="mdi mdi-crosshairs-gps"></i>
                                <span class="hide-menu"> Dropzone</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-mask.html.htm" class="sidebar-link">
                                <i class="mdi mdi-box-shadow"></i>
                                <span class="hide-menu"> Form Mask</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-typeahead.html.htm" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu"> Form Typehead</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-custom-switch.html.htm" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch-off"></i>
                                <span class="hide-menu"> Custom Switch</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-alert-box"></i>
                        <span class="hide-menu">Form Validation</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-bootstrap-validation.html.htm" class="sidebar-link">
                                <i class="mdi mdi-credit-card-scan"></i>
                                <span class="hide-menu"> Bootstrap Validation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-custom-validation.html.htm" class="sidebar-link">
                                <i class="mdi mdi-credit-card-plus"></i>
                                <span class="hide-menu"> Custom Validation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-pencil-box-outline"></i>
                        <span class="hide-menu">Form Pickers</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-picker-colorpicker.html.htm" class="sidebar-link">
                                <i class="mdi mdi-calendar-plus"></i>
                                <span class="hide-menu"> Form Colorpicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-picker-datetimepicker.html.htm" class="sidebar-link">
                                <i class="mdi mdi-calendar-clock"></i>
                                <span class="hide-menu"> Form Datetimepicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-picker-bootstrap-rangepicker.html.htm" class="sidebar-link">
                                <i class="mdi mdi-calendar-range"></i>
                                <span class="hide-menu"> Form Bootstrap Rangepicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-picker-bootstrap-datepicker.html.htm" class="sidebar-link">
                                <i class="mdi mdi-calendar-check"></i>
                                <span class="hide-menu"> Form Bootstrap Datepicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-picker-material-datepicker.html.htm" class="sidebar-link">
                                <i class="mdi mdi-calendar-text"></i>
                                <span class="hide-menu"> Form Material Datepicker</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-dns"></i>
                        <span class="hide-menu">Form Editor</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="form-editor-ckeditor.html.htm" class="sidebar-link">
                                <i class="mdi mdi-drawing"></i>
                                <span class="hide-menu">Ck Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-editor-quill.html.htm" class="sidebar-link">
                                <i class="mdi mdi-drupal"></i>
                                <span class="hide-menu">Quill Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-editor-summernote.html.htm" class="sidebar-link">
                                <i class="mdi mdi-brightness-6"></i>
                                <span class="hide-menu">Summernote Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form-editor-tinymce.html.htm" class="sidebar-link">
                                <i class="mdi mdi-bowling"></i>
                                <span class="hide-menu">Tinymce Edtor</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-wizard.html.htm" aria-expanded="false">
                        <i class="mdi mdi-cube-send"></i>
                        <span class="hide-menu">Form Wizard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-repeater.html.htm" aria-expanded="false">
                        <i class="mdi mdi-creation"></i>
                        <span class="hide-menu">Form Repeater</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Tables</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-border-none"></i>
                        <span class="hide-menu">Bootstrap Tables</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="table-basic.html.htm" class="sidebar-link">
                                <i class="mdi mdi-border-all"></i>
                                <span class="hide-menu">Basic Table </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-dark-basic.html.htm" class="sidebar-link">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Dark Basic Table </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-sizing.html.htm" class="sidebar-link">
                                <i class="mdi mdi-border-outside"></i>
                                <span class="hide-menu">Sizing Table </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-layout-coloured.html.htm" class="sidebar-link">
                                <i class="mdi mdi-border-bottom"></i>
                                <span class="hide-menu">Coloured Table Layout</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-border-inside"></i>
                        <span class="hide-menu">Datatables</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="table-datatable-basic.html.htm" class="sidebar-link">
                                <i class="mdi mdi-border-vertical"></i>
                                <span class="hide-menu"> Basic Initialisation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-datatable-api.html.htm" class="sidebar-link">
                                <i class="mdi mdi-blur-linear"></i>
                                <span class="hide-menu"> API</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="table-datatable-advanced.html.htm" class="sidebar-link">
                                <i class="mdi mdi-border-style"></i>
                                <span class="hide-menu"> Advanced Initialisation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html.htm" aria-expanded="false">
                        <i class="mdi mdi-border-top"></i>
                        <span class="hide-menu">Table Jsgrid</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html.htm" aria-expanded="false">
                        <i class="mdi mdi-border-style"></i>
                        <span class="hide-menu">Table Responsive</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html.htm" aria-expanded="false">
                        <i class="mdi mdi-tab-unselected"></i>
                        <span class="hide-menu">Table Footable</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Charts</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-morris.html.htm" aria-expanded="false">
                        <i class="mdi mdi-image-filter-tilt-shift"></i>
                        <span class="hide-menu"> Morris Chart</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chart-js.html.htm" aria-expanded="false">
                        <i class="mdi mdi-svg"></i>
                        <span class="hide-menu">Chartjs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-sparkline.html.htm" aria-expanded="false">
                        <i class="mdi mdi-chart-histogram"></i>
                        <span class="hide-menu">Sparkline Chart</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chartist.html.htm" aria-expanded="false">
                        <i class="mdi mdi-blur"></i>
                        <span class="hide-menu">Chartist Chart</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-blur-radial"></i><span class="hide-menu">Apex Charts</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="chart-apex-line.html.htm" class="sidebar-link"><i class="mdi mdi-chart-line"></i>
                                <span class="hide-menu">Line Chart</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-apex-area.html.htm" class="sidebar-link"><i class="mdi mdi-chart-areaspline"></i>
                                <span class="hide-menu">Area Chart</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-apex-bar.html.htm" class="sidebar-link"><i class="mdi mdi-chart-gantt"></i>
                                <span class="hide-menu">Bar Chart</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-apex-pie.html.htm" class="sidebar-link"><i class="mdi mdi-chart-pie"></i>
                                <span class="hide-menu">Pie Chart</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-apex-radial.html.htm" class="sidebar-link"><i class="mdi mdi-chart-arc"></i>
                                <span class="hide-menu">Radial Chart</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-apex-radar.html.htm" class="sidebar-link"><i class="mdi mdi-hexagon-outline"></i>
                                <span class="hide-menu">Radar Chart</span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-chemical-weapon"></i>
                        <span class="hide-menu">C3 Charts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="chart-c3-axis.html.htm" class="sidebar-link">
                                <i class="mdi mdi-arrange-bring-to-front"></i>
                                <span class="hide-menu">Axis Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-c3-bar.html.htm" class="sidebar-link">
                                <i class="mdi mdi-arrange-send-to-back"></i>
                                <span class="hide-menu">Bar Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-c3-data.html.htm" class="sidebar-link">
                                <i class="mdi mdi-backup-restore"></i>
                                <span class="hide-menu">Data Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-c3-line.html.htm" class="sidebar-link">
                                <i class="mdi mdi-backburger"></i>
                                <span class="hide-menu">Line Chart</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-chart-areaspline"></i>
                        <span class="hide-menu">Echarts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="chart-echart-basic.html.htm" class="sidebar-link">
                                <i class="mdi mdi-chart-line"></i>
                                <span class="hide-menu">Basic Charts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-echart-bar.html.htm" class="sidebar-link">
                                <i class="mdi mdi-chart-scatterplot-hexbin"></i>
                                <span class="hide-menu">Bar Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="chart-echart-pie-doughnut.html.htm" class="sidebar-link">
                                <i class="mdi mdi-chart-pie"></i>
                                <span class="hide-menu">Pie &amp; Doughnut Chart</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Sample Pages</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-cart-outline"></i>
                        <span class="hide-menu">Ecommerce Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="eco-products.html.htm" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-products-cart.html.htm" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu">Products Cart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-products-edit.html.htm" class="sidebar-link">
                                <i class="mdi mdi-cart-plus"></i>
                                <span class="hide-menu">Products Edit</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-products-detail.html.htm" class="sidebar-link">
                                <i class="mdi mdi-camera-burst"></i>
                                <span class="hide-menu">Product Details</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-products-orders.html.htm" class="sidebar-link">
                                <i class="mdi mdi-chart-pie"></i>
                                <span class="hide-menu">Product Orders</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="eco-products-checkout.html.htm" class="sidebar-link">
                                <i class="mdi mdi-clipboard-check"></i>
                                <span class="hide-menu">Products Checkout</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-file"></i>
                        <span class="hide-menu">Sample Pages </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="starter-kit.html.htm" class="sidebar-link">
                                <i class="mdi mdi-crop-free"></i>
                                <span class="hide-menu">Starter Kit</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-animation.html.htm" class="sidebar-link">
                                <i class="mdi mdi-debug-step-over"></i>
                                <span class="hide-menu">Animation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-search-result.html.htm" class="sidebar-link">
                                <i class="mdi mdi-search-web"></i>
                                <span class="hide-menu">Search Result</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-gallery.html.htm" class="sidebar-link">
                                <i class="mdi mdi-camera-iris"></i>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-treeview.html.htm" class="sidebar-link">
                                <i class="mdi mdi-file-tree"></i>
                                <span class="hide-menu">Treeview</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-block-ui.html.htm" class="sidebar-link">
                                <i class="mdi mdi-codepen"></i>
                                <span class="hide-menu">Block UI</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-session-timeout.html.htm" class="sidebar-link">
                                <i class="mdi mdi-timer-off"></i>
                                <span class="hide-menu">Session Timeout</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-session-idle-timeout.html.htm" class="sidebar-link">
                                <i class="mdi mdi-timer-sand-empty"></i>
                                <span class="hide-menu">Session Idle Timeout</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-utility-classes.html.htm" class="sidebar-link">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Helper Classes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-maintenance.html.htm" class="sidebar-link">
                                <i class="mdi mdi-camera-iris"></i>
                                <span class="hide-menu">Maintenance Page</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-circle"></i>
                        <span class="hide-menu">Authentication</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="authentication-login1.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-key"></i>
                                <span class="hide-menu"> Login </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-login2.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-key"></i>
                                <span class="hide-menu"> Login 2 </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-login3.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-key"></i>
                                <span class="hide-menu"> Login 3 </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-register1.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-plus"></i>
                                <span class="hide-menu"> Register</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-register2.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-plus"></i>
                                <span class="hide-menu"> Register 2</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-lockscreen.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-off"></i>
                                <span class="hide-menu"> Lockscreen</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-recover-password.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-convert"></i>
                                <span class="hide-menu"> Recover password</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="ui-user-card.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-box"></i>
                                <span class="hide-menu"> User Card </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-profile.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu"> User Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="ui-user-contacts.html.htm" class="sidebar-link">
                                <i class="mdi mdi-account-star-variant"></i>
                                <span class="hide-menu"> User Contact</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-ungroup"></i>
                        <span class="hide-menu">Invoice</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="pages-invoice.html.htm" class="sidebar-link">
                                <i class="mdi mdi-vector-triangle"></i>
                                <span class="hide-menu"> Invoice Layout </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="pages-invoice-list.html.htm" class="sidebar-link">
                                <i class="mdi mdi-vector-rectangle"></i>
                                <span class="hide-menu"> Invoice List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-map"></i>
                        <span class="hide-menu">Maps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="map-google.html.htm" class="sidebar-link">
                                <i class="mdi mdi-google-maps"></i>
                                <span class="hide-menu"> Google Map </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="map-vector.html.htm" class="sidebar-link">
                                <i class="mdi mdi-map-marker-radius"></i>
                                <span class="hide-menu"> Vector Map</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-face"></i>
                        <span class="hide-menu">Icons</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="icon-feather.html.htm" class="sidebar-link">
                                <i class="mdi mdi-feather"></i>
                                <span class="hide-menu"> Feather Icons </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="icon-fontawesome.html.htm" class="sidebar-link">
                                <i class="mdi mdi-emoticon-cool"></i>
                                <span class="hide-menu"> Fontawesome Icons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="icon-bootstrap.html.htm" class="sidebar-link">
                                <i class="mdi mdi-emoticon"></i>
                                <span class="hide-menu"> Bootstrap Icons </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="icon-remix.html.htm" class="sidebar-link">
                                <i class="mdi mdi-emoticon-cool"></i>
                                <span class="hide-menu"> Remix Icons</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-apple-safari"></i>
                        <span class="hide-menu">Timeline</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="timeline-center.html.htm" class="sidebar-link">
                                <i class="mdi mdi-clock-fast"></i>
                                <span class="hide-menu"> Center Timeline </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="timeline-horizontal.html.htm" class="sidebar-link">
                                <i class="mdi mdi-clock-end"></i>
                                <span class="hide-menu"> Horizontal Timeline</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="timeline-left.html.htm" class="sidebar-link">
                                <i class="mdi mdi-clock-in"></i>
                                <span class="hide-menu"> Left Timeline</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="timeline-right.html.htm" class="sidebar-link">
                                <i class="mdi mdi-clock-start"></i>
                                <span class="hide-menu"> Right Timeline</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-email-open-outline"></i>
                        <span class="hide-menu">Email Template</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="email-templete-alert.html.htm" class="sidebar-link">
                                <i class="mdi mdi-message-alert"></i>
                                <span class="hide-menu"> Alert </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="email-templete-basic.html.htm" class="sidebar-link">
                                <i class="mdi mdi-message-bulleted"></i>
                                <span class="hide-menu"> Basic</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="email-templete-billing.html.htm" class="sidebar-link">
                                <i class="mdi mdi-message-draw"></i>
                                <span class="hide-menu"> Billing</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="email-templete-password-reset.html.htm" class="sidebar-link">
                                <i class="mdi mdi-message-bulleted-off"></i>
                                <span class="hide-menu"> Password-Reset</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-alert-box"></i>
                        <span class="hide-menu">Error Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="error-400.html.htm" class="sidebar-link">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu"> Error 400 </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="error-403.html.htm" class="sidebar-link">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu"> Error 403</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="error-404.html.htm" class="sidebar-link">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu"> Error 404</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="error-500.html.htm" class="sidebar-link">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu"> Error 500</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="error-503.html.htm" class="sidebar-link">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu"> Error 503</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-notification-clear-all"></i>
                        <span class="hide-menu">Multi level dd</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <i class="mdi mdi-octagram"></i>
                                <span class="hide-menu"> item 1.1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <i class="mdi mdi-octagram"></i>
                                <span class="hide-menu"> item 1.2</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-playlist-plus"></i>
                                <span class="hide-menu">Menu 1.3</span>
                            </a>
                            <ul aria-expanded="false" class="collapse second-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.3.1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.3.2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.3.3</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.3.4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                                <i class="mdi mdi-playlist-check"></i>
                                <span class="hide-menu"> item 1.4</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Extra</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../docs/documentation.html" aria-expanded="false">
                        <i class="mdi mdi-content-paste"></i>
                        <span class="hide-menu">Documentation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html.htm" aria-expanded="false">
                        <i class="mdi mdi-directions"></i>
                        <span class="hide-menu">Log Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
