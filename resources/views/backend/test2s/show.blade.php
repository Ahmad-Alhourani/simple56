@extends ('backend.layouts.app')

@section ('title', __('labels.backend.test2s.management') . ' | ' . __('labels.backend.test2s.view'))

@section('breadcrumb-links')
@include('backend.test2s.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.test2s.management') }}
                        <small class="text-muted">{{ __('labels.backend.test2s.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.test2s.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.test2s.content.created_at') }}:</strong> {{ $test2->updated_at->timezone(get_user_timezone()) }} ({{ $test2->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.test2s.content.last_updated') }}:</strong> {{ $test2->created_at->timezone(get_user_timezone()) }} ({{$test2->updated_at->diffForHumans() }})--}}
                        @if ($test2->trashed())
                            <strong>{{ __('labels.backend.test2s.content.deleted_at') }}:</strong> $test2->deleted_at->timezone(get_user_timezone())  ($test2->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection