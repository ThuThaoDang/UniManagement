@extends('layouts.app')


@section('title', 'Edit Student')

@push('css')
<style>
    ul.ks-cboxtags li {
        display: inline;
    }

    ul.ks-cboxtags li label {
        display: inline-block;
        background-color: rgba(255, 255, 255, .9);
        border: 2px solid rgba(139, 139, 139, .3);
        color: #adadad;
        border-radius: 25px;
        white-space: nowrap;
        margin: 3px 0px;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        transition: all .2s;
    }

    ul.ks-cboxtags li label {
        padding: 8px 12px;
        cursor: pointer;
    }

    ul.ks-cboxtags li label::before {
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 12px;
        padding: 2px 6px 2px 2px;
        content: "\f067";
        transition: transform .3s ease-in-out;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
        content: "\f00c";
        transform: rotate(-360deg);
        transition: transform .3s ease-in-out;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label {
        border: 2px solid #1bdbf8;
        background-color: #12bbd4;
        color: #fff;
        transition: all .2s;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        display: absolute;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        position: absolute;
        opacity: 0;
    }

    ul.ks-cboxtags li input[type="checkbox"]:focus+label {
        border: 2px solid #e9a1ff;
    }
</style>
@endpush

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Danger</span>
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endforeach
                    </ul>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Student</strong>
                        </div>
                        <form method="POST" action="{{ route('student.update', $student->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="department" class=" form-control-label">Department</label>
                                    <div class="form-check ">
                                        <ul class="ks-cboxtags">
                                            @foreach ($departments as $department)
                                            <li>
                                                <input type="checkbox" id="department-{{ $department->id }}"
                                                    name="department" value="{{ $department->id }}"
                                                    class="form-check-input"
                                                    @if ($student->department_id == $department->id)
                                                        checked
                                                    @endif
                                                    >
                                                <label for="department-{{ $department->id }}">{{ $department->dept_name }}</label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="instructor" class=" form-control-label">Instructor</label>
                                    <div class="form-check ">
                                        <ul class="ks-cboxtags">
                                            @foreach ($instructors as $instructor)
                                            <li>
                                                <input type="checkbox" id="instructor-{{ $instructor->id }}"
                                                    name="instructor" value="{{ $instructor->id }}"
                                                    class="form-check-input"
                                                    @if ($student->instructor_id == $instructor->id)
                                                        checked
                                                    @endif
                                                    >
                                                <label for="instructor-{{ $instructor->id }}">{{ $instructor->inst_name }}</label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" id="name" value="{{ $student->stud_name }}" class="form-control"
                                        name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="tot_cred" class=" form-control-label">Tot_Cred</label>
                                    <input type="text" id="tot_cred" value="{{ $student->tot_cred }}"
                                        class="form-control" name="tot_cred" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('student.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-backward"></i> Back
                                </a>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-refresh"></i> Reset
                                </button>
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
