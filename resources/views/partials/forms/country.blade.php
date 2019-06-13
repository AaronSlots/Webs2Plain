<div class="form-group row">
    {{ Form::label('country', __('forms/attributes.country_select').":", ['class'=>'col-md-4 col-form-label text-md-right']) }}
    <div class="col-md-6">
        {{ Form::select('country_iso',Country::list(), '', array('class' => 'form-control', 'required'=>'required','placeholder'=>'--'.__('selector.country').'--')) }}
    </div>
</div>
