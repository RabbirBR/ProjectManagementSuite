@extends('layouts.app')

@section('customStyles')
{{-- <link href="/css/bootstrap-datepicker.min.css" rel="stylesheet"> --}}
<link href="/clockpicker-gh-pages/src/clockpicker.css" rel="stylesheet">

<link href="/jquery-ui/jquery-ui.min.css" rel="stylesheet">

<style type="text/css">
    .row{
        margin: 0px;
    }
    .control-label{
        padding-bottom: 7px;
    }
    .panel-body{
        min-height: 50px;
        max-height: 900px;
        padding: 0px;
    }
    .list-group-item{
        border-left: 0px;
        border-right: 0px;
        padding-right: 5px;
    }
    .list-group-item:first-child {
        border-top: 0px;
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
    }
    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom: 0px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
    }
    .project-owner{
        height: 50%;
        overflow: auto;
    }
    .project-owner>header{
        padding: 8px 5px 8px 15px;
        background-color: #eee;
    }
    .viewBtn{
        padding: 8px;
        border-radius: 0px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Project Lists

                    <div class="pull-right hidden-xs">
                        Project Details
                    </div>
                </div>

                <div class="panel-body">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" style="padding: 0px;box-shadow: 2px 0px 2px #eee; height: 100%; overflow: none;">
                        <div class="project-owner" id="created_task">
                            <header>
                                Your Projects
                                <div class="pull-right">
                                    <button type="button" style="background-color: Transparent; color: #428bca;border: none; cursor:pointer; outline:none;" data-toggle="modal" data-target="#addProjectModal">
                                        <i class="fa fa-lg fa-plus-square-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </header>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px; border-radius: 0px" id="myProjects">
                                <my-projects v-on:projectrequest="requestProject" :projects="myProjects"></my-projects>
                                {{-- 
                                <div class="list-group" style="margin-bottom: 0px">
                                    <a href="#" class="projectListItem list-group-item">
                                        Project - 1
                                    </a>
                                    <a href="#" class="projectListItem list-group-item">
                                        Project - 2
                                    </a>
                                </div>
                                --}}
                            </div>
                        </div>

                        <div class="project-owner" id="collaborating_task">
                            <header>Other Projects:</header>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px; border-radius: 0px" id="otherProjects">
                                <other-projects :projects="otherProjects"></other-projects>
                                {{--
                                <div class="list-group" style="margin-bottom: 0px">
                                    <a href="#" class="projectListItem list-group-item">
                                        Project - 1
                                    </a>
                                    <a href="#" class="projectListItem list-group-item">
                                        Project - 2
                                    </a>
                                </div> 
                                --}}
                            </div>
                        </div>
                    </div>                    

                    <div class="col-lg-10 col-md-9 col-sm-9 hidden-xs" style="padding: 0px; border-left: 1px solid #eee; min-height: 720px; overflow: auto;">
                        <div id="projectView">
                            <project-detail :tasks="tasks"></project-detail>
                            {{-- @include('pages.projectDetails') --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Project</h4>
            </div>

            <add-project v-on:projectadded="addProject"></add-project>
            <!-- <form class="form-horizontal" action="" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="name" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Project Name</label>
            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control input-sm" required name="name" value="">
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="start_date" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Start Date</label>
            
                            <div class="col-md-6">
                                <input id="start_date" type="text" class="form-control input-sm" required name="start_date" value="">
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="start_date" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Weekly Work Days</label>
            
                            <div class="col-md-6" style="padding-left: 40px">
                                <label class="checkbox"><input type="checkbox" name="sat" value="1">Saturday</label>
                                <label class="checkbox"><input type="checkbox" name="sun" value="1">Sunday</label>
                                <label class="checkbox"><input type="checkbox" name="mon" value="1">Monday</label>
                                <label class="checkbox"><input type="checkbox" name="tue" value="1">Tuesday</label>
                                <label class="checkbox"><input type="checkbox" name="wed" value="1">Wednesday</label>
                                <label class="checkbox"><input type="checkbox" name="thu" value="1">Thursday</label>
                                <label class="checkbox"><input type="checkbox" name="fri" value="1">Friday</label>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="work_hours" style="text-align: right; margin-bottom: 0px" class="col-md-4 control-label">Daily work Hours</label>
            
                            <div class="col-md-6">
                                <div class="input-group input-group-sm">
                                    <input id="work_hours" type="text" class="form-control input-sm" required name="work_hours" placeholder="Work hours" value="8">
                                    <span class="input-group-addon" id="basic-addon2">Hrs/Day</span>
                                </div>
                                {{-- <input id="work_hours" type="text" class="form-control input-sm" required name="work_hours" placeholder="Work hours" value=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-primary">Add Project to Dashboard</button>
                </div>
            </form> -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="/js/bootstrap-datepicker.min.js"></script> --}}

<script src="/jquery-ui/jquery-ui.min.js"></script>

<script src="/clockpicker-gh-pages/src/clockpicker.js"></script>
<script type="text/javascript">
    var startDate = new Date();

    $(document).ready(function(){        
        $("#start_date").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });

        $(".pick_time").clockpicker({
            autoclose: true
        });

        reloadProjects();
        reloadOtherProjects();
    });

    $('.list-group-item').click(function(){
        $('.list-group-item').not(this).removeClass('active');
        $(this).addClass('active');
    });
    $('.viewBtn').click(function(){
        $('.viewBtn').not(this).removeClass('active');
        $(this).addClass('active');

        var btn_id = $(this).attr('id');
        var view_id = "#"+btn_id+"View";
        /*console.log(view_id);*/

        $('.projectView').not(view_id).fadeOut(200);

        setTimeout(function(){
            $(view_id).slideDown(300);
        }, 250);
    });

    function reloadProjects(){
        console.log("Loading Projects");
    }

    function reloadOtherProjects(){
        console.log("Loading Other Projects");
    }
</script>
@endsection