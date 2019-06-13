<div class="form-group row">
    {{ Form::label('member', __('forms/attributes.member_select').":", ['class'=>'col-md-4 col-form-label text-md-right']) }}
    <div class="col-md-6">
        {{ Form::select('member',$contacts,'',array('class' => 'form-control', 'required'=>'required','placeholder'=>'--'.__('selector.member').'--')) }}
    </div>
</div>
