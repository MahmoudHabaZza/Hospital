<div class="modal fade" tabindex="-1" role="dialog" id="edit{{ $section->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('Dashboard/sections.edit_section') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            
            </div>
            <div class="modal-body">
                <form action="{{ route('Sections.update','test') }}" method="POST">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    <label>{{ trans('Dashboard/sections.edit_section') }}</label>
                    <input type="hidden" name="id" value="{{ $section->id }}">
                    <input type='text' name="name" value="{{ $section->name }}" class="form-control">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">{{ trans('Dashboard/sections.close') }}</button>
                    <button class='btn btn-primary' type="submit">{{ trans('Dashboard/sections.save_changes') }}</button>
                    
                </form>
                </div>
            </div>
        </div>
</div>