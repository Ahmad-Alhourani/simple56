<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $test2->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
       

                {{ $test2->name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.l_name'))->class('col-md-2 form-control-label')->for('l_name') }}
            <div class="col-md-10">
       

                {{ $test2->l_name }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
       

                {{ $test2->email }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.des'))->class('col-md-2 form-control-label')->for('des') }}
            <div class="col-md-10">
       

                {{ $test2->des }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.sms'))->class('col-md-2 form-control-label')->for('sms') }}
            <div class="col-md-10">
       

                {{ $test2->sms }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->