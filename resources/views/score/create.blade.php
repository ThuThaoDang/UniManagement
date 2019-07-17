@extends('layouts.app')


@section('title', 'Create Scores')

@push('css')

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
                            <strong>{{ $course->title }}</strong>
                        </div>
                        <form method="POST" action="{{ route('score.update', $course->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="table-responsive m-b-40">
                                <table id="table" class="table table-borderless table-data3" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Student Name</th>
                                            <th>Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($course->scores as $score)
                                        <tr>
                                            <td>{{ $score->student->id }}</td>
                                            <td>{{ $score->student->stud_name }}</td>
                                            <td><input type="number" name="scores[{{ $course->id }}][{{ $score->student->id }}]" value="{{ $score->score }}"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('score.index') }}" class="btn btn-secondary btn-sm">
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
